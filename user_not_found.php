<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Not Found - NS Grand Hotel</title>
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

        /* Error Message Card */
        .error-card {
            background: #FFFFFF;
            border-radius: 24px;
            padding: 50px 40px;
            width: 100%;
            max-width: 480px;
            text-align: center;
            box-shadow: 0px 20px 45px rgba(35, 31, 27, 0.05);
            border: 1px solid #EAE6E1;
        }

        /* Alert/Exclamation Icon Circle */
        .icon-wrapper {
            width: 64px;
            height: 64px;
            background-color: #F5EFEF;
            color: #A64B4B;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px auto;
        }

        .icon-wrapper svg {
            width: 32px;
            height: 32px;
            fill: none;
            stroke: #A64B4B;
            stroke-width: 2.2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .error-card h2 {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            color: #231F1B;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .error-card p {
            font-size: 14px;
            color: #8C827A;
            line-height: 1.6;
            margin-bottom: 35px;
        }

        /* Action Buttons Container */
        .action-container {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        /* Premium Dark Action Button */
        .btn-retry {
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

        .btn-retry:hover {
            background-color: #3d3731;
            color: #FFFFFF;
            transform: translateY(-1px);
            box-shadow: 0 6px 15px rgba(35, 31, 27, 0.15);
        }

        /* Soft Secondary Button Link */
        .btn-secondary {
            display: block;
            color: #8C827A;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            padding: 8px;
            transition: color 0.2s;
        }

        .btn-secondary:hover {
            color: #231F1B;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="error-card">
        <!-- SVG Exclamation/Alert Icon -->
        <div class="icon-wrapper">
            <svg viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="12"></line>
                <line x1="12" y1="16" x2="12.01" y2="16"></line>
            </svg>
        </div>

        <h2>User Not Found</h2>
        <p>The email address or date of birth you entered does not match any registered profile in our system. Please check your credentials and try again.</p>

        <!-- Redirect Actions -->
        <div class="action-container">
            <a href="user_forgot_pwd.php" class="btn-retry">Try Again</a>
            <a href="user_login.php" class="btn-secondary">Back to User Login</a>
        </div>
    </div>

</body>
</html>