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
     
    <!-- Room Area -->
    @include('frontend.home.carousel')
    <!-- Room Area End -->
<div >
            
   
@php //echo $total; 
@endphp
</div>
@endsection