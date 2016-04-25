<!DOCTYPE html>
   <?php 
   $i=$_GET['i'];
   if (!isset($i)){
    $i=0;
   }
                 
                    ?>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Юридическая компания LEX FORI</title>
        <script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
        <link rel="stylesheet" type="text/css" href="main.css">
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
                    <a href="index.php" class="button">
                        вопрос-ответ
                    </a>
                </div>    
            </div>
        </div>
       <div class="content services">
            <div class="title">
                услуги физическим лицам
            </div>
            <div class="inner-large">
                <div class="l3-col">
                    <a href="/services.php?i=1" class= <?php 
                                                    $current=1;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Юридическая консультация в Оренбурге
                        </div>
                    </a>
                    <a href="/services.php?i=2" class= <?php 
                                                    $current=2;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Составление искового заявления, жалоб на решения судов
                        </div>
                    </a>
                    <a href="/services.php?i=3" class= <?php 
                                                    $current=3;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class= <?php  echo "in-item".$suffix; 
                                                    ?>>

                            Представление интересов в суде
                        </div>
                    </a>
                    <a href="/services.php?i=4" class= <?php 
                                                    $current=4;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Представление интересов в государственных учреждениях
                        </div>
                    </a>
                    <a href="/services.php?i=5" class= <?php 
                                                    $current=5;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Оспаривание решений суда
                        </div>
                    </a>                    
                    <a href="/services.php?i=6" class= <?php 
                                                    $current=6;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Исполнительное производство
                        </div>
                    </a>
                    <a href="/services.php?i=7" class= <?php 
                                                    $current=7;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Сопровождение сделок с недвижимостью
                        </div>
                    </a>
                    <a href="/services.php?i=8" class= <?php 
                                                    $current=8;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Автоюрист Оренбург
                        </div>
                    </a>
                    <a href="/services.php?i=9" class= <?php 
                                                    $current=9;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Семейный юрист
                        </div>
                    </a>
                    <a href="/services.php?i=10" class= <?php 
                                                    $current=10;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Жилищные споры
                        </div>
                    </a>
                    <a href="/services.php?i=11" class= <?php 
                                                    $current=11;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Приватизация жилья
                        </div>
                    </a>
                    <a href="/services.php?i=12" class= <?php 
                                                    $current=12;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Исполнительное производство
                        </div>
                    </a>
                    <a href="/services.php?i=13" class= <?php 
                                                    $current=13;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Оспаривание судебных решений
                        </div>
                    </a>
                    <a href="/services.php?i=14" class= <?php 
                                                    $current=14;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Банкротство физических лиц в Оренбурге
                        </div>
                    </a>

                    
                </div>
                <div class="r3-col">
                    <div class="meteor m1"></div>
                    <div class="meteor m2"></div>

                    <div class="consist">
                        <?php
                        require('consist.php');
                        ?> 
                        <?php 
                        $j=$i+100;
                        echo $consist[$j];
                        ?>
                    
                    </div> 
                    <div class="meteor m3"></div>
                    <div class="meteor m4"></div>                   
                </div>

            </div>
        </div>
        <div class="content services">
            <div class="title">
                услуги юридическим лицам
            </div>
            <div class="inner-large">
                <div class="l3-col">
                    <a href="/services.php?i=1" class= <?php 
                                                    $current=1;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Юридическая консультация в Оренбурге
                        </div>
                    </a>
                    <a href="/services.php?i=2" class= <?php 
                                                    $current=2;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Составление искового заявления, жалоб на решения судов
                        </div>
                    </a>
                    <a href="/services.php?i=3" class= <?php 
                                                    $current=3;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class= <?php  echo "in-item".$suffix; 
                                                    ?>>

                            Представление интересов в суде
                        </div>
                    </a>
                    <a href="/services.php?i=4" class= <?php 
                                                    $current=4;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Представление интересов в государственных учреждениях
                        </div>
                    </a>
                    <a href="/services.php?i=5" class= <?php 
                                                    $current=5;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Оспаривание решений суда
                        </div>
                    </a>                    
                    <a href="/services.php?i=6" class= <?php 
                                                    $current=6;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Исполнительное производство
                        </div>
                    </a>
                    <a href="/services.php?i=7" class= <?php 
                                                    $current=7;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Сопровождение сделок с недвижимостью
                        </div>
                    </a>
                    <a href="/services.php?i=8" class= <?php 
                                                    $current=8;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Автоюрист Оренбург
                        </div>
                    </a>
                    <a href="/services.php?i=9" class= <?php 
                                                    $current=9;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Семейный юрист
                        </div>
                    </a>
                    <a href="/services.php?i=10" class= <?php 
                                                    $current=10;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Жилищные споры
                        </div>
                    </a>
                    <a href="/services.php?i=11" class= <?php 
                                                    $current=11;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Приватизация жилья
                        </div>
                    </a>
                    <a href="/services.php?i=12" class= <?php 
                                                    $current=12;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Исполнительное производство
                        </div>
                    </a>
                    <a href="/services.php?i=13" class= <?php 
                                                    $current=13;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Оспаривание судебных решений
                        </div>
                    </a>
                    <a href="/services.php?i=14" class= <?php 
                                                    $current=14;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "services-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Банкротство физических лиц в Оренбурге
                        </div>
                    </a>

                    
                </div>
                <div class="r3-col">
                    <div class="meteor m1"></div>
                    <div class="meteor m2"></div>

                    <div class="consist">
                        <?php
                        require('consist.php');
                        ?> 
                        <?php 
                        $j=$i+100;
                        echo $consist[$j];
                        ?>
                    
                    </div> 
                    <div class="meteor m3"></div>
                    <div class="meteor m4"></div>                   
                </div>

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