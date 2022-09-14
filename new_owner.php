<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Домовласник</title>
<link rel="stylesheet" type="text/css" href="style_index.css">
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
  $( function() {
    $( "." ).selectmenu();
  } );
  </script>
<?php
    include 'connect.php';
?>
</head>
 <body>
     <div class="photo_title"></div>
     <div class="menu">
     <input type="button" class="button_in_menu" value="Новий мешканець" onClick='location.href="index2.html"'></input>
      <input type="button" class="button_in_menu" value="Пошук" onClick='location.href="index2.html"'></input>
      <input type="button" class="button_in_menu" value="Оренда" onClick='location.href="rent.php"'></input>
      <input type="button" class="button_in_menu" value="Статистика" onClick='location.href="index2.html"'></input>
    </div>
    <div>
       <div class="information">
          <h3>Новий мешканець</h3>
          <div class="leftPhoto"><img src="avatar.png" height="400px"></div>
          <div class="rightText">
            <form action="add_new.php" method="post" name="rent">
                <label>Логін</label><br>
                <input type="text" name="text" placeholder="Введіть прізвище" required ><br>
                <label>Пароль</label><br>
                <input type="text" name="password" placeholder="Введіть пароль" minlength="5" maxlength="20" required ><br>
                <label>Вибрати номер квартири:</label>
                <?php
                    $sql = "SELECT Number from authorization WHERE Login IS NULL";
                    $result = mysqli_query($connect, $sql);                    
                    echo "<select>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value='" . $row['Number'] ."'>" . $row['Number'] ."</option>";
                    }
                    echo "</select>";
                ?>
                <label>Новий мешканець</label><br>
                <input type="text" name="new_inhabitant" placeholder="Введіть прізвище" required >
                <input class="button" type="submit" name="add_new" value='Додати нового мешканця'>
            </form>
          </div>
       </div>
    </div>

 </body>
</html>