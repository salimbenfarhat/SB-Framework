<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

/*
Les paramètres sont dans l'ordre :
- la méthode HTTP : GET, POST, DELETE, PUT, ...
- le chemin à matcher
- une chaîne qui représente un moyen d'appel pour le traitement OU BIEN un closure (fonction anonyme) pour un traitement direct
- un optionnel nom pour la route
*/

// Loading Controllers
require_once(ROOT_DIR.'/app/controllers/FrontendController.php');
$FC = new FrontendController();

// map home
$router->map('GET', '/', [$FC, 'home'], 'home');

// map about
$router->map('GET', '/about', [$FC, 'about'], 'about');

// match current request url
$match = $router->match();

// call closure or throw 404 status
if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	echo "Erreur 404";
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}

?>