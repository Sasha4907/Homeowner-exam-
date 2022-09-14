<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Домовласник</title>
<link rel="stylesheet" type="text/css" href="style_index.css">
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<?php
    include 'connect.php';
?>
</head>
 <body>
     <div class="photo_title"></div>
     <div class="menu">
     <input type="button" class="button_in_menu" value="Новий мешканець" onClick='location.href="index2.html"'></input>
      <input type="button" class="button_in_menu" value="Пошук" onClick='location.href="index2.html"'></input>
      <input type="button" class="button_in_menu" value="Оренда" onClick='location.href="button3.php"'></input>
      <input type="button" class="button_in_menu" value="Статистика" onClick='location.href="index2.html"'></input>
    </div>
    <div>
       <div class="information">
          <h3>Здача в оренду</h3>
          <div class="leftText">
            <form action="rent.php" method="post" name="rent">
                <label>Номер вашої квартири</label><br>
                <input type="number" name="number" placeholder="Введіть номер" minlength="10" maxlength="20" required ><br>
                <label>Новий мешканець</label><br>
                <input type="text" name="new_inhabitant" placeholder="Введіть прізвище" required >
                <input class="button" type="submit" name="rent" value='Здати'>
            </form>
          </div>
       </div>
    </div>

 </body>
</html>