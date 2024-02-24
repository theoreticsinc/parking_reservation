@extends('admin.admin_dashboard')
@section('admin')
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en" class="u-responsive-xl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="keywords" content="Our Projects, ​Our Latest Projects, Our Projects, ​Let’s Start a Project!">
    <meta name="description" content="">
    <title>Bookings Management</title>
   
<link rel="stylesheet" href="/backend/management_page/Management.css" media="screen">
    <script class="u-script" type="text/javascript" src="/backend/management_page/jquery.js.download" defer=""></script>
    <script class="u-script" type="text/javascript" src="/backend/management_page/nicepage.js.download" defer=""></script>
    <meta name="generator" content="Nicepage 6.2.1, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="/backend/management_page/css">
    <link id="u-page-google-font" rel="stylesheet" href="/backend/management_page/css(1)">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
    }</script>
    <meta name="theme-color" content="#ff4300">
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
    <style>
  .u-table-entity tr:hover td {
    background-color: lightgray;
}
.u-table-entity tr:hover td a {
    color: white;
}
.u-table-entity tr td {
    cursor: pointer;
}
.u-table-entity tr td a:hover {
    background-color: darkred;
}
.u-table-entity td {
    border: 1px solid black;
    vertical-align: middle;
    text-align: center;
}
.u-table-header th,
.u-table-cell td {
    border: 1px solid black;
    text-align: center;
    vertical-align: middle;
    background-color: #496def;
    color: white;
}
.u-table-entity tr:nth-child(even) td {
    background-color: #e8e5ee;
}
.u-table-entity tr:nth-child(odd) td {
    background-color: white;
}
.u-table-entity tr:first-child th,
.u-table-entity tr:first-child td {
    border-top: 1px solid black;
}
.u-button-style {
    display: inline-block;
    padding: 8px 15px;
    font-size: 13px;
    text-align: center;
    cursor: pointer;
    text-decoration: none;
    outline: none;
    border: none;
    transition: background-color 0.3s;
    color: white;
    background-color: red;
}
.u-button-style:hover {
    background-color: #ff6666;
}


.controls-container {
    display: flex;
    justify-content: space-between;
    margin-bottom: 40%;
}
.dropdown-container {
    display: flex;
    align-items: center;
    position: fixed;
    top: 10%; /* Adjust the top position as needed */
    margin-bottom: 30%;
}
.dropdown-label {
    margin-right: 10px;
}
#entries {
    padding: 8px;
    font-size: 14px;
}


    
    .search-container {
    display: flex;
    align-items: center;
    justify-content: flex-end; /* Aligns items to the right */
    margin-bottom: 20px; /* Adjust margin as needed */
}

.search-container input[type=text] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 10px; /* Adjust margin as needed */
}

.search-container button {
    padding: 10px 20px;
    background: Green;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 4px;
}

/* Styles for modal */
.modal {
  display: none;
  position: fixed;
  z-index: 999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
}



.modal-content {
  background-color: #fefefe;
  margin: 5% auto;
  padding: 15px;
  border: 1px solid #888;
  width: 80%;
  max-width: 500px;
  border-radius: 10px;
}
.modal-content th {
    color: blue; /* Change color to blue */
    font-weight: bold; /* Make it bold */
    font-size: 20px; /* Customize font size */
    text-align: center !important; /* Center align the text */
}

/* Remove the vertical line */
.modal-content td {
    border: none;
    line-height: 2.5; /* Adjust the value as needed */
}

