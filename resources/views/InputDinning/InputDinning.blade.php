@extends('layouts/tamplatePayment')

@section("title", "Order Table")

@section('content')
<div class="bodyContent">
    <div class="wrapperTableLeft">

        <div class="infoPaymentStatus">
            <div class="barPayment d-flex justify-content-around">
                <div class="barOne rounded-circle d-flex justify-content-center align-items-center">
                    <div class="LineOne"></div>
                    <i class="fas fa-feather-alt text-success" style="font-size: 12px;"></i>
                    <i class="fas fa-check-circle" style="font-size: 12px; display: none;"></i>
                </div>
                <div class="barTwo rounded-circle d-flex justify-content-center align-items-center">
                    <div class="LineTwo"></div>
                    <i class="fas fa-scroll text-primary" style="font-size: 12px;"></i>
                </div>
                <div class="barThree rounded-circle d-flex justify-content-center align-items-center">
                    <i class="fas fa-credit-card text-primary" style="font-size: 12px;"></i>
                </div>
            </div>
        </div>
        <div class="WrapperLPart-1">
            <div class="container">
                <div class="ContentCategoryTable mt-5 mx-2">
                    <h4 class="fw-bold">Category Table</h4>
                    
                    <div class="d-flex justify-content-between flex-wrap mt-4">
                        <div class="wrapperInfoName TableText-1">
                            <p class="activeTable">Japanese Table</p>
                        </div>
                        <div class="wrapperInfoName TableText-2">
                            <p>Chinese Table</p>
                        </div>
                        <div class="wrapperInfoName TableText-3">
                            <p>Dating Table</p>
                        </div>
                        <div class="wrapperInfoName TableText-4">
                            <p>Family Table</p>
                        </div>
                    </div>
    
                    <div class="WrapperDetailTable mt-3">
    
                        <div class="WrapperTable-One TrueLine">
                            <div class="deskripsiTable">
                                <h4 class="mb-4">Table Description</h4>
                                <p>Impressive Japanese themed dining room, and a peaceful atmosphere.</p>
                                <p>
                                    Today, this Asian-style lounge is covered in tapestries and blue lacquerware, 
                                    synonymous with life and prosperity in Asian thought. Located on the top floor, this dining area can accommodate between 6 and 12 guests.
                                </p>
                            </div>
                            <div class="detailTable mt-4">
                                <h4 class="mb-4">Detail Table</h4>
                                <div class="d-flex mb-3 lineTable justify-content-between">
                                    <div>Minimum Of People</div>
                                    <div>6 People</div>
                                </div>
                                <div class="d-flex mb-3 lineTable justify-content-between">
                                    <div>Maximum Of People</div>
                                    <div>12 People</div>
                                </div>
                                <div class="d-flex mb-3 lineTable justify-content-between">
                                    <div>Booking Tax</div>
                                    <div>$ <span id="Tax"><?php echo($StatusUser == "Member") ? "6" : "3" ?></span> </div>
                                </div>
                                <div class="d-flex mb-3 lineTable justify-content-between">
                                    <div>Theme</div>
                                    <div>Japanese culture</div>
                                </div>
                            </div>
                        </div>
    
                        <div class="WrapperTable-Two TrueLine">
                            <div class="deskripsiTable">
                                <h4 class="mb-4">Table Description</h4>
                                <p>A Chinese-themed dining room that seems luxurious and a modern atmosphere.</p>
                                <p>
                                    A hidden place, where your guests share warm and friendly moments. Located on the top floor, 
                                    this dining room can accommodate between 12 and 20 guests.
                                </p>
                            </div>
                            <div class="detailTable mt-4">
                                <h4 class="mb-4">Detail Table</h4>
                                <div class="d-flex mb-3 lineTable justify-content-between">
                                    <div>Minimum Of People</div>
                                    <div>12 People</div>
                                </div>
                                <div class="d-flex mb-3 lineTable justify-content-between">
                                    <div>Maximum Of People</div>
                                    <div>20 People</div>
                                </div>
                                <div class="d-flex mb-3 lineTable justify-content-between">
                                    <div>Booking Tax</div>
                                    <div>$ <span id="Tax"><?php echo($StatusUser == "Member") ? "6" : "3" ?></span> </div>
                                </div>
                                <div class="d-flex mb-3 lineTable justify-content-between">
                                    <div>Theme</div>
                                    <div>Luxury Chine Table</div>
                                </div>
                            </div>
                        </div>
    
                        <div class="WrapperTable-Three TrueLine">
                            <div class="deskripsiTable">
                                <h4 class="mb-4">Table Description</h4>
                                <p>Family dining room that seems fun with your beloved family.</p>
                                <p>
                                    A family place, where you share warm and friendly moments. Located on the first floor,
                                    This dining room can accommodate between 3 and 6 guests.
                                </p>
                            </div>
                            <div class="detailTable mt-4">
                                <h4 class="mb-4">Detail Table</h4>
                                <div class="d-flex mb-3 lineTable justify-content-between">
                                    <div>Minimum Of People</div>
                                    <div>3 People</div>
                                </div>
                                <div class="d-flex mb-3 lineTable justify-content-between">
                                    <div>Maximum Of People</div>
                                    <div>6 People</div>
                                </div>
                                <div class="d-flex mb-3 lineTable justify-content-between">
                                    <div>Booking Tax</div>
                                    <div>$ <span id="Tax"><?php echo($StatusUser == "Member") ? "6" : "3" ?></span> </div>
                                </div>
                                <div class="d-flex mb-3 lineTable justify-content-between">
                                    <div>Theme</div>
                                    <div>The Warmth Of Affection</div>
                                </div>
                            </div>
                        </div>
    
                        <div class="WrapperTable-Four TrueLine">
                            <div class="deskripsiTable">
                                <h4 class="mb-4">Table Description</h4>
                                <p>The dining room is served for dating the partner you love</p>
                                <p>
                                    A place for a date, where you share moments of warmth and affection. Located on the first floor,
                                    This dining room can accommodate between 1 and 2 guests.
                                </p>
                            </div>
                            <div class="detailTable mt-4">
                                <h4 class="mb-4">Detail Table</h4>
                                <div class="d-flex mb-3 lineTable justify-content-between">
                                    <div>Minimum Of People</div>
                                    <div>1 People</div>
                                </div>
                                <div class="d-flex mb-3 lineTable justify-content-between">
                                    <div>Maximum Of People</div>
                                    <div>2 People</div>
                                </div>
                                <div class="d-flex mb-3 lineTable justify-content-between">
                                    <div>Booking Tax</div>
                                    <div>$ <span id="Tax"><?php echo($StatusUser == "Member") ? "6" : "3" ?></span> </div>
                                </div>
                                <div class="d-flex mb-3 lineTable justify-content-between">
                                    <div>Theme</div>
                                    <div>Romantic Couple</div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    
                </div>
            </div>
        </div> {{-- End WrapperLPart-1 --}}

        <div class="WrapperLPart-2">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cardOrder-3 mb-3">
                            <div class="headerOrder">
                                <h3 class="fw-bold">Order Your Food</h3>
                            </div>
                            <div class="inputOrder mt-3">
        
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="inputValues d-flex flex-column mt-3">
                                                <label for="email" class="mb-1">Email</label>
                                                <input type="email" name="email" id="email" class="form-control" value=" 
                                                    @if ($Email)
                                                        {{$Email}}
                                                    @else
                                                        
                                                    @endif" placeholder="Type Your Email">
                                            </div>
                                            <label class="text-danger AuthEmail" style="font-size: 14px; display: none;"></label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="inputValues d-flex flex-column mt-3">
                                                <label for="name" class="mb-1">Name</label>
                                                <input type="text" name="name" id="name" class="form-control" value="<?php echo($Name != '') ? $Name : '' ?>" placeholder="Type Your Name">
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
                            <div class="cardOrder-5 infoLengkap my-3">
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
        </div>

        </div>
    </div> {{-- End WrapperLPart-2 --}}
