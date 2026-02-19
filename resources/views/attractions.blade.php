
@extends('layouts.web')

@section('content')
<!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <h1 class="fade-in">Attractions</h1>
            <p class="fade-in">Discover the Attractions Around Kandy</p>
            
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb fade-in">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Attractions</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Room Categories Intro -->
    <section id="room-intro">
        <div class="container">
            <h2 class="section-title fade-in">Attractions</h2>
            <p class="intro-text fade-in">
                Nestled in the lush hills of Sri Lanka’s central highlands, Kandy is a city rich in culture, history, and natural beauty. Known as the island’s last royal capital and a spiritual heartland, the region offers visitors a unique blend of sacred landmarks, scenic landscapes, and heritage experiences within a short distance of the city.
            </p>
        </div>
    </section>

    <!-- Attraction Types Listing -->
    <section class="bg-soft-beige">
        <div class="container">
            <div class="row">
                @foreach($thingstodos as $thingstodo)
              
                <div class="col-lg-4 col-md-6 fade-in">
                    <div class="room-card">
                        <div class="room-img-container" style="overflow: hidden;">
                            @if ($thingstodo->image)
                            <img src="{{ asset('public/' . $thingstodo->image) }}"  class="room-img" alt="{{ $thingstodo->title }}" loading="lazy">
                            @else
                            <img src="{{ asset('public/images/logo-sm.png') }}"  class="room-img" alt="{{ $thingstodo->title }}" loading="lazy">
                            @endif
                        </div>
                        <div class="room-content">
                            <h4>{{ $thingstodo->title }}</h4>
                            
                            <p class="text-muted">{{ $thingstodo->description }}</p>
                            <p>Distance :{{ $thingstodo->distance }} Km</p>
                           
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>

    

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