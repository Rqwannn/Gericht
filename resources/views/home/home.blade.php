@extends('layouts/tamplateHome')

@section('title', "Home")

@section('content')
      <div id="." class="fotoHeader">
          <div class="blackTrans"></div>
          <img src="{{asset('img')}}/BgHome.jpg" alt="">
      </div>

      <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('img')}}/ingredients.jpg" data-aos="zoom-in">
            </div>
            <div class="col-md-6 edit-text d-flex align-items-center">
                <div class="header-section-2" style="width: 75%">
                    <a href="/about">
                        <button type="submit" class="btn btn-orange text-white" data-aos="fade-right">About Us</button>
                    </a>
                    <h1 class="fw-bold" data-aos="fade-right" data-aos-delay="100">Delivering best ingredients for our trusty food loovers</h1>
                    <div class="parag-secton-2 mt-3">
                        <h5 style="font-size: 15px; line-height: 28px;" data-aos="fade-right" data-aos-delay="300">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </h5>
                        <h5 class="mt-3" style="font-size: 15px; line-height: 28px;" data-aos="fade-right" data-aos-delay="500">It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <div class="container mt-5">
          <div class="header-section-3">
            <h1 class="fw-bold" data-aos="fade-up">Special Offer</h1>
          </div>
          <div class="row mt-5">
              <div class="col-md-6 mb-5">
                <div class="container d-flex flex-column">
                    <button type="submit" class="btn btn-orange text-white" style="font-size: 13px; width: 150px;" data-aos="fade-up" data-aos-delay="100">Most Ordered</button>
                    <img src="{{asset('img')}}/roasted-duck-colvert.png" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="fw-bold mt-4" data-aos="fade-up" data-aos-delay="250">Roasted Duck Colvert</h2>
                    <div class="d-flex mt-2 mb-2">
                        <button type="submit" data-aos="fade-up" data-aos-delay="150" class="btn btn-orange-line text-orange" style="font-size: 10px; width: 100px;">Duck</button>
                        <button type="submit" data-aos="fade-up" data-aos-delay="250" class="btn btn-orange-line text-orange" style="font-size: 10px; width: 100px;">Turnips</button>
                        <button type="submit" data-aos="fade-up" data-aos-delay="350" class="btn btn-orange-line text-orange" style="font-size: 10px; width: 100px;">Sauce Salmis</button>
                    </div>
                    <h5 style="font-size: 15px; line-height: 28px;" data-aos="fade-up">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </h5>
                    <div class="d-flex justify-content-between mt-2">
                        <h3 class="fw-bold" data-aos="fade-up">$69</h3>
                        <div class="plus-cart d-flex" style="cursor: pointer">
                            <i class="fas fa-plus mt-2 orderTrendingMenu" data-status="Food" data-order="Roasted Duck Colvert" style="margin-right: 15px" data-aos="fade-up"></i>
                            <h4 class="fw-bold orderTrendingMenu" data-aos="fade-up" data-status="Food" data-order="Roasted Duck Colvert">Order Now</h4>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                  <div class="d-inline-flex flex-wrap justify-content-center">
                      <div class="card-special-menu" data-aos="fade-up">
                          <img class="mt-3" src="{{asset('img')}}/roasted-scallop.jpg"alt="">
                          <div class="bottom-special-manu mt-5">
                              <h5 class="text-white text-center" style="font-size: 15px">Roasted Scallop</h5>
                              <div class="popularitas-food d-flex justify-content-center mt-3">
                                  <i class="fas fa-star" style="color: gold"></i>
                                  <i class="fas fa-star" style="color: gold"></i>
                                  <i class="fas fa-star" style="color: gold"></i>
                                  <i class="fas fa-star" style="color: gold"></i>
                                  <i class="fas fa-star-half" style="color: gold"></i>
                              </div>
                              <h5 class="text-center text-white mt-3 mb-3">$69</h5>
                              <h5 class="text-white text-center orderTrendingMenu" data-status="Food" data-order="Roasted Scallop" style="font-size: 15px; cursor: pointer;">Order Now</h5>
                          </div>
                      </div>
                      <div class="card-special-menu" data-aos="fade-up" data-aos-delay="200">
                          <img class="mt-3" src="{{asset('img')}}/scottish-langoustine.jpg"alt="">
                          <div class="bottom-special-manu mt-5">
                            <h5 class="text-white text-center" style="font-size: 15px">Scottish Langoustine</h5>
                            <div class="popularitas-food d-flex justify-content-center mt-3">
                                <i class="fas fa-star" style="color: gold"></i>
                                <i class="fas fa-star" style="color: gold"></i>
                                <i class="fas fa-star" style="color: gold"></i>
                                <i class="fas fa-star" style="color: gold"></i>
                                <i class="fas fa-star" style="color: gold"></i>
                            </div>
                            <h5 class="text-center text-white mt-3 mb-3">$115</h5>
                            <h5 class="text-white text-center orderTrendingMenu" style="font-size: 15px; cursor: pointer;" data-status="Food" data-order="Scottish Langoustine">Order Now</h5>
                          </div>
                      </div>
                      <div class="card-special-menu" data-aos="fade-up">
                          <img class="mt-3" src="{{asset('img')}}/veal-sweetbread.jpg"alt="">
                          <div class="bottom-special-manu mt-5">
                            <h5 class="text-white text-center" style="font-size: 15px">Veal Sweetbread</h5>
                            <div class="popularitas-food d-flex justify-content-center mt-3">
                                <i class="fas fa-star" style="color: gold"></i>
                                <i class="fas fa-star" style="color: gold"></i>
                                <i class="fas fa-star" style="color: gold"></i>
                                <i class="fas fa-star" style="color: gold"></i>
                                <i class="fas fa-star" style="color: gold"></i>
                            </div>
                            <h5 class="text-center text-white mt-3 mb-3">$115</h5>
                            <h5 class="text-white text-center orderTrendingMenu" style="font-size: 15px; cursor: pointer;" data-status="Food" data-order="Veal Sweetbread">Order Now</h5>
                          </div>
                      </div>
                      <div class="card-special-menu" data-aos="fade-up" data-aos-delay="200">
                          <img class="mt-3" src="{{asset('img')}}/duck-foie-gras.jpg"alt="">
                          <div class="bottom-special-manu mt-5">
                            <h5 class="text-white text-center" style="font-size: 15px">Duck Foie Gras</h5>
                            <div class="popularitas-food d-flex justify-content-center mt-3">
                                <i class="fas fa-star" style="color: gold"></i>
                                <i class="fas fa-star" style="color: gold"></i>
                                <i class="fas fa-star" style="color: gold"></i>
                                <i class="fas fa-star" style="color: gold"></i>
                                <i class="fas fa-star-half" style="color: gold"></i>
                            </div>
                            <h5 class="text-center text-white mt-3 mb-3">$72</h5>
                            <h5 class="text-white text-center orderTrendingMenu" style="font-size: 15px; cursor: pointer;" data-status="Food" data-order="Duck Foie Gras">Order Now</h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="dessert-food" style="background: #22242a; width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="mt-5" src="{{asset('img')}}/food.jpg" data-aos="fade-left" data-aos-delay="250">
                </div>
                <div class="col-md-6">
                    <div class="header-section-4 mt-5" data-aos="fade-left" style="width: 75%">
                        <button type="submit" class="btn btn-orange text-white mb-3" style="font-size: 13px">-25% OFF</button>
                        <h1 class="fw-bold text-white">Enjoy our specially prepared food for you</h1>
                        <div class="parag-secton-4 mt-3">
                            <h5 class="mt-3 text-white" style="font-size: 15px; line-height: 28px;">Don't miss out on our daily special offers</h5>
                        </div>
                        <button type="submit" class="btn btn-white-line text-white" style="font-size: 13px; width: 100px;">See More</button>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="header-section-4 mb-5" data-aos="fade-right" style="width: 75%">
                        <button type="submit" class="btn btn-orange text-white mb-3" style="font-size: 13px">-15% OFF</button>
                        <h1 class="fw-bold text-white">New, amazing dessert offers every day</h1>
                        <div class="parag-secton-4 mt-3">
                            <h5 class="mt-3 text-white" style="font-size: 15px; line-height: 28px;">Just add some of our juicy side dishes</h5>
                        </div>
                        <button type="submit" class="btn btn-white-line text-white" style="font-size: 13px; width: 100px;">See More</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="mb-5" src="{{asset('img')}}/dessert.jpg" data-aos="fade-right" data-aos-delay="250">
                </div>
            </div>
        </div>
    </div>

    <div class="position-relative">
        <div class="container mt-5">
            <div class="header-section-5">
                <h1 class="fw-bold" data-aos="fade-up">Trending Menu</h1>
            </div>
            <div class="mt-3">
                <div class="contenrAllMenu owl-carousel d-flex">
                    <div class="cardAllMenu" data-aos="fade-up" data-aos-delay="150">
                        <img src="Img/Linguine-alle-vongole.jpg">
                        <div class="container">
                            <div class="cardContentMenu">
                                <div class="circleHot">
                                    <div class="circleRelative"></div>
                                </div>
                                <h5 class="text-center text-uppercase">Linguine Alle Vongole</h5>
                                <p class="text-center text-uppercase" style="color: #fb6340; margin-bottom: 10px;">$ 64</p>
                                <div class="BookingBtn">
                                    <button class="orderTrendingMenu" data-status="Food" data-order="Linguine Alle Vongole">Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cardAllMenu" data-aos="fade-up" data-aos-delay="150">
                        <img src="Img/chicken-saltimbocca.jpg">
                        <div class="container">
                            <div class="cardContentMenu">
                                <div class="circleHot">
                                    <div class="circleRelative"></div>
                                </div>
                                <h5 class="text-center text-uppercase">Chicken Saltimbocca</h5>
                                <p class="text-center text-uppercase" style="color: #fb6340; margin-bottom: 10px;">$ 77</p>
                                <div class="BookingBtn">
                                    <button class="orderTrendingMenu" data-status="Food" data-order="Chicken Saltimbocca">Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cardAllMenu" data-aos="fade-up" data-aos-delay="150">
                        <img src="Img/Cocktail.jpeg">
                        <div class="container">
                            <div class="cardContentMenu">
                                <div class="circleGreen">
                                    <div class="circleFix"></div>
                                </div>
                                <h5 class="text-center text-uppercase">Cocktail with lemon and cherry</h5>
                                <p class="text-center text-uppercase" style="color: #fb6340; margin-bottom: 10px;">$ 37</p>
                                <div class="BookingBtn">
                                    <button class="orderTrendingMenu" data-status="Drink" data-order="Cocktail">Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cardAllMenu" data-aos="fade-up" data-aos-delay="150">
                        <img src="Img/Panna-Cotta.jpg">
                        <div class="container">
                            <div class="cardContentMenu">
                                <div class="circleGreen">
                                    <div class="circleFix"></div>
                                </div>
                                <h5 class="text-center text-uppercase">Panna Cotta With Sweetened Cream</h5>
                                <p class="text-center text-uppercase" style="color: #fb6340; margin-bottom: 10px;">$ 37</p>
                                <div class="BookingBtn">
                                    <button class="orderTrendingMenu" data-status="Dessert" data-order="Panna Cotta">Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cardAllMenu" data-aos="fade-up" data-aos-delay="150">
                        <img src="Img/duck-foie-gras.jpg">
                        <div class="container">
                            <div class="cardContentMenu">
                                <div class="circleHot">
                                    <div class="circleRelative"></div>
                                </div>
                                <h5 class="text-center text-uppercase">Fancy Duck Foie Gras</h5>
                                <p class="text-center text-uppercase" style="color: #fb6340; margin-bottom: 10px;">$ 72</p>
                                <div class="BookingBtn">
                                    <button class="orderTrendingMenu" data-status="Food" data-order="Duck Foie Gras">Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cardAllMenu" data-aos="fade-up" data-aos-delay="150">
                        <img src="Img/Spritz.jpg">
                        <div class="container">
                            <div class="cardContentMenu">
                                <div class="circleGreen">
                                    <div class="circleFix"></div>
                                </div>
                                <h5 class="text-center text-uppercase">Lemonade Spritz With Lemon</h5>
                                <p class="text-center text-uppercase" style="color: #fb6340; margin-bottom: 10px;">$ 38</p>
                                <div class="BookingBtn">
                                    <button class="orderTrendingMenu" data-status="Drink" data-order="Spritz">Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection