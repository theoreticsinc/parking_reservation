<!-- resources/views/bookings_management.blade.php -->
@extends('admin.admin_dashboard')
@section('admin')
<!DOCTYPE html>

<html style="font-size: 16px;" lang="en" class="u-responsive-xl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="keywords" content="Our Projects, ​Our Latest Projects, Our Projects, ​Let’s Start a Project!">
    <meta name="description" content="">
    <title>Bookings Management</title>
    <link rel="stylesheet" href="/backend/management_page/nicepage.css" media="screen">
<link rel="stylesheet" href="/backend/management_page/Management.css" media="screen">
    <script class="u-script" type="text/javascript" src="/backend/management_page/jquery.js.download" defer=""></script>
    <script class="u-script" type="text/javascript" src="/backend/management_page/nicepage.js.download" defer=""></script>
    <meta name="generator" content="Nicepage 6.2.1, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="/backend/management_page/css">
    <link id="u-page-google-font" rel="stylesheet" href="/backend/management_page/css(1)">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#ff4300">
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="Management.html" data-home-page-title="Page 1" data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="en">
    <section class="u-align-center u-clearfix u-image u-shading u-section-1" id="carousel_2266" data-image-width="1600" data-image-height="1067">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1" style="background: url(https://img.freepik.com/free-photo/empty-garage-with-parking-lots-with-concrete-ceiling-flooring-pillars-marked-with-numbers_342744-1241.jpg?w=740&t=st=1707551689~exp=1707552289~hmac=18303fe3c3e0af4fc4e814817f17bb66d43ebb6412227d8245ff321dd17eb881) center center no-repeat;background-size: cover;">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          
        <h1>Park N' Fly Bookings</h1>
        <table class="u-table-entity">
            <colgroup>
              <col width="25%">
              <col width="25%">
              <col width="25%">
              <col width="25%">
              <col width="25%">
            </colgroup>
        <thead class="u-palette-5-dark-3 u-table-header u-table-header-1">
                <tr style="height: 50px;">
            <tr>
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
                <tr style="height: 66px;">  
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">{{ $item->lastName }}, {{ $item->firstName }}</td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">{{ $item->firstName }}</td>              
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">{{ $item->check_in }}</td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">{{ $item->check_out }}</td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">{{ $item->downpayment }}</td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">{{ $item->total_price }}</td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">{{ $item->payment_status }}</td>
                    
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">
                    <a href="#" class="u-border-2 u-border-black u-btn u-button-style u-grey-5 u-hover-black u-text-black u-text-hover-white u-btn-2">Button</a>
                    <a href="#" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">Cancel</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $data->links() }} <!-- Display pagination links -->
        
        </div>
        
      </div>
    </section>
    
    <footer class="u-clearfix u-footer u-grey-80" id="sec-28fe" style="font-size: xx-small">
        <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <a href="https://www.freepik.com/free-photo/empty-garage-with-parking-lots-with-concrete-ceiling-flooring-pillars-marked-with-numbers_11450802.htm#query=parking&position=5&from_view=search&track=sph&uuid=d53a0e74-c40e-4ca1-8a02-d0ac163ebdb0?log-in=google">Image by aleksandarlittlewolf</a> on Freepik
        </div>
        </div>
      </div></footer>
    
  
<style>.u-disable-duration * {transition-duration: 0s !important;}</style></body></html>

@endsection 