<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/config/configuration.php');

$template = [
    'product'=>[]
];

if( isset( $_GET['id'] ) ) {
    if(isset($_POST['edit']) && ($_POST['edit']) == 'yes') {

        // echo "<pre>";
        // print_r($_FILES);
        // echo "</pre>";

        $file_load = false;
        if(isset($_FILES['photo'])) {
            $file_load = move_uploaded_file($_FILES['photo']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/images/products/'.$_FILES['photo']['name']);

        }

        $sql_update = "UPDATE products SET
        name = '{$_POST['name']}',
        sku = '{$_POST['sku']}',
        price = {$_POST['price']},
        description = '{$_POST['description']}'";

        if($file_load) {
            $sql_update .=" , img_src='/images/products/{$_FILES['photo']['name']}'";
        }
        $sql_update .=" WHERE id = {$_GET['id']}";

        $result_update = mysqli_query($db, $sql_update);

        if($result_update) {
            $template['success'] = "true";
        } else {
            $template['success'] = "false";
        }
    }

    $sql = "SELECT * FROM products WHERE id = {$_GET['id']}";
    $result = mysqli_query($db, $sql);

    $template['product'] = mysqli_fetch_assoc($result);
    //d($template);
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

    <title>Админка</title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-dark bg-primary">
        <span class="navbar-brand mb-0 h1">Админка сайта</span>
    </nav>
        <div class="row">
            <div class="col-3">
                <nav class="nav flex-column">
                    <a class="nav-link active" href="#">Продукты</a> 
                    <a class="nav-link" href="/admin/add.php">Добавить продукт</a>
                    <a class="nav-link" href="#">Заказы</a>
                    <a class="nav-link" href="#">Настройки</a>
                   
                </nav>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-12">
                        <?php if( !empty( $template['product'] ) ) :?>
                            <h1>Редактирование товара <?=$template['product']['name']?></h1>

                            <?php if(isset($template['success'])): ?>
                                <?php if($template['success']): ?>
                                    <div class="alert alert-success" role="alert">
                                        Обновление прошло успешно
                                    </div>
                                <?php else: ?>
                                    <div class="alert alert-danger" role="alert">
                                        Произошла ошибка
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>

                            <form enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="edit" value="yes">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?=$template['product']['name']?>" name="name" placeholder="Название">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?=$template['product']['sku']?>" name="sku" placeholder="SKU">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?=$template['product']['price']?>" name="price" placeholder="Цена (руб.)">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="description" rows="3" placeholder="Описание"><?=$template['product']['description']?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Загрузить картинку</label>
                                    <input type="file" class="form-control-file" name="photo" id="exampleFormControlFile1">
                                </div>
                                <button type="submit" class="btn btn-primary">Изменить</button>
                            </form>
                        <?php endif;?>
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

    



