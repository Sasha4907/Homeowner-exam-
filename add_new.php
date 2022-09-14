<?php
        include 'button1.php';
        require_once("connect.php");

        if (isset($_POST['add_new'])) 
        {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $number = $_POST['apartment'];
            $new_inhabitant = $_POST['new_inhabitant'];  
            $query1 = "UPDATE authorization SET Login = '$login', Password = '$password' WHERE Number='$number'";
            $query2 = "UPDATE apartments SET Status = 'Власна', Owner = '$login', Inhabitant = '$new_inhabitant' WHERE Number='$number'";
            mysqli_query($connect, $query1);
            mysqli_query($connect, $query2);
            mysqli_close($connect);
        }
?>