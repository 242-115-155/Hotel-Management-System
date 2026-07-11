<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image Gallery | NS Grand Hotel</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Plus Jakarta Sans', sans-serif; }
        body { background-color: #F8F6F2; color: #231F1B; }

        /* Unified Navbar */
        .navbar { background-color: #231F1B; padding: 20px 80px; display: flex; justify-content: space-between; align-items: center; position: sticky; top: 0; z-index: 1000; }
        .nav-brand { display: flex; align-items: center; gap: 12px; }
        .logo-badge { width: 40px; height: 40px; background: #E5D5C5; color: #231F1B; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 700; }
        .brand-title { font-family: 'Playfair Display', serif; font-size: 20px; color: #FFF; font-weight: 600; }
        .brand-title span { color: #C49A6C; }
        .nav-links { list-style: none; display: flex; align-items: center; gap: 30px; }
        .nav-links li a { color: #A39A92; text-decoration: none; font-size: 13px; font-weight: 600; text-transform: uppercase; transition: 0.3s; }
        .nav-links li a:hover { color: #E5D5C5; }
        .btn-portal { background-color: #C49A6C; color: #231F1B !important; padding: 10px 20px; border-radius: 6px; }

        /* Gallery Sections */
        .gallery-header { text-align: center; padding: 50px 0; font-family: 'Playfair Display', serif; font-size: 36px; }
        .row { display: flex; flex-wrap: wrap; padding: 0 80px; gap: 20px; margin-bottom: 20px; }
        .column { flex: 32%; min-width: 300px; }
        img { width: 100%; height: 250px; object-fit: cover; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        
        .r_room { font-family: 'Playfair Display', serif; font-size: 32px; text-align: center; margin: 50px 0 30px 0; }
        
        /* Footer */
        .footer { background-color: #1A1715; color: #FFFFFF; padding: 60px 80px; margin-top: 50px; }
        .footer-content { max-width: 1140px; margin: 0 auto; display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; }
        .footer-contact h3 { font-size: 14px; color: #E5D5C5; text-transform: uppercase; margin-bottom: 10px; }
        .footer-contact p { font-size: 13px; color: #A39A92; }
    </style>
</head>
<body>

    <!-- Unified Navigation (Matches Index Page) -->
    <nav class="navbar">
        <div class="nav-brand">
            <div class="logo-badge">NS</div>
            <div class="brand-title">NS Grand <span>Hotel</span></div>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
			<li><a href="#rooms_and_rates">Room Gallery</a></li>
            <li><a href="image_gallery.php">Image Gallery</a></li>
            <li><a href="admin_login.php">Admin Login</a></li>
            <li><a href="user_login.php" class="btn-portal">User Portal</a></li>
        </ul>
    </nav>

    <h1 class="gallery-header">IMAGE GALLERY</h1>

    <!-- Image Grid -->
    <div class="row">
        <div class="column"><img src="images/1.png"></div>
        <div class="column"><img src="images/2.png"></div>
        <div class="column"><img src="images/3.png"></div>
    </div>
    <div class="row">
        <div class="column"><img src="images/A1.jpeg"></div>
        <div class="column"><img src="images/A2.jpeg"></div>
        <div class="column"><img src="images/A3.jpeg"></div>
    </div>

    <h2 class="r_room">OUR ROOMS</h2>
    <div class="row">
        <div class="column"><img src="images/b1.jpeg"></div>
        <div class="column"><img src="images/b2.jpeg"></div>
        <div class="column"><img src="images/b3.jpeg"></div>
    </div>

    <footer id="contact" class="footer">
        <div class="footer-content">
            <div class="footer-contact"><h3>NS Grand Hotel</h3><p>Luxury defined, comfort refined.</p></div>
            <div class="footer-contact"><h3>Contact</h3><p>Email: stay@nsgrandhotel.com</p><p>Phone: +880 1712-345678</p></div>
            <div class="footer-contact"><h3>Location</h3><p>Dhaka, Bangladesh</p></div>
        </div>
    </footer>

</body>
</html>