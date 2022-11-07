
<?php
    require('../bancoDados/conexaoPDO.php');
    $userName = filter_input(INPUT_POST, 'userName',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $userKey = filter_input(INPUT_POST, 'userKey',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    $sql = $pdo->prepare("INSERT into login (name,key_pass) values (:userName,:userKey)");

   
	$sql->bindValue(':userName',$userName);
	$sql->bindValue(':userKey',$userKey);
	$sql->execute();
   


?>