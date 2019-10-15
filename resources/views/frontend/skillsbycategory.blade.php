@extends('frontend.layout.main')

@section('content')


<div class="hero-wrap hero-bread"
	style="background-image: url({{asset('bootstrap_assets/images/artisanspages.jpg')}});">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home</a></span> <span>Products by
						Category</span>
				</p>
				<h1 class="mb-0 bread">Skills by Category</h1>
			</div>
		</div>
	</div>
</div>



<section class="ftco-section">
	{{-- <div class="container"> --}}
	{{-- <div class="row justify-content-center mb-3 pb-3"> --}}
	{{-- <div class="col-md-12 heading-section text-center ftco-animate"> --}}
	{{-- <span class="subheading">Featured Products</span> --}}
	{{-- <h2 class="mb-4">Artisan Services</h2> --}}

	{{-- </div> --}}
	{{-- </div> --}}
	{{-- </div> --}}
	<div class="container">
		<div class="row">

			<div class="col-md-7">
				<h3>Artisan Services</h3>
				{{-- @forelse ($products->chunk(6) as $chunk) --}}
				@forelse ($skills as $skill)
				{{-- @foreach ($chunk as $product) --}}

				{{-- @if ($product->shop->user->isactive==1) --}}
				<div class="ftco-animate">
					<div class="product">
						{{-- <a href="{{ route('frontend.product.show',$product->id) }}" class="img-prod"><img
							class="img-fluid" src="{{url('product_images',$product->image)}}">

						<div class="overlay"></div>
						</a> --}}
						<div class="text py-3 pb-4 px-3">
							<div class="row">
								<div class="col-md-10">
									<h5>{{$skill->category->name}}</h5>
									<div>
										<img class="img-fluid img-circle img-responsive"
											src="{{url('user_images',$skill->user->userimage)}}" width="50px"
											height="50px">
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
									<a href="" style="background-color:green" class="badge badge-success"
										data-toggle="modal" data-target="#modal-default">
										Get in touch
									</a>
								</div>
							</div>

						</div>
					</div>

				</div>

				{{-- <div class="panel panel-default">
						<div class="panel-body">
						<h4>{{$skill->category->name}}</h4>
			</div>
		</div> --}}
		{{-- @endif --}}

		{{-- @endforeach --}}
		@empty
		<p class="alert alert-info">No Artisan has registered in this Category!</p>
		@endforelse


		{{-- <p style="text-align: right; color: green;">{{$skills->links()}}</p> --}}
	</div>

	<div class="col-md-5">
		<h3>Conversations</h3>
		@forelse ($comments as $comt)
		<div class="ftco-animate">
			<div class="product">

				<div class="text py-3 pb-4 px-3">
					<div class="row">
						<div class="col-md-2">
							<img class="img-fluid img-circle img-responsive"
								src="{{url('user_images',$comt->user->userimage)}}" width="40px" height="40px">
						</div>
						<div class="col-md-10">
							<div style="font-weight: bold">
								{{$comt->user->lastname.', '.$comt->user->firstname}} says:
							</div>
							<div>{!! htmlspecialchars_decode($comt->comment) !!}</div>
							<div style="text-align: right">
								<small>Sent : {{$comt->created_at->diffForHumans()}}
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-calendar"></span>
									{{date('F d, Y',strtotime($comt->created_at))}} &nbsp;
									<span class="fa fa-clock-o"></span>
									{{date('H:i:s',strtotime($comt->created_at))}}</small>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		@empty
		<li class="list-group-item alert alert-warning"><strong>No Comments
				yet!</strong>
		</li>
		@endforelse


	</div>
	</div>
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