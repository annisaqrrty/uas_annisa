<?php
@include 'config.php';

if (isset($_GET['id'])) {

  $id = $_GET['id'];

  $query = "DELETE FROM library_uas where id='$id'";

  $result = mysqli_query($conn, $query);

    if (!$result) {
      die ("Query gagal dijalankan: ". mysqli_errno($conn)." - ". mysqli_error($conn));
    }
}
header("location:hal_read.php")

?>
