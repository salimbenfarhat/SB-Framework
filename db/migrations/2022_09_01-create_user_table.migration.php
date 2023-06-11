<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

// Create USER table
try {
	$db::callInstance()::exec('CREATE TABLE IF NOT EXISTS USER (
		ID INT NOT NULL AUTO_INCREMENT,
		EMAIL VARCHAR(255) NOT NULL,
		USERNAME VARCHAR(255) NULL,
		PASSWORD VARCHAR(255) NOT NULL,
		PINCODE VARCHAR(255) NOT NULL,
		DATE_CREATION TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		DATE_MAJ TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		PRIMARY KEY (ID),
	    UNIQUE (EMAIL),
	    UNIQUE (USERNAME)
	)');
	echo "<pre style='color:green'>Création de la table <b>USER</b> (si existante) : <b>OK</b></pre>";
} catch(PDOException $e) {
	$db::setMessage($e->getMessage());
	echo "<pre style='color:red'>Création de la table <b>USER</b> (si existante) : <b>KO</b></pre>";
}
?>