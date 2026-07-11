<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - My Info</title>
    <!-- Premium Fonts matching Figma & Admin View -->
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

        /* Main Workspace Layout */
        .main-content {
            margin-left: 260px;
            flex: 1;
            padding: 60px 80px;
            display: flex;
            flex-direction: column;
        }

        /* Top Header Area with Greeting */
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
            box-shadow: 0 4px 10px rgba(0,0,0,0.01);
        }

        .user-greeting span {
            color: #C49A6C; /* Gold Accent for active user name */
        }

        /* Centered Profile Card wrapper */
        .card-wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        /* White Premium Profile Container Card */
        .profile-container {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 45px 55px;
            width: 700px;
            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.03);
            border: 1px solid #EAE6E1;
        }

        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            color: #231F1B;
            text-align: center;
            margin-bottom: 35px;
            font-weight: 600;
        }

        /* Profile Data Table Layout */
        .info-table {
            width: 100%;
            border-collapse: collapse;
        }

        .info-table td {
            font-size: 14px;
            padding: 16px 20px;
            border-bottom: 1px solid #F2EFEA;
            color: #231F1B;
        }

        /* Left Side Column Key Fields */
        .info-table td:first-child {
            font-weight: 600;
            color: #8C827A;
            text-transform: uppercase;
            font-size: 11px;
            letter-spacing: 0.8px;
            width: 35%;
        }

        /* Right Side Values */
        .info-table td:last-child {
            font-weight: 500;
            color: #231F1B;
        }

        .info-table tr:last-child td {
            border-bottom: none;
        }
    </style>
</head>
<body>

    <?php
        // Database Connection Fallback matching your configuration
        $conn = new mysqli("localhost", "root", "hridila44", "iwp");
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * from temp_session";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_row($result); 
    ?>

    <!-- Premium Sidebar Panel -->
    <div class="sidebar">
        <div class="brand-section">
            <div class="logo-badge">NS</div>
            <div class="brand-text-wrapper">
                <div class="brand-title">NS Grand Hotel</div>
                <div class="brand-subtitle">Guest Portal</div>
            </div>
        </div>
        
        <ul class="menu-list">
            <li><a href="user_view.php" class="active">My Info</a></li>
            <li><a href="bookroom.php">Book A Room</a></li>
            <li><a href="user_room_status.php">Show Booking Status</a></li>
            <li><a href="user_payment.php">Payment</a></li>
            <li><a href="user_booking_history.php">Booking History</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </div>

    <!-- Main Dynamic Window -->
    <div class="main-content">
        <!-- Top Sticky Style Header Bar -->
        <div class="page-header">
            <div>
                <h1>Profile Overview</h1>
                <p>Manage and verify your registered personal credentials here.</p>
            </div>
            <div class="user-greeting">
                Hello, <span><?php echo htmlspecialchars($row[2]); ?></span>
            </div>
        </div>

        <!-- Center Card Profile Data Layout -->
        <div class="card-wrapper">
            <div class="profile-container">
                <h2 class="card-title">Welcome Back</h2>

                <table class="info-table">
                    <tr>
                        <td>Full Name</td>
                        <td><?php echo htmlspecialchars($row[2]); ?></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><?php echo htmlspecialchars($row[0]); ?></td>
                    </tr>
                    <tr>
                        <td>Email Address</td>
                        <td><?php echo htmlspecialchars($row[3]); ?></td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td><?php echo htmlspecialchars($row[5]); ?></td>
                    </tr>
                    <tr>
                        <td>ID Proof (Passport/NID)</td>
                        <td><?php echo htmlspecialchars($row[4]); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>
</html>