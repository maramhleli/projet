<?php class config{
   private static $pdo= NULL;
    public static function getconnexion(){
        if(!self::$pdo)
       { try {
        self::$pdo= new PDO("mysql:host=localhost;dbname=crud", 'root',''
           ,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ] );
            
            }
            catch(Exception $e){
                die('erreur'.$e->getMessage());
             }
    }
  
    return self::$pdo ;
    }
}
    ?> 