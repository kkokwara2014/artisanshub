<footer class="ftco-footer ftco-section">
  <div class="container">
    <div class="row">
      <div class="mouse">
        <a href="#" class="mouse-icon">
          <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
        </a>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-3">
          <h2 class="ftco-heading-2">Artisanshub</h2>
          <p style="text-align: justify">
            Artisanshub is a platform that connects qualified artisans to various customers.
          </p>
          {{-- <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul> --}}
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-3 ml-md-5">
          <h2 class="ftco-heading-2">Menu</h2>
          <ul class="list-unstyled">
            <li><a href="{{ route('index') }}" class="py-2 d-block"><span class="ion-ios-home"
                  style="font-size: 13px;"></span></a></li>
            {{-- <li><a href="{{ route('about') }}" class="py-2 d-block">About</a></li> --}}
            {{-- <li><a href="{{ route('contact.create') }}" class="py-2 d-block">Contact Us</a></li> --}}
          </ul>
        </div>
      </div>

      <div class="col-md">
        <div class="ftco-footer-widget mb-3">
          <h2 class="ftco-heading-2">Get in touch now!</h2>
          <div class="block-23 mb-3">
            <ul>
              {{-- <li><span class="icon icon-map-marker"></span><span class="text">
                  Done-Right Systems Inc. <br>
                  Flat 18B Afikpo Housing Estate,<br>
                  Afikpo North L.G.A., Ebonyi State.
                </span></li> --}}
              <li><a href="#"><span class="icon icon-phone"></span><span class="text">+234 806-249-4313</span></a></li>
              <li><a href="#"><span class="icon icon-envelope"></span><span
                    class="text">services@artisanshub.org</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <p>
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | artisanshub.org
        </p>

      </div>
      <div class="col-md-6 text-right">
        {{-- <i>Powered by Done-Right Systems Inc.</i> --}}
      </div>
    </div>
  </div>
  </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
  </svg></div>


<script src="{{asset('bootstrap_assets/js/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/popper.min.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/aos.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('bootstrap_assets/js/google-map.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/main.js')}}"></script>

</body>

</html>