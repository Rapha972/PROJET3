<?php
require_once('Database.php');
require_once('PostManager.php');

$test= new PostManager;
$req = $test->get_all_posts();
//print_r($req);
while($data = $req->fetch())
{
echo '<strong>'.$data['Title'].'</strong/><br/>';
}
    