<?php
require("../conexaoPDO.php");
 $store = filter_input(INPUT_GET, 'store');
 $sector = filter_input(INPUT_GET, 'sector');

 $cpu = filter_input(INPUT_GET, 'cpu',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
 $memoria = filter_input(INPUT_GET, 'memoria',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

 $numberSeal = filter_input(INPUT_GET, 'numberSeal',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
 $anyDesk = filter_input(INPUT_GET, 'anyDesk',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
 
 if($store && $sector && $memoria && $cpu && $numberSeal && $anyDesk){

    $sql = $pdo->prepare("INSERT into desktop (store,sector,cpu,memoria,anydesk,seal) values (:store,:sector,:cpu,:memoria,:anyDesk,:numberSeal)");

   
    $sql->bindValue(':store',$store);
    $sql->bindValue(':sector',$sector);
   
    $sql->bindValue(':cpu',$cpu);
    $sql->bindValue(':memoria',$memoria);
   
    $sql->bindValue(':numberSeal',$numberSeal);
    $sql->bindValue(':anyDesk',$anyDesk);
   
    $sql->execute();
   
    header("location: viewer.php");

   
 }else{
    echo("Faltando dados");
 }

     




?>