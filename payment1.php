<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <!-- Premium Fonts matching Figma & User Dashboard Ecosystem -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: #F8F6F2; /* Luxury cream background */
            display: flex;
            min-height: 100vh;
        }

        /* Premium Dark Charcoal Sidebar Dashboard */
        .sidebar {
            width: 260px;
            background-color: #231F1B; 
            color: #FFFFFF;
            position: fixed;
            height: 100vh;
            display: flex;
            flex-direction: column;
            padding: 35px 20px;
            box-shadow: 4px 0px 20px rgba(0, 0, 0, 0.05);
            z-index: 10;
        }

        .brand-section {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 40px;
            padding-left: 10px;
        }

        .logo-badge {
            width: 38px;
            height: 38px;
            background: #E5D5C5;
            color: #231F1B;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 14px;
        }

        .brand-text-wrapper {
            display: flex;
            flex-direction: column;
        }

        .brand-title {
            font-size: 13px;
            color: #FFF;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .brand-subtitle {
            font-size: 10px;
            color: #8C827A;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-top: 2px;
        }

        .menu-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .menu-list li a {
            display: block;
            color: #A39A92;
            padding: 12px 16px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .menu-list li a.active, .menu-list li a:hover {
            background-color: #3d3731;
            color: #E5D5C5;
            font-weight: 600;
        }

        /* Main Content Layout Panel */
        .main-content {
            margin-left: 260px;
            flex: 1;
            padding: 60px 80px;
            display: flex;
            flex-direction: column;
        }

        /* Top Header Navigation Panel */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 40px;
            border-bottom: 1px solid #EAE6E1;
            padding-bottom: 20px;
        }

        .page-header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            color: #231F1B;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .page-header p {
            font-size: 13px;
            color: #8C827A;
        }

        .user-greeting {
            background-color: #FFF;
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            color: #231F1B;
            border: 1px solid #EAE6E1;
        }

        .user-greeting span {
            color: #C49A6C;
        }

        /* Centered Layout Wrapper */
        .card-wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        /* Premium Success Card Panel */
        .success-card {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 50px 60px;
            width: 650px;
            text-align: center;
            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.03);
            border: 1px solid #EAE6E1;
        }

        /* Soft Olive Green Success Badge Indicator */
        .success-icon {
            width: 64px;
            height: 64px;
            background-color: #EEF7EE; /* Luxury soft green tint */
            color: #4B9C4B;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            margin-bottom: 25px;
            font-weight: bold;
        }

        .success-card h2 {
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            color: #231F1B;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .success-card p {
            font-size: 15px;
            color: #6E655F;
            line-height: 1.6;
            margin-bottom: 35px;
        }

        /* Premium Redirect Action Button */
        .btn-next {
            display: inline-block;
            background-color: #231F1B;
            color: #E5D5C5;
            text-decoration: none;
            padding: 14px 45px;
            font-size: 13px;
            font-weight: 600;
            border-radius: 8px;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            text-transform: uppercase;
        }

        .btn-next:hover {
            background-color: #3d3731;
            color: #FFFFFF;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }
    </style>
</head>
<body>

    <?php
        // Database Connection Fallback
        $conn = new mysqli("localhost", "root", "", "hotel_management_system");
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * from temp_session";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_row($result); 
    ?>

    <!-- Premium Sidebar Panel Layout -->
    <div class="sidebar">
        <div class="brand-section">
            <div class="logo-badge">NS</div>
            <div class="brand-text-wrapper">
                <div class="brand-title">NS Grand Hotel</div>
                <div class="brand-subtitle">Guest Portal</div>
            </div>
        </div>
        
        <ul class="menu-list">
            <li><a href="user_view.php">My Info</a></li>
            <li><a href="bookroom.php">Book A Room</a></li>
            <li><a href="user_room_status.php">Show Booking Status</a></li>
            <li><a href="user_payment.php" class="active">Payment</a></li>
            <li><a href="user_booking_history.php">Booking History</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </div>

    <!-- Main Workspace Content Area -->
    <div class="main-content">
        <!-- Dashboard Greeting Header -->
        <div class="page-header">
            <div>
                <h1>Transaction Settlement</h1>
                <p>Real-time clearance verification for your accommodation bill.</p>
            </div>
            <div class="user-greeting">
                Hello, <span><?php echo htmlspecialchars($row[2]); ?></span>
            </div>
        </div>

        <!-- Success Message Dashboard Component -->
        <div class="card-wrapper">
            <div class="success-card">
                <div class="success-icon">✓</div>
                <h2>Payment Successful!</h2>
                <p>Your transaction has been cleared and processed through our secure gateway. An automated receipt has been generated and appended to your active timeline log.</p>
                
                <a href="user_view.php" class="btn-next">Return to Dashboard</a>
            </div>
        </div>
    </div>

</body>
</html>
