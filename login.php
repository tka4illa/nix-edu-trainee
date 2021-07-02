<?php
    $loginFlag = false;
    $passwFlag = false;
?>
<html lang="en">
    <head>
        <title>
            TB: log in
        </title>
        <meta charset="utf-8">
    </head>
    <body>
        <div>
            <h1 class="logo">Tka4illaBook</h1>
            <div class="descript">the best way to make ur data public</div><br>
        </div>
        <nav>
            <a href="login.php">Log In</a>
            <a href="register.php">Sign In</a>
            <a href="postlist.php">View Posts</a>
            <a href="userprofile.php">Profile</a>
        </nav>
        <div>
            <form action="" method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username"><br><br>
                <label for="password">Write a password:</label>
                <input type="text" name="password" id="password">
                <input type="submit" name="submit" value="Go!">
            </form>
        </div>
        <div>
            <p>Login here.<br>Soon.</p>
        </div>
    </body>
</html>