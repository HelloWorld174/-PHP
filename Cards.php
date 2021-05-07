<?php
class Cards{//класс карточки
  function cardsMethod(){//метод вызова карточки
  $host='localhost';//свойство заключающее в себе наименование сервера БД mysql
  $user='Container+';//свойство заключающее в себе логин БД mysql
  $password='Freightliner5';//свойство заключающее в себе пароль БД mysql
  $db_name='chocomaster';//свойство заключающее в себе наименование БД mysql
  $link=mysqli_connect($host,$user,$password,$db_name);//свойство заключающее в себе функцию подключения к БД mysql

  if ($_POST['dark'] == "../css/dark.css" ){//логическая конструкция if else
  $result=mysqli_query($link, "SELECT image, name, description FROM cards WHERE chocolade_type='dark'") or die(mysqli_error($link));//свойство заключающее в себе функцию запроса к БД mysqi mysqli_query, которая содержит в качестве аргументов( свойство $link, ключевое слово SELECT выбирающее данные из столбцов таблицы (наимнования указываются после ключевого слова SELECT), ключевое слово FROM, выбирающее таблицу базы данных(наимнование указываются после ключевого слова FROM), ключевое слово WHERE указывающее условие выбора данных из таблицы (условия указываются после ключевого слова WHERE, с помощью операторов сравнения). 
  for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);//цикл содержащий в качеисве аргументов (в круглых скобках) декларацию наименования пустого массива, функцию перевода данных sql в массив данных и присваивание этих данных вышеуказанному массиву.
  foreach ($data as $key => $value) {//специальный цикл для массивов, содержащий в качестве аргумента массив данных полученных из базы данных ($data), разбивающий на пары ключ - значение (as $key => $value), и использующий эти данные для вывода на экран в определенной верстке внутри тела цикла (в фигурных скобках)
print '<div class="col-4">';//оператор вывода на экран
print '<div class="choco_card">';
print '<div class="col-12 imgCard" style="background: url('.$data[$key]["image"].');background-size: cover; background-position:center;"></div>';
print '<h3>'.$data[$key]["name"].'</h3>';
print '<p>'.$data[$key]["description"].'</p>';
print '<a href="#">Заказать</a>';
print '</div>';
print '</div>';
  }
  }

  elseif ($_POST['milk'] == "../css/milk.css" ){//второе условие логической конструкции if else, указанной выше (смотри комментарий на строке 10)
  $result=mysqli_query($link, "SELECT image, name, description FROM cards WHERE chocolade_type='milk'") or die(mysqli_error($link));
  for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
  foreach ($data as $key => $value) {
print '<div class="col-4">';
print '<div class="choco_card">';
print '<div class="col-12 imgCard" style="background: url('.$data[$key]["image"].');background-size: cover; background-position:center;"></div>';
print '<h3>'.$data[$key]["name"].'</h3>';
print '<p>'.$data[$key]["description"].'</p>';
print '<a href="#">Заказать</a>';
print '</div>';
print '</div>';
  }
  }

  else{//код выполняющийся в случае невыполнения условий логической конструкции if else, указанной выше (смотри комментарий на строках 10, 25)
  $result=mysqli_query($link, "SELECT image, name, description FROM cards WHERE chocolade_type='white'") or die(mysqli_error($link));
  for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
  foreach ($data as $key => $value) {
print '<div class="col-4">';
print '<div class="choco_card">';
print '<div class="col-12 imgCard" style="background: url('.$data[$key]["image"].');background-size: cover; background-position:center;"></div>';
print '<h3>'.$data[$key]["name"].'</h3>';
print '<p>'.$data[$key]["description"].'</p>';
print '<a href="#">Заказать</a>';
print '</div>';
print '</div>';
  }
  }
}
}
 ?>
