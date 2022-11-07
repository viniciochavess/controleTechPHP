
<?php

    session_start();

    $userName = filter_input(INPUT_POST, 'userName',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $userKey = filter_input(INPUT_POST, 'userKey',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!empty($userName) && !empty($userKey)){
        require('bancoDados/conexaoPDO.php');

        $sql = $pdo->prepare("SELECT * FROM login WHERE name = ? AND key_pass = ?");
        $sql->bindParam(1,$userName,PDO::PARAM_STR);
        $sql->bindParam(2,$userKey,PDO::PARAM_STR);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
    

        
        if($result['name'] === $userName && $result['key_pass'] === $userKey){
            $_SESSION['LOGIN'] = $userName;
            header('Location: home/index.php');
        }else{
            unset($_SESSION['LOGIN']);
            header('Location: index.php');
        }


    }else{
        unset($_SESSION['LOGIN']);
        header('Location: index.php');
    }


   

    

 
    

   
	
   


?>