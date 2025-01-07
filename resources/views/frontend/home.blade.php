<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUK Autosolutions - Your Trusted Workshop</title>
    <style>
        /* Reset default browser styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        /* Smooth scrolling effect */
    html {
        scroll-behavior: smooth;
    }

        body {
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Header styling */
        header {
            background-color: #2d2d2d;
            padding: 15px 0;
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo {
            color: #c58805;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            color: #c58805;
            text-decoration: none;
            font-size: 18px;
        }
        

        /* Hero Section */
        .hero {
    background-image: url('./Images/1122.png'); 
    color: #000000;
    padding: 100px 20px;
    text-align: center;
    background-size: cover; 
    background-position: center; 
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #050505;
            color: #c58805;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.1rem;
        }

        .btn:hover {
            background-color: #666;
        }

        /* Services Section */
        .services, .about, .testimonials, .contact {
            padding: 60px 20px;
            background-color: #0c0c0c;
            text-align: center;
            color: #fff;
        }

        .services h2, .about h2, .testimonials h2, .contact h2 {
            font-size: 2.5rem;
            color: #c58805;
            margin-bottom: 40px;
        }

        .services-container, .testimonial-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .service-card, .testimonial-card {
            background-color: #1a1a1a;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }

        .service-card img, .testimonial-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .service-card h3, .testimonial-card h3 {
            font-size: 1.5rem;
            margin: 15px 0;
            color: #c58805;
        }

        .service-card p, .testimonial-card p {
            padding: 0 20px 20px;
            color: #ccc;
        }

        /* About Section */
        .about-content {
            max-width: 800px;
            margin: 0 auto;
            color: #ccc;
        }

        /* Special Offers Section */
        .special-offers {
            padding: 60px 20px;
            background-color: #333;
            text-align: center;
            color: #fff;
        }

        .special-offers h2 {
            font-size: 2.5rem;
            color: #c58805;
            margin-bottom: 20px;
        }

        .offer-card {
            background-color: #444;
            color: #c58805;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Contact Form */
        .contact form {
            display: flex;
            flex-direction: column;
            max-width: 600px;
            margin: 0 auto;
        }

        .contact form input, .contact form textarea {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #666;
        }

        .contact form .btn-submit {
            background-color: #c58805;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 1.1rem;
            padding: 10px 0;
        }

        /* Footer */
        footer {
            background-color: #2d2d2d;
            padding: 15px 0;
            color: #fff;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <a href="index.html" class="logo">MUK Autosolutions</a>
            <ul class="nav-links">
                <li><a href="Home">Home</a></li>
                <li><a href="Product">Products</a></li>
                <li><a href="Contact">Contact</a></li>
            </ul>
            <nav class="navbar search">
                <div class="container-fluid">
                    <form class="d-flex position-relative" role="search" id="search-form">
                        <input class="form-control-2" type="search" id="search-input" placeholder="Search" aria-label="Search" autocomplete="off">
                        <button class="searchbtn" type="button" id="search-btn">Search</button>
                        <div id="search-results" class="dropdown-menu position-absolute w-100 mt-2" style="position: absolute; top: 77%; left: 0px; width: 100%; background-color: white; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); display: none; border-radius: 2px; z-index: 10; overflow-y: auto; max-height: 200px;">
                        <!-- Search results will appear here -->
                        <a href="#" style="display: block; padding: 10px; text-decoration: none; color: #333; border-bottom: 1px solid #f1f1f1;">Search Result 1</a>

                        </div>
                    </form>
                </div>
            </nav>
        </nav>
    </header>
    <!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Reliable Auto Solutions for All Your Needs</h1>
        <p>At MUK Autosolutions, we provide quality services and genuine parts for all types of vehicles. Get back on the road with confidence!</p>
        <a href="#services" class="btn">Explore Services</a> 
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services"> 
    <h2>Our Services</h2>
    <div class="services-container">
        <div class="service-card">
            <img src="Images/Engine repair.jpg" alt="Engine Service">
            <h3>Engine Repair</h3>
            <p>Expert engine repairs to keep your vehicle running smoothly.</p>
        </div>
        <div class="service-card">
            <img src="Images\maintainane.avif" alt="Maintenance">
            <h3>Maintenance</h3>
            <p>Comprehensive maintenance services for long-lasting performance.</p>
        </div>
        <div class="service-card">
            <img src="Images\Car-Accessories.webp" alt="Accessories">
            <h3>Auto Accessories</h3>
            <p>Quality accessories to personalize and enhance your vehicle.</p>
        </div>
        <div class="service-card">
            <img src="Images/restoration.jpg" alt="Restoration">
            <h3>Complete Restoration</h3>
            <p>Ground up Restoration of your ensuring each and every aspect of your car</p>
        </div>
        <div class="service-card">
            <img src="Images/Bodywork.jpg" alt="Body Work">
            <h3>Body Work</h3>
            <p>Enhancing your car exterior to it's former glory</p>
        </div>
        <div class="service-card">
            <img src="Images/Electrical.jpg" alt="Electical Servicesx">
            <h3>Electical Services & Diagnostics</h3>
            <p>Resolving your car Electical issues with modren equipment</p>
        </div>
    </div>
</section>


    <!-- About Section -->
    <section class="about">
        <h2>About Us</h2>
        <div class="about-content">
            <p>With over 20 years of experience, MUK Autosolutions has been a trusted partner for vehicle maintenance and repair. Our expert team is dedicated to providing exceptional service to each customer, ensuring their vehicle receives the best care possible.</p>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>Customer Testimonials</h2>
        <div class="testimonial-container">
            <div class="testimonial-card">
                <h3>Ahmed Raza</h3>
                <p>"MUK Autosolutions provided amazing service, and my car has never run better!"</p>
            </div>
            <div class="testimonial-card">
                <h3>Ahsan Khan</h3>
                <p>"Great customer service and expert technicians! Highly recommended."</p>
            </div>
        </div>
    </section>

    <!-- Special Offers Section -->
    <section class="special-offers">
        <h2>Special Offers!</h2>
        <div class="offer-card">
            <p>20% off on all engine repair services for first-time customers!</p>
        </div>
        <div class="offer-card">
            <p>Get a free maintenance check with any service over $100.</p>
        </div>
        <div class="offer-card">
            <p>Get a free oil change with every oil purchase .</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact">
        <h2>For Appointment</h2>
        <form action="#">
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <input type="text" placeholder="Car Make and Model" required>
            <textarea rows="4" placeholder="Service required"></textarea>
            <button type="submit" class="btn-submit">Book Now</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 MUK Autosolutions. All rights reserved.</p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('search-input');
    const searchResults = document.getElementById('search-results');

    searchInput.addEventListener('input', function () {
        const query = searchInput.value.trim();

        if (query.length > 2) {
            fetch(`{{ route('search') }}?query=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    let resultsHTML = '';

                    if (data.products.length > 0) {
                        data.products.forEach(product => {
                            resultsHTML += `
                                <a href="/productDetail/${product.id}" class="dropdown-item">
                                    <img src="{{ asset('storage/') }}/${product.image}" style="width: 50px; height: 50px; margin-right: 10px;" alt="${product.name}">
                                    ${product.name} - $${parseFloat(product.price).toFixed(2)}
                                </a>`;
                        });
                    } else {
                        resultsHTML = '<span class="dropdown-item text-muted">No results found</span>';
                    }

                    searchResults.innerHTML = resultsHTML;
                    searchResults.style.display = 'block';
                });
        } else {
            searchResults.style.display = 'none';
        }
    });

    // Hide results when clicking outside the search area
    document.addEventListener('click', function (e) {
        if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
            searchResults.style.display = 'none';
        }
    });
});

  </script>
   
</body>
</html>