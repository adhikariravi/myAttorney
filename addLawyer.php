
<?php

    require_once 'includes/header.php';
    include_once('Database/dbconfig.php');

    if(isset($_POST['addLawyer']))
    {
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $phone=$_POST['phone'];
        $sql_query = "INSERT INTO lawyers(fullName,email,dob,gender,phone) VALUES('$fullName','$email','$dob','$gender','$phone')";
        if(mysqli_query($connection,$sql_query))
            header('Location: viewLawyer.php');
        else
            die("UnSuccessful");
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
                <li class="active"><a href="addLawyer.php">Add Lawyers</a></li>
                <li><a href="viewForum.php">View Forums</a></li>
                <li><a href="addForum.php">Add Forums</a></li>
                <li><a href="viewUser.php">View Users</a></li>
                <li><a href="addUser.php">Add Users</a></li>
                <li><a href="./admin.php">Admin Panel</a> </li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </div>
    </nav>
</div>


<div class="container">
    <form class="form-horizontal" role="form" method="post" action="addLawyer.php">
        <h2>Add Lawyer Details</h2>
        <div class="form-group">
            <label for="fullName" class="col-sm-3 control-label">Full Name</label>
            <div class="col-sm-9">
                <input type="text" name="fullName" placeholder="Full Name" class="form-control" autofocus>
                <span class="help-block">eg: Ram Bahadur Shah</span>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" name="email" placeholder="Email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
            <div class="col-sm-9">
                <input type="date" name="dob" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="phoneNumber" class="col-sm-3 control-label">Phone Number</label>
            <div class="col-sm-9">
                <input id="phoneNumber" type="text" name="phone" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">Gender</label>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="Female">Female
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="Male">Male
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="Unknown">Unknown
                        </label>
                    </div>
                </div>
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block" name="addLawyer">Add Lawyer</button>
            </div>
        </div>
    </form> <!-- /form -->
</div> <!-- ./container -->


<?php require_once 'includes/footer.php' ?>
