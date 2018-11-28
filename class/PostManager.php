<?php
require_once('Database.php');

class PostManager extends Database
{

//recupérer les articles
    public function get_all_posts()
    {
        $db=$this->Dbconnect();
        $req = $db->query('SELECT * FROM post'); 
        //var_dump($req);
        return $req;
    }
// recupérer un article
    public function get_single_post()
    {
        $db =$this->Dbconnect();
        $req=$db->query('SELECT * FROM post WHERE id=2');  
        return $req;
    }
/*créer un article   
public function create_post($Author,$Title,$Content)
{
    $db =$this->Dbconnect();
    $db->exec('INSERT INTO  post(Author, Title, Content) VALUES ('.$db->quote($Author).','.$db->quote($Title).','$db->quote($Content));
    return $db;
}*/
    
// effecer tous les articles
    public function delete_all_posts()
    {
        $db =$this->Dbconnect();
        $db->exec('DELETE * FROM post');
        return $db;
    }
// effacer un articles
    public function delete_single_post()
    {
        $db =$this->Dbconnect();
        $db->exec('DELETE * FROM post WHERE id=3'); 
        return $db;
    }
}