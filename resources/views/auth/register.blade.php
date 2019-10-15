@extends('frontend.layout.main')

@section('content')
<div class="hero-wrap hero-bread" style="background-image: url({{asset('bootstrap_assets/images/artisanspages.jpg')}});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home</a></span> <span>Register</span></p>
                <h1 class="mb-0 bread">Register</h1>
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

                <form action="{{ route('register') }}" class="bg-white p-5" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input id="lastname" type="text"
                            class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname"
                            value="{{ old('lastname') }}" required autofocus placeholder="Last Name">

                        @if ($errors->has('lastname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                        @endif

                    </div>
                    <div class="form-group">
                        <input id="firstname" type="text"
                            class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname"
                            value="{{ old('firstname') }}" required autofocus placeholder="First Name">

                        @if ($errors->has('firstname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                        @endif

                    </div>

                    <div class="form-group">
                        <input id="email" type="email"
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                            value="{{ old('email') }}" required autofocus placeholder="Email">

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input id="phone" type="tel"
                            class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone"
                            value="{{ old('phone') }}" required placeholder="Phone" maxlength="14">

                        @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                            <select name="gender" id="gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}">
                                <option selected="disabled">Select Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>

                        @if ($errors->has('gender'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input id="password" type="password"
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                            required placeholder="Password">

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required placeholder="Repeat Password">
                    </div>

                    <input type="hidden" name="role_id" value="2">
                    <input type="hidden" name="isactive" value="1">

                    {{-- <div class="form-group">
                        <div style="color:green" class="form-check">
                            <input class="form-check-input" type="checkbox" name="acceptpolicy"
                                {{ old('acceptpolicy') ? 'checked' : '' }}>

                    <label style="color:green" class="form-check-label" for="acceptpolicy">
                        {{ __('Accept Policy') }}
                    </label>
            </div>
        </div> --}}

        <div class="form-group">
            <input type="submit" value="Sign Up" class="btn btn-primary py-3 px-5">
        </div>
        <div>
            <a class="btn btn-link" href="{{ route('login') }}" style="color:green">
                Already Signed up? Sign In
            </a>
        </div>
        </form>
    </div>
    <div class="col-md-3"></div>

    </div>
    </div>
</section>
@endsection