.close {
  color: #aaa;
  float: left; /* Change float to left */
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body data-home-page="Management.html" data-home-page-title="Page 1" data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="en">
<section class="u-align-center u-clearfix u-image u-shading u-section-1" id="carousel_2266" data-image-width="1600" data-image-height="1067">
    <div class="u-expanded-width u-table u-table-responsive u-table-1">
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search by client name">
        <button onclick="searchTable()">Search</button>
    </div>

    <!-- Dropdown container -->
    <div class="dropdown-container">
        <label class="dropdown-label" for="entries">Show entries:</label>
        <select id="entries">
            <option value="10">10</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
    </div>

        <table class="u-table-entity">
            <colgroup>
              <col width="13%">
              <col width="15%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
              <col width="8%">
              <col width="8%">
              <col width="13%">
            </colgroup>
            <thead class="u-palette-5-dark-3 u-table-header u-table-header-1">
                <tr style="height: 50px;">
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-1">CLIENT NAME</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-1">BOOKING DATE</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-1">CHECK-IN</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-1">CHECK-OUT</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-1">CONFIRMATION NO.</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-1">AMOUNT</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-1">BALANCE</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-1">STATUS</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-1">ACTION</th>
                    <!-- Add more columns based on your model fields -->
                </tr>
            </thead>
            
            <tbody class="u-black u-table-body u-table-body-1">
            @foreach ($data as $item)
    <tr id="bookingRow_{{ $item->id }}" style="height: 66px;" 
        data-email="{{ $item->email }}"
        data-destination="{{ $item->destination }}"
        data-flight-number="{{ $item->flightNumber }}"
        data-payment-method="{{ $item->payment_method }}"
        data-payment-ref-no="{{ $item->payment_ref_no }}"
        data-booking-fee="{{ $item->booking_fee }}"
        data-num-days="{{ $item->total_days }}"
        data-plate-number="{{ $item->plateNumber }}"
        data-mobile-number="{{ $item->mobileNumber }}"
        data-type-of-car="{{ $item->typeOfCar }}"> <!-- Add typeOfCar field here --> 
        <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">{{ $item->lastName }}, {{ $item->firstName }}</td>
        <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">{{ date('M d, Y h:i A', strtotime($item->booking_date)) }}</td>              
        <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">{{ date('M d, Y', strtotime($item->check_in)) }}</td>
        <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">{{ date('M d, Y', strtotime($item->check_out)) }}</td>
        <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">{{ $item->refNumber }}</td>
        <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">{{ number_format($item->downpayment) }}</td>
        <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">
            @if($item->payment_status == 'Fully Paid')
                0
            @else
                {{ number_format($item->total_price) }}
            @endif
        </td>
        <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">
            @if($item->payment_status == 'Fully Paid')
                Paid
            @elseif($item->payment_status == 'Half Only')
                Partially Paid
            @else
                {{ $item->payment_status }}
            @endif
        </td>
        <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">
    <form id="deleteBookingForm_{{ $item->id }}" action="{{ route('delete.booking', ['id' => $item->id]) }}" method="post">
        @csrf
        <button type="button" class="u-btn u-button-style u-btn-2 u-grey-5 u-hover-black u-text-black u-text-hover-white" style="background-color: red;" onclick="deleteBooking('{{ $item->id }}', event)">Cancel Booking</button>
    </form>
</td>
    </tr>
@endforeach
            </tbody>
        </table>

        {{ $data->links() }} <!-- Display pagination links -->
    </div>
    </section>

<!-- Modal for displaying booking details --> 
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <!-- Table for displaying booking details -->
    <table id="modalTable" class="u-table-entity">
      <!-- Table header -->
      <thead>
        <tr>
          <th style="border-top: none;">Booking Details</th>
        </tr>
      </thead>
      <!-- Table body -->
      <tbody id="modalTableBody">
        <!-- Rows for displaying booking details -->
      
      </tbody>
    </table>
  </div>
</div>




<script>
    

    function searchTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.querySelector(".u-table-entity");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0]; // Change index to the column you want to search
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].scrollIntoView({ behavior: "smooth", block: "center" }); // Scroll to the row
                td.classList.add('highlight'); // Highlight the matched column
                setTimeout(function(){ td.classList.remove('highlight'); }, 3000); // Remove highlight after 3 seconds
                return;
            }
        }
    }
    alert("No matching client found.");
}
document.addEventListener("DOMContentLoaded", function() {
    // Get the dropdown element
    var selectEntries = document.getElementById("entries");
    // Add event listener to dropdown change event
    selectEntries.addEventListener("change", function() {
        // Get selected value
        var selectedValue = parseInt(selectEntries.value);
        // Call a function to update the table with selected entries
        updateTableEntries(selectedValue);
    });
});

