
@extends('layouts.web')

@section('content')
    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <h1 class="fade-in">About Aloma Stay</h1>
            <p class="fade-in">A Story of Comfort, Elegance & Warm Hospitality</p>
            
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb fade-in">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Our Story -->
    <section id="our-story">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 fade-in">
                    <img src="https://images.unsplash.com/photo-1584132967334-10e028bd69f7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Aloma Stay Hotel Lobby" class="img-fluid story-img">
                </div>
                <div class="col-lg-6 fade-in">
                    <h2>Our Story</h2>
                    <div class="divider"></div>
                    <p>Founded in 2010 by the Perera family, Aloma Stay was born from a simple vision: to create a sanctuary where guests could experience the authentic warmth of Sri Lankan hospitality coupled with world-class luxury.</p>
                    <p>Named after the Sinhalese word for "light," Aloma represents our commitment to illuminating the beauty of Sri Lankan culture for our guests. What began as a modest 10-room guesthouse has blossomed into a renowned boutique hotel, celebrated for its personalized service and attention to detail.</p>
                    <p>Today, under the leadership of second-generation hoteliers, we continue to honor our founding principles while innovating to meet the evolving needs of discerning travelers from around the world.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Philosophy -->
    <section class="bg-soft-beige">
        <div class="container">
            <h2 class="section-title fade-in">Our Philosophy</h2>
            <p class="text-center mb-5 fade-in" style="max-width: 800px; margin: 0 auto;">At the heart of Aloma Stay are principles that guide every aspect of your experience with us.</p>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 fade-in">
                    <div class="philosophy-card">
                        <i class="bi bi-person-heart philosophy-icon"></i>
                        <h4>Personalized Hospitality</h4>
                        <p>We believe every guest is unique. Our team takes time to understand your preferences, ensuring your stay is tailored to your individual needs and desires.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 fade-in">
                    <div class="philosophy-card">
                        <i class="bi bi-house-door philosophy-icon"></i>
                        <h4>Comfort & Privacy</h4>
                        <p>Your sanctuary away from home. We create spaces that offer both luxurious comfort and complete privacy, allowing you to relax and rejuvenate at your own pace.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 fade-in">
                    <div class="philosophy-card">
                        <i class="bi bi-geo-alt philosophy-icon"></i>
                        <h4>Authentic Local Experiences</h4>
                        <p>Beyond our walls, we connect you with the soul of Sri Lanka. From cultural tours to culinary adventures, we offer genuine experiences that create lasting memories.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 fade-in">
                    <div class="philosophy-card">
                        <i class="bi bi-recycle philosophy-icon"></i>
                        <h4>Sustainable Practices</h4>
                        <p>We are committed to preserving Sri Lanka's natural beauty. Our eco-friendly initiatives ensure we minimize our environmental footprint while supporting local communities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Aloma Stay -->
    <section id="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 fade-in">
                    <h2>Why Choose Aloma Stay</h2>
                    <div class="divider"></div>
                    <p>Experience the difference that sets Aloma Stay apart from other luxury accommodations in Sri Lanka.</p>
                    
                    <ul class="check-list mt-4">
                        <li><strong>Prime Location:</strong> Nestled in Sri Lanka's cultural triangle, we offer easy access to UNESCO World Heritage Sites while providing a tranquil retreat.</li>
                        <li><strong>Elegant Accommodations:</strong> Each room and suite is thoughtfully designed with comfort, aesthetics, and functionality in mind.</li>
                        <li><strong>Thoughtful Amenities:</strong> From our infinity pool overlooking the countryside to our spa services, every amenity is curated for your enjoyment.</li>
                        <li><strong>Friendly, Professional Staff:</strong> Our team combines professional expertise with genuine warmth, anticipating your needs before you do.</li>
                        <li><strong>Culinary Excellence:</strong> Savor authentic Sri Lankan flavors and international cuisine prepared with locally-sourced ingredients.</li>
                        <li><strong>Tailored Experiences:</strong> From wildlife safaris to temple tours, we design experiences that match your interests.</li>
                    </ul>
                </div>
                
                <div class="col-lg-6 fade-in">
                    <img src="https://images.unsplash.com/photo-1596176530529-78163a4f7af2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2067&q=80" 
                         alt="Aloma Stay Pool and Gardens" class="img-fluid highlight-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <!-- <section class="bg-soft-beige">
        <div class="container">
            <h2 class="section-title fade-in">Meet Our Team</h2>
            <p class="text-center mb-5 fade-in" style="max-width: 800px; margin: 0 auto;">Behind every memorable stay at Aloma Stay is a dedicated team passionate about hospitality.</p>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 fade-in">
                    <div class="team-card">
                        <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2067&q=80" 
                             class="team-img" alt="Manager">
                        <div class="team-content">
                            <h5>Nimal Perera</h5>
                            <p class="team-position">General Manager</p>
                            <p class="small">With over 20 years in hospitality, Nimal ensures every guest experiences the warmth of Sri Lankan "athithi devo bhava" (guest is god) philosophy.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 fade-in">
                    <div class="team-card">
                        <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2067&q=80" 
                             class="team-img" alt="Chef">
                        <div class="team-content">
                            <h5>Chamari Fernando</h5>
                            <p class="team-position">Executive Chef</p>
                            <p class="small">Chamari brings traditional Sri Lankan recipes to life with modern flair, using fresh ingredients sourced from local markets and our organic garden.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 fade-in">
                    <div class="team-card">
                        <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2067&q=80" 
                             class="team-img" alt="Concierge">
                        <div class="team-content">
                            <h5>Ravi Silva</h5>
                            <p class="team-position">Head Concierge</p>
                            <p class="small">A local expert, Ravi has been crafting unforgettable Sri Lankan experiences for our guests for over 15 years, with insider knowledge of hidden gems.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 fade-in">
                    <div class="team-card">
                        <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2067&q=80" 
                             class="team-img" alt="Spa Manager">
                        <div class="team-content">
                            <h5>Anjali Bandara</h5>
                            <p class="team-position">Wellness Director</p>
                            <p class="small">Anjali combines ancient Ayurvedic principles with modern wellness techniques to create rejuvenating treatments that restore balance and harmony.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Our Values -->
    <section id="our-values">
        <div class="container">
            <h2 class="section-title fade-in">Our Values</h2>
            
            <div class="row g-4 mt-5">
                <div class="col-md-6 col-lg-3 fade-in">
                    <div class="value-card">
                        <i class="bi bi-award value-icon"></i>
                        <h4>Excellence</h4>
                        <p>We pursue excellence in every detail, from the quality of our linens to the precision of our service, ensuring your experience surpasses expectations.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 fade-in">
                    <div class="value-card">
                        <i class="bi bi-shield-check value-icon"></i>
                        <h4>Trust & Transparency</h4>
                        <p>We believe in building relationships based on honesty and integrity. Our pricing is transparent, and our recommendations are always in your best interest.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 fade-in">
                    <div class="value-card">
                        <i class="bi bi-heart value-icon"></i>
                        <h4>Warmth & Care</h4>
                        <p>Genuine care is at the core of our hospitality. We treat every guest as an honored member of our extended family, with warmth that comes from the heart.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 fade-in">
                    <div class="value-card">
                        <i class="bi bi-search value-icon"></i>
                        <h4>Attention to Detail</h4>
                        <p>It's the little things that make a big difference. From fresh flowers in your room to remembering how you take your tea, we notice what matters to you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Guest Promise -->
    <section class="guest-promise">
        <div class="container">
            <div class="guest-promise-content fade-in">
                <h2 class="mb-4">Our Promise to You</h2>
                <p class="promise-text">"At Aloma Stay, every guest is welcomed like family and treated with timeless elegance. We promise an experience that nourishes your spirit, delights your senses, and creates memories to cherish for a lifetime."</p>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content fade-in">
                <h3>Experience the Warmth of Aloma Stay</h3>
                <p>Discover why discerning travelers return to Aloma Stay year after year. Experience our unique blend of Sri Lankan hospitality and boutique luxury for yourself.</p>
                
                <div class="cta-buttons mt-4">
                    <a href="booking.html" class="btn btn-primary btn-lg me-3">Book Your Stay</a>
                    <a href="contact.html" class="btn btn-outline-primary btn-lg">Contact Us</a>
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
                    const elementVisible = 150;
                    
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
        });
    </script>
    @endsection