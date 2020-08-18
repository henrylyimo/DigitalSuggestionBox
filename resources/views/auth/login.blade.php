@extends('layouts.app')

@section('styles')
  <style>
     .login-img
     {
         width: 100%;
         margin-top: 60px;
         
     }
     .login-container
     {
         background-color: white;
         height: 80vh;
         box-shadow: 2px; 
         border-radius: 20px;   
     }
     .card-h2
     {
         font-weight: 500;
         font-size: 32px;
         color: black;
         font-family: serif;
         margin-left: 70px;

     }
     .form-control
     {
         padding: 22px;
         border-radius: 50px;
         background-color: whitesmoke;
         color: black;

     }
     .btn
     {
         border-radius: 50px;
         font-size: 20px;
         font-weight: 200;
     }
     .card
     {
         margin-top: 40px;
         margin-right: 20px;
         border: none;
     }
     .btn-link
     {
         font-size: 15px;
         
     }
     .form-control:hover
     {
         cursor: pointer;
         touch-action: manipulation;
         
     }

      
      </style>  
@endsection
@section('content')
      
<div class="cont">
    <div class="container">
        <div class="login-container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <img src="{{ asset('/image/background.jpg') }}" alt="" class="login-img">
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <!--<div class="card-header">{{ __('Login') }}</div>-->
        
                        <div class="card-body">
                            <h2 class="card-h2  mb-5">Member Login</h2>


                            <form method="POST" action="{{ route('login') }}">
                                @csrf
        
                                <div class="form-group ">
                                   <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->
        
                                    <div class="col-md-8">
                                        <input id="reg_no" type="reg_no" placeholder="Reg-No" class="form-control ml-lg-3 @error('reg_no') is-invalid @enderror" name="reg_no" value="{{ old('reg_no') }}" required autocomplete="reg_no" autofocus>
                                        <span class="symbol-input">
                                            <i class="far fa-envelope"></i>
                                        </span>
        
                                        @error('reg_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group ">
                                    <!--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>-->
        
                                    <div class="col-md-8">
                                        <input id="password" type="password" placeholder="Password" class="form-control ml-lg-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <div class="col-md-8 ml-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="form-group ">
                                    <div class="col-md-8 ml-4">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Login') }}
                                        </button>
        
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link mt-2" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
      
        
        </div>
       
    </div>
</div>

@endsection

