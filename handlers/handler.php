<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/config/configuration.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/config/functions.php');
    
    $sql = "INSERT INTO client_base(id, usermail) VALUE (NULL, '{$_POST['usermail']}')";  
   
    $result = mysqli_query($db, $sql);

    if ($result) {
        echo "Отправлено";
    } else {
        echo "Oшибка";
    }