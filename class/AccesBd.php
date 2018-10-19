<?php
Class AccesBd{
    
    const BASE= "mysql:host=localhost;dbname=test;charset=utf8)"
    const USER ="root"
    const PWD = " "

public static function{
        try{
            $db = NEW('BASE','USE','PWD');

            }
        catch( Exception$ $Se){
            die('erreur'. $Se->getmessage());
        }
    }


}
