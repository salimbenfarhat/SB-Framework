<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

require_once(ROOT_DIR.'/app/controllers/Controller.php');

class FrontendController extends Controller {

	public function home() {
        $meta = array(
            'title' => 'Home | SB-Framework',
            'description' => 'SB-Framework is a homemade PHP framework by myself, Salim Benfarhat. It was designed to facilitate the development of my personal and professional projects.',
        );
        $currentPage = 'home';
        $data = array(
            'fk_name' => FrontendController::globalVars()['fk']->name,
            'msg_info' => FrontendController::globalVars()['alert']::message("This is a Test alert message", "h1", "info"),
            'random_num' => FrontendController::globalVars()['generate']::random(14, "numerical"),
            'random_alpha' => FrontendController::globalVars()['generate']::random(14, "alphabetical"),
            'random_alphanum' => FrontendController::globalVars()['generate']::random(14, "alphanumerical"),
            'random_full' => FrontendController::globalVars()['generate']::random(14)
        );
        FrontendController::globalVars()['view']::render('pages.frontend.home', 'default', compact(FrontendController::globalVars(), 'meta', 'currentPage', 'data'));
    }
    
    public function about() {
        $meta = array(
            'title' => 'About | SB-Framework',
            'description' => 'SB-Framework is a homemade PHP framework by myself, Salim Benfarhat. It was designed to facilitate the development of my personal and professional projects.',
        );
        $currentPage = 'about';
        FrontendController::globalVars()['view']::render('pages.frontend.about', 'default', compact(FrontendController::globalVars(), 'meta', 'currentPage'));
    }

}
?>