<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Make a reservation">
    <meta name="description" content="">
    <title>Parking</title>
    <link rel="stylesheet" href="{{ asset("css/nicepage.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("css/Parking.css") }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset("javascript/jquery.js") }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset("javascript/nicepage.js") }}" defer=""></script>
    <meta name="generator" content="Nicepage 6.2.1, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site2"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Parking">
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url("Parking.html") }}">Parking</a><div class="u-nav-popup"><ul class="u-h-spacing-12 u-nav u-unstyled u-v-spacing-20"><li class="u-nav-item"><a class="u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white" href="{{ url("#") }}">Shuttle Service</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url("Vehicle-Repair.html") }}">Vehicle Repair</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url("Food-Service.html") }}">Food Service</a>
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
    <section class="u-clearfix u-gradient u-section-1" id="sec-1766">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-sheet-1">
        <div class="u-palette-5-base u-radius-50 u-shape u-shape-round u-shape-1" data-animation-name="customAnimationIn" data-animation-duration="1750"></div>
        <img src="{{ asset("/images/house-bill-7725-parking-operations-and-fees-regulation-act-1622704963.jpg") }}" class="u-align-left u-image u-image-round u-radius-50 u-image-1" data-image-width="1920" data-image-height="1080" data-animation-name="customAnimationIn" data-animation-duration="1750">
        <div class="u-align-left u-border-2 u-border-grey-75 u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-radius-50 u-shape-round u-white u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1750">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-custom-font u-font-montserrat u-text u-text-custom-color-2 u-text-default u-text-1">Park​ing </h2>
            <p class="u-text u-text-2"> The company is open 24 hours a day, 365 days a year, Sundays and holidays included. The company has a comfortable lounge where customers are able to wait for their flight or while their cars undergo repairs and/or cleaning. Our concept has been developed for air travelers who wish to leave their cars safely attended while a fleet of complimentary air-conditioned shuttle vans transport them to the airport and back. In the interim, our experienced mechanics equipped with the most comprehensive diagnostic systems and specialized automotive equipment’s are available to service vehicles bumper to bumper, including detailing and cleaning packages such as interior shampoo and seat cover installation/removal.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-palette-2-light-1 u-section-2" id="sec-4209">
      <div class="u-shape u-shape-svg u-text-palette-2-base u-shape-1" data-animation-name="customAnimationIn" data-animation-duration="2000">
        <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 150" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-27ed"></use></svg>
        <svg class="u-svg-content" viewBox="0 0 160 150" x="0px" y="0px" id="svg-27ed"><path d="M43.2,126.9c14.2,1.3,27.6,7,39.1,15.6c8.3,6.1,19.4,10.3,32.7,5.3c11.7-4.4,18.6-17.4,21-30.2c2.6-13.3,8.1-25.9,15.7-37.1
	c8.3-12.1,10.8-27.9,5.3-42.7C150.5,20.3,134.6,9,117,7.6C107.9,6.9,98.8,5,90.1,1.9C83-0.6,75-0.7,67.4,2.1
	c-9.9,3.7-17,11.6-20.1,21c-3.3,10.1-10.9,18-20.6,22.2c-0.1,0-0.1,0.1-0.2,0.1c-20.3,8.9-31,32-24.6,53.2
	C6.9,115.6,25.2,125.2,43.2,126.9z"></path></svg>
      </div>
      <div class="u-shape u-shape-svg u-text-palette-3-base u-shape-2" data-animation-name="customAnimationIn" data-animation-duration="2000">
        <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9718"></use></svg>
        <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-9718" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
      </div>
      <div class="u-shape u-shape-svg u-text-custom-color-2 u-shape-3" data-animation-name="customAnimationIn" data-animation-duration="2000">
        <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b7bd"></use></svg>
        <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-b7bd" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
      </div>
      <div class="u-clearfix u-group-elements u-group-elements-1" data-animation-name="customAnimationIn" data-animation-duration="2000">
        <div class="u-border-1 u-border-grey-50 u-container-style u-expanded-width u-group u-radius u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <p class="u-custom-font u-heading-font u-text u-text-custom-color-2 u-text-default u-text-1">Shuttle Service</p>
            <p class="u-align-left u-heading-font u-text u-text-2"> Our concept has been developed for air travelers who wish to leave their cars safely attended while a fleet of complimentary air-conditioned shuttle vans transport them to the airport and back. In the interim, our experienced mechanics equipped with the most comprehensive diagnostic systems and specialized automotive equipments are available to service vehicles bumper to bumper, including detailing and cleaning packages such as interior shampoo and seat cover installation/removal.</p>
          </div>
        </div>
      </div>
      <div class="custom-expanded u-carousel u-carousel-duration-500 u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-on-hover u-gallery-1" id="carousel-8aa0" data-interval="1500" data-u-ride="carousel">
        <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
          <li data-u-target="#carousel-8aa0" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
          <li data-u-target="#carousel-8aa0" data-u-slide-to="1" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
          <li data-u-target="#carousel-8aa0" data-u-slide-to="2" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
          <li data-u-target="#carousel-8aa0" data-u-slide-to="3" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
          <li data-u-target="#carousel-8aa0" data-u-slide-to="4" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
          <li data-u-target="#carousel-8aa0" data-u-slide-to="5" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
        </ol>
        <div class="u-carousel-inner u-gallery-inner" role="listbox">
          <div class="u-active u-carousel-item u-effect-fade u-gallery-item u-carousel-item-1" data-image-width="4000" data-image-height="2667">
            <div class="u-back-slide" data-image-width="1600" data-image-height="1200">
              <img class="u-back-image u-expanded" src="{{ asset("/images/van5.jpg") }}" alt="Air-conditioned Shuttle Vans">
            </div>
            <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-1">
              <h3 class="u-gallery-heading">Air-conditioned Shuttle Vans</h3>
            </div>
            <style data-mode="XL" data-visited="true"></style>
            <style data-mode="LG" data-visited="true"></style>
            <style data-mode="MD" data-visited="true"></style>
            <style data-mode="SM" data-visited="true"></style>
            <style data-mode="XS" data-visited="true"></style>
          </div>
          <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-2" data-image-width="1600" data-image-height="1200">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="{{ asset("/images/van1.jpg") }}">
            </div>
            <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-2"></div>
            <style data-mode="XL"></style>
            <style data-mode="LG"></style>
            <style data-mode="MD"></style>
            <style data-mode="SM"></style>
            <style data-mode="XS"></style>
          </div>
          <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-3" data-image-width="1600" data-image-height="1200">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="{{ asset("/images/van4.jpg") }}">
            </div>
            <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-3"></div>
            <style data-mode="XL"></style>
            <style data-mode="LG"></style>
            <style data-mode="MD"></style>
            <style data-mode="SM"></style>
            <style data-mode="XS"></style>
          </div>
          <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-4" data-image-width="1600" data-image-height="1200">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="{{ asset("/images/van3.jpg") }}">
            </div>
            <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-4"></div>
            <style data-mode="XL"></style>
            <style data-mode="LG"></style>
            <style data-mode="MD"></style>
            <style data-mode="SM"></style>
            <style data-mode="XS"></style>
          </div>
          <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-5" data-image-width="1600" data-image-height="1200">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="{{ asset("/images/van2.jpg") }}">
            </div>
            <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-5"></div>
            <style data-mode="XL"></style>
            <style data-mode="LG"></style>
            <style data-mode="MD"></style>
            <style data-mode="SM"></style>
            <style data-mode="XS"></style>
          </div>
          <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-6" data-image-width="1600" data-image-height="1200">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="{{ asset("/images/van1.jpg") }}">
            </div>
            <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-6"></div>
            <style data-mode="XL"></style>
            <style data-mode="LG"></style>
            <style data-mode="MD"></style>
            <style data-mode="SM"></style>
            <style data-mode="XS"></style>
          </div>
        </div>
        <a class="u-absolute-vcenter u-black u-carousel-control u-carousel-control-prev u-icon-rounded u-opacity u-opacity-70 u-radius u-spacing-10 u-text-white u-carousel-control-1" href="{{ url("#carousel-8aa0") }}" role="button" data-u-slide="prev">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
          </span>
        </a>
        <a class="u-absolute-vcenter u-black u-carousel-control u-carousel-control-next u-icon-rounded u-opacity u-opacity-70 u-radius u-spacing-10 u-text-white u-carousel-control-2" href="{{ url("#carousel-8aa0") }}" role="button" data-u-slide="next">
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
    </section>
    <section class="u-align-left u-clearfix u-gradient u-section-3" id="sec-56a5">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-sheet-1">
        <div class="u-shape u-shape-svg u-text-custom-color-2 u-shape-1" data-animation-name="customAnimationIn" data-animation-duration="2000">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5b44"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-5b44" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
        </div>
        <div class="u-shape u-shape-svg u-text-palette-2-base u-shape-2" data-animation-name="customAnimationIn" data-animation-duration="2000">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 150" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9308"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 150" x="0px" y="0px" id="svg-9308"><path d="M43.2,126.9c14.2,1.3,27.6,7,39.1,15.6c8.3,6.1,19.4,10.3,32.7,5.3c11.7-4.4,18.6-17.4,21-30.2c2.6-13.3,8.1-25.9,15.7-37.1
	c8.3-12.1,10.8-27.9,5.3-42.7C150.5,20.3,134.6,9,117,7.6C107.9,6.9,98.8,5,90.1,1.9C83-0.6,75-0.7,67.4,2.1
	c-9.9,3.7-17,11.6-20.1,21c-3.3,10.1-10.9,18-20.6,22.2c-0.1,0-0.1,0.1-0.2,0.1c-20.3,8.9-31,32-24.6,53.2
	C6.9,115.6,25.2,125.2,43.2,126.9z"></path></svg>
        </div>
        <div class="u-shape u-shape-svg u-text-palette-3-base u-shape-3" data-animation-name="customAnimationIn" data-animation-duration="2000">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-98e8"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-98e8" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
        </div>
        <div class="u-align-left u-border-1 u-border-grey-75 u-container-align-center-lg u-container-align-center-md u-container-align-center-sm u-container-align-center-xl u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-radius u-shape-round u-white u-group-1" data-animation-name="flipIn" data-animation-duration="1250" data-animation-direction="X">
          <div class="u-container-layout u-valign-bottom-xs u-container-layout-1">
            <h2 class="u-align-center u-text u-text-1">Make a reservation</h2>
            <p class="u-align-center u-custom-font u-heading-font u-text u-text-2">Welcome to Park N' Fly Online Booking System! Please input your booking details below and hit the&nbsp;<span style="font-weight: 700;"> CONTINUE&nbsp;<span style="font-weight: 400;"> button to proceed.&nbsp;<span style="font-weight: 700;">FREE&nbsp;<span style="font-weight: 400;"> Airport Shuttle service included!</span>
                  </span>
                </span>
              </span>
            </p>
            <div class="u-form u-form-1">
              <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 10px" source="email" name="form">
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
                  <input type="tel" pattern="\+?\d{0,2}[\s\(\-]?([0-9]{3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your Flight no. here" id="phone-447e" name="flightID" class="u-input u-input-rectangle u-palette-4-light-3" required="">
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <a href="{{ url("#") }}" class="u-border-2 u-border-hover-black u-border-palette-2-base u-btn u-btn-submit u-button-style u-none u-text-hover-black u-text-palette-2-base u-btn-1">CONTINUE</a>
                  <input type="submit" value="submit" class="u-form-control-hidden">
                </div>
                <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                <input type="hidden" value="" name="recaptchaResponse">
                <input type="hidden" name="formServices" value="47a64133-8ba5-244d-2d11-ac6e479d0892">
              </form>
            </div>
            <p class="u-align-center u-text u-text-default u-text-3">NOTICE:&nbsp;<span style="font-weight: 400;"> Dates in grayscale color mean that there are no more slots available.</span>
            </p>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-6375"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Copyright © Park 'N Fly. All rights reserved.</p>
      </div></footer>
  
</body></html>