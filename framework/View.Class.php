<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

class View {   		
    private static $path;

    public static function getPath() {
        return View::$path;
    }
    public static function setPath($path) {
        View::$path = $path;
    }
    
    public static function render($view, $template = null,  $variables = null) {
        /*var_dump(VIEW);
        var_dump(View::getPath());
        //setPath(str_replace('\\', '/', VIEW));
        ob_start();
        require(getPath() . str_replace('.', '/', $view) . '.view.php');
        $content = ob_get_clean();
        if(isset($template)) {
            require(getPath() . LAYOUT . '/' . $template . '.layout.php');
        }*/
        $path = str_replace('\\', '/', VIEW . '/');
        ob_start();
        require(VIEW . '/' . str_replace('.', '/', $view) . '.view.php');
        $content = ob_get_clean();
        if(isset($template)) {
            require(LAYOUT . '/' . $template . '.layout.php');
        }
    }

}
?>