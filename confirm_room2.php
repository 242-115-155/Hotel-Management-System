<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Booking Notice</title>
    <!-- Premium Fonts matching Luxury Theme Ecosystem -->
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

        /* Premium Dark Charcoal Admin Sidebar Panel */
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

        /* Admin Active Route States */
        .menu-list li a.active, .menu-list li a:hover {
            background-color: #3d3731;
            color: #E5D5C5;
            font-weight: 600;
        }

        /* Main Management Dashboard Panel */
        .main-content {
            margin-left: 260px;
            flex: 1;
            padding: 60px 80px;
            display: flex;
            flex-direction: column;
        }

        /* Top Workspace Page Header */
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

        .admin-badge {
            background-color: #FFF;
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 600;
            color: #C49A6C;
            letter-spacing: 1px;
            text-transform: uppercase;
            border: 1px solid #EAE6E1;
        }

        /* Centered Notification Card Layout Wrapper */
        .card-wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        /* Premium Minimalist Status Box */
        .status-card {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 50px 60px;
            width: 650px;
            text-align: center;
            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.03);
            border: 1px solid #EAE6E1;
        }

        /* Muted Amber Warning Badge Indicator */
        .status-icon {
            width: 64px;
            height: 64px;
            background-color: #FFF9F2; /* Luxury soft amber tint */
            color: #D9822B;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            margin-bottom: 25px;
            font-weight: bold;
        }

        .status-card h2 {
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            color: #231F1B;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .status-card p {
            font-size: 15px;
            color: #6E655F;
            line-height: 1.6;
            margin-bottom: 35px;
        }

        /* Premium Dashboard Return Action Button */
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
        // Database Connection Fallback Setup
        $conn = new mysqli("localhost", "root", "hridila44", "iwp");
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * from temp_session";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_row($result); 
    ?>

    <!-- Premium Admin Sidebar Navigation Panel -->
    <div class="sidebar">
        <div class="brand-section">
            <div class="logo-badge">HQ</div>
            <div class="brand-text-wrapper">
                <div class="brand-title">NS Grand Hotel</div>
                <div class="brand-subtitle">Admin Console</div>
            </div>
        </div>
        
        <ul class="menu-list">
            <li><a href="admin_view.php" class="active">Rooms Info</a></li>
            <li><a href="add_room_admin.php">Add Room</a></li>
            <li><a href="remove_room_admin.php">Remove Rooms</a></li>
            <li><a href="admin_room_status.php">Booking Requests</a></li>
            <li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
            <li><a href="booking_history.php">Booking History</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </div>

    <!-- Main Workspace Layout Content Area -->
    <div class="main-content">
        <!-- Top Workspace Page Header Dashboard -->
        <div class="page-header">
            <div>
                <h1>System Action Terminal</h1>
                <p>Real-time pipeline allocation updates and exception handlers.</p>
            </div>
            <div class="admin-badge">
                Operator: <?php echo htmlspecialchars($row[2]); ?>
            </div>
        </div>

        <!-- Warning Alert Box Panel -->
        <div class="card-wrapper">
            <div class="status-card">
                <div class="status-icon">!</div>
                <h2>Allocation Limit Reached</h2>
                <p>Sorry! All suites under this specific room category are currently occupied. Please wait for an active check-out or clearance before confirming new allocations for this tier.</p>
                
                <a href="admin_view.php" class="btn-next">Return to Console</a>
            </div>
        </div>
    </div>

</body>
</html>