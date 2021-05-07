<?php
class Pages{//класс страницы
  function NavBarMethod(){//метод вызова страницы
    $host='localhost';//свойство заключающее в себе наименование сервера БД mysql
    $user='Container+';//свойство заключающее в себе логин БД mysql
    $password='Freightliner5';//свойство заключающее в себе пароль БД mysql
    $db_name='chocomaster';//свойство заключающее в себе наименование БД mysql
    $link=mysqli_connect($host,$user,$password,$db_name);//свойство заключающее в себе функцию подключения к БД mysql
    if ($_POST['dark'] == "../css/dark.css" ){//логическая конструкция if else
  $result=mysqli_query($link, "SELECT id, page_title FROM pages WHERE chocolate_type='dark'") or die(mysqli_error($link));//свойство заключающее в себе функцию запроса к БД mysqi mysqli_query, которая содержит в качестве аргументов( свойство $link, ключевое слово SELECT выбирающее данные из столбцов таблицы (наимнования указываются после ключевого слова SELECT), ключевое слово FROM, выбирающее таблицу базы данных(наимнование указываются после ключевого слова FROM), ключевое слово WHERE указывающее условие выбора данных из таблицы (условия указываются после ключевого слова WHERE, с помощью операторов сравнения).
  for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);//цикл содержащий в качеисве аргументов (в круглых скобках) декларацию наименования пустого массива, функцию перевода данных sql в массив данных и присваивание этих данных вышеуказанному массиву.
  print "<ul>";//оператор вывода на экран
  foreach ($data as $key => $value) {//специальный цикл для массивов, содержащий в качестве аргумента массив данных полученных из базы данных ($data), разбивающий на пары ключ - значение (as $key => $value), и использующий эти данные для вывода на экран в определенной верстке внутри тела цикла (в фигурных скобках)
    print "<li><a href='#id".$value['id']."'>" . $value['page_title'] . "</a></li>";
  }
  print "</ul>";
    }

    elseif ($_POST['milk'] == "../css/milk.css" ){//второе условие логической конструкции if else, указанной выше (смотри комментарий на строке 9)
  $result=mysqli_query($link, "SELECT id, page_title FROM pages WHERE chocolate_type='milk'") or die(mysqli_error($link));
  for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
  print "<ul>";
  foreach ($data as $key => $value) {
  print "<li><a href='#id".$value['id']."'>" . $value['page_title'] . "</a></li>";
  }
  print "</ul>";
    }
     else {
   $result=mysqli_query($link, "SELECT id, page_title FROM pages WHERE chocolate_type='white'") or die(mysqli_error($link));
   for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
   print "<ul>";
   foreach ($data as $key => $value) {
   print "<li><a href='#id".$value['id']."'>" . $value['page_title'] . "</a></li>";
   }
   print "</ul>";
     }
  }

  function catalogMethod(){//метод вызова названя каталога
    $host='localhost';
    $user='Container+';
    $password='Freightliner5';
    $db_name='chocomaster';
    $link=mysqli_connect($host,$user,$password,$db_name);
  if ($_POST['dark'] == "../css/dark.css" ){
  $result=mysqli_query($link, "SELECT id, page_content FROM pages WHERE chocolate_type='dark' AND page_title='Каталог'") or die(mysqli_error($link));
  for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
  print "<a name='id".$data[0]['id']."'><h2>" . $data[0]['page_content'] . "</h2></a>";
    }
    elseif ($_POST['milk'] == "../css/milk.css" ){
  $result=mysqli_query($link, "SELECT id, page_content FROM pages WHERE chocolate_type='milk'AND page_title='Каталог'") or die(mysqli_error($link));
  for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
  print "<a name='id".$data[0]['id']."'><h2>" . $data[0]['page_content'] . "</h2></a>";}
     else {
   $result=mysqli_query($link, "SELECT id, page_content FROM pages WHERE chocolate_type='white'AND page_title='Каталог'") or die(mysqli_error($link));
   for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
   print "<a name='id".$data[0]['id']."'><h2>" . $data[0]['page_content'] . "</h2></a>";
     }
  }

  function videoTitleMethod(){//метод вызова названия раздела с видео
    $host='localhost';
    $user='Container+';
    $password='Freightliner5';
    $db_name='chocomaster';
    $link=mysqli_connect($host,$user,$password,$db_name);
  if ($_POST['dark'] == "../css/dark.css" ){
  $result=mysqli_query($link, "SELECT id, page_content FROM pages WHERE chocolate_type='dark' AND page_title='Видеоуроки'") or die(mysqli_error($link));
  for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
  print "<a name='id".$data[0]['id']."'><h2>" . $data[0]['page_content'] . "</h2></a>";
    }
    elseif ($_POST['milk'] == "../css/milk.css" ){
  $result=mysqli_query($link, "SELECT id, page_content FROM pages WHERE chocolate_type='milk'AND page_title='Видеоуроки'") or die(mysqli_error($link));
  for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
  print "<a name='id".$data[0]['id']."'><h2>" . $data[0]['page_content'] . "</h2></a>";}
     else {
   $result=mysqli_query($link, "SELECT id, page_content FROM pages WHERE chocolate_type='white'AND page_title='Видеоуроки'") or die(mysqli_error($link));
   for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
   print "<a name='id".$data[0]['id']."'><h2>" . $data[0]['page_content'] . "</h2></a>";
     }
  }
}
 ?>
