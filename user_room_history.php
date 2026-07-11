<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Booking History Details</title>
    <!-- Premium Fonts matching Figma & User Dashboard -->
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

        /* Main Content Area */
        .main-content {
            margin-left: 260px;
            flex: 1;
            padding: 60px 80px;
            display: flex;
            flex-direction: column;
        }

        /* Page Header Style */
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

        .table-wrapper-centered {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .table-container {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 45px 55px;
            width: 750px;
            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.03);
            border: 1px solid #EAE6E1;
        }

        .table-title {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            color: #231F1B;
            text-align: center;
            margin-bottom: 35px;
            font-weight: 600;
        }

        .history-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 35px;
        }

        .history-table td {
            font-size: 14px;
            padding: 14px 20px;
            border-bottom: 1px solid #F2EFEA;
            color: #231F1B;
            text-align: left;
        }

        .history-table td:first-child {
            font-weight: 600;
            color: #8C827A;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 0.5px;
            width: 40%;
        }

        .history-table td:last-child {
            font-weight: 500;
            color: #231F1B;
        }

        .history-table tr:last-child td {
            border-bottom: none;
        }

        .highlight-id {
            font-weight: 600 !important;
            color: #231F1B;
        }

        .highlight-price {
            font-weight: 600 !important;
            color: #C49A6C !important;
        }

        .card-actions {
            text-align: center;
            margin-top: 20px;
        }

        .btn-back {
            display: inline-block;
            background-color: #231F1B;
            color: #E5D5C5;
            text-decoration: none;
            padding: 12px 40px;
            font-size: 13px;
            font-weight: 600;
            border-radius: 8px;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            text-transform: uppercase;
        }

        .btn-back:hover {
            background-color: #3d3731;
            color: #FFFFFF;
        }
        
        .error-message {
            color: #c94b4b;
            font-size: 15px;
            margin-bottom: 25px;
            text-align: center;
        }
    </style>
</head>
<body>

    <?php
        // Database Connection Fallback
        $conn = new mysqli("localhost", "root", "hridila44", "iwp");
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
            <li><a href="user_payment.php">Payment</a></li>
            <li><a href="user_booking_history.php" class="active">Booking History</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </div>

    <!-- Main Content Panel Layout -->
    <div class="main-content">
        <div class="page-header">
            <div>
                <h1>Reservation Summary</h1>
                <p>Detailed verification and financial break-down log for your stay.</p>
            </div>
            <div class="user-greeting">
                Hello, <span><?php echo htmlspecialchars($session_row[2]); ?></span>
            </div>
        </div>

        <?php
            // Safe Check: Verify if book_id is passed via POST request
            $row = null;
            if (isset($_POST["book_id"]) && !empty($_POST["book_id"])) {
                $bid = mysqli_real_escape_string($conn, $_POST["book_id"]);
                $sql_hist = "SELECT * FROM booked_hist WHERE book_id='$bid'";
                $result_hist = mysqli_query($conn, $sql_hist);
                if ($result_hist) {
                    $row = mysqli_fetch_row($result_hist);
                }
            }
        ?>

        <div class="table-wrapper-centered">
            <div class="table-container">
                <h2 class="table-title">Booking Receipt</h2>

                <?php if ($row): ?>
                    <!-- If history data exists, display table -->
                    <table class="history-table">
                        <tr>
                            <td>Booking ID</td>
                            <td class="highlight-id"><?php echo htmlspecialchars($row[14]); ?></td>	
                        </tr>
                        <tr>
                            <td>Guest Name</td>
                            <td><?php echo htmlspecialchars($row[1]); ?></td>	
                        </tr>
                        <tr>
                            <td>Room Type</td>
                            <td><?php echo htmlspecialchars($row[3]); ?></td>	
                        </tr>
                        <tr>
                            <td>Check In Date</td>
                            <td><?php echo htmlspecialchars($row[4]); ?></td>	
                        </tr>
                        <tr>
                            <td>Check Out Date</td>
                            <td><?php echo htmlspecialchars($row[5]); ?></td>	
                        </tr>
                        <tr>
                            <td>Days of Stay</td>
                            <td><?php echo htmlspecialchars($row[6]); ?></td>	
                        </tr>
                        <tr>
                            <td>Total Bill Amount</td>
                            <td class="highlight-price">BDT <?php echo htmlspecialchars($row[13]); ?></td>	
                        </tr>
                        <tr>
                            <td>AC Option</td>
                            <td><?php echo (strcmp($row[7], "true") == 0) ? "YES" : "NO"; ?></td>	
                        </tr>
                        <tr>
                            <td>Breakfast Included</td>
                            <td><?php echo (strcmp($row[8], "true") == 0) ? "YES" : "NO"; ?></td>	
                        </tr>
                        <tr>
                            <td>Lunch Included</td>
                            <td><?php echo (strcmp($row[9], "true") == 0) ? "YES" : "NO"; ?></td>	
                        </tr>
                        <tr>
                            <td>Snacks Included</td>
                            <td><?php echo (strcmp($row[10], "true") == 0) ? "YES" : "NO"; ?></td>	
                        </tr>
                        <tr>
                            <td>Dinner Included</td>
                            <td><?php echo (strcmp($row[11], "true") == 0) ? "YES" : "NO"; ?></td>	
                        </tr>
                        <tr>
                            <td>Swimming Pool Access</td>
                            <td><?php echo (strcmp($row[12], "true") == 0) ? "YES" : "NO"; ?></td>	
                        </tr>
                    </table>
                <?php else: ?>
                    <!-- Direct access protection fallback -->
                    <p class="error-message">No valid booking history record specified. Please navigate here from your Booking History timeline.</p>
                <?php endif; ?>

                <div class="card-actions">
                    <a href="user_booking_history.php" class="btn-back">Go Back</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>