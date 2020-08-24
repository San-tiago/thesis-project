<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="<?php echo base_url(). 'Main_log/login_validation'?>" method = "post">

    <h1>Log-in</h1>
        <label>Username: </label>
        <input type="text" name="username">
        <span><?php echo form_error('username')?></span>
        <br>

        <label>Username: </label>
        <input type="password" name="password">
        <span><?php echo form_error('password')?></span>
        <br>

        <input type="submit" value="Login" name="insert">
    </form>

</body>
</html>