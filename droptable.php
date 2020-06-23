<?php 
    include "menu.php";
    include "connect.php";
    $sql = "DROP TABLE IF EXISTS nguoidung;";
    $res = pg_query($db, $sql);
    if(!$res) echo pg_last_error($db);
    else echo 'DROP TABLE nguoidung';
?>