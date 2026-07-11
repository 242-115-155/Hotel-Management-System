<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NS Grand Hotel - Luxury Reimagined</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; }
        body { background-color: #F8F6F2; color: #231F1B; }

        /* Navbar */
        .navbar { background-color: #231F1B; padding: 20px 80px; display: flex; justify-content: space-between; align-items: center; position: sticky; top: 0; z-index: 1000; }
        .nav-brand { display: flex; align-items: center; gap: 12px; }
        .logo-badge { width: 40px; height: 40px; background: #E5D5C5; color: #231F1B; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 700; }
        .brand-title { font-family: 'Playfair Display', serif; font-size: 20px; color: #FFF; font-weight: 600; }
        .brand-title span { color: #C49A6C; }
        .nav-links { list-style: none; display: flex; align-items: center; gap: 30px; }
        .nav-links li a { color: #A39A92; text-decoration: none; font-size: 13px; font-weight: 600; text-transform: uppercase; transition: 0.3s; }
        .nav-links li a:hover { color: #E5D5C5; }
        .btn-portal { background-color: #C49A6C; color: #231F1B !important; padding: 10px 20px; border-radius: 6px; }

        /* Slideshow */
        .slideshow-container { position: relative; width: 100%; height: 75vh; overflow: hidden; background-color: #231F1B; }
        .mySlides { display: none; position: relative; width: 100%; height: 100%; }
        .mySlides img { width: 100%; height: 100%; object-fit: cover; opacity: 0.65; }
        
        /* Left-Aligned Text */
        .hero-overlay { position: absolute; top: 50%; left: 10%; transform: translateY(-50%); width: 80%; max-width: 600px; text-align: left; z-index: 10; }
        .text { font-family: 'Playfair Display', serif; color: #FFFFFF; font-size: 46px; font-weight: 600; text-shadow: 0 4px 15px rgba(0,0,0,0.6); text-transform: uppercase; animation: fadeEffect 1.5s ease; line-height: 1.3; }
        @keyframes fadeEffect { from { opacity: 0; } to { opacity: 1; } }

        .dots-wrapper { text-align: center; margin-top: -35px; position: relative; z-index: 20; }
        .dot { height: 10px; width: 10px; margin: 0 5px; background-color: rgba(255, 255, 255, 0.4); border-radius: 50%; display: inline-block; }
        .dot.active { background-color: #C49A6C; width: 24px; border-radius: 5px; }

        /* Content Sections */
        .welcome-section { text-align: center; padding: 80px 40px; max-width: 800px; margin: 0 auto; }
        .showcase-container { max-width: 1140px; margin: 0 auto 100px auto; padding: 0 20px; }
        .room-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
        .room-card { background: #FFFFFF; border-radius: 16px; overflow: hidden; border: 1px solid #EAE6E1; transition: 0.3s; }
        .room-img-wrapper { width: 100%; height: 240px; overflow: hidden; }
        .room-img-wrapper img { width: 100%; height: 100%; object-fit: cover; }
        .room-details { padding: 25px; text-align: center; }

        /* Footer */
        .footer { background-color: #1A1715; color: #FFFFFF; padding: 60px 80px; border-top: 1px solid #2D2723; }
        .footer-content { max-width: 1140px; margin: 0 auto; display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; }
        .footer-logo h2 { font-family: 'Playfair Display', serif; color: #FFF; }
        .footer-logo h2 span { color: #C49A6C; }
        .footer-contact h3 { font-size: 14px; color: #E5D5C5; text-transform: uppercase; margin-bottom: 10px; }
        .footer-contact p { font-size: 13px; color: #A39A92; margin-bottom: 5px; }
    </style>
</head>
<body>

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

    <div class="slideshow-container">
        <div class="mySlides"><img src="Images/1.png" alt="Suite 1"><div class="hero-overlay"><div class="text">Enjoy the Dream Experience</div></div></div>
        <div class="mySlides"><img src="Images/2.png" alt="Suite 2"><div class="hero-overlay"><div class="text">Redefine Premium Luxury</div></div></div>
        <div class="mySlides"><img src="Images/3.png" alt="Suite 3"><div class="hero-overlay"><div class="text">Savour Every Serve & Service</div></div></div>
    </div>
    <div class="dots-wrapper"><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>

    <div class="welcome-section">
        <h2>Experience a Good Stay, Enjoy Fantastic Offers</h2>
        <p>Immerse yourself within curated elite tier accommodation services tailored to provide bespoke hospitality.</p>
    </div>

    <div id="rooms_and_rates" class="showcase-container">
        <div class="room-grid">
            <div class="room-card"><div class="room-img-wrapper"><img src="images/b1.jpeg"></div><div class="room-details"><h3>Deluxe Room</h3></div></div>
            <div class="room-card"><div class="room-img-wrapper"><img src="images/b2.jpeg"></div><div class="room-details"><h3>Executive Room</h3></div></div>
            <div class="room-card"><div class="room-img-wrapper"><img src="images/b3.jpeg"></div><div class="room-details"><h3>Standard Room</h3></div></div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo"><h2>NS Grand <span>Hotel</span></h2></div>
            <div class="footer-contact">
                <h3>Contact Details</h3>
                <p>Email: stay@nsgrandhotel.com</p>
                <p>Phone: +880 1712-345678</p>
            </div>
            <div class="footer-contact">
                <h3>Location</h3>
                <p>Dhaka, Bangladesh</p>
            </div>
        </div>
    </footer>

    <script>
        var slideIndex = 0;
        showSlides();
        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) { slides[i].style.display = "none"; }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }    
            for (i = 0; i < dots.length; i++) { dots[i].className = dots[i].className.replace(" active", ""); }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 4500); 
        }
    </script>
</body>
</html>