<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class BaseData extends Model
{
    public function insertUser($data)
    {
        DB::table("user")->insert($data);
    }

    public function getUser($data)
    {
        return DB::table("user")->where("email", $data)->first();
    }

    public function getAllUser()
    {
        return DB::table("user")->get();
    }

    public function updateFoto($data, $email)
    {
        DB::table("user")->where("email", $email)->update($data);
    }

    public function getFood()
    {
        return DB::table("makanan")->get();
    }

    public function getDrink()
    {
        return DB::table("minuman")->get();
    }

    public function getDessert()
    {
        return DB::table("dessert")->get();
    }

    public function getAdmin($data)
    {
        return DB::table("admin")->where("email", $data)->first();
    }

    public function getEmployee()
    {
        return DB::table("petinggi")->get();
    }
    public function getPesanan()
    {
        return DB::table("pesanan")->get();
    }
}
