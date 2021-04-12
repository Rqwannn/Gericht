@extends('layouts/tamplateRegister')

@section("title", "Register")

@section('content')
<img src="{{asset('img')}}/backgroundLogin.jpg" class="backgroundLogin" alt="">

    <div class="content">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="card-login">

                <div class="row">

                <div class="card-left position-relative overflow-hidden">

                    <div class="col-md-12">
                        <div class="card-social-media d-flex justify-content-start position-absolute flex-column">
                            <h4 class="card-title text-white mb-4">With Social Media</h4>
                            <div class="with-google mb-2 d-flex align-items-center badge bg-light text-google position-relative">
                                <i class="fab fa-google" style="font-size: 15px;"></i>
                                <p class="card-title">Google</p>
                            </div>
                            <div class="with-facebook d-flex align-items-center mb-2 badge bg-light text-facebook position-relative">
                                <i class="fab fa-facebook-f" style="font-size: 15px;"></i>
                                <p class="card-title">Facebook</p>
                            </div>
                            <div class="with-twitter d-flex align-items-center mb-2 badge bg-light text-twitter position-relative">
                                <i class="fab fa-twitter" style="font-size: 15px;"></i>
                                <p class="card-title">Twitter</p>
                            </div>
                        </div>
                    </div>
                    <div class="scroll-right d-flex justify-content-center">
                        <i class="fas fa-angle-left text-orange"></i>
                    </div>
                
                </div>
    
                <div class="card-right">
                    <div class="col-md-12">
                        <div class="position-relative">

                            <div class="header-login d-flex justify-content-end">
                                <a href="/login" type="submit" class="btn {{Request()->is("login") ? 'btn-orange text-white' : 'btn-orange-line text-orange'}}" style="font-size: 13px;">Sign In</a>
                                <a href="/register" type="submit" class="btn {{Request()->is("register") ? 'btn-orange text-white' : 'btn-orange-line text-orange'}}" style="font-size: 13px;">Sign Up</a>
                            </div>
        
            
                            <div class="content-login overflow-hidden">
                                <div class="header-content">
                                    <h3 class="card-title text-center mt-3 mb-4">Sign Up</h3>
                                </div>
                                <form method="POST" action="/register/tambah">
                                    @csrf

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                <input id="email" type="email" value="{{old('email')}}" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type Your Email" autocomplete="off">
                                                <div class="mt-2">
                                                    @error('email')
                                                        <div class="wrong alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                                <input type="text" value="{{old('name')}}" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type Your Username" autocomplete="off">
                                                <div class="mt-2">
                                                    @error('name')
                                                        <div class="wrong alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <input type="password" value="{{old('password')}}" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" autocomplete="off" placeholder="Type your password">
                                                <div class="mt-2">
                                                    @error('password')
                                                        <div class="wrong alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                                <input type="password" value="{{old('password2')}}" name="password_confirmation" class="form-control @error('password2') is-invalid @enderror" id="exampleInputPassword1" autocomplete="off" placeholder="Comfirm your password">
                                                <div class="mt-2">
                                                    @error('password2') <!-- Dari name -->
                                                        <div class="wrong alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1" style="font-size: 15px;">{{ __('Remember Me') }}</label>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-orange text-white">Register</button>
                                        <a class="btn btn-link" style="font-size: 15px;" href="/ForgotPassword">
                                            Forgot Your Password?
                                        </a>
                                    <div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
    
@endsection