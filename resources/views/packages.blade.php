
@extends('layouts.web')

@section('content')
<!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <h1 class="fade-in">Packages & Experiences</h1>
            <p class="fade-in">Curated stays and unforgettable journeys</p>
            
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb fade-in">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Packages</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Packages Introduction -->
    <section id="packages-intro">
        <div class="container">
            <h2 class="section-title fade-in">Handpicked Experiences</h2>
            <p class="intro-text fade-in">
                At Aloma Stay, we believe your holiday should be seamless and extraordinary. 
                Our curated packages combine luxurious accommodation, authentic experiences, 
                and exceptional value. Whether you seek romance, adventure, or cultural 
                immersion, discover the perfect Sri Lankan escape designed just for you.
            </p>
        </div>
    </section>

    <!-- Filter & Sort Section -->
    <section class="filter-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <!-- Mobile Filter Dropdown -->
                    <select class="form-select filter-dropdown" id="mobileFilter">
                        <option value="all">All Packages</option>
                        <option value="stay">Stay Packages</option>
                        <option value="honeymoon">Honeymoon</option>
                        <option value="family">Family</option>
                        <option value="tour">Tour Packages</option>
                        <option value="seasonal">Seasonal Offers</option>
                    </select>
                    
                    <!-- Desktop Filter Tabs -->
                    <ul class="nav nav-pills filter-tabs" id="packageFilter">
                        <li class="nav-item">
                            <button class="nav-link active" data-filter="all">All Packages</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-filter="stay">Stay Packages</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-filter="honeymoon">Honeymoon</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-filter="family">Family</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-filter="tour">Tour Packages</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-filter="seasonal">Seasonal Offers</button>
                        </li>
                    </ul>
                </div>
                
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <label for="sortSelect" class="me-2">Sort by:</label>
                    <select class="sort-select" id="sortSelect">
                        <option value="popularity">Popularity</option>
                        <option value="price-low">Price (Low → High)</option>
                        <option value="price-high">Price (High → Low)</option>
                        <option value="duration">Duration</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Listing -->
    <section id="packages-listing" class="bg-soft-beige">
        <div class="container">
            <div class="row" id="packagesContainer">
                <!-- Package -->
                 @foreach ($mtours as $tour)
                <div class="col-lg-4 col-md-6 package-card fade-in" data-category="{{ $tour->type }}">
                    <div class="package-card-inner">
                        <div class="position-relative">
                            <div class="package-badge">{{ $tour->type }}</div>
                             @if ($tour->image)
                            <img src="{{ asset('public/' . $tour->image) }}"  class="package-img" alt="{{ $tour->name }}" loading="lazy">
                            @else
                            <img src="{{ asset('public/images/logo-sm.png') }}"  class="package-img" alt="{{ $tour->name }}" loading="lazy">
                            @endif
                         </div>
                        <div class="package-content">
                            <h4>{{ $tour->name }}</h4>
                            <p class="package-duration"><i class="bi bi-calendar"></i> {{ $tour->nights }} Nights / {{ $tour->days }} Days</p>
                            <p class="text-muted">{{ $tour->slogan }}</p>
                            
                            <div class="highlights-list">
                                <span class="highlight-badge"><i class="bi bi-heart"></i> Romantic Dinner</span>
                                <span class="highlight-badge"><i class="bi bi-flower1"></i> Couples Spa</span>
                                <span class="highlight-badge"><i class="bi bi-gift"></i> Champagne</span>
                            </div>
                            
                            <div class="package-price">
                                ${{ number_format($tour->price, 0) }} <span>/ couple</span>
                            </div>
                            
                            <div class="package-buttons">
                                <a href="/package-details/{{ $tour->id }}" class="btn btn-outline-primary">View Details</a>
                                <a href="booking.html?package={{ $tour->name }}" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
    </section>

    <!-- Featured Package -->
    <section id="featured-package">
        <div class="container">
            <div class="featured-package fade-in">
                <div class="featured-badge">Featured Package</div>
                
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="featured-image">
                            <img src="https://images.unsplash.com/photo-1523480717984-24cba35ae1eb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                                 alt="Ultimate Sri Lankan Experience" loading="lazy">
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <h3>Ultimate Sri Lankan Experience</h3>
                        <p class="package-duration"><i class="bi bi-calendar"></i> 7 Nights / 8 Days</p>
                        <p>Our most comprehensive package combining cultural heritage, wildlife, beaches, and hill country in one unforgettable journey.</p>
                        
                        <ul class="featured-list">
                            <li>Luxury accommodation throughout</li>
                            <li>Private chauffeur and guide</li>
                            <li>Cultural triangle tour with all entry fees</li>
                            <li>Wildlife safari in Yala National Park</li>
                            <li>Tea plantation visit in Nuwara Eliya</li>
                            <li>Beach relaxation in Mirissa</li>
                            <li>All meals and domestic transfers included</li>
                        </ul>
                        
                        <div class="package-price">$1,850 <span>/ person</span></div>
                        
                        <div class="mt-4">
                            <a href="/package-details" class="btn btn-outline-primary me-3">View Details</a>
                            <a href="booking.html?package=ultimate-experience" class="btn btn-primary">Reserve This Package</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Our Packages -->
    <section id="benefits">
        <div class="container">
            <h2 class="section-title fade-in">Why Choose Our Packages</h2>
            <p class="intro-text fade-in">Experience the Aloma Stay difference with our thoughtfully curated packages</p>
            
            <div class="row g-4 mt-5">
                <div class="col-md-6 col-lg-3 fade-in">
                    <div class="benefit-item">
                        <i class="bi bi-currency-dollar benefit-icon"></i>
                        <h5>Best Value Deals</h5>
                        <p>Our packages offer exceptional value with premium inclusions at competitive prices.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 fade-in">
                    <div class="benefit-item">
                        <i class="bi bi-gear benefit-icon"></i>
                        <h5>Customizable Experiences</h5>
                        <p>Tailor any package to match your preferences, interests, and travel style.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 fade-in">
                    <div class="benefit-item">
                        <i class="bi bi-compass benefit-icon"></i>
                        <h5>Expert Local Guides</h5>
                        <p>Knowledgeable guides provide authentic insights into Sri Lanka's culture and history.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 fade-in">
                    <div class="benefit-item">
                        <i class="bi bi-house-door benefit-icon"></i>
                        <h5>Premium Accommodation</h5>
                        <p>Stay in our luxurious rooms and suites with all amenities for complete comfort.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="cta">
        <div class="container">
            <div class="package-cta-section fade-in">
                <h3>Can't find the perfect package?</h3>
                <p>
                    Our travel experts can create a bespoke itinerary tailored specifically to your interests, 
                    preferences, and budget. Experience Sri Lanka your way.
                </p>
                
                <div class="package-cta-buttons">
                    <a href="contact.html?request=custom" class="btn btn-primary btn-lg">Customize Your Package</a>
                    <a href="contact.html" class="btn package-btn-outline-light btn-lg">Contact Our Team</a>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
