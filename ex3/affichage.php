<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/quartz/bootstrap.css">
    <title>Document</title>
</head>
<body>
<br><br><br>
<figure class="text-center">
  <blockquote class="blockquote">
    <p>Affichage de notes :</p>
    </blockquote>
    <?php 

    if(isset($_SESSION['nb'])){
        ?>
        <div class="container-fluid">
            <div class="row aligns-items-center justify-content-center">
        <?php
        $title=explode('*',$_SESSION['notesTitle']);
        $content=explode('*',$_SESSION['notesContent']);
        for($i=1;$i<=$_SESSION['nb'];$i++){
            ?>
              <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
              <div class="card-header">Note n°<?php echo ($i); ?> </div>
              <div class="card-body">
              <h5 class="card-title"><?php echo ($title[$i]); ?></h5>
              <p class="card-text"><?php echo ($content[$i]); ?></p>
              </div>
              </div>
              &nbsp;&nbsp;&nbsp;
            <?php
        }
        ?>
        </div>
        </div>
        <?php
    }
    else{
        ?>
        <div class="alert alert-info" role="alert">
            <p align="center">Vous n'avez pas de notes</p>
        </div>
        <?php 
    }
    ?>
</body>
</html>