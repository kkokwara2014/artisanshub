@extends('frontend.layout.main')

@section('content')
<div class="hero-wrap hero-bread" style="background-image: url({{asset('bootstrap_assets/images/artisanspages.jpg')}});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home</a></span> <span>Login</span></p>
                <h1 class="mb-0 bread">Login</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                {{-- for messages --}}
                @if (session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
                @endif
               
                <form action="{{ route('login') }}" class="bg-white p-5" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input id="email" type="email"
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                            value="{{ old('email') }}" autofocus placeholder="Email">

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input id="password" type="password"
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                            placeholder="Password">

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div style="color:green" class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label style="color:green" class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Sign In" class="btn btn-primary py-3 px-5">
                    </div>
                    <div>
                        <a class="btn btn-link" href="{{ route('password.request') }}" style="color:green">
                            Forgot Your Password?
                        </a>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>

        </div>
    </div>
</section>
@endsection