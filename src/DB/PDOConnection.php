<?php

namespace Src\DB;

use PDO;
use PDOException;

class PDOConnection
{
    const USERNAME = "root";
    const PASSWORD = "root";
    const HOST = "localhost";
    const DB = "tales_db";

    /**
     * @var PDO
     */
    protected static $connection;

    private function __construct()
    {
        $username = self::USERNAME;
        $password = self::PASSWORD;
        $host = self::HOST;
        $db = self::DB;
        try{
            self::$connection = new PDO("mysql:host=$host;dbname=$db", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }catch (PDOException $exception){
            echo "Connection error".$exception->getMessage();
        }
    }

    public static function getConnection()
    {
        if(!self::$connection){
             new PDOConnection();
        }
        return self::$connection;
    }

}