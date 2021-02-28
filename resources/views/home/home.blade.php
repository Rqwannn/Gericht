@extends('layouts/tamplateHome')

@section('title', "Home")

@section('content')
      <div class="fotoHeader">
          <div class="blackTrans"></div>
          <img src="{{asset('img')}}/BgHome.jpg" alt="">
      </div>

      <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('img')}}/ingredients.jpg" alt="">
            </div>
            <div class="col-md-6 edit-text d-flex align-items-center">
                <div class="header-section-2" style="width: 75%">
                    <button type="submit" class="btn btn-orange text-white">About Us</button>
                    <h1 class="fw-bold">Delivering best ingredients for our trusty food loovers</h1>
                    <div class="parag-secton-2 mt-3">
                        <h5 style="font-size: 15px; line-height: 28px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </h5>
                        <h5 class="mt-3" style="font-size: 15px; line-height: 28px;">It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <div class="container mt-5">
          <div class="header-section-3">
            <h1 class="fw-bold">Special Offer</h1>
          </div>
          <div class="row mt-5">
              <div class="col-md-6 mb-5">
                <div class="container d-flex flex-column">
                    <button type="submit" class="btn btn-orange text-white" style="font-size: 13px; width: 150px;">Most Ordered</button>
                    <img src="{{asset('img')}}/roasted-duck-colvert.png" alt="">
                    <h2 class="fw-bold mt-4">Roasted Duck Colvert</h2>
                    <div class="d-flex mt-2 mb-2">
                        <button type="submit" class="btn btn-orange-line text-orange" style="font-size: 10px; width: 100px;">Duck</button>
                        <button type="submit" class="btn btn-orange-line text-orange" style="font-size: 10px; width: 100px;">Turnips</button>
                        <button type="submit" class="btn btn-orange-line text-orange" style="font-size: 10px; width: 100px;">Sauce Salmis</button>
                    </div>
                    <h5 style="font-size: 15px; line-height: 28px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </h5>
                    <div class="d-flex justify-content-between mt-2">
                        <h3 class="fw-bold">$69</h3>
                        <div class="plus-cart d-flex" style="cursor: pointer">
                            <i class="fas fa-plus mt-2" style="transform: translateX(-50%)"></i>
                            <h4 class="fw-bold">Add To Cart</h4>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                  <div class="d-inline-flex flex-wrap justify-content-center">
                      <div class="card-special-menu">
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
                              <h5 class="text-white text-center" style="font-size: 15px; cursor: pointer;">Add To Cart</h5>
                          </div>
                      </div>
                      <div class="card-special-menu">
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
                            <h5 class="text-white text-center" style="font-size: 15px; cursor: pointer;">Add To Cart</h5>
                          </div>
                      </div>
                      <div class="card-special-menu">
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
                            <h5 class="text-white text-center" style="font-size: 15px; cursor: pointer;">Add To Cart</h5>
                          </div>
                      </div>
                      <div class="card-special-menu">
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
                            <h5 class="text-white text-center" style="font-size: 15px; cursor: pointer;">Add To Cart</h5>
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
                    <img class="mt-5" src="{{asset('img')}}/food.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <div class="header-section-4 mt-5" style="width: 75%">
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
                    <div class="header-section-4 mb-5" style="width: 75%">
                        <button type="submit" class="btn btn-orange text-white mb-3" style="font-size: 13px">-15% OFF</button>
                        <h1 class="fw-bold text-white">New, amazing dessert offers every day</h1>
                        <div class="parag-secton-4 mt-3">
                            <h5 class="mt-3 text-white" style="font-size: 15px; line-height: 28px;">Just add some of our juicy side dishes</h5>
                        </div>
                        <button type="submit" class="btn btn-white-line text-white" style="font-size: 13px; width: 100px;">See More</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="mb-5" src="{{asset('img')}}/dessert.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="position-relative">
        <div class="container mt-5">
            <div class="header-section-5">
                <h1 class="fw-bold">Trending Food</h1>
            </div>
            <div class="mt-3">
                <div class="slide-trending-food">
                    
                </div>
            </div>
        </div>

        <div class="slide-icon-right">
            <div class="slide-right slide-food-right" onclick="ClickRight()">
                <i class="fas fa-angle-right"></i>
            </div>
            <div class="slide-left slide-food-left" onclick="ClickLeft()">
                <i class="fas fa-angle-left"></i>
            </div>
        </div>

    </div>

    <div class="position-relative">
        <div class="container mt-5">
            <div class="header-section-5">
                <h1 class="fw-bold">Dessert Menu</h1>
            </div>
            <div class="mt-3">
                <div class="slide-trending-dessert">
                    <div class="col-md-3">
                        <div class="card-trending-dessert d-flex justify-content-center flex-column mb-3">
                            <div class="header-trending-food d-flex justify-content-center mt-3">
                                <img src="{{asset('img')}}/roasted-figs-honeyYogurt.jpg" class="rounded-circle" alt="">
                            </div>
                            <div class="text-left content-trending-food mt-4">
                                <h5 class="text-white fw-bold" style="font-size: 17px;">Roasted Figs</h5>
                                <h5 class="text-white mt-3" style="font-size: 15px; line-height: 27px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
                            </div>
                            <div class="d-flex justify-content-between mb-2 mt-3 text-white harga-trending-food">
                                <h5>$43</h5>
                                <div class="d-flex justify-content-between" style="cursor: pointer;">
                                    <i class="fas fa-plus mt-1" style="transform: translateX(-60%)"></i>
                                    <h5>Add To Cart</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-trending-dessert d-flex justify-content-center flex-column mb-3 ml-1">
                            <div class="header-trending-food d-flex justify-content-center mt-3">
                                <img src="{{asset('img')}}/Panna-Cotta.jpg" class="rounded-circle" alt="">
                            </div>
                            <div class="text-left content-trending-food mt-4">
                                <h5 class="text-white fw-bold" style="font-size: 17px;">Panna Cotta</h5>
                                <h5 class="text-white mt-3" style="font-size: 15px; line-height: 27px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
                            </div>
                            <div class="d-flex justify-content-between mb-2 mt-3 text-white harga-trending-food">
                                <h5>$40</h5>
                                <div class="d-flex justify-content-between" style="cursor: pointer;">
                                    <i class="fas fa-plus mt-1" style="transform: translateX(-60%)"></i>
                                    <h5>Add To Cart</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-trending-dessert d-flex justify-content-center flex-column mb-3 ml-1">
                            <div class="header-trending-food d-flex justify-content-center mt-3">
                                <img src="{{asset('img')}}/rote-grütze.jpg" class="rounded-circle" alt="">
                            </div>
                            <div class="text-left content-trending-food mt-4">
                                <h5 class="text-white fw-bold" style="font-size: 17px;">Rote Grütze</h5>
                                <h5 class="text-white mt-3" style="font-size: 15px; line-height: 27px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
                            </div>
                            <div class="d-flex justify-content-between mb-2 mt-3 text-white harga-trending-food">
                                <h5>$32</h5>
                                <div class="d-flex justify-content-between" style="cursor: pointer;">
                                    <i class="fas fa-plus mt-1" style="transform: translateX(-60%)"></i>
                                    <h5>Add To Cart</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-trending-dessert d-flex justify-content-center flex-column mb-3">
                            <div class="header-trending-food d-flex justify-content-center mt-3">
                                <img src="{{asset('img')}}/Semifreddo.jpg" class="rounded-circle" alt="">
                            </div>
                            <div class="text-left content-trending-food mt-4">
                                <h5 class="text-white fw-bold" style="font-size: 17px;">Semifreddo</h5>
                                <h5 class="text-white mt-3" style="font-size: 15px; line-height: 27px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
                            </div>
                            <div class="d-flex justify-content-between mb-2 mt-3 text-white harga-trending-food">
                                <h5>$46</h5>
                                <div class="d-flex justify-content-between" style="cursor: pointer;">
                                    <i class="fas fa-plus mt-1" style="transform: translateX(-60%)"></i>
                                    <h5>Add To Cart</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection