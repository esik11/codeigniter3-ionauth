<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
</head>
<body>
    <h1>Edit Profile</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('profile/edit'); ?>

    <label for="first_name">First Name</label>
    <input type="text" name="first_name" value="<?php echo set_value('first_name', $user['first_name']); ?>" /><br />

    <label for="last_name">Last Name</label>
    <input type="text" name="last_name" value="<?php echo set_value('last_name', $user['last_name']); ?>" /><br />

    <label for="email">Email</label>
    <input type="text" name="email" value="<?php echo set_value('email', $user['email']); ?>" /><br />

    <input type="submit" value="Update" />
    </form>

    <a href="<?php echo site_url('profile'); ?>">Back to Profile</a>
</body>
</html>
