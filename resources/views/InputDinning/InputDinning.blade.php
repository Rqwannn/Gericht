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
                    <i class="fas fa-check-circle circle-1" style="font-size: 12px; display: none;"></i>
                </div>
                <div class="barTwo rounded-circle d-flex justify-content-center align-items-center">
                    <i class="fas fa-credit-card text-primary" style="font-size: 12px;"></i>
                    <i class="fas fa-check-circle circle-2" style="font-size: 12px; display: none;"></i>
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
                                @if ($Email != "Guest@gmail.com")
                                <input type="email" id="EmailUser" disabled value="<?php echo($Email != 'Guest@gmail.com') ? $Email : '' ?>" class="form-control">
                                @else
                                <input type="email" id="EmailUser" class="form-control">
                                @endif
                                <label class="text-danger AuthEmailTable mt-2" style="display: none; font-size: 15px;"></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputTable d-flex flex-column mb-3">
                                <label class="mb-2">Message Date</label>
                                <input type="text" id="MessageDate" class="form-control">
                                <label class="text-danger AuthTanggalTable mt-2" style="display: none; font-size: 15px;"></label>
                            </div>
                        </div>
                        <input type="hidden" id="TotalOrder" value="1" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" class="form-control">
                        <div class="col-md-12">
                            <div class="inputTable d-flex flex-column mb-3">
                                <label class="mb-2">Name</label>
                                <input type="text" id="NameUser" class="form-control" value="<?php echo($Name != 'Guest') ? $Name : '' ?>">
                                <label class="text-danger AuthNamaTable mt-2" style="display: none; font-size: 15px;"></label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="inputTable d-flex flex-column mb-3">
                                <label class="mb-2">Table Name</label>
                                <select id="TableName" class="form-select">
                                    <option value="">Choose Your Table</option>
                                    <option value="Japanese Table">Japanese Table</option>
                                    <option value="Chinese Table">Chinese Table</option>
                                    <option value="Dating Table">Dating Table</option>
                                    <option value="Family Table">Family Table</option>
                                </select>
                                <label class="text-danger AuthTableName mt-2" style="display: none; font-size: 15px;"></label>
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
                                <button type="submit" class="btn btn-danger" id="BtnReset1">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  {{-- End WrapperRPart-1 --}}

    </div>
</div> 
@endsection