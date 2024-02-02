@include('frontend.body.header')
@extends('frontend.main_master')
@section('main')

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Make a reservation">
    <meta name="description" content="">
    <title>Parking</title>
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/Parking.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('javascript/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('javascript/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 6.2.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site2"
  }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Contact">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header" id="sec-b1a5" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-valign-top-md u-valign-top-sm u-valign-top-xs u-sheet-1">
        <img class="custom-expanded u-image u-image-contain u-image-default u-image-1" src="{{ asset("/images/Screenshot2023-12-171142241.png") }}" alt="" data-image-width="1524" data-image-height="600">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 500;">
            <a class="u-button-style u-custom-active-color u-custom-border u-custom-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="{{ url("#") }}">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-13d0"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-13d0" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-custom-color-2 u-button-style u-hover-custom-color-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="{{ route('home.index') }}" style="padding: 10px 14px;">Home</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-button-style u-hover-custom-color-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="{{ route('parking.index') }}" style="padding: 10px 14px;">Parking</a><div class="u-nav-popup"><ul class="u-h-spacing-12 u-nav u-unstyled u-v-spacing-20"><li class="u-nav-item"><a class="u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white" href="{{ url("#") }}">Shuttle Service</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-button-style u-hover-custom-color-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="{{ route('vehiclerepair.index') }}" style="padding: 10px 14px;">Vehicle Repair</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-button-style u-hover-custom-color-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="{{ route('foodservice.index') }}" style="padding: 10px 14px;">Food Service</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-button-style u-hover-custom-color-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="{{ route('advertisingopportunities.index') }}" style="padding: 10px 14px;">Advertising Opportunities</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-button-style u-hover-custom-color-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="{{ route('careeropportunities.index') }}" style="padding: 10px 14px;">Career Opportunities</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-button-style u-hover-custom-color-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="{{ route('faqs.index') }}" style="padding: 10px 14px;">FAQs</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-button-style u-hover-custom-color-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="{{ route('contact.index') }}" style="padding: 10px 14px;">Contact us</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-button-style u-hover-custom-color-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="{{ route('about.index') }}" style="padding: 10px 14px;">About Us</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url("Home.html") }}">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href=" href="{{ route('register') }}">Parking</a><div class="u-nav-popup"><ul class="u-h-spacing-12 u-nav u-unstyled u-v-spacing-20"><li class="u-nav-item"><a class="u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white" href="{{ url("#") }}">Shuttle Service</a>
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
    <section class="u-clearfix u-section-1" id="sec-1766">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-sheet-1">
        <div class="u-palette-5-base u-radius-50 u-shape u-shape-round u-shape-1" data-animation-name="customAnimationIn" data-animation-duration="1750"></div>
        <img src="{{ asset("/images/house-bill-7725-parking-operations-and-fees-regulation-act-1622704963.jpg") }}" class="u-align-left u-image u-image-round u-radius-50 u-image-1" data-image-width="1920" data-image-height="1080" data-animation-name="customAnimationIn" data-animation-duration="1750">
        <div class="custom-expanded u-align-left u-container-style u-group u-radius-50 u-shape-round u-white u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1750">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-custom-font u-font-montserrat u-text u-text-custom-color-2 u-text-default u-text-1">Park​ing </h2>
            <p class="u-text u-text-2"> The company is open 24 hours a day, 365 days a year, Sundays and holidays included. The company has a comfortable lounge where customers are able to wait for their flight or while their cars undergo repairs and/or cleaning. Our concept has been developed for air travelers who wish to leave their cars safely attended while a fleet of complimentary air-conditioned shuttle vans transport them to the airport and back. In the interim, our experienced mechanics equipped with the most comprehensive diagnostic systems and specialized automotive equipment’s are available to service vehicles bumper to bumper, including detailing and cleaning packages such as interior shampoo and seat cover installation/removal.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-cbf6">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-shape u-shape-svg u-text-custom-color-1 u-shape-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-db78"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-db78"><path d="M114.3,152.3l38-38C144.4,130.9,130.9,144.4,114.3,152.3z M117.1,9.1l-108,108c0.8,1.6,1.7,3.2,2.7,4.8l110-110
	C120.3,10.9,118.7,10,117.1,9.1z M97.5,2L2,97.5c0.4,2,1,4,1.5,5.9l99.9-99.9C101.5,2.9,99.5,2.4,97.5,2z M80,160c2,0,4-0.1,5.9-0.2
	l73.9-73.9c0.1-2,0.2-3.9,0.2-5.9c0-0.6,0-1.2,0-1.9L78.1,160C78.8,160,79.4,160,80,160z M34.9,146.1c1.5,1,3,2,4.6,2.9L149,39.5
	c-0.9-1.6-1.9-3.1-2.9-4.6L34.9,146.1z M132.7,19.8L19.8,132.7c1.2,1.3,2.3,2.6,3.6,3.9L136.6,23.4C135.3,22.2,134,21,132.7,19.8z
	 M59.6,157.4l97.8-97.8c-0.5-1.9-1.1-3.8-1.7-5.7L53.9,155.6C55.8,156.3,57.7,156.9,59.6,157.4z M7.6,45.9L45.9,7.6
	C29.1,15.5,15.5,29.1,7.6,45.9z M80,0c-2.6,0-5.1,0.1-7.6,0.4l-72,72C0.1,74.9,0,77.4,0,80c0,0.1,0,0.2,0,0.2L80.2,0
	C80.2,0,80.1,0,80,0z"></path></svg>
        </div>
        <div class="u-palette-2-base u-shape u-shape-rectangle u-shape-2" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-direction=""></div>
        <div class="u-shape u-shape-svg u-text-palette-3-base u-shape-3" data-animation-name="customAnimationIn" data-animation-duration="2000">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9718"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-9718" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
        </div>
        <div class="u-align-left u-border-1 u-border-grey-75 u-container-style u-group u-radius u-shape-round u-white u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 class="u-align-center u-text u-text-custom-color-2 u-text-default u-text-1"> Air-conditioned Shut​tle Vans</h2>
          </div>
        </div>
        <div class="u-carousel u-expanded-width u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-on-hover u-gallery-1" id="carousel-dd97" data-interval="5000" data-u-ride="carousel">
          <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
            <li data-u-target="#carousel-dd97" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-dd97" data-u-slide-to="1" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-dd97" data-u-slide-to="2" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-dd97" data-u-slide-to="3" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-dd97" data-u-slide-to="4" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
          </ol>
          <div class="u-carousel-inner u-gallery-inner" role="listbox">
            <div class="u-active u-carousel-item u-effect-fade u-gallery-item u-carousel-item-1">
              <div class="u-back-slide" data-image-width="1600" data-image-height="1200">
                <img class="u-back-image u-expanded" src="{{ asset("/images/van3.jpg") }}">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-1"></div>
            </div>
            <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-2">
              <div class="u-back-slide" data-image-width="1600" data-image-height="1200">
                <img class="u-back-image u-expanded" src="{{ asset("/images/van4.jpg") }}">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-2"></div>
            </div>
            <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-3" data-image-width="1600" data-image-height="1200">
              <div class="u-back-slide" data-image-width="1600" data-image-height="1200">
                <img class="u-back-image u-expanded" src="{{ asset("/images/van5.jpg") }}">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-3"></div>
              <style data-mode="XL" data-visited="true"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-4" data-image-width="1600" data-image-height="1200">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="{{ asset("/images/van2.jpg") }}">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-4"></div>
              <style data-mode="XL" data-visited="true"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-5" data-image-width="1600" data-image-height="1200">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="{{ asset("/images/van1.jpg") }}">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-5"></div>
              <style data-mode="XL" data-visited="true"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="{{ url("#carousel-dd97") }}" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="{{ url("#carousel-dd97") }}" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
        <div class="u-align-left u-border-2 u-border-grey-75 u-container-style u-group u-radius u-shape-round u-white u-group-2">
          <div class="u-container-layout u-valign-middle u-container-layout-2">
            <p class="u-custom-font u-heading-font u-text u-text-2">Our concept has been developed for air travelers who wish to leave their cars safely attended while a fleet of complimentary air-conditioned shuttle vans transport them to the airport and back. In the interim, our experienced mechanics equipped with the most comprehensive diagnostic systems and specialized automotive equipments are available to service vehicles bumper to bumper, including detailing and cleaning packages such as interior shampoo and seat cover installation/removal.</p>
          </div>
        </div>
      </div>
    </section>
    
    
    
  
</body></html>

@endsection