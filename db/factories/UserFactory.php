<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

$requestsUser_nb = 8;
// Insert rows to TEST table
try {
    $i = 1;
    echo "<blockquote style='background: lightgreen;'>";
    do {
        // Values table
        $valueUser = array(
            "email" => $faker->unique()->companyEmail,
            "password" => "HelloWorld123",
            "pincode" => $faker->numberBetween($min = 1000, $max = 9999),
            "datetime" => $faker->date($format = 'Y-m-d', $max = 'now').' '.$faker->time($format = 'H:i:s', $max = 'now')
        );
        // SQL Request
        $sqlUser = "INSERT INTO USER (EMAIL, PASSWORD, PINCODE, DATE_CREATION, DATE_MAJ) VALUES ('{$valueUser['email']}', '{$valueUser['password']}', '{$valueUser['pincode']}', '{$valueUser['datetime']}', '{$valueUser['datetime']}')";
        // Execute SQL Request
        $db::callInstance()::exec($sqlUser);
        echo "<pre style='color:#000'>Requête <u><b>USER</b></u> N°{$i} : <u>[{$sqlUser}]</u></pre>";
        $i++;
    } while($i <= $requestsUser_nb);
    echo "</blockquote>";
} catch(PDOException $e) {
    $db::setMessage($e->getMessage());
    echo "<blockquote style='background: lightsalmon;'><pre style='color:red'>Echec de l'insertion de requête(s) dans la table <b>USER</b>!</pre></blockquote>";
}
?>