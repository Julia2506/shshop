<?php
    $pageConfig = [
        'title' => 'Главная страница',
        'cssFiles' => [
            '/css/style.css'
        ],
        'jsFiles' => [
            '/js/jquery-3.3.1.min.js',
            '/js/script.js'  
        ],
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>
        <div class="main_info">
            <h1>Новые поступления весны</h1>
            <h2>Мы подготовили для Вас лучшие новинки сезона</h2>
            <button>Посмотреть новинки</button>
        </div>
        <div class="magazine">
            <div class="line_1">
                <div>
                    <span>
                        <p>Джинсовые куртки </p><br>
                        <i style="font-size: 20px; text-transform: uppercase;">new arrival</i>
                    </span>
                </div>
                <div></div>
            </div>
            <div class="line_2">
                <div>
                    <span>
                        <div class="pic"></div>
                        <i>Каждый сезон мы подготавливаем для Вас исключительно лучшую модную одежду. Следите за нашими новинками</i>
                    </span>
                </div>
                <div>
                    <span>
                        <p>Джинсы</p><br>
                        <i style="text-transform: none;">от 3200руб</i>
                    </span>
                </div>
                <div>
                    <span>
                        <div class="pic"></div>
                        <p style="width: 100%;">Аксессуары</p>
                    </span>
                </div>
            </div>
            <div class="line_3">
                <div></div>
                <div>
                    <span>
                        <div class="pic"></div>
                        <i>Самые низкие цены в Москве. Нашли дешевле? Вернём разницу.</i>
                    </span>
                </div>
                <div>
                    <span class="field">
                        <span>
                            <p>Спортивная одежда</p><br>
                            <i style="text-transform: none;">от 590 руб</i>
                        </span>
                    </span>
                </div>
            </div>
            <div class="line_4">
                <div>
                    <span>
                        <div class="pic"></div>
                        <p>Элегантная обувь</p><br>
                        <i style="font-size: 20px; text-transform: uppercase;">Ботинки, кроссовки</i>
                    </span>
                </div>
                <div>
                    <span>
                        <p>Детская одежда</p><br>
                        <i style="font-size: 20px; text-transform: uppercase;">New arrival</i>
                    </span>
                </div>
            </div>
        </div>
        <div class="connection">
            <h2>Будь всегда в курсе выгодных предложений</h2>
            <h3>подписывайся и следи за новинками и выгодными предложениями.</h3>
            <form action="/handlers/handler.php" method="post">
                <div class="field">
                    <input type="email" name="usermail" placeholder="e-mail" autocapitalize="off" autocorrect="off" autocomplete="email" required>
                    <span class="tooltip"> Введите свой электронный адрес, например, ivanov@yandex.ru и нажмите кнопку "Записаться"</span>
                </div>
                <button type="submit">Записаться</button>
                <div class="modal hidden">
                    <div class="modal__box">
                        <p>I am a modal! </p>
                        <p>Click anywhere to close me!</p> 
                    </div> 
                </div>    
            </form>
            <!-- <p class="error"><i>Некорректный e-mail. Попробуйте ещё раз.</i></p> -->
        </div>
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>