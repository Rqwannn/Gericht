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

    public function SelectgetFood()
    {
        return DB::table("makanan")->select('makanan.nama', 'makanan.harga')->get();
    }

    public function SelectgetDrink()
    {
        return DB::table("minuman")->select('minuman.nama', 'minuman.harga')->get();
    }

    public function SelectgetDessert()
    {
        return DB::table("dessert")->select('dessert.nama', 'dessert.harga')->get();
    }

    public function getHargaMakanan($data)
    {
        return DB::table("makanan")->select('makanan.harga')->where('nama', $data)->first();
    }

    public function getHargaMinuman($data)
    {
        return DB::table("minuman")->select('minuman.harga')->where('nama', $data)->first();
    }

    public function getHargaDessert($data)
    {
        return DB::table("dessert")->select('dessert.harga')->where('nama', $data)->first();
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
        DB::table('pesanan')->where('id', $id)->update($data);
    }

    public function DataOrderToExcel()
    {
        DB::statement("SELECT pesanan.kodePesanan, pesanan.nama_orderan, pesanan.jml_orderan, pesanan.nama_pemesan, pesanan.email_pemesan, pesanan.pembelian, pesanan.tanggal_pesan INTO OUTFILE 'C:/TotalOrder.xls' FROM pesanan");
    }

    public function DataUserToExcel()
    {
        DB::statement("SELECT user.name, user.email, user.created_at, user.status INTO OUTFILE 'C:/TotalUser.xls' FROM user");
    }

    public function DataFailedOrderToExcel()
    {
        DB::statement("SELECT pesanan.kodePesanan, pesanan.nama_orderan, pesanan.jml_orderan, pesanan.nama_pemesan, pesanan.email_pemesan, pesanan.pembelian, pesanan.tanggal_pesan INTO OUTFILE 'C:/FailedOrder.xls' FROM pesanan WHERE konfirmasi = 0");
    }

    public function DataSuccessOrderToExcel()
    {
        DB::statement("SELECT pesanan.kodePesanan, pesanan.nama_orderan, pesanan.jml_orderan, pesanan.nama_pemesan, pesanan.email_pemesan, pesanan.pembelian, pesanan.tanggal_pesan INTO OUTFILE 'C:/SuccessOrder.xls' FROM pesanan WHERE konfirmasi = 1");
    }

    public function OverloadMakanan($getJumlah, $getNama)
    {
        DB::statement("UPDATE makanan set tersedia = tersedia - '$getJumlah' WHERE nama = '$getNama'");
    }

    public function OverloadMinuman($getJumlah, $getNama)
    {
        DB::statement("UPDATE minuman set tersedia = tersedia - '$getJumlah' WHERE nama = '$getNama'");
    }

    public function OverloadDessert($getJumlah, $getNama)
    {
        DB::statement("UPDATE dessert set tersedia = tersedia - '$getJumlah' WHERE nama = '$getNama'");
    }

    public function UpdateMember($data, $id)
    {
        DB::table('user')->where('id', $id)->update($data);
    }

    public function getUserByEmail($data)
    {
        return DB::table('user')->where('email', $data)->first();
    }

    public function getBookById($data)
    {
        return DB::table('book_table')->where("id", $data)->first();
    }

    public function updateBookTable($updateData, $id)
    {
        DB::table('book_table')->where('id', $id)->update($updateData);
    }

    public function OverloadTable($getTotalByFetch, $getNameByFetch)
    {
        DB::statement("UPDATE private_table SET tersedia = tersedia - '$getTotalByFetch' WHERE nama = '$getNameByFetch' ");
    }
}
