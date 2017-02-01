<?php require_once 'includes/header.php'?>

<?php
require_once('Database/dbconfig.php');
if(isset($_POST['addUser']))
{
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password=crypt($_POST['password']);
    $sql_query = "INSERT INTO users(email,username,password) VALUES('$email','$username','$password')";
    mysqli_query($connection,$sql_query);
    header('Location: viewUser.php');
}
?>


    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./index.php">myAttorney</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="viewLawyer.php">View Lawyers</a></li>
                    <li><a href="addLawyer.php">Add Lawyers</a></li>
                    <li><a href="viewForum.php">View Forums</a></li>
                    <li><a href="addForum.php">Add Forums</a></li>
                    <li><a href="viewUser.php">View Users</a></li>
                    <li class="active"><a href="addUser.php">Add Users</a></li>
                    <li><a href="./admin.php">Admin Panel</a> </li>
                    <li><a href="findForum.php">Find Forum</a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
            </div>
        </nav>

    </div>

    <div class="container">

    <form class="form-horizontal" role="form" action="addUser.php" method="post">
        <h2>Add User</h2>
        <div class="form-group">
            <label for="userName" class="col-sm-3 control-label">User Name</label>
            <div class="col-sm-9">
                <input type="text" placeholder="username" class="form-control" autofocus name="username">
                <span class="help-block">eg. anonymous</span>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" name="email" id="email" placeholder="someone@somewhere.com" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="longitude" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="text" id="password" name="password" placeholder="********" class="form-control">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block" name="addUser">Add User</button>
            </div>
        </div>
    </form> <!-- /form -->
</div> <!-- ./container -->

<?php require_once 'includes/footer.php' ?>