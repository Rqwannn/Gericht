@extends('layouts/TamplateAdmin')

@section('title', "Total Order")

@section('content')
<div class="intoAdmin">
    <div class="container">
        <h1 class="text-white" style="margin-top: 10vh;">Hello, Happy Work</h1>
        <p class="mt-4 text-white" style="width: 50%;">This is your page to manage the data of all orders, be careful in deleting data</p>
    </div>
</div>
<div class="col-md-12">
    <div class="cardTableData mt-4">
        <div class="container">
            <div class="headerTable">
                <h5 class="mt-2">Table Order</h5>
            </div>
        </div>
        <div id="contentTable">
            <table border="0" id="TableOrder" class="table table-hover mt-4">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Order Number</th>
                        <th>Email</th>
                        <th>Order Name</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($Data as $result) : ?>
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$result->kodePesanan}}</td>
                            <td>{{$result->email_pemesan}}</td>
                            <td>{{$result->nama_pemesan}}</td>
                            <td>$ {{$result->total}}</td>
                            <td>
                                <p style="display: none;"></p>
                                <button type="submit" class="btn-table" onclick="funDelete({{$result->id}})">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <div class="row">
            <div class="col-md-12">
                <div class="cardTableData mt-4">
                    <div class="container">
                        <div class="headerSold d-felx flex-column mt-2">
                            <p>Advantage</p>
                            <h5 class="mt-2">Total Sold</h5>
                        </div>
                        <div class="contentSold mt-3">
                            <div id="chartSold">
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="cardTableData mt-4">
                    <div class="container">
                        <div class="headerSold d-felx flex-column mt-2">
                            <p>Advantage</p>
                            <div class="d-flex justify-content-between">
                                <h5 class="mt-2">Most Ordered</h5>
                                <h5 class="mt-2">Month</h5>
                            </div>
                        </div>
                        <div class="contentSold mt-3">
                            <div id="chartSoldBar">
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="cardTableData mt-4">
            <div class="container">
                <div class="headerSold d-felx flex-column mt-2">
                    <p>Capacity</p>
                    <h5 class="mt-2">Quantity available</h5>
                </div>
                <div class="contentSold">
                    <div id="contentTable">
                        <table border="0" id="TableOrder-2" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Available</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($DataCapacity as $result) : ?>
                                    <tr>
                                        <td>{{$result->nama}}</td>
                                        <td>{{$result->tersedia}} Portion</td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection