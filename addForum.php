<?php require_once 'includes/header.php'?>

<?php
require_once('Database/dbconfig.php');
if(isset($_POST['addForum']))
{
    $email = $_POST['email'];
    $pan = $_POST['pan'];
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $sql_query = "INSERT INTO forum(email,pan,latitude,longitude) VALUES('$email','$pan','$latitude','$longitude')";
    mysqli_query($connection,$sql_query);
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
                <li class="active"><a href="addForum.php">Add Forums</a></li>
                <li><a href="viewUser.php">View Users</a></li>
                <li><a href="addUser.php">Add Users</a></li>
                <li><a href="./admin.php">Admin Panel</a> </li>
                <li><a href="findForum.php">Find Forum</a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </div>
    </nav>
</div>


    <div class="container">

    <form class="form-horizontal" role="form" action="addForum.php" method="post">
        <h2>Add Forum</h2>
        <div class="form-group">
            <label for="companyName" class="col-sm-3 control-label">Full Name</label>
            <div class="col-sm-9">
                <input type="text" id="companyName" placeholder="Company Name" class="form-control" autofocus>
                <span class="help-block">eg. The Law Forum</span>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" name="email" id="email" placeholder="Email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="panNo" class="col-sm-3 control-label">PAN Number</label>
            <div class="col-sm-9">
                <input type="text" id="panNo" name="pan" placeholder="PAN Number" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="latitude" class="col-sm-3 control-label">Latitude</label>
            <div class="col-sm-9">
                <input type="text" name="latitude" id="latitude" placeholder="81.102345" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="longitude" class="col-sm-3 control-label">Longitude</label>
            <div class="col-sm-9">
                <input type="text" id="longitude" name="longitude" placeholder="81.102345" class="form-control">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block" name="addForum">Add Forum</button>
            </div>
        </div>
    </form> <!-- /form -->
</div> <!-- ./container -->

<?php require_once 'includes/footer.php' ?>