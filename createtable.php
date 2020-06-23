<?php 
    include "menu.php";
    include "connect.php";
    $sqlCommand = "CREATE TABLE nguoidung_b1607026(
        nd_id int primary key,
        nd_name varchar(50) not null,
        nd_email varchar(50) not null
    )";

    if(!pg_query($conn, $sqlCommand)){
        echo pg_last_error($conn);
    } else {
        echo "Create table nguoidung_b1607026 successfuly";
    }
?>