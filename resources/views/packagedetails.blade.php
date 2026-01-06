
@extends('layouts.web')

@section('content')
<!-- Main Package Details Page -->
    <main class="aloma-package-details">
        
       <section class="page-hero">
        <div class="container">
            <h1>Packages & Experiences</h1>
            <p>Curated stays and unforgettable journeys</p>
            
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Packages</li>
                </ol>
            </nav>
        </div>
    </section>
        
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    
                    <!-- 2️⃣ Package Image Gallery (Slider) -->
                    <section class="mb-5">
                        <div id="aloma-package-carousel" class="carousel slide carousel-fade rounded-4 overflow-hidden shadow" data-bs-ride="carousel">
                            <div class="carousel-indicators aloma-carousel-indicators">
                                <button type="button" data-bs-target="#aloma-package-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#aloma-package-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#aloma-package-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#aloma-package-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="Luxury suite with ocean view" loading="lazy" style="height: 500px; object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2080&q=80" class="d-block w-100" alt="Private beach access" loading="lazy" style="height: 500px; object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="Gourmet dining experience" loading="lazy" style="height: 500px; object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://images.unsplash.com/photo-1584132967334-10e028bd69f7?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="Spa and wellness center" loading="lazy" style="height: 500px; object-fit: cover;">
                                </div>
                            </div>
                            <button class="carousel-control-prev aloma-carousel-control" type="button" data-bs-target="#aloma-package-carousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next aloma-carousel-control" type="button" data-bs-target="#aloma-package-carousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </section>
                    
                    <!-- 3️⃣ Package Overview Section -->
                    <section class="mb-5">
                        <h2 class="mb-4 fw-bold aloma-text-primary">Package Overview</h2>
                        <p class="lead">Our Premium Coastal Retreat is designed for those seeking an unparalleled luxury experience. Nestled along the pristine coastline, Aloma Stay offers a sanctuary where modern elegance meets natural beauty.</p>
                        
                        <p>This exclusive package includes three nights in our signature ocean-view suite, daily gourmet breakfast, and access to our private beach club. You'll enjoy personalized concierge service, a couples' spa treatment, and a sunset yacht cruise along the coast.</p>
                        
                        <p>Each element of your stay is carefully curated to provide relaxation, adventure, and culinary delight. From the moment you arrive, our dedicated staff will ensure every detail exceeds your expectations.</p>
                    </section>
                    
                    <!-- 4️⃣ What's Included -->
                    <section class="mb-5">
                        <h2 class="mb-4 fw-bold aloma-text-primary">What's Included</h2>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="d-flex align-items-start p-3 rounded-3 aloma-shadow-hover">
                                    <i class="bi bi-check-circle-fill fs-4 aloma-icon me-3"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1">Luxury Accommodation</h5>
                                        <p class="mb-0 text-muted">3 nights in our premium ocean-view suite with balcony</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start p-3 rounded-3 aloma-shadow-hover">
                                    <i class="bi bi-check-circle-fill fs-4 aloma-icon me-3"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1">Gourmet Dining</h5>
                                        <p class="mb-0 text-muted">Daily breakfast, one gourmet dinner for two, and all-day snacks</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start p-3 rounded-3 aloma-shadow-hover">
                                    <i class="bi bi-check-circle-fill fs-4 aloma-icon me-3"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1">Spa & Wellness</h5>
                                        <p class="mb-0 text-muted">60-minute couples massage and full access to wellness facilities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start p-3 rounded-3 aloma-shadow-hover">
                                    <i class="bi bi-check-circle-fill fs-4 aloma-icon me-3"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1">Exclusive Experiences</h5>
                                        <p class="mb-0 text-muted">Sunset yacht cruise, private beach access, and guided coastal hike</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start p-3 rounded-3 aloma-shadow-hover">
                                    <i class="bi bi-check-circle-fill fs-4 aloma-icon me-3"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1">Personalized Service</h5>
                                        <p class="mb-0 text-muted">Dedicated concierge, airport transfers, and late checkout</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start p-3 rounded-3 aloma-shadow-hover">
                                    <i class="bi bi-check-circle-fill fs-4 aloma-icon me-3"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1">Amenities & Extras</h5>
                                        <p class="mb-0 text-muted">Welcome champagne, daily housekeeping, and premium WiFi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <!-- 5️⃣ Day-by-Day Itinerary -->
                    <section class="mb-5">
                        <h2 class="mb-4 fw-bold aloma-text-primary">Day-by-Day Itinerary</h2>
                        <div class="accordion" id="aloma-itinerary-accordion">
                            <div class="accordion-item mb-3 rounded-3 overflow-hidden shadow-sm">
                                <h3 class="accordion-header">
                                    <button class="accordion-button aloma-accordion-button rounded-0 fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#aloma-day1" aria-expanded="true" aria-controls="aloma-day1">
                                        Day 1: Arrival & Welcome
                                    </button>
                                </h3>
                                <div id="aloma-day1" class="accordion-collapse collapse show" data-bs-parent="#aloma-itinerary-accordion">
                                    <div class="accordion-body">
                                        <p class="fw-bold aloma-text-primary mb-2">Arrival and Settling In</p>
                                        <p>Upon arrival at Aloma Stay, you'll be greeted with a welcome drink and cold towel. Our concierge will assist with check-in and escort you to your ocean-view suite. The afternoon is yours to relax and settle in.</p>
                                        <p class="fw-bold aloma-text-primary mb-2 mt-3">Evening Experience</p>
                                        <p>Enjoy a sunset welcome reception on the terrace followed by a gourmet dinner at our signature restaurant, "The Coastal Table," featuring locally sourced seafood and panoramic ocean views.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3 rounded-3 overflow-hidden shadow-sm">
                                <h3 class="accordion-header">
                                    <button class="accordion-button aloma-accordion-button collapsed rounded-0 fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#aloma-day2" aria-expanded="false" aria-controls="aloma-day2">
                                        Day 2: Coastal Exploration
                                    </button>
                                </h3>
                                <div id="aloma-day2" class="accordion-collapse collapse" data-bs-parent="#aloma-itinerary-accordion">
                                    <div class="accordion-body">
                                        <p class="fw-bold aloma-text-primary mb-2">Morning Adventure</p>
                                        <p>After breakfast, embark on a guided coastal hike along the pristine shoreline. Discover hidden coves and learn about the local ecosystem from our expert guide.</p>
                                        <p class="fw-bold aloma-text-primary mb-2 mt-3">Afternoon Relaxation</p>
                                        <p>Return to the resort for a leisurely lunch, followed by your couples' massage at our award-winning spa. The remainder of the afternoon is free to enjoy the private beach or pool facilities.</p>
                                        <p class="fw-bold aloma-text-primary mb-2 mt-3">Evening on the Water</p>
                                        <p>Experience a magical sunset yacht cruise along the coastline, complete with champagne and hors d'oeuvres.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item rounded-3 overflow-hidden shadow-sm">
                                <h3 class="accordion-header">
                                    <button class="accordion-button aloma-accordion-button collapsed rounded-0 fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#aloma-day3" aria-expanded="false" aria-controls="aloma-day3">
                                        Day 3: Leisure & Departure
                                    </button>
                                </h3>
                                <div id="aloma-day3" class="accordion-collapse collapse" data-bs-parent="#aloma-itinerary-accordion">
                                    <div class="accordion-body">
                                        <p class="fw-bold aloma-text-primary mb-2">Flexible Morning</p>
                                        <p>Enjoy a leisurely breakfast with ocean views. The morning is yours to relax, take a final swim, or participate in a complimentary yoga session on the beach.</p>
                                        <p class="fw-bold aloma-text-primary mb-2 mt-3">Late Checkout & Farewell</p>
                                        <p>Take advantage of our late checkout (4 PM) to enjoy the facilities. Our concierge will arrange your departure transfer to the airport, ensuring you leave with unforgettable memories of your coastal retreat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <!-- 6️⃣ Exclusions & Important Notes -->
                    <section class="mb-5">
                        <h2 class="mb-4 fw-bold aloma-text-primary">Exclusions & Important Notes</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card border-0 rounded-3 shadow-sm h-100">
                                    <div class="card-body">
                                        <h5 class="card-title aloma-text-primary fw-bold mb-3">Exclusions</h5>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><i class="bi bi-x-circle me-2 text-danger"></i>Airfare and airport taxes</li>
                                            <li class="mb-2"><i class="bi bi-x-circle me-2 text-danger"></i>Personal expenses and souvenirs</li>
                                            <li class="mb-2"><i class="bi bi-x-circle me-2 text-danger"></i>Additional spa treatments beyond included package</li>
                                            <li class="mb-2"><i class="bi bi-x-circle me-2 text-danger"></i>Alcoholic beverages (except where specified)</li>
                                            <li class="mb-2"><i class="bi bi-x-circle me-2 text-danger"></i>Travel insurance (highly recommended)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4 mt-md-0">
                                <div class="card border-0 rounded-3 shadow-sm h-100">
                                    <div class="card-body">
                                        <h5 class="card-title aloma-text-primary fw-bold mb-3">Important Notes</h5>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><i class="bi bi-info-circle me-2 aloma-icon"></i>Package is based on double occupancy</li>
                                            <li class="mb-2"><i class="bi bi-info-circle me-2 aloma-icon"></i>Minimum 14-day advance booking required</li>
                                            <li class="mb-2"><i class="bi bi-info-circle me-2 aloma-icon"></i>Valid for stays from June to October 2023</li>
                                            <li class="mb-2"><i class="bi bi-info-circle me-2 aloma-icon"></i>Cancellation policy: 30 days for full refund</li>
                                            <li class="mb-2"><i class="bi bi-info-circle me-2 aloma-icon"></i>Some activities weather-dependent</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                </div>
                
                <!-- Right Column with Sticky Booking Card -->
                <div class="col-lg-4">
                    <!-- 7️⃣ Booking & Inquiry Card -->
                    <section class="mb-5">
                        <div class="card border-0 rounded-4 shadow-lg aloma-sticky-card position-sticky">
                            <div class="card-header bg-white py-4 rounded-top-4 border-0">
                                <h3 class="card-title mb-0 text-center fw-bold aloma-text-primary">Book This Package</h3>
                            </div>
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <label for="aloma-dates" class="form-label fw-semibold">Select Dates</label>
                                    <input type="text" class="form-control py-3 rounded-3" id="aloma-dates" placeholder="Check-in — Check-out">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="aloma-guests" class="form-label fw-semibold">Number of Guests</label>
                                    <select class="form-select py-3 rounded-3" id="aloma-guests">
                                        <option selected>2 Guests</option>
                                        <option value="1">1 Guest</option>
                                        <option value="2">2 Guests</option>
                                        <option value="3">3 Guests</option>
                                        <option value="4">4 Guests</option>
                                    </select>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="aloma-room" class="form-label fw-semibold">Room Type</label>
                                    <select class="form-select py-3 rounded-3" id="aloma-room">
                                        <option selected>Ocean View Suite</option>
                                        <option value="1">Premium Ocean View</option>
                                        <option value="2">Oceanfront Villa</option>
                                        <option value="3">Presidential Suite</option>
                                    </select>
                                </div>
                                
                                <div class="d-grid mb-3">
                                    <button type="button" class="btn aloma-btn-primary py-3 rounded-3 fw-bold fs-5">Book Now — $2,499</button>
                                </div>
                                
                                <div class="d-grid">
                                    <button type="button" class="btn aloma-btn-outline-primary py-3 rounded-3 fw-bold">Inquire About Package</button>
                                </div>
                                
                                <div class="mt-4 text-center">
                                    <p class="text-muted small mb-2">Need assistance? Call our concierge</p>
                                    <p class="fw-bold fs-5 aloma-text-primary mb-0">+1 (800) 555-ALOMA</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Package Highlights Card -->
                    <div class="card border-0 rounded-4 shadow-sm mb-5 aloma-shadow-hover">
                        <div class="card-body p-4">
                            <h4 class="card-title aloma-text-primary fw-bold mb-3">Package Highlights</h4>
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center aloma-bg-primary me-3" style="width: 40px; height: 40px;">
                                    <i class="bi bi-clock text-white"></i>
                                </div>
                                <div>
                                    <p class="fw-bold mb-0">Duration</p>
                                    <p class="text-muted mb-0">3 Nights / 4 Days</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center aloma-bg-primary me-3" style="width: 40px; height: 40px;">
                                    <i class="bi bi-people text-white"></i>
                                </div>
                                <div>
                                    <p class="fw-bold mb-0">Ideal For</p>
                                    <p class="text-muted mb-0">Couples, Honeymooners</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center aloma-bg-primary me-3" style="width: 40px; height: 40px;">
                                    <i class="bi bi-house-door text-white"></i>
                                </div>
                                <div>
                                    <p class="fw-bold mb-0">Accommodation</p>
                                    <p class="text-muted mb-0">Ocean View Suite</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center aloma-bg-primary me-3" style="width: 40px; height: 40px;">
                                    <i class="bi bi-egg-fried text-white"></i>
                                </div>
                                <div>
                                    <p class="fw-bold mb-0">Meal Plan</p>
                                    <p class="text-muted mb-0">Breakfast & Select Dinners</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle d-flex align-items-center justify-content-center aloma-bg-primary me-3" style="width: 40px; height: 40px;">
                                    <i class="bi bi-tags text-white"></i>
                                </div>
                                <div>
                                    <p class="fw-bold mb-0">Package Price</p>
                                    <p class="aloma-price aloma-text-primary mb-0">$2,499</p>
                                    <p class="text-muted small mb-0">Per couple, all inclusive</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 8️⃣ Similar Packages Slider -->
            <section class="my-5 py-5">
                <h2 class="text-center mb-5 fw-bold aloma-text-primary">You Might Also Like</h2>
                
                <div id="aloma-similar-packages" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="card border-0 rounded-4 shadow-sm h-100 aloma-shadow-hover">
                                        <img src="https://images.unsplash.com/photo-1584132915807-fd1f5fbc078f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" class="card-img-top rounded-top-4" alt="Mountain Wellness Retreat" loading="lazy" style="height: 220px; object-fit: cover;">
                                        <div class="card-body p-4">
                                            <h5 class="card-title fw-bold">Mountain Wellness Retreat</h5>
                                            <p class="card-text text-muted">Reconnect with nature in our serene mountain sanctuary with daily yoga and holistic treatments.</p>
                                            <div class="d-flex justify-content-between align-items-center mt-4">
                                                <span class="fw-bold fs-5 aloma-text-primary">$1,899</span>
                                                <a href="#" class="btn aloma-btn-primary rounded-3">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-0 rounded-4 shadow-sm h-100 aloma-shadow-hover">
                                        <img src="https://images.unsplash.com/photo-1564501049418-3c27787d01e8?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" class="card-img-top rounded-top-4" alt="Urban Luxury Escape" loading="lazy" style="height: 220px; object-fit: cover;">
                                        <div class="card-body p-4">
                                            <h5 class="card-title fw-bold">Urban Luxury Escape</h5>
                                            <p class="card-text text-muted">Experience city sophistication with premium dining, theater tickets, and private city tours.</p>
                                            <div class="d-flex justify-content-between align-items-center mt-4">
                                                <span class="fw-bold fs-5 aloma-text-primary">$2,199</span>
                                                <a href="#" class="btn aloma-btn-primary rounded-3">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-0 rounded-4 shadow-sm h-100 aloma-shadow-hover">
                                        <img src="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?ixlib=rb-4.0.3&auto=format&fit=crop&w=2069&q=80" class="card-img-top rounded-top-4" alt="Family Adventure Package" loading="lazy" style="height: 220px; object-fit: cover;">
                                        <div class="card-body p-4">
                                            <h5 class="card-title fw-bold">Family Adventure Package</h5>
                                            <p class="card-text text-muted">Fun for all ages with kid-friendly activities, family suites, and daily adventure excursions.</p>
                                            <div class="d-flex justify-content-between align-items-center mt-4">
                                                <span class="fw-bold fs-5 aloma-text-primary">$3,299</span>
                                                <a href="#" class="btn aloma-btn-primary rounded-3">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev aloma-carousel-control" type="button" data-bs-target="#aloma-similar-packages" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next aloma-carousel-control" type="button" data-bs-target="#aloma-similar-packages" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            
            <!-- 9️⃣ Final Call-to-Action -->
            <section class="py-5 my-5 bg-light rounded-4">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="fw-bold mb-3">Ready for Your Luxury Getaway?</h2>
                            <p class="lead mb-4">Contact our travel specialists to customize your Aloma Stay experience or learn about seasonal promotions.</p>
                            <div class="d-flex flex-wrap gap-3">
                                <button type="button" class="btn aloma-btn-primary py-3 px-5 rounded-3 fw-bold">Book Your Stay Now</button>
                                <button type="button" class="btn aloma-btn-outline-primary py-3 px-5 rounded-3 fw-bold">Speak with a Concierge</button>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-4 mt-lg-0 text-center">
                            <div class="rounded-circle aloma-bg-primary d-inline-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                                <i class="bi bi-telephone text-white fs-1"></i>
                            </div>
                            <p class="fw-bold mt-3 mb-1">Prefer to Call?</p>
                            <p class="fs-4 aloma-text-primary fw-bold mb-0">1-800-555-ALOMA</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

@endsection
@section('script')
<script>
        // Simple script for interactive elements (no external libraries)
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effect to cards
            const cards = document.querySelectorAll('.aloma-shadow-hover');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.classList.add('shadow');
                });
                card.addEventListener('mouseleave', function() {
                    this.classList.remove('shadow');
                });
            });
            
            // Mobile sticky CTA (simplified for demo)
            window.addEventListener('scroll', function() {
                if (window.innerWidth < 768) {
                    const bookingCard = document.querySelector('.aloma-sticky-card');
                    if (bookingCard) {
                        if (window.scrollY > 500) {
                            bookingCard.classList.add('shadow-lg', 'border', 'aloma-border-primary');
                        } else {
                            bookingCard.classList.remove('shadow-lg', 'border', 'aloma-border-primary');
                        }
                    }
                }
            });
        });
    </script>
@endsection