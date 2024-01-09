@php
    $room = App\Models\Room::latest()->get();
@endphp
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="What We Do, ​We define ambitions, Our Portfolio, Contact Us">
    <meta name="description" content="">
    <title>Post Booking</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.2.1, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#ff4300">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="Home.html" data-home-page-title="Home" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-fe6e" data-image-width="1980" data-image-height="1023">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-text u-text-body-alt-color u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">Add-ons</h1>
      
      <!--Carousel Start-->      
    <section class="u-clearfix u-section-2" id="sec-0873">
      <div class="u-clearfix u-sheet u-sheet-1"><!--products--><!--products_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/products_options_json-->
        <div class="u-expanded-width u-layout-horizontal u-products u-products-1" data-site-sorting-prop="created" data-site-sorting-order="desc" data-products-datasource="site" data-items-per-page="6" data-products-id="1">
          <div class="u-list-control"></div>
          <div class="u-repeater u-repeater-1">
            @foreach ($room as $item)
            <!--product_item--><div class="u-align-center u-container-style u-products-item u-repeater-item" data-product-id="2">
              <div class="u-container-layout u-similar-container u-container-layout-4"><!--product_image-->
                <a class="u-product-title-link" href="{{ url('room/details/'.$item->id) }}"><img src="{{ asset( 'upload/roomimg/'.$item->image ) }}" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-product-control u-image-4"></a><!--/product_image--><!--product_title-->
                <h4 class="u-product-control u-text u-text-4">
                  <a class="u-product-title-link" href="{{ url('room/details/'.$item->id) }}">{{ $item['type']['name'] }}</a>
                </h4><!--/product_title--><!--product_price-->
                
                <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-4">
                  <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                    <div class="u-old-price">{{ $item->price }}</div><!--/product_old_price--><!--product_regular_price-->
                    <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;">per night</div><!--/product_regular_price-->
                  </div>
                </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"buy-now","content":"Add to cart"}--><!--/options_json-->
                <a href="#sec-92fe" class="u-active-grey-75 u-black u-border-none u-btn u-button-style u-hover-grey-75 u-product-control u-btn-4 u-dialog-link u-payment-button" data-product-button-click-type="buy-now" data-product-id="2"><!--product_button_content-->Add to cart<!--/product_button_content--></a><!--/product_button-->
              </div>
            </div>
            <!--/product_item-->
            @endforeach
            
            
          </div>
          <div class="u-list-control"></div>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
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
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
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
        </div><!--/products-->
      </div>
    </section>

<!--/End of Carousel-->
</div>
</section>

    <section class="u-clearfix u-section-3" id="sec-311f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-text u-text-default u-text-1"> We define ambitions</h2>
                  <p class="u-large-text u-text u-text-default u-text-variant u-text-2"> Setting brand and digital strategies that mobilises teams from authentic insights.</p>
                  <ul class="u-custom-list u-file-icon u-text u-text-3">
                    <li>
                      <div class="u-list-icon u-text-palette-1-base">
                        <img src="images/10486568.png" alt="">
                      </div> Brand strategy
                    </li>
                    <li>
                      <div class="u-list-icon u-text-palette-1-base">
                        <img src="images/10486568.png" alt="">
                      </div>Brand architecture
                    </li>
                    <li>
                      <div class="u-list-icon u-text-palette-1-base">
                        <img src="images/10486568.png" alt="">
                      </div>Digital strategy
                    </li>
                    <li>
                      <div class="u-list-icon u-text-palette-1-base">
                        <img src="images/10486568.png" alt="">
                      </div>Employer brand strategy
                    </li>
                  </ul>
                </div>
              </div>
              <div class="u-container-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <p class="u-align-left u-text u-text-default u-text-4"> “When I look at this brand, I suddenly realise everything I’ve been trying to say, now we have a way to express it.”</p>
                  <p class="u-align-left u-text u-text-default u-text-5"> David Bell, CEO and Co-Founder</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-white u-section-4" id="carousel_d2eb">
      

      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">Our Portfolio</h2>
        <p class="u-align-center u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">

          @foreach ($room as $item)
          <div class="u-align-center u-container-align-center u-container-style u-image u-image-default u-list-item u-repeater-item u-shape-round u-image-5" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="700" data-image-height="705">
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-9">
              <div class="custom-expanded u-container-align-center u-container-style u-group u-opacity u-opacity-80 u-white u-group-5">
                <div class="u-container-layout u-valign-middle u-container-layout-10">
                    <a href="{{ url('room/details/'.$item->id) }}">
                      <img src="{{ asset( 'upload/roomimg/'.$item->image ) }}" alt="Images">
                    </a>
                    <h3>
                      <a href="room-details.html">{{ $item['type']['name'] }}</a>
                 </h3>
                 <span>{{ $item->price }} / Per Night </span>
                 <div class="rating">
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                 </div>

                 <a href="room-details.html" class="book-more-btn">
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            
            
          </div>
        </div>
        
      </div>
      
      
      
      
      
      
      
      
    </section>
    <section class="u-clearfix u-palette-1-base u-section-5" id="sec-b9c9">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-32">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
                    <div class="u-container-layout u-valign-middle-xl u-container-layout-1">
                      <div class="u-align-left u-form u-form-1">
                        <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-28 u-form-vertical u-inner-form" style="padding: 10px" source="email" name="form">
                          <div class="u-form-group u-form-name">
                            <label for="name-5a14" class="u-form-control-hidden u-label" wfd-invisible="true">Name</label>
                            <input type="text" placeholder="Enter your Name" id="name-5a14" name="name" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle" required="">
                          </div>
                          <div class="u-form-email u-form-group">
                            <label for="email-5a14" class="u-form-control-hidden u-label" wfd-invisible="true">Email</label>
                            <input type="email" placeholder="Enter a valid email address" id="email-5a14" name="email" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle" required="">
                          </div>
                          <div class="u-form-group u-form-message">
                            <label for="message-5a14" class="u-form-control-hidden u-label" wfd-invisible="true">Message</label>
                            <textarea placeholder="" rows="4" cols="50" id="message-5a14" name="message" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle" required=""></textarea>
                          </div>
                          <div class="u-align-left u-form-group u-form-submit">
                            <a href="#" class="u-active-white u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-submit u-button-style u-hover-white u-none u-text-active-palette-1-base u-text-body-alt-color u-text-hover-palette-1-base u-btn-1">Submit</a>
                            <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
                          </div>
                          <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Your message has been sent. </div>
                          <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send your message. Please fix errors then try again. </div>
                          <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
                          <input type="hidden" name="formServices" value="ae551aa5-65af-f378-08d7-2064a48bee72">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-28">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                    <div class="u-container-layout u-valign-top u-container-layout-2">
                      <h2 class="u-text u-text-1">Contact Us</h2>
                      <div class="u-social-icons u-spacing-10 u-social-icons-1">
                        <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-text-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d616"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-d616"><path fill="currentColor" d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2
