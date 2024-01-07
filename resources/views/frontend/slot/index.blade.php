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
        <form action="{{ route('slot.booking') }}" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 0px;color:aliceblue" name="form-2">
        <div class="row">
                <div class="inner-title" style="font-style: italic; vertical-align: top; padding-top: 0px">        
                    <h3 style="font-size: 22px; color: maroon">Flight Details</h3>        
                        <hr>
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
                                <input autocomplete="off" type="text" required name="check_in" class="form-control dt_picker" value="">
                            </td>
                            <td class="">
                                <input autocomplete="off" type="text" required name="check_out" class="form-control dt_picker" value="">
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
                                <input autocomplete="off" type="text" required name="destination" class="form-control">
                            </td>
                            <td class="">
                                <input autocomplete="off" type="text" required name="flightnumber" class="form-control">
                            </td>
                        </tr>            
                        </table>
                        <hr>
            
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