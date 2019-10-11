@extends('frontend.layout.main')
@section('title','About Us')

@section('content')

<div class="hero-wrap hero-bread"
  style="background-image: url({{asset('bootstrap_assets/images/ekemarketpages.jpg')}});">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
      <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home</a></span> <span>About us</span></p>
        <h1 class="mb-0 bread">About us</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
        style="background-image: url({{asset('bootstrap_assets/images/about.jpg')}});">
        {{-- <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
          <span class="icon-play"></span>
        </a> --}}
      </div>
      <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section-bold mb-4 mt-md-5">
          <div class="ml-md-0">
            <h2 class="mb-4">Welcome to Ekemarketonline</h2>
          </div>
        </div>
        <div class="pb-md-5">
          <p style="text-align: justify">Eke is a major market day in many Southern States of Nigeria. 
             Though urbanization has made most of such markets to now trade on daily basis. 
            In a bid to
            bring buying and selling to a digital perspective, Done-Right Systems Incorporated decided to bring the
            market activities to a click away from your mobile devices and computer related gadgets. <br>
            
          </p>
          <p style="text-align: justify">
            <strong>
              <h5 style="color:red">Caution!</h5>
            </strong>
            In view of notable online market security challenges, Done-Right Systems Management has tried to create
            levels of protection on the part of the Buyer and the Seller in line with existing demand and supply
            policies of Nigeria. <br>
            However, we strongly advice that Buyers should not pay for any product until supplied and duly delivered. 
            Conversely, Sellers are to confirm payment before closing any transaction. <br>
            By this, Done-Right Systems Inc., will not play a third party role and should not be held responsible
            for any transaction that does not comply with the advice above.
          </p>
        <p><a href="{{route('index')}}" class="btn btn-primary">Shop now</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
@endsection