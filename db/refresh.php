<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

// Loading DB Class file
require_once(__DIR__ . '/../framework/DB.Class.php');
$db = new DB();
// Loading Crdential Config file
require_once(__DIR__ . '/../configs/credential.conf.php');
// Loading Alert Lib
require_once(__DIR__ . '/../libs/Alert.Lib.php');
$alert = new Alert();
// Add boolean session var for auth
$_SESSION['auth'] = false;
// Loading Faker
require_once(__DIR__ . '/../libs/vendors/Faker/autoload.php');
$faker = Faker\Factory::create();

// Authentication form processing
if(strtoupper($_SERVER['REQUEST_METHOD']) === 'POST' && isset($_POST['authDatabaseCleaner'])) {
   $password = password_hash($_POST['KEYPASS'], PASSWORD_DEFAULT);
   $password_verif = password_verify(PASSWORD, $password);
   if ($_POST['ID'] != ID) {
      $alert::message("Cet ID n'existe pas !", "danger");
   } else if ($_POST['KEYPASS'] != PASSWORD) {
      $alert::message("Le MDP lié à cet ID ne correspond pas !", "danger");
   } else if ($_POST['ID'] == ID && $password_verif) {
      $_SESSION['auth'] = true;
      $alert::message("<h3>Accès authorisé !</h3>", "success");
      // Loading All Migrations
        $alert::message("Chargement des migrations", "info");
        // DROP ALL TABLES
        require_once(__DIR__ . '/migrations/2022_09_01-drop_all_tables.migration.php');
        // CREATE TEST TABLE
        require_once(__DIR__ . '/migrations/2022_09_01-create_test_table.migration.php');
        // CREATE USER TABLE
        require_once(__DIR__ . '/migrations/2022_09_01-create_user_table.migration.php');
        // CREATE POST TABLE
        require_once(__DIR__ . '/migrations/2022_09_01-create_post_table.migration.php');
        //
        require_once(__DIR__ . '/seeders/Seeders.php');

        
        echo "<a href='exit.php' tite='Logout'>Logout</a>";
      exit();
   } else {
      $alert::message("Accès refusé : Connexion impossible pour le moment !", "danger");
   }
}
?>

<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="on">
   <label><input type="text" name="ID" id="ID" /> ID</label><br />
   <label><input type="password" name="KEYPASS" id="KEYPASS" /> MDP</label><br />
   <input type="submit" name="authDatabaseCleaner" value="Auth 4 DB Cleaner" />
</form>