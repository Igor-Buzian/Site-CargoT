<?php
    include "php/connection.php";
    include "php/security.php";
    logs_record("view");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CargoTransportation</title>
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>

    <!-- HEADER -->
    <?php 
        include "header.php";
    ?>


    <!-- MAIN INFO -->
    <div class="main-info">
        <div class="main-info-elements">
         <!-- Грузоперевозки -->
            <div id="stationery" class="info-wrap">
                <div class="info-wrap-elem">
                    <img src="img/furgon-20-pr.jpg" alt="Иллюстрация" width="140" height="140">
                    <h2>Грузовик от 3.5 тонн</h2>
                    <p>Оптимальный выбор по цене для грузоперевозки небольших грузов. Экономичность и компактность этого грузового автомобиля позволит
                        быстро доставить небольшой груз быстро и с комфортом. Машина служит для перевозки грузов на большие расстояния. </p>
                   <button class="butt" onclick="show_window();"> Заказать »</button>
                </div>
                <div id="" class="info-wrap-elem">
                    <img src="img/furgon-20-pr.jpg" alt="Иллюстрация" width="140" height="140">
                    <h2>Грузовик от 7 тонн</h2>
                    <p>Грузоперевозки на наших автомобилях — это самый надежный способ перевозки груза.Можно достичь большой вместимости перевозимых вещей, 
                        благодаря специальному фургону. Машина служит для перевозки грузов на большие расстояния.</p>
                        <button class="butt "  onclick="show_window();"> Заказать »</button>
                </div>
                <div class="info-wrap-elem">
                    <img src="img/furgon-20-pr.jpg" alt="Иллюстрация" width="140" height="140">
                    <h2>Грузовик от 10 тонн</h2>
                    <p>Грузоперевозки на автомобиле данной категории — это недорогой способ перевезти 10 тонн груза.  Заказывая грузоперевозки на данном грузовом автомобиле, 
                        вы получаете качественную перевозку большого количества вашего имущества всего за один рейс. </p>  
                        <button class="butt" onclick="show_window();"> Заказать »</button>
                </div>
            </div>

            
            
            <!-- Оформить заказ -->
            <div class="open_popup">
                <div class="open_popup_conteiner">
                    <h1>Ваш заказ</h1>
                    <form class="form_popup" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >
                        <div class="truck_select_wrap">
                            <label for="truck_select"> Тип грузовика:</label>
                            <select id="truck_select" name="truck_select">
                                <option value="Cargo0" 	disabled="disabled" selected="selected" >Выберите грузовик</option>
                                <option value="Cargo1" >Грузовик от 3.5 тонн</option>
                                <option value="Cargo2" >Грузовик от 7 тонн</option>
                                <option value="Cargo3" >Грузовик от 10 тонн</option>
                            </select><br>
                            <span style="color: red;"><?php echo $cargoErr_M; ?></span><br/>
                        </div>
                        <div class="materials-select">
                            <h2>Выберите материалы для защиты груза:</h2>
                            <div class="mat_checkbox_group">
                                <div class="mat_checkbox1">
                                    <input type="checkbox" name="materials_cb1" id="mat_cb1"><label for="mat_cb1">Не нужно</label>
                                </div>
                                <div class="mat_checkbox2">
                                    <input type="checkbox" name="materials_cb2" id="mat_cb2"><label for="mat_cb2">Коробки</label>
                                </div>
                                <div class="mat_checkbox3">
                                    <input type="checkbox" name="materials_cb3" id="mat_cb3"><label for="mat_cb3">Упаковочная бумага</label>
                                </div>
                                <div class="mat_checkbox4">
                                    <input type="checkbox" name="materials_cb4" id="mat_cb4"><label for="mat_cb4">Мешки</label>
                                </div>
                                <div class="mat_checkbox5">
                                    <input type="checkbox" name="materials_cb5" id="mat_cb5"><label for="mat_cb5">Клейкие ленты</label>
                                    
                                </div>
                            </div>
                        </div>


                        <div class="request_main-info">
                        <label for="name">Ваше имя:</label>
                        <input type="text" placeholder="ФИО" id="name" name="req_name">

                        <label for="tel">Ваш телефон:</label>
                        <input type="text" class="artStranger" placeholder="+373(79) 99 99 99" id="tel" name="req_tel">

                        <label for="email">Ваш email:</label>
                        <input type="email" placeholder="E-mail" id="email" name="req_email">

                        <label for="date">На какую дату хотите сделать заказ:</label>
                        <input type="date" placeholder="Дата прибытия" id="date" max="9999-12-31"  value="2022-06-15" name="req_date">
                          
                        </div>

                        <input id="input_butt" type="submit" value="Отправить запрос" name="req_submit" class="w3-container w3-border w3-round-xlarge w3-card-8 w3-green w3-hover-border-green" />
                    </form>  
                    <div class="popup_close"><img src="img/close.png" alt="img" wight=45px height=30px></div>
                </div>
             </div>
              <!-- Информация о нас -->
              <div id="info"></div> 
              <br>
            <div  class="info">
                <div class="info-img">
                   <a href="tel:+37378140088"> <img src="img/call.png" alt="Иллюстрация" wight="30" height="30"></a>
                    <div class="info-span">
                        <span >+373 78 140 088</span><br>
                         <span>info@cargoT.md</span>
                    </div>
                </div>
                    
                <div class="info-img">
                    <a href="#map"> <img src="img/jps.png" alt="Иллюстрация" wight="30" height="30"></a>
                        <div class="info-span">
                            <span>Шоссэ Хынчешть 145</span><br>
                            <span>Кишинев, Р. Молдова</span>
                         </div> 
                 </div> 

                    <div class="info-img">
                        <a class="strange_a"  onclick ="show_schedule();"> <img src="img/time.png" alt="Иллюстрация" wight="30" height="30"></a>
                            <div class="info-span">
                                <span>Понедельник - Воскресенье</span><br>
                                <span>8:00 - 20:00</span>
                            </div> 
                    </div> 
            </div>
            <div class="schedule">
                <div class="schedule_body">
                  <div class="popup_span">
                      <img class="schedule_img" src="img/time_popup.png" alt="Иллюстрация">
                      <span>Понедельник - Воскресенье</span><br>
                      <span>8:00 - 20:00</span>
                      <div class="cancel_schedule"><img src="img/cancel_schedule.png" alt="img" wight=45px height=40px></div>
                  </div> 
                </div>
                
            </div>
            <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5442.8425167458245!2d28.79070622329623!3d46.99270091317439!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa959c64566d4ee5e!2zU1ZTIFByYWdhLm1kIC0gQ2hpyJlpbsSDdSBQcmFnYSwg0JrQuNGI0LjQvdC10LIg0J_RgNCw0LPQsCwgTW9sZG92YSBDZWhpYSwg0JzQvtC70LTQvtCy0LAg0KfQtdGF0LjRjw!5e0!3m2!1sru!2s!4v1651075822560!5m2!1sru!2s"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
             <div id="about_us"></div><br><br><br>
         <!-- Продолжение про инфу -->
            <div class="info1"> 
                <span class="HeadInfoTrash">Мы для вас:</span>
                    <div class="info-wrap">
                        <div class="info-wrap-elem1">
                            <img src="img/multymod.jpg" alt="Иллюстрация" width="140" height="140">
                            <span class="trash">Предоставляем услугу в удобное для вас время. </span>
                        </div>

                        <div class="info-wrap-elem1">
                            <img src="img/track.jpg" alt="Иллюстрация" width="140" height="140">
                            <span class="trash">Здраво оцениваем и берёмся за любой объём работ</span>
                        </div>

                        <div class="info-wrap-elem1">
                            <img src="img/2019-07-29_061559.jpg" alt="Иллюстрация" width="140" height="140">
                            <span class="trash" >Согласуем договор и нюансы </span>  
                        </div>

                        <div class="info-wrap-elem1">
                            <img src="img/cargo.jpg" alt="Иллюстрация" width="140" height="140">
                            <span class="trash">Выполняем перевоз быстро и качественно</span>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="main-info">
                    <div class="main-info-elements">
                        <div class="info-wrap">
                            <div class="info-cargo-company">
                                    <span class="HeadInfoTrash">История компании</span>
                                    <span class="trash1">Команда СargoT в основном базируется в трёх городах — Санкт-Петербурге, Москве и Сочи.</span>
                                    <span class="trash1">Так же в Екатеринбурге, Казани, Нижнем Новгороде, Казахстане, Турции и Германии есть наши представители.</span> 
                                    <span class="trash1">Штаб-квартира СargoT находится в центре Санкт-Петербурга — в доме компании « Нингер». Мы называем его «Штаб», Нингер» или просто «Нигна»,</span> 
                                    <span class="trash1">а если нужно сориентировать гостей — «Дом книги». Именно здесь мы собираемся вместе, чтобы обсуждать самые важные решения.</span>  
                                    <span class="trash1">Также офисы компании есть в историческом здании у Красного моста и на Большой Морской в Санкт-Петербурге.</span>
                                
                            </div> 
                        </div>      
                </div> 
            </div>

            <div id="box" class = "stationery">
                <div class="info-wrap"> 
                    <div class="stationery-elem">   
                        <span class="stationery-scan">КОРОБКИ</span>
                        <h2>Картонные коробки для переезда</h2>
                        <div class="trash2">
                            Универсальный материал, который подходит для транспортировки и хранения самых разных вещей. <br>
                            <span class="hiddenInformation"> Цена за штуку: 32 лея</span>
                        </div>
                        <button class="butt showPrice" onclick = showPrice(this);>Подробнее »</button>
                    </div> 

                    <div class="stationery-elem">   
                        <span class="stationery-scan">КЛЕЙКИЕ ЛЕНТЫ</span>
                        <h2>Клейкие ленты для переезда</h2>
                        <div class="trash2"> 
                            Без клейкой ленты, или скотча, трудно организовать безопасную перевозку вещей при переезде. <br>
                            <span class="hiddenInformation"> Цена за метр: 10.2 лея</span>
                        </div>
                        <button class="butt showPrice" onclick = showPrice(this);>Подробнее »</button>
                    </div>  
                </div>          
             </div> 
            
            <div class = "stationery1">
                <div class="info-wrap">  
                    <div class="stationery-elem">   
                        <span class="stationery-scan">УПАКОВОЧНАЯ БУМАГА</span>
                        <h2>Упаковочная бумага для переезда</h2>
                        <div class="trash2">
                            Упаковочная бумага (крафт-бумага) служит для защиты хрупких предметов. <br>
                            <span class="hiddenInformation"> Цена за метр: 8.4 леев</span>
                        </div>
                        <button class="butt showPrice" onclick = showPrice(this);>Подробнее »</button>
                    </div> 

                    <div class="stationery-elem">   
                        <span class="stationery-scan">МЕШКИ</span>
                        <h2>Мешки для переезда</h2>
                        <div class="trash2">
                            Мешки полипропиленовые удобны, вместительны и достаточно прочные. <br>
                            <span class="hiddenInformation"> Цена за штуку: 7 лея</span>
                        </div>
                        <button class="butt showPrice" onclick = showPrice(this);>Подробнее »</button>
                    </div>  
                </div>        
            </div>  
            

            
        </div>
    </div> 


    <!-- FOOTER -->
    <?php 
        include 'footer.php';
    ?>
</main>
<script src="js/jQuery.min.js"></script>
<script src="js/script.js"></script>
<script src="js/maska-nomera.js" type="text/javascript" ></script>

<script>
    $('.artStranger').mask('+373 (99) 99-99-99');

    $.fn.setCursorPosition = function(pos) {
        if ($(this).get(0).setSelectionRange) {
            $(this).get(0).setSelectionRange(pos, pos);
        } 
        else if ($(this).get(0).createTextRange) {
            var range = $(this).get(0).createTextRange();
            range.collapse(true);
            range.moveEnd('character', pos);
            range.moveStart('character', pos);
            range.select();
        }
    };

    $('input[type="tel"]').click(function(){
        $(this).setCursorPosition(4); 
    });
</script>
</body>
</html>