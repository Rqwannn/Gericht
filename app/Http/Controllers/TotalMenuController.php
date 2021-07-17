<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaseData;

class TotalMenuController extends Controller
{
    private $BaseData;

    public function __construct()
    {
        $this->BaseData = new BaseData();
    }

    public function index(Request $request)
    {
        $photo = $this->BaseData->getAdmin($request->session()->get("email"));
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
            "Status" => "Total Menu",
            "CekIcon" => "Total_Menu",
            "Data" => $setArray,
        ];

        return view("TotalMenu/TotalMenu", $data);
    }

    public function updateMenuView(Request $request)
    {
        $photo = $this->BaseData->getAdmin($request->session()->get("email"));

        $setPhoto = "";

        if ($this->BaseData->getAdmin($request->session()->get("email"))) {
            $setPhoto .= $photo->gambar;
        } else {
            $setPhoto .= $request->session()->get("gambar");
        }

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

        $setFinal = [];

        foreach ($setArray as $result) {
            if ($request->nama == $result->nama && $request->id == $result->id) {
                $setFinal[] = $result;
            }
        }

        $data = [
            "JS" => "/TotalData.js",
            "Name" => $photo->name,
            "Email" => $photo->email,
            "Gambar" => $setPhoto,
            "Status" => "Total Menu",
            "CekIcon" => "Total_Menu",
            "namaMenu" => $setFinal[0]->nama,
            "tersediaMenu" => $setFinal[0]->tersedia,
            "hargaMenu" => $setFinal[0]->harga,
            "penjelasanMenu" => $setFinal[0]->penjelasan,
            "gambarMenu" => $setFinal[0]->gambar,
            "IDUser" => $request->id
        ];

        return view("UpdateMenu/UpdateMenu", $data);
    }

    public function TambahMakanan(Request $request)
    {
        $photo = $this->BaseData->getAdmin($request->session()->get("email"));
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
            "Status" => "Total Menu",
            "CekIcon" => "Total_Menu",
        ];
        return view('TambahMakanan/TambahMakanan', $data);
    }

    public function TambahMinuman(Request $request)
    {
        $photo = $this->BaseData->getAdmin($request->session()->get("email"));
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
            "Status" => "Total Menu",
            "CekIcon" => "Total_Menu",
        ];
        return view('TambahMinuman/TambahMinuman', $data);
    }

    public function TambahDessert(Request $request)
    {
        $photo = $this->BaseData->getAdmin($request->session()->get("email"));
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
            "Status" => "Total Menu",
            "CekIcon" => "Total_Menu",
        ];
        return view('TambahDessert/TambahDessert', $data);
    }

    public function TambahDataMakanan()
    {

        $conn = mysqli_connect("localhost", "root", "", "gericht");

        $nama = $_POST['nama'];
        $tersedia = $_POST['tersedia'];
        $price = $_POST['price'];
        $explanation = $_POST['explanation'];
        $Gambar = $_FILES['picture'];

        $allowFormat = ['png', 'jpg', 'jpeg'];
        $getFormat = explode('/', $Gambar['type']);

        if ($Gambar['size'] > 3000000) {
            return json_encode('Image Size Too Large Can Only Be 3 MB');
            die;
        } else if (!in_array($getFormat[1], $allowFormat)) {
            return json_encode('File Format Not Supported Only jpg, png, jpeg');
            die;
        }

        $NamaGambar = explode('.', $Gambar['name']);
        $Tempat = $Gambar['tmp_name'];

        $namaFilebaru = uniqid();
        $namaFilebaru .= ".";
        $namaFilebaru .= end($NamaGambar);
        move_uploaded_file($Tempat, public_path("img/$namaFilebaru"));

        mysqli_query($conn, "INSERT INTO makanan VALUES('', '$nama', '$tersedia','$price', '$explanation', '$namaFilebaru')");

        return json_encode("Food Data Added Successfully");
    }

    public function TambahDataMinuman()
    {

        $conn = mysqli_connect("localhost", "root", "", "gericht");

        $nama = $_POST['nama'];
        $tersedia = $_POST['tersedia'];
        $price = $_POST['price'];
        $explanation = $_POST['explanation'];
        $Gambar = $_FILES['picture'];

        $allowFormat = ['png', 'jpg', 'jpeg'];
        $getFormat = explode('/', $Gambar['type']);

        if ($Gambar['size'] > 3000000) {
            return json_encode('Image Size Too Large Can Only Be 3 MB');
            die;
        } else if (!in_array($getFormat[1], $allowFormat)) {
            return json_encode('File Format Not Supported Only jpg, png, jpeg');
            die;
        }

        $NamaGambar = explode('.', $Gambar['name']);
        $Tempat = $Gambar['tmp_name'];

        $namaFilebaru = uniqid();
        $namaFilebaru .= ".";
        $namaFilebaru .= end($NamaGambar);
        move_uploaded_file($Tempat, public_path("img/$namaFilebaru"));

        mysqli_query($conn, "INSERT INTO minuman VALUES('', '$nama', '$tersedia','$price', '$explanation', '$namaFilebaru')");

        return json_encode("Drink Data Added Successfully");
    }

    public function TambahDataDessert()
    {

        $conn = mysqli_connect("localhost", "root", "", "gericht");

        $nama = $_POST['nama'];
        $tersedia = $_POST['tersedia'];
        $price = $_POST['price'];
        $explanation = $_POST['explanation'];
        $Gambar = $_FILES['picture'];

        $allowFormat = ['png', 'jpg', 'jpeg'];
        $getFormat = explode('/', $Gambar['type']);

        if ($Gambar['size'] > 3000000) {
            return json_encode('Image Size Too Large Can Only Be 3 MB');
            die;
        } else if (!in_array($getFormat[1], $allowFormat)) {
            return json_encode('File Format Not Supported Only jpg, png, jpeg');
            die;
        }

        $NamaGambar = explode('.', $Gambar['name']);
        $Tempat = $Gambar['tmp_name'];

        $namaFilebaru = uniqid();
        $namaFilebaru .= ".";
        $namaFilebaru .= end($NamaGambar);
        move_uploaded_file($Tempat, public_path("img/$namaFilebaru"));

        mysqli_query($conn, "INSERT INTO dessert VALUES('', '$nama', '$tersedia','$price', '$explanation', '$namaFilebaru')");

        return json_encode("Dessert Data Added Successfully");
    }

    public function UpdateMenuData(Request $request)
    {
        $nama = $request->nama;
        $tersedia = $request->tersedia;
        $price = $request->price;
        $explanation = $request->explanation;
        $oldGambar = $request->oldPicture;

        $setGambar = $oldGambar;

        if (!empty($request->picture)) {
            $newPicture = $request->picture;
            $allowFormat = ['png', 'jpg', 'jpeg'];
            $getFormat = explode('/', $newPicture->extension());

            if ($newPicture->getSize() > 3000000) {
                return json_encode('Image Size Too Large Can Only Be 3 MB');
                die;
            } else if (in_array($getFormat, $allowFormat)) {
                return json_encode('File Format Not Supported Only jpg, png, jpeg');
                die;
            }

            $path = public_path("img/$oldGambar");

            if (is_file($path)) {
                unlink("img/$oldGambar");
            }

            $fileName = uniqid() . '.' . $newPicture->extension();
            $newPicture->move("img", $fileName);

            $setGambar = $fileName;
        }

        $data = [
            "nama" => $nama,
            "tersedia" => $tersedia,
            "harga" => $price,
            "penjelasan" => $explanation,
            "gambar" => $setGambar
        ];

        $ValidateFood = $this->BaseData->ValidateFoodTrue($nama, $request->id);
        $ValidateDrink = $this->BaseData->ValidateDrinkTrue($nama, $request->id);
        $ValidateDessert = $this->BaseData->ValidateDessertTrue($nama, $request->id);

        if ($ValidateFood) {
            $this->BaseData->UpdateMenuFood($data, $request->id);
            return json_encode("Data Updated Successfully");
        } else if ($ValidateDrink) {
            $this->BaseData->UpdateMenuDrink($data, $request->id);
            return json_encode("Data Updated Successfully");
        } else if ($ValidateDessert) {
            $this->BaseData->UpdateMenuDessert($data, $request->id);
            return json_encode("Data Updated Successfully");
        }
    }

    public function DeleteMenuData(Request $request)
    {
        $id = $request->id;
        $nama = $request->nama;

        $ValidateFood = $this->BaseData->ValidateFoodTrue($nama, $id);
        $ValidateDrink = $this->BaseData->ValidateDrinkTrue($nama, $id);
        $ValidateDessert = $this->BaseData->ValidateDessertTrue($nama, $id);

        if ($ValidateFood) {
            $setGambar = $ValidateFood->gambar;
            $path = public_path("img/$setGambar");
        } else if ($ValidateDrink) {
            $setGambar = $ValidateDrink->gambar;
            $path = public_path("img/$setGambar");
        } else if ($ValidateDessert) {
            $setGambar = $ValidateDessert->gambar;
            $path = public_path("img/$setGambar");
        }

        if (is_file($path)) {
            unlink("img/$setGambar");
        }

        if ($ValidateFood) {
            $this->BaseData->DeleteMakananMenu($nama, $id);
        } else if ($ValidateDrink) {
            $this->BaseData->DeleteMinumanMenu($nama, $id);
        } else if ($ValidateDessert) {
            $this->BaseData->DeleteDessertMenu($nama, $id);
        }

        return json_encode('Data Deleted Successfully');
    }
}
