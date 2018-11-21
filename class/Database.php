<?php
class Database
{

    const DSN ='mysql:host=localhot;dbname=test;charset=utf8';
    const USER ='root';
    const PWSD $pwsd ='root';
    
    public function DBOC()
    {
        try
            {
              $db=new PDO(DSN,USER,PWSD);    
              $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  
            }
    catch(PDOException $e)
        {
           die('erreur:'.$e->getMessage());
        }
  return $db;
    }
}