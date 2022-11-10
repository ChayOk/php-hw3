<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="task">
        <h2>1. Сделайте функцию, которая возвращает куб числа. Число передается параметром.</h2> 
        
        <?php         
        header('Content-type: text/html; charset=utf8_unicode_ci');   
        function cubeNum($num)
        {
            echo "<p>{$num}";

            return ($num ** 3);
        }  
        echo " в кубе = " . cubeNum(5) . "</p>";   
        ?>
    </div>
    <div class="task">
        <h2>2. Сделайте функцию, которая возвращает сумму двух чисел. Числа передаются параметрами функции.</h2>

        <?php
        function sumNum($a, $b)
        {
            echo "<p>{$a} + {$b} = ";

            return ($a + $b);
        }  
        echo sumNum(5, 28) . "</p>"; 
        ?>
    </div>
    <div class="task">
        <h2>
            3. Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.
        </h2>
        <form method="GET" class="secForm">
            <label>
                Введите число от 1 до 7:
                <input type="number" name="dayNum">
            </label>
            <button type="submit" name="butDay">Определить день недели</button>
        </form>

        <?php
        function dayNumber($dayNumber)
        {
            switch ($dayNumber) {
                case 1:
                    return "Понедельник";
                case 2:
                    return "Вторник";
                case 3:
                    return "Среда";
                case 4:
                    return "Четверг";
                case 5:
                    return "Пятница";
                case 6:
                    return "Суббота";
                case 7:
                    return "Воскресенье";
                case ($dayNumber == NULL || $dayNumber < 0 || $dayNumber > 7):
                    return "Вы ввели неверное число";
                default:
                    return "Вы ничего не ввели";
            }
        }  
        echo "<p>" . dayNumber($_GET['dayNum']) . "</p>"; 
        ?>
    </div>
    <div class="task">
        <h2>
            4. Сделайте функцию, которая параметром принимает число и проверяет - отрицательное оно или нет. Если отрицательное - пусть функция вернет true, а если нет - false.
        </h2>
        
        <?php
        function negativeNum($a)
        {
            echo "<p>";
            if($a > 0){
                echo "Число {$a} > 0? ";

                return true;
            } else if($a < 0){
                echo "Число {$a} > 0? ";

                return false;
            } else{
                return "Число ровняется 0 ";
            }                   
        }  
        echo var_dump(negativeNum(5)) . "</p>"; 
        echo var_dump(negativeNum(-5)) . "</p>"; 
        echo negativeNum(0) . "</p>"; 
        ?>
    </div>
    <div class="task">
        <h2>
            5. Сделайте функцию getDigitsSum (digit - это цифра), которая параметром принимает целое число и возвращает сумму его цифр.
        </h2>
        
        <?php
        function getDigitsSum($digit)
        {
            // echo "<p>Заданное число: {$digit}</p>";
            $arr = str_split($digit); //преобразование строки в массив
            $sum = 0;
            foreach ($arr as $v) { 
                $sum += (int)$v;
           }

            return $sum;
        }  
        echo "<p>Сумма чисел = " . getDigitsSum(12345) . "</p>"; 
        ?>
    </div>
    <div class="task">
        <h2>
            6. Найдите все года от 1 до 2020, сумма цифр которых равна 13. Для этого используйте вспомогательную функцию getDigitsSum из предыдущей задачи.
        </h2>
        
        <?php
        $years = [];
        for ($i = 1; $i <= 2020; $i++) {
              if (getDigitsSum($i) == 13) {
                array_push($years, $i); //добавляет элемент в массив ($массив, $элемент)
              }
            }
        echo "<p>";
        print_r($years);
        echo "</p>";
        ?>
    </div>
    <div class="task">
        <h2>
            7. Сделайте функцию isEven() (even - это четный), которая параметром принимает целое число и проверяет: четное оно или нет. Если четное - пусть функция возвращает true, если нечетное - false.
        </h2>        
        
        <?php  
        function isEven($num)
        {
            echo "<p>Число {$num} четное? ";
            if ($num % 2 == 0) {                
                return true;
            } else{                
                return false;
            }
        }  
        echo var_dump(isEven(19)) . "</p>"; 
        echo var_dump(isEven(20)) . "</p>"; 
        ?>
    </div>
    <div class="task">
        <h2>
            8. Сделайте функцию, которая принимает строку на русском языке, а возвращает ее транслит.
        </h2>
        <form method="GET" class="thirdForm">
            <label>
                Введите текст на русском языке:
                <input type="text" name="ruText">
            </label>
            <button type="submit" name="butText">Определить день недели</button>
        </form>
        
        <?php
        function translitText($str) {
            //создаем массив русских букв
            $rusText = array('а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я','А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я');
            //создаем массив английских букв
            $engText = array('a','b','v','g','d','e','e','zh','z','i','i','k','l','m','n','o','p','r','s','t','u','f','h','cz','ch','sh','shh','`','y','`','e','yu','ya','A','B','V','G','D','E','E','ZH','Z','I','I','K','L','M','N','O','P','R','S','T','U','F','H','CZ','CH','SH','SHH','`','Y','`','E','YU','YA');

            if ($_GET['ruText'] == '') {
                echo "<p>Вы ничего не ввели";
            } else{
            echo "<p>" . $str . " => ";
            }

            return str_replace($rusText, $engText, $str); //str_replace заменяет все вхождения строки поиска на строку замены
        }
        echo translitText($_GET['ruText']) . "</p>";
        ?>
    </div>
    <div class="task">
        <h2>
            9. Сделайте функцию, которая возвращает множественное или единственное число существительного. Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. Функция первым параметром принимает число, а следующие 3 параметра — форма для единственного числа, для чисел два, три, четыре и для чисел, больших четырех, например, func(3, 'яблоко', 'яблока', 'яблок').
        </h2>
        
        <?php
        function nounNumber($num, $first, $secToFour, $fiveMore)
        {
            switch ($num) {
                case 1:
                    return $num . " " . $first;
                case 2:
                case 3:
                case 4:
                    return $num . " " . $secToFour;
                case $num >= 5:
                    return $num . " " . $fiveMore;
            }
        }  
        echo "<p>" . nounNumber(1, 'яблоко', 'яблока', 'яблок') . "</p>";
        echo "<p>" . nounNumber(2, 'яблоко', 'яблока', 'яблок') . "</p>";
        echo "<p>" . nounNumber(3, 'яблоко', 'яблока', 'яблок') . "</p>";
        echo "<p>" . nounNumber(4, 'яблоко', 'яблока', 'яблок') . "</p>";
        echo "<p>" . nounNumber(5, 'яблоко', 'яблока', 'яблок') . "</p>";
        echo "<p>" . nounNumber(10, 'яблоко', 'яблока', 'яблок') . "</p>";
        ?>
    </div>
    <div class="task">
        <h2>
        10. Дан массив с числами. Выведите последовательно его элементы используя рекурсию и не используя цикл.
        </h2>        
        <?php            
        function recArray($n)
        {                
            $arr = [1,2,3,4,5];
            echo "<span>" . $arr[$n++] . " </span>";
            if($n < count($arr)){
                return recArray($n);
            }
        }
        recArray(0);
        ?>
    </div>    
    <div class="task">
        <h2>
        11. Дано число. Сложите его цифры. Если сумма получилась более 9-ти, опять сложите его цифры. И так, пока сумма не станет однозначным числом (9 и менее).
        </h2>        
        <?php    
        function countNum($num) {  
            $sum = 0;
            $num .= ''; 
            echo "<p>Итерации: {$num}</p>";           
            for ($i = 0; $i < strlen($num); $i++) {
                $sum += (int)$num[$i];        
            }
            if ($sum > 9) {
                return countNum($sum);
            } else{
                return $sum;
            }
        }
        echo "<p><br>Сумма цифр заданного числа = " . countNum(193) . "</p>";
        ?>
    </div>    
    <div class="task">
        <h2>
        12. Рассчитать скорость движения машины и выведите её в удобочитаемом виде. Осуществить возможность вывода в км/ч, м/c. Представить решение задачи с помощью одной функции.
        </h2> 
        <form method="GET" class="speedForm">       
            <button name="kilometer">Скорость в км/ч</button>
            <button name="meter">Скорость в м/с</button>
        </form>
        <?php            
        function speedAuto($km, $time)
        {
            echo "<p>Расстояние равно {$km} км, время равно {$time} ч.</p>";
            echo "<p>";
            $speed = $km / $time;            
            if (filter_has_var(1, 'kilometer')) { //filter_has_var проверяет существование переменной указанного типа
                return "Скорость = " . $speed . " км/ч";
            } else if (filter_has_var(1, 'meter')){
                return "Скорость = " . ($speed * 1000 / 3600) . " м/с";
            } else{
                return "Нажмите на кнопку, чтобы рассчитать скорость";
            }
        }
        echo speedAuto(200, 2) . "</p>";
        ?>
    </div>    
    <div class="task">
        <h2>
        13. Даны 2 слова, определить можно ли из 1ого слова составить 2ое, при условии что каждую букву из строки 1 можно использовать только один раз.
        </h2>        
        <?php            
        function twoWords($first, $second)
        {
            for ($i = 0; $i < iconv_strlen($first); $i++) {  //iconv_strlen учитывает кодировку строки
                for ($j = 0; $j < iconv_strlen($second); $j++) { 
                    if ($first[$i] == $second[$j]) {
                        echo "<p>Буква {$first[$i]} подходит из слова {$first} подходит к слову {$second}</p>";
                    }
                }
            }
        }
        twoWords('english', 'single'); //не принимает русские буквы 
        ?>
    </div>    
    <div class="task">
        <h2>
        14. Палиндромом называют последовательность символов, которая читается как слева направо, так и справа налево. Напишите функцию по определению палиндрома по переданному параметру.

        </h2>        
        <?php                   
        function palindrome($str) {
            if ($str === strrev($str)){ // strrev переворачивает строку
                return "<p>Слово '{$str}' является полиндромом</p>";
            } else {
                return "<p>Слово '{$str}' не является полиндромом</p>";
            }    
        }
        echo palindrome("abccba");
        echo palindrome("madam");
        echo palindrome("топот"); //с русским не работает
        echo palindrome("карандаш");
        echo palindrome("madama");
        echo palindrome("task");
        ?>
    </div>    
    <div class="task">
        <h2>
        15. Создание функцию создания таблицы умножения в HTML-документе в виде таблицы с использованием соотв. тегов.
        </h2>        
        <?php            
        function multiplicationTable($n)
        {
            echo "<table>";
            for ($i = 1; $i <= $n; $i++) {
            echo "<tr>";
                for ($j = 1; $j <= $n; $j++) {
                    echo "<td>{$i} x {$j} = " . $i * $j . "</td>";
                }
            echo "</tr>";
            }
            echo "</table>";
        }
        echo multiplicationTable(10);
        ?>
    </div>    
    <div class="task">
        <h2>
        16. Дана строка с текстом. Напишите функцию определения самого длинного слова.
        </h2>        
        <?php  
        function longWord($text)
        {
            echo "<p>Дана строка: '{$text}'</p>";
            $arr = explode(' ', $text); //explode разбивает строку на массив с помощью разделителя
            $max = $arr[0];
            for ($i = 0; $i < count($arr); $i++) {
                if (strlen($arr[$i]) > strlen($max)) {
                    $max = $arr[$i];
                }
            }
            
            return "<p>Самое длинное слово - " . $max . "</p>";
        }  
        echo longWord('быстрый тяжкий больница наносить формировать противоположный удивляться');
        ?>
    </div>    
    <div class="task">
        <h2>
        17. Напишите функцию определения суммарного количества единиц в числах от 1 до 100.
        </h2>        
        <?php            
        function sumUnits($n)
        {
            $sum = 0;
            for ($i = 1; $i <= $n; $i++) {
                $i .= '';
                if (strpos($i, '1') !== false) { //strpos возвращает позицию первого вхождения подстроки в строке или FALSE, если соответствия не найдены
                    $sum++;                
                }
            }
            echo "<p>Суммарное количество единиц в числах от 1 до 100 = {$sum}</p>";
        }
        echo sumUnits(100);
        ?>
    </div>    
    <div class="task">
        <h2>
        18. Напишите функцию, которая разбивает длинную строку тегами &#60;br&#62; так, чтобы длина каждой подстроки была не более N символов. Новая подстрока не должна начинаться с пробела.
        </h2>        
        <?php            
        function stringLength($n)
        {
            $str = "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>";

            for ($i = 0; $i < strlen($str); $i++) { 
                if (strlen($str) > $n) {
                    $str = wordwrap($str, $n, '<br>'); // wordwrap переносит строку по указанному количеству символов
                }
            }
            echo $str;
        }
        stringLength(100);
        ?>
    </div>    
</body>
</html>