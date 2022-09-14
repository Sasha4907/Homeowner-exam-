<?php
        require_once("connect.php");
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        function get_rows($query, $connect){
            $result = mysqli_query($connect, $query);
            $rows = mysqli_fetch_all($result,1);
            return  $rows;
        }

        function Room1($connect){
            $query = "SELECT Number, Owner FROM apartments WHERE Rooms=1 AND Owner IS NOT NULL";
            $Room1 = get_rows($query, $connect);
            return $Room1;
        }

        function Room2($connect){
            $query = "SELECT Number, Owner FROM apartments WHERE Rooms=2 AND Owner IS NOT NULL";
            $Room1 = get_rows($query, $connect);
            return $Room1;
        }

        function Room3($connect){
            $query = "SELECT Number, Owner FROM apartments WHERE Rooms=3 AND Owner IS NOT NULL";
            $Room1 = get_rows($query, $connect);
            return $Room1;
        }

        function add_table_room($rows)
        {
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

        function Owner($connect){
            $query = "SELECT Number, Owner, Inhabitant FROM apartments WHERE Status='Власна' AND Owner IS NOT NULL";
            $Owner = get_rows($query, $connect);
            return $Owner;
        }

        function Inhabit($connect){
            $query = "SELECT Number, Owner, Inhabitant FROM apartments WHERE Status='Орендована' AND Owner IS NOT NULL";
            $Inhabit = get_rows($query, $connect);
            return $Inhabit;
        }

        function add_table_status($rows)
        {
            foreach ($rows as $row) {
            echo 
            "
            <tr>
                <th>".$row['Number']."</th>
                <th>".$row['Owner']."</th>
                <th>".$row['Inhabitant']."</th>
            </tr>
            ";
            }
        }
?>
