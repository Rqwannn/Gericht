@extends('layouts/tamplateAuth')

@section("title", "Verify Email")

@section('content')
<img src="{{asset('img')}}/backgroundLogin.jpg" class="backgroundLogin" alt="">

<div class="wrapperPassword d-flex justify-content-center">
    <div class="cardPassword">
        <div class="container">
            <div class="headerCard">
                <h4 class="text-center mb-4">Email Verification</h4>
            </div>
            <div class="inputGroup mb-2">
                <label for="exampleInputEmail1" class="form-label">Type Your Email</label>
                <input type="email" id="EmailValue" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type Your Email" autocomplete="off">
            </div>
            <a href="/login" style="font-size: 15px">Back</a>
            <button type="submit" name="submit" id="BtnSubmit" class="w-100 btn btn-orange text-white mt-3">Submit</button>
        </div>
    </div>
</div>
@endsection