function updateTableEntries(entries) {
    // Get all table rows
    var tableRows = document.querySelectorAll(".u-table-entity tr");
    // Hide all table rows
    tableRows.forEach(function(row) {
        row.style.display = "none";
    });
    // Show only selected number of rows
    for (var i = 0; i < entries; i++) {
        tableRows[i].style.display = "";
    }
}
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// Function to open modal and populate it with data
function openModal(columnData) {
  modal.style.display = "block";
  var modalTableBody = document.getElementById("modalTableBody");
  modalTableBody.innerHTML = ""; // Clear previous content

  // Loop through the column data and add rows to the modal table
  for (var key in columnData) {
    var row = modalTableBody.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    cell1.innerHTML = key;
    cell2.innerHTML = columnData[key];
  }
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Add event listeners to table rows to trigger modal display
document.addEventListener("DOMContentLoaded", function() {
      var tableRows = document.querySelectorAll(".u-table-entity tbody tr");
      tableRows.forEach(function(row) {
        row.addEventListener("click", function(event) {
          var columnData = {};
          var cells = event.currentTarget.cells;
          for (var i = 0; i < cells.length; i++) {
            var columnName = document.querySelector(".u-table-header th:nth-child(" + (i + 1) + ")").textContent.trim();
            columnData[columnName] = cells[i].textContent.trim();
          }
          // Add the additional fields here
          columnData['EMAIL'] = event.currentTarget.dataset.email;
columnData['DESTINATION'] = event.currentTarget.dataset.destination;
columnData['FLIGHT NUMBER'] = event.currentTarget.dataset.flightNumber;
columnData['PAYMENT METHOD'] = event.currentTarget.dataset.paymentMethod;
columnData['PAYMENT REF. NO.'] = event.currentTarget.dataset.paymentRefNo;
columnData['BOOKING FEE'] = event.currentTarget.dataset.bookingFee;
columnData['NO. OF DAYS'] = event.currentTarget.dataset.numDays;
columnData['PLATE NO.'] = event.currentTarget.dataset.plateNumber;
columnData['Mobile.'] = event.currentTarget.dataset.mobileNumber;
columnData['Type of Car.'] = event.currentTarget.dataset.typeOfCar;

openModal(columnData);
            });
        });
    });

    function openModal(columnData) {
    modal.style.display = "block";
    var modalTableBody = document.getElementById("modalTableBody");
    modalTableBody.innerHTML = ""; // Clear previous content

    // Calculate the number of days between check-in and check-out
    var numberOfDays = getNumberOfDays(columnData['CHECK-IN'], columnData['CHECK-OUT']);
    columnData['NO. OF DAYS'] = numberOfDays;

    // Loop through the column data and add rows to the modal table
    for (var key in columnData) {
        // Exclude the "Action" column and the "Cancel Booking" button text
        if (key !== "ACTION" && key !== "Cancel Booking") {
            var row = modalTableBody.insertRow();
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            cell1.innerHTML = key;
            cell2.innerHTML = columnData[key];
            // Align the modal content to the right
            cell2.style.textAlign = "right";
            cell1.style.textAlign = "left";
        }
    }
}
    function deleteBooking(bookingId, event) {
    event.stopPropagation();
    if (confirm("Are you sure you want to cancel this booking?")) {
        $.ajax({
            url: '/delete-booking/' + bookingId,
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "_method": "DELETE"
            },
            success: function(response) {
                // Reload the page or update the UI as needed
                location.reload();
            },
            error: function(xhr, status, error) {
                // Handle error, such as displaying an error message
                alert('Error deleting booking: ' + error);
            }
        });
    }
}



function getNumberOfDays(checkIn, checkOut) {
    var oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds
    var startDate = new Date(checkIn);
    var endDate = new Date(checkOut);
    var diffDays = Math.round(Math.abs((startDate - endDate) / oneDay));
    return diffDays;
}
 
</script>


</body>
</html>
@endsection