c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
                        </a>
                        <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-text-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-31f8"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-31f8"><path fill="currentColor" d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2
	c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7
	c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2
	c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5
	c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
                        </a>
                        <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name"><span class="u-icon u-social-icon u-social-instagram u-text-white u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c084"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-c084"><path fill="currentColor" d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z
	 M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path fill="#FFFFFF" d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path fill="currentColor" d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7
	V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7
	c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                    <div class="u-container-layout u-container-layout-3">
                      <h6 class="u-text u-text-2">1 (234) 567-891&nbsp;<br>1 (234) 987-654
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-clearfix u-footer u-grey-80" id="sec-28fe"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
          </div>
        </div>
      </div></footer>
<style>.u-dialog-section-8 .u-dialog-1 {
  width: 570px;
  min-height: 578px;
  height: auto;
  box-shadow: 0px 0px 8px 0px rgba(0,0,0,0.2);
  margin: 60px auto;
}

.u-dialog-section-8 .u-container-layout-1 {
  padding: 34px 35px;
}

.u-dialog-section-8 .u-text-1 {
  font-weight: 700;
  margin: 0 165px 0 0;
}

.u-dialog-section-8 .u-products-1 {
  margin-top: 30px;
  margin-bottom: 0;
}

.u-dialog-section-8 .u-repeater-1 {
  grid-template-columns: 100%;
  min-height: 206px;
  grid-gap: 10px;
}

.u-dialog-section-8 .u-container-layout-2 {
  padding: 0 0 30px;
}

.u-dialog-section-8 .u-text-2 {
  background-image: none;
  margin: 0;
}

.u-dialog-section-8 .u-text-3 {
  font-size: 0.875rem;
  margin: 20px 0 0;
}

.u-dialog-section-8 .u-product-quantity-1 {
  width: 125px;
  margin: 30px auto 0 0;
}

.u-dialog-section-8 .u-product-price-1 {
  margin: -34px 0 0 auto;
}

.u-dialog-section-8 .u-payment-services-1 {
  min-height: 250px;
  min-width: 50px;
  margin: 0;
}

.u-dialog-section-8 .u-container-layout-3 {
  padding: 20px 0 0;
}

.u-dialog-section-8 .u-container-layout-4 {
  padding: 20px 0 0;
}

.u-dialog-section-8 .u-btn-1 {
  width: 100%;
  margin: 0 auto;
}

.u-dialog-section-8 .u-icon-1 {
  width: 20px;
  height: 20px;
  left: auto;
  top: 36px;
  position: absolute;
  right: 35px;
  padding: 0;
}

@media (max-width: 1199px) {
  .u-dialog-section-8 .u-text-1 {
    margin-right: 165px;
  }

  .u-dialog-section-8 .u-payment-services-1 {
    margin-right: initial;
    margin-left: initial;
  }
}

@media (max-width: 991px) {
  .u-dialog-section-8 .u-container-layout-1 {
    padding: 30px;
  }

  .u-dialog-section-8 .u-container-layout-3 {
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
  }

  .u-dialog-section-8 .u-container-layout-4 {
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
  }

  .u-dialog-section-8 .u-icon-1 {
    top: 32px;
    right: 30px;
  }
}

@media (max-width: 767px) {
  .u-dialog-section-8 .u-dialog-1 {
    width: 540px;
  }
}

@media (max-width: 575px) {
  .u-dialog-section-8 .u-dialog-1 {
    width: 340px;
  }

  .u-dialog-section-8 .u-container-layout-1 {
    padding-left: 20px;
    padding-right: 20px;
  }

  .u-dialog-section-8 .u-text-1 {
    margin-right: 5px;
  }

  .u-dialog-section-8 .u-icon-1 {
    right: 20px;
  }
}</style>
</body></html>