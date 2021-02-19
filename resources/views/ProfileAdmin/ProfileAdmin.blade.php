@extends('layouts/TamplateAdmin')

@section('title', "Profile")

@section('content')
    <div class="intoAdmin">
        <div class="container">
            <h1 class="text-white" style="margin-top: 10vh;">Hallo {{$Name}}</h1>
            <p class="mt-4 text-white" style="width: 50%;">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <button type="submit" class="btn mt-3">Edit Profile</button>
        </div>
    </div>
    <div class="row" style="margin-top: 4rem">
        <div class="col-md-8">
            <div class="cardProfileAdmin">
                <div class="headerProfileAdmin d-flex justify-content-between">
                    <h5 class="text-white" style="transform: translateY(50%); font-size: 17px;">Edit Profile</h5>
                    <button type="submit" class="btn">Setting</button>
                </div>
                <div class="container">
                    <div class="titleContent">
                        <p class="mb-5">User Information</p>
                        <div class="lineTitleAdmin"></div>
                    </div>
                </div>
                <div class="contentProfileAdmin">
                    <div class="container">
                        <div class="row">
                            <label class="text-danger AuthUser" style="transform: translateY(-2.5vh); display: none;"></label>
                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="email" class="text-secondary">Email</label>
                                    <input type="email" name="email" id="email" value="{{$Email}}" class="form-control mt-2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="name" class="text-secondary">Name</label>
                                    <input type="text" name="name" id="name" value="{{$Name}}" class="form-control mt-2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputAdmin mt-3 d-flex flex-column">
                                    <label for="password" class="text-secondary">Password</label>
                                    <input type="password" name="password" id="password" class="form-control mt-2">
                                    <label class="text-danger AuthPassword" style="font-size: 14px; display: none;"></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputAdmin mt-3 d-flex flex-column">
                                    <label for="ConfirmPassword" class="text-secondary">Confirm Password</label>
                                    <input type="password" name="ConfirmPassword" id="confirmPassword" class="form-control mt-2">
                                    <label class="text-danger AuthConfirmPassword" style="font-size: 14px; display: none;"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="titleContent">
                        <p class="my-5">Contact Information</p>
                        <div class="lineTitleAdmin"></div>
                    </div>
                </div>
                <div class="contentProfileAdmin">
                    <div class="container">
                        <div class="row">
                            <label class="text-danger AuthContact" style="transform: translateY(-2.5vh); display: none;"></label>
                            <div class="col-md-12">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="address" class="text-secondary">Address</label>
                                    <input type="text" name="address" id="address" value="{{$Address}}" class="form-control mt-2">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="city" class="text-secondary">City</label>
                                    <input type="text" name="city" id="city" value="{{$City}}" class="form-control mt-2">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="Country" class="text-secondary">Country</label>
                                    <input type="text" name="Country" id="country" value="{{$Negara}}" class="form-control mt-2">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="postalCode" class="text-secondary">Postal Code</label>
                                    <input type="text" name="postalCode" id="postalCode" value="{{$postalCode}}" class="form-control mt-2" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <div class="btnContent-profile mt-4">
                            <button type="submit" class="btn btnUpdate-Profile mb-3">Update Your Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="cardProfileAdmin">
                <div class="topImgProfile">
                    <img src="{{asset('img')}}/profileAdmin/bgProfileAdmin.jpg" alt="">
                </div>
                <div class="contentProfile-right d-flex justify-content-center align-items-center">
                    <img src="{{asset('img')}}/{{$Gambar}}" class="rounded-circle clickBtnProfile" alt="">
                    <div class="editImgAdmin">
                        <i class="material-icons btnEdit">edit</i>
                        <div class="infoEdit-Lanjutan">

                            <div class="cardInfoEdit">
                                <div class="relativeCard">
                                    <div class="cardInfoEdit-2">
                                        <input type="file" id="profileAdmin" style="display: none;">
                                        <input type="file" id="bgProfileAdmin" style="display: none;">
                                    </div>
                                    <div class="moreEdit">
                                        <label for="profileAdmin" class="text-center">Change Profile</label>
                                        <label for="bgProfileAdmin" class="text-center">Change Bg Profile</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="btnInfoPerform d-flex justify-content-between">
                    <button type="submit" class="btn btn-perform">Connect</button>
                    <button type="submit" class="btn btn-perform">Excelent</button>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="taskJob d-flex flex-column">
                            <p class="text-center">12</p>
                            <p class="text-center">Taks</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fixedIssue d-flex flex-column">
                            <p class="text-center">8</p>
                            <p class="text-center">Fix Problem</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contributor d-flex flex-column">
                            <p class="text-center">20</p>
                            <p class="text-center">Contributor</p>
                        </div>
                    </div>
                </div>
                <div class="endProfileCard mt-3">
                    <h5 class="text-center" style="font-size: 20px;">{{$Name}}</h5>
                    <p class="text-center" style="font-size: 15px;">{{$City}}, {{$Negara}}</p>
                    <p class="text-center" style="font-size: 15px;">{{$Posisi}}</p>
                    <h5 class="text-center text-secondary" style="font-size: 17px;">{{$Pendidikan}}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection