<?php

define('HOST', 'localhost');
define('DB_NAME', 'iai_website');
define('USER','root');
define('PASS','');

try{$db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
    $db->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);

} catch(PDOException $e){
    echo $e;
}

$conn = mysqli_connect(HOST, USER, PASS, 'iai_website')

?>
