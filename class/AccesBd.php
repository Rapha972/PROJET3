<?php
class DataBase{
    
    const BASE= "mysql:host=localhost;dbname=test;charset=utf8)"
    const USER ="root"
    const PWD = " "

public static function{
        try{
            $db = new PDO('BASE','USE','PWD');

            }
        catch( Exception$ $Se){
            die('Erreur'. $Se->getmessage());
        }
    }


}
