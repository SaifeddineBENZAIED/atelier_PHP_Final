<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cyborg/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="alert alert-danger" role="alert">
        <p align="center"> Vous avez deja voter et votre vote est : <b><?php echo($_COOKIE[$_POST['user']]); ?></b></p>
      </div>
</body>
</html>