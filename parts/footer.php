        <div class="footer">
            <div class="footer_block">
                <h3>Коллекции</h3>
                <div class="list">
                    <a href="/catalog.php?section=girl">Женщинам</a>
                    <a href="/catalog.php?section=man">Мужчинам</a>
                    <a href="/catalog.php?section=child">Детям</a>
                    <a href="#">Новинки</a>
                </div>
            </div>
            <div class="footer_block shop">
                <h3>Магазин</h3>
                <div class="list">
                    <a href="#">О нас</a>
                    <a href="#">Доставка</a>
                    <a href="#">Работай с нами</a>
                    <a href="#">Контакты</a>
                </div>
            </div>
            <div class="footer_block">
                <h3>Мы в социальных сетях</h3>
                <div class="list">
                    <p>Сайт разработан в inordic.ru</p>
                    <p>2018 &#169; Все права защищены</p>
                </div>
                <div class="social_buttons">
                    <div class="twitter"><i class="fab fa-twitter"></i></div>
                    <div class="facebook"><i class="fab fa-facebook-f"></i></div>
                    <div class="instagram"><i class="fab fa-instagram"></i></div>
                </div>
            </div>
        </div>
</div>
    <?php foreach($pageConfig['jsFiles'] as $path_js): ?>
        <script src='<?=$path_js?>'></script>
    <?php endforeach;?>
</body>
</html>