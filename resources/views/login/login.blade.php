@extends('layouts/tamplateLogin')

@section("title", "Login")

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
                                    <h3 class="card-title text-center mt-3 mb-4">Sign In</h3>
                                    @if (session('Pesan'))
                                        <div class="wrong alert-danger">{{session('Pesan')}}</div>
                                    @endif
                                </div>
                                <form method="POST" action="/login/validation">
                                    @csrf

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" value="{{old('email')}}" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type Your Email" autocomplete="off">
                                            <div class="mt-2">
                                                @error('email') <!-- Dari name -->
                                                    <div class="wrong alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" value="{{old('password')}}" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" autocomplete="off" placeholder="Type Your Password">
                                            <div class="mt-2">
                                                @error('password') <!-- Dari name -->
                                                    <div class="wrong alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1" style="font-size: 15px;">Remember Me</label>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-orange text-white">Login</button>
                                        <label style="font-size: 15px">
                                            Sign In As 
                                            <a href="/guest">Guest</a>,
                                            <a href="">Forgot Password?</a>
                                        </label>
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