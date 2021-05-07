<?php
class Cards{
  function cardsMethod(){
  $host='localhost';//
  $user='Container+';
  $password='Freightliner5';
  $db_name='chocomaster';
  $link=mysqli_connect($host,$user,$password,$db_name);

  if ($_POST['dark'] == "../css/dark.css" ){
  $result=mysqli_query($link, "SELECT image, name, description FROM cards WHERE chocolade_type='dark'") or die(mysqli_error($link));
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

  elseif ($_POST['milk'] == "../css/milk.css" ){
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

  else{
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
