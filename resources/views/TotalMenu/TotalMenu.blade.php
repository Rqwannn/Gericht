@extends('layouts/TamplateAdmin')

@section('title', "Total Menu")

@section('content')
<div class="intoAdmin">
    <div class="container">
        <h1 class="text-white" style="margin-top: 10vh;">Hello, Happy Work</h1>
        <p class="mt-4 text-white" style="width: 50%;">This is your page to manage the data of all menu</p>
    </div>
</div>
<div class="col-md-12">
    <div class="cardTableData mt-4">
        <div class="container">
            <div class="headerTable mt-3 mb-5 d-flex justify-content-between">
                <h5 class="mt-2">Table Menu</h5>
                <div class="d-flex">
                    <button class="btn btn-primary" onclick="PageTambahMakanan()" style="margin-right: 10px; font-size: 15px;">Tambah Makanan</button>
                    <button class="btn btn-primary" onclick="PageTambahMinuman()" style="margin-right: 10px; font-size: 15px;">Tambah Minuman</button>
                    <button class="btn btn-primary" onclick="PageTambahDessert()">Tambah Dessert</button>
                </div>
            </div>
        </div>
        <div id="contentTable">
            <table border="0" id="TableOrder" class="table table-hover mt-4">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Available</th>
                        <th>Price</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($Data as $result) : ?>

                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$result->nama}}</td>
                            <td>{{$result->tersedia}}</td>
                            <td>$ {{$result->harga}}</td>
                            <td>
                                <a href="/updateMenu/{{$result->id}}/{{$result->nama}}">
                                    <button type="submit" class="btn-table">Update</button>
                                </a>
                                <button type="submit" onclick="DeleteDataMenu('{{$result->id}}', '{{$result->nama}}')" class="btn-table">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection