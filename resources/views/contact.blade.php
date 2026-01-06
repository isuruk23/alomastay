
@extends('layouts.web')

@section('content')
<!-- Main Contact Page -->
    <main class="aloma-contact-page">
        
        <!-- 1️⃣ Page Header / Banner -->
        <section class="page-hero">
        <div class="container">
            <h1>Contact Us</h1>
            <p>We're here to assist with your luxury stay at Aloma Stay. Reach out anytime.</p>
            
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact US</li>
                </ol>
            </nav>
        </div>
    </section>
        
        <!-- 5️⃣ Quick Contact Options (Placed here for better UX) -->
        <section class="py-4 bg-light">
            <div class="container">
                <div class="row g-3">
                    <div class="col-md-3 col-sm-6">
                        <a href="tel:+18005552662" class="text-decoration-none aloma-quick-contact-item d-flex align-items-center p-3 rounded-3 bg-white">
                            <div class="rounded-circle d-flex align-items-center justify-content-center aloma-icon-bg me-3">
                                <i class="bi bi-telephone fs-5 aloma-text-primary"></i>
                            </div>
                            <div>
                                <p class="fw-bold mb-1 aloma-text-primary">Call Now</p>
                                <p class="text-muted small mb-0">+1 (800) 555-ALOMA</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="mailto:reservations@alomastay.com" class="text-decoration-none aloma-quick-contact-item d-flex align-items-center p-3 rounded-3 bg-white">
                            <div class="rounded-circle d-flex align-items-center justify-content-center aloma-icon-bg me-3">
                                <i class="bi bi-envelope fs-5 aloma-text-primary"></i>
                            </div>
                            <div>
                                <p class="fw-bold mb-1 aloma-text-primary">Email Us</p>
                                <p class="text-muted small mb-0">reservations@alomastay.com</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#map-section" class="text-decoration-none aloma-quick-contact-item d-flex align-items-center p-3 rounded-3 bg-white">
                            <div class="rounded-circle d-flex align-items-center justify-content-center aloma-icon-bg me-3">
                                <i class="bi bi-geo-alt fs-5 aloma-text-primary"></i>
                            </div>
                            <div>
                                <p class="fw-bold mb-1 aloma-text-primary">Visit Us</p>
                                <p class="text-muted small mb-0">123 Coastal Drive, Malibu</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#contact-form" class="text-decoration-none aloma-quick-contact-item d-flex align-items-center p-3 rounded-3 bg-white">
                            <div class="rounded-circle d-flex align-items-center justify-content-center aloma-icon-bg me-3">
                                <i class="bi bi-chat-left-text fs-5 aloma-text-primary"></i>
                            </div>
                            <div>
                                <p class="fw-bold mb-1 aloma-text-primary">Live Chat</p>
                                <p class="text-muted small mb-0">Available 24/7</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- 3️⃣ Contact Form Section -->
                    <section class="mb-5" id="contact-form">
                        <h2 class="mb-4 fw-bold aloma-text-primary">Send Us a Message</h2>
                        <p class="lead mb-4">Have questions about our packages, accommodations, or special requests? Fill out the form below and our concierge team will respond within 24 hours.</p>
                        
                        <form class="needs-validation" novalidate>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label for="aloma-fullname" class="form-label fw-semibold">Full Name *</label>
                                    <input type="text" class="form-control py-3 rounded-3 aloma-form-control" id="aloma-fullname" placeholder="Your full name" required>
                                    <div class="invalid-feedback">
                                        Please provide your full name.
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="aloma-email" class="form-label fw-semibold">Email Address *</label>
                                    <input type="email" class="form-control py-3 rounded-3 aloma-form-control" id="aloma-email" placeholder="your.email@example.com" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email address.
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="aloma-phone" class="form-label fw-semibold">Phone Number</label>
                                    <input type="tel" class="form-control py-3 rounded-3 aloma-form-control" id="aloma-phone" placeholder="+1 (555) 123-4567">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="aloma-subject" class="form-label fw-semibold">Subject *</label>
                                    <select class="form-select py-3 rounded-3 aloma-form-control" id="aloma-subject" required>
                                        <option value="" selected disabled>Select a subject</option>
                                        <option value="reservation">Reservation Inquiry</option>
                                        <option value="package">Package Information</option>
                                        <option value="event">Event Planning</option>
                                        <option value="feedback">Feedback & Suggestions</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a subject.
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <label for="aloma-message" class="form-label fw-semibold">Message *</label>
                                    <textarea class="form-control py-3 rounded-3 aloma-form-control" id="aloma-message" rows="6" placeholder="How can we assist you today?" required></textarea>
                                    <div class="invalid-feedback">
                                        Please provide your message.
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="aloma-newsletter" checked>
                                        <label class="form-check-label" for="aloma-newsletter">
                                            Subscribe to our newsletter for exclusive offers and updates
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn aloma-btn-primary py-3 px-5 rounded-3 fw-bold fs-5">
                                        <i class="bi bi-send me-2"></i>Send Message
                                    </button>
                                    <button type="reset" class="btn btn-outline-secondary py-3 px-4 rounded-3 ms-3">Clear Form</button>
                                </div>
                            </div>
                        </form>
                    </section>
                    
                    <!-- 4️⃣ Map Section -->
                    <section class="mb-5" id="map-section">
                        <h2 class="mb-4 fw-bold aloma-text-primary">Our Location</h2>
                        <p class="lead mb-4">Visit our stunning coastal retreat in Malibu, California. We're easily accessible from Los Angeles International Airport (LAX) and offer valet parking for all guests.</p>
                        
                        <div class="rounded-4 overflow-hidden shadow-sm aloma-shadow-hover">
                            <div class="aloma-map-container rounded-4">
                                <!-- Google Maps Embed -->
                                <iframe 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.935957991214!2d-118.68838208478477!3d34.025629080614764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e81da9f908d32d%3A0x6f4c8b3b3a6a7c7b!2sMalibu%2C%20CA%2C%20USA!5e0!3m2!1sen!2s!4v1623456789012!5m2!1sen!2s" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy" 
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                        
                        <div class="row mt-4 g-3">
                            <div class="col-md-6">
                                <div class="p-4 bg-light rounded-4">
                                    <h5 class="fw-bold aloma-text-primary mb-3">Getting Here</h5>
                                    <p class="mb-2"><i class="bi bi-car-front me-2 aloma-icon"></i><strong>From LAX:</strong> 45-minute drive via Pacific Coast Highway</p>
                                    <p class="mb-2"><i class="bi bi-train-front me-2 aloma-icon"></i><strong>Public Transit:</strong> Metro bus lines 534 & 534 stop nearby</p>
                                    <p class="mb-0"><i class="bi bi-p-circle me-2 aloma-icon"></i><strong>Parking:</strong> Complimentary valet for all guests</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-4 bg-light rounded-4">
                                    <h5 class="fw-bold aloma-text-primary mb-3">Nearby Attractions</h5>
                                    <p class="mb-2"><i class="bi bi-sun me-2 aloma-icon"></i><strong>Beaches:</strong> Malibu Lagoon, Zuma Beach</p>
                                    <p class="mb-2"><i class="bi bi-cup-straw me-2 aloma-icon"></i><strong>Dining:</strong> Nobu Malibu, Geoffrey's</p>
                                    <p class="mb-0"><i class="bi bi-shop me-2 aloma-icon"></i><strong>Shopping:</strong> Malibu Country Mart, Cross Creek</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                
                <div class="col-lg-4">
                    <!-- 2️⃣ Contact Information Section -->
                    <section class="mb-5">
                        <h2 class="mb-4 fw-bold aloma-text-primary">Contact Information</h2>
                        <p class="lead mb-4">Our dedicated concierge team is available 24/7 to assist with reservations, inquiries, and special requests.</p>
                        
                        <div class="d-flex flex-column gap-4">
                            <!-- Address Card -->
                            <div class="card border-0 rounded-4 shadow-sm aloma-contact-card aloma-shadow-hover">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-start">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center aloma-icon-bg me-3">
                                            <i class="bi bi-geo-alt fs-4 aloma-icon"></i>
                                        </div>
                                        <div>
                                            <h5 class="card-title fw-bold mb-2 aloma-text-primary">Our Address</h5>
                                            <address class="mb-0">
                                                <p class="mb-1">Aloma Stay Luxury Hotel</p>
                                                <p class="mb-1">123 Coastal Drive</p>
                                                <p class="mb-0">Malibu, CA 90265</p>
                                                <p class="mb-0">United States</p>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Phone Card -->
                            <div class="card border-0 rounded-4 shadow-sm aloma-contact-card aloma-shadow-hover">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-start">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center aloma-icon-bg me-3">
                                            <i class="bi bi-telephone fs-4 aloma-icon"></i>
                                        </div>
                                        <div>
                                            <h5 class="card-title fw-bold mb-2 aloma-text-primary">Phone Numbers</h5>
                                            <p class="mb-1"><strong>Reservations:</strong> +1 (800) 555-ALOMA</p>
                                            <p class="mb-1"><strong>Concierge:</strong> +1 (310) 555-0199</p>
                                            <p class="mb-0"><strong>Emergency:</strong> +1 (310) 555-9111</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Email Card -->
                            <div class="card border-0 rounded-4 shadow-sm aloma-contact-card aloma-shadow-hover">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-start">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center aloma-icon-bg me-3">
                                            <i class="bi bi-envelope fs-4 aloma-icon"></i>
                                        </div>
                                        <div>
                                            <h5 class="card-title fw-bold mb-2 aloma-text-primary">Email Addresses</h5>
                                            <p class="mb-1"><strong>Reservations:</strong> reservations@alomastay.com</p>
                                            <p class="mb-1"><strong>Concierge:</strong> concierge@alomastay.com</p>
                                            <p class="mb-1"><strong>Events:</strong> events@alomastay.com</p>
                                            <p class="mb-0"><strong>General:</strong> info@alomastay.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Hours Card -->
                            <div class="card border-0 rounded-4 shadow-sm aloma-contact-card aloma-shadow-hover">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-start">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center aloma-icon-bg me-3">
                                            <i class="bi bi-clock fs-4 aloma-icon"></i>
                                        </div>
                                        <div>
                                            <h5 class="card-title fw-bold mb-2 aloma-text-primary">Business Hours</h5>
                                            <p class="mb-1"><strong>Front Desk:</strong> 24/7</p>
                                            <p class="mb-1"><strong>Concierge:</strong> 6:00 AM - 12:00 AM</p>
                                            <p class="mb-1"><strong>Check-in:</strong> 3:00 PM</p>
                                            <p class="mb-0"><strong>Check-out:</strong> 11:00 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Emergency Contact -->
                    <div class="card border-0 rounded-4 shadow-sm border-danger aloma-shadow-hover">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start">
                                <div class="rounded-circle d-flex align-items-center justify-content-center bg-danger bg-opacity-10 me-3">
                                    <i class="bi bi-exclamation-triangle fs-4 text-danger"></i>
                                </div>
                                <div>
                                    <h5 class="card-title fw-bold mb-2 text-danger">Emergency Contact</h5>
                                    <p class="mb-2">For urgent assistance during your stay, please contact our 24/7 emergency line:</p>
                                    <p class="fw-bold fs-4 mb-2 text-danger">+1 (310) 555-9111</p>
                                    <p class="text-muted small mb-0">Available for medical emergencies, security issues, and urgent guest needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- FAQ Section -->
            <section class="my-5 py-5">
                <h2 class="text-center mb-5 fw-bold aloma-text-primary">Frequently Asked Questions</h2>
                
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="card border-0 rounded-4 shadow-sm h-100 aloma-shadow-hover">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold aloma-text-primary mb-3"><i class="bi bi-question-circle me-2"></i>Reservation Questions</h5>
                                <div class="accordion accordion-flush" id="aloma-faq-reservations">
                                    <div class="accordion-item border-0">
                                        <h3 class="accordion-header">
                                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#aloma-faq-1">
                                                What is your cancellation policy?
                                            </button>
                                        </h3>
                                        <div id="aloma-faq-1" class="accordion-collapse collapse" data-bs-parent="#aloma-faq-reservations">
                                            <div class="accordion-body">
                                                We offer flexible cancellation up to 48 hours before check-in for standard reservations. Package deals may have different terms. Please refer to your confirmation email for specific details.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-0">
                                        <h3 class="accordion-header">
                                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#aloma-faq-2">
                                                Do you offer early check-in or late check-out?
                                            </button>
                                        </h3>
                                        <div id="aloma-faq-2" class="accordion-collapse collapse" data-bs-parent="#aloma-faq-reservations">
                                            <div class="accordion-body">
                                                Early check-in and late check-out are subject to availability and may incur additional charges. Please contact our concierge team in advance to make arrangements.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card border-0 rounded-4 shadow-sm h-100 aloma-shadow-hover">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold aloma-text-primary mb-3"><i class="bi bi-question-circle me-2"></i>General Information</h5>
                                <div class="accordion accordion-flush" id="aloma-faq-general">
                                    <div class="accordion-item border-0">
                                        <h3 class="accordion-header">
                                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#aloma-faq-3">
                                                What amenities are included with my stay?
                                            </button>
                                        </h3>
                                        <div id="aloma-faq-3" class="accordion-collapse collapse" data-bs-parent="#aloma-faq-general">
                                            <div class="accordion-body">
                                                All guests enjoy complimentary WiFi, access to our fitness center and spa facilities, daily housekeeping, valet parking, and concierge services. Additional amenities vary by room category and package.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-0">
                                        <h3 class="accordion-header">
                                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#aloma-faq-4">
                                                Is the hotel pet-friendly?
                                            </button>
                                        </h3>
                                        <div id="aloma-faq-4" class="accordion-collapse collapse" data-bs-parent="#aloma-faq-general">
                                            <div class="accordion-body">
                                                Yes, Aloma Stay welcomes pets under 25 pounds. A pet fee applies, and we offer pet beds, bowls, and special treats. Please inform us when making your reservation.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <p class="lead">Have more questions?</p>
                    <a href="#contact-form" class="btn aloma-btn-outline-primary py-3 px-5 rounded-3 fw-bold">Ask Your Question</a>
                </div>
            </section>
            
            <!-- Contact CTA -->
            <section class="py-5 my-5 bg-light rounded-4">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="fw-bold mb-3">Prefer to Speak Directly?</h2>
                            <p class="lead mb-4">Our dedicated concierge team is available around the clock to assist with your luxury stay planning.</p>
                            <div class="d-flex flex-wrap gap-3">
                                <a href="tel:+18005552662" class="btn aloma-btn-primary py-3 px-5 rounded-3 fw-bold">
                                    <i class="bi bi-telephone me-2"></i>Call Now
                                </a>
                                <button type="button" class="btn aloma-btn-outline-primary py-3 px-5 rounded-3 fw-bold">
                                    <i class="bi bi-chat-left-text me-2"></i>Start Live Chat
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-4 mt-lg-0 text-center">
                            <div class="rounded-circle aloma-bg-primary d-inline-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                                <i class="bi bi-headset text-white fs-1"></i>
                            </div>
                            <p class="fw-bold mt-3 mb-1">Concierge Hours</p>
                            <p class="fs-5 aloma-text-primary fw-bold mb-0">24/7 Availability</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
</main>

    
@endsection
@section('script')
<script>
        // Bootstrap form validation
        document.addEventListener('DOMContentLoaded', function() {
            // Form validation
            const forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
            
            // Add hover effects to cards
            const cards = document.querySelectorAll('.aloma-shadow-hover');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.classList.add('shadow');
                });
                card.addEventListener('mouseleave', function() {
                    this.classList.remove('shadow');
                });
            });
            
            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href !== '#') {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            window.scrollTo({
                                top: target.offsetTop - 100,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });
        });
    </script>
    @endsection