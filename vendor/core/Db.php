<?php


namespace vendor\core;
use R;

class Db {
    protected $pdo;
    protected static $instance;
    public static $countSql = 0;
    public static $queries = [];


    protected function __construct() {
        $db = require ROOT."/config/config_db.php";
        require LIBS.'/rb.php';

//        $options = [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
//                     \PDO::ATTR_DEFAULT_FETCH_MODE =>\PDO::FETCH_ASSOC];
//        $this->pdo = new \PDO($db['dsn'],$db['user'],$db['pass'], $options);

        $options = [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE =>\PDO::FETCH_ASSOC];
        R::setup($db['dsn'],$db['user'],$db['pass'], $options);
        R::freeze(true);
        R::fancyDebug(true);
    }

    public static function instance(){
        if (self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }

//    public function execute($sql, $param =[]) {
//        self::$countSql++;
//        self::$queries[] = $sql;
//        $stmt = $this->pdo->prepare($sql);
//        return $stmt->execute($param);
//    }
//
//    public function query($sql, $param =[]) {
//        self::$countSql++;
//        self::$queries[] = $sql;
//        $stmt = $this->pdo->prepare($sql);
//        $res = $stmt->execute($param);
//        if ($res !== false){
//            return $stmt->fetchAll();
//        }
//        return [];
//    }
}