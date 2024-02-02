 <script>
    function submitForm() {
        document.getElementById("openPopupBtn").click();
    }
</script>
<div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="{{ route('home.index') }}" class="logo">
                    <img src="{{ asset('frontend/assets/img/logos/logo-1.png') }}" class="logo-one" alt="Logo">
                    <img src="{{ asset('frontend/assets/img/logos/footer-logo1.png') }}" class="logo-two" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="{{ route('home.index') }}">
                            <img src="{{ asset('frontend/assets/img/logos/logo-1.png') }}" class="logo-one" alt="Logo">
                            <img src="{{ asset('frontend/assets/img/logos/footer-logo1.png') }}" class="logo-two" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{ route('home.index') }}" class="nav-link active">
                                        Home                                         
                                    </a>                                    
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('parking.index') }}" class="nav-link">
                                        Parking
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('vehiclerepair.index') }}" class="nav-link">
                                        Vehicle Repair
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('foodservice.index') }}" class="nav-link">
                                        Food Service
                                    </a>                                    
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('advertisingopportunities.index') }}" class="nav-link">
                                        Ads
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('careeropportunities.index') }}" class="nav-link">
                                        Careers
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('faqs.index') }}" class="nav-link">
                                        FAQs
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('contact.index') }}" class="nav-link">
                                        Contacts
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('about.index') }}" class="nav-link">
                                        About Us
                                    </a>
                                </li>

                            </ul>

                        </div>
                        <div class="nav-btn">
                            <button id="bookBtn" onclick="submitForm()" type="button" class="default-btn btn-bg-one border-radius-5">Book Now</button>
                        </div>
                    </nav>
                     
                    
                </div>
            </div>
        </div>