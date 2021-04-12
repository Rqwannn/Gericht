@extends('layouts/tamplateHome')

@section('title', "Private Dining")

@section('content')
    <div id="." class="fotoHeader">
        <div class="blackTrans"></div>
        <img src="{{asset('img')}}/private-dining.jpg" alt="">
    </div>

    <div class="container mt-5 d-flex justify-content-center flex-column  align-items-center">
        <div class="privateDining-header">
            <h1 class="text-center fw-bold" data-aos="fade-up" style="text-transform: uppercase">Gericht</h1>
        </div>
        <div class="privateDining-logo mt-1 mb-3">
            <img src="{{asset('img')}}/MainLogo.png" data-aos="fade-up" style="width: 75px; height: 75px;">
        </div>
        <div class="privateDining-content">
            <p class="text-center" style="font-size: 15px; line-height: 28px; margin: 0 5%;" data-aos="fade-up">
                Gericht, awalnya nama sebuah mitos, yang kini menjadi nama Grande Maison, 
                di mana perpaduan makanan dan anggur ditampilkan dengan kehalusan dan modernitas. 
                Produk-produknya, ditingkatkan dengan jus dan masakan, berkembang seiring dengan musim, 
                disertai dengan anggur yang matang di ruang bawah tanah bersejarah tempat crus dan grands crus bertemu. 
                Seni memotong meja atau menekuk adalah sorotan dari penemuan ini.
            </p>
        </div>
        <div class="privateDining-bottom">
            <button class="btn btn-orange text-white mt-3" id="BookTable" data-aos="fade-up">Book Your Table</button>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row mb-5 privateDining2">
            <div class="col-md-6 mt-2 privateDining2-img">
                <img src="{{asset('img')}}/private-dining-6.jpg" data-aos="zoom-in-right">
            </div>
            <div class="col-md-6 d-flex justify-content-center flex-column mt-2">
                <div class="privateDining2-header">
                    <h3 class="fw-bold" data-aos="fade-left">Japanese Table | From 6 To 12 Guests</h3>
                </div>
                <div class="privateDining2-content mt-3">
                    <h5 class="mb-3" style="font-size: 15px;" data-aos="fade-left">Impressive Japanese themed dining room, and a peaceful atmosphere</h5>
                    <h5 style="font-size: 15px; line-height: 30px;" data-aos="fade-left">
                        Today, this Asian-style lounge is covered in tapestries and blue lacquerware, synonymous with life and prosperity in Asian thought.
                        Located on the top floor, this dining area can accommodate between 6 and 12 guests.</h5>
                </div>
                <div class="privateDining2-bottom">
                    <button class="btn btn-orange text-white mt-3" data-aos="fade-left">Request Proposal</button>
                </div>
            </div>
        </div>
        <div class="row privateDining2">
            <div class="col-md-6 mt-2 privateDining2-img">
                <img src="{{asset('img')}}/private-dinning-16.jpg" data-aos="zoom-in-right">
            </div>
            <div class="col-md-6 d-flex justify-content-center flex-column mt-2">
                <div class="privateDining2-header">
                    <h3 class="fw-bold" data-aos="fade-left">Chinese Table | From 12 To 20 Guests</h3>
                </div>
                <div class="privateDining2-content mt-3">
                    <h5 class="mb-3" style="font-size: 15px;" data-aos="fade-left">A Chinese-themed dining room that seems luxurious and a modern atmosphere</h5>
                    <h5 style="font-size: 15px; line-height: 30px;" data-aos="fade-left">
                        A hidden place, where your guests share warm and friendly moments.
                        Located on the top floor, this dining room can accommodate between 12 and 20 guests.</h5>
                </div>
                <div class="privateDining2-bottom">
                    <button class="btn btn-orange text-white mt-3" data-aos="fade-left">Request Proposal</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container breakfast-section">
        <div class="row">
            <div class="col-md-6">
                <div class="header-breakFast breakfast mt-5">
                    <h1 class="text-right" data-aos="fade-left">BREAKFAST ?</h1>
                </div>
                <div class="content-breakFast breakfast mt-3">
                    <p style="font-size: 15px; line-height: 30px;" data-aos="fade-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="bottom-breakFast mt-5">
                    <h3 style="width: 70%;" data-aos="fade-right">Bread with eggs or bread with blueberries</h3>
                    <p class="mt-3" style="font-size: 15px; line-height: 30px; width: 65%;" data-aos="fade-right">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="privateDining2-bottom">
                    <a href="/menu" class="btn btn-orange text-white mt-3" data-aos="fade-right">See More</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="orange-horizontal" data-aos="zoom-in">
                    <div class="row">
                        <div class="left-img">
                            <img src="{{asset('img')}}/breakfast1.jpg">
                        </div>
                        <div class="right-img">
                            <img src="{{asset('img')}}/breakfast2.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 edit-privateDining-2">
                        <img src="{{asset('img')}}/private-dining-2.jpg" data-aos="fade-up">
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center flex-column" data-aos="fade-up" data-aos-delay="200">
                        <div class="header-privateDining-2">
                            <h5 class="fw-bold">Dating With Your Beloved Partner</h5>
                        </div>
                        <div class="content-privateDining-2 mt-3">
                            <p style="font-size: 14px; line-height: 28px;">Contrary to popular belief, Lorem Ipsum is not simply random text.
                            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 edit-privateDining-2">
                        <img src="{{asset('img')}}/private-dining-4.jpg" data-aos="fade-up">
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center flex-column" data-aos="fade-up" data-aos-delay="200">
                        <div class="header-privateDining-2">
                            <h5 class="fw-bold">Eat Together With Our Beloved Little Family</h5>
                        </div>
                        <div class="content-privateDining-2 mt-3">
                            <p style="font-size: 14px; line-height: 28px;">Contrary to popular belief, Lorem Ipsum is not simply random text.
                            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection