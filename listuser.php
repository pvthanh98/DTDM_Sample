<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>User List</title>
</head>
<body>
    <div class="container">
        <?php 
        include "menu.php";
        include "connect.php";

        $sql ="SELECT *FROM nguoidung_b1607026";

        $result = pg_query($conn, $sql);
        if(!$result) echo pg_last_error($conn);
      ?>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
          </tr>
        </thead>
        <tbody>
        <?php while($row = pg_fetch_assoc($result)){ ?>
        <tr> 
          <th scope="row"><?php echo $row["nd_id"]; ?></th>
          <td><?php echo $row["nd_name"]; ?></td>
              <td><?php echo $row["nd_email"]; ?></td>
        </tr>
        <?php } ?>
    
    </div>
</body>
</html>