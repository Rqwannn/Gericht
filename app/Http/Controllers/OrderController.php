<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaseData;

class OrderController extends Controller
{
    private $BaseData;

    public function __construct()
    {
        $this->BaseData = new BaseData();
    }

    public function index(Request $request)
    {
        $photo = $this->BaseData->getUser($request->session()->get("email"));
        $getAllPesanan = $this->BaseData->getPesananByDate();
        $getAllTable = $this->BaseData->getOrderTable();

        $setPhoto = "";

        if ($this->BaseData->getUser($request->session()->get("email"))) {
            $setPhoto .= $photo->gambar;
        } else {
            $setPhoto .= $request->session()->get("gambar");
        }

        $cekIfTrueTable = [];
        $cekIfTruePesanan = [];

        foreach ($getAllPesanan as $result) {
            if ($result->proses == 1 && $result->id_user == $request->session()->get("nama")) {
                $cekIfTruePesanan[] = $result;
            }
        }

        foreach ($getAllTable as $result) {
            if (strtotime(date("Y-m-d")) < strtotime($result->tanggal_pesan) || $result->konfirmasi == 1 && $result->id_user == $request->session()->get("nama")) {
                $cekIfTrueTable[] = $result;
            } else if (strtotime(date("Y-m-d")) >= strtotime($result->tanggal_pesan) && $result->id_user == $request->session()->get("nama") && $result->konfirmasi == 0) {
                $this->BaseData->deleteTable($result->id);
            }
        }

        $data = [
            "JS" => "/order.js",
            "Name" => $request->session()->get("nama"),
            "Email" => $request->session()->get("email"),
            "Gambar" => $setPhoto,
            "Pesanan" => $getAllPesanan,
            "StatusUser" => $photo->status,
            "OrderTable" => $getAllTable,
            'CekPesanan' => $cekIfTruePesanan,
            'cekTable' => $cekIfTrueTable
        ];

        return view("Order/Order", $data);
    }

    public function DeleteTableHistori(Request $request)
    {
        $this->BaseData->deleteTable($request->id);

        return redirect()->route("order");
    }

    public function PaymentProcess(Request $data)
    {
        dd($data->payment);
    }

    private function _generatePaymentToken($data)
    {
        $this->initPaymentGateway();

        $costumerDetail = [];
    }
}
