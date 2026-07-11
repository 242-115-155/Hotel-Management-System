<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NS Grand Hotel - New User SignUp</title>
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
            padding: 40px 20px;
        }

        /* Split-screen Main Master Card */
        .login-master-card {
            display: flex;
            background: #FFFFFF;
            border-radius: 24px;
            width: 100%;
            max-width: 950px; /* Slightly wider to comfortably fit signup forms */
            min-height: 650px;
            box-shadow: 0px 20px 45px rgba(35, 31, 27, 0.06);
            border: 1px solid #EAE6E1;
            overflow: hidden;
        }

        /* Left Side: Dark Luxury Branding Panel */
        .brand-panel {
            width: 42%;
            background-color: #231F1B; /* Theme dark brown/black */
            color: #FFFFFF;
            padding: 45px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
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

        /* Right Side: Clean Signup Form Panel */
        .form-panel {
            width: 58%;
            padding: 45px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-header {
            margin-bottom: 25px;
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

        /* Compact Form Grid to lay out inputs beautifully */
        .signup-form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px 20px;
            margin-bottom: 25px;
        }

        /* Full width utility for specific fields if needed */
        .full-width {
            grid-column: span 2;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-size: 11px;
            font-weight: 600;
            color: #59524C;
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .input-field {
            width: 100%;
            padding: 11px 14px;
            border: 1px solid #D1C9C0;
            border-radius: 8px;
            background-color: #FCFBFA;
            font-size: 14px;
            color: #231F1B;
            outline: none;
            transition: all 0.3s ease;
        }

        .input-field::placeholder {
            color: #B5Aaa0;
            opacity: 0.5;
        }

        .input-field:focus {
            border-color: #231F1B;
            background-color: #FFFFFF;
            box-shadow: 0 0 0 3px rgba(35, 31, 27, 0.05);
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

        .login-prompt {
            text-align: center;
            margin-top: 25px;
            font-size: 13px;
            color: #8C827A;
        }

        .login-prompt a {
            color: #231F1B;
            font-weight: 600;
            text-decoration: none;
            margin-left: 4px;
        }

        .login-prompt a:hover {
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

        <!-- RIGHT SIDE PANEL: Registration Form Controls -->
        <div class="form-panel">
            <div class="form-header">
                <span>CREATE ACCOUNT</span>
                <h3>New User SignUp</h3>
                <p>Please provide your valid details to establish a luxury guest identity.</p>
            </div>

            <!-- Signup Form Logic Link -->
            <form action="user_signed_up.php" method="post">
                <div class="signup-form-grid">
                    
                    <div class="form-group full-width">
                        <label for="name">Full Name</label>
                        <input class="input-field" type="text" name="name" id="name" placeholder="Enter your full name" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input class="input-field" type="number" name="phone" id="phone" placeholder="e.g. 017XXXXXXXX" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="input-field" type="password" name="password" id="password" placeholder="Create safe password" required>
                    </div>

                    <div class="form-group full-width">
                        <label for="email">Email ID</label>
                        <input class="input-field" type="email" name="email" id="email" placeholder="name@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="idproof">ID Proof (NID / Passport)</label>
                        <input class="input-field" type="text" name="idproof" id="idproof" placeholder="Enter ID Document No." required>
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input class="input-field" type="date" name="dob" id="dob" value="2000-01-01" required>
                    </div>

                </div>

                <button class="btn-submit" type="submit">Submit Registration</button>
            </form>

            <!-- Bottom Login Redirection -->
            <div class="login-prompt">
                Already have an account? <a href="user_login.php">User Login</a>
            </div>
        </div>

    </div>

</body>
</html>