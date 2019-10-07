<?php
    $pageConfig = [
        'title' => 'Каталог',
        'cssFiles' => [
            '/css/style.css',
            '/css/catalog.css'
        ],
        'jsFiles' => [
            '/js/script.js',
            '/js/catalog.js'
        ],
    ];
include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');

$template = [
    'section' =>(isset($_GET['section'])) ? $_GET['section'] : 'man',
    'section_name' => '',
    'section_icon'=> ''
]; 


if(isset($_GET['section'])) {
    $sql_section_name= "SELECT name FROM catalogs WHERE code = '{$_GET['section']}'";
    $result_section_name = mysqli_query($db, $sql_section_name);
    $template['section_name'] = mysqli_fetch_assoc($result_section_name);

    $sql_section_icon= "SELECT icon FROM catalogs WHERE code = '{$_GET['section']}'";
    $result_section_icon = mysqli_query($db, $sql_section_icon);
    $template['section_icon'] = mysqli_fetch_assoc($result_section_icon);
}

?>

    <div class="catalog" data-section='<?=$template['section']?>'>
        <div class="img-icon">
            <img src="<?=$template['section_icon']['icon']?>" alt="<?=$template['section_name']['name']?>">
        </div>
        <h2><?=$template['section_name']['name']?></h2>
        <p>Все товары</p>
        <div class="catalog-filters">
            <div class="catalog-filters-category">
                <label for="category">Категории</label>
                <select name="category" id="category"></select>
            </div>
            <div class="catalog-filters-price">
                <label for="price">Стоимость</label>
                <select name="price" id="price"></select>
            </div> 
        </div>
        <div class="catalog-products">
            <a class="catalog-products-item"></a>
        </div>
        <div class="catalog-pagination"></div>
    </div>

<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php'); 
?>