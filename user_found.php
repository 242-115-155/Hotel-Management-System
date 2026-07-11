<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Recovered - NS Grand Hotel</title>
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
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Password Recovery Info Card */
        .recovery-card {
            background: #FFFFFF;
            border-radius: 24px;
            padding: 50px 40px;
            width: 100%;
            max-width: 480px;
            text-align: center;
            box-shadow: 0px 20px 45px rgba(35, 31, 27, 0.05);
            border: 1px solid #EAE6E1;
        }

        /* Lock/Security Icon Circle */
        .icon-wrapper {
            width: 64px;
            height: 64px;
            background-color: #F0EDE6;
            color: #231F1B;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px auto;
        }

        .icon-wrapper svg {
            width: 28px;
            height: 28px;
            fill: none;
            stroke: #231F1B;
            stroke-width: 2.2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .recovery-card h2 {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            color: #231F1B;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .recovery-card p {
            font-size: 14px;
            color: #8C827A;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        /* Premium Password Display Box */
        .password-display-box {
            background-color: #FCFBFA;
            border: 1px dashed #D1C9C0;
            border-radius: 12px;
            padding: 16px;
            margin-bottom: 35px;
        }

        .password-label {
            font-size: 11px;
            font-weight: 600;
            color: #8C827A;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: block;
            margin-bottom: 6px;
        }

        .actual-password {
            font-size: 22px;
            font-weight: 600;
            color: #231F1B;
            letter-spacing: 0.5px;
        }

        /* Premium Redirect CTA Button */
        .btn-redirect {
            display: block;
            background-color: #231F1B;
            color: #E5D5C5;
            text-decoration: none;
            padding: 14px;
            font-size: 14px;
            font-weight: 600;
            border-radius: 8px;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(35, 31, 27, 0.1);
        }

        .btn-redirect:hover {
            background-color: #3d3731;
            color: #FFFFFF;
            transform: translateY(-1px);
            box-shadow: 0 6px 15px rgba(35, 31, 27, 0.15);
        }
    </style>
</head>
<body>

    <div class="recovery-card">
        <!-- SVG Secure Lock Icon -->
        <div class="icon-wrapper">
            <svg viewBox="0 0 24 24">
                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
            </svg>
        </div>

        <h2>Account Found</h2>
        <p>Your identity details matched successfully. Below is the registered password associated with your profile.</p>

        <!-- Dynamic Password Fetching Area -->
        <div class="password-display-box">
            <span class="password-label">Your Password is</span>
            <span class="actual-password">
                <?php
                    $conn = new mysqli("localhost", "root", "", "hotel_management_system");
                    if($conn->connect_error)
                    {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * from temp";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_row($result);
                    $sql = "DELETE from temp";
                    mysqli_query($conn, $sql);
                    
                    // Displaying the password securely inside our styled element
                    echo htmlspecialchars($row[0]);
                ?>
            </span>
        </div>

        <!-- Redirect Button -->
        <a href="user_login.php" class="btn-redirect">Redirect to User Login</a>
    </div>

</body>
</html>
