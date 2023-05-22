<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["Ename"]) && isset($_POST["Etimein"]) && isset($_POST["Etimeout"])) {

    
        $Ename = $_POST["Ename"];
        $Etimein = $_POST["Etimein"];
        $Etimeout = $_POST["Etimeout"];

    
        $query= " INSERT INTO emoloyee VALUES (NULL,'$Ename', '$Etimein', '$Etimeout')";
        mysqli_query($connect, $query,);
    }
}
 
?>

<!DOCTYPE html>
<html lang ="eng" dir="ltr">
      <head>
        <meta charset="utf=8">
        <link rel="stylesheet" href="styles.css">
        <title> Colours Print and Trading </title>
    </head>
    
    <body>

        <div>
            <form class="" action = "" method="post" autocomplete="off">
                <label for=""> Employee Name </label>
                <input type="text" name="Ename" required value="">
                <label for=""> Time In </label>
                <input type="text" name="Etimein" required value="">
                <label for=""> Time Out </label>
                <input type="text" name="Etimeout" required value="">
                <button>sad</button>
            <br>          
        </div>
       
</body>
</html>


