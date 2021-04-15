<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\BaseData;
use App\Models\Checkout;
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
            //     "id_user" => "required|string",
            //     "kodePesanan" => "required|string",
            //     "nama_orderan" => "required|string",
            //     "jml_orderan" => "required|string",
            //     "nama_pemesan" => "required|string",
            //     "email_pemesan" => "required|string",
            //     "alamat" => "required|string",
            //     "pembelian" => "required|string",
            //     "tanggal_pesan" => "required|string",
            //     "total" => "required|integer",
            //     "proses" => "required|integer",
            //     "konfirmasi" => "required|integer",
        ]);

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

        $item_list[] = [
            'id' => $user->id,
            'price' => intval($user->total),
            'quantity' => intval($user->jml_orderan),
            'name' => $user->nama_orderan
        ];

        $transaction_details = array(
            'order_id' => $user->kodePesanan,
            'gross_amount' => intval($user->total), // no decimal allowed for creditcard
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
            $datacheckout = [
                "id" => $user->id,
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
                "snaptoken" => $snapToken,
            ];
            $this->BaseData->updateKonfirmasi($datacheckout, $request->id);
            // return response()->json($snapToken);
            return ['code' => 1, 'message' => 'success', 'result' => $snapToken, "redirect_url" => "http://app.sandbox.midtrans.com/snap/v2/vtweb/" . $snapToken];
        } catch (\Exception $e) {
            dd($e);
            return ['code' => 0, 'message' => 'failed'];
        }
    }
}
