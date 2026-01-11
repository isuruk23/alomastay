
@extends('layouts.web')

@section('content')
<!-- Main Package Details Page -->
    <main class="aloma-package-details">
        
       <section class="page-hero" style="background-image: url('{{ asset('public/' . $tour->image) }}');">
        <div class="container">
            <h1>{{ $tour->name }}</h1>
            <p>{{ $tour->summery }}</p>
            
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
                            <!-- <div class="carousel-indicators aloma-carousel-indicators">
                                <button type="button" data-bs-target="#aloma-package-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          </div> -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    @if ($tour->image)
                                    <img src="{{ asset('public/' . $tour->image) }}"  class="d-block w-100" alt="Luxury suite with ocean view" loading="lazy" style="height: 500px; object-fit: cover;">
                                    @else
                                    <img src="{{ asset('public/images/logo-sm.png') }}"  class="d-block w-100" alt="Luxury suite with ocean view" loading="lazy" style="height: 500px; object-fit: cover;">
                                    @endif
                                </div>
                                
                            </div>
                            <!-- <button class="carousel-control-prev aloma-carousel-control" type="button" data-bs-target="#aloma-package-carousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next aloma-carousel-control" type="button" data-bs-target="#aloma-package-carousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button> -->
                        </div>
                    </section>
                    
                    <!-- 3️⃣ Package Overview Section -->
                    <section class="mb-5">
                        <h2 class="mb-4 fw-bold aloma-text-primary">Package Overview</h2>
                        {!! $tour->itinerary !!}
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
                             @foreach($details as $detail)
                            <div class="accordion-item mb-3 rounded-3 overflow-hidden shadow-sm">
                                <h3 class="accordion-header">
                                    <button class="accordion-button aloma-accordion-button rounded-0 fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#aloma-day{{ $detail->day }}" aria-expanded="true" aria-controls="aloma-day{{ $detail->day }}">
                                        Day {{ $detail->day }}: {{ $detail->title }}
                                    </button>
                                </h3>
                                <div id="aloma-day{{ $detail->day }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" data-bs-parent="#aloma-itinerary-accordion">
                                    <div class="accordion-body">
                                        {!! $detail->description !!}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
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
                                           {!! $tour->excludes !!}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4 mt-md-0">
                                <div class="card border-0 rounded-3 shadow-sm h-100">
                                    <div class="card-body">
                                        <h5 class="card-title aloma-text-primary fw-bold mb-3">Important Notes</h5>
                                        <ul class="list-unstyled mb-0">
                                           {!! $tour->important !!}
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
                                    <button type="button" class="btn aloma-btn-primary py-3 rounded-3 fw-bold fs-5">Book Now — ${{ number_format($tour->price, 0) }}</button>
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
                                    <p class="text-muted mb-0">{{ $tour->nights }} Nights / {{ $tour->days }} Days</p>
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
                                    <p class="aloma-price aloma-text-primary mb-0">${{ number_format($tour->price, 0) }}</p>
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
                                 @foreach ($mtours as $tour)
                                <div class="col-md-4">
                                    <div class="card border-0 rounded-4 shadow-sm h-100 aloma-shadow-hover">
                                        @if ($tour->image)
                                        <img src="{{ asset('public/' . $tour->image) }}"  class="card-img-top rounded-top-4" alt="Mountain Wellness Retreat"  style="height: 220px; object-fit: cover;" alt="{{ $tour->name }}" loading="lazy">
                                        @else
                                        <img src="{{ asset('public/images/logo-sm.png') }}"  class="card-img-top rounded-top-4" alt="Mountain Wellness Retreat"  style="height: 220px; object-fit: cover;" alt="{{ $tour->name }}">
                                        @endif
                                        <div class="card-body p-4">
                                            <h5 class="card-title fw-bold">{{ $tour->name }}</h5>
                                            <p class="card-text text-muted">{{ $tour->slogan }}</p>
                                            <div class="d-flex justify-content-between align-items-center mt-4">
                                                <span class="fw-bold fs-5 aloma-text-primary">${{ number_format($tour->price, 0) }}</span>
                                                <a href="/package-details/{{ $tour->id }}" class="btn aloma-btn-primary rounded-3">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 @endforeach
                                
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