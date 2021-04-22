<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaseData;

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
            "CekIcon" => "dasbord",
            "Status" => "Dasbord",
        ];
        return view("MainAdmin/MainAdmin", $data);
    }

    public function setData()
    {
        $Order = $this->BaseData->getPesanan();
        $User = $this->BaseData->getAllUser();

        // Di hitung dari bulang yang sekarang

        // Filter Pesanan

        $setPesananSekarang = [];
        $setPesananLalu = [];

        foreach ($Order as $item) {
            $BulanSekarang = date('m');
            $pisahBulan = explode(" ", $item->tanggal_pesan);
            $PisahLagi = explode("-", $pisahBulan[0]);
            if ($BulanSekarang == $PisahLagi[1]) {
                $setPesananSekarang[] = $item;
            } else if (($BulanSekarang - 01) == $PisahLagi[1]) {
                $setPesananLalu[] = $item;
            }
        }

        if (count($setPesananSekarang) == 0 && count($setPesananLalu) == 0) {
            $HitungPersen = 0;
        } else if (count($setPesananLalu) == 0 && count($setPesananSekarang) == 0) {
            $HitungPersen = 0;
        } else if (count($setPesananLalu) == 0 && count($setPesananSekarang) > 1) {
            $setPesananLalu = 1;
            $HitungPersen = round((100 * count($setPesananSekarang)) / $setPesananLalu);
        } else {
            $HitungPersen = round((100 * count($setPesananSekarang)) / count($setPesananLalu));
        }

        // Filter User

        $setUserSekarang = [];
        $setUserLalu = [];

        foreach ($User as $item) {
            $BulanSekarang = date('m');
            $pisahBulan = explode(" ", $item->created_at);
            $PisahLagi = explode("-", $pisahBulan[0]);
            if ($BulanSekarang == $PisahLagi[1]) {
                $setUserSekarang[] = $item;
            } else if (($BulanSekarang - 01) == $PisahLagi[1]) {
                $setUserLalu[] = $item;
            }
        }

        if (count($setUserSekarang) == 0) {
            $HitungSecondPersen = 0;
        } else if (count($setUserLalu) == 0 && count($setUserSekarang) == 0) {
            $HitungSecondPersen = 0;
        } else if (count($setUserLalu) == 0 && count($setUserSekarang) > 0) {
            $setUserLalu = 1;
            $HitungSecondPersen = round((100 * count($setUserSekarang)) / $setUserLalu);
        } else {
            $HitungSecondPersen = round((100 * count($setUserSekarang)) / count($setUserLalu));
        }

        // Filter Subscribe

        $setSubscribeLalu = [];
        $setSubscribeSekarang = [];

        foreach ($User as $Result) {
            $BulanSekarang = date('m');
            $pisahBulan = explode(" ", $Result->created_at);
            $PisahLagi = explode("-", $pisahBulan[0]);
            if ($Result->status == "Premium" && $BulanSekarang == $PisahLagi[1]) {
                $setSubscribeSekarang[] = $Result;
            } else if (($BulanSekarang - 01) == $PisahLagi[1] && $Result->status == "Premium") {
                $setSubscribeLalu[] = $Result;
            }
        }

        if (count($setSubscribeSekarang) == 0) {
            $HitungThirdPersen = 0;
        } else if (count($setSubscribeLalu) == 0 && count($setSubscribeSekarang) == 0) {
            $HitungThirdPersen = 0;
        } else if (count($setSubscribeLalu) == 0 && count($setSubscribeSekarang) > 0) {
            $setSubscribeLalu = 1;
            $HitungThirdPersen = round((100 * count($setSubscribeSekarang)) / $setSubscribeLalu);
        } else {
            $HitungThirdPersen = round((100 * count($setSubscribeSekarang)) / count($setSubscribeLalu));
        }

        $Result = [];

        $Result["TotalOrder"] = count($setPesananSekarang);
        $Result["PersenOrder"] = $HitungPersen;
        $Result["TotalUser"] = count($setUserSekarang);
        $Result["PersenUser"] = $HitungSecondPersen;
        $Result["TotalSubscribe"] = count($setSubscribeSekarang);
        $Result["PersenSubscribe"] = $HitungThirdPersen;

        return json_encode($Result);
    }
}
