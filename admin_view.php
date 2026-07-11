<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Rooms Info</title>
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

        /* Modern Sidebar Panel matching image cbf7bc01-4d33-4e74-947b-f3e5da726494 */
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

        /* Main Content Area - Left aligned header, centered table layout */
        .main-content {
            margin-left: 260px;
            flex: 1;
            padding: 60px 80px;
            display: flex;
            flex-direction: column;
        }

        /* Outer Page Header - Back to its original left-aligned position */
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

        /* Centering Wrapper for the Table Box */
        .table-wrapper-centered {
            width: 100%;
            display: flex;
            justify-content: center; /* Perfectly centers the table in the remaining space */
            margin-top: 10px;
        }

        /* Bolder & Much Larger White Box/Card styling */
        .table-container {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 45px 55px;
            width: 1000px; /* Made even larger to prevent empty space */
            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.03);
            border: 1px solid #EAE6E1;
        }

        /* Inner Table Title */
        .table-title {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            color: #231F1B;
            text-align: center;
            margin-bottom: 35px;
            font-weight: 600;
        }

        .rooms-table {
            width: 100%;
            border-collapse: collapse;
        }

        .rooms-table th {
            font-size: 12px;
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
            padding: 20px 10px; /* Enhanced spacing for a premium look */
            border-bottom: 1px solid #F2EFEA;
            text-align: center;
        }

        .rooms-table tr:last-child td {
            border-bottom: none;
        }

        .room-type {
            font-weight: 600;
            color: #231F1B;
            text-align: left !important;
            padding-left: 20px !important;
        }

        .price-tag {
            font-weight: 600;
            color: #C49A6C;
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
            <li><a href="admin_view.php" class="active">Rooms Info</a></li>
            <li><a href="add_room_admin.php">Add Room</a></li>
            <li><a href="remove_room_admin.php">Remove Rooms</a></li>
            <li><a href="admin_room_status.php">Booking Requests</a></li>
            <li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
            <li><a href="booking_history.php">Booking History</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </div>

    <!-- Content Area -->
    <div class="main-content">
        <!-- Outer Header - Kept at its original beautiful left position -->
        <div class="page-header">
            <h1>Rooms Info</h1>
            <p>Overview of all room types and their availability.</p>
        </div>

        <!-- Centered Wrapper ONLY for the Table Box -->
        <div class="table-wrapper-centered">
            <div class="table-container">
                <h2 class="table-title">Rooms Info</h2>

                <?php
                    $conn = new mysqli("localhost", "root", "", "hotel_management_system");
                    if($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * from rooms_count";
                    $result = mysqli_query($conn, $sql); 
                ?>
                
                <table class="rooms-table">
                    <thead>
                        <tr>
                            <th style="text-align: left; padding-left: 20px;">Room Type</th>
                            <th>Available Rooms</th>
                            <th>Occupied Rooms</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    while ($row = mysqli_fetch_row($result)) { ?>	
                        <tr>
                            <td class="room-type"><?php echo $row[0]; ?></td>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td class="price-tag"><?php echo $row[3]; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>			
            </div>
        </div>
    </div>

</body>
</html>
