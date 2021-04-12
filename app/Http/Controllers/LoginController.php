<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaseData;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    private $BaseData;

    public function __construct()
    {
        $this->BaseData = new BaseData();
    }

    public function index()
    {
        return view("login/login");
    }

    public function validation(Request $request)
    {
        $data = $this->BaseData->getUser($request->email);
        $admin = $this->BaseData->getAdmin($request->email);

        Request()->validate([
            "email" => "required",
            'password' => 'required',
        ], [
            "email.required" => "Email Cannot Be Empty",
            "password.required" => "Password Cannot Be Empty",
        ]);


        if ($data && $request->email != "Guest@gmail.com") {
            if (Hash::check($request->password, $data->password)) {
                $sessionNama = $data->name;
                $sessionGambar = $data->gambar;
                $sessionStatus = $data->status;

                $request->session()->put('Submit', true);
                $request->session()->put('email', $request->email);
                $request->session()->put('nama', $sessionNama);
                $request->session()->put('gambar', $sessionGambar);
                $request->session()->put('status', $sessionStatus);
                $request->session()->put('As', 'User');
                return redirect()->route("home");
            } else {
                return redirect()->route("login")->with("Pesan", "Your Email Or Password Is Wrong");
            }
        } else if ($admin) {
            if (md5($request->password) == $admin->password) {
                $sessionNama = $admin->name;
                $sessionGambar = $admin->gambar;

                $request->session()->put('Submit', true);
                $request->session()->put('email', $request->email);
                $request->session()->put('nama', $sessionNama);
                $request->session()->put('gambar', $sessionGambar);
                $request->session()->put('As', 'Admin');
                return redirect()->route("dasbord");
            } else {
                return redirect()->route("login")->with("Pesan", "Your Email Or Password Is Wrong");
            }
        } else {
            return redirect()->route("login")->with("Pesan", "Your Email Or Password Is Wrong");
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route("home");
    }

    public function guest()
    {
        $fileName = 'profile.png';

        session()->put('Submit', true);
        session()->put('gambar', $fileName);
        session()->put('email', "Guest@gmail.com");
        session()->put('nama', "Guest");
        session()->put('status', "Member");
        return redirect()->route("home");
    }

    public function signIn(Request $request)
    {
        $request->session()->flush();
        return redirect()->route("login");
    }
}
