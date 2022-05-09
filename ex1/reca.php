<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/morph/bootstrap.css">
    <title>Document</title>
</head>
<body>
<?php
   if ($_POST['nom']==null || $_POST['prenom']==null || $_POST['addresse']==null || $_POST['quantite']==null || $_POST['quantite']<1 || $_POST['typesand']==null || $_POST['typesand']==""){
    header('location: index.html?verifier vos cordonnes');
     exit();
   }
   elseif($_POST['quantite']>25){
     ?>
     <script>alert("Nous sommes désolé , il n'y a pas encore des sandwitchs (il reste seulement 25 sandwitchs)");</script>
     <?php
   }
   else{
     $file=$_FILES['cin'];
     move_uploaded_file($file['tmp_name'],'CINuploaded/'.$file['name'].uniqid("",true));
  ?>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">Nom : <?php echo($_POST['nom']) ?></li>
  <li class="list-group-item">Prenom : <?php echo($_POST['prenom']) ?></li>
  <li class="list-group-item">Addresse : <?php echo($_POST['addresse']) ?></li>
  <li class="list-group-item">Nombre de sandwitchs : <?php echo($_POST['quantite']) ?></li>
  <li class="list-group-item">Type de sandwitchs : <?php echo($_POST['typesand']) ?></li>
  <li class="list-group-item">Les ingrédients à ajouter : <?php 
  if(isset($_POST['ing1'])){
      echo($_POST['ing1']);echo('  ');
  }
  if(isset($_POST['ing2'])){
    echo($_POST['ing2']);echo('  ');
  }
  if(isset($_POST['ing3'])){
    echo($_POST['ing3']);
  }
  if (!(isset($_POST['ing1'])) && !(isset($_POST['ing2'])) && !(isset($_POST['ing3']))){
      echo("rien");
  }
  ?></li>
  <hr>
  <div class="alert alert-info" role="alert">
  Le prix total est : <?php
  if ($_POST['quantite']<=10){
      echo($_POST['quantite']*4);
      echo(' dt');
  }
  else{
    echo(($_POST['quantite']*4)*0.9);
    echo(" dt   :) car vous avez depasser 10 sandwitchs, une remise de 10% a ete applique (:");
  }
}
  ?>
</div>
</ul>
</body>
</html>