<?php 
$pageConfig = [
    'title'=>'Карточка товара',
    'cssFiles'=>[
        '/css/style.css',
        '/css/product.css'
    ],
    'jsFiles'=>[
        '/js/script.js',
        '/js/product.js'
    ],
];
include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');

$template = [
    'product'=>[],
    'catalog'=>[]
];

if(isset($_GET['id'])) {
    $sql_products = "SELECT * FROM products WHERE id = {$_GET['id']}";
    $result_products = mysqli_query($db, $sql_products);

    $template['product'] = mysqli_fetch_assoc($result_products);
    // d($template);  
    
    $sql_product_catalog = "SELECT * FROM product_catalog WHERE product_id = {$_GET['id']}";
    $result_product_catalog = mysqli_query($db, $sql_product_catalog);

    $catalog_id = mysqli_fetch_assoc($result_product_catalog)['catalog_id'];

    $sql_catalog = "SELECT * FROM catalogs WHERE id = {$catalog_id}";
    $result_catalog = mysqli_query($db, $sql_catalog);

    $template['catalog'] = mysqli_fetch_assoc($result_catalog);
    // d($template);  

} else {
    header("HTTP/1.1 303 See Other");
    header("Location: /catalog.php");
}
?>

<?php if(!empty($template['product'])): ?>
    <div class="product">
        <div class="product_photo">
            <div style="background: url('<?=$template['product']['img_src']?>') center center / contain no-repeat;"></div>
        </div>
        <div class="product_main_info">
            <h3><?=$template['product']['name']?></h3>
            <div class="sku">Артикул: <?=$template['product']['sku']?></div>
            <div class="price" style="margin: 15px 0;"><i><?=$template['product']['price']?> руб.</i></div>
            <p><?=$template['product']['description']?></p>
            <div class="container">
                <svg viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <path d="M 18 32.34 l -8.34 -8.34 -2.83 2.83 11.17 11.17 24 -24 -2.83 -2.83 z" stroke="#3da35a" fill="transparent"/>
                </svg>
            </div>
            <button data-product-id = '<?=$template['product']['id']?>' class='add-to-basket'>Добавить в корзину</button>
        </div>
    </div>
<?php else: ?>
    <h2>Такого товара нет</h2>
<?php endif; ?>



<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>