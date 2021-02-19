<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaseData;

class HomeController extends Controller
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
            "JS" => "/home.js",
            "Name" => $request->session()->get("nama"),
            "Email" => $request->session()->get("email"),
            "Gambar" => $setPhoto,
            "StatusUser" => $photo->status
        ];

        return view("home/home", $data);
    }

    public function updateFoto(Request $request)
    {

        Request()->validate([
            'change' => 'required|mimes:jpg,png,jpeg|max:1200',
        ], [
            "change.required" => "Photo Cannot Be Empty",
            "change.mimes" => "Photo Must Be png, jpeg, jpg",
        ]);

        $email = session()->get('email');

        $file = $request->change;
        $fileEmail = explode(".", session()->get("email"));

        $getEmail = "";

        for ($c = 0; $c <= count($fileEmail); $c++) {
            if ($fileEmail[$c] != "com") {
                $getEmail .= $fileEmail[$c];
                break;
            }
        }

        $fileName = $getEmail . "." . $file->extension();
        $file->move(public_path('img'), $fileName);

        $data = [
            "gambar" => $fileName
        ];

        $this->BaseData->updateFoto($data, $email);

        return redirect()->route("home");
    }

    public function withoutPicture()
    {
        $fileNew = "profile.png";

        $fileOld = session()->get('gambar');

        $fileOld = explode(".", $fileOld);
        $getFileOld = end($fileOld);

        $email = session()->get("email");
        $getEmail = explode(".", $email);

        $setEmail = "";

        for ($c = 0; $c <= count($getEmail); $c++) {
            if ($getEmail[$c] != "com") {
                $setEmail .= $getEmail[$c];
                break;
            }
        }

        $fileName = $setEmail . "." . $getFileOld;

        unlink(public_path('img') . "/" . $fileName);

        $data = [
            "gambar" => $fileNew
        ];

        $this->BaseData->updateFoto($data, $email);
        return redirect()->route("home");
    }
}
