@extends('frontend.layout.main')

@section('content')

@include('frontend.layout.heroboard')

<section class="ftco-section">
	{{-- <div class="container">
		<div class="row justify-content-center mb-3 pb-3">
			<div class="col-md-12 heading-section text-center ftco-animate">
				{{-- <span class="subheading">Featured Products</span> --}}
	{{-- <h2 class="mb-4">Available Services</h2> --}}
	{{-- <p>Qualified Artisans within your reach.</p> --}}
	{{-- </div> --}}
	{{-- </div> --}}
	{{-- </div> --}}
	<div class="container">
		<div class="row">

			<div class="col-md-8">
				<h3>Artisan Services</h3>
				{{-- @forelse ($products->chunk(6) as $chunk) --}}
				{{-- @foreach ($chunk as $product) --}}

				{{-- @if ($product->shop->user->isactive==1) --}}
				{{-- <div class="col-md-2 ftco-animate"> --}}
				{{-- <div class="product"> --}}
				{{-- <a href="{{ route('frontend.product.show',$product->id) }}" class="img-prod"><img class="img-fluid"
					--}} {{-- src="{{url('product_images',$product->image)}}"> --}}

				{{-- <div class="overlay"></div> --}}
				{{-- </a> --}}
				{{-- <div class="text py-3 pb-4 px-3 text-center"> --}}
				{{-- <h3><a href="{{ route('frontend.product.show',$product->id) }}">{{$product->name}}</a></h3> --}}
				{{-- <div class="d-flex"> --}}
				{{-- <div class="pricing"> --}}
				{{-- <span class="price"> --}}
				{{-- <span class="mr-2 price-dc">&#8358; 100.00</span> --}}
				{{-- <span class="price-sale">&#8358;{{sprintf("%0.2f", $product->price)}}</span></span> --}}
				{{-- <span class="price-sale">&#8358;{{ number_format($product->price,2) }}</span></p> --}}
				{{-- </div> --}}
				{{-- </div> --}}

				{{-- <div class="bottom-area d-flex px-3"> --}}
				{{-- <div class="m-auto d-flex"> --}}
				{{-- <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
								<span><i class="ion-ios-cart" title="Add to Cart"></i></span>
							</a> --}}

				{{-- <a href="{{ route('frontend.product.show',$product->id) }}" --}}
				{{-- class="heart d-flex justify-content-center align-items-center" title="View Details"> --}}
				{{-- <span><i class="ion-ios-eye"></i></span> --}}
				{{-- </a> --}}
				{{-- </div> --}}
				{{-- </div> --}}
				{{-- </div> --}}
				{{-- </div> --}}

				{{-- @endif --}}
				{{-- </div> --}}

				{{-- @endforeach --}}
				{{-- @empty --}}
				{{-- <p class="alert alert-info">No Product has been added!</p> --}}
				{{-- @endforelse --}}


				{{-- <p style="text-align: right; color: green;">{{$products->links()}}</p> --}}
			</div>

			<div class="col-md-4">
				<h3>Conversations</h3>
			</div>
		</div>
	</div>

</section>

<hr>

@endsection