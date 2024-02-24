<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('backend/assets/images/pnf-logo.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <p class="logo-text">ParkNFly Admin</p>
        </div>
       


     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('managebookings.index') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i></div>
                <div class="menu-title">Home</div>
            </a>
        </li>
        <li>
            <a href="{{ route('home.calendar') }}">
                <div class="parent-icon"><i class='bx bx-calendar'></i></div>
                <div class="menu-title">Slot and Fees</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.profile') }}">
                <div class="parent-icon"><i class='bx bx-user'></i></div>
                <div class="menu-title">Profile</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.profile') }}">
                <div class="parent-icon"><i class='bx bx-group'></i></div>
                <div class="menu-title">Users</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
