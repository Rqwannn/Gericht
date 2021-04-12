@extends('layouts/tamplateHome')

@section("title", "About")

@section('content')
    <div id="." class="fotoHeader">
        <div class="blackTrans"></div>
        <img src="{{asset('img')}}/about.jpg" alt="">
    </div>

    <div class="container">
        <div class="col-md-12 flex justify-content-center" data-aos="zoom-in">
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

    <div class="container edit-our-location">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <div class="contentLocation-Left">
                    <h4 data-aos="fade-right">Jakarta, Indonesia</h4>
                    <h6 data-aos="fade-right" data-aos-delay="200">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h6>
                    <h4 class="mt-4" data-aos="fade-right">Working Hours</h4>
                    <h6 data-aos="fade-right" data-aos-delay="200">Monday - Thursday 10.00 am - 9.00 am</h6>
                    <h6 data-aos="fade-right" data-aos-delay="200">Friday - Sunday 10.00 am - 10.00 am</h6>
                    <div class="InfoLocation d-flex">
                        <h6 class="mt-4" data-aos="fade-right" data-aos-delay="200"><i class="fas fa-phone-alt"></i> <span class="phoneNumber" style="margin-right: 25px;">+62 812-1111-2222</span></h6>
                        <h6 class="mt-4 ml-4" data-aos="fade-right" data-aos-delay="400"><i class="fas fa-envelope"></i> <span class="phoneNumber">Gericht@Gericht.com</span></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contentLocation-Right">
                    <iframe data-aos="zoom-in-down" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126936.9715303101!2d106.68721814317291!3d-6.160164032543802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7c9d110d719%3A0x300c5e82dd4b8a0!2sWest%20Jakarta%2C%20Kebonjeruk%2C%20West%20Jakarta%20City%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1617084468141!5m2!1sen!2sid" width="550" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container edit-our-chef">
        <div class="row">
            <div class="col-md-10 d-flex align-items-center">
                <div class="line-about" data-aos="fade-left" data-aos-delay="300"></div>
            </div>
            <div class="col-md-2">
                <h5 class="fw-bold" data-aos="fade-left">OUR CHEF</h5>
            </div>
        </div>
    </div>

    <div class="position-relative">
        <div class="container photo-our-chef mb-5 mt-4">
            <div class="row">
                <div class="col-md-4 d-flex flex-column" data-aos="fade-up">
                    <div class="position-relative">
                        <img src="{{asset('img')}}/chef2.jpg" alt="">
                        <div class="d-flex justify-content-center">
                            <h5 class="text-white text-center fw-bold" data-aos="fade-up">Akbar</h5>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 mb-3">
                        <button type="submit" class="btn btn-orange text-white" data-aos="fade-up" data-aos-delay="200" style="font-size: 13px; width: 150px;">View More</button>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column" data-aos="fade-up" data-aos-delay="200">
                    <div class="position-relative">
                        <img src="{{asset('img')}}/chef1.jpg" alt="">
                        <div class="d-flex justify-content-center">
                            <h5 class="text-white text-center fw-bold" data-aos="fade-up">Andika</h5>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 mb-3">
                        <button type="submit" class="btn btn-orange text-white" data-aos="fade-up" data-aos-delay="200" style="font-size: 13px; width: 150px;">View More</button>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column" data-aos="fade-up" data-aos-delay="400">
                    <div class="position-relative">
                        <img src="{{asset('img')}}/chef3.jpg" alt="">
                        <div class="d-flex justify-content-center">
                            <h5 class="text-white text-center fw-bold" data-aos="fade-up">Rizki</h5>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 mb-3">
                        <button type="submit" class="btn btn-orange text-white" data-aos="fade-up" data-aos-delay="200" style="font-size: 13px; width: 150px;">View More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="under-background-chef position-absolute" data-aos="zoom-in">
    
        </div>
    </div>

    <div class="about-ceo-card">
        <div class="container">
            <div class="row">   

                <div class="col-md-6 position-relative">
                    
                    <div class="header-about-ceo">
                        <div class="row">
                            <div class="col-md-10 d-flex align-items-center">
                                <div class="line-about-ceo" data-aos="fade-left" data-aos-delay="300"></div>
                            </div>
                            <div class="col-md-2 d-flex align-items-center">
                                <h5 class="fw-bold text-white mt-2" data-aos="fade-left" style="font-size: 14px;">OUR CEO</h5>
                            </div>
                        </div>
                    </div>

                    <div class="content-about-ceo mt-3">
                        <h1 class="fw-bold text-white" data-aos="fade-left">Our CEO always makes our restaurant look good</h1>
                        <h5 class="mt-3 text-white" data-aos="fade-left" data-aos-delay="200" style="font-size: 15px; line-height: 30px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. There are many variations of passages of Lorem Ipsum available.
                        </h5>
                        <div class="d-flex position-absolute mt-3" style="right: 0;">
                            <button type="submit" class="btn btn-orange text-white" data-aos="fade-left" data-aos-delay="300" style="font-size: 13px; width: 150px;">View More</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('img')}}/ceo.jpg" data-aos="zoom-in">
                </div>

            </div>
        </div>
    </div>
@endsection