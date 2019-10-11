@extends('frontend.layout.main')

@section('content')
<div class="hero-wrap hero-bread"
  style="background-image: url({{asset('bootstrap_assets/images/ekemarketpages.jpg')}});">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home</a></span> <span>Contact us</span>
        </p>
        <h1 class="mb-0 bread">Contact us</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section contact-section bg-light">
  <div class="container">

    {{-- block-9 --}}
    <div class="row">
      {{-- order-md-last --}}
      {{-- d-flex --}}
      <div class="col-md-7  contact-form">
          @if (session('success'))
          <p class="alert alert-success">{{ session('success') }}</p>
          @endif

        <form action="{{ route('contact.store') }}" class="bg-white p-5" method="POST">
          {{ csrf_field() }}

          <div class="form-group">
            <input type="text" name="sender" class="form-control" placeholder="Your Name" autofocus>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea name="messagecontent" id="" cols="30" rows="7" class="form-control"
              placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>

      </div>

      <div class="col-md-5 d-flex">

      </div>
    </div>
  </div>
</section>


@endsection