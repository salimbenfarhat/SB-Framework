<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

$requestsTest_nb = 8;
// Insert rows to TEST table
try {
    $i = 1;
    echo "<blockquote style='background: lightgreen;'>";
    do {
        // Values table
        $valueTest = array(
            'name' => $faker->firstName.' '.$faker->lastName,
            'datetime' => $faker->date($format = 'Y-m-d', $max = 'now').' '.$faker->time($format = 'H:i:s', $max = 'now')
        );
        // SQL Request
        $sqlTest = "INSERT INTO TEST (NAME, DATE_CREATION, DATE_MAJ) VALUES ('{$valueTest['name']}', '{$valueTest['datetime']}', '{$valueTest['datetime']}')";
        // Execute SQL Request
        $db::callInstance()::exec($sqlTest);
        echo "<pre style='color:#000'>Requête <u><b>TEST</b></u> N°{$i} : <u>[{$sqlTest}]</u></pre>";
        $i++;
    } while($i <= $requestsTest_nb);
    echo "</blockquote>";
} catch(PDOException $e) {
    $db::setMessage($e->getMessage());
    echo "<blockquote style='background: lightsalmon;'><pre style='color:red'>Echec de l'insertion de requête(s) dans la table <b>TEST</b>!</pre></blockquote>";
}
?>