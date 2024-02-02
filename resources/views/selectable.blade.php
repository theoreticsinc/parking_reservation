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

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      initialDate: '2024-01-01',
      eventOrderStrict: true,
      navLinks: true, // can click day/week names to navigate views
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
        if (confirm('Are you sure you want to delete this event?')) {
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
                        console.log(data);
                        // Handle success response from the server
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
        {
          title: 'All Day Event',
          start: '2024-01-01',
          id: 'uniqueId'
        },
        {
          title: 'Long Event',
          start: '2024-01-07',
          end: '2024-01-10'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2024-01-09T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2024-01-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2024-01-11',
          end: '2024-01-13',
          color: 'purple' // override!
        },
        {
          title: 'Meeting',
          start: '2024-01-12T10:30:00',
          end: '2024-01-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2024-01-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2024-01-10'
        },
        {
          title: 'Happy Hour',
          start: '2024-01-12T17:30:00'
        },
        {
          title: '{{ $event }} [50]',
          start: '2024-01-11T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2024-01-13T07:00:00'
        },
        {
          title: '{{ $event }} [50]',
          url: 'http://google.com/',
          start: '2024-01-28',
          color: 'red' // override!
        },
        {
          title: '[70]',
          start: '2024-01-28'
        }
      ]
    });

    calendar.render();
  });

</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 24px;
  }

  #calendar {
    max-width: 1100px;
    margin: 0 auto;
  }

</style>
</head>
<body>

  <div id='calendar'></div>
  <input type="text" id="titleInput">
</body>
</html>
