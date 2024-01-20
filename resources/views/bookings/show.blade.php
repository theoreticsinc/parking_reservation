<div class="blog-area pt-100 pb-70">
<div class="container">

<!-- resources/views/bookings/show.blade.php -->
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>

            <!-- Add more columns as needed -->
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <!-- Add more columns as needed -->
            </tr>
        @endforeach
    </tbody>
</table>

                <div class="row pt-45">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <a href="blog-details.html">
                                <img src="{{ asset('frontend/assets/img/blog/blog-item-img1.jpg') }}" alt="Images">
                            </a>
                            <div class="content">
                                <ul>
                                    <li>October 01, 2020</li>
                                    <li><i class='bx bx-user'></i>29K</li>
                                    <li><i class='bx bx-message-alt-dots'></i>15K</li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">Hotel Management is the Best Policy</a>
                                </h3>
                                <p>This is one of the best & quality full hotels in the world that will help you to make an excellent study market.</p>
                                <a href="blog-details.html" class="read-btn">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <a href="blog-details.html">
                                <img src="{{ asset('frontend/assets/img/blog/blog-item-img2.jpg') }}" alt="Images">
                            </a>
                            <div class="content">
                                <ul>
                                    <li>October 07, 2020</li>
                                    <li><i class='bx bx-user'></i>22K</li>
                                    <li><i class='bx bx-message-alt-dots'></i>24K</li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">3d Hotel Models Have an Important Model</a>
                                </h3>
                                <p>This is one of the best & quality full hotels in the world that will help you to make an excellent study market.</p>
                                <a href="blog-details.html" class="read-btn">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="blog-item">
                            <a href="blog-details.html">
                                <img src="{{ asset('frontend/assets/img/blog/blog-item-img3.jpg') }}" alt="Images">
                            </a>
                            <div class="content">
                                <ul>
                                    <li>October 17, 2020</li>
                                    <li><i class='bx bx-user'></i>27K</li>
                                    <li><i class='bx bx-message-alt-dots'></i>39K</li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">Hotel Management Has a Good Future Era</a>
                                </h3>
                                <p>This is one of the best & quality full hotels in the world that will help you to make an excellent study market.</p>
                                <a href="blog-details.html" class="read-btn">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>