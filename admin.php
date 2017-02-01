<?php
    require_once('includes/header.php');
?>

<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">myAttorney</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">View Lawyers</a></li>
            <li><a href="addLawyer.php">Add Lawyers</a></li>
            <li><a href="#">View Forums</a></li>
            <li><a href="addForum.php">Add Forums</a></li>
            <li><a href="#">View Users</a></li>
            <li><a href="#">Add Users</a></li>
            <li><a href="#">logout</a></li>
        </ul>
    </div>
</nav>

<!--========================================================================-->




<?php //require_once('includes/addLawyer.php') ?>
<?php require_once('includes/addForum.php') ?>





















</body>


<?php
    require_once('includes/footer.php');
?>
