@extends('master')
@section('title')
<title>Login</title>
@endsection
@section('content')
    <div class="row justify-content-center">
        {{-- <div class="col-md-7 mt-5">
            <img src="{{ asset('frontpage-assets/img/bg-header.png') }}" style="width:100%" alt="">
        </div> --}}
        <div class="col-md-6" style="margin-top:60px">
           <div class="container">
            <div class="card" style="border:none;">
                <div class="card-body">
                    <div class="container">
                        <h1 class="mt-3"  style="color: #a56d21">Sign in</h1>
                        <hr style="width: 60px">
                        <form role="form" method="POST" action="{{ route('redirectAuthLogin') }}">
                    {{-- <form class="mt-5"> --}}
                        @csrf
                        @if (session('message'))
                        <div class="alert {{ session('color') }} alert-dismissible fade show">
                            {{ session('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
                        </div>
                        @endif
                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{old('email')}}"/>
                       </div>
                        <div class="form-group mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control"/>
                       </div>
                       <div class="d-grid gap-2">
                       <button type="submit" class="btn btn-dark btn-block">Sign in</button>
                    </div>
                </form>
                <div class="row my-3">
                    <div class="col">

                        <hr style="width: 100%">
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <small style="font-size: 12px">or Sign in with</small>
                       </div>   
                    </div>
                    <div class="col">
                        <hr style="width: 100%;float:right;" >

                    </div>
                </div>
            
                 
                 <div class="row">
                    <div class="col-md-6">
                        
                        <div class="d-grid gap-2 text-center">
                        <a href="{{ '/auth/google/redirect'}}" class="login-with-google-btn" >
                            <img style="width:18px" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNMTcuNiA5LjJsLS4xLTEuOEg5djMuNGg0LjhDMTMuNiAxMiAxMyAxMyAxMiAxMy42djIuMmgzYTguOCA4LjggMCAwIDAgMi42LTYuNnoiIGZpbGw9IiM0Mjg1RjQiIGZpbGwtcnVsZT0ibm9uemVybyIvPjxwYXRoIGQ9Ik05IDE4YzIuNCAwIDQuNS0uOCA2LTIuMmwtMy0yLjJhNS40IDUuNCAwIDAgMS04LTIuOUgxVjEzYTkgOSAwIDAgMCA4IDV6IiBmaWxsPSIjMzRBODUzIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNNCAxMC43YTUuNCA1LjQgMCAwIDEgMC0zLjRWNUgxYTkgOSAwIDAgMCAwIDhsMy0yLjN6IiBmaWxsPSIjRkJCQzA1IiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNOSAzLjZjMS4zIDAgMi41LjQgMy40IDEuM0wxNSAyLjNBOSA5IDAgMCAwIDEgNWwzIDIuNGE1LjQgNS40IDAgMCAxIDUtMy43eiIgZmlsbD0iI0VBNDMzNSIgZmlsbC1ydWxlPSJub256ZXJvIi8+PHBhdGggZD0iTTAgMGgxOHYxOEgweiIvPjwvZz48L3N2Zz4=" alt="">
                            Sign in with Google
                          </a>
                        </div>
                    
                    </div>
                    <div class="col-md-6">
                        
                        <div class="d-grid gap-2 text-center">
                        <a href="{{ '/auth/facebook/redirect'}}" class="login-with-google-btn" >
                            <img style="width:30px" src="https://www.freeiconspng.com/thumbs/facebook-logo-png/photos-facebook-logo-png-transparent-background-13.png" alt="">
                            Sign in with Facebook
                          </a>
                        </div>
                    
                    </div>
                    <div class="text-center mt-3">
                        <small class="text-center">Not Have Account? <a href="/regis">Sign up</a></small>
                    </div>
                </div>
                   </div>
                </div>
            </div>
           </div>
        </div>
    </div>
@endsection