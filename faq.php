<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Юридическая компания LEX FORI</title>
        <script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
        <link rel="stylesheet" type="text/css" href="main.css">
        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    </head>

    <body>
    
		<div class="head">
    		<div class ="container">
            	<div class="logo">
                    <div class="lex">
                        Lex Fori
                    </div>
                    <div class="yk">
                        ЮРИДИЧЕСКАЯ КОМПАНИЯ
                    </div>
                </div>
                <div class="city">
                    <img src="city.png">
                </div>
                <div class="offer">
                    <div class="phone">
                        8(922) 829-76-60
                    </div>
                    <div class="send">
                        ОСТАВИТЬ ЗАЯВКУ
                    </div>
                </div>
            </div>
    	</div>
       <div class="menu">
            <div class="container">
                <div class="menu-container">
                    <a href="index.php" class="button">
                        новости
                    </a>
                    <a href="index.php" class="button">
                        о нас
                    </a>
                    <a href="services.php" class="button">
                        услуги
                    </a>
                    <a href="price.php" class="button">
                        прайс
                    </a>
                    <a href="docs.php" class="button">
                        документы
                    </a>
                    <a href="faq.php" class="button">
                        вопрос-ответ
                    </a>
                </div>    
            </div>
        </div>
        <div class="content news">
            <div class="title">
                вопрос-ответ
            </div>
            <div class="qform"> 
                <div class="title mini">
                задайте вопрос
                </div>           
                <form action="handler.php" method="post">
                <p><input id='name' type="text" size="30" placeholder="введите Ваше имя" name="login"></p>
                <p class="emptywarning"></p>
                <p><input id='password' type="text" size="30" placeholder="введите адрес электронной почты" name="password"></p>
                <p class="emptywarning"></p>
                <p><textarea id='question' cols="30" rows="30" placeholder="задайте вопрос здесь" maxlength="1000" name="question"></textarea></p>
                <p class="emptywarning"></p>
                <p><input id="submit" type="submit" value="отправить"></p>    
                </form>
            </div>
        </div>

        <div class="ground">
            <div class="container">
                <div class="bot-logo">
                    <div class="bot-lex">
                        Lex Fori
                    </div>
                    <div class="bot-yk">
                        ЮРИДИЧЕСКАЯ КОМПАНИЯ
                    </div>
                    <div class="mutano">
                        2016 Designed by<span> Mutano</span>
                    </div>
                </div>
                <div class="r-col">
                    <div>
                        +7(3532) 51-70-20
                    </div>
                    <div>
                        +7(3532) 27-82-86
                    </div>
                    <div>
                        yurist-56@bk.ru
                    </div>
                    <div>
                        Оренбург, переулок Матросский 2, офис 403
                    </div>
                </div>
            </div>    
            
        </div>


	</body>
</html>
<script type="text/javascript">
        ymaps.ready(init);
        var myMap, 
            myPlacemark;

        function init(){ 
            myMap = new ymaps.Map("map", {
                center: [51.763598, 55.098926],
                zoom: 18,
                controls:[]
            }); 
            
            myPlacemark = new ymaps.Placemark([51.763598, 55.098926], {
                hintContent: 'Lex Fori',
                
            });
            
            myMap.geoObjects.add(myPlacemark);
        }
</script> 
