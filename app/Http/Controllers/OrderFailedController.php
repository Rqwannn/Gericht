<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaseData;

class OrderFailedController extends Controller
{
    private $BaseData;

    public function __construct()
    {
        $this->BaseData = new BaseData();
    }

    public function index(Request $request)
    {
        $photo = $this->BaseData->getAdmin($request->session()->get("email"));
        $getAllOrder = $this->BaseData->getPesanan();

        $setPhoto = "";

        if ($this->BaseData->getAdmin($request->session()->get("email"))) {
            $setPhoto .= $photo->gambar;
        } else {
            $setPhoto .= $request->session()->get("gambar");
        }

        $data = [
            "JS" => "/TotalData.js",
            "Name" => $photo->name,
            "Email" => $photo->email,
            "Gambar" => $setPhoto,
            "Status" => "Order Failed",
            "CekIcon" => "Order_Failed",
            "Data" => $getAllOrder
        ];

        return view("OrderFailed/OrderFailed", $data);
    }
}
