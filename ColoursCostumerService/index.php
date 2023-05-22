<?php
include "connection.php";
include "product.php";
include "employee.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["name"]) && isset($_POST["emailadd"]) && isset($_POST["number"])) {
        $name = $_POST["name"];
        $emailadd = $_POST["emailadd"];
        $number = $_POST["number"];

      

        $query = "INSERT INTO user VALUES (NULL, '$name', '$emailadd', '$number')";
  
        mysqli_query($connect, $query);
  
        echo "<script>alert('Successfully');</script>";}
    
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
                <label for=""> Name </label>
                <input type="text" name="name" required value="">
                <label for=""> Email Address </label>
                <input type="text" name="emailadd" required value="">
                <label for=""> Contact Number </label>
                <input type="text" name="number" required value="">
            <br>
        </div>
        
        <button type="submit" name="submit"> Submit </button>

</body>
</html>


