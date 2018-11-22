<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        
        <!--<link href="style.css" rel="stylesheet" />-->
    </head>
        
    <body>
        <h1>Mon super blog !</h1>
        <p>Derniers billets du blog :</p>
        <?php

try
            {
              $db = new PDO('mysql:host=localhost;dbname=BLOG;charset=utf8','root','root');    
              $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  
           //return $db; 
            }
    catch(PDOException $e)
        {
           die('erreur:'.$e->getMessage());
        }

$req = $db->query('SELECT * FROM post');

//print_r($req);
while($data = $req->fetch())
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



