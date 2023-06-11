<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

abstract class Controller {
	public static function globalVars() {
        require_once(ROOT_DIR.'/framework/DB.Class.php');
        require_once(ROOT_DIR.'/framework/View.Class.php');
        require_once(ROOT_DIR.'/libs/vendors/Faker/autoload.php');
        require_once(ROOT_DIR.'/libs/Alert.Lib.php');
        require_once(ROOT_DIR.'/libs/Generate.Lib.php');  
        $variables = array(   
            'db' => new DB(),
            'view' => new View(),
            'fk' => Faker\Factory::create(),
            'alert' => new Alert(),
            'generate' => new Generate()
        );
        return $variables;
    }
}
?>