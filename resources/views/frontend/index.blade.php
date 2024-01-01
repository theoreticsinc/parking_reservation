@extends('frontend.main_master')
@section('main')
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Safe and Secure, ​Car Repair Services">
    <meta name="description" content="">
    <title>Home</title>
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
        <img class="custo-expanded u-image u-image-contain u-image-default u-image-1" src="{{ asset("images/Screenshot2023-12-171142241.png") }}" alt="" data-image-width="1524" data-image-height="600">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 500;">
            <a class="u-button-style u-custom-active-color u-custom-border u-custom-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="{{ url("#") }}">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-13d0"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-13d0" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
            </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-custom-color-2 u-button-style u-hover-custom-color-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="{{ route('home.index') }}" }} style="padding: 10px 14px;">Home</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-button-style u-hover-custom-color-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" a href="{{ route('parking.index') }}" style="padding: 10px 14px;">Parking</a><div class="u-nav-popup"><ul class="u-h-spacing-12 u-nav u-unstyled u-v-spacing-20"><li class="u-nav-item"><a class="u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white" href="{{ url("#") }}">Shuttle Service</a>
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
      <section class="skrollable u-clearfix u-image u-parallax u-section-1" id="sec-645a" data-image-width="4704" data-image-height="3136">
        <form method="post" action="{{ route('booking.search') }}">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-sheet-1">
          <p class="u-custom-font u-text u-text-white u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-direction=""> ARRIVE ON TIME<br>
            <br>
          </p>
          <p class="u-custom-font u-text u-text-custom-color-2 u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-direction="">BOOK YOUR SPOT NOW!</p>
          <p class="u-custom-font u-text u-text-white u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-direction="">Park 'N Fly is the first of its kind and only service in the Philippines wherein customers can leave their vehicles on a daily, weekly or monthly basis either for short-term or long-term parking at very reasonable rates. </p>
          
          <button type="submit" class="u-border-1 u-border-custom-color-2 u-border-hover-black u-btn u-button-style u-hover-feature u-none u-text-custom-color-2 u-text-hover-grey-90 u-btn-1" data-animation-name="customAnimationIn" data-animation-duration="1750">
            Check Availability
        </button>
        </div>
        </form>
      </section>
    <section class="skrollable u-align-center u-clearfix u-image u-parallax u-section-2" id="sec-e840" data-image-width="3000" data-image-height="2000">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-custom-font u-font-georgia u-text u-text-custom-color-2 u-text-default u-text-1">Safe and S​ecure</h1>
        <p class="u-custom-font u-font-georgia u-text u-text-2"> The indoor parking facilities are covered and provided with professional security and electronic surveillance.&nbsp;The facilities are specifically designed for air travelers in order to ensure comfortable hassle-free and worry-free travel. It is ideally located at MIA and Domestic roads just 500 meters from the domestic airport terminal.</p>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-3e8a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-rotation-parent u-rotation-parent-1" data-animation-name="bounceIn" data-animation-duration="1750" data-animation-direction="">
          <div class="u-shape u-shape-svg u-text-custom-color-2 u-shape-1">
            <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-645a"></use></svg>
            <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-645a" style="enable-background:new 0 0 160 160;"><path d="M10.3,39.9c-18.2,24.9-9.2,62.5,4,87.4c8.2,15.4,23,36.1,48.6,32.2c5.8-0.9,11.1-3.2,16.9-4.3c17.8-3.4,37.9,4.7,54.5-1.5
	c6.6-2.5,11.6-6.9,15.5-11.8c12.2-15.3,13.7-35.6,3.8-51.9c-6.9-11.5-19-20.9-23.6-33.1c-4.5-11.9-1.4-24.9-4.7-37.1
	C121.1,5,103.7-5.6,85.7,3.1c-6.8,3.3-12.6,7.7-20,10.2C58,15.9,49.5,16.6,41.6,19C26.8,23.6,16.7,31,10.3,39.9z"></path></svg>
          </div>
        </div>
        <div class="u-shape u-shape-svg u-text-palette-3-base u-shape-2" data-animation-name="customAnimationIn" data-animation-duration="3000">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c8d1"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-c8d1" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
        </div>
        <div class="u-opacity u-opacity-70 u-shape u-shape-svg u-text-palette-3-base u-shape-3" data-animation-name="customAnimationIn" data-animation-duration="1500">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7f67"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-7f67" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
        </div>
        <div class="u-opacity u-opacity-60 u-shape u-shape-svg u-text-palette-3-base u-shape-4" data-animation-name="customAnimationIn" data-animation-duration="1500">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9256"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-9256" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
        </div>
        <img class="u-image u-image-default u-image-1" src="{{ asset("/images/Untitled-9.png") }}" alt="" data-image-width="734" data-image-height="396" data-animation-name="customAnimationIn" data-animation-duration="1500">
        <p class="u-custom-font u-text u-text-body-alt-color u-text-default-lg u-text-default-xl u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1750">24 Hours Parking Service</p>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-white u-section-4" id="sec-ec19">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <h2 class="u-custom-font u-font-arial u-text u-text-default u-text-palette-2-base u-text-1">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-custom-color-2 u-btn-1" href="{{ url("Vehicle-Repair.html") }}"> Car Repair Services</a>
        </h2>
        <div class="custom-expanded u-carousel u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-on-hover u-gallery-1" id="carousel-cc71" data-interval="5000" data-u-ride="carousel">
          <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
            <li data-u-target="#carousel-cc71" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-cc71" data-u-slide-to="1" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-cc71" data-u-slide-to="2" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-cc71" data-u-slide-to="3" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-cc71" data-u-slide-to="4" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
          </ol>
          <div class="u-carousel-inner u-gallery-inner" role="listbox">
            <div class="u-active u-carousel-item u-effect-fade u-gallery-item u-carousel-item-1">
              <div class="u-back-slide" data-image-width="1280" data-image-height="828">
                <img class="u-back-image u-expanded" src="{{ asset("/images/d213cbc8ce07dc7112a63d510eeb103db1d6b02da5a5e7afa0f217f4b2c567436fb01b7222c2fb54df8a164733521c083f3783be5d2010d2a797ab_1280.jpg") }}">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-1"></div>
            </div>
            <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-2">
              <div class="u-back-slide" data-image-width="1280" data-image-height="853">
                <img class="u-back-image u-expanded" src="{{ asset("/images/e3db24608de517aa93662089e4525d16a44d7f91a0f0c21163a6f51e40caf46df70c534ecb84cbf281c00583300c94e37a9f96cb03d12747c7851c_1280.jpg") }}">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-2"></div>
            </div>
            <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-3" data-image-width="1280" data-image-height="828">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="{{ asset("/images/d213cbc8ce07dc7112a63d510eeb103db1d6b02da5a5e7afa0f217f4b2c567436fb01b7222c2fb54df8a164733521c083f3783be5d2010d2a797ab_1280.jpg") }}">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-3"></div>
              <style data-mode="XL"></style>
              <style data-mode="LG" data-visited="true"></style>
              <style data-mode="MD" data-visited="true"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-4" data-image-width="1280" data-image-height="874">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="{{ asset("/images/35a0ca947acb912d22b36e0f4bd8a9317c6a7da97b4435a01f596ff5ae0b8d73280652ce59221ef78c606288ebbfd717ee4dc6ac2dd3e4b3921d73_1280.jpg") }}">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-4"></div>
              <style data-mode="XL"></style>
              <style data-mode="LG" data-visited="true"></style>
              <style data-mode="MD" data-visited="true"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-5" data-image-width="1280" data-image-height="853">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="{{ asset("/images/6cbaecbd330c37de88ee4da6565ee6ac751a9e43739af347e22b89c6ff218f82773f68eeeca0fafab0ed23fd7d325b5ed851c6a796934d14b52dbf_1280.jpg") }}">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-5"></div>
              <style data-mode="XL"></style>
              <style data-mode="LG" data-visited="true"></style>
              <style data-mode="MD" data-visited="true"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
          </div>
          <a class="u-absolute-vcenter u-black u-carousel-control u-carousel-control-prev u-icon-rounded u-opacity u-opacity-70 u-radius u-spacing-10 u-text-white u-carousel-control-1" href="{{ url("#carousel-cc71") }}" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-black u-carousel-control u-carousel-control-next u-icon-rounded u-opacity u-opacity-70 u-radius u-spacing-10 u-text-white u-carousel-control-2" href="{{ url("#carousel-cc71") }}" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
            </span>
          </a>
        </div>
        <ul class="u-align-left u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1750">
          <li>Advanced electronic diagnostics for auto repairs.</li>
          <li>Comprehensive bumper-to-bumper repair and maintenance</li>
          <li>Various vehicle maintenance packages, including detailing and cleaning.</li>
          <li>Services like cut polishing, waxing, and interior shamp​ooing.</li>
          <li>Engine steam cleaning.</li>
          <li>Electronic tune-up for optimal performance.</li>
          <li>Oil and filter change.</li>
        </ul>
        <ul class="u-align-left u-text u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1750">
          <li>Chassis lubrication and repairs</li>
          <li>4-wheel computerized wheel alignment</li>
          <li>.Computerized high-speed wheel balancing.</li>
          <li>Clutch and brake repairs/maintenance.</li>
          <li>General engine and transmission overhaul</li>
          <li>.Painting and body repair services <br>with oven-baked finishes.
          </li>
        </ul>
      </div>
    </section>
    <section class="u-clearfix u-white u-section-5" id="sec-69ec">
      <img class="u-expanded-width u-image u-image-default u-image-1" src="{{ asset("/images/wp2733000-dark-gray-background-texture.jpg") }}" alt="" data-image-width="1920" data-image-height="1080">
      <p class="u-align-left u-custom-font u-font-arial u-text u-text-white u-text-1">
        <span style="font-weight: 700;">Follow Us&nbsp;</span>
        <br>Secure your spot effortlessly! Follow us on social media for real-time updates, exclusive promotions, and hassle-free parking solutions. Your convenience, our commitment 
      </p><span class="u-file-icon u-icon u-text-white u-icon-1" data-animation-name="customAnimationIn" data-animation-duration="2000" data-animation-direction="X"><img src="{{ asset("/images/1384005-99495e7f.png") }}" alt=""></span><span class="u-file-icon u-icon u-text-white u-icon-2" data-animation-name="customAnimationIn" data-animation-duration="2000" data-animation-delay="500"><img src="{{ asset("/images/3669688-ae1caf9d.png") }}" alt=""></span><span class="u-file-icon u-icon u-text-white u-icon-3" data-animation-name="customAnimationIn" data-animation-duration="2000" data-animation-delay="1000"><img src="{{ asset("/images/2168336-99f6b750.png") }}" alt=""></span>
      <p class="u-align-left u-text u-text-2">F</p>
    </section>
    <section class="u-align-center u-border-1 u-border-grey-75 u-clearfix u-section-6" id="sec-426c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1" data-image-width="928" data-image-height="626">
                <div class="u-container-layout u-container-layout-1"></div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-shape-rectangle u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <p class="u-align-left u-text u-text-grey-90 u-text-1"> Contact Us</p>
                  <p class="u-align-left u-custom-font u-font-georgia u-text u-text-2"> Mia Road Corner Domestic Road
