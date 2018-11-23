<?php
   
    
    function DBO()
    {
     $DSN ='mysql:host=localhost;dbname=BLOG;charset=utf8';
     $USER ='root';
     $PWSD ='root';
        try
            {
              $db = new PDO($DSN,$USER,$PWSD);    
              $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  
           return $db; 
            }
    catch(PDOException $e)
        {
           die('erreur:'.$e->getMessage());
        }
    }
        
        function lispost()
        {
          $db=DBO();
          $req=$db->query('SELECT * FROM post');  
            
        return $req;
        }
    
