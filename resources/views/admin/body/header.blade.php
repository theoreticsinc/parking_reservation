<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<!-- Custom CSS -->
<style>
    /* Position the dropdown menu in the top right corner with a slight offset */
    .dropdown-menu {
        right: 0;
        left: auto;
        top: calc(100% + 5px); /* Add a slight offset */
        margin-top: 0;
        z-index: 1000;
        max-height: calc(100vh - 80px);
        overflow-y: auto;
    }
</style>

<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand gap-3">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center gap-1">
                    <li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
                        <a class="nav-link" href="javascript:;"><i class='bx bx-search'></i></a>
                    </li>
                    <div class="app-container p-2 my-2">
                        <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
                            <div class="col">
                                <div class="app-box text-center"></div>
                            </div>
                            <a href="javascript:;">
                                <div class="text-center msg-footer">
                                    <div class="d-flex align-items-center justify-content-between mb-3"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @php
                        $id = Auth::user()->id;
                        $profileData = App\Models\User::find($id);
                    @endphp
                    <div class="user-box dropdown px-3">
                        <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/' . $profileData->photo) : url('upload/no_image.jpg') }}" class="user-img" alt="user avatar">
                            <div class="user-info">
                                <p class="user-name mb-0">{{ $profileData->name }}</p>
                                <p class="designattion mb-0">{{ $profileData->email }}</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item d-flex align-items-center" href="{{ route ('admin.profile')}}"><i class="bx bx-user fs-5"></i><span>Profile</span></a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="{{ route ('admin.change.password')}}"><i class="bx bx-cog fs-5"></i><span>Change Password</span></a></li>
                            <li><div class="dropdown-divider mb-0"></div></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="{{ route ('admin.logout')}}"><i class="bx bx-log-out-circle"></i><span>Logout</span></a></li>
                        </ul>
                    </div>
                </ul>
            </div>
        </nav>
    </div>
</header>
