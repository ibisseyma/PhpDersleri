<?php

$product = array(
    "1" => array(
        "productName" => "Iphone14",
        "productPrice" => 55000,
        "productImg" => "images/iphone14.jpg",
        "productStok" => 25
    ),
    "2" => array(
        "productName" => "Iphone13",
        "productPrice" => 45000,
        "productImg" => "images/iphone13.jpg",
        "productStok" => 30
    ),
    "3" => array(
        "productName" => "Iphone12",
        "productPrice" => 35000,
        "productImg" => "images/iphone12.jpg",
        "productStok" => 0
    ),
    "4" => array(
        "productName" => "Samsung S21",
        "productPrice" => 50000,
        "productImg" => "images/samsungs21.jpg",
        "productStok" => 15
    ),
    "5" => array(
        "productName" => "Samsung S20",
        "productPrice" => 40000,
        "productImg" => "images/samsungs20.jpg",
        "productStok" => 10
    ),
    "6" => array(
        "productName" => "Samsung S18",
        "productPrice" => 35000,
        "productImg" => "images/samsungs18.jpg",
        "productStok" => 2
    ),
    "7" => array(
        "productName" => "Lenovo",
        "productPrice" => 19000,
        "productImg" => "images/lenovo.jpg",
        "productStok" => 0
    ),
    "8" => array(
        "productName" => "xiaomi",
        "productPrice" => 28000,
        "productImg" => "images/xiaomi.jpg",
        "productStok" => 12
    ),
    "9" => array(
        "productName" => "Nokia",
        "productPrice" => 5000,
        "productImg" => "images/nokia.jpeg",
        "productStok" => 1
    ),
);
$categories = array("Cep Telefonu", "Notebook", "Beyaz Eşya", "Küçük Ev Aletleri", "Kişisel Bakım Ürünleri");


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
  <div class="container"> 
    <div class ="text-center">
      <h1> E-Ticaret Ürünler Sayfası </h1>
</div>
    <div class="row">
        <div class="col-3">
            <div class="list-group">
                <?php foreach($categories as $category): ?>
         <a href="#" class="list-group-item list-group-item-action " aria-current="true">

              <?php echo $category ?>
            
                </a>
  <?php endforeach; ?>
</div>
    </div>
    <div class="col-9">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($product as $item ):  ?> 
  <div class="col">
    <div class="card h-100">
      <img src="<?php echo $item['productImg'] ?>" class="card-img-top"   style="height: 250px; width: 100%; object-fit: cover;" alt="...">
      <div class="card-body">
        <h5 class="card-title">
           Ürün Adı <?php echo $item['productName'] ?></h5>
        <p class="card-text">
           Ürün Fiyatı : <?php echo $item['productPrice'] ?></p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">
            Ürün Adedi : <?php echo $item['productStok'] ?></small>
      </div>
    </div>
  </div>
    <?php endforeach ?>
</div>
    </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>