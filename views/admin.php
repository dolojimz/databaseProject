<?php
    session_start();
    echo isset($_SESSION['login']);
    if(isset($_SESSION['login'])) {
        header('LOCATION:index.php'); die();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv='content-type' content='text/html;charset=utf-8' />
    <title>AdminLogin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
    <h3 class="text-center">Login</h3>
    <?php
        if(isset($_POST['submit'])){
            $username = $_POST['username']; $password = $_POST['password'];
            if($username === 'admin' && $password === 'password'){
                $_SESSION['login'] = true; header('LOCATION:admin.php'); die();
            } {
                echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
            }
        }
    ?>
    <form action="signInAdmin.php" method = "post">
        <label for="username">Username</label> <input type="username" id="usename" name="username"><br /><br />
        <label for="password">Password:</label> <input type="text" id="password" name="password"><br /><br />
        <button type = "submit">Login</button>
    </form>
    </div>
</body>
</html>
