@extends('frontend.main_master')
@section('main')

  <!-- Inner Banner -->
  <div class="inner-banner inner-bg9">
    <div class="container">
        <div class="inner-title">
            
                <?php $empty_array = []; ?>
               
               @foreach ($rooms as $item)
    
               @php
                $bookings = App\Models\Booking::withCount('assign_rooms')->whereIn('id',$check_date_booking_ids)->where('rooms_id',$item->id)->get()->toArray();
                
                $total_book_room = array_sum(array_column($bookings,'assign_rooms_count'));
                echo "total_book_room: ".$total_book_room;
                $av_room = @$item->room_numbers_count-$total_book_room;
                echo "room numbers:".@$item->room_numbers_count;
                echo "AV: ".$av_room;
               @endphp
    
                @foreach ($bookings as $b)
                        @php   
                    echo "Bookings : ";//.$b->rooms_id;
                    @endphp
                @endforeach
    
    
                @if ($av_room > 0 && old('persons') <= $item->total_adult)
                    
                <div class="col-lg-4 col-md-6">
                    <div class="room-card">
                        <a href="{{ url('room/details/'.$item->id) }}">
                            <img src="{{ asset( ''.$item->image ) }}" alt="Images" style="width: 550px; height:300px;">
                        </a>
                        <div class="content">
                            <h6><a href="{{ url('room/details/'.$item->id) }}">{{ $item['type']['name'] }}</a></h6>
                            <ul>
                                <li class="text-color">${{ $item->price }}</li>
                                <li class="text-color">Per Night</li>
                            </ul>
                            <div class="rating text-color">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star-half'></i>
                            </div>
                        </div>
                    </div>
                </div> 
    
                @else
                <?php array_push($empty_array, $item->id) ?>
    
                @endif 
               @endforeach
    
               @if (count($rooms) == count($empty_array))
               <p class="text-center text-danger">Sorry No Data Found</p>
                   
               @endif
    
        </div>
    </div>
</div>
<!-- Inner Banner End -->

@endsection