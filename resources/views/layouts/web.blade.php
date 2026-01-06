<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aloma Stay | Where Comfort Meets Timeless Elegance</title>
    <meta name="description" content="Experience luxury boutique accommodation at Aloma Stay. Enjoy world-class amenities, fine dining, and curated tour experiences in Sri Lanka.">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Swiper CSS for sliders -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    
    <!-- Custom CSS -->
     <link rel="stylesheet" href="{{ asset('public/css/style.css') }}" />
     

</head>
<body>
    <!-- WhatsApp Button -->
    <a href="https://wa.me/94771234567?text=Hello%20Aloma%20Stay%2C%20I%27d%20like%20to%20inquire%20about%20a%20booking" class="whatsapp-btn" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ asset('public/images/logo-sm.png') }}" class="img-fluid" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rooms">Rooms</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="#facilities">Facilities</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/packages">Packages</a>
                    </li>

                   
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-primary" href="#booking">Book Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
            @yield('content')
       <!-- Footer -->
    <footer class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h4 class="mb-3">Aloma Stay</h4>
                    <p>Where Comfort Meets Timeless Elegance. Experience luxury boutique hospitality in the heart of Sri Lanka's cultural triangle.</p>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home">Home</a></li>
                        <li class="mb-2"><a href="#rooms">Rooms & Suites</a></li>
                        <li class="mb-2"><a href="#dining">Dining</a></li>
                        <li class="mb-2"><a href="#tours">Tour Packages</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="mb-3">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-geo-alt me-2"></i> 123 Luxury Lane, Cultural Triangle, Sri Lanka</li>
                        <li class="mb-2"><i class="bi bi-telephone me-2"></i> +94 77 123 4567</li>
                        <li class="mb-2"><i class="bi bi-envelope me-2"></i> reservations@alomastay.com</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5 class="mb-3">Newsletter</h5>
                    <p>Subscribe to receive updates on special offers and events.</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Your email">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                </div>
            </div>
            
            <div class="copyright pt-4">
                <p class="mb-0">&copy; <span id="currentYear"></span> Aloma Stay. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
      @yield('script')
    
</body>
</html>