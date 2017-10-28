<?php

try{

$handler = new PDO('mysql:host=127.0.0.1;dbname=ard','root','zozo1998');
$handler->exec("SET NAMES 'utf8'");
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e){

echo $e->getMessage();

}


?>
