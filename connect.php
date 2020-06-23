<?php
    $conn = pg_connect(getenv("DATABASE_URL"));
    if(!$conn) pg_last_error($conn);
?>