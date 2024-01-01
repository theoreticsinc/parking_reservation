@extends('frontend.main_master')
@section('main')

  <!-- Inner Banner -->
  <div class="inner-banner inner-bg9">
    <div class="container">
        <div class="inner-title">
            
                <?php $empty_array = []; ?>
            
            @foreach ($room_numbers as $item)    
               @php
                echo "Room Numbers : " . $item->room_no . "<br>";
                echo "Room Numbers Count : " . $item->id_count . "<br>";
               @endphp
            @endforeach
        </div>
    </div>
</div>
<!-- Inner Banner End -->

@endsection