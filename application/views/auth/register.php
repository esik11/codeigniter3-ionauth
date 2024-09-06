<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

        .register-container {
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

        #infoMessage {
            color: #e74c3c;
            margin-bottom: 15px;
            text-align: center;
        }

        p {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Register</h1>

        <div id="infoMessage"><?php echo $this->session->flashdata('message'); ?></div>

        <?php echo form_open("auth/register"); ?>

        <p>
            <?php echo form_label('First Name', 'first_name'); ?><br />
            <?php echo form_input(array('name' => 'first_name', 'value' => set_value('first_name'))); ?>
        </p>

        <p>
            <?php echo form_label('Last Name', 'last_name'); ?><br />
            <?php echo form_input(array('name' => 'last_name', 'value' => set_value('last_name'))); ?>
        </p>

        <p>
            <?php echo form_label('Email', 'email'); ?><br />
            <?php echo form_input(array('name' => 'email', 'value' => set_value('email'))); ?>
        </p>

        <p>
            <?php echo form_label('Password', 'password'); ?><br />
            <?php echo form_password(array('name' => 'password')); ?>
        </p>

        <p>
            <?php echo form_label('Confirm Password', 'password_confirm'); ?><br />
            <?php echo form_password(array('name' => 'password_confirm')); ?>
        </p>

        <p><?php echo form_submit('submit', 'Register'); ?></p>

        <?php echo form_close(); ?>
    </div>
</body>
</html>
