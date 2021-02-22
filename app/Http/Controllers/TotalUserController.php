<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaseData;

class TotalUserController extends Controller
{
    public function __construct()
    {
        $this->BaseData = new BaseData();
    }

    public function index(Request $request)
    {
        $photo = $this->BaseData->getAdmin($request->session()->get("email"));
        $getAllUser = $this->BaseData->getAllUser();

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
            "Status" => "Total User",
            "CekIcon" => "Total_User",
            "Data" => $getAllUser
        ];

        return view("TableUser/TableUser", $data);
    }

    public function updateUserView(Request $request)
    {

        $setDataUser = $this->BaseData->getUserById($request->id);

        $photo = $this->BaseData->getAdmin($request->session()->get("email"));
        $getAllUser = $this->BaseData->getAllUser();

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
            "Status" => "Total User",
            "CekIcon" => "Total_User",
            "Data" => $getAllUser,
            "EmailUser" => $setDataUser->email,
            "NameUser" => $setDataUser->name,
            "StatusUser" => $setDataUser->status,
            "IDUser" => $request->id
        ];

        return view("UpdateUser/UpdateUser", $data);
    }
}
