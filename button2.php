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
     <input type="button" class="button_in_menu" value="Новий мешканець" onClick='location.href="button1.php"'></input>
      <input type="button" class="button_in_menu" value="Пошук" onClick='location.href="button2.php"'></input>
      <input type="button" class="button_in_menu" value="Оренда" onClick='location.href="index1.html"'></input>
      <input type="button" class="button_in_menu" value="Статистика" onClick='location.href="button4.php"'></input>
    </div>
    <div>
       <div class="information">
          <h3>Знайти власника</h3>
          <div class="leftPhoto"><img src="apartment.png" height="200px"></div>
          <div class="rightText">
            <form action="#" method="post" name="find">
                <label>Номер квартири</label><br>
                <input type="number" name="number" placeholder="Введіть номер квартири" required >
                <input class="button" type="submit" name="find" value='Знайти'>
            
            <table width="100%">
                        <tr>
                            <th>Номер квартири</th>
                            <th>Власник</th>
                        </tr>
                        <?php
                            if (isset($_POST['find'])) 
                            {
                                $Number = $_POST['number'];
                                $query = "SELECT Number, Owner FROM apartments WHERE Number='$Number'";
                                $result = mysqli_query($connect, $query);
                                $rows = mysqli_fetch_all($result,1);
                                foreach ($rows as $row) {
                                    echo 
                                    "
                                    <tr>
                                        <th>".$row['Number']."</th>
                                        <th>".$row['Owner']."</th>
                                    </tr>
                                    ";
                                    }
                            }
                        ?>
            </table>
            </form>
          </div>
       </div>
    </div>

 </body>
</html>