
<?php require('Database.php');

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        
        <!--<link href="style.css" rel="stylesheet" />-->
   
        <body>
        <h1>Mon super blog !</h1>
        <p>Derniers billets du blog :</p>
        </head>
    <?php
    $req=lisposts();                                
        while($data=$req->fetch())
{    
   ?>    
       <div class="news">
        <h3>
            <?= htmlspecialchars($data['Title']); ?>
            </br>
            <em>de l'auteur <?= $data['Author'] ?></em>
        </h3>
        
        <p>
            <?= nl2br(htmlspecialchars($data['Content'])); ?>
            <br />
            <em><a href="post.php?id=<?= $data['id']; ?>">Commentaires</a></em>
        </p>
    </div>
<?php
}
$req->closeCursor();
?>
</body>
</html>



