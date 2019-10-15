@extends('frontend.layout.main')

@section('content')

{{-- <div class="hero-wrap hero-bread"
  style="background-image: url({{asset('bootstrap_assets/images/ekemarketpages.jpg')}});">
<div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home</a></span> <span>Product
                    Search</span></p>
            <h1 class="mb-0 bread">Skill Search</h1>
        </div>
    </div>
</div>
</div> --}}
<div class="hero-wrap hero-bread"
    style="background-image: url({{asset('bootstrap_assets/images/artisanspages.jpg')}});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home</a></span></p>
                <h1 class="mb-0 bread">Skill Serach</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    {{-- <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Skill Search</h2>
                <p>Affordable and nice Skills within your reach.</p>
            </div>
        </div>
    </div> --}}
    <div class="container">

        <div class="row">
            @if (isset($details))

            @forelse ($details->chunk(4) as $chunk)
            @foreach ($chunk as $skill)

            <div class="ftco-animate col-md-8 col-lg-8">
                <div class="product">
                    <div class="text py-3 pb-4 px-3">
                        <div class="row">
                            <div class="col-md-10">
                                <h5>{{$skill->category->name}}</h5>
                                <div>
                                    <img class="img-fluid img-circle img-responsive"
                                        src="{{url('user_images',$skill->user->userimage)}}" width="50px" height="50px">
                                    <strong>&nbsp;&nbsp;
                                        {{$skill->user->lastname.', '.$skill->user->firstname}}</strong>
                                </div>
    
                                <div>
                                    <strong>{{$skill->businessname}}</strong>
                                </div>
                                <div>
                                    {{$skill->businessaddress}}
                                </div>
                                <div>
                                    {{$skill->city}}
                                </div>
                                <div>
                                    {{str_repeat("*",strlen($skill->user->phone)-5).substr($skill->user->phone,-5)}}
                                </div>
    
                            </div>
                            <div class="col-md-2">
                                <a href="" style="background-color:green" class="badge badge-success" data-toggle="modal"
                                    data-target="#modal-default">
                                    Get in touch
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

            @empty

            @endforelse

            @elseif(isset($message))
            <p class="alert alert-danger">{{$message}}</p>
            @endif

        </div>

        {{-- Data input modal area --}}
	<div class="modal fade" id="modal-default">
            <div class="modal-dialog">
    
                <form action="{{ route('register') }}" method="post">
                    {{ csrf_field() }}
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Create Customer Account</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
    
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
                                    class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                                    name="firstname" value="{{ old('firstname') }}" required autofocus
                                    placeholder="First Name">
    
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
                                <select name="gender" id="gender"
                                    class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}">
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
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required placeholder="Repeat Password">
                            </div>
    
                            <input type="hidden" name="role_id" value="3">
                            <input type="hidden" name="isactive" value="1">
    
                        </div>
                        <div class="modal-footer">
                            Already have account? <a href="{{route('login')}}"> Login</a>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
    
                </form>
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
</section>

<hr>

@endsection