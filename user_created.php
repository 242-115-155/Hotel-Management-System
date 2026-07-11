<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful - NS Grand Hotel</title>
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

        /* Success Message Card */
        .success-card {
            background: #FFFFFF;
            border-radius: 24px;
            padding: 50px 40px;
            width: 100%;
            max-width: 480px;
            text-align: center;
            box-shadow: 0px 20px 45px rgba(35, 31, 27, 0.05);
            border: 1px solid #EAE6E1;
        }

        /* Success Icon Circle */
        .success-icon-wrapper {
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

        .success-icon-wrapper svg {
            width: 32px;
            height: 32px;
            fill: none;
            stroke: #231F1B;
            stroke-width: 2.5;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .success-card h2 {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            color: #231F1B;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .success-card p {
            font-size: 14px;
            color: #8C827A;
            line-height: 1.6;
            margin-bottom: 35px;
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

    <div class="success-card">
        <!-- SVG Success Checkmark Icon -->
        <div class="success-icon-wrapper">
            <svg viewBox="0 0 24 24">
                <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
        </div>

        <h2>New User Created</h2>
        <p>Your luxury guest identity account has been established successfully. You can now log in to explore rooms and book your premium stay.</p>

        <!-- Redirect Button -->
        <a href="user_login.php" class="btn-redirect">Redirect to User Login</a>
    </div>

</body>
</html>