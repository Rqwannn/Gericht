<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaseData;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class InputDinningController extends Controller
{
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
            "JS" => "/inputDinning.js",
            "Name" => $request->session()->get("nama"),
            "Email" => $request->session()->get("email"),
            "Gambar" => $setPhoto,
            "Food" => $this->BaseData->getFood(),
            "Drink" => $this->BaseData->getDrink(),
            "Dessert" => $this->BaseData->getDessert(),
            "StatusUser" => $photo->status
        ];

        // $encrypted = Crypt::encryptString($photo->status);
        // $decrypted = Crypt::decryptString($encrypted);

        return view("InputDinning/InputDinning", $data);
    }
}
