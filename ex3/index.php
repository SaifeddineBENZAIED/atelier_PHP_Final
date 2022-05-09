<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/sketchy/bootstrap.css">
    <title>Document</title>
</head>
<body>
  <?php
  session_start();
  if(isset($_SESSION['flash_message'])){
    ?>
    <div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    <?php echo $_SESSION['flash_message'] ?>
  </div>
</div>
  <?php 
  unset($_SESSION['flash_message']);
  }
  ?>
  <br><br><br><br>
<figure class="text-center">
  <blockquote class="blockquote">
    <p>Mes notes</p>
    </blockquote>
    <br><br>
    <form action="ajout.php" method="post">
    <div class="input-group input-group-lg">
        <span class="input-group-text" id="inputGroup-sizing-lg">Titre</span>
        <input type="text" name="titre" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Commentaire</span>
        <textarea name="com" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" cols="30" rows="10"></textarea>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <button type="submit" name="baj" class="btn btn-outline-secondary">Ajouter</button>
          </div>
          <div class="col">
           
          </div>
          <div class="col">
            <button type="submit" name="baf" class="btn btn-outline-primary">Afficher</button>
          </div>
        </div>
      </div>
    </form>
</body>
</html>