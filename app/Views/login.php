<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


</head>
<body>
<div class="container">
      
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <h1>Login</h1>
          <form action="<?php echo base_url('/login') ?>" method="POST">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" required="">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required="">
            <br>
            <button class="btn btn-primary">Entrar</button>
          </form>

          <?php if(isset($mensaje)){?>
            <div class='alert alert-<?=$tipo;?>'>
            <?=$mensaje;?>
          </div>
          <?php }?>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>
</body>
</html>
