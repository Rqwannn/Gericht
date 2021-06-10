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
                                    <h4 class="mt-5 fw-bold">Order Details</h4>
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

<div id="." class="fotoHeader">
    <div class="blackTrans"></div>
    <img src="{{asset('img')}}/pageOrder.jpg">
</div>
<div class="container">
    <div class="topInfo-PageOrder mt-5" data-aos="zoom-in">
        <h3 class="text-center fw-bold">Hello {{$Name}}</h3>
        <h5 class="text-center mt-3" style="margin: 0 10vw;">Hello, our respected guests, this is the info page of your order and the details of the order you ordered beforehand, I hope you always enjoy the dishes we serve, come here again, thank you</h5>
    </div>
</div>

@if ($CekPesanan)
    <div class="container">

        <div class="WrapperInfoOrder owl-carousel" data-aos="fade-up">

                @foreach ($Pesanan as $result)
                    @if ($result->proses == 1 && $result->id_user == $Name)
                    
                    <?php 
                        $setDate = explode(" ", $result->tanggal_pesan);
                        $getPesan = $setDate[0];

                        $getNameOrder = explode(",", $result->nama_orderan);
                        $getAmountOrder = explode(",", $result->jml_orderan);

                        $idUser = $result->id;
                    ?>

                    <div class="cardOrder-2 mt-5" style="border-radius: 0px;">
                        <div class="row">
    
                            <div class="col-md-12 position-relative">
                                <div class="row">
                                    <div class="col-md-5">
                                        <img src="{{asset('img')}}/PaymentDetail.jpg" style="border-radius: 0px;" class="imgProof" alt="">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="headerPaymentDetail">
                                            <h4 class="mt-5 fw-bold">Payment Detail</h4>
                                        </div>
                                        <div class="contentPaymentDetail mt-3">
    
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="textValue mb-3">
                                                        <p>Email Name</p>
                                                        <p>{{$result->email_pemesan}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="textValue mb-3">
                                                        <p>Order Name</p>
                                                        <p>{{$result->nama_pemesan}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="textValue mb-3">
                                                        <p>Order Number</p>
                                                        <p>{{$result->kodePesanan}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="textValue mb-3">
                                                        <p>Total</p>
                                                        <p>$ {{$result->total}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="textValue mb-3">
                                                        <p>Date</p>
                                                        <p>{{$getPesan}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="textValue mb-3">
                                                        <p>Your Order</p>
                                                        <select class="form-select wrapperOrder-Food" aria-label="Default select example">
                                                            <option selected>Click For Detail</option>
                                                            @foreach ($getNameOrder as $index => $result)
                                                                <option value="{{$result}} X {{$getAmountOrder[$index]}}">{{$result}} X {{$getAmountOrder[$index]}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="textValue mb-3">
                                                        <p>Status</p>
                                                        <p class="text-success">Delivered</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="textValue d-flex mt-3 mb-5">
                                                        <button type="submit" onclick="PayConfirmation({{$idUser}})">Payment Confirmation</button>
                                                    </div>
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                        
                    @endif
                @endforeach

        </div>
    </div>
@endif

@if ($cekTable)
<div class="container">
    <div class="WrapperInfoTable owl-carousel" data-aos="fade-up">

            @foreach ($OrderTable as $result)
                @if (strtotime(date("Y-m-d")) <= strtotime($result->tanggal_pesan) || $result->konfirmasi == 1 && $result->id_user == $Name )

                <?php 
                
                $idUser = $result->id;
                
                ?>

                <div class="cardOrder-2 mt-5" style="border-radius: 0px;">
                    <div class="row">

                        <div class="col-md-12 position-relative">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="{{asset('img')}}/PaymentDetail.jpg" style="border-radius: 0px;" class="imgProof" alt="">
                                </div>
                                <div class="col-md-7">
                                    <div class="headerPaymentDetail">
                                        <h4 class="mt-5 fw-bold">Table Info</h4>
                                    </div>
                                    <div class="contentPaymentDetail mt-3">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="textValue mb-3">
                                                    <p>Email Name</p>
                                                    <p>{{$result->email}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="textValue mb-3">
                                                    <p>Order Name</p>
                                                    <p>{{$result->nama}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="textValue mb-3">
                                                    <p>Table Name</p>
                                                    <p class="NameOfTable">{{$result->nama_meja}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="textValue mb-3">
                                                    <p>Tax</p>
                                                    <p>$ {{$result->pajak}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="textValue mb-3">
                                                    <p>Date</p>
                                                    <p>{{$result->tanggal_pesan}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="textValue mb-3">
                                                    <p>Status</p>
                                                    <p class="<?php echo ($result->proses == 1) ? 'text-warning' : 'text-success' ?>"><?php echo ($result->proses == 1) ? 'Waiting For Payment' : 'Payment In Full' ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="textValue d-flex mt-3 mb-5">
                                                    @if ($result->proses == 1)
                                                        <button type="submit" onclick="PayTableNow(event, {{$idUser}})">Pay Now</button>  
                                                        <p style="display: none;"></p>
                                                        <button type="submit" onclick="PayRestaurant(event, {{$idUser}})">Pay At The Restaurant</button>
                                                    @else
                                                        <p style="display: none;"></p>
                                                        <button type="submit" onclick="DeleteTableInfo({{$idUser}})">Delete History</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                    
                @endif
            @endforeach

        </div>
    </div>
@endif

<div class="container">
    <div class="headerPageOrder mt-5">
        <h4 class="textOrder fw-bold" data-aos="fade-up">Your Order</h4>
    </div>
    <div class="row mt-5 WrapperOverflow" data-aos="fade-up" data-aos-delay="100" style="overflow-y: auto; width: 100%; height: 118vh;">
        
    @foreach ($Pesanan as $Result)
        @if ($Name == $Result->id_user && "Online" == $Result->pembelian)
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