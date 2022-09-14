<?php
    require_once("connect.php");
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){

    $login = $_POST['login'];
    $password = $_POST['password'];
    $name="SELECT Number FROM authorization WHERE Password ='$password'";
    global $name;

    $sql = "SELECT * FROM authorization WHERE Password ='$password'";
    $result = mysqli_query($connect, $sql);
    $count = mysqli_num_rows($result);

    if (!$count) {
        echo 'Логін чи пароль неправильний!'; 
    } else {

        $query = "SELECT * FROM authorization WHERE Login ='".$login."' AND Password = '".$password."'";
        $result = mysqli_query($connect, $query);
        $count = mysqli_num_rows($result);

        if ($count==1) {

            $_SESSION['login_user']=$login;
            while ($row = mysqli_fetch_array($result))
            {
                if ($row['Level'] == 2) 
                {
                    header("location:index2.html");
                } else {
                    header("location:index1.html");
                }
            }
            }
        }   
    }  

    if ( isset($_REQUEST['rememberMe'] ) ) {
        setcookie('login', $login, time() + 60*60*24*30*60); 
        setcookie('password', $password, time() + 60*60*24*30*60);
        $login_cookie = $_COOKIE['login']; 
        $password_cookie = $_COOKIE['password']; 
    }
?>
