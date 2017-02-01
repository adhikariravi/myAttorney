<?php
    require_once 'includes/header.php' ;
    require_once('Database/dbconfig.php');
?>

<div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="./index.php">myAttorney</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="viewLawyer.php">View Lawyers</a></li>
                <li><a href="addLawyer.php">Add Lawyers</a></li>
                <li><a href="viewForum.php">View Forums</a></li>
                <li><a href="addForum.php">Add Forums</a></li>
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

    <form class="form-horizontal view-Form" action="addForum.php" method="post">
        <div style="text-align: center"><h2>View Lawyer</h2> </div>
        <?php
            $query="SELECT * FROM lawyers;";
            $result=$connection->query($query);
            if($result->num_rows>0) {
                while ($row = $result->fetch_assoc()) {
                    $id=$row['id'];
                    $fullName = $row['fullName'];
                    $dob= $row['dob'];
                    $email=$row['email'];
                    $gender=$row['gender'];
                    $phone=$row['phone'];
                    $assc=array($id,$fullName,$email,$phone,$dob,$gender);
                    $associates[]=$assc;
                }
            }
            echo    "<table class=\"table-responsive table-striped\">".
                    "<thead><tr>".
                    "<th id=\"tabData\">Id</th>".
                    "<th id=\"tabData\">Full Name</th>".
                    "<th id=\"tabData\">Email</th>".
                    "<th id=\"tabData\">Phone Number</th>".
                    "<th id=\"tabData\">Date of Birth</th>".
                    "<th id=\"tabData\">Gender</th>".
                    "</tr></thead><tbody>";
            foreach ($associates as $tablerow){
                    echo "<tr>";
                    echo "<td id=\"tabData\"><a href=\"editLawyer.php?update_id={$tablerow[0]}\">{$tablerow[0]}</a></td>";
                    for($i=1;$i<count($tablerow);$i++) {
                        echo "<td id=\"tabData\">{$tablerow[$i]}</td>";
                    }
                    echo "</tr>";
            }
            echo "</tbody></table>";
        ?>





    </form> <!-- /form -->
</div> <!-- ./container -->

<?php require_once 'includes/footer.php' ?>