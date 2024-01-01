@extends('frontend.main_master')
@section('main')
<link rel="stylesheet" href="{{ asset("css/nicepage.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("css/Home.css") }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset("javascript/jquery.js") }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset("javascript/nicepage.js") }}" defer=""></script>
    <meta name="generator" content="Nicepage 6.2.1, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Jockey+One:400|Anybody:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site2"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header" id="sec-b1a5" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-valign-top-md u-valign-top-sm u-valign-top-xs u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">

          
          <form method="post" action="{{ route('booking.reserve') }}" class="" style="padding: 10px" source="email" name="form">
            <div><h3>Flight Details</h3></div>
            <div class="u-form-date u-form-group u-form-partition-factor-2">
              <label for="email-f2a8" class="u-label u-label-1">CHECK-IN</label>
              <input type="text" placeholder="MM/DD/YYYY" id="email-f2a8" name="email" class="u-input u-input-rectangle u-palette-4-light-3" required="required" data-date-format="mm/dd/yyyy">
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2">
              <label for="name-f2a8" class="u-label u-label-2">DESTINATION</label>
              <input type="text" placeholder="Enter your destination here" id="name-f2a8" name="destination" class="u-input u-input-rectangle u-palette-4-light-3" required="">
            </div>
            <div class="u-form-date u-form-group u-form-partition-factor-2 u-form-group-3">
              <label for="date-4441" class="u-label u-label-3">CHECK-OUT</label>
              <input type="text" placeholder="MM/DD/YYYY" id="date-4441" name="date" class="u-input u-input-rectangle u-palette-4-light-3" required="" data-date-format="mm/dd/yyyy">
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-4">
              <label for="phone-447e" class="u-label u-label-4">FLIGHT NUMBER</label>
              <input type="tel" placeholder="Enter your Flight no. here" id="phone-447e" name="flightID" class="u-input u-input-rectangle u-palette-4-light-3" required="">
            </div>
            <br>
            <div><h3>Personal Information</h3></div>
            <table>
              <tr>
                <td><label for="fname-f2a8" class="u-label u-label-1">FIRST NAME</label></td>
                <td><label for="lname-f2a8" class="u-label u-label-1">LAST NAME</label></td>
                <td><label for="mobile-f2a8" class="u-label u-label-1">MOBILE NUMBER</label></td>
              </tr><tr>
                <td><input type="text" id="fname-f2a8" name="fname" class="u-input u-input-rectangle u-palette-4-light-3" required="required"></label></td>
                <td><input type="text" id="lname-f2a8" name="lname" class="u-input u-input-rectangle u-palette-4-light-3" required="required"></label></td>
                <td><input type="text" id="mobile-f2a8" name="mobile" class="u-input u-input-rectangle u-palette-4-light-3" required="required"></label></td>
              </tr><tr><hr>
              </tr><tr>
                <td><label for="cartype-f2a8" class="u-label u-label-1">Type of Car</label></td>
                <td><label for="plate-f2a8" class="u-label u-label-1">Plate Number</label></td>
              </tr><tr>
              </tr><tr>
                <td><input type="text" id="cartype-f2a8" name="cartype" class="u-input u-input-rectangle u-palette-4-light-3" required="required"></label></td>
                <td><input type="text" id="plate-f2a8" name="plate" class="u-input u-input-rectangle u-palette-4-light-3" required="required"></label></td>
              </tr><tr>
                <td><label for="email-f2a8" class="u-label u-label-1">Email Address</label></td>
                <td><label for="emailconfirm-f2a8" class="u-label u-label-1">Confirm Email</label></td>
              </tr><tr>
                <td><input type="text" id="email-f2a8" name="email" class="u-input u-input-rectangle u-palette-4-light-3" required="required"></label></td>
                <td><input type="text" id="emailconfirm-f2a8" name="emailconfirm" class="u-input u-input-rectangle u-palette-4-light-3" required="required"></label></td>
              </tr>
              <tr>
                <td>
                  <button type="submit" class="u-border-1 u-border-custom-color-2 u-border-hover-black u-btn u-button-style u-hover-feature u-none u-text-custom-color-2 u-text-hover-grey-90 u-btn-1" data-animation-name="customAnimationIn" data-animation-duration="1750">
                    Register
                  </button></td>
              </tr>
            </table>

            @csrf
            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="47a64133-8ba5-244d-2d11-ac6e479d0892">
          </form>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url("Home.html") }}">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('register') }}">Parking</a><div class="u-nav-popup"><ul class="u-h-spacing-12 u-nav u-unstyled u-v-spacing-20"><li class="u-nav-item"><a class="u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white" href="{{ url("#") }}">Shuttle Service</a>
</li></ul>
</div>
<!-- Example button in a Blade file -->
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('register') }}">Vehicle Repair</a></li>


</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url("Food-.html") }}">Food Service</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url("Advertising-Opportunities.html") }}">Advertising Opportunities</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url("Career-Opportunities.html") }}">Career Opportunities</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url("FAQS.html") }}">FAQs</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url("Contact.html") }}">Contact us</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url("About-Us.html") }}">About Us</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
      <section class="skrollable u-clearfix u-image u-parallax u-section-1" id="sec-645a" data-image-width="4704" data-image-height="3136">
      </section>
            <section class="u-align-left u-clearfix u-gradient u-section-3" id="sec-56a5">
                <div class="u-clearfix u-sheet u-valign-middle-lg u-sheet-1">
                  
                  <div data-animation-name="flipIn" data-animation-duration="1250" data-animation-direction="X">
                      
                      <div class="u-form u-form-1">
                        
                        
                      </div>
                      
                      
                  </div>
                </div>
              </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-6375"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Copyright © Park 'N Fly. All rights reserved.</p>
      </div></footer>
  

@endsection