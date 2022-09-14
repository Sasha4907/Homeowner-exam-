<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Авторизація</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<?php
    include 'connect.php';
?>
</head>
 <body>
    <div class="form_auth_block">
    <div class="form_auth_block_content">
        <p class="form_auth_block_head_text">Вхід до сайту</p>
        <form class="form_auth_style" action="acess.php" method="post" name="access">
        <label>Логін</label>
        <input type="login" name="login" placeholder="Введіть прізвище" required ><br>
        <label>Пароль</label>
        <input type="password" id="password" minlength="5" maxlength="20" name="password" placeholder="Введіть пароль" required >
        <button class="form_auth_button" type="submit" name="access" onclick="setCookie()">Вхід</button>
        </form>
    </div>
    </div>
 </body>
</html>