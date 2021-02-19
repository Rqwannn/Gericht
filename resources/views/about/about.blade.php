@extends('layouts/tamplateHome')

@section("title", "About")

@section('content')
    <div class="fotoHeader">
        <div class="blackTrans"></div>
        <img src="{{asset('img')}}/about.jpg" alt="">
    </div>

    <div class="container">
        <div class="col-md-12 flex justify-content-center">
            <div class="about-card-top">
                <div class="header-about-top mt-5">
                    <h5 class="text-white text-center" style="font-size: 13px; line-height: 28px;">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry 
                    </h5>
                </div>
                <div class="header-about-center mt-3">
                    <h4 class="text-white text-uppercase text-center">so check it out , here is more insight inside into what we do</h4>
                </div>
                <div class="header-about-bottom mb-5 mt-3">
                    <h5 class="text-white text-center" style="font-size: 15px; line-height: 28px; margin: 0 150px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container edit-our-chef">
        <div class="row">
            <div class="col-md-10 d-flex align-items-center">
                <div class="line-about"></div>
            </div>
            <div class="col-md-2">
                <h5 class="fw-bold">OUR CHEF</h5>
            </div>
        </div>
    </div>

    <div class="position-relative">
        <div class="container photo-our-chef mb-5 mt-4">
            <div class="row">
                <div class="col-md-4 d-flex flex-column">
                    <div class="position-relative">
                        <img src="{{asset('img')}}/chef2.jpg" alt="">
                        <h5 class="text-white fw-bold">Akbar</h5>
                    </div>
                    <div class="d-flex justify-content-center mt-3 mb-3">
                        <button type="submit" class="btn btn-orange text-white" style="font-size: 13px; width: 150px;">View More</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative">
                        <img src="{{asset('img')}}/chef1.jpg" alt="">
                        <h5 class="text-white fw-bold">Andika</h5>
                    </div>
                    <div class="d-flex justify-content-center mt-3 mb-3">
                        <button type="submit" class="btn btn-orange text-white" style="font-size: 13px; width: 150px;">View More</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative">
                        <img src="{{asset('img')}}/chef3.jpg" alt="">
                        <h5 class="text-white fw-bold">Rizki</h5>
                    </div>
                    <div class="d-flex justify-content-center mt-3 mb-3">
                        <button type="submit" class="btn btn-orange text-white" style="font-size: 13px; width: 150px;">View More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="under-background-chef position-absolute">
    
        </div>
    </div>

    <div class="about-ceo-card">
        <div class="container">
            <div class="row">   

                <div class="col-md-6 position-relative">
                    
                    <div class="header-about-ceo">
                        <div class="row">
                            <div class="col-md-10 d-flex align-items-center">
                                <div class="line-about-ceo"></div>
                            </div>
                            <div class="col-md-2 d-flex align-items-center">
                                <h5 class="fw-bold text-white mt-2" style="font-size: 14px;">OUR CEO</h5>
                            </div>
                        </div>
                    </div>

                    <div class="content-about-ceo mt-3">
                        <h1 class="fw-bold text-white">Our CEO always makes our restaurant look good</h1>
                        <h5 class="mt-3 text-white" style="font-size: 15px; line-height: 30px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. There are many variations of passages of Lorem Ipsum available.
                        </h5>
                        <div class="d-flex position-absolute mt-3" style="right: 0;">
                            <button type="submit" class="btn btn-orange text-white" style="font-size: 13px; width: 150px;">View More</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('img')}}/ceo.jpg" alt="">
                </div>

            </div>
        </div>
    </div>
@endsection