<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
<div class="container">
    <h2>LOGIN dulu BOS</h2>
    <p></p>
    <form action="config.php" method="post">
        <label for="username">Username : </label>
        <input type="text" id="username" name="username" require>
<br>
        <label for="password">Password : </label>
        <input type="text" id="password" name="password" require>
<br>
        <input type="submit" value="Login">
    </form>
</div>
</body>
</html>