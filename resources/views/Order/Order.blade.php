@extends('layouts/tamplateHome')

@section('title', "Order")

@section('content')

    {{-- Card Show Detail --}}
    <div class="bgShowDetail">
        <div class="closeBtn">
            <i class="far fa-times-circle"></i>
        </div>
        <div class="cardShowDetail">

            <div class="my-3">
                <div class="row">
                    <div class="col-md-12 position-relative">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{asset('img')}}/PaymentDetail.jpg" class="imgProof" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="headerPaymentDetail">
                                    <h4 class="mt-5 fw-bold">Payment Detail</h4>
                                </div>
                                <div class="contentPaymentDetail mt-3">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                   

        </div>
    </div>



<div class="fotoHeader">
    <div class="blackTrans"></div>
    <img src="{{asset('img')}}/pageOrder.jpg" alt="">
</div>
<div class="container">
    <div class="topInfo-PageOrder mt-5">
        <h3 class="text-center fw-bold">Hello {{$Name}}</h3>
        <h5 class="text-center mt-3" style="margin: 0 10vw;">Hello, our respected guests, this is the info page of your order and the details of the order you ordered beforehand, I hope you always enjoy the dishes we serve, come here again, thank you</h5>
    </div>
</div>
<div class="container">
    <div class="headerPageOrder mt-5">
        <h4 class="textOrder fw-bold">Your Order</h4>
    </div>
    <div class="row mt-5">
        
    @foreach ($Pesanan as $Result)
        @if ($Name == $Result->id_user)
            <?php 
                $setJoinDate = explode(" ", $Result->tanggal_pesan);
                $getDate = $setJoinDate[0];
            ?>

            <div class="col-md-4">
                <div class="cardPage-Order mt-3">
                    <div class="textCardPage-Order d-flex justify-content-between">
                        <p>Order Code</p>
                        <p>{{$Result->kodePesanan}}</p>
                    </div>
                    <div class="textCardPage-Order d-flex justify-content-between">
                        <p>Email</p>
                        <p>{{$Result->email_pemesan}}</p>
                    </div>
                    <div class="textCardPage-Order d-flex justify-content-between">
                        <p>Name</p>
                        <p>{{$Result->nama_pemesan}}</p>
                    </div>
                    <div class="textCardPage-Order d-flex justify-content-between">
                        <p>Date</p>
                        <p>{{$getDate}}</p>
                    </div>
                    <div class="textCardPage-Order d-flex justify-content-between">
                        <p>Total</p>
                        <p>$ {{$Result->total}}</p>
                    </div>
                    <div class="textCardPage-Order d-flex justify-content-between">
                        <p>Status</p>
                        <p class="<?php echo ($Result->konfirmasi == 1) ? 'text-success' : 'text-warning' ?>"><?php echo ($Result->konfirmasi == 1) ? 'Success' : 'Waiting' ?></p>
                    </div>
                    <div class="textCardPage-Order d-flex justify-content-start mt-3">
                        <button type="submit" class="btn btn-primary" onclick="btnDetail({{$Result->id}})" style="width: 40%; font-size: 15px; padding: 5px 15px;">Detail</button>
                    </div>
                </div>
            </div>
            @endif
        @endforeach

    </div>
</div>
@endsection