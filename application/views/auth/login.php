<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            margin-bottom: 15px;
        }

        #infoMessage {
            color: #e74c3c;
            margin-bottom: 15px;
            text-align: center;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        .submit-btn {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }

        .submit-btn:hover {
            background-color: #2980b9;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .register-btn {
            background-color: #2ecc71;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }

        .register-btn:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1><?php echo lang('login_heading'); ?></h1>
        <p><?php echo lang('login_subheading'); ?></p>

        <div id="infoMessage"><?php echo $message; ?></div>

        <?php echo form_open("auth/login"); ?>

        <p>
            <label for="identity"><?php echo lang('login_identity_label', 'identity'); ?></label>
            <?php echo form_input($identity); ?>
        </p>

        <p>
            <label for="password"><?php echo lang('login_password_label', 'password'); ?></label>
            <?php echo form_input($password); ?>
        </p>

        <p>
            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
            <label for="remember"><?php echo lang('login_remember_label', 'remember'); ?></label>
        </p>

        <p>
            <input type="submit" class="submit-btn" value="<?php echo lang('login_submit_btn'); ?>">
        </p>

        <?php echo form_close(); ?>

        <p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>

        <p>Don't have an account?</p>
        <a href="register" class="register-btn">Register</a>
    </div>
</body>
</html>
