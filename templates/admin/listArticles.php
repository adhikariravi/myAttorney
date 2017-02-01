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
            <li><a href="./myAttorney/addForum.php">Add Forums</a></li>
            <li><a href="./viewUser.php">View Users</a></li>
            <li><a href="./addUser.php">Add Users</a></li>
            <li><a href="./logout.php">logout</a></li>
        </ul>
    </div>
</nav>
<div class="container">
        <p>You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>Log out</a></p>

      <h1>All Articles</h1>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>


<?php if ( isset( $results['statusMessage'] ) ) { ?>
        <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>

      <table>
        <tr>
          <th>Publication Date</th>
          <th>Article</th>
        </tr>

<?php foreach ( $results['articles'] as $article ) { ?>

        <tr onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'">
          <td><?php echo date('j M Y', $article->publicationDate)?></td>
          <td>
            <?php echo $article->title?>
          </td>
        </tr>

<?php } ?>

      </table>

      <p><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>

      <p><a href="admin.php?action=newArticle">Add a New Article</a></p>
</div>
<?php include "footer.php" ?>

