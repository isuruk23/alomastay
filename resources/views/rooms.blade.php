
@extends('layouts.web')

@section('content')
<!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <h1 class="fade-in">Our Rooms & Suites</h1>
            <p class="fade-in">Thoughtfully Designed for Your Comfort</p>
            
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb fade-in">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rooms</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Room Categories Intro -->
    <section id="room-intro">
        <div class="container">
            <h2 class="section-title fade-in">Luxury Accommodations</h2>
            <p class="intro-text fade-in">
                At Aloma Stay, each room and suite is a sanctuary of comfort and elegance. 
                Designed with meticulous attention to detail, our accommodations blend 
                contemporary luxury with traditional Sri Lankan warmth. From spacious 
                deluxe rooms to expansive suites, experience unparalleled comfort 
                complemented by modern amenities and personalized service.
            </p>
        </div>
    </section>

    <!-- Room Types Listing -->
    <section class="bg-soft-beige">
        <div class="container">
            <div class="row">
                @foreach($rooms as $room)
                <!-- Deluxe Room -->
                <div class="col-lg-4 col-md-6 fade-in">
                    <div class="room-card">
                        <div class="room-img-container" style="overflow: hidden;">
                            @if ($room->image)
                            <img src="{{ asset('public/' . $room->image) }}"  class="room-img" alt="Deluxe Room" loading="lazy">
                            @else
                            <img src="{{ asset('public/images/logo-sm.png') }}"  class="room-img" alt="Deluxe Room" loading="lazy">
                            @endif
                        </div>
                        <div class="room-content">
                            <h4>{{ $room->name }}</h4>
                            <p class="room-price">${{ number_format($room->price, 0) }} <span>/ night</span></p>
                            <p class="text-muted">{{ $room->intro }}</p>
                            
                            <div class="amenities-list">
                                <div class="amenity-item">
                                    <i class="bi bi-bed amenity-icon"></i>
                                    <span>King Bed</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="bi bi-person amenity-icon"></i>
                                    <span>2 Guests</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="bi bi-wifi amenity-icon"></i>
                                    <span>Free Wi-Fi</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="bi bi-snow amenity-icon"></i>
                                    <span>A/C</span>
                                </div>
                            </div>
                            
                            <div class="room-buttons">
                                <a href="/room-details/{{ $room->id }}" class="btn btn-outline-primary">View Details</a>
                                <!-- <a href="#booking" class="btn btn-primary">Book Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>

    <!-- Room Features & Amenities -->
    <section id="room-amenities">
        <div class="container">
            <h2 class="section-title fade-in">Room Features & Amenities</h2>
            <p class="intro-text fade-in">
                Every room at Aloma Stay is equipped with premium amenities designed to enhance your comfort 
                and ensure a memorable stay. From modern conveniences to thoughtful touches, we've considered 
                every detail.
            </p>
            
            <div class="row g-4 mt-4">
                <div class="col-md-4 col-lg-3 fade-in">
                    <div class="amenity-grid-item">
                        <i class="bi bi-basket amenity-grid-icon"></i>
                        <h5>Ensuite Bathroom</h5>
                        <p class="small">Luxury toiletries, rain shower, and premium towels in every room.</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-lg-3 fade-in">
                    <div class="amenity-grid-item">
                        <i class="bi bi-tv amenity-grid-icon"></i>
                        <h5>Smart TV</h5>
                        <p class="small">High-definition smart TVs with international channels and streaming.</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-lg-3 fade-in">
                    <div class="amenity-grid-item">
                        <i class="bi bi-cup-hot amenity-grid-icon"></i>
                        <h5>Coffee & Tea</h5>
                        <p class="small">Nespresso machine with complimentary coffee and premium tea selection.</p>
                    </div>
                </div>
                
                <!-- <div class="col-md-4 col-lg-3 fade-in">
                    <div class="amenity-grid-item">
                        <i class="bi bi-bell amenity-grid-icon"></i>
                        <h5>Room Service</h5>
                        <p class="small">24-hour room service with extensive menu options available.</p>
                    </div>
                </div> -->
                
                <div class="col-md-4 col-lg-3 fade-in">
                    <div class="amenity-grid-item">
                        <i class="bi bi-safe amenity-grid-icon"></i>
                        <h5>In-room Safe</h5>
                        <p class="small">Digital safes large enough for laptops and valuable belongings.</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-lg-3 fade-in">
                    <div class="amenity-grid-item">
                        <i class="bi bi-umbrella amenity-grid-icon"></i>
                        <h5>Balcony/Terrace</h5>
                        <p class="small">Private outdoor space with seating in most rooms and suites.</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-lg-3 fade-in">
                    <div class="amenity-grid-item">
                        <i class="bi bi-snow amenity-grid-icon"></i>
                        <h5>Air Conditioning</h5>
                        <p class="small">Individual climate control in all rooms for personalized comfort.</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-lg-3 fade-in">
                    <div class="amenity-grid-item">
                        <i class="bi bi-wifi amenity-grid-icon"></i>
                        <h5>High-speed Wi-Fi</h5>
                        <p class="small">Complimentary high-speed wireless internet throughout the hotel.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Compare Rooms Table -->
    <!-- <section class="bg-soft-beige">
        <div class="container">
            <h2 class="section-title fade-in">Compare Our Rooms</h2>
            <p class="intro-text fade-in">
                Use this comparison table to find the perfect room for your stay. All rooms include our signature 
                amenities and personalized service.
            </p>
            
            <div class="table-responsive fade-in">
                <table class="table table-striped compare-table">
                    <thead>
                        <tr>
                            <th>Room Type</th>
                            <th>Size</th>
                            <th>Bed Type</th>
                            <th>Max Guests</th>
                            <th>View</th>
                            <th>Price Range</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="highlight-cell">Deluxe Room</td>
                            <td>35 m²</td>
                            <td>King Bed</td>
                            <td>2 Adults</td>
                            <td>Garden View</td>
                            <td class="champagne-text">$180 - $220</td>
                        </tr>
                        <tr>
                            <td class="highlight-cell">Premium Suite</td>
                            <td>55 m²</td>
                            <td>King Bed</td>
                            <td>3 Adults</td>
                            <td>Pool View</td>
                            <td class="champagne-text">$320 - $380</td>
                        </tr>
                        <tr>
                            <td class="highlight-cell">Family Room</td>
                            <td>45 m²</td>
                            <td>2 Double Beds</td>
                            <td>2 Adults + 2 Children</td>
                            <td>Garden View</td>
                            <td class="champagne-text">$260 - $300</td>
                        </tr>
                        <tr>
                            <td class="highlight-cell">Executive Suite</td>
                            <td>75 m²</td>
                            <td>Super King Bed</td>
                            <td>2 Adults</td>
                            <td>Panoramic View</td>
                            <td class="champagne-text">$450 - $520</td>
                        </tr>
                        <tr>
                            <td class="highlight-cell">Garden View Room</td>
                            <td>30 m²</td>
                            <td>Queen Bed</td>
                            <td>2 Adults</td>
                            <td>Garden View</td>
                            <td class="champagne-text">$150 - $180</td>
                        </tr>
                        <tr>
                            <td class="highlight-cell">Poolside Villa</td>
                            <td>65 m²</td>
                            <td>King Bed</td>
                            <td>2 Adults</td>
                            <td>Pool Access</td>
                            <td class="champagne-text">$380 - $450</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section> -->

    <!-- Booking CTA -->
    <section class="booking-cta">
        <div class="container">
            <div class="fade-in">
                <h3>Find the Perfect Room for Your Stay</h3>
                <p>
                    Whether you're planning a romantic getaway, family vacation, or business trip, 
                    our team is ready to help you select the ideal accommodation. Contact us for 
                    special requests or extended stay packages.
                </p>
                
                <div class="cta-buttons">
                    <a href="/rooms" class="btn btn-primary btn-lg">Check Availability</a>
                    <a href="/contact" class="btn btn-outline-primary btn-lg" style="border-color: white; color: white;">Contact for Custom Requests</a>
                </div>
            </div>
        </div>
    </section>
    
@endsection
@section('script')
<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Set current year in footer
            document.getElementById('currentYear').textContent = new Date().getFullYear();
            
            // Scroll animations
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const fadeInOnScroll = () => {
                fadeElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 100;
                    
                    if (elementTop < window.innerHeight - elementVisible) {
                        element.classList.add('visible');
                    }
                });
            };
            
            // Initial check
            fadeInOnScroll();
            
            // Check on scroll
            window.addEventListener('scroll', fadeInOnScroll);
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    if(this.getAttribute('href') === '#') return;
                    
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if(targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Navbar background on scroll
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
                } else {
                    navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.08)';
                }
            });
            
            // Room card hover enhancement
            const roomCards = document.querySelectorAll('.room-card');
            roomCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.zIndex = '10';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.zIndex = '1';
                });
            });
        });
    </script>
    @endsection