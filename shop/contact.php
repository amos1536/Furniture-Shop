<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Furniture Shop</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    <section class="contact-page">
        <h1>Contact Us</h1>
        <p>
            We would love to hear from you. Whether you have a question about our furniture,
            pricing, delivery, or custom orders, feel free to reach out to us.
        </p>

        <div class="contact-container">
            <div class="contact-info">
                <h2>Get in Touch</h2>
                <p><strong>Furniture Shop</strong></p>
                <p>Email: info@furnitureshop.com</p>
                <p>Phone: +254 712 345 678</p>
                <p>Location: Nairobi, Kenya</p>
                <p>Working Hours: Monday - Saturday, 8:00 AM - 6:00 PM</p>
            </div>

            <div class="contact-form-box">
                <h2>Send Us a Message</h2>
                <form action="" method="POST" class="contact-form">
                    <label>Full Name</label>
                    <input type="text" name="name" required>

                    <label>Email Address</label>
                    <input type="email" name="email" required>

                    <label>Subject</label>
                    <input type="text" name="subject" required>

                    <label>Message</label>
                    <textarea name="message" rows="6" required></textarea>

                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>

        <div class="contact-links">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="products.php">Products</a>
        </div>
    </section>

</body>
</html>