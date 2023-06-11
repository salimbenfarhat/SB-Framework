<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

class Alert { 

    public static function message($value, $tag, $type = null) {
        switch($type) {
            case 'success' :
                $message = "<{$tag} style='color:green'>{$value}</{$tag}>";
                break;
            case 'info' :
                $message = "<{$tag} style='color:blue'>{$value}</{$tag}>";
                break;
            case 'warning' :
                $message = "<{$tag} style='color:orange'>{$value}</{$tag}>";
                break;
            case 'danger' :
                $message = "<{$tag} style='color:red'>{$value}</{$tag}>";
                break;
            default :
                $message = "<{$tag} style='color:black'>{$value}</{$tag}>";
                break;
        }
        return $message;
    }

}
?>