<?php
require('Database.php');
require('PostManager.php');

$req = get_all_posts();
var_dump($req);