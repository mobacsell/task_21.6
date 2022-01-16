<?php
    $start = microtime(true);

    echo '<p class="knowledge__text">1. Выводить данные на экран можно как с помощью языковой конструкции echo, ';
    print 'так и с помощью print. </p>';

    $num = 17;
    echo '<p class="knowledge__text">2. Присвоив переменной какое-либо значение, например, ' . $num . ', можно узнать его тип - ';
    echo gettype($num) . '. </p>';

    echo '<p class="knowledge__text">3. С помощью предопределенной константы __DIR__, можно узнать путь к директории данного php-файла. <br>';
    echo 'Путь к директории с текущим php-фай1лом: ' . __DIR__ . '.</p>';

    echo '<p class="knowledge__text">4. Переменные переменных позволяют создавать перемнные с динамическим формированием их имени. <br>';
    
    function getVarName() {
        if(mt_rand(0, 1)) {
            return 'a';
        } else {
            return 'b';
        }
    }
    
    $var = getVarName();
    $$var = 'Hello';

    if(isset($a)) {
        echo 'Динамически сформирована переменная a = ' . $a . '.</p>';
    } else {
        echo 'Динамически сформирована переменная b = ' . $b . '.</p>';
    }

    $num_1 = 15;
    $num_2 = &$num1;

    echo '<p class="knowledge__text">5. Выражение вида $num_2 = &$num_1 назывется присвоение поссылке.<br> Теперь переменная num_2 ссылается на ту же область данных, что и переменная num_1. </p>';

    echo '<p class="knowledge__text">6. Сравнивая числовое значение и строку, числовое значение автоматически преобразовывается в строку:';
    
    $num = 15;
    $str = "apple";
    if ($num < $str) {
        echo "число 15 меньше строки 'apple' </p>";
    }

    echo '<p class="knowledge__text">7. Время выполнения данного скрипта ' . round( (microtime(true) - $start), 6 ) . 'сек.</p>'
?>