</div>    

    <div class="wrapperTableRight">

        <div class="WrapperRPart-1">
            <div class="container">
                <div class="headerOrderTable d-flex justify-content-between align-items-center">
                    <div class="fw-bold">Order Your Table</div>
                    <button type="submit" class="btn btn-orange text-white" id="ReturnTable">Return</button>
                </div>
                <div class="contentOrderTable d-flex mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="inputTable d-flex flex-column mb-3">
                                <input type="hidden" id="Id_User" value="{{$Name}}">
                                <label class="mb-2">Email</label>
                                <input type="email" id="NameUser" value="{{$Email}}" class="form-control">
                                <label class="text-danger AuthEmailTable mt-2" style="display: none; font-size: 15px;"></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputTable d-flex flex-column mb-3">
                                <label class="mb-2">Name</label>
                                <input type="text" id="EmailUser" class="form-control" value="{{$Name}}">
                                <label class="text-danger AuthNamaTable mt-2" style="display: none; font-size: 15px;"></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputTable d-flex flex-column mb-3">
                                <label class="mb-2">Total Table</label>
                                <input type="text" id="TotalOrder" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" class="form-control">
                                <label class="text-danger AuthTotalTable mt-2" style="display: none; font-size: 15px;"></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputTable d-flex flex-column mb-3">
                                <label class="mb-2">Message Date</label>
                                <input type="date" id="MessageDate" class="form-control">
                                <label class="text-danger AuthTanggalTable mt-2" style="display: none; font-size: 15px;"></label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="inputTable d-flex flex-column mb-3">
                                <label class="mb-2">Table Name</label>
                                <select id="TableName" class="form-select">
                                    <option value="Japanese Table">Japanese Table</option>
                                    <option value="Chinese Table">Chinese Table</option>
                                    <option value="Dating Table">Dating Table</option>
                                    <option value="Family Table">Family Table</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="inputTable d-flex align-items-center mb-3">
                                <input type="checkbox" id="MessageDate" class="form-check-input">
                                <label class="mb-2 ceck">Added Additional Themes</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputTable mb-3">
                                <button type="submit" class="btn btn-primary" id="BtnStep1">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  {{-- End WrapperRPart-1 --}}

        <div class="WrapperRPart-2">

            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-12">
                        <div class="cardOrder-3">
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
                        <div class="cardOrder-3 mt-3">
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
                                <button type="submit" name="BTNOrder" class="btn btn-primary text-white PayNow" style="width: 45%">Place An Order</button>
                                <button type="submit" class="btn btn-danger text-white" id="ReturnTable-2" style="width: 45%">Return Menu</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> {{-- End WrapperRPart-2 --}}

    </div>
</div> 
@endsection