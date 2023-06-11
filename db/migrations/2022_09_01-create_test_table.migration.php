<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

// Create TEST table
try {
	$db::callInstance()::exec('CREATE TABLE IF NOT EXISTS TEST (
		ID INT NOT NULL AUTO_INCREMENT,
		NAME VARCHAR(255) NOT NULL,
		DATE_CREATION TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		DATE_MAJ TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		PRIMARY KEY (ID)
	)');
	echo "<blockquote style='background: lightgreen;'><pre style='color:green'>Création de la table <b>TEST</b> (si existante) : <b>OK</b></pre>";
} catch(PDOException $e) {
	$db::setMessage($e->getMessage());
	echo "<blockquote style='background: lightsalmon;'><pre style='color:red'>Création de la table <b>TEST</b> (si existante) : <b>KO</b></pre>";
}
?>