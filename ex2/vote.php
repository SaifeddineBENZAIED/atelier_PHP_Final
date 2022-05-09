<?php
    if(isset($_POST['b'])){
    if(isset($_COOKIE[$_POST['user']])){
        include 'dejaVoter.php';
    }
    else{
        setcookie($_POST['user'],$_POST['eval'],time()+120 ,'/', '', true, true);
        include 'mercideVoter.html';
    }
    }
?>