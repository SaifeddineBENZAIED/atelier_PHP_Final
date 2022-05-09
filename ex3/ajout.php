<?php 
session_start();

if(isset($_POST['baj'])){
    if(isset($_SESSION['nb'])){
    $_SESSION['nb']++;
    $_SESSION['notesTitle']=$_SESSION['notesTitle'].'*'.$_POST['titre'];
    $_SESSION['notesContent']=$_SESSION['notesContent'].'*'.$_POST['com'];
    }
    else{
    $_SESSION['nb']=1;
    $_SESSION['notesTitle']=$_SESSION['notesTitle'].'*'.$_POST['titre'];
    $_SESSION['notesContent']=$_SESSION['notesContent'].'*'.$_POST['com'];
    }
    $_SESSION['flash_message'] = "L'ajout de ".$_SESSION['nb']." note(s) est terminee avec success";     
    header('Location: index.php');
    die();
}
if(isset($_POST['baf'])){
    include 'affichage.php';
}
?>