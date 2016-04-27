
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
                    <a href="faq.php" class="button">
                        вопрос-ответ
                    </a>
                </div>    
            </div>
        </div>
       <div class="content docs">
            <div class="title">
                образцы документов
            </div>
            <div class="inner-large">
                <div class="l3-col">
                    <a href="/docs.php?i=1" class= <?php 
                                                    $current=1;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Исковое заявление об установлении отцовства и взыскании алиментов
                        </div>
                    </a>
                    <a href="/docs.php?i=2" class= <?php 
                                                    $current=2;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Исковое заявление об обмене недоброкачественного товара
                        </div>
                    </a>
                    <a href="/docs.php?i=3" class= <?php 
                                                    $current=3;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class= <?php  echo "in-item".$suffix; 
                                                    ?>>

                            Исковое заявление о расторжении брака
                        </div>
                    </a>
                    <a href="/docs.php?i=4" class= <?php 
                                                    $current=4;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Исковое заявление о расторжении брака и разделе совместно нажитого имущества
                        </div>
                    </a>
                    <a href="/docs.php?i=5" class= <?php 
                                                    $current=5;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Исковое заявление о признании утратившим право пользования жилым помещением
                        </div>
                    </a>                    
                    <a href="/docs.php?i=6" class= <?php 
                                                    $current=6;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Исковое заявление о восстановлении на работу
                        </div>
                    </a>
                    <a href="/docs.php?i=7" class= <?php 
                                                    $current=7;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Исковое заявление о возмещении ущерба причиненного заливом квартиры
                        </div>
                    </a>
                    <a href="/docs.php?i=8" class= <?php 
                                                    $current=8;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Исковое заявление о взыскании долга по договору займа
                        </div>
                    </a>
                    <a href="/docs.php?i=9" class= <?php 
                                                    $current=9;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Исковое заявление о взыскании алиментов на ребенка
                        </div>
                    </a>
                    <a href="/docs.php?i=10" class= <?php 
                                                    $current=10;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Исковое заявление о возмещении ущерба причиненного ДТП
                        </div>
                    </a>
                    <a href="/docs.php?i=11" class= <?php 
                                                    $current=11;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Заявление о выдаче копий документов
                        </div>
                    </a>
                    <a href="/docs.php?i=12" class= <?php 
                                                    $current=12;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Заявление о выдаче дубликата судебного приказа
                        </div>
                    </a>
                    <a href="/docs.php?i=13" class= <?php 
                                                    $current=13;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Заявление о возврате госпошлины в суд
                        </div>
                    </a>
                    <a href="/docs.php?i=14" class= <?php 
                                                    $current=14;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Заявление о возбуждении исполнительного призводства
                        </div>
                    </a>
                    <a href="/docs.php?i=15" class= <?php 
                                                    $current=15;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Заявление о прекращении исполнительного производства
                        </div>
                    </a>
                    <a href="/docs.php?i=16" class= <?php 
                                                    $current=16;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Заявление об утверждении мирового соглашения
                        </div>
                    </a>
                    <a href="/docs.php?i=17" class= <?php 
                                                    $current=17;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Заявление об уточнении исковых требований
                        </div>
                    </a>
                    <a href="/docs.php?i=18" class= <?php 
                                                    $current=18;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Заявление о пропуске срока
                        </div>
                    </a>
                    <a href="/docs.php?i=19" class= <?php 
                                                    $current=19;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Ходатайство о привлечении специалиста
                        </div>
                    </a>
                    <a href="/docs.php?i=20" class= <?php 
                                                    $current=20;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Ходатайство о переносе судебного заседания
                        </div>
                    </a>                    
                    <a href="/docs.php?i=21" class= <?php 
                                                    $current=21;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Заявление о заочном рассмотрении дела
                        </div>
                    </a>                   
                    <a href="/docs.php?i=22" class= <?php 
                                                    $current=22;
                                                    if($i==$current){
                                                        $suffix="-active";
                                                    }   else {unset($suffix);
                                                        }
                                                    echo "docs-item".$suffix; 
                                                    ?>>
                        <div class=<?php  echo "in-item".$suffix; 
                                                    ?>>
                            Заявление о возбуждении исполнительного производства
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
                    echo $consist[$i];
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