<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NS Grand Hotel - Admin Forgot Password</title>
    
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
            max-width: 900px;
            min-height: 550px;
            box-shadow: 0px 20px 45px rgba(35, 31, 27, 0.06);
            border: 1px solid #EAE6E1;
            overflow: hidden;
        }

        /* Left Side: Dark Luxury Branding Panel for Admin */
        .brand-panel {
            width: 45%;
            background-color: #1F2223; /* Dark slate/charcoal for admin terminal */
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
            color: #1F2223;
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
            color: #8C8C8C;
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
            color: #A3A3A3;
            line-height: 1.6;
        }

        /* Bottom Status Area */
        .brand-status-footer {
            border-top: 1px solid #33383A;
            padding-top: 25px;
            font-size: 11px;
            color: #8C8C8C;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Right Side: Clean Password Recovery Panel */
        .form-panel {
            width: 55%;
            padding: 55px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-header {
            margin-bottom: 35px;
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
            margin-bottom: 22px;
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
            color: #B5AAA0;
            opacity: 0.5;
        }

        .input-field:focus {
            border-color: #1F2223;
            background-color: #FFFFFF;
            box-shadow: 0 0 0 3px rgba(31, 34, 35, 0.06);
        }

        .btn-submit {
            width: 100%;
            background-color: #1F2223;
            color: #E5D5C5;
            border: none;
            padding: 14px;
            font-size: 14px;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(31, 34, 35, 0.1);
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: #33383A;
            color: #FFFFFF;
            transform: translateY(-1px);
            box-shadow: 0 6px 15px rgba(31, 34, 35, 0.15);
        }

        .login-prompt {
            text-align: center;
            margin-top: 30px;
            font-size: 13px;
            color: #8C827A;
        }

        .login-prompt a {
            color: #1F2223;
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
        
        <!-- LEFT SIDE PANEL: Admin Branding -->
        <div class="brand-panel">
            <div class="brand-top">
                <div class="logo-badge">NS</div>
                <div class="brand-text">
                    <span class="brand-title">NS Grand Hotel</span>
                    <span class="brand-subtitle">Internal Management</span>
                </div>
            </div>

            <div class="brand-quote">
                <h2>Control & <em>Elevate</em> hospitality standards.</h2>
                <p>Access the core dashboard to manage real-time operations, guest experiences, and luxury suite optimization seamlessly.</p>
            </div>

            <div class="brand-status-footer">
                Administrative Terminal Secured
            </div>
        </div>

        <!-- RIGHT SIDE PANEL: Password Recovery Controls -->
        <div class="form-panel">
            <div class="form-header">
                <span>TERMINAL RECOVERY</span>
                <h3>Admin Forgot Password</h3>
                <p>Verify your secure identifiers below to regain management access.</p>
            </div>

            <!-- Recovery Form Action Link -->
            <form method="post" action="admin_forgot_pwd1.php">
                
                <div class="form-group">
                    <label for="adminid">User ID</label>
                    <input class="input-field" type="text" name="adminid" id="adminid" placeholder="Enter user ID" required>
                </div>
                
                <div class="form-group">
                    <label for="empid">Employee ID</label>
                    <input class="input-field" type="text" name="empid" id="empid" placeholder="Enter emp ID" required>
                </div>

                <button class="btn-submit" type="submit">Submit Verification</button>
            </form>

            <!-- Bottom Redirection Link -->
            <div class="login-prompt">
                Remembered your credentials? <a href="admin_login.php">Admin Login</a>
            </div>
        </div>

    </div>

</body>
</html>
