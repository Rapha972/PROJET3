<?php
class Database
{
    
    protected function Dbconnect()
    {
        $DSN ='mysql:host=localhost;dbname=BLOG;charset=utf8';
        $USER ='root';
        $PWSD ='root';
        try
        {
            $db = new PDO($DSN,$USER,$PWSD);    
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            return $db; 
        }
        catch(PDOException $e)
        {
           die('erreur:'.$e->getMessage());
        }
    }
}
       