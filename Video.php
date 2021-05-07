<?php
class Video{//класс раздела с видео
  function videoMethod(){//метод вызова видео
    $host='localhost';//свойство заключающее в себе наименование сервера БД mysql
    $user='Container+';//свойство заключающее в себе логин БД mysql
    $password='Freightliner5';//свойство заключающее в себе пароль БД mysql
    $db_name='chocomaster';//свойство заключающее в себе наименование БД mysql
    $link=mysqli_connect($host,$user,$password,$db_name);//свойство заключающее в себе функцию подключения к БД mysql
    
    if ($_POST['dark'] == "../css/dark.css" ){//логическая конструкция if else
    $result=mysqli_query($link, "SELECT content, description FROM video WHERE chocolade_type='dark'") or die(mysqli_error($link));//свойство заключающее в себе функцию запроса к БД mysqi mysqli_query, которая содержит в качестве аргументов( свойство $link, ключевое слово SELECT выбирающее данные из столбцов таблицы (наимнования указываются после ключевого слова SELECT), ключевое слово FROM, выбирающее таблицу базы данных(наимнование указываются после ключевого слова FROM), ключевое слово WHERE указывающее условие выбора данных из таблицы (условия указываются после ключевого слова WHERE, с помощью операторов сравнения).
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);//цикл содержащий в качеисве аргументов (в круглых скобках) декларацию наименования пустого массива, функцию перевода данных sql в массив данных и присваивание этих данных вышеуказанному массиву.
    print '<p>'.$data[0]["description"].'</p>';//оператор вывода на экран
    print '<iframe class="col-12" height="640" src="'.$data[0]["content"].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    }

    elseif ($_POST['milk'] == "../css/milk.css" ){//второе условие логической конструкции if else, указанной выше (смотри комментарий на строке 10)
    $result=mysqli_query($link, "SELECT content, description FROM video WHERE chocolade_type='milk'") or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    print '<p>'.$data["description"].'</p>';
    print '<iframe class="col-12" height="640" src="'.$data[0]["content"].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    }
     else {//код выполняющийся в случае невыполнения условий логической конструкции if else, указанной выше (смотри комментарий на строках 10, 17)
    $result=mysqli_query($link, "SELECT content, description FROM video WHERE chocolade_type='white'") or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    print '<p>'.$data["description"].'</p>';
    print '<iframe width="560" height="315" src="'.$data[0]["content"].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    }
  }
};
