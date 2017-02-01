<?php 
    require_once 'includes/header.php';
    require_once('Database/dbconfig.php');
    $id=$_GET['update_id'];
    $sql_query="SELECT * FROM users WHERE id='{$id}'";
    $resultSet=$connection->query($sql_query);
    $forum_values=[];
    if($resultSet->num_rows>0) {
        while ($row=$resultSet->fetch_assoc()) {

            $id=$row['id'];
            $email=$row['email'];
            $username=$row['username'];
            $password=$row['password'];

            $forum_values['id']=$id;
            $forum_values['username']=$username;
            $forum_values['email']=$email;
            $forum_values['password']=$password;
        }

    }

    if(isset($_POST['updateUser']))
    {
        $id=$_POST['id'];
        $username=$_POST['username'];
        $email = $_POST['email'];
        $password=crypt($_POST['password']);

        $sql_query = "UPDATE users SET ";
        $sql_query.="email="."'{$email}', ";
        $sql_query.="username="."'{$username}', ";
        $sql_query.="password="."\"{$password}\" WHERE id=\"{$id}\"";
        $result = $connection->query($sql_query);
        $connection->close();
        if($result) header('Location: viewUser.php'); else die("Unsuccessful");
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

    <form class="form-horizontal" role="form" action="editUser.php" method="post">
        <h2>Edit User</h2>
        <div class="form-group">
            <label for="companyName" class="col-sm-3 control-label">Username</label>
            <div class="col-sm-9">
                <input type="hidden" name="id" value="<?php echo $forum_values['id']?>">
                <input type="text" id="companyName" placeholder="username" class="form-control" name="username" value="<?php echo $forum_values['username']?>" autofocus>
                <span class="help-block">eg. anonymous</span>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="<?php echo $forum_values['email']?>">
            </div>
        </div>

        <div class="form-group">
            <label for="longitude" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="text" id="longitude" name="longitude" placeholder="********" class="form-control">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block" name="updateUser">Update User</button>
            </div>
        </div>
    </form> <!-- /form -->
</div> <!-- ./container -->

<?php require_once 'includes/footer.php' ?>