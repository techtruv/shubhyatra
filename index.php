<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Shubh Yatra - Your premier travel agency in Raipur, Chhattisgarh. Specialized in Indigo flight bookings and curated tour packages.">
    <meta name="keywords" content="Travel Agency in Raipur, Indigo flight bookings Raipur, Best tour operators in Chhattisgarh, Avanti Vihar travel services, International holiday packages">
    <title>Shubh Yatra | Your Gateway to Seamless Skies & Unforgettable Journeys</title>
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- ==================== NAVIGATION ==================== -->
    <nav class="navbar navbar-expand-lg navbar-custom" id="navbar-example">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="shubhyatra.jpeg" alt="Shubh Yatra Logo">
                <div class="brand-text">
                    Shubh Yatra
                    <span>Travel Agency</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tour-plans">Tour Plans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="#contact" class="btn btn-book">Book Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ==================== HERO SLIDER SECTION ==================== -->
    <section class="hero-slider" id="home">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1920&q=80');">
                        <div class="hero-overlay"></div>
                        <div class="carousel-caption">
                            <div class="hero-badge" data-aos="fadeInDown" data-aos-duration="1000">
                                <span><i class="bi bi-airplane-engines me-2"></i>Premier Travel Agency</span>
                            </div>
                            <h1 class="hero-title" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="200">
                                Your Gateway to <span>Seamless Skies</span> and Unforgettable Journeys
                            </h1>
                            <p class="hero-subtitle" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="400">
                                Experience the best of Indigo's efficiency paired with Shubh Yatra's personalized tour expertise.
                            </p>
                            <div class="hero-buttons" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="600">
                                <a href="#services" class="btn-hero-primary">Explore Services</a>
                                <a href="#contact" class="btn-hero-secondary">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1506929562872-bb421503ef21?w=1920&q=80');">
                        <div class="hero-overlay"></div>
                        <div class="carousel-caption">
                            <div class="hero-badge" data-aos="fadeInDown" data-aos-duration="1000">
                                <span><i class="bi bi-globe me-2"></i>International Destinations</span>
                            </div>
                            <h1 class="hero-title" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="200">
                                Discover <span>Exotic Destinations</span> Across the Globe
                            </h1>
                            <p class="hero-subtitle" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="400">
                                From Dubai's luxury to Thailand's beaches - we curate your perfect vacation.
                            </p>
                            <div class="hero-buttons" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="600">
                                <a href="#services" class="btn-hero-primary">View Packages</a>
                                <a href="#contact" class="btn-hero-secondary">Get Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1523906834658-6e24ef2386f9?w=1920&q=80');">
                        <div class="hero-overlay"></div>
                        <div class="carousel-caption">
                            <div class="hero-badge" data-aos="fadeInDown" data-aos-duration="1000">
                                <span><i class="bi bi-briefcase me-2"></i>Corporate Travel Solutions</span>
                            </div>
                            <h1 class="hero-title" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="200">
                                Seamless <span>Business Travel</span> with Indigo
                            </h1>
                            <p class="hero-subtitle" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="400">
                                Corporate bookings, 6E add-ons, and instant support for all your business travel needs.
                            </p>
                            <div class="hero-buttons" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="600">
                                <a href="#services" class="btn-hero-primary">Corporate Booking</a>
                                <a href="#contact" class="btn-hero-secondary">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="scroll-indicator">
            <a href="#about">
                <i class="bi bi-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- ==================== ABOUT SECTION ==================== -->
    <section class="section about-section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fadeInRight" data-aos-duration="1000">
                    <div class="about-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1920&q=80" alt="About Shubh Yatra - Travel Agency Team">
                        <div class="about-floating-card">
                            <div class="icon">
                                <i class="bi bi-award"></i>
                            </div>
                            <div class="text">
                                <h4>10+</h4>
                                <p>Years Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fadeInLeft" data-aos-duration="1000" data-aos-delay="200">
                    <div class="about-content">
                        <h2>About <span>Shubh Yatra</span></h2>
                        <p>At Shubh Yatra, we believe travel should be more than just reaching a destination; it should be an experience of comfort and trust. Located in the heart of Avanti Vihar, Raipur, we are a premier travel agency specializing in tailored travel solutions.</p>
                        <p>Whether you are looking for the punctual, "on-time" excellence of Indigo Airlines or a meticulously planned international holiday, our team ensures professional handling of every detail.</p>
                        <ul class="about-features">
                            <li><i class="bi bi-check-circle-fill"></i> Expert travel consultants with years of experience</li>
                            <li><i class="bi bi-check-circle-fill"></i> Specialized Indigo flight booking services</li>
                            <li><i class="bi bi-check-circle-fill"></i> Customized tour packages for every budget</li>
                            <li><i class="bi bi-check-circle-fill"></i> 24/7 customer support and assistance</li>
                        </ul>
                        <div class="about-stats">
                            <div class="stat-item">
                                <h3 class="counter" data-target="5000">0</h3>
                                <p>Happy Travelers</p>
                            </div>
                            <div class="stat-item">
                                <h3 class="counter" data-target="1200">0</h3>
                                <p>Flights Booked</p>
                            </div>
                            <div class="stat-item">
                                <h3 class="counter" data-target="150">0</h3>
                                <p>Tour Packages</p>
                            </div>
                        </div>
                        <a href="#contact" class="btn btn-about mt-4">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== TOUR PLANS SECTION ==================== -->
    <section class="section tour-plans-section" id="tour-plans">
        <div class="container">
            <div class="services-header" data-aos="fadeInUp" data-aos-duration="1000">
                <h2 class="section-title">Popular Tour Plans</h2>
                <p class="section-subtitle mx-auto mt-4">Explore our carefully curated tour packages designed for unforgettable experiences.</p>
            </div>
            
            <div class="row g-4">
                <!-- Tour Plan 1 -->
                <div class="col-md-6 col-lg-4" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="200">
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="img/dubai.jpg" alt="Dubai Tour">
                            <div class="tour-badge">Best Seller</div>
                        </div>
                        <div class="tour-content">
                            <h4>Dubai Luxury Tour</h4>
                            <p>5 Days - 4 Nights</p>
                            <ul class="tour-features">
                                <li><i class="bi bi-clock"></i> 5 Days / 4 Nights</li>
                                <li><i class="bi bi-building"></i> Burj Khalifa, Desert Safari</li>
                                <li><i class="bi bi-airplane"></i> Flight + Hotel Included</li>
                            </ul>
                            <a href="#contact" class="btn-tour">Book Now</a>
                        </div>
                    </div>
                </div>
                
                <!-- Tour Plan 2 -->
                <div class="col-md-6 col-lg-4" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="300">
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="img/Featured-image-Maya-Bay-Krabi-Thailand.jpg" alt="Thailand Tour">
                            <div class="tour-badge popular">Popular</div>
                        </div>
                        <div class="tour-content">
                            <h4>Thailand Adventure</h4>
                            <p>6 Days - 5 Nights</p>
                            <ul class="tour-features">
                                <li><i class="bi bi-clock"></i> 6 Days / 5 Nights</li>
                                <li><i class="bi bi-building"></i> Bangkok, Pattaya</li>
                                <li><i class="bi bi-airplane"></i> Flight + Hotel Included</li>
                            </ul>
                            <a href="#contact" class="btn-tour">Book Now</a>
                        </div>
                    </div>
                </div>
                
                <!-- Tour Plan 3 -->
                <div class="col-md-6 col-lg-4" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="400">
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="img/BAL7.jpg" alt="Bali Tour">
                            <div class="tour-badge">Trending</div>
                        </div>
                        <div class="tour-content">
                            <h4>Bali Paradise Escape</h4>
                            <p>5 Days - 4 Nights</p>
                            <ul class="tour-features">
                                <li><i class="bi bi-clock"></i> 5 Days / 4 Nights</li>
                                <li><i class="bi bi-building"></i> Kuta, Ubud</li>
                                <li><i class="bi bi-airplane"></i> Flight + Hotel Included</li>
                            </ul>
                            <a href="#contact" class="btn-tour">Book Now</a>
                        </div>
                    </div>
                </div>
                
                <!-- Tour Plan 4 -->
                <div class="col-md-6 col-lg-4" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="200">
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="img/rajsthan.jpg" alt="Rajasthan Tour">
                        </div>
                        <div class="tour-content">
                            <h4>Rajasthan Heritage Tour</h4>
                            <p>7 Days - 6 Nights</p>
                            <ul class="tour-features">
                                <li><i class="bi bi-clock"></i> 7 Days / 6 Nights</li>
                                <li><i class="bi bi-building"></i> Jaipur, Udaipur, Jodhpur</li>
                                <li><i class="bi bi-airplane"></i> Flight + Hotel Included</li>
                            </ul>
                            <a href="#contact" class="btn-tour">Book Now</a>
                        </div>
                    </div>
                </div>
                
                <!-- Tour Plan 5 -->
                <div class="col-md-6 col-lg-4" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="300">
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="img/beaches-goa.jpg" alt="Goa Tour">
                            <div class="tour-badge">Beach</div>
                        </div>
                        <div class="tour-content">
                            <h4>Goa Beach Vacation</h4>
                            <p>5 Days - 4 Nights</p>
                            <ul class="tour-features">
                                <li><i class="bi bi-clock"></i> 5 Days / 4 Nights</li>
                                <li><i class="bi bi-building"></i> North & South Goa</li>
                                <li><i class="bi bi-airplane"></i> Flight + Hotel Included</li>
                            </ul>
                            <a href="#contact" class="btn-tour">Book Now</a>
                        </div>
                    </div>
                </div>
                
                <!-- Tour Plan 6 -->
                <div class="col-md-6 col-lg-4" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="400">
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="img/himachal-trip.png" alt="Himachal Tour">
                            <div class="tour-badge">Adventure</div>
                        </div>
                        <div class="tour-content">
                            <h4>Himachal Mountain Tour</h4>
                            <p>6 Days - 5 Nights</p>
                            <ul class="tour-features">
                                <li><i class="bi bi-clock"></i> 6 Days / 5 Nights</li>
                                <li><i class="bi bi-building"></i> Shimla, Manali</li>
                                <li><i class="bi bi-airplane"></i> Flight + Hotel Included</li>
                            </ul>
                            <a href="#contact" class="btn-tour">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== SERVICES SECTION ==================== -->
    <section class="section services-section" id="services">
        <div class="container">
            <div class="services-header" data-aos="fadeInUp" data-aos-duration="1000">
                <h2 class="section-title">Our Core Services</h2>
                <p class="section-subtitle mx-auto mt-4">Discover comprehensive travel solutions tailored to your needs, from business flights to dream vacations.</p>
            </div>

            <!-- Indigo Services -->
            <div class="service-category" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="200">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="bi bi-airplane-engines"></i>
                    </div>
                    <div>
                        <h3 class="category-title">Specialized Indigo Ticketing & Services</h3>
                        <p class="category-desc">Your trusted partner for seamless Indigo flight bookings</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card">
                            <div class="service-number">01</div>
                            <div class="service-icon">
                                <i class="bi bi-briefcase-fill"></i>
                            </div>
                            <h4>Corporate Bookings</h4>
                            <p>Streamlined bulk booking solutions for business teams with dedicated account management, preferential corporate rates, and priority support.</p>
                            <ul class="service-list">
                                <li><i class="bi bi-check-circle-fill"></i> Bulk flight reservations</li>
                                <li><i class="bi bi-check-circle-fill"></i> Corporate account handling</li>
                                <li><i class="bi bi-check-circle-fill"></i> Flexible payment options</li>
                                <li><i class="bi bi-check-circle-fill"></i> Dedicated relationship manager</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card featured">
                            <div class="service-number">02</div>
                            <div class="service-icon">
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <h4>6E Add-ons</h4>
                            <p>Elevate your travel experience with premium add-on services designed for maximum comfort and convenience throughout your journey.</p>
                            <ul class="service-list">
                                <li><i class="bi bi-check-circle-fill"></i> Priority check-in & boarding</li>
                                <li><i class="bi bi-check-circle-fill"></i> Preferred seat selection</li>
                                <li><i class="bi bi-check-circle-fill"></i> Pre-book delicious meals</li>
                                <li><i class="bi bi-check-circle-fill"></i> Extra baggage allowance</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card">
                            <div class="service-number">03</div>
                            <div class="service-icon">
                                <i class="bi bi-headset"></i>
                            </div>
                            <h4>Instant Support</h4>
                            <p>Round-the-clock assistance for all your travel needs. We're here to help with flight changes, cancellations, and emergencies.</p>
                            <ul class="service-list">
                                <li><i class="bi bi-check-circle-fill"></i> 24/7 dedicated support</li>
                                <li><i class="bi bi-check-circle-fill"></i> Quick rebooking assistance</li>
                                <li><i class="bi bi-check-circle-fill"></i> Hassle-free refunds</li>
                                <li><i class="bi bi-check-circle-fill"></i> Emergency travel support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tour Packages -->
            <div class="service-category" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="400">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="bi bi-map-fill"></i>
                    </div>
                    <div>
                        <h3 class="category-title">Bespoke Tour Packages</h3>
                        <p class="category-desc">Curated experiences that create lasting memories</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card">
                            <div class="service-number">01</div>
                            <div class="service-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <h4>Domestic Wonders</h4>
                            <p>Discover the incredible diversity of India with our meticulously planned domestic packages covering heritage, nature, and adventure.</p>
                            <ul class="service-list">
                                <li><i class="bi bi-check-circle-fill"></i> Heritage tours of Rajasthan</li>
                                <li><i class="bi bi-check-circle-fill"></i> Serene backwaters of Kerala</li>
                                <li><i class="bi bi-check-circle-fill"></i> Majestic mountains of Himachal</li>
                                <li><i class="bi bi-check-circle-fill"></i> Spiritual journeys across India</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card featured">
                            <div class="service-number">02</div>
                            <div class="service-icon">
                                <i class="bi bi-globe-americas"></i>
                            </div>
                            <h4>International Escapes</h4>
                            <p>All-inclusive packages to the world's most coveted destinations. Experience luxury, adventure, and culture like never before.</p>
                            <ul class="service-list">
                                <li><i class="bi bi-check-circle-fill"></i> Dubai luxury experiences</li>
                                <li><i class="bi bi-check-circle-fill"></i> Thailand tropical adventures</li>
                                <li><i class="bi bi-check-circle-fill"></i> Bali island paradise</li>
                                <li><i class="bi bi-check-circle-fill"></i> Singapore & Malaysia tours</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card">
                            <div class="service-number">03</div>
                            <div class="service-icon">
                                <i class="bi bi-compass"></i>
                            </div>
                            <h4>Local Chhattisgarh Tours</h4>
                            <p>Explore the hidden treasures of our home state with experienced local guides, showcasing the best of Chhattisgarh to the world.</p>
                            <ul class="service-list">
                                <li><i class="bi bi-check-circle-fill"></i> Ancient temple tours</li>
                                <li><i class="bi bi-check-circle-fill"></i> Wildlife safaris in national parks</li>
                                <li><i class="bi bi-check-circle-fill"></i> Rich cultural experiences</li>
                                <li><i class="bi bi-check-circle-fill"></i> Tribal heritage exploration</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== WHY CHOOSE US ==================== -->
    <section class="section why-choose-section" id="why-choose">
        <div class="container">
            <div class="services-header" data-aos="fadeInUp" data-aos-duration="1000">
                <h2 class="section-title">Why Choose Shubh Yatra</h2>
                <p class="section-subtitle mx-auto mt-4">Experience the difference of traveling with a trusted partner who puts your needs first.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="200">
                    <div class="why-card">
                        <div class="why-card-icon">
                            <i class="bi bi-person-badge"></i>
                        </div>
                        <div class="why-card-number">01</div>
                        <h4>Professional Expertise</h4>
                        <p>Years of industry knowledge ensuring the best routes, competitive rates, and seamless travel experiences.</p>
                        <ul class="why-features">
                            <li><i class="bi bi-check"></i> Expert travel consultants</li>
                            <li><i class="bi bi-check"></i> Industry experience</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="300">
                    <div class="why-card featured">
                        <div class="why-card-icon">
                            <i class="bi bi-patch-check"></i>
                        </div>
                        <div class="why-card-number">02</div>
                        <h4>Trusted & Reliable</h4>
                        <p>Committed to transparency, safety, and customer satisfaction on every journey you take with us.</p>
                        <ul class="why-features">
                            <li><i class="bi bi-check"></i> Transparent pricing</li>
                            <li><i class="bi bi-check"></i> Customer satisfaction</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="400">
                    <div class="why-card">
                        <div class="why-card-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="why-card-number">03</div>
                        <h4>Hyper-Local Presence</h4>
                        <p>Visit us at our Raipur office for face-to-face consultation and personalized travel planning.</p>
                        <ul class="why-features">
                            <li><i class="bi bi-check"></i> In-person consultation</li>
                            <li><i class="bi bi-check"></i> Raipur-based office</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="500">
                    <div class="why-card">
                        <div class="why-card-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="why-card-number">04</div>
                        <h4>24/7 Support</h4>
                        <p>Round-the-clock assistance for all your travel needs, from booking to and beyond your journey.</p>
                        <ul class="why-features">
                            <li><i class="bi bi-check"></i> 24/7 customer support</li>
                            <li><i class="bi bi-check"></i> Emergency assistance</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Trust Badges -->
            <div class="trust-badges" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="600">
                <div class="trust-badge">
                    <i class="bi bi-award-fill"></i>
                    <span>10+ Years Experience</span>
                </div>
                <div class="trust-badge">
                    <i class="bi bi-people-fill"></i>
                    <span>5000+ Happy Travelers</span>
                </div>
                <div class="trust-badge">
                    <i class="bi bi-airplane"></i>
                    <span>1200+ Flights Booked</span>
                </div>
                <div class="trust-badge">
                    <i class="bi bi-globe"></i>
                    <span>50+ Destinations</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== GALLERY SECTION ==================== -->
    <section class="section gallery-section" id="gallery">
        <div class="container">
            <div class="services-header" data-aos="fadeInUp" data-aos-duration="1000">
                <h2 class="section-title">Our Travel Gallery</h2>
                <p class="section-subtitle mx-auto mt-4">Explore breathtaking moments from our travelers' journeys across the globe.</p>
            </div>
            
            <div class="gallery-grid">
                <div class="gallery-item" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1523906834658-6e24ef2386f9?w=600&q=80" alt="Dubai">
                    <div class="gallery-overlay">
                        <i class="bi bi-instagram"></i>
                        <span>Dubai, UAE</span>
                    </div>
                </div>
                <div class="gallery-item" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?w=600&q=80" alt="Thailand">
                    <div class="gallery-overlay">
                        <i class="bi bi-instagram"></i>
                        <span>Thailand</span>
                    </div>
                </div>
                <div class="gallery-item" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=600&q=80" alt="Bali">
                    <div class="gallery-overlay">
                        <i class="bi bi-instagram"></i>
                        <span>Bali, Indonesia</span>
                    </div>
                </div>
                <div class="gallery-item" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="400">
                    <img src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?w=600&q=80" alt="Rajasthan">
                    <div class="gallery-overlay">
                        <i class="bi bi-instagram"></i>
                        <span>Rajasthan, India</span>
                    </div>
                </div>
                <div class="gallery-item" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="500">
                    <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600&q=80" alt="Himachal">
                    <div class="gallery-overlay">
                        <i class="bi bi-instagram"></i>
                        <span>Himachal Pradesh</span>
                    </div>
                </div>
                <div class="gallery-item" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="600">
                    <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?w=600&q=80" alt="Goa">
                    <div class="gallery-overlay">
                        <i class="bi bi-instagram"></i>
                        <span>Goa, India</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FAQ SECTION ==================== -->
    <section class="section faq-section" id="faq">
        <div class="container">
            <div class="services-header" data-aos="fadeInUp" data-aos-duration="1000">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle mx-auto mt-4">Find answers to common questions about our travel services.</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="faq-container">
                        <div class="faq-item" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="100">
                            <button class="faq-question">
                                <span>How do I book a flight with Shubh Yatra?</span>
                                <i class="bi bi-plus-lg"></i>
                            </button>
                            <div class="faq-answer">
                                <p>Booking with Shubh Yatra is simple! You can either fill out our contact form, call us directly at +91 9407993413, or visit our office in Avanti Vihar, Raipur. Our team will assist you with the best available options and handle all the booking formalities.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="200">
                            <button class="faq-question">
                                <span>What documents are required for international travel?</span>
                                <i class="bi bi-plus-lg"></i>
                            </button>
                            <div class="faq-answer">
                                <p>For international travel, you typically need a valid passport with at least 6 months validity, appropriate visa for the destination country, return ticket, travel insurance, and hotel booking confirmation. Our team will guide you through the entire documentation process.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="300">
                            <button class="faq-question">
                                <span>Can you help with visa application?</span>
                                <i class="bi bi-plus-lg"></i>
                            </button>
                            <div class="faq-answer">
                                <p>Yes! We provide complete assistance with visa application process for all major destinations. Our team will help you prepare the required documents, fill application forms, and guide you through the entire process to ensure a smooth experience.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="400">
                            <button class="faq-question">
                                <span>What is your cancellation and refund policy?</span>
                                <i class="bi bi-plus-lg"></i>
                            </button>
                            <div class="faq-answer">
                                <p>Our cancellation policy varies based on the airline and hotel policies. Generally, cancellations made 7+ days before departure receive a full refund (minus processing fees). We assist you in understanding the specific terms and help process refunds efficiently.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="500">
                            <button class="faq-question">
                                <span>Do you provide travel insurance?</span>
                                <i class="bi bi-plus-lg"></i>
                            </button>
                            <div class="faq-answer">
                                <p>Yes, we strongly recommend travel insurance for all trips. We offer comprehensive travel insurance covers including trip cancellation, medical emergencies, lost baggage, and flight delays. Our team will help you choose the best plan for your journey.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="600">
                            <button class="faq-question">
                                <span>What makes Shubh Yatra different from other travel agencies?</span>
                                <i class="bi bi-plus-lg"></i>
                            </button>
                            <div class="faq-answer">
                                <p>At Shubh Yatra, we prioritize personalized service, competitive pricing, and customer satisfaction. With our local presence in Raipur, expertise in Indigo bookings, and 24/7 support, we ensure every journey is smooth and memorable. Our team goes above and beyond to create unforgettable travel experiences.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== TESTIMONIALS SECTION ==================== -->
    <section class="section testimonials-section" id="testimonials">
        <div class="container">
            <div class="services-header" data-aos="fadeInUp" data-aos-duration="1000">
                <h2 class="section-title">What Our Clients Say</h2>
                <p class="section-subtitle mx-auto mt-4">Hear from our satisfied customers about their travel experiences with Shubh Yatra.</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="200">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">"Shubh Yatra made my business trip to Dubai incredibly smooth. Their Indigo corporate booking service is exceptional. Will definitely use them for all future travel!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&q=80" alt="Rajiv Mehta">
                            </div>
                            <div class="author-info">
                                <h5>Rajiv Mehta</h5>
                                <span>Business Executive, Raipur</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="300">
                    <div class="testimonial-card featured">
                        <div class="testimonial-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">"Our family trip to Kerala was absolutely magical! Shubh Yatra planned every detail perfectly. The accommodation and itinerary were beyond our expectations."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&q=80" alt="Priya Sharma">
                            </div>
                            <div class="author-info">
                                <h5>Priya Sharma</h5>
                                <span>Housewife, Raipur</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="fadeInUp" data-aos-duration="1000" data-aos-delay="400">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">"Excellent service for international travel! They helped us plan our Thailand adventure with great deals on flights and hotels. Highly recommended!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&q=80" alt="Amit Verma">
                            </div>
                            <div class="author-info">
                                <h5>Amit Verma</h5>
                                <span>Software Engineer, Bilaspur</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CONTACT FORM SECTION ==================== -->
    <section class="section contact-section" id="contact">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5" data-aos="fadeInRight" data-aos-duration="1000">
                    <div class="contact-info-wrapper">
                        <h2 class="section-title">Get In Touch</h2>
                        <p class="contact-desc">Have questions about your travel plans? Our team is here to help you plan your perfect trip.</p>
                        
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div>
                                    <h5>Visit Our Office</h5>
                                    <p>Infront of Car Arena, 1st Floor,<br>Avanti Vihar, Raipur,<br>Chhattisgarh - 492001</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div>
                                    <h5>Call Us</h5>
                                    <p><a href="tel:+919407993413">+91 9407993413</a></p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                                <div>
                                    <h5>Email Us</h5>
                                    <p><a href="mailto:info@shubyatra.com">info@shubyatra.com</a></p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="bi bi-clock-fill"></i>
                                </div>
                                <div>
                                    <h5>Office Hours</h5>
                                    <p>Mon - Sat: 9:00 AM - 7:00 PM<br>Sunday: 10:00 AM - 2:00 PM</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="social-links">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-7" data-aos="fadeInLeft" data-aos-duration="1000" data-aos-delay="200">
                    <div class="contact-form-wrapper">
                        <h3>Send Us a Message</h3>
                        <p>Fill out the form below and we'll get back to you within 24 hours.</p>
                        
                        <form class="contact-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Your Name *</label>
                                        <input type="text" id="name" class="form-control" placeholder="John Doe" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address *</label>
                                        <input type="email" id="email" class="form-control" placeholder="john@example.com" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" id="phone" class="form-control" placeholder="+91 9876543210">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="service">Interested Service</label>
                                        <select id="service" class="form-select">
                                            <option value="">Select a service</option>
                                            <option value="flight">Flight Booking</option>
                                            <option value="domestic">Domestic Tour</option>
                                            <option value="international">International Tour</option>
                                            <option value="corporate">Corporate Booking</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="destination">Destination Interest</label>
                                        <input type="text" id="destination" class="form-control" placeholder="e.g., Dubai, Thailand, Kerala">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="travelers">Number of Travelers</label>
                                        <input type="number" id="travelers" class="form-control" placeholder="2" min="1">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message">Your Message *</label>
                                        <textarea id="message" class="form-control" rows="5" placeholder="Tell us about your travel plans..." required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn-submit">
                                        <i class="bi bi-send-fill me-2"></i> Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FLOATING BUTTONS ==================== -->
    <div class="floating-buttons">
        <a href="tel:+919407993413" class="floating-btn call-btn" title="Call Us">
            <i class="bi bi-telephone-fill"></i>
        </a>
        <a href="https://wa.me/919407993413" target="_blank" class="floating-btn whatsapp-btn" title="WhatsApp">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>

    <!-- ==================== FOOTER ==================== -->
    <footer class="footer-section" id="contact">
        <!-- CTA Section -->
        <div class="cta-banner">
            <div class="cta-shapes">
                <div class="cta-shape shape-1"></div>
                <div class="cta-shape shape-2"></div>
                <div class="cta-shape shape-3"></div>
            </div>
            <div class="cta-banner-content">
                <div class="cta-icon">
                    <i class="bi bi-airplane-engines"></i>
                </div>
                <h2>Ready to Start Your Journey?</h2>
                <p>Let us transform your travel dreams into reality. Get personalized travel solutions from our experts.</p>
                <div class="cta-buttons">
                    <a href="#contact" class="btn-cta-primary">
                        <i class="bi bi-calendar-check me-2"></i>Book Consultation
                    </a>
                    <a href="tel:+919407993413" class="btn-cta-secondary">
                        <i class="bi bi-telephone me-2"></i>Call Now
                    </a>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <a class="footer-brand" href="#">
                        <img src="shubhyatra.jpeg" alt="Shubh Yatra Logo">
                        <div class="brand-text">
                            Shubh Yatra
                            <span>Travel Agency</span>
                        </div>
                    </a>
                    <div class="footer-about">
                        <p>Your premier travel agency in Raipur, Chhattisgarh. We specialize in Indigo flight bookings and curated tour packages, making every journey a memorable experience.</p>
                        <div class="footer-social">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Our Services</a></li>
                        <li><a href="#tour-plans">Tour Plans</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#why-choose">Why Choose Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h4 class="footer-title">Contact Information</h4>
                    <div class="footer-contact">
                        <div class="footer-contact-item">
                            <i class="bi bi-geo-alt"></i>
                            <p>Infront of Car Arena, 1st Floor,<br>Avanti Vihar, Raipur,<br>Chhattisgarh - 492001</p>
                        </div>
                        <div class="footer-contact-item">
                            <i class="bi bi-telephone"></i>
                            <p><a href="tel:+919407993413" style="color: inherit; text-decoration: none;">+91 9407993413</a></p>
                        </div>
                        <div class="footer-contact-item">
                            <i class="bi bi-envelope"></i>
                            <p><a href="mailto:info@shubyatra.com" style="color: inherit; text-decoration: none;">info@shubyatra.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Shubh Yatra. All Rights Reserved. | Travel Agency in Raipur | Best Tour Operators in Chhattisgarh</p>
                <p class="developed-by">Designed & Developed by <a href="https://itmingo.com/" target="_blank" rel="noopener noreferrer">IT Mingo</a></p>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <!-- Bootstrap 5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Initialize AOS Animation
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Navbar Scroll Effect
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.navbar-custom').addClass('scrolled');
            } else {
                $('.navbar-custom').removeClass('scrolled');
            }
        });

        // Smooth Scroll for Navigation Links
        $('.nav-link, .scroll-indicator a, .btn-book, .btn-hero-primary, .btn-hero-secondary, .btn-cta, .footer-links a').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 70
                }, 1000);
            }
        });

        // Close Mobile Menu on Link Click
        $('.nav-link').on('click', function() {
            $('.navbar-collapse').collapse('hide');
        });

        // Counter Animation
        $('.counter').each(function() {
            var $this = $(this);
            var target = parseInt($this.data('target'));
            var speed = 2000;

            $(window).scroll(function() {
                var position = $this.offset().top;
                var windowBottom = $(window).scrollTop() + $(window).height();

                if (windowBottom > position && !$this.hasClass('counted')) {
                    $this.addClass('counted');
                    $({
                        countNum: 0
                    }).animate({
                        countNum: target
                    }, {
                        duration: speed,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(target);
                        }
                    });
                }
            });
        });

        // Parallax Effect for Hero Section
        $(window).scroll(function() {
            var scrollPosition = $(window).scrollTop();
            $('.hero-section::before').css('transform', 'translateY(' + (scrollPosition * 0.5) + 'px)');
        });

        // Add animation to service cards
        $('.service-card').hover(function() {
            $(this).find('.service-icon').addClass('animate__animated animate__pulse');
        }, function() {
            $(this).find('.service-icon').removeClass('animate__animated animate__pulse');
        });

        // FAQ Accordion
        $('.faq-question').click(function() {
            var $item = $(this).parent();
            var $answer = $item.find('.faq-answer');
            
            if ($item.hasClass('active')) {
                $item.removeClass('active');
                $answer.css('max-height', '0');
            } else {
                $('.faq-item').removeClass('active');
                $('.faq-answer').css('max-height', '0');
                $item.addClass('active');
                $answer.css('max-height', $answer.prop('scrollHeight') + 'px');
            }
        });
    </script>
</body>
</html>
