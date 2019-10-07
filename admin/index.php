<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/config/configuration.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/config/functions.php');

    $template=[
        'products'=>[]
    ];

    $sql_products = "SELECT * FROM products";
    $result_products = mysqli_query($db, $sql_products);
    while($row = mysqli_fetch_assoc($result_products)){
        $template['products'][] = $row;
    }
?>


<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1">Админка сайта</span>
        </nav>
        <div class="row">
            <div class="col-3">
            <nav class="nav flex-column">
                <a class="nav-link active" href="#">Товары</a>
                <a class="nav-link" href="#">Заказы</a>
                <a class="nav-link" href="#">Настройки</a>
            </nav>
            </div>
            <div class="col-9">
                <div class='row d-flex '>
                    <?php foreach( $template['products'] as $product ): ?>
                    <div class="col-3 mt-3">
                        <div class="card" style="width: 100%; height: 100%">
                                <img src="<?=$product['img_src']?>" class="card-img-top" alt="...">
                                <div class="card-body d-flex flex-column justify-content-end">
                                    <h5 class="card-title" style="text-align: center"><?=$product['name']?></h5>
                                    <a href="/admin/product.php?id=<?=$product['id']?>" class="btn btn-primary d-flex justify-content-center">Редактировать</a>
                                </div>
                        </div>
                    </div> 
                <?php endforeach; ?>                    
                </div>  
            </div>
        </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>