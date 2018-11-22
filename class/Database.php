<?php
class Database
{
    //private $db;
    const DSN ='mysql:host=localhost;dbname=BLOG;charset=utf8';
    const USER ='root';
    const PWSD ='';
    
    public function DBO()
    {
        try
            {
              $db = new PDO(DSN,USER,PWSD);    
              $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  
           return $db; 
            }
    catch(PDOException $e)
        {
           die('erreur:'.$e->getMessage());
        }
        
        
        
    }
}