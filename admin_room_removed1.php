<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Room Removed</title>
    <!-- Premium Fonts matching Figma -->
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

        /* Modern Sidebar Panel matching admin_view.php exactly */
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

        /* Active highlight kept on Remove Rooms as this page confirms that action */
        .menu-list li a.active, .menu-list li a:hover {
            background-color: #3d3731;
            color: #E5D5C5;
            font-weight: 600;
        }

        /* Main Content Area */
        .main-content {
            margin-left: 260px;
            flex: 1;
            padding: 60px 80px;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Centers the success card vertically */
            align-items: center; /* Centers the success card horizontally */
        }

        /* Centered White Box/Card styling matching your layout */
        .table-container {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 50px 55px;
            width: 500px; /* Perfect card dimensions for the notification */
            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.03);
            border: 1px solid #EAE6E1;
            text-align: center;
        }

        /* Delicate Checkmark Icon */
        .success-checkmark {
            font-size: 28px;
            color: #231F1B;
            margin-bottom: 15px;
            display: block;
        }

        /* Success Title Card */
        .table-title {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            color: #231F1B;
            text-align: center;
            margin-bottom: 12px;
            font-weight: 600;
        }

        .success-text {
            font-size: 13px;
            color: #8C827A;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        /* Dark Elegant Action Button */
        .btn-redirect {
            display: inline-block;
            background-color: #231F1B;
            color: #E5D5C5;
            text-decoration: none;
            padding: 12px 24px;
            font-size: 13px;
            font-weight: 600;
            border-radius: 8px;
            letter-spacing: 0.3px;
            transition: all 0.3s ease;
        }

        .btn-redirect:hover {
            background-color: #3d3731;
            color: #FFFFFF;
        }
    </style>
</head>
<body>

    <!-- Sidebar Menu Dashboard Wrapper - EXACT COPY from admin_view.php -->
    <div class="sidebar">
        <div class="brand-section">
            <div class="logo-badge">NS</div>
            <div class="brand-text-wrapper">
                <div class="brand-title">NS Grand Hotel</div>
                <div class="brand-subtitle">Front of House</div>
            </div>
        </div>
        
        <ul class="menu-list">
            <li><a href="admin_view.php">Rooms Info</a></li>
            <li><a href="add_room_admin.php">Add Room</a></li>
            <li><a href="remove_room_admin.php" class="active">Remove Rooms</a></li>
            <li><a href="admin_room_status.php">Booking Requests</a></li>
            <li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
            <li><a href="booking_history.php">Booking History</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </div>

    <!-- Content Area Layout -->
    <div class="main-content">
        
        <!-- Centered Success Card Container -->
        <div class="table-container">
            <span class="success-checkmark">✓</span>
            <h2 class="table-title">Room Removed</h2>
            <p class="success-text">Admin Room has been removed successfully from the hotel inventory records.</p>
            
            <a href="admin_view.php" class="btn-redirect">Click here to get redirected</a>
        </div>

    </div>

</body>
</html>