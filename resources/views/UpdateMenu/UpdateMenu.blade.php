@extends('layouts/TamplateAdmin')

@section('title', "Update Menu")

@section('content')
<div class="intoAdmin">
    <div class="container">
        <h1 class="text-white" style="margin-top: 10vh;">Hello, Happy Work</h1>
        <p class="mt-4 text-white" style="width: 50%;">Hai admin, this is where you change the data from the menu, please check again until it is correct</p>
    </div>
</div>
<div class="container">
    <div class="cardTableData mt-4">
        <div class="container">
            <div class="headerUpdateUser">
                <h5 class="fw-bold mt-3">Basic Details</h5>
            </div>
            <div class="contentUpdateUser mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="inputUser d-flex flex-column">
                            <label class="mb-1">Name</label>
                            <input type="email" id="nama" class="form-control" value="{{$namaMenu}}">
                            <input type="hidden" id="idUser" value="{{$IDUser}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputUser d-flex flex-column">
                            <label class="mb-1">Available</label>
                            <input type="text" id="tersedia" class="form-control" value="{{$tersediaMenu}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputUser d-flex flex-column mt-3">
                            <label class="mb-1">Price</label>
                            <input type="text" id="price" class="form-control" value="{{$hargaMenu}}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputUser d-flex flex-column mt-3">
                            <label class="mb-1">Picture</label>
                            <input type="file" id="picture" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="inputUser d-flex flex-column mt-3">
                            <label class="mb-1">Explanation</label>
                            <input type="text" id="explanation" value="{{$penjelasanMenu}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="inputUser d-flex flex-column mt-3">
                            <label class="mb-1">Old Picture</label>
                            <div class="d-flex">
                                <img src="{{asset('img')}}/{{$gambarMenu}}" width="150">
                                <input type="hidden" value="{{$gambarMenu}}" id="oldPicture">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputUser mt-3 mb-3">
                            <button type="submit" class="btn" id="submitUser" onclick="UpdateDataMenu()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection