<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Shop Features</title>
    <link rel="stylesheet" href="feature.css">
</head>
<body>
    <div class="container">
        <h2 class="section-title">Why Choose Our Jewelry?</h2>
        
        <div class="features">
            <div class="feature-card">
                <img src="premium.jpg" alt="Quality" class="feature-image">
                <h3 class="feature-title">Premium Quality</h3>
                <p class="feature-description">Crafted with the finest materials, our jewelry is designed to last a lifetime.</p>
            </div>
            <div class="feature-card">
                <img src="custom.jpg" alt="Custom Design" class="feature-image">
                <h3 class="feature-title">Custom Designs</h3>
                <p class="feature-description">Work with our artisans to create a one-of-a-kind piece that is uniquely yours.</p>
            </div>
            <div class="feature-card">
                <img src="affordable.jpg" alt="Affordable" class="feature-image">
                <h3 class="feature-title">Affordable Luxury</h3>
                <p class="feature-description">Get luxury at a price you can afford. We offer a range of options for every budget.</p>
            </div>
            <div class="feature-card">
                <img src="delivery.jpg" alt="Fast Delivery" class="feature-image">
                <h3 class="feature-title">Fast Delivery</h3>
                <p class="feature-description">We ensure quick and secure delivery, so you can enjoy your jewelry without delay.</p>
            </div>
        </div>

        <!-- Testimonial Section -->
        <button class="testimonials-btn" onclick="toggleTestimonials()">View Testimonials</button>
        <div class="testimonials" id="testimonials">
            <p>"The craftsmanship is exquisite! I received my custom ring and it was even more beautiful than I imagined!"</p>
            <p>"Affordable pricing, and the delivery was right on time. Highly recommended!"</p>
            <p>"I loved designing my own necklace! The team was so helpful throughout the process."</p>
        </div>
    </div>

    <script src="feature.js"></script>
</body>
</html>
