<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BaseData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    private $BaseData;

    public function __construct()
    {
        $this->BaseData = new BaseData();
    }

    public function index()
    {
        return view("register/register");
    }

    public function tambah(Request $result)
    {
        Request()->validate([
            'email' => 'required|unique:user,email|min:10',
            'name' => 'required|min:4',
            'password' => 'required|min:8',
        ], [
            "email.required" => "Email Cannot Be Empty",
            "email.unique" => "Email Is Already Registered",
            "email.min" => "Minimum 4 characters",
            "email.mimes" => "Invalid Format",
            "password.required" => "Password Cannot Be Empty",
            "password.min" => "Password Minimum 8 Characters",
            "name.required" => "Name Cannot Be Empty",
            "name.min" => "Name Minimum 4 Characters",
        ]);

        if (Request()->password != Request()->password_confirmation) {
            Request()->validate([
                'password' => 'mimes:exe'
            ], [
                'password.mimes' => "Passwords Are Not The Same"
            ]);
        }

        $fileName = 'profile.png';

        $data = [
            'name' => Request()->name,
            'email' => Request()->email,
            'password' => Hash::make(Request()->password),
            'created_at' => null,
            'status' => "Member",
            'gambar' => $fileName
        ];

        $this->BaseData->insertUser($data);

        $result->session()->put('Submit', true);
        $result->session()->put('email', Request()->email);
        $result->session()->put('nama', Request()->name);
        $result->session()->put('gambar', $fileName);
        $result->session()->put('status', "Member");

        return redirect()->route("home");
    }

    public function signUp(Request $request)
    {
        $request->session()->flush();
        return redirect()->route("register");
    }
}
