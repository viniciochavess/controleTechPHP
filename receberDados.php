<?php 
    $userName = filter_input(INPUT_POST, 'userName',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $userKey = filter_input(INPUT_POST, 'userKey',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    echo $userName . "   " . $userKey;


?>