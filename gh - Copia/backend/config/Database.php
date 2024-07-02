<?php

class Database {
    private static $dbName = 'gerenciamento_hospitalar';
    private static $dbHost = 'localhost';
    private static $dbUsername = 'root';
    private static $dbUserPassword = '';

    private static $cont = null;

    public static function conexao() {
        if (null == self::$cont) {     
            try {
                self::$cont = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword); 
                self::$cont->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()); 
            }
        }
        return self::$cont;
    }
}
?>
