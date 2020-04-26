<?php
//задание 1
/*
$a = 0;

while ($a <= 100){
    if($a % 3 == 0){
        echo $a." ";
    }
    $a++;
}
*/

// задание 2

/*
$a = 0;

do{
    if($a == 0){
        echo "$a - ноль<br>";
    }
    elseif($a % 2 == 0){
        echo "$a - четное число<br>";
    }
    else echo "$a - нечетное число<br>";
    $a++;
} while ($a <= 10);
*/

//задание 3

/*
$cities = [
    "Московская область" => ["Голицыно", "Воскресенск", "Апрелевка", "Клин", "Можайск",],
    "Ленинградская область" => ["Выборг", "Гатчина", "Сертолово", "Сосновый Бор", "Тихвин",],
    "Рязанская область" => ["Касимов", "Рязань", "Шацк", "Кораблино", "Михайлов",],
    "Волгоградская область" => ["Волгоград", "Камышин", "Калач-на-Дону", "Михайловка", "Урюпинск",],
    "Крым" => ["Бахчисарай", "Керчь", "	Ялта", "Судак", "Симферополь",],
];

foreach ($cities as $obl => $towns){
    echo "<p>$obl: ".implode(', ', $towns)."</p>";
}
*/

//задание 4


function translit($text) {
    $alphabet = [

        "а" => "a",  "б" => "b",  "в"  => "v", "г"  => "g", "д"  => "d",  "е"  => "e",
        "ё" => "yo", "ж" => "zh", "з"  => "z", "и"  => "i", "й"  => "j",  "к"  => "k",
        "л" => "l",  "м" => "m",  "н"  => "n", "о"  => "o", "п"  => "p",  "р"  => "r",
        "с" => "s",  "т" => "t",  "у"  => "u", "ф"  => "f", "х"  => "x",  "ц"  => "c",
        "ч" => "ch", "ш" => "sh", "щ"  => "sch", "ь"  => "'", "ы"  => "yh", "ъ"  => "'",
        "э" => "eh", "ю" => "yu", "я"  => "ya",

        "А" => "A",  "Б" => "B",  "В"  => "V", "Г"  => "G", "Д"  => "D",  "Е"  => "E",
        "Ё" => "YO", "Ж" => "ZH", "З"  => "Z", "И"  => "I", "Й"  => "J",  "К"  => "K",
        "Л" => "L",  "М" => "M",  "Н"  => "N", "О"  => "O", "П"  => "P",  "Р"  => "R",
        "С" => "S",  "Т" => "T",  "У"  => "U", "Ф"  => "F", "Х"  => "X",  "Ц"  => "C",
        "Ч" => "CH", "Ш" => "SH", "Щ"  => "W", "Ь"  => "'", "Ы"  => "YH", "Ъ"  => "`",
        "Э" => "EH", "Ю" => "YU", "Я"  => "YA",];

    return strtr($text, $alphabet);
}

// echo translit('Транслитерация написанного текста');


// Задание 5


function replace($text){
    return str_replace(" ", "_", $text);
}
//echo replace("Меняем пробелы на подчеткивания, в написанном тексте.");


//Задание 6

/*
$menu = ["Компания" => ["О нас", "Коллектив" => ["Фотогалерея","Дни рождения",], "Вакансии"],
         "Товары"   => ["Каталог"=> ["Item_1","Item_2", "Item_3"], "Галерея", "Акции", "Новинки"],
         "Контакты" => ["Головной офис", "Производственный цех", "Бухгалтерия", "HR"],                        
        ];
					
		echo "<ul>";
            foreach ($menu as $menu_item => $menu_list) {

                echo "<li>$menu_item</li>";
                    
                    echo "<ul>";
                        foreach($menu_list as $list_item ){
                          if(is_array($list_item)){
							  foreach($list_item as $value){
								  echo "<li>$value</li>";
							  }
						  }
						  else{
							echo "<li>$list_item</li>";
						  }
                        }
                    echo "</ul>";
            }
        echo "</ul>";
*/

//Задание 7

/*
for($a = 0; $a < 10; print $a++);
*/

//Задание 8

/*
foreach ($cities as $obl => $towns){
    echo "<p>$obl: ";
    foreach($towns as $town){
        if (mb_substr($town, 0, 1) == "К"){
            echo $town." ";
        }
    }
    echo "</p>";
}
*/

// Задание 9


function translitReplace ($text){
    return replace(translit($text));
}
echo translitReplace('Производим транслитерацию текста и замену пробелов на подчеркивания.');