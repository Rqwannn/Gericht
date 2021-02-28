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

        $data = [
            "JS" => "/order.js",
            "Name" => $request->session()->get("nama"),
            "Email" => $request->session()->get("email"),
            "Gambar" => $setPhoto,
            "Pesanan" => $getAllPesanan,
            "StatusUser" => $photo->status,
            "OrderTable" => $getAllTable
        ];

        return view("Order/Order", $data);
    }

    public function DeleteTableHistori(Request $request)
    {
        $this->BaseData->deleteTable($request->id);

        return redirect()->route("order");
    }
}