<!-- Custom JavaScript -->
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
            
            // Filter section scroll effect
            const filterSection = document.querySelector('.filter-section');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 100) {
                    filterSection.classList.add('scrolled');
                } else {
                    filterSection.classList.remove('scrolled');
                }
            });
            
            // Package Filtering
            const filterButtons = document.querySelectorAll('#packageFilter .nav-link');
            const mobileFilter = document.getElementById('mobileFilter');
            const packageCards = document.querySelectorAll('.package-card');
            
            // Filter function
            const filterPackages = (filterValue) => {
                packageCards.forEach(card => {
                    const categories = card.getAttribute('data-category');
                    
                    if (filterValue === 'all' || categories.includes(filterValue)) {
                        card.classList.remove('hidden');
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }, 10);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            card.classList.add('hidden');
                        }, 300);
                    }
                });
                
                // Update active button state
                filterButtons.forEach(button => {
                    if (button.getAttribute('data-filter') === filterValue) {
                        button.classList.add('active');
                    } else {
                        button.classList.remove('active');
                    }
                });
                
                // Update mobile filter
                mobileFilter.value = filterValue;
            };
            
            // Desktop filter button clicks
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filterValue = this.getAttribute('data-filter');
                    filterPackages(filterValue);
                });
            });
            
            // Mobile filter change
            mobileFilter.addEventListener('change', function() {
                filterPackages(this.value);
            });
            
            // Package Sorting
            const sortSelect = document.getElementById('sortSelect');
            sortSelect.addEventListener('change', function() {
                const sortValue = this.value;
                const packagesContainer = document.getElementById('packagesContainer');
                const cards = Array.from(packageCards).filter(card => !card.classList.contains('hidden'));
                
                cards.sort((a, b) => {
                    const aPrice = parseInt(a.querySelector('.package-price').textContent.replace(/\D/g, ''));
                    const bPrice = parseInt(b.querySelector('.package-price').textContent.replace(/\D/g, ''));
                    
                    switch(sortValue) {
                        case 'price-low':
                            return aPrice - bPrice;
                        case 'price-high':
                            return bPrice - aPrice;
                        case 'duration':
                            // Extract duration number for sorting
                            const aDuration = parseInt(a.querySelector('.package-duration').textContent.match(/\d+/)[0]);
                            const bDuration = parseInt(b.querySelector('.package-duration').textContent.match(/\d+/)[0]);
                            return aDuration - bDuration;
                        default: // popularity (default order)
                            return 0;
                    }
                });
                
                // Reorder cards in container
                cards.forEach(card => {
                    packagesContainer.appendChild(card);
                });
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