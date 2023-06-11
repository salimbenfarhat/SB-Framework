<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

require_once(__DIR__ . '/../configs/db.conf.php');

class DB {   	
    private static $host, $db, $user, $password, $pdo, $instance, $status, $message;

    public function getHost() {
        return DB::$host = "mysql:host=".DB_HOST;
    }
    public function getDb() {
        return DB::$db = "dbname=".DB_NAME;
    }
    public function getUser() {
        return DB::$user = DB_USER;
    }
    public function getPassword() {
        return DB::$password = DB_PASS;
    }
    public function getPdo() {
        return DB::$pdo;
    }
    public static function getInstance() {
        return DB::$instance;
    }
    public function getStatus() {
        return DB::$status;
    }
    public function getMessage() {
        return DB::$message;
    }
    public function setHost($host) {
        DB::$host = $host;
    }
    public function setDb($db) {
        DB::$db = $db;
    }
    public function setUser($user) {
        DB::$user = $user;
    }
    public function setPassword($password) {
        DB::$password = $password;
    }
    public function setPdo($pdo) {
        DB::$pdo = $pdo;
    }
    public static function setInstance($instance) {
        DB::$instance = $instance;
    }
    public function setStatus($status) {
        DB::$status = $status;
    }
    public function setMessage($message) {
        DB::$message = $message;
    }

    public function __construct(){
        try {
            DB::setPdo(new PDO(DB::getHost().';'.DB::getDb(), DB::getUser(), DB::getPassword())); 
            DB::getPdo()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
            DB::getPdo()->exec('set names utf8');
            DB::setStatus(MSG_OK);
        } catch(PDOException $e) {
            DB::setStatus(MSG_KO);
            DB::setMessage($e->getMessage());
            //die($e->getMessage());
        }
        return DB::getStatus();
    }

    public static function callInstance(){
        if(DB::getInstance() == null){
            DB::setInstance(new DB());
        }
        return DB::getInstance();  
    }

    public static function beginTransaction(){
        return DB::callInstance()->getPdo()->beginTransaction();
    }

    public static function commit(){
        return DB::callInstance()->getPdo()->commit();
    }

    public static function rollback(){
        return DB::callInstance()->getPdo()->rollback();
    }

    public static function exec($statement) {
        return DB::callInstance()->getPdo()->exec($statement);
    }

    public static function query($statement) {
        return DB::callInstance()->getPdo()->query($statement);
    }

    public static function prepare($statement) {
        return DB::callInstance()->getPdo()->prepare($statement);
    }

    public static function addParam($number, $param) {
        return DB::callInstance()->getPdo()->bindParam($number, $param);
    }

    public static function executer() {
        return DB::callInstance()->getPdo()->execute();
    }

    public static function lastInsertId() {
        return DB::callInstance()->getPdo()->lastInsertId();
    }
}
?>