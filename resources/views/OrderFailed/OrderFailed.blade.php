@extends('layouts/TamplateAdmin')

@section('title', "Order Failed")

@section('content')
<div class="intoAdmin">
    <div class="container">
        <h1 class="text-white" style="margin-top: 10vh;">Hello, Happy Work</h1>
        <p class="mt-4 text-white" style="width: 50%;">This is your page for managing data of all failed or pending orders, carefully processing the data</p>
    </div>
</div>
<div class="col-md-12">
    <div class="cardTableData mt-4">
        <div class="container">
            <div class="headerTable d-flex justify-content-between my-3">
                <h5 class="mt-2">Table Order</h5>
                <div class="d-flex">
                    <button class="btn btn-success" onclick="ToExcel(event)" data-type="FailedOrder" style="cursor: pointer;">Export To Excel</button>
                </div>
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
                    @if ($result->konfirmasi == 0)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$result->kodePesanan}}</td>
                        <td>{{$result->email_pemesan}}</td>
                        <td>{{$result->nama_pemesan}}</td>
                        <td>$ {{$result->total}}</td>
                        <td>
                            <p style="display: none;"></p>
                            <button type="submit" class="btn-table" onclick="orderDelete({{$result->id}})">Delete</button>
                        </td>
                    </tr>
                    @endif
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection