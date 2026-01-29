
@extends('layouts.web')

@section('content')


    <!-- Hero Section -->
   <section class="hero p-0" id="home">
    <div id="heroCarousel" class="carousel slide carousel-fade w-100" data-bs-ride="carousel">

        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner w-100">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background:url('{{ asset('public/images/slider/1.jpg') }}') center/cover no-repeat; height:90vh;">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center text-center text-white">
                        <div class="col-lg-8">
                            <h1 class="display-3 fw-bold">Aloma Stay</h1>
                            <p class="lead">Where Comfort Meets Timeless Elegance</p>
                            <div class="mt-4">
                                <a href="/rooms" class="btn btn-primary btn-lg me-3">Book Your Stay</a>
                                <a href="/rooms" class="btn btn-outline-light btn-lg">Explore Rooms</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background:url('{{ asset('public/images/slider/2.jpg') }}') center/cover no-repeat; height:90vh;">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center text-center text-white">
                        <div class="col-lg-8">
                            <h1 class="display-4 fw-bold">Luxury Rooms</h1>
                            <p class="lead">Relax in beautifully designed spaces</p>
                            <a href="/rooms" class="btn btn-primary btn-lg">View Rooms</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background:url('{{ asset('public/images/slider/3.jpg') }}') center/cover no-repeat; height:90vh;">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center text-center text-white">
                        <div class="col-lg-8">
                            <h1 class="display-4 fw-bold">Perfect Getaway</h1>
                            <p class="lead">Experience calm, comfort and nature</p>
                            <a href="/contact" class="btn btn-primary btn-lg">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>
</section>


    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container py-5">
            <h2 class="section-title">About Aloma Stay</h2>
            <div class="row align-items-center mt-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('public/images/about.jpg') }}" 
                         alt="Aloma Stay Lobby" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">A Legacy of Hospitality Excellence</h3>
                    <p class="mb-4">Nestled in the heart of Sri Lanka's cultural triangle, Aloma Stay is more than just a hotel—it's an experience. Established in 2010, our boutique luxury hotel has been welcoming discerning travelers from around the world with our signature blend of traditional Sri Lankan hospitality and contemporary comfort.</p>
                    <p class="mb-4">Our philosophy is simple: every guest should feel at home while experiencing the finest amenities and services. From the moment you step into our elegantly designed lobby, you'll be enveloped in an atmosphere of warmth and sophistication.</p>
                    <p>Our team of dedicated professionals is committed to making your stay unforgettable, whether you're here for business, leisure, or a special celebration.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Rooms Section -->
    <section id="rooms" class="py-5">
        <div class="container py-5">
            <h2 class="section-title">Luxury Accommodations</h2>
            <p class="text-center mb-5">Choose from our exquisite selection of rooms and suites, each designed to provide the ultimate comfort and relaxation.</p>
            
            <div class="row g-4">
                @foreach($rooms as $room)
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm">
                       
                            @if ($room->image)
                            <img src="{{ asset('public/' . $room->image) }}"  class="card-img-top" alt="{{ $room->name }}">
                            @else
                            <img src="{{ asset('public/images/logo-sm.png') }}"  class="card-img-top" alt="{{ $room->name }}">
                            @endif
                        <div class="card-body">
                            <h5 class="card-title gold-text">{{ $room->name }}</h5>
                            <p class="card-text">{{ $room->intro }}</p>
                            <div class="mb-3">
                                <i class="bi bi-wifi gold-text me-2"></i>
                                <i class="bi bi-tv gold-text me-2"></i>
                                <i class="bi bi-cup gold-text me-2"></i>
                                <i class="bi bi-water gold-text"></i>
                            </div>
                            <a href="/room-details/{{ $room->id }}" class="btn btn-primary w-100">View Details</a>
                        </div>
                    </div>
                </div>
                 @endforeach
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section id="facilities" class="py-5 bg-light">
        <div class="container py-5">
            <h2 class="section-title">Facilities & Amenities</h2>
            <p class="text-center mb-5">We offer world-class facilities to ensure your stay is comfortable, convenient, and memorable.</p>
            
            <div class="row g-4">
                <div class="col-md-4 col-lg-2 text-center amenity-item">
                    <i class="bi bi-egg-fried amenity-icon"></i>
                    <h6>Restaurant</h6>
                </div>
                <div class="col-md-4 col-lg-2 text-center amenity-item">
                    <i class="bi bi-water amenity-icon"></i>
                    <h6>Swimming Pool</h6>
                </div>
                <div class="col-md-4 col-lg-2 text-center amenity-item">
                    <i class="bi bi-wifi amenity-icon"></i>
                    <h6>Free Wi-Fi</h6>
                </div>
                <div class="col-md-4 col-lg-2 text-center amenity-item">
                    <i class="bi bi-airplane amenity-icon"></i>
                    <h6>Airport Transfers</h6>
                </div>
                <div class="col-md-4 col-lg-2 text-center amenity-item">
                    <i class="bi bi-bell amenity-icon"></i>
                    <h6>Room Service</h6>
                </div>
                <div class="col-md-4 col-lg-2 text-center amenity-item">
                    <i class="bi bi-shield-check amenity-icon"></i>
                    <h6>Secure Parking</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- Dining Section -->
    <section id="dining" class="py-5">
        <div class="container py-5">
            <h2 class="section-title">Restaurant & Dining</h2>
            <div class="row align-items-center mt-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('public/images/dining-area.jpg') }}" 
                         alt="Aloma Stay Restaurant" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">Culinary Excellence at The Golden Leaf</h3>
                    <p class="mb-4">Our signature restaurant, The Golden Leaf, offers an exquisite dining experience blending traditional Sri Lankan flavors with international cuisine. Under the guidance of our award-winning chef, each dish is a masterpiece of taste and presentation.</p>
                    
                    <ul class="nav nav-pills mb-4" id="menuTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="breakfast-tab" data-bs-toggle="pill" data-bs-target="#breakfast" type="button">Breakfast</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="lunch-tab" data-bs-toggle="pill" data-bs-target="#lunch" type="button">Lunch</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="dinner-tab" data-bs-toggle="pill" data-bs-target="#dinner" type="button">Dinner</button>
                        </li>
                    </ul>
                    
                    <div class="tab-content" id="menuTabContent">
                        <div class="tab-pane fade show active" id="breakfast" role="tabpanel">
                            <p><strong>Signature Dishes:</strong> Traditional Sri Lankan breakfast platter, Western breakfast buffet, Fresh fruit platters, and Artisan pastries.</p>
                        </div>
                        <div class="tab-pane fade" id="lunch" role="tabpanel">
                            <p><strong>Signature Dishes:</strong> Seafood curry buffet, Grilled meats with local spices, Traditional rice and curry spread, and Fresh salads from our garden.</p>
                        </div>
                        <div class="tab-pane fade" id="dinner" role="tabpanel">
                            <p><strong>Signature Dishes:</strong> Lobster thermidor, Beef Wellington, Traditional lamprais, and Deconstructed wattalapam for dessert.</p>
                        </div>
                    </div>
                    
                    <a href="#" class="btn btn-primary mt-3">View Full Menu</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Attractions Slider Section -->
    <section id="attractions" class="py-5 bg-light">
        <div class="container py-5">
            <h2 class="section-title">Explore Nearby Attractions</h2>
            <p class="text-center mb-5">Discover the cultural and natural wonders surrounding Aloma Stay</p>
            
            <!-- Swiper Slider for Attractions -->
            <div class="swiper attractionsSwiper">
                <div class="swiper-wrapper">
                    @foreach ($thingstodos as $thingstodo)
                    <div class="swiper-slide">
                        <div class="attraction-card bg-white shadow-sm">
                          
                                @if ($thingstodo->image)
                                <img src="{{ asset('public/' . $thingstodo->image) }}"  class="attraction-img" alt="{{ $thingstodo->title }}">
                                @else
                                <img src="{{ asset('public/images/logo-sm.png') }}"  class="attraction-img" alt="{{ $thingstodo->title }}">
                                @endif
                            <div class="p-4">
                                <h5>{{ $thingstodo->title }}</h5>
                                <p class="text-muted"><i class="bi bi-geo-alt"></i> 15 km from hotel</p>
                                <p class="small">{{ $thingstodo->description }}</p>
                            </div>
                        </div>
                    </div>
                     @endforeach
                </div>
                
                <!-- Navigation buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary">View All Attractions</a>
            </div>
        </div>
    </section>

    <!-- Tour Packages Slider Section -->
    <section id="tours" class="py-5">
        <div class="container py-5">
            <h2 class="section-title">Curated Tour Packages</h2>
            <p class="text-center mb-5">Experience the best of Sri Lanka with our expertly crafted tour packages</p>
            
            <!-- Swiper Slider for Tours -->
            <div class="swiper toursSwiper">
                <div class="swiper-wrapper">
                    <!-- Tour -->
                     @foreach ($mtours as $tour)
                    <div class="swiper-slide">
                        <div class="tour-card bg-white shadow-sm position-relative">
                            <div class="tour-badge">$450</div>
                          
                                @if ($tour->image)
                                <img src="{{ asset('public/' . $tour->image) }}"  class="tour-img" alt="{{ $tour->name }}">
                                @else
                                <img src="{{ asset('public/images/logo-sm.png') }}"  class="tour-img" alt="{{ $tour->name }}">
                                @endif
                            <div class="p-4">
                                <h5>{{ $tour->name }}</h5>
                                <p class="text-muted"><i class="bi bi-clock"></i> {{ $tour->days }} Days / {{ $tour->nights }} Nights</p>
                                <div class="mb-3">
                                    <span class="badge bg-light text-dark me-1"><i class="bi bi-building"></i> Culture</span>
                                    <span class="badge bg-light text-dark me-1"><i class="bi bi-camera"></i> Photography</span>
                                    <span class="badge bg-light text-dark"><i class="bi bi-person-walking"></i> History</span>
                                </div>
                                <p class="small">{{ $tour->slogan }}</p>
                                <a href="/package-details/{{ $tour->id }}" class="btn btn-primary w-100">View Details</a>
                            </div>
                        </div>
                    </div>
                     @endforeach
                </div>
                
                <!-- Navigation buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <h2 class="section-title">Guest Experiences</h2>
            <p class="text-center mb-5">What our guests say about their stay at Aloma Stay</p>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial-card bg-white p-4 rounded shadow">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="https://randomuser.me/api/portraits/women/45.jpg" 
                                             class="rounded-circle me-3" alt="Guest" width="60" height="60">
                                        <div>
                                            <h5 class="mb-0">Sarah Johnson</h5>
                                            <p class="text-muted mb-0">London, UK</p>
                                            <div class="star-rating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-0">"Aloma Stay exceeded all our expectations. The attention to detail, exceptional service, and beautiful surroundings made our Sri Lankan holiday truly unforgettable. The cultural tour arranged by the hotel was the highlight of our trip."</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-card bg-white p-4 rounded shadow">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" 
                                             class="rounded-circle me-3" alt="Guest" width="60" height="60">
                                        <div>
                                            <h5 class="mb-0">Michael Chen</h5>
                                            <p class="text-muted mb-0">Singapore</p>
                                            <div class="star-rating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-0">"The perfect blend of luxury and cultural authenticity. The staff went above and beyond to ensure our comfort, and the tour packages offered exceptional value. The wildlife safari organized through the hotel was spectacular!"</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-5">
        <div class="container py-5">
            <h2 class="section-title">Gallery</h2>
            <p class="text-center mb-5">A visual journey through Aloma Stay's world of luxury</p>
            
            <div class="row">
                <div class="col-md-3 mb-4 gallery-box rooms">
                    <div class="gallery-item">
                        <img src="{{ asset('public/images/gallery/room/1.jpg') }}"
                            class="img-fluid rounded" alt="Aloma Stay's Room">
                    </div>
                </div>
                <div class="col-md-3 mb-4 gallery-box rooms">
                    <div class="gallery-item">
                        <img src="{{ asset('public/images/gallery/room/2.jpg') }}"
                            class="img-fluid rounded" alt="Hotel Pool">
                    </div>
                </div>
                <div class="col-md-3 mb-4 gallery-box rooms">
                    <div class="gallery-item">
                        <img src="{{ asset('public/images/gallery/room/3.jpg') }}"
                            class="img-fluid rounded" alt="Hotel Room">
                    </div>
                </div>

                <div class="col-md-3 mb-4 gallery-box rooms">
                    <div class="gallery-item">
                        <img src="{{ asset('public/images/gallery/room/4.jpg') }}"
                            class="img-fluid rounded" alt="Luxury Suite">
                    </div>
                </div>

                <div class="col-md-3 mb-4 gallery-box dining">
                    <div class="gallery-item">
                        <img src="{{ asset('public/images/gallery/dining/1.jpg') }}"
                            class="img-fluid rounded" alt="Restaurant">
                    </div>
                </div>
                <div class="col-md-3 mb-4 gallery-box dining">
                    <div class="gallery-item">
                        <img src="{{ asset('public/images/gallery/dining/2.jpg') }}"
                            class="img-fluid rounded" alt="Restaurant">
                    </div>
                </div>

                <div class="col-md-3 mb-4 gallery-box attractions">
                    <div class="gallery-item">
                        <img src="{{ asset('public/images/gallery/attractions/1.jpg') }}"
                            class="img-fluid rounded" alt="attractions">
                    </div>
                </div>
                <div class="col-md-3 mb-4 gallery-box attractions">
                    <div class="gallery-item">
                        <img src="{{ asset('public/images/gallery/attractions/2.jpg') }}"
                            class="img-fluid rounded" alt="attractions">
                    </div>
                </div>

                <div class="col-md-3 mb-4 gallery-box resort">
                    <div class="gallery-item">
                        <img src="{{ asset('public/images/gallery/resort/1.jpg') }}"
                            class="img-fluid rounded" alt="Resort">
                    </div>
                </div>
                 <div class="col-md-3 mb-4 gallery-box resort">
                    <div class="gallery-item">
                        <img src="{{ asset('public/images/gallery/resort/2.jpg') }}"
                            class="img-fluid rounded" alt="Resort">
                    </div>
                </div>
                 <div class="col-md-3 mb-4 gallery-box resort">
                    <div class="gallery-item">
                        <img src="{{ asset('public/images/gallery/resort/3.jpg') }}"
                            class="img-fluid rounded" alt="Resort">
                    </div>
                </div>
                 <div class="col-md-3 mb-4 gallery-box resort">
                    <div class="gallery-item">
                        <img src="{{ asset('public/images/gallery/resort/4.jpg') }}"
                            class="img-fluid rounded" alt="Resort">
                    </div>
                </div>

                

            </div>
            
            <!-- Gallery categories -->
            <div class="text-center mt-3">
                <button class="btn btn-outline-primary me-2 filter-btn active" data-filter="all">All</button>
                <button class="btn btn-outline-primary me-2 filter-btn" data-filter="resort">Resort</button>
                <button class="btn btn-outline-primary me-2 filter-btn" data-filter="rooms">Rooms</button>
                <button class="btn btn-outline-primary me-2 filter-btn" data-filter="dining">Dining</button>
                <button class="btn btn-outline-primary me-2 filter-btn" data-filter="tours">Tours</button>
                <button class="btn btn-outline-primary filter-btn" data-filter="attractions">Attractions</button>
            </div>
        </div>
    </section>

    <!-- Special Offers -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <h2 class="section-title">Special Offers & Packages</h2>
            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-warning">
                        <div class="card-body text-center p-4">
                            <span class="badge bg-warning text-dark mb-3">30% OFF</span>
                            <h4 class="card-title">Early Bird Special</h4>
                            <p class="card-text">Book 60 days in advance and enjoy 30% off our regular rates. Valid for stays of 3 nights or more.</p>
                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-warning">
                        <div class="card-body text-center p-4">
                            <span class="badge bg-warning text-dark mb-3">COMPLIMENTARY</span>
                            <h4 class="card-title">Honeymoon Package</h4>
                            <p class="card-text">Celebrate your love with champagne on arrival, couple's spa treatment, and romantic dinner.</p>
                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-warning">
                        <div class="card-body text-center p-4">
                            <span class="badge bg-warning text-dark mb-3">FREE TOUR</span>
                            <h4 class="card-title">Cultural Experience Package</h4>
                            <p class="card-text">Stay 5 nights and get a complimentary guided tour to Sigiriya Rock Fortress.</p>
                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact & Booking -->
    <section id="contact" class="py-5">
        <div class="container py-5">
            <h2 class="section-title">Contact & Booking</h2>
            <div class="row mt-5">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <h4 class="mb-4">Booking Inquiry</h4>
                    <form id="bookingForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="guests" class="form-label">Number of Guests</label>
                                <select class="form-select" id="guests">
                                    <option value="1">1 Guest</option>
                                    <option value="2" selected>2 Guests</option>
                                    <option value="3">3 Guests</option>
                                    <option value="4">4 Guests</option>
                                    <option value="5+">5+ Guests</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="checkin" class="form-label">Check-in Date</label>
                                <input type="date" class="form-control" id="checkin" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="checkout" class="form-label">Check-out Date</label>
                                <input type="date" class="form-control" id="checkout" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Special Requests</label>
                            <textarea class="form-control" id="message" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Inquiry</button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <h4 class="mb-4">Contact Information</h4>
                    <div class="mb-4">
                        <h6><i class="bi bi-geo-alt gold-text me-2"></i> Address</h6>
                        <p>243/41/B Sangabogama, Kandy (20400),<br>Sri Lanka</p>
                    </div>
                    <div class="mb-4">
                        <h6><i class="bi bi-telephone gold-text me-2"></i> Phone</h6>
                        <p>+94 77 847 8588</p>
                    </div>
                    <div class="mb-4">
                        <h6><i class="bi bi-envelope gold-text me-2"></i> Email</h6>
                        <p>reservations@alomastay.com</p>
                    </div>
                    <div class="mb-4">
                        <h6 class="mb-3">Connect With Us</h6>
                        <div class="social-icons">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                    
                    <!-- Map placeholder -->
                    <div class="mt-4">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.923090631344!2d80.70353367501214!3d8.012469491975036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb0e08c4c5c4cb%3A0x4a2c3b0a3b3b3b3b!2sSigiriya%20Rock%20Fortress!5e0!3m2!1sen!2slk!4v1683795733134!5m2!1sen!2slk" 
                                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection
