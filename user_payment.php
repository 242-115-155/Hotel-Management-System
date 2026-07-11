<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Payment Portal</title>
    <!-- Premium Fonts matching Figma & Dashboard Ecosystem -->
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

        /* Main Workspace Content Area */
        .main-content {
            margin-left: 260px;
            flex: 1;
            padding: 60px 80px;
            display: flex;
            flex-direction: column;
        }

        /* Header Layout Section */
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

        /* Premium Content Card Panels */
        .card {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.03);
            border: 1px solid #EAE6E1;
            margin-bottom: 35px;
        }

        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            color: #231F1B;
            margin-bottom: 25px;
            font-weight: 600;
        }

        /* Luxury Clean Interactive Tables */
        .payment-table {
            width: 100%;
            border-collapse: collapse;
        }

        .payment-table th {
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #8C827A;
            text-align: left;
            padding: 14px 18px;
            background-color: #FDFDFD;
            border-bottom: 2px solid #EAE6E1;
        }

        .payment-table td {
            font-size: 13px;
            padding: 16px 18px;
            border-bottom: 1px solid #F2EFEA;
            color: #231F1B;
            text-align: left;
        }

        .payment-table tr:last-child td {
            border-bottom: none;
        }

        .highlight-id {
            font-weight: 600;
            color: #231F1B;
        }

        .highlight-price {
            font-weight: 600;
            color: #C49A6C;
        }

        /* Modern Transaction Input Box Setup */
        .pay-action-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            background: #FAF8F5;
            padding: 25px 35px;
            border-radius: 12px;
            border: 1px solid #EAE6E1;
        }

        .pay-text h3 {
            font-size: 15px;
            color: #231F1B;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .pay-text p {
            font-size: 13px;
            color: #8C827A;
        }

        .pay-form-fields {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .pay-form-fields input[type="number"] {
            padding: 12px 16px;
            font-size: 14px;
            color: #231F1B;
            background-color: #FFFFFF;
            border: 1px solid #EAE6E1;
            border-radius: 8px;
            outline: none;
            width: 180px;
            transition: all 0.3s ease;
        }

        .pay-form-fields input[type="number"]:focus {
            border-color: #C49A6C;
            box-shadow: 0 0 0 3px rgba(196, 154, 108, 0.1);
        }

        .btn-pay {
            background-color: #231F1B;
            color: #E5D5C5;
            border: none;
            padding: 12px 30px;
            font-size: 13px;
            font-weight: 600;
            border-radius: 8px;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
        }

        .btn-pay:hover {
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
        $session_row = mysqli_fetch_row($result); 
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
            <li><a href="user_view.php">My Info</a></li>
            <li><a href="bookroom.php">Book A Room</a></li>
            <li><a href="user_room_status.php">Show Booking Status</a></li>
            <li><a href="user_payment.php" class="active">Payment</a></li>
            <li><a href="user_booking_history.php">Booking History</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </div>

    <!-- Main Workspace Layout -->
    <div class="main-content">
        <!-- Top Workspace Page Header -->
        <div class="page-header">
            <div>
                <h1>Payment Portal</h1>
                <p>Review approved reservation invoices and proceed to checkout settlement.</p>
            </div>
            <div class="user-greeting">
                Hello, <span><?php echo htmlspecialchars($session_row[2]); ?></span>
            </div>
        </div>

        <!-- Confirmed Invoices Table Card -->
        <div class="card">
            <h2 class="card-title">Approved Reservation Invoices</h2>
            <table class="payment-table">
                <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>Name</th>
                        <th>Room Type</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>Amount Due</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql1 = "SELECT * from confirmed_booking";
                        if ($result1 = mysqli_query($conn, $sql1)) {
                            while ($row = mysqli_fetch_row($result1)) {
                                ?>
                                <tr>
                                    <td class="highlight-id"><?php echo htmlspecialchars($row[14]); ?></td>
                                    <td><?php echo htmlspecialchars($row[1]); ?></td>
                                    <td><?php echo htmlspecialchars($row[3]); ?></td>
                                    <td><?php echo htmlspecialchars($row[4]); ?></td>
                                    <td><?php echo htmlspecialchars($row[5]); ?></td>
                                    <td class="highlight-price">BDT <?php echo htmlspecialchars($row[13]); ?></td>
                                </tr>
                                <?php
                            }
                            mysqli_free_result($result1);
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Payment Form Action Interface Box -->
        <div class="card" style="padding: 30px;">
            <div class="pay-action-box">
                <div class="pay-text">
                    <h3>Secure Checkout Gateway</h3>
                    <p>Provide your target invoice Booking ID to clear outstanding liabilities.</p>
                </div>
                <form action="payment.php" method="post" class="pay-form-fields">
                    <input type="number" name="book_id" placeholder="e.g. 2048" required>
                    <button type="submit" class="btn-pay">Pay Now</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
