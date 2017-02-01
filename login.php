<?php
    require_once 'Database/dbconfig.php';
    if(isset($_POST['lgn-btn']))  {
        $username=$_POST['username'];
        $user_password = $_POST['password'];
        $sql_statement = "SELECT * FROM users WHERE username=\"{$username}\"";
        $result_set=$connection->query($sql_statement);
        if($result_set->num_rows > 0) {
            while($row=$result_set->fetch_assoc()) {
                $username=$row['username'];
                $hashed_password=$row['password'];
                if (hash_equals($hashed_password, crypt($user_password, $hashed_password))) {
                    session_start();
                    $_SESSION['userid']=$row['id'];
                    $_SESSION['username']=$row['username'];
                    header('Location: viewLawyer.php');
                } else {
                    header('Location: login.php');
                }
            }
            $connection->close();
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in</h1>
            <div class="account-wall">
                <img class="profile-img" src="img/noUser.png"
                     alt="">
                <form class="form-signin" action="login.php" method="post">
                    <input name="username" type="text" class="form-control" placeholder="Email" required autofocus>
                    <input name="password" type="password" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="lgn-btn">
                        Sign in</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Remember me
                    </label>
                    <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="#" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>
</body>

<?require_once('includes/footer.php'); ?>