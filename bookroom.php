<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book A Room</title>
    <!-- Premium Fonts matching Figma & User View -->
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
        }

        .user-greeting span {
            color: #C49A6C;
        }

        /* Responsive Dual Column Grid for Info Table & Form */
        .booking-grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 40px;
            align-items: start;
        }

        /* Premium White Container Card */
        .card {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 35px 40px;
            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.03);
            border: 1px solid #EAE6E1;
        }

        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
            color: #231F1B;
            margin-bottom: 25px;
            font-weight: 600;
            border-bottom: 2px solid #F2EFEA;
            padding-bottom: 12px;
        }

        /* Premium Minimalist Tables */
        .room-table, .features-table {
            width: 100%;
            border-collapse: collapse;
        }

        .room-table th, .features-table th {
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #8C827A;
            text-align: left;
            padding: 12px 15px;
            background-color: #FDFDFD;
            border-bottom: 2px solid #EAE6E1;
        }

        .room-table td, .features-table td {
            font-size: 13px;
            padding: 14px 15px;
            border-bottom: 1px solid #F2EFEA;
            color: #231F1B;
        }

        .price-highlight {
            font-weight: 600;
            color: #C49A6C;
        }

        /* Form Group Styles */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #8C827A;
            margin-bottom: 8px;
        }

        /* Premium Input Elements */
        .form-group select, .form-group input[type="date"] {
            width: 100%;
            padding: 12px 16px;
            font-size: 14px;
            color: #231F1B;
            background-color: #FDFDFD;
            border: 1px solid #EAE6E1;
            border-radius: 8px;
            outline: none;
            transition: all 0.3s ease;
        }

        .form-group select:focus, .form-group input[type="date"]:focus {
            border-color: #231F1B;
            box-shadow: 0 0 0 3px rgba(35, 31, 27, 0.05);
        }

        /* Modern Checkbox styling */
        .checkbox-container {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 500;
        }

        .checkbox-container input[type="checkbox"] {
            accent-color: #231F1B;
            width: 16px;
            height: 16px;
        }

        /* Center Submit Button Panel */
        .form-actions {
            margin-top: 30px;
            text-align: right;
        }

        .btn-submit {
            background-color: #231F1B;
            color: #E5D5C5;
            border: none;
            padding: 14px 35px;
            font-size: 13px;
            font-weight: 600;
            border-radius: 8px;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
        }

        .btn-submit:hover {
            background-color: #3d3731;
            color: #FFFFFF;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
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
            <li><a href="user_view.php">My Info</a></li>
            <li><a href="bookroom.php" class="active">Book A Room</a></li>
            <li><a href="user_room_status.php">Show Booking Status</a></li>
            <li><a href="user_payment.php">Payment</a></li>
            <li><a href="user_booking_history.php">Booking History</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </div>

    <!-- Main Workspace Area -->
    <div class="main-content">
        <!-- Header Panel -->
        <div class="page-header">
            <div>
                <h1>Reservation Portal</h1>
                <p>Select your luxury room tier and preferred lifestyle amenities.</p>
            </div>
            <div class="user-greeting">
                Hello, <span><?php echo htmlspecialchars($row[2]); ?></span>
            </div>
        </div>

        <!-- Master Content Layout Grid -->
        <div class="booking-grid">
            
            <!-- Left Column: Room Inventory Pricing -->
            <div class="card">
                <h2 class="card-title">Room Pricing Tier</h2>
                <table class="room-table">
                    <thead>
                        <tr>
                            <th>Room Type</th>
                            <th>Beds</th>
                            <th>Price / Night</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Single Bedded</td>
                            <td>1</td>
                            <td class="price-highlight">BDT 1,000</td>
                        </tr>
                        <tr>
                            <td>Double Bedded</td>
                            <td>2</td>
                            <td class="price-highlight">BDT 1,800</td>
                        </tr>
                        <tr>
                            <td>Four Bedded</td>
                            <td>4</td>
                            <td class="price-highlight">BDT 3,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Right Column: Interactive Booking Form -->
            <div class="card">
                <h2 class="card-title">Reservation Form</h2>
                <form action="bookroom1.php" method="post">
                    
                    <div class="form-group">
                        <label for="rooms">Select Room Type</label>
                        <select name="rooms" id="rooms" required>
                            <option value="">-- Select Tier --</option>
                            <option value="Single bed">Single Bedded</option>
                            <option value="Double bed">Double Bedded</option>
                            <option value="Four bed">Four Bedded</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="checkin">Check-In Date</label>
                        <input type="date" name="checkin" id="checkin" required>
                    </div>

                    <div class="form-group">
                        <label for="checkout">Check-Out Date</label>
                        <input type="date" name="checkout" id="checkout" required>
                    </div>

                    <h3 class="card-title" style="font-size:18px; margin-top:25px; margin-bottom:15px;">Add-on Amenities</h3>
                    
                    <table class="features-table">
                        <thead>
                            <tr>
                                <th>Features</th>
                                <th style="text-align: right;">Cost / Day</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label class="checkbox-container">
                                        <input type="checkbox" name="ac" value="on"> Air Conditioning (AC)
                                    </label>
                                </td>
                                <td style="text-align: right;" class="price-highlight">BDT 300</td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkbox-container">
                                        <input type="checkbox" name="breakfast" value="on"> Luxury Breakfast
                                    </label>
                                </td>
                                <td style="text-align: right;" class="price-highlight">BDT 150</td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkbox-container">
                                        <input type="checkbox" name="lunch" value="on"> Royal Lunch
                                    </label>
                                </td>
                                <td style="text-align: right;" class="price-highlight">BDT 300</td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkbox-container">
                                        <input type="checkbox" name="snacks" value="on"> Evening Snacks
                                    </label>
                                </td>
                                <td style="text-align: right;" class="price-highlight">BDT 120</td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkbox-container">
                                        <input type="checkbox" name="dinner" value="on"> Gourmet Dinner
                                    </label>
                                </td>
                                <td style="text-align: right;" class="price-highlight">BDT 250</td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkbox-container">
                                        <input type="checkbox" name="swimming" value="on"> Swimming Pool Access
                                    </label>
                                </td>
                                <td style="text-align: right;" class="price-highlight">BDT 300</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="form-actions">
                        <button type="submit" class="btn-submit">Confirm Request</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</body>
</html>