<?php
echo "Hello World! \n";

function badWordFilter($data) {
    $originals = array("idiot", "stupid", "moron");
    $replacements = array("friend", "wow", "sweet pea");
    $data = str_ireplace($originals, $replacements, $data);
    return $data;
}

//Put the data into a SQL table? 
//Put the text into an independent PHP file that's all on its own. Then you can use it on many different pages. 
//include_once("badwordfilter.php");
//Use OOP and turn it into a class file.
//Plain text file with one word per line, and a MySQL file to populate a database with id, word, and replacement.

$myData = "Hey idiot, you are stupid moron!";
$cleaned = badWordFilter($myData);
echo $cleaned;

?>
