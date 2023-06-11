<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

class Generate { 

    private static $characters = array(
        'numerical' => '0123456789',
        'alphabetical' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',
        'alphanumerical' => '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',
        'full' => '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&*()+?'
    );

    public static function getCharacters($type = null) {
        switch($type) {
            case 'numerical' :
                return Generate::$characters['numerical'];
                break;
            case 'alphabetical' :
                return Generate::$characters['alphabetical'];
                break;
            case 'alphanumerical' :
                return Generate::$characters['alphanumerical'];
                break;
            default :
                return Generate::$characters['full'];
                break;
        }
    }

    public static function setCharacters($characters, $type = null) {
        switch($type) {
            case 'numerical' :
                Generate::$characters['numerical'] = $characters;
                break;
            case 'alphabetical' :
                Generate::$characters['alphabetical'] = $characters;
                break;
            case 'alphanumerical' :
                Generate::$characters['alphanumerical'] = $characters;
                break;
            default :
                Generate::$characters['full'] = $characters;
                break;
        }
    }

    public static function random($number, $type = null) {
        switch($type) {
            case 'numerical' :
                return substr(str_shuffle(Generate::getCharacters("numerical")), 0, $number);
                break;
            case 'alphabetical' :
                return substr(str_shuffle(Generate::getCharacters("alphabetical")), 0, $number);
                break;
            case 'alphanumerical' :
                return substr(str_shuffle(Generate::getCharacters("alphanumerical")), 0, $number);
                break;
            default :
                return substr(str_shuffle(Generate::getCharacters("full")), 0, $number);
                break;
        }
    }

}
?>