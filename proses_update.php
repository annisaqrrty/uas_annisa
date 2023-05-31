<?php
@include 'config.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nomor = $_POST['nomor'];
    $code = $_POST['code'];
    $title = $_POST['title'];
    $autor = $_POST['autor'];
    $genre = $_POST['genre'];
    $total = $_POST['total'];
  
    $query = "UPDATE library_uas SET id = '$id', nomor = '$nomor' , code = '$code' , title = '$title' , autor = '$autor' , genre = '$genre' , total = '$total' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
      die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
    }
}
header("location:hal_read.php");


?>