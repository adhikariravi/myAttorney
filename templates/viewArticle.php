<?php include "header.php" ?>
<nav class="navbar navbar-default">
      <div class="container-fluid">
            <div class="navbar-header">
                  <a class="navbar-brand" href="./">myAttorney</a>
            </div>
            <ul class="nav navbar-nav">
                  <li><a href="./viewLawyer.php">View Lawyers</a></li>
                  <li><a href="./addLawyer.php">Add Lawyers</a></li>
                  <li><a href="./viewForum.php">View Forums</a></li>
                  <li><a href="./addForum.php">Add Forums</a></li>
                  <li><a href="./viewUser.php">View Users</a></li>
                  <li><a href="./addUser.php">Add Users</a></li>
                  <li><a href="./logout.php">logout</a></li>
            </ul>
      </div>
</nav>

<div class="container">
      <h1 style="width: 75%;"><?php echo htmlspecialchars( $results['article']->title )?></h1>
      <div style="width: 75%; font-style: italic;"><?php echo htmlspecialchars( $results['article']->summary )?></div>
      <div style="width: 75%;"><?php echo $results['article']->content?></div>
      <p class="pubDate">Published on <?php echo date('j F Y', $results['article']->publicationDate)?></p>

      <p><a href="./">Return to Homepage</a></p>
</div>
<?php include "footer.php" ?>

