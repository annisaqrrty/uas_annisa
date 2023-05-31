<?php
  @include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
		<title>LIBRARY - BOOK LIST</title>
		<link href="css/styles.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet">
    </head>
    <body>
    <title>LIBRARY</title>
</head>
<body>
  <h1>BOOK LIST</h1>
  <div class="box">
      <a href="hal_create.php">Create Data</a>
      <a href="logout.php">Logout</a>
  </div>
  <div class="container-read">
  <table>
    <tr>
      <th width="20px">No</th>
      <th width="40px">Code</th>
      <th width="300px">Title</th>
      <th width="250px">Autor</th>
      <th width="150px">Genre</th>
      <th width="40px">Total</th>
      <th width="150px">Pilihan</th>
    </tr>

    <?php
      $query = "SELECT * FROM library_uas ORDER BY id ASC";
      $result = mysqli_query($conn, $query);

      if (!$result) {
        die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
      }

      while ($data = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo "<td>$data[nomor]</td>";
        echo "<td>$data[code]</td>";
        echo "<td>$data[title]</td>";
        echo "<td>$data[autor]</td>";
        echo "<td>$data[genre]</td>";
        echo "<td>$data[total]</td>";
        echo '<td>
                <a class ="btn-edit" href="hal_update.php?id='.$data['id'].'">Edit</a>
                <a class ="btn-del" href="hal_delete.php?id='.$data['id'].'" onclick="return confirm(\'Are you sure you want to delete this data?\')">Delete</a>
              </td>';
        echo '</tr>';
      }
    ?>
  </table>
  </div>
</body>
</html>