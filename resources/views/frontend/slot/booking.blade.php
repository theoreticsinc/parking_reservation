<!-- resources/views/slot/index.blade.php -->
<?php $total = 0; ?>

@extends('frontend.main_master')
@section('main')

<head>
    <!-- ... other head elements ... -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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



    <style>
  #popupContainer {
    width: 400px;
    height: 250px;
    background-color: #f0f0f0;
    border: 2px solid #000;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin: auto; 
  }

  .modal-header {
    background-color: blue;
    color: white;
    padding: 1px;
    text-align: center;
  }

  .close {
    position: absolute;
    top: 5px;
    right: 5px;
    cursor: pointer;
    color: white;
    background-color: blue;
    border: none;
    padding: 5px;
  }

  .modal-body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 10px;
  }

  .btn-secondary {
    width: 70%;
    background-color: green;
    color: white;
    border: none;
    padding: 8px;
    cursor: pointer;
  }

  .modal-footer {
    text-align: right; /* Align the footer content to the right */
    margin-right: 10px; /* Adjust the right margin as needed */
  }

  #closePopupBtn {
    width: 40%;
    background-color: gray;
    color: white;
    border: none;
    padding: 8px;
    cursor: pointer;
  }

  .half-now-container,
  .full-payment-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 5px;
  }

  .half-now-text,
  .full-payment-text {
    width: calc(60% - 8px);
    padding: 8px;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
</style>



<div id="popupContainer" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Payment Options</h5>
        <button id="XclosePopupBtn" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <div class="half-now-container">
          <div class="half-now-text">{{$downpayment}}</div>
          <button id="halfPopupBtn" type="button" class="btn btn-secondary" data-dismiss="modal">Pay Minimum Due</button>
        </div>
        <div class="full-payment-container">
          <div class="full-payment-text">{{$totaldue}}.00</div>
          <button id="fullPopupBtn" type="button" class="btn btn-secondary" data-dismiss="modal">Pay Estimated Amount</button>
        </div>
      </div>
      <div class="modal-footer">
        <button id="closePopupBtn" type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        var form = document.getElementById('bookingform');
        var bookBtn = document.getElementById('bookBtn');
        var mobileNumberRegex = /^\+639\d{9}$/; // Starts with '+639', followed by 9 digits
        var emailRegex = /^[\w.-]+@[a-zA-Z\d.-]+\.[a-zA-Z]{2,}$/;

        // Handle the button click event
        document.getElementById('openPopupBtn').addEventListener('click', function (event) {
            
            var mobileNumberInput = document.getElementById('mobileNumber').value;
            var emailInput = document.getElementById('email').value;
            var confirmEmail = document.getElementById('confirmEmail').value;
            
            if (!form.checkValidity()) {
                // Form is not valid
                alert('Please fill out all required fields first. Then proceed to payment');
                event.preventDefault(); // Prevent form submission
            } else if (!emailRegex.test(emailInput)) {
                // Mobile number is invalid
                alert('Invalid email address');
                event.preventDefault(); // Prevent form submission
            } else if (emailInput != confirmEmail) {
                // Mobile number is invalid
                alert('Confirmation and Email is not the same.');
                event.preventDefault(); // Prevent form submission
            } else if (!mobileNumberRegex.test(mobileNumberInput)) {
                // Mobile number is invalid
                alert('Invalid mobile number. Please enter a number starting with +63 and followed by 10 digits.');
                event.preventDefault(); // Prevent form submission
            } else {
                // Form is valid and mobile number is valid
                $('#popupContainer').modal('show');
                event.preventDefault(); // Prevent form submission
            }
            
        });
        document.getElementById('halfPopupBtn').addEventListener('click', function (event) {
            
            var mobileNumberInput = document.getElementById('mobileNumber').value;
            var emailInput = document.getElementById('email').value;
            var confirmEmail = document.getElementById('confirmEmail').value;
            if (mobileNumberRegex.test(mobileNumberInput) && emailRegex.test(emailInput) && emailInput == confirmEmail) {
                if (!form.checkValidity()) {
                    // Form is not valid
                    alert('Please fill out all required fields first. Then proceed to payment');
                    event.preventDefault(); // Prevent form submission
                } else {
                    // Form is valid  
                    document.getElementById('payment_status').value = "Awaiting Half";
                    bookBtn.innerHTML = "Checkout Now";
                    //var newDate = new Date(document.getElementById('check_in').value);
                    //bookBtn.innerHTML =  document.getElementById('check_in').value;
                    document.getElementById('bookingform')['check_in'].disabled = false;
                    document.getElementById('bookingform')['check_out'].disabled = false;
                    
                    document.getElementById('bookingform')['destination'].disabled = false;
                    document.getElementById('bookingform')['flightnumber'].disabled = false;
                    form.submit();    
                }
                
            } else {
                alert('Invalid mobile number. Please enter a number starting with +63 and followed by 10 digits.');
                event.preventDefault(); // Prevent form submission
            }
        });
        document.getElementById('fullPopupBtn').addEventListener('click', function (event) {
            
            var mobileNumberInput = document.getElementById('mobileNumber').value;
            var emailInput = document.getElementById('email').value;
            var confirmEmail = document.getElementById('confirmEmail').value;
            if (mobileNumberRegex.test(mobileNumberInput) && emailRegex.test(emailInput) && emailInput == confirmEmail) {
                // Show the popup when the button is clicked
                if (!form.checkValidity()) {
                    // Form is not valid
                    alert('Please fill out all required fields first. Then proceed to payment');
                    event.preventDefault(); // Prevent form submission
                } else {
                    // Form is valid  
                    document.getElementById('payment_status').value = "Awaiting Full";
                    bookBtn.innerHTML = "Checkout Now";
                    document.getElementById('bookingform')['check_in'].disabled = false;
                    document.getElementById('bookingform')['check_out'].disabled = false;
                    
                    document.getElementById('bookingform')['destination'].disabled = false;
                    document.getElementById('bookingform')['flightnumber'].disabled = false;        
                    form.submit();       
                }
            } else {
                alert('Invalid mobile number. Please enter a number starting with +63 and followed by 10 digits.');
                event.preventDefault(); // Prevent form submission
            }
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
  
  <!-- Inner Banner -->
  <div class="inner-banner inner-bg9" >
    <div class="container">
        <form  method="post" action="{{ route('postbooking') }}"class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 0px;color:aliceblue" name="bookingform" id="bookingform">
        <div class="row">
            <div class="column1">
                <div class="inner-title" style="font-style: italic; vertical-align: top; padding-top: 0px">        
                    <h3 style="font-size: 22px; color: maroon">Flight Details</h3>        
                        <hr>@csrf
                        <table>
                        <tr>
                            <td class="u-form-group u-form-name" style="color: aliceblue">
                            <label for="check_in" class="u-form-contdol-hidden u-label">* CHECK-IN</label>
                            </td>
                            <td class="" style="color: aliceblue">
                                <label for="check_out" class="u-form-contdol-hidden u-label">* CHECK-OUT</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="u-form-email u-form-group">
                                <input autocomplete="off" type="text" disabled required name="check_in" id="check_in" class="form-control dt_picker" value="{{$sdate}}">
                                <input type="hidden" id="checkIndate" name="checkIndate" value="{{$checkIndate}}">
                            </td>
                            <td class="">
                                <input autocomplete="off" type="text" disabled required name="check_out" id="check_out" class="form-control dt_picker" value="{{$edate}}">
                                <input type="hidden" id="payment_status" name="payment_status">
                                <input type="hidden" id="checkOutdate" name="checkOutdate" value="{{$checkOutdate}}">
                            </td>
                        </tr>
                        <tr>
                            <td class="u-form-group u-form-name" style="color: aliceblue">
                              <label for="destination" class="u-form-contdol-hidden u-label">* DESTINATION</label>
                            </td>
                            <td class="" style="color: aliceblue">
                                <label for="flightNumber" class="u-form-contdol-hidden u-label">* FLIGHT NUMBER</label>
                                
                            </td>
                            </tr>
                            <tr>
                            <td class="u-form-email u-form-group">
                                <input autocomplete="off" type="text" disabled required name="destination" id="destination" class="form-control" value="{{$destination}}">
                            </td>
                            <td class="">
                                <input autocomplete="off" type="text" disabled required name="flightnumber" id="flightnumber" class="form-control" value="{{$flightnumber}}">
                            </td>
                        </tr>            
                        </table>
                        <hr>
                        <h3 style="font-size: 22px; color: maroon">Personal Information</h3>
                        <hr>
                        @if ($errors->any())
                            <div class="alert alert-danger" style="color: black">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <table>
                            <tr>
                                <td class="u-form-group u-form-name" style="color: aliceblue">
                                <label for="firstName" class="u-form-contdol-hidden u-label">* First Name</label>
                                </td>
                                <td class="" style="color: aliceblue">
                                    <label for="lastName" class="u-form-contdol-hidden u-label">* Last Name</label>
                                </td>
                                <td class="" style="color: aliceblue">
                                    <label for="mobileNumber" class="u-form-contdol-hidden u-label">* Mobile Number</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="u-form-email u-form-group">
                                    <input autocomplete="on" type="text" required id="firstName" name="firstName" class="form-control">
                                    <span id="firstNameError" class="error"></span>
                                </td>
                                <td class="">
                                    <input autocomplete="on" type="text" required id="lastName" name="lastName" class="form-control">
                                </td>
                                <td class="">
                                    <input autocomplete="on" type="text" required id="mobileNumber" name="mobileNumber" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="u-form-group u-form-name" style="color: aliceblue">
                                  <label for="typeOfCar" class="u-form-contdol-hidden u-label">* Type of Car</label>
                                </td>
                                <td class="" style="color: aliceblue">
                                    <label for="plateNumber" class="u-form-contdol-hidden u-label">* Plate Number</label>
                                </td>
                                </tr>
                                <tr>
                                <td class="u-form-email u-form-group">
                                    <input autocomplete="on" type="text" required id="typeOfCar" name="typeOfCar" class="form-control">
                                </td>
                                <td class="">
                                    <input autocomplete="on" type="text" required id="plateNumber" name="plateNumber" class="form-control">
                                </td>
                            </tr>  
                            <tr>
                                <td class="u-form-group u-form-name" style="color: aliceblue">
                                  <label for="email" class="u-form-contdol-hidden u-label">* Email Address</label>
                                </td>
                                <td class="" style="color: aliceblue">
                                    <label for="confirmEmail" class="u-form-contdol-hidden u-label">* Confirm Email</label>
                                </td>
                                </tr>
                                <tr>
                                <td class="u-form-email u-form-group">
                                    <input autocomplete="on" type="text" required id="email" name="email" class="form-control">
                                </td>
                                <td class="">
                                    <input autocomplete="on" type="text" required id="confirmEmail" name="confirmEmail" class="form-control">
                                </td>
                            </tr>          
                            </table>
            
                            <div>
                                <button id="openPopupBtn" class="btn btn-primary" data-target="#popupContainer">Submit</button>

                            </div>
                      
                </div>
                
            </div>
            <div class="column2" style="background-color:#5e5e5eaa;">
                <div class="inner-title" style="font-style: italic; vertical-align: top; padding-top: 0px">        
                    <h3 style="font-size: 22px; color: aliceblue">Parking Fees</h3> 
                            
                       
                    <hr>
                        <div class="row">
                            <div class="column1">
                                ENTRY DATE: 
                            </div>
                            <div class="column2">
                                {{$sdate}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="column1">
                                EXIT DATE: 
                            </div>
                            <div class="column2">
                                {{$edate}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="column1">
                                
                            </div>
                            <div class="column2">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="column1">
                                Booking Fee: 
                            </div>
                            <div class="column2">
                                0.00
                            </div>
                        </div>
                        <div class="row">
                            <div class="column1">
                                Rate Per Day: 
                            </div>
                            <div class="column2">
                                475.00
                            </div>
                        </div>
                        <div class="row">
                            <div class="column1">
                                Number of Days: 
                            </div>
                            <div class="column2">
                                {{$daysparked}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="column1" style="font-style: bold">
                                Estimated Min. Amount Due: 
                            </div>
                            <div class="column2">
                                {{$downpayment}}<input type="hidden" name="downpayment" id="downpayment" value="{{$downpayment}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="column1">
                                Estimated Amount: 
                            </div>
                            <div class="column2">
                                {{$totaldue}}<input type="hidden" name="total_price" id="total_price" value="{{$totaldue}}">.00
                            </div>
                        </div>
                </div>
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