<!-- resources/views/slot/index.blade.php -->
<?php $total = 0; ?>

@extends('frontend.main_master')
@section('main')

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
    </style>

  <!-- Top Header Start -->
     @include('frontend.body.header')
     <!-- Top Header End -->
  <!-- Inner Banner -->
  <div class="inner-banner inner-bg9">
    <div class="container">
        <form  method="post" action="{{ route('postbooking') }}"class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 0px;color:aliceblue" name="bookingform">
        <div class="row">
            <div class="column1">
                <div class="inner-title" style="font-style: italic; vertical-align: top; padding-top: 0px">        
                    <h3 style="font-size: 22px; color: maroon">Flight Details</h3>        
                        <hr>@csrf
                        <table>
                        <tr>
                            <td class="u-form-group u-form-name" style="color: aliceblue">
                            <label for="checkIn" class="u-form-contdol-hidden u-label">* CHECK-IN</label>
                            </td>
                            <td class="" style="color: aliceblue">
                                <label for="checkOut" class="u-form-contdol-hidden u-label">* CHECK-OUT</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="u-form-email u-form-group">
                                <input autocomplete="off" type="text" disabled required name="check_in" id="check_in" class="form-control dt_picker" value="{{$sdate}}">
                            </td>
                            <td class="">
                                <input autocomplete="off" type="text" disabled required name="check_out" id="check_out" class="form-control dt_picker" value="{{$edate}}">
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
                                <input autocomplete="off" type="text" disabled required name="destination" class="form-control" value="{{$destination}}">
                            </td>
                            <td class="">
                                <input autocomplete="off" type="text" disabled required name="flightnumber" class="form-control" value="{{$flightnumber}}">
                            </td>
                        </tr>            
                        </table>
                        <hr>
                        <h3 style="font-size: 22px; color: maroon">Personal Information</h3>
                        <hr>
                        <table>
                            <tr>
                                <td class="u-form-group u-form-name" style="color: aliceblue">
                                <label for="First-Name" class="u-form-contdol-hidden u-label">* First Name</label>
                                </td>
                                <td class="" style="color: aliceblue">
                                    <label for="Last-Name" class="u-form-contdol-hidden u-label">* Last Name</label>
                                </td>
                                <td class="" style="color: aliceblue">
                                    <label for="Mobile-Number" class="u-form-contdol-hidden u-label">* Mobile Number</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="u-form-email u-form-group">
                                    <input autocomplete="on" type="text" required name="firstName" class="form-control">
                                </td>
                                <td class="">
                                    <input autocomplete="on" type="text" required name="lastName" class="form-control">
                                </td>
                                <td class="">
                                    <input autocomplete="on" type="text" required name="mobileNumber" class="form-control">
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
                                    <input autocomplete="on" type="text" required name="typeOfCar" class="form-control">
                                </td>
                                <td class="">
                                    <input autocomplete="on" type="text" required name="plateNumber" class="form-control">
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
                                    <input autocomplete="on" type="text" required name="email" class="form-control">
                                </td>
                                <td class="">
                                    <input autocomplete="on" type="text" required name="confirmEmail" class="form-control">
                                </td>
                            </tr>          
                            </table>
            
                            <div>
                                <input type="submit" value="Submit" class="default-btn btn-bg-one border-radius-5">
                            </div>
                      
                </div>
                
            </div>
            <div class="column2" style="background-color:#f1f1f1aa;">
                <div class="inner-title" style="font-style: italic; vertical-align: top; padding-top: 0px">        
                    <h3 style="font-size: 22px; color: maroon">Parking Fees</h3> 
                    
                    <input type="text" name="title" id="title" hidden value="Parking Fees">
        
                       
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
                                <input type="submit" value="Change" class="u-form-contdol-hidden">
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
                                475.00
                            </div>
                        </div>
                        <div class="row">
                            <div class="column1">
                                Estimated Amount: 
                            </div>
                            <div class="column2">
                                {{$totaldue}}<input type="hidden" name="amount" id="amount" value="{{$totaldue}}">.00
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