<?php 
    require_once 'includes/header.php';
    require_once('Database/dbconfig.php');
    $id=$_GET['update_id'];
    $sql_query="SELECT * FROM forum WHERE id='{$id}'";
    $resultSet=$connection->query($sql_query);
    $forum_values=[];
    if($resultSet->num_rows>0) {
        while ($row=$resultSet->fetch_assoc()) {
            $id=$row['id'];
            $email=$row['email'];
            $name = $row['name'];
            $lat = $row['latitude'];
            $lng = $row['longitude'];
            $email=$row['email'];
            $forum_values['id']=$id;
            $forum_values['name']=$name;
            $forum_values['email']=$email;
            $forum_values['lat']=$lat;
            $forum_values['lng']=$lng;
        }
    }
    if(isset($_POST['updateForum']))
    {
        $name=$_POST['name'];
        $id=$_POST['id'];
        $email = $_POST['email'];
        $latitude=$_POST['latitude'];
        $longitude=$_POST['longitude'];
        $sql_query = "UPDATE forum SET ";
        $sql_query.="email="."'{$email}', ";
        $sql_query.="name="."'{$name}', ";
        $sql_query.="latitude="."'{$latitude}', ";
        $sql_query.="longitude="."'{$longitude}' WHERE id='{$id}'";
        $result = $connection->query($sql_query);
        $connection->close();
        if($result) header('Location: viewForum.php'); else die("Unsuccessful");
    }
?>


    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="./">myAttorney</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="viewLawyer.php">View Lawyers</a></li>
                <li><a href="addLawyer.php">Add Lawyers</a></li>
                <li><a href="viewForum.php">View Forums</a></li>
                <li><a href="addForum.php">Add Forums</a></li>
                <li><a href="viewUser.php">View Users</a></li>
                <li><a href="addUser.php">Add Users</a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </div>
    </nav>


    <div class="container">

    <form class="form-horizontal" role="form" action="editForum.php" method="post">
        <h2>Add Forum</h2>
        <div class="form-group">
            <label for="companyName" class="col-sm-3 control-label">Full Name</label>
            <div class="col-sm-9">
                <input type="hidden" name="id" value="<?php echo $forum_values['id']?>">
                <input type="text" id="companyName" placeholder="Company Name" class="form-control" name="name" value="<?php echo $forum_values['name']?>" autofocus>
                <span class="help-block">eg. The Law Forum</span>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="<?php echo $forum_values['email']?>">
            </div>
        </div>
        <div class="form-group">
            <label for="latitude" class="col-sm-3 control-label">Latitude</label>
            <div class="col-sm-9">
                <input type="text" name="latitude" id="latitude" placeholder="81.102345" class="form-control" value="<?php echo $forum_values['lat']?>">
            </div>
        </div>
        <div class="form-group">
            <label for="longitude" class="col-sm-3 control-label">Longitude</label>
            <div class="col-sm-9">
                <input type="text" id="longitude" name="longitude" placeholder="81.102345" class="form-control" value="<?php echo $forum_values['lng']?>">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block" name="updateForum">Update Forum</button>
            </div>
        </div>
    </form> <!-- /form -->
</div> <!-- ./container -->

<?php require_once 'includes/footer.php' ?>