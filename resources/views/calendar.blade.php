<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Include jQuery from a CDN -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script class="u-script" type="text/javascript" src="{{ asset("javascript/index.global.js") }}" defer=""></script>
<!-- Include FullCalendar CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css">

<script>
   
   
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var titleInput = document.getElementById('titleInput'); // Add this line to get the input element
    var slotsFromController = @json($slots);
    slotsFromController.forEach(function(item) {
      //console.log(item.name);
    });
    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth'
      },
      initialDate: new Date().toISOString().slice(0, 10),
      eventOrderStrict: true,
      navLinks: true,
      selectable: true,
      selectMirror: true,
      select: function(arg) {
        //var title = prompt('Event Title:');
        var title = titleInput.value; // Use the value of the input box
        
        if (title) {
          calendar.addEvent({
            title: title,
            start: arg.start,
            end: arg.end,
            allDay: arg.allDay
          })
        }
        calendar.unselect()
      },
      eventClick: function(arg) {
        if (confirm('Are you sure you want to modify this event?')) {
          //arg.event.remove()
          // Make an AJAX request to Laravel controller method
          $.ajax({
                    type: 'POST',
                    url: '/modifyCalendar', // Replace with your Laravel route
                    data: {
                        eventId: arg.event.id, eventTitle: arg.event.title // Send event ID or any relevant data
                    },
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        console.log('Event deleted successfully');
                        var eventId = data.eventId;
                        var startDate = data.startDate;
                        var eventTitle = data.eventTitle;
                        var message = data.message;
                        
                        console.log(data);
                        // Handle success response from the server
                        //location.reload(true);
                        var existingEvent = calendar.getEventById(eventId);

                        if (existingEvent) {
                            // Remove the existing event
                            existingEvent.remove();
                        }
                        if (eventId.includes("EN")) {
                          calendar.addEvent({
                            id: eventId,
                            title: eventTitle,
                            start: startDate, // Replace with the updated start time
                            color: 'blue' // Replace with the updated color
                            // Add other properties as needed
                          });                          
                        } else {
                          calendar.addEvent({
                            id: eventId,
                            title: eventTitle,
                            start: startDate, // Replace with the updated start time
                            color: 'green' // Replace with the updated color
                            // Add other properties as needed
                          });
                        }

                        
                        console.log('startDate:', startDate);
                        console.log('eventId:', eventId);
                        console.log('eventTitle:', eventTitle);
                        console.log('Message:', message);

                        // Update the event in the calendar
                        //calendar.dispatchEvent('change');
                        calendar.refetchEvents(); // Refresh the display

                        calendar.render();

                    },
                    error: function (error) {
                        console.error('Error deleting event');
                        console.error(error);
                        // Handle error response from the server
                    }
                });
        }
      },
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events      
      events: [               
        <?php
        foreach ($slots as $slot) {
          echo "{id: 'EN".$slot->name."',title: '$slot->is_entry',start: '$slot->name',color: 'purple'},";
          echo "{id: 'EX".$slot->name."',title: '$slot->is_exit',start: '$slot->name',color: 'red'},";
        }        
        ?>
        

      ]
    });

    calendar.render();
  });

</script>
<style>

  body {
    margin: 0 auto;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 24px;
  }

  #calendar {
    max-width: 800px;
    margin: 8% 10% 10% 25%;
  }

</style>
</head>
<body>
  @extends('admin.admin_dashboard')
  @section('admin')
  
    <div class="col">      
  
        <div id='calendar'></div>
        <input type="text" id="titleInput">
        
    </div>
  
</body>
</html>
