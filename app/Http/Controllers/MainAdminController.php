<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaseData;
use mysqli;
use mysqli_result;

class MainAdminController extends Controller
{
    private $BaseData;

    public function __construct()
    {
        $this->BaseData = new BaseData();
    }

    public function index(Request $request)
    {
        $photo = $this->BaseData->getAdmin($request->session()->get("email"));
        $Employe = $this->BaseData->getEmployee();
        $Order = $this->BaseData->getPesanan();
        $User = $this->BaseData->getAllUser();

        $setPhoto = "";

        if ($this->BaseData->getAdmin($request->session()->get("email"))) {
            $setPhoto .= $photo->gambar;
        } else {
            $setPhoto .= $request->session()->get("gambar");
        }

        $data = [
            "JS" => "/dasbord.js",
            "Employe" => $Employe,
            "Name" => $photo->name,
            "Email" => $photo->email,
            "Gambar" => $setPhoto,
            "Order" => count($Order),
            "CekIcon" => "dasbord",
            "User" => count($User),
            "Status" => "Dasbord"
        ];
        return view("MainAdmin/MainAdmin", $data);
    }
}
