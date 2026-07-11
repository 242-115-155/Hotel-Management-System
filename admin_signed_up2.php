<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Failed - NS Grand Hotel</title>
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

        /* Error/Failure Message Card for Admin */
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

        /* Admin Error Icon Circle (Sophisticated Rust/Muted Red) */
        .error-icon-wrapper {
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

        .error-icon-wrapper svg {
            width: 32px;
            height: 32px;
            fill: none;
            stroke: #A64B4B;
            stroke-width: 2.5;
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

        /* Redirect Actions Layout */
        .action-container {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        /* Premium Dark Corporate Action Button */
        .btn-retry {
            display: block;
            background-color: #1F2223; /* Admin dark charcoal */
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
            background-color: #33383A;
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
            color: #1F2223;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="error-card">
        <!-- SVG Error X Cross Icon -->
        <div class="error-icon-wrapper">
            <svg viewBox="0 0 24 24">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </div>

        <h2>Admin Not Created</h2>
        <p>The system was unable to register the new administrative account. This could be due to a conflicting Employee ID, an existing User ID, or a secure network restriction.</p>

        <!-- Redirection Actions -->
        <div class="action-container">
            <!-- Assuming admin_signup page handles the form, change name if needed -->
            <a href="admin_signup.php" class="btn-retry">Try Again</a>
            <a href="admin_login.php" class="btn-secondary">Redirect to Admin Login</a>
        </div>
    </div>

</body>
</html>