<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

session_destroy();
unset($_SESSION['auth']);
header('location:refresh.php');
?>