@section('script')
<script>
$(document).ready(function () {

    $('.filter-btn').click(function () {

        let filter = $(this).data('filter');

        // active button style
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');

        if (filter === 'all') {
            $('.gallery-box').fadeIn(300);
        } else {
            $('.gallery-box').hide();
            $('.' + filter).fadeIn(300);
        }

    });

});
</script>

<script>
        // Initialize Swiper sliders
        document.addEventListener('DOMContentLoaded', function() {
            // Attractions Swiper
            const attractionsSwiper = new Swiper('.attractionsSwiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    992: {
                        slidesPerView: 3,
                    },
                    1200: {
                        slidesPerView: 4,
                    },
                },
            });
            
            // Tours Swiper
            const toursSwiper = new Swiper('.toursSwiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    992: {
                        slidesPerView: 3,
                    },
                    1200: {
                        slidesPerView: 4,
                    },
                },
            });
            
            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                        
                        // Close mobile navbar after click
                        const navbarToggler = document.querySelector('.navbar-toggler');
                        const navbarCollapse = document.querySelector('.navbar-collapse');
                        if (navbarCollapse.classList.contains('show')) {
                            navbarToggler.click();
                        }
                    }
                });
            });
            
            // Set current year in footer
            document.getElementById('currentYear').textContent = new Date().getFullYear();
            
            // Form submission
            document.getElementById('bookingForm').addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for your inquiry! We will contact you shortly.');
                this.reset();
            });
            
            // Set min date for check-in to today
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('checkin').min = today;
            
            // Update checkout min date when checkin changes
            document.getElementById('checkin').addEventListener('change', function() {
                document.getElementById('checkout').min = this.value;
            });
        });
    </script>
    @endsection