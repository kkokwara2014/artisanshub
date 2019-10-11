@extends('frontend.layout.main')

@section('content')

<div class="hero-wrap hero-bread"
    style="background-image: url({{asset('bootstrap_assets/images/ekemarketpages.jpg')}});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home</a></span> <span>Cart</span>
                </p>
                <h1 class="mb-0 bread">My Cart</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Product name</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $cartitem)
                            <tr class="text-center">
                                <td class="product-remove">
                                    <form action="{{route('cart.destroy',$cartitem->rowId)}}" method="post">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}

                                        <div class="row">
                                            <div class="col-md-7">
                                                    <input type="submit" class="btn btn-danger btn-block btn-sm"
                                                     value="Remove">
                                                {{-- <button type="submit" class="btn btn-sm btn-danger btn-block">Remove</button> --}}
                                            </div>
                                        </div>

                                    </form>
                                </td>

                                <td class="image-prod">
                                    <a href="#" class="img-prod"><img class="img-fluid"
                                            src="{{url('product_images',$cartitem->image)}}">
                                        {{-- <img src="{{url('product_images',$cartitem->image)}}"> --}}
                                        {{-- <div class="img" style="background-image:url();"></div> --}}
                                </td>

                                <td class="product-name">
                                    <h3>{{$cartitem->name}}</h3>
                                    <p>{{$cartitem->description}}</p>
                                </td>

                                <td class="price">&#8358;{{$cartitem->price}}</td>

                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <form action="{{route('cart.update',$cartitem->rowId)}}" method="post">
                                            {{ csrf_field() }}
                                            {{method_field('PUT')}}

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <input type="text" name="quantity"
                                                        class="quantity form-control input-number" value="1" min="1"
                                                        max="100">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="submit" class="btn btn-success btn-block btn-sm"
                                                        style="background-color:olivedrab" value="Ok">
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </td>

                                <td class="total">&#8358;4.90</td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                {{-- <div class="cart-total mb-3">
                    <h3>Coupon Code</h3>
                    <p>Enter your coupon code if you have one</p>
                    <form action="#" class="info">
                        <div class="form-group">
                            <label for="">Coupon code</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                        </div>
                    </form>
                </div>
                <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p> --}}
            </div>
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                {{-- <div class="cart-total mb-3"> --}}
                {{-- <h3>Estimate shipping and tax</h3>
                    <p>Enter your destination to get a shipping estimate</p>
                    <form action="#" class="info">
                        <div class="form-group">
                            <label for="">Country</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="country">State/Province</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="country">Zip/Postal Code</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                        </div>
                    </form> --}}
                {{-- </div> --}}
                {{-- <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p> --}}
            </div>
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Total Amount</h3>
                    <p class="d-flex">
                        <span>Products</span>
                        <span>{{Cart::count()}}</span>
                    </p>
                    {{-- <p class="d-flex">
                        <span>Delivery</span>
                        <span>$0.00</span>
                    </p>
                    <p class="d-flex">
                        <span>Discount</span>
                        <span>$3.00</span>
                    </p> --}}
                    <hr>
                    <p class="d-flex total-price">
                        <span>Sub Total</span>
                        <span>&#8358;{{Cart::subtotal()}}</span>
                    </p>
                </div>
            <p><a href="{{route('checkout')}}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
            </div>
        </div>
    </div>
</section>


@endsection