Airport, Pasay City
Philippines&nbsp;<br>
                    <br>
                  </p>
                  <p class="u-custom-font u-font-georgia u-text u-text-3">8854-9302 to 04 and 8852 1946 to 48&nbsp;</p><span class="u-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 54.757 54.757" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1514"></use></svg><svg class="u-svg-content" viewBox="0 0 54.757 54.757" x="0px" y="0px" id="svg-1514" style="enable-background:new 0 0 54.757 54.757;"><g><path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
		s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"></path><path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
		L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
		C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
		C45.576,13.08,46.321,24.468,41.099,31.431z"></path>
</g></svg></span><span class="u-file-icon u-icon u-icon-2"><img src="{{ asset("/images/159832.png") }}" alt=""></span>
                  <p class="u-align-left u-custom-font u-font-georgia u-text u-text-4">0918-991-0000</p><span class="u-file-icon u-icon u-icon-3"><img src="{{ asset("/images/545245.png") }}" alt=""></span>
                  <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
                    <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="email" name="form-1">
                      <div class="u-form-group u-form-name u-label-none">
                        <label for="name-c359" class="u-label">Name</label>
                        <input type="text" placeholder="Name" id="name-c359" name="name" class="u-input u-input-rectangle" required="">
                      </div>
                      <div class="u-form-email u-form-group u-label-none">
                        <label for="email-c359" class="u-label">Email</label>
                        <input type="email" placeholder="Email" id="email-c359" name="email" class="u-input u-input-rectangle" required="">
                      </div>
                      <div class="u-form-group u-form-message u-label-none">
                        <label for="message-c359" class="u-label">Address</label>
                        <textarea placeholder="Address" rows="4" cols="50" id="message-c359" name="message" class="u-input u-input-rectangle" required=""></textarea>
                      </div>
                      <div class="u-form-group u-form-submit">
                        <a href="{{ url("#") }}" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-2 u-hover-white u-text-hover-custom-color-2 u-btn-1">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                      <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                      <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
                      <input type="hidden" value="" name="recaptchaResponse">
                      <input type="hidden" name="formServices" value="47a64133-8ba5-244d-2d11-ac6e479d0892">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-6375"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Copyright © Park 'N Fly. All rights reserved.</p>
      </div></footer>
  
</body></html>