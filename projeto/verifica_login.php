<?php


if(!$_SESSION['email_login']){
    header('Location: index.php');
    exit();
}

?>