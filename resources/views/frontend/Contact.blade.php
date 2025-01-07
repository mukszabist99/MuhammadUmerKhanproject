<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - MUK Autosolutions</title>
    <style>
        /* Reset default browser styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f4;
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

        /* Main Contact Section */
        .contact-section {
            padding: 60px 20px;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .contact-section h2 {
            font-size: 2.5rem;
            color: #c58805;
            margin-bottom: 20px;
        }

        .contact-info {
            margin-bottom: 40px;
        }

        .contact-info p {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        /* Contact Form */
        .contact-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .contact-form button {
            background-color: #c58805;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            margin-top: 10px;
        }

        .contact-form button:hover {
            background-color: #333;
        }

        /* Footer */
        footer {
            background-color: #2d2d2d;
            padding: 15px 0;
            color: #fff;
            text-align: center;
            margin-top: 40px;
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
             <!-- Search bar container -->
             <div class="search-bar-container">
                <input type="text" placeholder="Search products..." aria-label="Search">
                <button type="button">Search</button>
            </div>
        </nav>
    </header>

    <!-- Contact Section -->
    <section class="contact-section">
        <h2>Contact Us</h2>
        <div class="contact-info">
            <p><strong>Address:</strong> 123 Auto Lane, Auto City, AC 45678</p>
            <p><strong>Phone:</strong> (123) 456-7890</p>
            <p><strong>Email:</strong> contact@mukautosolutions.com</p>
            <p>Feel free to reach out to us with any questions, concerns, or to schedule an appointment. We’re here to help!</p>
        </div>

        <div class="contact-form">
            <form action="{{ route('contact_form') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="tel" name="phone" placeholder="Your Phone Number">
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 MUK Autosolutions. All rights reserved.</p>
    </footer>
</body>
</html>
