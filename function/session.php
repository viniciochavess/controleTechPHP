<?php
    function initializeSession($direction){
       

    session_start();
    if(!isset($_SESSION['LOGIN'])){
        header('Location:'.$direction);
    }else{
       return $nameSession = $_SESSION['LOGIN'];
    }




    
    }

?>
