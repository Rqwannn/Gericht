<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaseData;

class TotalOrderController extends Controller
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
        $getAllFood = $this->BaseData->getFood();
        $getAllDrink = $this->BaseData->getDrink();
        $getAllDessert = $this->BaseData->getDessert();

        $setArray = [];

        foreach ($getAllFood as $result) {
            $setArray[] = $result;
        }

        foreach ($getAllDrink as $result) {
            $setArray[] = $result;
        }

        foreach ($getAllDessert as $result) {
            $setArray[] = $result;
        };

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
            "Status" => "Total Order",
            "CekIcon" => "Total_Order",
            "Data" => $getAllOrder,
            "DataCapacity" => $setArray
        ];

        return view("TotalOrder/TotalOrder", $data);
    }
}
