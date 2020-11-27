<?php


namespace app;


class Database
{
    private static $_instance=null;
    private $settings=[];

    private function __construct()
    {
        $this->settings=require dirname(__DIR__).'/config/Config.php';
    }

    public static function getinstance(){
        if(is_null(self::$_instance)){
            return self::$_instance=new Database();
        }
        return self::$_instance;
    }
}