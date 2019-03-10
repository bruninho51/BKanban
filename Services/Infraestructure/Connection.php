<?php 

namespace Services\Infraestructure;

class Connection {

    private static $con;

    private static function getStringConnection()
    {
        $str = __DIR__ . 'Storage/' . Configuration::get('database', 'databaseArq');
        return 'sqlite:' . $str;
    }

    public static function get()
    {
        if (!self::$con) {
            self::$con = new PDO(self::getStringConnection());
            self::$con->setAttibute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$con;
    }
}