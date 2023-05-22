<?php
    include "connection.php";

    $sql = "SELECT * FROM inventory";
$result = $connect->query($sql);

// Fetch data and store it in an array
$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf=8">
        <link rel="stylesheet" href="styles.css">
        <title> Inventory </title>
</head>

<body>


    <table>
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Shipping Date</th>
        </tr>
        <?php foreach ($data as $row): ?>
            <tr>
            <td><?php echo $row['id']; ?></td> 
              <td><?php echo $row['product']; ?></td> 
                <td><?php echo $row['Shipdate']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
      </body>
</html>
