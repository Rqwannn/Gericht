<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaseData;

class PrivateDiningController extends Controller
{
    private $BaseData;

    public function __construct()
    {
        $this->BaseData = new BaseData();
    }

    public function index(Request $request)
    {
        $photo = $this->BaseData->getUser($request->session()->get("email"));

        $setPhoto = "";

        if ($this->BaseData->getUser($request->session()->get("email"))) {
            $setPhoto .= $photo->gambar;
        } else {
            $setPhoto .= $request->session()->get("gambar");
        }

        $data = [
            "Name" => $request->session()->get("nama"),
            "Email" => $request->session()->get("email"),
            "Gambar" => $setPhoto,
            "JS" => "/privateTable.js",
            "StatusUser" => $photo->status
        ];

        return view("PrivateDining/PrivateDining", $data);
    }
}
