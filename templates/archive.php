<?php include "header.php" ?>

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


      <h1>Article Archive</h1>

      <ul id="headlines" class="archive">

<?php foreach ( $results['articles'] as $article ) { ?>

        <li>
          <h2>
            <span class="pubDate"><?php echo date('j F Y', $article->publicationDate)?></span><a href="./?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?></a>
          </h2>
          <p class="summary"><?php echo htmlspecialchars( $article->summary )?></p>
        </li>

<?php } ?>

      </ul>

      <p><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>

      <p><a href="./">Return to Homepage</a></p>

<?php include "footer.php" ?>

