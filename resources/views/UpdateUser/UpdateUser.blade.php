@extends('layouts/TamplateAdmin')

@section('title', "Update User")

@section('content')
<div class="intoAdmin">
    <div class="container">
        <h1 class="text-white" style="margin-top: 10vh;">Hello, Happy Work</h1>
        <p class="mt-4 text-white" style="width: 50%;">Hai admin, this is where you change the data from the customer, please check again until it is correct</p>
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
                            <label class="mb-1">Email</label>
                            <input type="email" id="emailUser" class="form-control" value="{{$EmailUser}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputUser d-flex flex-column">
                            <label class="mb-1">Name</label>
                            <input type="text" id="nameUser" class="form-control" value="{{$NameUser}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputUser d-flex flex-column mt-3">
                            <label class="mb-1">Password</label>
                            <input type="password" id="passwordUser" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputUser d-flex flex-column mt-3">
                            <label class="mb-1">Status</label>
                            <select id="statusUser" class="form-select">
                                <option value="{{$StatusUser}}">{{$StatusUser}}</option>
                                <option value="Member">Member</option>
                                <option value="Premium">Premium</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputUser mt-3 mb-3">
                            <button type="submit" class="btn" id="submitUser" onclick="setUpdateUser({{$IDUser}})">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection