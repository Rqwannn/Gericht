<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaseData;
use App\Http\Controllers\Controller;

class ProfileAdminController extends Controller
{
    private $BaseData;

    public function __construct()
    {
        $this->BaseData = new BaseData();
    }

    public function index(Request $request)
    {
        $photo = $this->BaseData->getAdmin($request->session()->get("email"));

        $setPhoto = "";

        if ($this->BaseData->getAdmin($request->session()->get("email"))) {
            $setPhoto .= $photo->gambar;
        } else {
            $setPhoto .= $request->session()->get("gambar");
        }

        $data = [
            "JS" => "/profileAdmin.js",
            "Name" => $photo->name,
            "Email" => $photo->email,
            "Gambar" => $setPhoto,
            "CekIcon" => "profile",
            "Status" => "Profile",
            "Address" => $photo->alamat,
            "City" => $photo->kota,
            "Negara" => $photo->negara,
            "postalCode" => $photo->postal_code,
            "Pendidikan" => $photo->pendidikan,
            "Posisi" => $photo->status
        ];

        return view("ProfileAdmin/ProfileAdmin", $data);
    }
}
