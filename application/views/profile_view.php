<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    <p>First Name: <?php echo $user['first_name']; ?></p>
    <p>Last Name: <?php echo $user['last_name']; ?></p>
    <p>Email: <?php echo $user['email']; ?></p>
    <a href="<?php echo site_url('profile/edit'); ?>">Edit Profile</a>
    <a href="<?php echo site_url('auth/logout'); ?>">Logout</a>
</body>
</html>
