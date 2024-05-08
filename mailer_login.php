<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsLetter</title>
    <link rel="stylesheet" href="assets/css/authorization.css">
</head>
<body>
    <div class="container">
        <form action="login.php" class="form" method="post">
            <div class="email">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="email">
            </div><br>
            <div class="password">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="password">
            </div>
            <div class="button">
                <button type="submit" name="login">Login</button>
            </div>
            <a href="">Don't Have an account?</a>
        </form>
    </div>
</body>
</html>