
@extends('layouts.web')

@section('content')
<!-- Room Hero -->
    <section class="room-hero">
        <div class="container">
            <h1 class="fade-in">Deluxe Room</h1>
            <p class="fade-in">Spacious comfort with elegant interiors and garden view</p>
            
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb fade-in">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="rooms.html">Rooms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Deluxe Room</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Image Gallery -->
    <section class="room-gallery">
        <div class="container">
            <div class="swiper roomSwiper fade-in">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Deluxe Room Bed Area" loading="lazy">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1615873968403-89e068629265?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" 
                             alt="Deluxe Room Bathroom" loading="lazy">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1560185893-a55cbc8c57e8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Deluxe Room Balcony View" loading="lazy">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Deluxe Room Workspace" loading="lazy">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Room Overview -->
    <section class="room-overview">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 fade-in">
                    <div class="room-description">
                        <h2>Room Overview</h2>
                        <p>Our Deluxe Room offers a perfect blend of comfort and sophistication, designed for discerning travelers seeking a tranquil retreat. Spanning 35 square meters, this spacious accommodation features elegant contemporary decor with subtle Sri Lankan touches.</p>
                        
                        <p>The room is centered around a luxurious king-size bed adorned with premium linens, ensuring restful nights. Large windows frame picturesque views of our lush tropical gardens, filling the space with natural light while maintaining privacy.</p>
                        
                        <p>Thoughtful amenities include a comfortable seating area for relaxation, a dedicated workspace for business travelers, and a private balcony where you can enjoy your morning coffee surrounded by the soothing sounds of nature.</p>
                        
                        <p>Every detail has been carefully considered, from the ambient lighting system to the local artwork that adorns the walls, creating an atmosphere of refined comfort that honors Sri Lanka's rich cultural heritage while providing modern luxury.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 fade-in">
                    <div class="details-card">
                        <h4 class="text-center">Room Details</h4>
                        <div class="detail-item">
                            <span class="detail-label">Room Size</span>
                            <span class="detail-value">35 m²</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Bed Type</span>
                            <span class="detail-value">King Bed</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Max Occupancy</span>
                            <span class="detail-value">2 Adults</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">View</span>
                            <span class="detail-value">Garden View</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Floor</span>
                            <span class="detail-value">1st - 3rd Floor</span>
                        </div>
                        
                        <div class="room-price">
                            $180 <span>/ per night</span>
                        </div>
                        
                        <div class="text-center">
                            <a href="#booking-form" class="btn btn-primary">Check Availability</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Amenities Grid -->
    <section class="amenities-grid">
        <div class="container">
            <h2 class="section-title fade-in">Amenities & Features</h2>
            <p class="text-center mb-5 fade-in">Every comfort considered for your perfect stay</p>
            
            <div class="row">
                <div class="col-md-6 fade-in">
                    <div class="amenity-item">
                        <i class="bi bi-wifi amenity-icon"></i>
                        <div>
                            <h5>Free High-speed Wi-Fi</h5>
                            <p class="mb-0">Complimentary wireless internet access throughout your stay</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 fade-in">
                    <div class="amenity-item">
                        <i class="bi bi-snow amenity-icon"></i>
                        <div>
                            <h5>Air Conditioning</h5>
                            <p class="mb-0">Individual climate control for personalized comfort</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 fade-in">
                    <div class="amenity-item">
                        <i class="bi bi-basket amenity-icon"></i>
                        <div>
                            <h5>Ensuite Bathroom</h5>
                            <p class="mb-0">Luxury rain shower, premium toiletries, and fluffy towels</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 fade-in">
                    <div class="amenity-item">
                        <i class="bi bi-tv amenity-icon"></i>
                        <div>
                            <h5>Smart TV</h5>
                            <p class="mb-0">HD television with international channels and streaming</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 fade-in">
                    <div class="amenity-item">
                        <i class="bi bi-cup-hot amenity-icon"></i>
                        <div>
                            <h5>Coffee & Tea Facilities</h5>
                            <p class="mb-0">Nespresso machine with premium coffee and tea selection</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 fade-in">
                    <div class="amenity-item">
                        <i class="bi bi-bell amenity-icon"></i>
                        <div>
                            <h5>24-hour Room Service</h5>
                            <p class="mb-0">Extensive menu available around the clock</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 fade-in">
                    <div class="amenity-item">
                        <i class="bi bi-umbrella amenity-icon"></i>
                        <div>
                            <h5>Private Balcony</h5>
                            <p class="mb-0">Outdoor seating area with garden views</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 fade-in">
                    <div class="amenity-item">
                        <i class="bi bi-safe amenity-icon"></i>
                        <div>
                            <h5>In-room Safe</h5>
                            <p class="mb-0">Digital safe for laptops and valuables</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section class="booking-section" id="booking-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 fade-in">
                    <h2>House Rules & Policies</h2>
                    
                    <div class="accordion mt-4" id="houseRulesAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    Check-in / Check-out Times
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#houseRulesAccordion">
                                <div class="accordion-body">
                                    <p><strong>Check-in:</strong> 2:00 PM - 10:00 PM</p>
                                    <p><strong>Check-out:</strong> 11:00 AM</p>
                                    <p>Early check-in and late check-out may be available upon request, subject to availability and additional charges.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Cancellation Policy
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#houseRulesAccordion">
                                <div class="accordion-body">
                                    <p><strong>Flexible Cancellation:</strong> Free cancellation up to 7 days before arrival.</p>
                                    <p><strong>Standard Rate:</strong> Cancellations within 7 days of arrival will incur a charge equivalent to one night's stay.</p>
                                    <p><strong>Non-refundable Rate:</strong> Special discounted rates are non-refundable.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Smoking Policy
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#houseRulesAccordion">
                                <div class="accordion-body">
                                    <p>Aloma Stay is a smoke-free property. Smoking is strictly prohibited in all rooms and indoor areas.</p>
                                    <p>Designated smoking areas are available in outdoor locations. A cleaning fee of $150 will be charged for smoking in rooms.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    Pet Policy
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#houseRulesAccordion">
                                <div class="accordion-body">
                                    <p>Pets are generally not allowed at Aloma Stay to ensure comfort for all guests.</p>
                                    <p>Service animals are welcome with prior notification. Please contact us in advance to make necessary arrangements.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 fade-in">
                    <div class="booking-form">
                        <h4 class="text-center mb-4">Check Availability</h4>
                        
                        <form id="roomBookingForm">
                            <div class="mb-3">
                                <label for="checkinDate" class="form-label">Check-in Date</label>
                                <input type="date" class="form-control" id="checkinDate" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="checkoutDate" class="form-label">Check-out Date</label>
                                <input type="date" class="form-control" id="checkoutDate" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="guests" class="form-label">Guests</label>
                                <select class="form-select" id="guests">
                                    <option value="1">1 Guest</option>
                                    <option value="2" selected>2 Guests</option>
                                    <option value="3">3 Guests</option>
                                    <option value="4">4 Guests</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="rooms" class="form-label">Rooms</label>
                                <select class="form-select" id="rooms">
                                    <option value="1">1 Room</option>
                                    <option value="2">2 Rooms</option>
                                    <option value="3">3 Rooms</option>
                                </select>
                            </div>
                            
                            <div class="room-price mb-4">
                                $180 <span>/ night</span>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Book This Room</button>
                        </form>
                        
                        <div class="text-center mt-3">
                            <p class="small text-muted">Need assistance? <a href="contact.html">Contact our team</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Similar Rooms -->
    <section class="similar-rooms">
        <div class="container">
            <h2 class="section-title fade-in">You May Also Like</h2>
            <p class="text-center mb-5 fade-in">Explore other luxurious accommodations at Aloma Stay</p>
            
            <div class="row">
                <div class="col-md-4 fade-in">
                    <div class="similar-room-card">
                        <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80" 
                             class="similar-room-img" alt="Premium Suite" loading="lazy">
                        <div class="similar-room-content">
                            <h5>Premium Suite</h5>
                            <p class="small text-muted">Luxurious suite with separate living area and pool view</p>
                            <div class="similar-room-price">$320 / night</div>
                            <a href="premium-suite.html" class="btn btn-outline-primary w-100">View Details</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 fade-in">
                    <div class="similar-room-card">
                        <img src="https://images.unsplash.com/photo-1618773920993-8fe8c8b91b2f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             class="similar-room-img" alt="Family Room" loading="lazy">
                        <div class="similar-room-content">
                            <h5>Family Room</h5>
                            <p class="small text-muted">Spacious accommodation perfect for families with children</p>
                            <div class="similar-room-price">$260 / night</div>
                            <a href="family-room.html" class="btn btn-outline-primary w-100">View Details</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 fade-in">
                    <div class="similar-room-card">
                        <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80" 
                             class="similar-room-img" alt="Executive Suite" loading="lazy">
                        <div class="similar-room-content">
                            <h5>Executive Suite</h5>
                            <p class="small text-muted">Our most exclusive offering with panoramic views</p>
                            <div class="similar-room-price">$450 / night</div>
                            <a href="executive-suite.html" class="btn btn-outline-primary w-100">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="fade-in">
                <h3>Ready to Experience Comfort at Aloma Stay?</h3>
                <p>
                    Book your Deluxe Room today and experience the perfect blend of Sri Lankan hospitality 
                    and modern luxury. Our team is ready to ensure your stay is nothing short of exceptional.
                </p>
                
                <div class="cta-buttons">
                    <a href="#booking-form" class="btn btn-primary btn-lg">Book This Room</a>
                    <a href="rooms.html" class="btn btn-outline-primary btn-lg" style="border-color: white; color: white;">View All Rooms</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile Booking Bar -->
    <div class="mobile-booking-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="mobile-booking-price">$180 / night</div>
                </div>
                <div class="col-6">
                    <a href="#booking-form" class="btn btn-primary w-100">Book Now</a>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Set current year in footer
            document.getElementById('currentYear').textContent = new Date().getFullYear();
            
            // Initialize Swiper
            const roomSwiper = new Swiper('.roomSwiper', {
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
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 1,
                    },
                    1024: {
                        slidesPerView: 1,
                    },
                },
            });
            
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
            
            // Set min date for check-in to today
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('checkinDate').min = today;
            
            // Update checkout min date when checkin changes
            document.getElementById('checkinDate').addEventListener('change', function() {
                const checkinDate = new Date(this.value);
                const minCheckout = new Date(checkinDate);
                minCheckout.setDate(minCheckout.getDate() + 1);
                
                const minCheckoutStr = minCheckout.toISOString().split('T')[0];
                document.getElementById('checkoutDate').min = minCheckoutStr;
                
                // If checkout date is before new minimum, reset it
                const checkoutDate = new Date(document.getElementById('checkoutDate').value);
                if (checkoutDate <= checkinDate) {
                    document.getElementById('checkoutDate').value = minCheckoutStr;
                }
            });
            
            // Form submission
            document.getElementById('roomBookingForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form values
                const checkin = document.getElementById('checkinDate').value;
                const checkout = document.getElementById('checkoutDate').value;
                const guests = document.getElementById('guests').value;
                const rooms = document.getElementById('rooms').value;
                
                // Simple validation
                if (!checkin || !checkout) {
                    alert('Please select both check-in and check-out dates.');
                    return;
                }
                
                // Calculate nights
                const checkinDate = new Date(checkin);
                const checkoutDate = new Date(checkout);
                const nights = Math.ceil((checkoutDate - checkinDate) / (1000 * 60 * 60 * 24));
                
                if (nights <= 0) {
                    alert('Check-out date must be after check-in date.');
                    return;
                }
                
                // Calculate total price
                const pricePerNight = 180;
                const totalPrice = pricePerNight * nights * rooms;
                
                // Show confirmation
                alert(`Thank you for your booking request!\n\nCheck-in: ${checkin}\nCheck-out: ${checkout}\nGuests: ${guests}\nRooms: ${rooms}\nNights: ${nights}\nTotal: $${totalPrice}\n\nOur team will contact you shortly to confirm your reservation.`);
                
                // Reset form
                this.reset();
                
                // Reset min dates
                document.getElementById('checkinDate').min = today;
                document.getElementById('checkoutDate').min = '';
            });
            
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