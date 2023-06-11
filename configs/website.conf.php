<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

// Website Params
define('RQ', $_SERVER['REQUEST_URI']);
//define('WR', dirname(__FILE__));
define('WEBROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
define('ROOT_DIR', dirname(__DIR__));
define('BASEPATH', '/sb-framework');
define('VIEW', ROOT_DIR.'/app/views');
define('LAYOUT', VIEW.'/layouts');
define('ASSETS', WEBROOT.'public');
define('URLROOT', 'https://lab.salim.link/sb-framework/');
define('SITENAME', 'SBFRAMEWORK');
define('APPVERSION', '1.0.0');
?>