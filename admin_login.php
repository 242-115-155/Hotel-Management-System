<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - NS Grand Hotel</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: #F8F6F2; /* Cream/off-white background from design */
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Main Glass/Card Container */
        .login-container {
            display: flex;
            width: 850px;
            height: 500px;
            background: #FFFFFF;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0px 20px 40px rgba(0, 0, 0, 0.04);
        }

        /* Left Branding Panel */
        .left-panel {
            flex: 1.1;
            background-color: #231F1B; /* Dark premium chocolate/black tone */
            color: #FFFFFF;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
        }

        .logo-area {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .logo-badge {
            width: 42px;
            height: 42px;
            background: #E5D5C5;
            color: #231F1B;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 16px;
        }

        .hotel-name {
            font-size: 12px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #E5D5C5;
            font-weight: 500;
        }

        .sub-tag {
            font-size: 10px;
            letter-spacing: 1px;
            color: #8C827A;
            text-transform: uppercase;
        }

        .main-headline {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            line-height: 1.4;
            color: #F8F6F2;
            margin-bottom: 12px;
        }

        .main-headline em {
            font-family: 'Playfair Display', serif;
            font-style: italic;
            color: #E5D5C5;
        }

        .description {
            font-size: 12px;
            color: #A39A92;
            line-height: 1.6;
            font-weight: 400;
        }

        /* Stats Counter Row */
        .stats-container {
            display: flex;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            gap: 24px;
        }

        .stat-box {
            flex: 1;
        }

        .stat-number {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            color: #E5D5C5;
        }

        .stat-label {
            font-size: 10px;
            color: #8C827A;
            margin-top: 4px;
        }

        /* Right Form Panel */
        .right-panel {
            flex: 1.2;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-header {
            margin-bottom: 24px;
        }

        .portal-label {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #A39A92;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .welcome-msg {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            color: #231F1B;
            margin-bottom: 6px;
        }

        .subtitle {
            font-size: 12px;
            color: #8C827A;
        }

        /* Input Styles */
        .input-group {
            margin-bottom: 16px;
        }

        .input-group label {
            display: block;
            font-size: 11px;
            font-weight: 600;
            color: #231F1B;
            margin-bottom: 6px;
        }

        .input-field {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #EAE6E1;
            background-color: #FAFAFA;
            border-radius: 8px;
            font-size: 13px;
            color: #231F1B;
            transition: all 0.3s;
        }

        .input-field:focus {
            outline: none;
            border-color: #231F1B;
            background-color: #FFFFFF;
        }

        /* Extra Links (Forgot Password) */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            margin-bottom: 20px;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #666;
            cursor: pointer;
        }

        .forgot-link {
            color: #C49A6C;
            text-decoration: none;
            font-weight: 500;
        }

        /* Actions */
        .submit-btn {
            width: 100%;
            padding: 14px;
            background-color: #231F1B;
            color: #FFFFFF;
            border: none;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.3s;
        }

        .submit-btn:hover {
            background-color: #3d3731;
        }

        .divider {
            text-align: center;
            margin: 20px 0 15px 0;
            position: relative;
            font-size: 11px;
            color: #C8C2BC;
        }

        .divider::before, .divider::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 40%;
            height: 1px;
            background-color: #EAE6E1;
        }
        .divider::before { left: 0; }
        .divider::after { right: 0; }

        .signup-text {
            text-align: center;
            font-size: 12px;
            color: #666;
        }

        .signup-text a {
            color: #231F1B;
            font-weight: 600;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <!-- Left Side: Aesthetic Hotel Info Panel -->
        <div class="left-panel">
            <div class="logo-area">
                <div class="logo-badge">NS</div>
                <div>
                    <div class="hotel-name">NS Grand Hotel</div>
                    <div class="sub-tag">INTERNAL MANAGEMENT</div>
                </div>
            </div>

            <div>
                <h1 class="main-headline">Every guest remembers <em>how</em> they were received.</h1>
                <p class="description">Sign in to manage reservations, guest folios, and room status across the property from a single, quiet workspace.</p>
            </div>

            <div class="stats-container">
                <div class="stat-box">
                    <div class="stat-number">128</div>
                    <div class="stat-label">Rooms managed</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Front desk access</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">4.9</div>
                    <div class="stat-label">Guest rating</div>
                </div>
            </div>
        </div>

        <!-- Right Side: Clean Login Form -->
        <div class="right-panel">
            <div class="form-header">
                <div class="portal-label">Staff Portal</div>
                <h2 class="welcome-msg">Welcome back</h2>
                <p class="subtitle">Sign in with your NS staff credentials to continue.</p>
            </div>

            <!-- Main PHP Action and Methods retained exactly -->
            <form action="admin_db.php" method="post">
                <div class="input-group">
                    <label for="adminid">User ID </label>
                    <input class="input-field" type="text" id="adminid" name="adminid" placeholder="Enter user ID" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input class="input-field" type="password" id="password" name="password" placeholder="••••••••" required>
                </div>

                <div class="form-options">
                    <label class="checkbox-label">
                        <input type="checkbox"> Keep me signed in
                    </label>
                    <!-- Link to forgot password -->
                    <a href="admin_forgot_pwd.php" class="forgot-link">Forgot password?</a>
                </div>

                <button type="submit" class="submit-btn">Sign in to NS Console</button>
            </form>

            <div class="divider">or</div>

            <!-- Link to Signup/Property admin -->
            <p class="signup-text">Need an account? <a href="admin_signup.php">User SignUp</a></p>
        </div>
    </div>

</body>
</html>