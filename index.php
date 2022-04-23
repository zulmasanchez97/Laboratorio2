<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <?php require_once "navbar.php" ?>
  <title>LOGIN</title>
</head>

<body>

  <div class="container"><br>
    <div class="row justify-content-center">
      <div class="col-5 p-5 bg-white shadow-lg rounded">
        <h3>LOGIN</h3>
        <hr>
        <form method="post" action="login.php">
          <div class="form-group">
            <label for="usuario">Usuario</label>
            <input id="usuario" class="form-control" type="text" name="usuario" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input id="password" class="form-control" type="password" name="password">
          </div><br>
          <a href="new_users.php" class="btn btn-secondary">Registrate</a>
          <button class="btn btn-primary" name="login" type="submit">Entrar</button>
        </form>
      </div>


    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>