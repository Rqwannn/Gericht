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

    public function getOrderTable()
    {
        return DB::table("book_table")->get();
    }

    public function getPesananByDate()
    {
        return DB::table('pesanan')
            ->orderBy('tanggal_pesan', 'desc')
            ->get();
    }

    public function getUserById($data)
    {
        return DB::table("user")->where("id", $data)->first();
    }

    public function getOrderById($data)
    {
        return DB::table("pesanan")->where("id", $data)->first();
    }

    public function deleteTable($id)
    {
        DB::table("book_table")->where("id", $id)->delete();
    }

    public function getPesananById($data)
    {
        return DB::table('pesanan')->where('id', $data)->first();
    }

    public function updateKonfirmasi($data, $id)
    {
        // DB::table('pesanan')->where('id', $id)->update($data);
    }
}
