<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\BaseData;
use App\Http\Controllers\Midtrans\Config;
use App\Http\Controllers\Midtrans\Transaction;
use App\Http\Controllers\Midtrans\ApiRequestor;
use App\Http\Controllers\Midtrans\SnapApiRequestor;
use App\Http\Controllers\Midtrans\Notification;
use App\Http\Controllers\Midtrans\CoreApi;
use App\Http\Controllers\Midtrans\Snap;
use App\Http\Controllers\Midtrans\Sanitizer;
use App\Http\Controllers\Controller;

class ApiMidtransController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    //
    public function __construct()
    {
        $this->BaseData = new BaseData();
    }

    public function getSnapToken(Request $request)
    {
        $input  = $request->only("id", "id_user", "kodePesanan", "nama_orderan", "jml_orderan", "nama_pemesan", "email_pemesan", "alamat", "pembelian", "tanggal_pesan", "total", "proses", "konfirmasi"); //Specify Request

        $validation = Validator::make($input, [
            "id" => "required|integer",
        ]);

        $getFood = $this->BaseData->SelectByFoodName();
        $getDrink = $this->BaseData->SelectByDrinkName();
        $getDessert = $this->BaseData->SelectByDessertName();

        $WrapperFood = [];
        $WrapperDrink = [];
        $WrapperDessert = [];

        foreach ($getFood as $item) {
            $WrapperFood[] = $item->nama;
        }

        foreach ($getDrink as $item) {
            $WrapperDrink[] = $item->nama;
        }

        foreach ($getDessert as $item) {
            $WrapperDessert[] = $item->nama;
        }

        $NamaPesanan = $request->nama;
        $JmlPesanan = $request->jml;

        $PisahNama = explode(",", $NamaPesanan);
        $PisahJml = explode(",", $JmlPesanan);

        for ($index = 0; $index < count($PisahNama) - 1; $index++) {

            if (in_array($PisahNama[$index], $WrapperFood)) {
                $validData = $this->BaseData->ValidateFood($PisahJml[$index], $PisahNama[$index]);
                if ($validData != null) {
                    $data = [
                        'status' => false,
                        'massage' => "For the $validData->nama order, the portion you ordered is not sufficient, please order it tomorrow"
                    ];
                    return json_encode($data);
                    die;
                }
            } else if (in_array($PisahNama[$index], $WrapperDrink)) {
                $validData = $this->BaseData->ValidateDrink($PisahJml[$index], $PisahNama[$index]);
                if ($validData != null) {
                    $data = [
                        'status' => false,
                        'massage' => "For the $validData->nama order, the portion you ordered is not sufficient, please order it tomorrow"
                    ];
                    return json_encode($data);
                    die;
                }
            } else if (in_array($PisahNama[$index], $WrapperDessert)) {
                $validData = $this->BaseData->ValidateDessert($PisahJml[$index], $PisahNama[$index]);
                if ($validData != null) {
                    $data = [
                        'status' => false,
                        'massage' => "For the $validData->nama order, the portion you ordered is not sufficient, please order it tomorrow"
                    ];
                    return json_encode($data);
                    die;
                }
            }
        }

        if ($validation->fails()) {
            return response($validation->errors()->toJson(), 400);
        }
        $user = $this->BaseData->getPesananById($request->input("id"));
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => "Id Pesanan Tidak Dapat Ditemukan."
            ], 400);
        }

        $item_list = array();
        $amount = 0;
        // CLIENT ID MIDTRANS TARO SINI
        Config::$serverKey = 'SB-Mid-server-GNcL8wPmhyTaYdU_9uAi1pC5';
        if (!isset(Config::$serverKey)) {
            return "Di Mohon Untuk Memasukan Server Key Anda";
        }
        Config::$isSanitized = true;

        // Enable 3D-Secure
        Config::$is3ds = true;

        // Required

        $arrayMakanan = [];
        $arrayMinuman = [];
        $arrayDessert = [];

        $Makanan = $this->BaseData->SelectgetFood();
        $Minuman = $this->BaseData->SelectgetDrink();
        $Dessert = $this->BaseData->SelectgetDessert();

        foreach ($Makanan as $result) {
            $arrayMakanan[] = $result->nama;
        }

        foreach ($Minuman as $result) {
            $arrayMinuman[] = $result->nama;
        }

        foreach ($Dessert as $result) {
            $arrayDessert[] = $result->nama;
        }

        $pisahNama = explode(',', $user->nama_orderan);
        $PisahJumlah = explode(',', $user->jml_orderan);

        $item_list = [];

        $price = 0;
        foreach ($pisahNama as $index => $result) {
            if (in_array($result, $arrayMakanan)) {
                $getHarga = $this->BaseData->getHargaMakanan($result);
                $setHarga = $getHarga->harga;
                $price = intval($setHarga);
            } else if (in_array($result, $arrayMinuman)) {
                $getHarga = $this->BaseData->getHargaMinuman($result);
                $setHarga = $getHarga->harga;
                $price = intval($setHarga);
            } else if (in_array($result, $arrayDessert)) {
                $getHarga = $this->BaseData->getHargaDessert($result);
                $setHarga = $getHarga->harga;
                $price = intval($setHarga);
            }

            $item_list[] = [
                'id' => '111',
                'price' => $price,
                'quantity' => intval($PisahJumlah[$index]),
                'name' => $result,
            ];
        }

        $transaction_details = array(
            'order_id' => $user->kodePesanan,
            'gross_amount' => intval($user->jml_orderan), // no decimal allowed for creditcard
        );

        // Optional
        $item_details = $item_list;
        // Optional
        $shipping_address = array(
            'first_name'    => $user->nama_pemesan,
            'address'       => $user->alamat,
        );

        // Optional
        $customer_details = array(
            'first_name'    => $user->nama_pemesan,
            'email'         => $user->email_pemesan,
            'billing_address'  => $shipping_address,
            'shipping_address' => $shipping_address
        );

        // Optional, remove this to display all available payment methods
        $enable_payments = array();

        // Fill transaction details
        $transaction = array(
            'enabled_payments' => $enable_payments,
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details' => $item_details,
        );
        // return $transaction;

        try {
            $snapToken = Snap::getSnapToken($transaction);

            $updateData = [
                "id_user" => $user->id_user,
                "kodePesanan" => $user->kodePesanan,
                "nama_orderan" => $user->nama_orderan,
                "jml_orderan" => $user->jml_orderan,
                "nama_pemesan" => $user->nama_pemesan,
                "email_pemesan" => $user->email_pemesan,
                "alamat" => $user->alamat,
                "pembelian" => $user->pembelian,
                "tanggal_pesan" => $user->tanggal_pesan,
                "total" => $user->total,
                "proses" => 1,
                "konfirmasi" => 1,
            ];

            for ($index = 0; $index < count($pisahNama); $index++) {

                $getNama = $pisahNama[$index];
                $getJumlah = $PisahJumlah[$index];

                if (in_array($getNama, $arrayMakanan)) {
                    $this->BaseData->OverloadMakanan($getJumlah, $getNama);
                    continue;
                } else if (in_array($getNama, $arrayMinuman)) {
                    $this->BaseData->OverloadMinuman($getJumlah, $getNama);
                    continue;
                } else if (in_array($getNama, $arrayDessert)) {
                    $this->BaseData->OverloadDessert($getJumlah, $getNama);
                    continue;
                }
            }

            $this->BaseData->updateKonfirmasi($updateData, $request->id);
            // return response()->json($snapToken);
            return ['code' => 1, 'message' => 'success', 'result' => $snapToken, "redirect_url" => "http://app.sandbox.midtrans.com/snap/v2/vtweb/" . $snapToken];
        } catch (\Exception $e) {
            dd($e);
            return ['code' => 0, 'message' => 'failed'];
        }
    }

    public function PremiumMember(Request $request)
    {
        $input  = $request->only("Nama", "Email", "Harga"); //Specify Request

        $validation = Validator::make($input, [
            "Nama" => "required|string",
            "Email" => "required|string",
        ]);

        if ($validation->fails()) {
            return response($validation->errors()->toJson(), 400);
        }
        $user = $this->BaseData->getUserByEmail($request->input("Email"));
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => "Id Pesanan Tidak Dapat Ditemukan."
            ], 400);
        }

        $item_list = array();

        // CLIENT ID MIDTRANS TARO SINI
        Config::$serverKey = 'SB-Mid-server-GNcL8wPmhyTaYdU_9uAi1pC5';
        if (!isset(Config::$serverKey)) {
            return "Di Mohon Untuk Memasukan Server Key Anda";
        }

        Config::$isSanitized = true;

        // Enable 3D-Secure
        Config::$is3ds = true;

        // Required

        $KodePesanan = time();
        $id = time();

        $item_list[] = [
            'id' => "$id",
            'price' => $request->Harga,
            'quantity' => intval(1),
            'name' => "Premium Member",
        ];

        $transaction_details = array(
            'order_id' => strval($KodePesanan),
            'gross_amount' => 1, // no decimal allowed for creditcard
        );


        // Optional
        $item_details = $item_list;
        // Optional
        $shipping_address = array(
            'first_name'    => $user->name,
        );

        // Optional
        $customer_details = array(
            'first_name'    => $user->name,
            'email'         => $user->email,
            'billing_address'  => $shipping_address,
            'shipping_address' => $shipping_address
        );

        // Optional, remove this to display all available payment methods
        $enable_payments = array();

        // Fill transaction details
        $transaction = array(
            'enabled_payments' => $enable_payments,
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details' => $item_details,
        );

        // return $transaction;

        try {
            $snapToken = Snap::getSnapToken($transaction);

            $updateData = [
                'status' => "Premium"
            ];

            $this->BaseData->updateMember($updateData, $user->id);
            return ['code' => 1, 'message' => 'success', 'result' => $snapToken, "redirect_url" => "http://app.sandbox.midtrans.com/snap/v2/vtweb/" . $snapToken];
        } catch (\Exception $e) {
            dd($e);
            return ['code' => 0, 'message' => 'failed'];
        }
    }

    public function TablePayment(Request $request)
    {
        $input  = $request->only("id"); //Specify Request

        $validation = Validator::make($input, [
            "id" => "required|integer",
        ]);

        $Name = $request->namaTable;

        $ValidateTable = $this->BaseData->ValidateTable($Name);

        if ($ValidateTable != null) {
            $data = [
                'status' => false,
                'massage' => "Sorry the table you ordered is full"
            ];
            return json_encode($data);
            die;
        }

        if ($validation->fails()) {
            return response($validation->errors()->toJson(), 400);
        }
        $user = $this->BaseData->getBookById($request->input("id"));
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => "Id Pesanan Tidak Dapat Ditemukan."
            ], 400);
        }

        $item_list = array();

        // CLIENT ID MIDTRANS TARO SINI
        Config::$serverKey = 'SB-Mid-server-GNcL8wPmhyTaYdU_9uAi1pC5';
        if (!isset(Config::$serverKey)) {
            return "Di Mohon Untuk Memasukan Server Key Anda";
        }

        Config::$isSanitized = true;

        // Enable 3D-Secure
        Config::$is3ds = true;

        // Required
        $id = time();

        $item_list[] = [
            'id' => "$id",
            'price' => $user->pajak,
            'quantity' => intval(1),
            'name' => $user->nama_meja,
        ];

        $transaction_details = array(
            'order_id' => $user->kodePesanan,
            'gross_amount' => 1, // no decimal allowed for creditcard
        );


        // Optional
        $item_details = $item_list;
        // Optional
        $shipping_address = array(
            'first_name'    => $user->nama,
        );

        // Optional
        $customer_details = array(
            'first_name'    => $user->nama,
            'email'         => $user->email,
            'billing_address'  => $shipping_address,
            'shipping_address' => $shipping_address
        );

        // Optional, remove this to display all available payment methods
        $enable_payments = array();

        // Fill transaction details
        $transaction = array(
            'enabled_payments' => $enable_payments,
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details' => $item_details,
        );

        // return $transaction;

        try {
            $snapToken = Snap::getSnapToken($transaction);

            $updateData = [
                'konfirmasi' => 1,
                'proses' => 0
            ];

            $getTotalByFetch = $user->total;
            $getNameByFetch = $user->nama_meja;

            $this->BaseData->OverloadTable($getTotalByFetch, $getNameByFetch);
            $this->BaseData->updateBookTable($updateData, $user->id);
            return ['code' => 1, 'message' => 'success', 'result' => $snapToken, "redirect_url" => "http://app.sandbox.midtrans.com/snap/v2/vtweb/" . $snapToken];
        } catch (\Exception $e) {
            dd($e);
            return ['code' => 0, 'message' => 'failed'];
        }
    }
}
