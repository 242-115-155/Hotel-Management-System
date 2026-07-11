<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Booking Requests</title>
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

        /* Modern Sidebar Panel */
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

        /* Set Booking Requests as Active link */
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

        /* Left Aligned Page Header */
        .page-header {
            margin-bottom: 35px;
            text-align: left;
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

        /* Centering Wrapper for the Content Box */
        .box-wrapper-centered {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        /* Large Premium White Box/Card */
        .basic_box {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 45px 55px;
            width: 1000px;
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

        /* Requests Table Styling */
        .rooms-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }

        .rooms-table th {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #8C827A;
            padding: 14px 10px;
            border-bottom: 2px solid #F2EFEA;
            font-weight: 600;
            text-align: center;
        }

        .rooms-table td {
            font-size: 14px;
            color: #231F1B;
            padding: 18px 10px;
            border-bottom: 1px solid #F2EFEA;
            text-align: center;
        }

        .rooms-table tr:last-child td {
            border-bottom: none;
        }

        .booking-id-td {
            font-weight: 600;
            color: #231F1B;
        }

        .price-tag {
            font-weight: 600;
            color: #C49A6C;
        }

        /* Divider Line */
        .form-divider {
            border: 0;
            height: 1px;
            background: #EAE6E1;
            margin: 40px 0;
        }

        /* Action Form Layout */
        .action-form-container {
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .input-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
        }

        .input-group label {
            font-size: 15px;
            font-weight: 500;
            color: #59524C;
            white-space: nowrap;
        }

        input[type="number"] {
            width: 65%;
            padding: 12px 16px;
            border: 1px solid #D1C9C0;
            border-radius: 8px;
            background-color: #FCFBFA;
            font-size: 14px;
            color: #231F1B;
            outline: none;
            transition: all 0.3s ease;
        }

        input[type="number"]:focus {
            border-color: #231F1B;
            background-color: #FFFFFF;
            box-shadow: 0 0 0 3px rgba(35, 31, 27, 0.05);
        }

        /* Buttons Styling */
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 10px;
        }

        button[type="submit"] {
            padding: 14px 30px;
            font-size: 14px;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .btn-confirm {
            background-color: #231F1B;
            color: #E5D5C5;
            border: none;
            box-shadow: 0 4px 12px rgba(35, 31, 27, 0.15);
        }

        .btn-confirm:hover {
            background-color: #3d3731;
            color: #FFFFFF;
            transform: translateY(-1px);
        }

        .btn-cancel {
            background-color: transparent;
            color: #C24B4B;
            border: 1.5px solid #C24B4B;
        }

        .btn-cancel:hover {
            background-color: #FFF5F5;
            transform: translateY(-1px);
        }
    </style>
</head>
<body>

    <!-- Sidebar Menu Dashboard Wrapper -->
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
            <li><a href="remove_room_admin.php">Remove Rooms</a></li>
            <li><a href="admin_room_status.php" class="active">Booking Requests</a></li>
            <li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
            <li><a href="booking_history.php">Booking History</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </div>

    <!-- Content Area -->
    <div class="main-content">
        <!-- Outer Left Aligned Page Header -->
        <div class="page-header">
            <h1>Booking Requests</h1>
            <p>Review, confirm, or cancel pending guest room reservations.</p>
        </div>

        <!-- Centered Container Area -->
        <div class="box-wrapper-centered">
            <div class="basic_box">
                <h2 class="table-title">Admin Room Status</h2>

                <!-- Booking Requests Table -->
                <table class="rooms-table">
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Name</th>
                            <th>Room Type</th>
                            <th>Check-in Date</th>
                            <th>Check-out Date</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $conn = new mysqli("localhost", "root", "hridila44", "iwp");
                        if($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql1 = "SELECT * from user_room_book";
                        if ($result = mysqli_query($conn, $sql1)) {
                            while ($row = mysqli_fetch_row($result)) {
                                if($row[13] == 'Waiting') { ?>
                                    <tr>
                                        <td class="booking-id-td"><?php echo $row[15]; ?></td>
                                        <td><?php echo $row[1]; ?></td>
                                        <td><?php echo $row[3]; ?></td>
                                        <td><?php echo $row[4]; ?></td>
                                        <td><?php echo $row[5]; ?></td>
                                        <td class="price-tag">BDT <?php echo $row[14]; ?></td>
                                    </tr>
                                <?php }
                            }
                            mysqli_free_result($result); 
                        }
                    ?>
                    </tbody>
                </table>

                <hr class="form-divider">

                <!-- Action Form Section -->
                <form action="confirm_room.php" method="post">
                    <div class="action-form-container">
                        <div class="input-group">
                            <label for="book_id_input"><b>Enter Booking ID:</b></label>
                            <input type="number" name="book_id" id="book_id_input" placeholder="e.g. 1024" required>
                        </div>
                        
                        <div class="btn-container">
                            <button type="submit" class="btn-confirm">Confirm Booking</button>
                            <button type="submit" formaction="cancel_room.php" class="btn-cancel">Cancel Booking</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>