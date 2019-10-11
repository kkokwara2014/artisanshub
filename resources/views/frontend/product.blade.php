@extends('frontend.layout.main')

@section('content')
<div class="hero-wrap hero-bread" style="background-image: url({{asset('bootstrap_assets/images/ekemarket1.jpg')}});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="#">Home</a></span> <span class="mr-2"><a
                            href="#">Product</a></span> <span>Product Single</span></p>
                <h1 class="mb-0 bread">Product Details</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-5 ftco-animate">
                <a href="{{url('product_images',$products->image)}}" class="image-popup"><img
                        src="{{url('product_images',$products->image)}}" class="img-fluid" width="300" height="350"></a>
            </div>
            <div class="col-lg-7 product-details pl-md-5 ftco-animate">
                <h3>{{$products->name}}</h3>
                
                <div class="price">Unit Price : &#8358;{{ number_format($products->price,2) }}</div>
                <div>Category : {{$products->category->name}} </div>
                <div>
                    Description : {{$products->description}}
                </div>

                <hr>

                <div>Found In : {{$products->shop->businessname.' - '.$products->shop->shopnumber}} </div>
                <div>
                    Shop Owner :
                    <strong>{{strtoupper($products->shop->user->lastname).', '.$products->shop->user->firstname}}</strong>
                </div>
                <div>Phone : {{$products->shop->user->phone}}</div>

                <hr>

                <strong>
                    <h5 style="color:red">Caution!</h5>
                </strong>

                <h6 style="color:black">Buyer : </h6>
                Do not make payment until this product is supplied to you.
                <br>
                {{-- <br>
                <h6 style="color:black">Seller : </h6>
                Confirm payment before closing the transaction. --}}



                <hr>
                <p><a href="{{ route('index') }}" class="btn btn-black py-3 px-5">Continue to Shop</a></p>
            </div>
        </div>
    </div>
</section>

@endsection