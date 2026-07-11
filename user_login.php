<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NS Grand Hotel - User Login</title>
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

        /* Split-screen Main Master Card */
        .login-master-card {
            display: flex;
            background: #FFFFFF;
            border-radius: 24px;
            width: 100%;
            max-width: 900px; /* Perfect width for split layout */
            min-height: 550px;
            box-shadow: 0px 20px 45px rgba(35, 31, 27, 0.06);
            border: 1px solid #EAE6E1;
            overflow: hidden;
        }

        /* Left Side: Dark Luxury Branding Panel */
        .brand-panel {
            width: 45%;
            background-color: #231F1B; /* Theme dark brown/black */
            color: #FFFFFF;
            padding: 45px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .brand-top {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-badge {
            width: 36px;
            height: 36px;
            background: #E5D5C5;
            color: #231F1B;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 13px;
        }

        .brand-text {
            display: flex;
            flex-direction: column;
        }

        .brand-title {
            font-size: 12px;
            color: #FFF;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .brand-subtitle {
            font-size: 9px;
            color: #8C827A;
            text-transform: uppercase;
            margin-top: 1px;
        }

        .brand-quote h2 {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            line-height: 1.4;
            font-weight: 500;
            color: #FFFFFF;
            margin-bottom: 15px;
        }

        .brand-quote h2 em {
            font-family: 'Playfair Display', serif;
            color: #E5D5C5;
            font-style: italic;
        }

        .brand-quote p {
            font-size: 13px;
            color: #A39A92;
            line-height: 1.6;
        }

        /* Stats Section on Bottom Left */
        .brand-stats {
            display: flex;
            justify-content: space-between;
            border-top: 1px solid #3d3731;
            padding-top: 25px;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
        }

        .stat-val {
            font-size: 16px;
            font-weight: 600;
            color: #E5D5C5;
        }

        .stat-lbl {
            font-size: 10px;
            color: #8C827A;
            text-transform: uppercase;
            margin-top: 2px;
        }

        /* Right Side: Clean Login Form Panel */
        .form-panel {
            width: 55%;
            padding: 55px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-header {
            margin-bottom: 30px;
        }

        .form-header span {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #8C827A;
            font-weight: 600;
            display: block;
            margin-bottom: 4px;
        }

        .form-header h3 {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            color: #231F1B;
            font-weight: 600;
        }

        .form-header p {
            font-size: 13px;
            color: #8C827A;
            margin-top: 4px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 11px;
            font-weight: 600;
            color: #59524C;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .input-field {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #D1C9C0;
            border-radius: 8px;
            background-color: #FCFBFA;
            font-size: 14px;
            color: #231F1B;
            outline: none;
            transition: all 0.3s ease;
        }

        .input-field::placeholder {
            color: #B5AA00;
            opacity: 0.4;
        }

        .input-field:focus {
            border-color: #231F1B;
            background-color: #FFFFFF;
            box-shadow: 0 0 0 3px rgba(35, 31, 27, 0.05);
        }

        /* Button & Bottom utilities */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            margin-bottom: 25px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #59524C;
            cursor: pointer;
        }

        .forgot-link {
            color: #8C827A;
            text-decoration: none;
            transition: color 0.2s;
        }

        .forgot-link:hover {
            color: #231F1B;
            text-decoration: underline;
        }

        .btn-submit {
            width: 100%;
            background-color: #231F1B;
            color: #E5D5C5;
            border: none;
            padding: 14px;
            font-size: 14px;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(35, 31, 27, 0.1);
        }

        .btn-submit:hover {
            background-color: #3d3731;
            color: #FFFFFF;
            transform: translateY(-1px);
            box-shadow: 0 6px 15px rgba(35, 31, 27, 0.15);
        }

        .signup-prompt {
            text-align: center;
            margin-top: 30px;
            font-size: 13px;
            color: #8C827A;
        }

        .signup-prompt a {
            color: #231F1B;
            font-weight: 600;
            text-decoration: none;
            margin-left: 4px;
        }

        .signup-prompt a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Split Master Card Container -->
    <div class="login-master-card">
        
        <!-- LEFT SIDE PANEL: Branding & Philosophy -->
        <div class="brand-panel">
            <div class="brand-top">
                <div class="logo-badge">NS</div>
                <div class="brand-text">
                    <span class="brand-title">NS Grand Hotel</span>
                    <span class="brand-subtitle">Guest Portal</span>
                </div>
            </div>

            <div class="brand-quote">
                <h2>Experience the art of <em>luxury living</em>.</h2>
                <p>Book your ideal stay, manage reservations smoothly, and enjoy personalized premium hospitality tailored just for you.</p>
            </div>

            <div class="brand-stats">
                <div class="stat-item">
                    <span class="stat-val">5-Star</span>
                    <span class="stat-lbl">Luxury Rooms</span>
                </div>
                <div class="stat-item">
                    <span class="stat-val">24/7</span>
                    <span class="stat-lbl">Guest Support</span>
                </div>
                <div class="stat-item">
                    <span class="stat-val">4.9</span>
                    <span class="stat-lbl">Guest Rating</span>
                </div>
            </div>
        </div>

        <!-- RIGHT SIDE PANEL: Form Controls -->
        <div class="form-panel">
            <div class="form-header">
                <span>GUEST PORTAL</span>
                <h3>Welcome back</h3>
                <p>Sign in with your registered phone credentials to continue.</p>
            </div>

            <!-- Main Form Logic Link -->
            <form action="user_logged_in.php" method="post">
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input class="input-field" type="text" name="phone" id="phone" placeholder="Enter phone number" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="input-field" type="password" name="password" id="password" placeholder="••••••••" required>
                </div>

                <!-- Remember Me & Forgot Password Flex Line (Admin Style) -->
                <div class="form-options">
                    <label class="remember-me">
                        <input type="checkbox" name="remember"> Keep me signed in
                    </label>
                    <a class="forgot-link" href="user_forgot_pwd.php">Forgot password?</a>
                </div>

                <button class="btn-submit" type="submit">Sign in to Guest Account</button>
            </form>

            <!-- Bottom Registration Trigger -->
            <div class="signup-prompt">
                Need an account? <a href="user_signup.php">User SignUp</a>
            </div>
        </div>

    </div>

</body>
</html>