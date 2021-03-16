@extends('layouts/tamplateHome')

@section("title", "Menu")

@section('content')
    <div class="fotoHeader">
        <div class="blackTrans"></div>
        <img src="{{asset('img')}}/headerMenu.jpg" alt="">
    </div>

    <div class="container mt-5" style="margin-bottom: 125px;">
        <div class="col-md-12">
            <div class="headerMenu">
                <h1 class="fw-bold text-center position-relative">MAIN MENU</h1>
            </div>
            <div class="contentMenu">
                <p class="text-center mt-3" style="font-size: 15px; line-height: 28px; margin: 0 15%">Contrary to popular belief, Lorem Ipsum is not simply random text.
                    It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="headerMenu-2">
                    <h3 class="fw-bold text-center position-relative">Food</h3>
                </div>

                <div class="OperationFood position-relative">
                    <div class="hiddenFood-Y">
                        
                    </div>
                    <div class="slideDown">
                        <div class="slideBtn" onclick="BtnUpFood()"></div>
                        <div class="slideBtn"></div>
                        <div class="slideBtn" onclick="BtnDownFood()"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 headerMenu-Img-2">
                <img src="{{asset('img')}}/FoodMenu.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">

            <div class="col-md-6 headerMenu-Img-2">
                <img src="{{asset('img')}}/DrinkMenu.jpg" id="drinkMenu" alt="">
            </div>

            <div class="col-md-6">
                <div class="headerMenu-2">
                    <h3 class="fw-bold text-center position-relative">Drink</h3>
                </div>

                <div class="OperationDrink position-relative">
                    <div class="hiddenDrink-Y">
                        
                    </div>
                    <div class="slideDownDrink">
                        <div class="slideBtnDrink" onclick="BtnUpDrink()"></div>
                        <div class="slideBtnDrink"></div>
                        <div class="slideBtnDrink" onclick="BtnDownDrink()"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="headerMenu-2">
                        <h3 class="fw-bold text-center position-relative">Dessert</h3>
                    </div>
    
                    <div class="OperationDessert position-relative">
                        <div class="hiddenDessert-Y">
                            
                        </div>
                        <div class="slideDown">
                            <div class="slideBtnDessert" onclick="BtnUpDessert()"></div>
                            <div class="slideBtnDessert"></div>
                            <div class="slideBtnDessert" onclick="BtnDownDessert()"></div>
                        </div>
                    </div>
    
                </div>
                <div class="col-md-6 headerMenu-Img-2">
                    <img src="{{asset('img')}}/dessertMenu.jpg" alt="">
                </div>
            </div>
        </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7">
                <div class="cardOrder mb-3">
                    <div class="headerOrder">
                        <h3 class="fw-bold">Order Your Food</h3>
                    </div>
                    <div class="inputOrder mt-3">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="inputValues d-flex flex-column mt-3">
                                        <label for="email" class="mb-1">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" value=" 
                                            @if ($Email != 'Guest@gmail.com')
                                                {{$Email}}
                                            @else
                                                
                                            @endif" placeholder="Type Your Email">
                                    </div>
                                    <label class="text-danger AuthEmail" style="font-size: 14px; display: none;"></label>
                                </div>
                                <div class="col-md-6">
                                    <div class="inputValues d-flex flex-column mt-3">
                                        <label for="name" class="mb-1">Name</label>
                                        <input type="text" name="name" id="name" class="form-control" value="<?php echo($Name != 'Guest') ? $Name : '' ?>" placeholder="Type Your Name">
                                        <label class="text-danger AuthName" style="font-size: 14px; display: none;"></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inputValues d-flex flex-column mt-3">
                                        <label for="food" class="mb-1">Food</label>
                                        <select class="form-select" id="food" name="food" aria-label="Default select example">
                                            <option selected>Choose Your Food</option>
                                            @foreach ($Food as $result)
                                                <option value="{{$result->nama}}">{{$result->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inputValues d-flex flex-column mt-3">
                                        <label for="Total" class="mb-1">Total</label>
                                        <input type="text" name="totalFood" id="totalFood" class="form-control" placeholder="Total" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                        <label class="text-danger AuthTotalFood" style="font-size: 14px; display: none;"></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inputValues d-flex flex-column mt-3">
                                        <label for="drink" class="mb-1">Drink</label>
                                        <select class="form-select" id="drink" name="drink" aria-label="Default select example">
                                            <option selected>Choose Your Drink</option>
                                            @foreach ($Drink as $result)
                                                <option name="{{$result->nama}}">{{$result->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inputValues d-flex flex-column mt-3">
                                        <label for="Total" class="mb-1">Total</label>
                                        <input type="text" name="totalDrink" id="totalDrink" class="form-control" placeholder="Total" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                        <label class="text-danger AuthTotalDrink" style="font-size: 14px; display: none;"></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inputValues d-flex flex-column mt-3">
                                        <label for="dessert" class="mb-1">Dessert</label>
                                        <select class="form-select" id="dessert" name="dessert" aria-label="Default select example">
                                            <option selected>Choose Your Dessert</option>
                                            @foreach ($Dessert as $result)
                                                <option name="{{$result->nama}}">{{$result->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inputValues d-flex flex-column mt-3">
                                        <label for="Total" class="mb-1">Total</label>
                                        <input type="text" name="totalDessert" id="totalDessert" class="form-control" placeholder="Total" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                        <label class="text-danger AuthTotalDessert" style="font-size: 14px; display: none;"></label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="inputValues d-flex flex-column mt-3">
                                        <label for="Total" class="mb-1">Your Address</label>
                                        <textarea class="form-control YourAddress" placeholder="Give Your Address Here" name="totalDessert" id="Address" style="resize: none; height: 100px;"></textarea>
                                        <label class="text-danger AuthAddress" style="font-size: 14px; display: none;"></label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="inputValues d-flex justify-content-between mt-5">
                                        <input type="hidden" value="@if ($Name){{$Name}}@else'Guest'@endif" class="id_user">
                                        <button type="submit" style="width: 45%;" class="btn btn-primary SubmitOrder">Submit</button>
                                        <button type="submit" style="width: 45%;" class="btn btn-danger ResetOrder">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="infoOrder">
                        <div class="cardOrder-2 infoLengkap my-3">
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

            <div class="col-md-5">
                    <div class="row">
    
                        <div class="col-md-12">
                            <div class="cardOrder">
                                <div class="headerOrder-Right">
                                    <h5 class="lineDown fw-bold mb-4">Total Orders</h5>
                                </div>
                                <div class="FoodOrder">
                                    <div class="contentOrder mt-2 d-flex justify-content-between">
                                        <div class="d-flex setOrder">
                                            <p style="margin-right: 5px;" class="setName">Order...</p>
                                            <p>X <span class="setAmount">...</span></p>
                                        </div>
                                        <p>$ <span class="setPrice">0</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="cardOrder mt-3">
                                <div class="infoPerson">
                                    <div class="headerOrder-Right">
                                        <h5 class="lineDown fw-bold mb-4">You</h5>
                                    </div>
                                    <div class="content-Person">
                                        <div class="mt-2 d-flex justify-content-between">
                                            <p class="textEmail">Email :</p>
                                            <p class="yourEmail">YourEmail@gmail.com</p>
                                        </div>
                                        <div class="mt-2 d-flex justify-content-between">
                                            <p class="textName">Name :</p>
                                            <p class="yourName">John Doe</p>
                                        </div>
                                    </div>
                                    <div class="headerOrder-Right">
                                        <h5 class="lineDown fw-bold mb-4">Your Address</h5>
                                    </div>
                                    <div class="content-Person">
                                        <div class="mt-2">
                                            <div class="row">
                                                <div class="col-md-12" style="overflow-x: hidden;">
                                                    <p class="wrapperAddress">Where will we deliver</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="headerOrder-Right">
                                    <h5 class="lineDown fw-bold my-4">Total Price</h5>
                                </div>
                                <div class="PayOrder mb-3">
                                    <div class="contentOrder mt-2 d-flex justify-content-between">
                                        <p>Shipping Cost :</p>
                                        @if ($StatusUser == "Premium")
                                        <p><span class="Shipping-Cost">FREE</span></p>
                                        @else
                                        <p>$ <span class="Shipping-Cost">2</span></p>
                                        @endif
                                    </div>
                                    <div class="contentOrder mt-2 d-flex justify-content-between">
                                        <p>Tax :</p>
                                        <p>$ <span class="Tax">1</span></p>
                                    </div>
                                    <div class="contentOrder mt-2 d-flex justify-content-between">
                                        <p>Order Fee :</p>
                                        <p>$ <span class="Order-Fee">0</span></p>
                                    </div>
                                </div>
                                <div class="totalPayment">
                                    <div class="PaymentOrder pt-3 d-flex justify-content-between">
                                        <p>Total Payment</p>
                                        <p>$ <span class="totalPembayaran">3</span></p>
                                    </div>
                                </div>
                                <div class="btnPayment mt-2 d-flex justify-content-between">
                                    <button type="submit" name="BTNOrder" class="btn btn-primary text-white PayNow" style="width: 50%">Place An Order</button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection