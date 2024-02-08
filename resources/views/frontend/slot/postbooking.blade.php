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
    .inner-banner.inner-bg9 {
    background-image: url('{{ asset('images/booking.jpg') }}');
    }
    </style>
     <script>
      document.addEventListener('DOMContentLoaded', function () {
          var bookBtn = document.getElementById('bookBtn');
          const existingList = document.getElementById('navbarSupportedContent');
          const newListItem = document.createElement('li');
          newListItem.innerHTML = '<i class="bx bx-credit-card"></i><a href="{{ route("cart.index") }}"> CART : Php {{ Cart::subtotal() }} </a>';
          const nestedUl = existingList.querySelector('li:first-child ul');

          existingList.appendChild(newListItem);
          //nestedUl.appendChild(newListItem);
          bookBtn.innerHTML = "Checkout Now";   
          
      });
     </script>
    <!-- Room Area -->
    @include('frontend.home.carousel')
    <!-- Room Area End -->
<div >
        
</div>
@endsection