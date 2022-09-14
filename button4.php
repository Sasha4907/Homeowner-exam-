<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Домовласник</title>
<link rel="stylesheet" type="text/css" href="style_index.css">
<script src="script.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>

<?php
    include 'connect.php';
    include 'numRooms.php';
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
    <div class="information">
    <h3>Статистика  зайнятих квартир</h3>
            <div id="accordion-html5" class="accordion" style="font-family:monospace;">
            <details>
            <summary><h3>За кількітю кімнат</h3></summary>
            <h4><u>Однокімнатні</u></h4>
                    <table width="50%">
                        <tr>
                            <th>Номер квартири</th>
                            <th>Власник</th>
                        </tr>
                        <?php
                            $Room1 = Room1($connect);
                            add_table_room($Room1);
                        ?>
                    </table><br>
                    <h4><u>Двокімнатні</u></h4>
                    <table width="50%">
                        <tr>
                            <th>Номер квартири</th>
                            <th>Власник</th>
                        </tr>
                        <?php
                            $Room1 = Room2($connect);
                            add_table_room($Room1);
                        ?>
                    </table><br>
                    <h4><u>Трьохкімнатні</u></h4>
                    <table width="50%">
                        <tr>
                            <th>Номер квартири</th>
                            <th>Власник</th>
                        </tr>
                        <?php
                            $Room1 = Room3($connect);
                            add_table_room($Room1);
                        ?>
                    </table>
            </details> 
            <details>
            <summary><h3>За статусом</h3></summary>
            <h4><u>Власні</u></h4>
                    <table width="50%">
                        <tr>
                            <th>Номер квартири</th>
                            <th>Власник</th>
                            <th>Мешканець</th>
                        </tr>
                        <?php
                            $Owner = Owner($connect);
                            add_table_status($Owner);
                        ?>
                    </table><br>
                    <h4><u>Орендовані</u></h4>
                    <table width="50%">
                        <tr>
                            <th>Номер квартири</th>
                            <th>Власник</th>
                            <th>Мешканець</th>
                        </tr>
                        <?php
                            $Inhabit = Inhabit($connect);
                            add_table_status($Inhabit);
                        ?>
                    </table><br>
            </details>
            </div>
    </div>

 </body>
</html>