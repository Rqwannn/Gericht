@extends('layouts/TamplateAdmin')

@section('title', "Order Success")

@section('content')
<div class="intoAdmin">
    <div class="container">
        <h1 class="text-white" style="margin-top: 10vh;">Hello, Happy Work</h1>
        <p class="mt-4 text-white" style="width: 50%;">This is your page to manage the data for all successful orders, be careful in processing the data</p>
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
                    @if ($result->konfirmasi == 1)
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