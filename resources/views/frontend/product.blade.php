<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - MUK Autosolutions</title>
    <style>
        /* Similar styles for header, footer, and main content */
        body {
            font-family: Arial, sans-serif;
            color: #ffffff;
        }

        header, footer {
            background-color: #2d2d2d;
            padding: 15px 0;
            color: #fff;
            text-align: center;
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            height: 30px;
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

        /* Products Section */
        .products {
            padding: 60px 20px;
            text-align: center;
            background-color: #000000;
        }

        .products h2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .product-card {
            width: 300px;
            padding: 20px;
            background: #0a0a0a;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product-card h3 {
            font-size: 1.5rem;
            color: #c58805;
            margin-top: 15px;
        }

        .product-card p {
            color: #666;
        }

        .product-card .price {
            font-weight: bold;
            color: #c58805;
            margin-top: 10px;
        }
        /* Order Form Section */
.order-form-section {
    background-color: #2d2d2d;
    color: #ffffff;
    padding: 40px 20px;
    text-align: center;
}

.order-form-section h2 {
    color: #c58805;
    margin-bottom: 20px;
}

.order-form-section form {
    max-width: 200px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
}

.order-form-section label {
    text-align: left;
    margin-bottom: 15px;
    font-weight: bold;
}

.order-form-section input,
.order-form-section select,
.order-form-section textarea {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
}

.order-form-section button.btn-buy-now {
    background-color: #c58805;
    color: #ffffff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.order-form-section button.btn-buy-now:hover {
    background-color: #e0a833;
}
.btn-order-now {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 15px;
    background-color: #c58805;
    color: #ffffff;
    border-radius: 5px;
    text-decoration: none;
    font-size: 0.9rem;
    transition: background-color 0.3s;
}
.btn-order-now:hover {
    background-color: #e0a833;
}
html {
    scroll-behavior: smooth;
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

    <!-- Products Section -->
    <section class="products">
        <h2>Our Products</h2>
        <div class="product-container">
        <!-- Example Product Card -->
<div class="product-card">
    <img src="Images/-Oil-Filter.jpg" alt="Oil Filter">
    <h3>Oil Filter</h3>
    <p>High-quality oil filter for extended engine life.</p>
    <p class="price">$15</p>
    <a href="#order-form-section" class="btn-order-now">Order Now</a>
</div>

            <div class="product-card">
                <img src="Images\Brake-Pads.jpg" alt="Brake Pads">
                <h3>Brake Pads</h3>
                <p>Reliable brake pads for enhanced safety and control.</p>
                <p class="price">$30</p>
                <a href="#order-form-section" class="btn-order-now">Order Now</a>
            </div>
            <div class="product-card">
                <img src="Images\lubricants-new-1.jpg" alt="Engine Oil">
                <h3>Engine Oil</h3>
                <p>Premium engine oil for optimal performance.</p>
                <p class="price">$40</p>
                <a href="#order-form-section" class="btn-order-now">Order Now</a>
            </div>
            <div class="product-card">
                <img src="Images\brake-rotors.jpg" alt="Brake Rotors">
                <h3>Brake Rotor</h3>
                <p>Reliable brake rotors for enhanced safety and control.</p>
                <p class="price">$100</p>
                <a href="#order-form-section" class="btn-order-now">Order Now</a>
            </div>
            <div class="product-card">
                <img src="Images\spark plug.jpg" alt="Spark Plugs">
                <h3>Spark Plugs</h3>
                <p>For better fuel efficiency and optimal performance</p>
                <p class="price">$80</p>
                <a href="#order-form-section" class="btn-order-now">Order Now</a>
            </div>
            <div class="product-card">
                <img src="Images\Axle.jpg" alt="Axle">
                <h3>Axle</h3>
                <p>For better power deliver</p>
                <p class="price">$200</p>
                <a href="#order-form-section" class="btn-order-now">Order Now</a>
            </div>
            <div class="product-card">
                <img src="Images\Plug wire.jpg" alt="Plug Wires">
                <h3>Plug Wires</h3>
                <p>For better fuel efficiency and optimal performance</p>
                <p class="price">$120</p>
                <a href="#order-form-section" class="btn-order-now">Order Now</a>
            </div>
            <div class="product-card">
                <img src="Images/Muffler.webp" alt="Mufflers">
                <h3>Mufflers</h3>
                <p>For enhanced performance & optimized sound</p>
                <p class="price">$400</p>
                <a href="#order-form-section" class="btn-order-now">Order Now</a>
            </div>
            <div class="product-card">
                <img src="Images/Tyre.jpg" alt="Tyre">
                <h3>Tyre</h3>
                <p>Better handling and driving pleasure</p>
                <p class="price">$800/set of 4</p>
                <a href="#order-form-section" class="btn-order-now">Order Now</a>
                
            </div>
            <div class="product-card">
                <img src="Images/catalytic.webp" alt="Catalytic Converter">
                <h3>Catalytic Converter</h3>
                <p>Helps to control emmisions and optimize performance</p>
                <p class="price">$650</p>
                <a href="#order-form-section" class="btn-order-now">Order Now</a>
            </div>
            <div class="product-card">
                <img src="Images/Side mirror.jfif" alt="Side Mirror">
                <h3>Side Mirror</h3>
                <p>A must have product for driving</p>
                <p class="price">$90</p>
                <a href="#order-form-section" class="btn-order-now">Order Now</a>
            </div>
            <div class="product-card">
                <img src="Images/interior.webp" alt="Interior Polishes">
                <h3>Interior Polishes</h3>
                <p>Make your Interior shine like new</p>
                <p class="price">$20</p>
                <a href="#order-form-section" class="btn-order-now">Order Now</a>
            </div>
        </div>
    </section>
<!-- Order Form Section -->
<section id="order-form-section" class="order-form-section">
    <h2>Place Your Order</h2>
    <form action="{{ route('product_form') }}" method="POST">
    @csrf
        <label for="product">Product</label>
        <select id="product" name="product" required>
            <option value="Oil Filter">Oil Filter</option>
            <option value="Brake Pads">Brake Pads</option>
            <option value="Engine Oil">Engine Oil</option>
            <option value="Brake Rotor">Brake Rotor</option>
            <option value="Spark Plugs">Spark Plugs</option>
            <option value="Axle">Axle</option>
            <option value="Plug Wires">Plug Wires</option>
            <option value="Mufflers">Mufflers</option>
            <option value="Tyre">Tyre (Set of 4)</option>
            <option value="Catalytic Converter">Catalytic Converter</option>
            <option value="Side Mirror">Side Mirror</option>
            <option value="Interior Polishes">Interior Polishes</option>
        </select>

        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="address">Address</label>
        <textarea id="address" name="address" rows="4" required></textarea>

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="quantity">Quantity</label>
        <input type="number" id="quantity" name="quantity" min="1" required>

        <button type="submit" class="btn-buy-now">Place Order</button>
    </form>
</section>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 MUK Autosolutions. All rights reserved.</p>
    </footer>
</body>
</html>
