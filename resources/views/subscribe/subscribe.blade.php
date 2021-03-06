@extends('layouts/tamplateHome')

@section('title', "Subscribe")
    
@section('content')
<div class="fotoHeader-2">
    <div class="blackTrans-2"></div>
    <img src="{{asset('img')}}/bgSub.jpg" alt="">
</div>
<div class="container">
    <div class="headerInfoSub mt-4 d-flex justify-content-between">
        <h5 class="fw-bold" style="font-size: 15px;">Your Email : <span class="EmailUser">{{$Email}}</span></h5>
        <h5 class="fw-bold" style="font-size: 15px;">Your Subscription Status : {{$StatusUser}}</h5>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="cardSub-Left bg-white mt-3">
                <div class="headerCardSub">
                    <h3 class="fw-bold text-white">Fast cooking and free shipping</h3>
                    <p>Speed up delivery of your order so that you can enjoy orders in warm conditions</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="cardSub-Right bg-white mt-3">
                <div class="headerCardSub-Right text-center">
                    <p class="pt-2">Permanen</p>
                    <h4 class="fw-bold pb-2">Premium</h4>
                </div>
                <div class="infoPriceSub mt-3">
                    <p class="text-center fw-bold">Save 48%</p>
                    <p class="text-center">$ 5.80</p>
                    <h5 class="text-center fw-bold">$ <span class="HargaPremium">3</span></h5>
                </div>
                <div class="contentCardSub-Right mt-3">
                    <ul>
                        <li><span class="text-dark">Free shipping anytime</span></li>
                        <li><span class="text-dark">Using a special packaging to keep it warm</span></li>
                        <li><span class="text-dark">Delivery will be faster</span></li>
                        <li><span class="text-dark">Wrapped securely and kept clean</span></li>
                        <li><span class="text-dark">Orders are processed immediately</span></li>
                        <li><span class="text-dark">50% Discount when booking a table</span></li>
                    </ul>
                </div>
                <div class="btnCardSub-Rigt mt-3">
                    @if ($StatusUser == 'Premium')
                    <button class="btn btnCheckout">Thank You For Subscribing</button>
                    @else
                    <button type="submit" class="btn btnCheckout" onclick="ConfirmPayment()">Secure Checkout</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection