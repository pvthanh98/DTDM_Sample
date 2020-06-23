<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add user</title>
</head>
<body>
    <div class="container">
    <?php
        
        include "menu.php";
        if(isset($_POST["submit"])){
        include "connect.php";
        $sql_query ="INSERT INTO nguoidung_b1607026 VALUES(".$_POST["id"].",'".$_POST["name"]."','".$_POST["email"]."')";
            if(!pg_query($conn, $sql_query)){
                echo pg_last_error($conn);
            } else echo "inserted ". $_POST["name"];
        } else { ?>
        <h3>Thêm người dùng</h3>
        <form method ="POST"> 
            <br>
            <div><input type="text" name="id" placeholder="ID"></div>
            <br>
            <div> <input type="text" name="name" placeholder="Name"></div>
            <br>
            <div><input type="text" name="email" placeholder="Email"></div>
            <br>
            <div><input type="submit" name="submit"></div>
        </div>
        <?php } ?>
    </div>
</body>
</html>