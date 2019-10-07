<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/config/configuration.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/config/functions.php');

    session_start();
    $response = [
        'basket' => [
            'count' => 0
        ]
    ];

    if(isset($_SESSION['basket'] )) {
        foreach($_SESSION['basket'] as $basketItem) {
           $response['basket']['count'] += $basketItem['count'];
        }
    }  
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Noto+Serif:400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <title><?=$pageConfig['title']?></title>
    <?php foreach($pageConfig['cssFiles'] as $path_css): ?>
        <link rel="stylesheet" href="<?=$path_css?>">
    <?php endforeach;?>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="header_start">
                <a href="/" class="logo"></a> 
                <nav class="top-right open">
                    <a href="/catalog.php?section=girl" class="disc l1"><span>Женщинам</span></a>
                    <a href="/catalog.php?section=man" class="disc l2"><span>Мужчинам</span></a>
                    <a href="/catalog.php?section=child" class="disc l3"><span>Детям</span></a>
                    <a href="#" class="disc l4"><span>Новинки</span></a>
                    <a class="disc l5 toggle">Меню</a>
                </nav>
            </div>
            <div class="header_end">
                <div class="account">
                    <div class="pic"></div>
                    <a href="/admin">Войти</a>
                </div>
                <div class="basket">
                    <div class="pic"></div>
                    <a href="/basket.php">Корзина(<span><?=$response['basket']['count']?></span>)</a>
                </div>
            </div>
        </div>