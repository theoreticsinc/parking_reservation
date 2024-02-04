<!-- resources/views/slot/index.blade.php -->
<?php $total = 0; ?>

@extends('frontend.main_master')
@section('main')

<head>
    <!-- ... other head elements ... -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  

    <style>
        
        * {
          box-sizing: border-box;
          
        }
        
        .row {
          display: flex;
          
        }
        
        /* Create two equal columns that sits next to each other */
        .column1 {
          flex: 60%;
          padding: 10px;
        }
        .column2 {
          flex: 40%;
          padding: 20px;
        }
        .inner-banner.inner-bg9 {
        background-image: url('{{ asset('images/booking.jpg') }}');
        }


        
            /* Center the modal content */
            #popupContainer .modal-dialog {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        /* Center the form content */
        .u-inner-form {
          text-align: center;
          
        }
        .containers {
 display: flex;
    justify-content: center;
    align-items: center;
 
}


    </style>

    </style>
    
<div id="popupContainer" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Terms and Conditions</h5>
                <button id="XclosePopupBtn" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Popup content goes here -->
                <div class="card">
                    <div class="card-body">
                        <p>
                        <b>Introduction</b><br>
                        These are the Terms and Conditions that apply when making a booking using the Park N’ Fly (“PnF”) Online Parking Reservation System (“OPRS”) to park at Park N’ Fly Parking Facility (“PnF Parking Facility”). By making a reservation, you acknowledge and accept these Online Parking Reservation System Terms and Conditions, (“Terms and Conditions.”)
                        In these Terms “you” and “your” refer to any person who makes a booking via the Website. All online bookings are made between you and Park N’ Fly.
                        BY ACCESSING THE WEB SITE OR USING THE SERVICE, YOU ACKNOWLEDGE THAT YOU HAVE READ, UNDERSTAND, AND AGREE TO BE BOUND BY THESE WEB SITE TERMS OF USE.<br>
                        <b>Eligibility</b><br>
                        The OPRS is only available to users with the legal capacity to enter binding contracts under applicable law. By using the OPRS, you represent and warrant that you are 18 years of age or older and that you are fully able to enter and abide by all the terms and conditions herein.<br>
                        <b>Online Parking Reservations</b><br>
                        Reservations are available on a first come, first serve basis and are subject to availability. Reservations made for less than 24 hours (a full day) in duration will be charged a flat daily rate for the first 24 hours or less. Any excess hours parked beyond the first 24 hours shall be pro-rated and rounded off on an hourly basis.
                        When you have submitted a request using the OPRS, you will receive an email confirmation of your Reservation containing receipt of payment, and a confirmation code. Without a confirmation code, your reservation is not complete. When your parking reservation is submitted online, the rate is secured. PnF reserves the right to limit the number of Reservations per User.
                        If your stay extends beyond your reservation date and time, you will be charged the flat daily rate, plus any additional hours or days at current posted facility rates. If your actual stay is LESS than your reservation dates and times, NO REFUND will be issued for the unused portions of the reservation. A two (2) hour grace period is built in to the beginning and end of each Reservation before additional charges begin to accrue.
                        The Reservation is non-transferable from you to someone else.
                        The Reservation is valid only for the times, dates, and price specified in your Reservation.<br>
                        PnF does not accept responsibility for flight changes, including flight delays or if you miss your flight or airline check-in has closed because of failure to enter the parking facility on time, unload and check-in luggage and board your flight. <br>
                       <b>Parking Facilities Use</b><br>
                            The terms and conditions of use of the parking facility are as follows:
                            <ul>
                                <li>Prices are subject to change. Quotes are valid at the time of booking only. If you exit after the grace period ends, you will be liable for all additional fees. Entry into the parking facility will not be permitted with a Reservation if you arrive prior to the beginning of the grace period. Once the grace period has expired at the end of the reservation, you will incur additional fees at the posted daily rates prior to exiting the parking facility. Please note that this applies irrespective of the reason for the overstay.</li>
                                <li>When entering the parking facility, it is imperative that you follow the instructions you are issued via email at the time you booked your reservation.</li>
                                <li>When you park your vehicle, it is your responsibility to:
                                    <ul>
                                        <li>Properly secure all values and possessions. PnF will not be responsible for any loss of items, accessories &/or valuables left inside the vehicle.</li>
                                    </ul>
                                </li>
                                <li>PnF do not accept liability for:
                                    <ul>
                                        <li>Damage to your vehicle (whether caused accidentally or by way of vandalism);</li>
                                        <li>Theft of, or from your vehicle</li>
                                    </ul>
                                </li>
                                <li>Users of the Carpark shall be held liable for any direct or indirect damages caused to the Carpark and its facilities or to any person or other property within the Carpark.</li>
                                <li>Users of the Carpark who lose their Claim Stub shall be required to present proof of Ownership such as the Original BLT/LTO Certificate of Registration and Official Receipt, before being allowed to exit the Carpark.</li>
                                <li>Unless prior arrangements have been made by hourly parkers with the PnF, Vehicles left for more than (24) hours shall be reported to the proper authorities for proper action.</li>
                                <li>PnF may retain the vehicle in pledge until full payment of what may be due by reason of the deposit and the vehicle may be auctioned in accordance with Art. 2121 of the Civil Code.</li>
                                <li>It is understood that in the event of litigation arising from any and all controversies or disputes arising from or in connection with this transaction, exclusive venue shall be the courts of Pasay City.</li>
                                <li>Customer acknowledges that his or her vehicle shall be parked at PnF offsite parking facility in the event the multi-level facility is unable to accommodate the vehicle at the time of check-in.</li>
                                <li>PnF is not liable in the event of calamity, acts of God & other fortuitous events.</li>
                            </ul>
                            <b>Reservation Amendments, Cancellations and Refunds</b><br>
                            You may cancel your booking at any time up to 48 hours before the beginning of the Reservation period (your Reservation Entry Date/Time) and receive a full refund. For help with cancellations, modifications, or refunds, please call 88521946 or email parknflyreservation@gmail.com. Cancellations made less than 48 hours before the beginning of the Reservation Period shall incur a non-refundable cancellation penalty on the reservation fees paid in advance.<br>
                            <b>Online Reservations and Airport Parking Facility Capacity</b><br>
                            In the unlikely event the Parking Facility for your Reservation is full upon arrival, PnF will issue a full refund of your Reservation charges.<br>
                            <b>Resale of Online Booking / Commercial Use</b><br>
                            The Reservation is not permitted to be transferred, conveyed, or made available in any other way to third parties; otherwise, it will result in the non-refundable cancellation of the Reservation. <br>
                            <b>Privacy</b><br>
                            In order to process a Reservation, PnF will collect and store personal information including your name, address, phone number, email and vehicle license plate. Your use of the OPRS indicates your consent for PnF to collect and store such information.<br>
                            <b>Indemnity</b><br>
                            You agree to indemnify PnF and hold it harmless, from and against all losses, cost, expenses, damages, or liability relating to, arising from or as a result of your use of the OPRS, including, without limitation, a violation by you of these Terms and Conditions at any time.<br>
                            <b>Changes to Terms and Condition</b><br>
                            PnF reserves the right to change the OPRS Terms and Conditions at any time. Please ensure that you check the OPRS Terms & Conditions posted at the time of booking and/or prior to entering the Parking Facility.<br>
                            <b>Contact Us</b><br>
                            Any comments relating to OPRS Reservations at a Parking Facility should be directed to parknflyreservation@gmail.com.<br>
                        </p>
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button id="closePopupBtn"  type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- Additional buttons or actions can be added here -->
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    // Handle the button click event
    document.getElementById('openPopupBtn').addEventListener('click', function () {
        // Show the popup when the button is clicked
        $('#popupContainer').modal('show');
    });
    document.getElementById('XclosePopupBtn').addEventListener('click', function () {
        // Show the popup when the button is clicked
        $('#popupContainer').modal('hide');
    });
    document.getElementById('closePopupBtn').addEventListener('click', function () {
        // Show the popup when the button is clicked
        $('#popupContainer').modal('hide');
    });
});
</script>
  <!-- Top Header Start -->
     @include('frontend.body.header')
     <!-- Top Header End -->
  <!-- Inner Banner -->
  <div class="inner-banner inner-bg9">
    <div class="containers">        
        <form action="{{ route('slot.booking') }}" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 0px;color:aliceblue" name="form-2">
            <div class="inner-title" style="font-style: italic; vertical-align: top; padding-top: 0px">        
                <h3 style="font-size: 22px; color: maroon">Flight Details</h3>        
                <hr>
                <div style="display: flex; flex-direction: column;">
                    <div class="u-form-group u-form-name" style="color: aliceblue">
                        <label for="checkIn" class="u-form-contdol-hidden u-label">* CHECK-IN</label>
                        <input autocomplete="off" type="text" required id="check_in" name="check_in" class="form-control dt_picker" value="">
                    </div>
                    <div class="u-form-group" style="color: aliceblue">
                        <label for="checkOut" class="u-form-contdol-hidden u-label">* CHECK-OUT</label>
                        <input autocomplete="off" type="text" required id="check_out" name="check_out" class="form-control dt_picker" value="">
                    </div>
                    <div class="u-form-group u-form-name" style="color: aliceblue">
                        <label for="destination" class="u-form-contdol-hidden u-label">* DESTINATION</label>
                        <input autocomplete="off" type="text" id="destination" name="destination" class="form-control">
                    </div>
                    <div class="u-form-group" style="color: aliceblue">
                        <label for="flightNumber" class="u-form-contdol-hidden u-label">* FLIGHT NUMBER</label>
                        <input autocomplete="off" type="text" id="flightnumber" name="flightnumber" class="form-control">
                    </div>
                </div>
                <hr>
                <input type="checkbox" id="agreement" required> &nbsp; Agree to the<a href="#" id="openPopupBtn" data-toggle="modal" data-target="#popupContainer"> Terms and Conditions</a>
                <br>
                <input type="submit" value="Check Availability" class="u-form-contdol-hidden">
                @csrf
            </div>
        </div>
    </form>
    </div>
</div>

<!-- Inner Banner End -->
<div >
            
   
@php //echo $total; 
@endphp
</div>
@endsection