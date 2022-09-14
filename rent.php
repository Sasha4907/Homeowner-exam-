<?php
        include 'button3.php';
        require_once("connect.php");

        if (isset($_POST['rent'])) 
        {
            
            $Number = $_POST['number'];
            $New_inhabitant = $_POST['new_inhabitant'];  
            $query1 = "UPDATE apartments SET Status = 'Орендована' WHERE Number='$Number'";
            $query2 = "UPDATE apartments SET Inhabitant = '$New_inhabitant' WHERE Number='$Number'";
            mysqli_query($connect, $query1);
            mysqli_query($connect, $query2);
            mysqli_close($connect);
        }
?>