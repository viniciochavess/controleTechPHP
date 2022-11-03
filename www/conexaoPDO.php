<?php
$pdo = new PDO("mysql:dbname=casacosta;host=localhost","root","");

$sql = $pdo->query('SELECT * FROM login');


#$dados = $sql->fetchAll(PDO::FETCH_ASSOC);


?>