<?php

session_start();
$name = $password = "";
if($_POST) {
  $name = $_POST["name"];
  $password = $_POST["password"];
$_SESSION["name"] = $name;
$_SESSION["password"] = $password;

echo $_SESSION["name"]. "<br>";
echo $_SESSION["password"]. "<br>";
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
   <div class="container p-5 ">

   <form action= "" method= "post" >
  <div class="mb-3">
    <label for="name" class="form-label">Kullanıcı Adı</label>
    <input type="text" class="form-control" name ="name" >
   
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Şifre</label>
    <input type="password" class="form-control" name ="password" >
   
  </div>
  
  <button type="submit" class="btn btn-primary">Giriş Yap</button>
 </form>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>