<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["Pname"]) && isset($_POST["Pprice"])) {

    
        $Pname = $_POST["Pname"];
        $Pprice = $_POST["Pprice"];

    
        $query= " INSERT INTO product VALUES (NULL,'$Pname', '$Pprice')";
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
                <label for=""> Product Name </label>
                <input type="text" name="Pname" required value="">
                <label for=""> Price </label>
                <input type="text" name="Pprice" required value="">
                <button>sad</button>
            <br>          
        </div>
       
</body>
</html>


