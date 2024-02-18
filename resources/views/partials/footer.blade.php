<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-info">
          <img src="img/logo.png" alt="TheEvenet">
          
        </div>

        

        <div class="col-lg-3 col-md-6 footer-links">
          <h4> Links</h4>
          <ul>
            <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#about">About</a></li>
            <li><i class="fa fa-angle-right"></i><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#speakers">Speakers</a></li>
        <li><i class="fa fa-angle-right"></i><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#schedule">Schedule</a></li>
        <li><i class="fa fa-angle-right"></i><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#venue">Venue</a></li>
        <li><i class="fa fa-angle-right"></i><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#hotels">Hotels</a></li>
        <li><i class="fa fa-angle-right"></i><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#gallery">Gallery</a></li>
        <li><i class="fa fa-angle-right"></i><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#supporters">Sponsors</a></li>
        <li><i class="fa fa-angle-right"></i><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#contact">Contact</a></li>
        <li class="buy-tickets"><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#buy-tickets">REGISTRATION</a></li>
      
           
            @guest
              <li><i class="fa fa-angle-right"></i> <a href="{{ route('login') }}">Login</a></li>
            @endguest
            @auth
              <li><i class="fa fa-angle-right"></i> <a href="{{ route('admin.home') }}">Admin Panel</a></li>
            @endauth
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Contact</h4>
          <p>
            {!! $settings['footer_address'] ?? '' !!}<br>
            <strong>Phone:</strong> {{ $settings['contact_phone'] }}<br>
            <strong>Email:</strong> {{ $settings['contact_email'] }}<br>
          </p>

          <div class="social-links">
            <a href="{{ $settings['footer_twitter'] ?? '' }}" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="{{ $settings['footer_facebook'] ?? '' }}" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="{{ $settings['footer_instagram'] ?? '' }}" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="{{ $settings['footer_googleplus'] ?? '' }}" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="{{ $settings['footer_linkedin'] ?? '' }}" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
   
  </div>
</footer><!-- #footer -->
