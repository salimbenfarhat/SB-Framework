<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

$requestsPost_nb = 8;
// Insert rows to TEST table
try {
    $i = 1;
    echo "<blockquote style='background: lightgreen;'>";
    do {
        // Values table
        $valuePost = array(
            "title" => $faker->unique()->sentence($nbWords = 6, $variableNbWords = true),
            "content" => $faker->text($maxNbChars = 200),
            "datetime" => $faker->date($format = 'Y-m-d', $max = 'now').' '.$faker->time($format = 'H:i:s', $max = 'now')
        );
        // SQL Request
        $sqlPost = "INSERT INTO POST (TITLE, CONTENT, USER_ID, DATE_CREATION, DATE_MAJ) VALUES ('{$valuePost['title']}', '{$valuePost['content']}', $i, '{$valuePost['datetime']}', '{$valuePost['datetime']}')";
        // Execute SQL Request
        $db::callInstance()::exec($sqlPost);
        echo "<pre style='color:#000'>Requête <u><b>POST</b></u> N°{$i} : <u>[{$sqlPost}]</u></pre>";
        $i++;
    } while($i <= $requestsPost_nb);
    echo "</blockquote>";
} catch(PDOException $e) {
    $db::setMessage($e->getMessage());
    echo "<blockquote style='background: lightsalmon;'><pre style='color:red'>Echec de l'insertion de requête(s) dans la table <b>POST</b>!</pre></blockquote>";
}
?>