<?php
class Slider{//класс Slider
  function sliderMethod(){//метод вызова Slider'а фреймворка bootstrap (синтаксис bootstrap находится внутри базы данных mysql, в виде даных типа String на языке html)
    $host='localhost';//свойство заключающее в себе наименование сервера БД mysql
    $user='Container+';//свойство заключающее в себе логин БД mysql
    $password='Freightliner5';//свойство заключающее в себе логин БД mysql
    $db_name='chocomaster';//свойство заключающее в себе наименование БД mysql
    $link=mysqli_connect($host,$user,$password,$db_name);//свойство заключающее в себе функцию подключения к БД mysql
    if ($_POST['dark'] == "../css/dark.css" ){//логическая конструкция if else
    $result=mysqli_query($link, "SELECT content FROM slider WHERE chocolade_type='dark'") or die(mysqli_error($link));//свойство заключающее в себе функцию запроса к БД mysqi mysqli_query, которая содержит в качестве аргументов( свойство $link, ключевое слово SELECT выбирающее данные из столбцов таблицы (наимнования указываются после ключевого слова SELECT), ключевое слово FROM, выбирающее таблицу базы данных(наимнование указываются после ключевого слова FROM), ключевое слово WHERE указывающее условие выбора данных из таблицы (условия указываются после ключевого слова WHERE, с помощью операторов сравнения).
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); //цикл содержащий в качеисве аргументов (в круглых скобках) декларацию наименования пустого массива, функцию перевода данных sql в массив данных и присваивание этих данных вышеуказанному массиву.

    print $data[0]['content'];//оператор вывода на экран
    }

    elseif ($_POST['milk'] == "../css/milk.css" ){//второе условие логической конструкции if else, указанной выше (смотри комментарий на строке 9)
    $result=mysqli_query($link, "SELECT content FROM slider WHERE chocolade_type='milk'") or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    print $data[0]['content'];
    }
     else {//код выполняющийся в случае невыполнения условий логической конструкции if else, указанной выше (смотри комментарий на строках 9, 16)
    $result=mysqli_query($link, "SELECT content FROM slider WHERE chocolade_type='white'") or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
       print $data[0]['content'];
    }
  }
}
 ?>
