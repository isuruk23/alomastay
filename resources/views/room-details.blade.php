
@extends('layouts.web')

@section('content')
<!-- Room Hero -->
    <section class="room-hero" style="background-image: url('{{ asset('public/' . $room->image) }}');">
        <div class="container">
            <h1 class="fade-in">{{ $room->name }}</h1>
            <p class="fade-in">{{ $room->intro }}</p>
            
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb fade-in">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="rooms.html">Rooms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $room->name }}</li>
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
                        
                    @if ($room->image)
                            <img src="{{ asset('public/' . $room->image) }}"  alt="{{ $room->name }}" loading="lazy">
                            @else
                            <img src="{{ asset('public/images/logo-sm.png') }}" loading="lazy">
                            @endif
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
                        {!!$room->overview !!}
                    </div>
                </div>
                
                <div class="col-lg-4 fade-in">
                    <div class="details-card">
                        <h4 class="text-center">Room Details</h4>
                        <div class="detail-item">
                            <span class="detail-label">Room Size</span>
                            <span class="detail-value">{{ $room->size }} m²</span>
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
                        <div id="bookingAlert" class="alert d-none" role="alert"></div>

                        <form id="roomBookingForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Contact No</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="mb-3">
                                <label for="check_in" class="form-label">Check-in Date</label>
                                <input type="date" class="form-control" id="check_in" name="check_in">
                            </div>
                            
                            <div class="mb-3">
                                <label for="check_out" class="form-label">Check-out Date</label>
                                <input type="date" class="form-control" id="check_out" name="check_out">
                            </div>
                            
                            <div class="mb-3">
                                <label for="guests" class="form-label">Guests</label>
                                <select class="form-select" id="guests" name="guests">
                                    <option value="1">1 Guest</option>
                                    <option value="2" selected>2 Guests</option>
                                    <option value="3">3 Guests</option>
                                    <option value="4">4 Guests</option>
                                </select>
                            </div>
                            
                            
                            
                            <div class="room-price mb-4">
                                $180 <span>/ night</span>
                            </div>
                            <input type="hidden" name="room_no" value="{{ $room->id }}">
                            <button type="button" id="bookRoomBtn"  class="btn btn-primary">Book This Room</button>
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
                @foreach($rooms as $room)
                <div class="col-md-4 fade-in">
                    <div class="similar-room-card">
                        
                              @if ($room->image)
                            <img src="{{ asset('public/' . $room->image) }}"  class="similar-room-img" alt="Deluxe Room" loading="lazy">
                            @else
                            <img src="{{ asset('public/images/logo-sm.png') }}"  class="similar-room-img" alt="Deluxe Room" loading="lazy">
                            @endif
                        <div class="similar-room-content">
                            <h5>{{ $room->name }}</h5>
                            <p class="small text-muted">{{ $room->intro }}</p>
                            <div class="similar-room-price">${{ number_format($room->price, 0) }} / night</div>
                            <a href="/room-details/{{ $room->id }}" class="btn btn-outline-primary w-100">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
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
    <script>
$(document).ready(function () {

    $('#bookRoomBtn').on('click', function () {

        let formData = new FormData($('#roomBookingForm')[0]);
        let alertBox = $('#bookingAlert');

        $.ajax({
            url: "{{ route('room.book') }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            success: function (res) {

                alertBox.removeClass('d-none alert-danger alert-success');

                if (res.status) {
                    alertBox.addClass('alert-success').text(res.message);
                    $('#roomBookingForm')[0].reset();
                } else {
                    alertBox.addClass('alert-danger').text(res.message);
                }
            },
            error: function (xhr) {

            let msg = 'Something went wrong. Please try again.';

            if (xhr.responseJSON && xhr.responseJSON.message) {
                msg = xhr.responseJSON.message; // <-- your custom message
            }

            alertBox
                .removeClass('d-none alert-success')
                .addClass('alert-danger')
                .text(msg);
        }
        });

    });

});
</script>


    @endsection