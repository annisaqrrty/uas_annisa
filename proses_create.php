<?php
@include 'config.php';

if (isset($_POST['input'])) {
    $id = $_POST['id'];
    $nomor = $_POST['nomor'];
    $code = $_POST['code'];
    $title = $_POST['title'];
    $autor = $_POST['autor'];
    $genre = $_POST['genre'];
    $total = $_POST['total'];

  $query = "INSERT INTO library_uas (id, nomor, code, title, autor, genre, total) VALUES  (?, ?, ?, ?, ?, ?, ?)";
  $statement = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($statement, "iiisssi", $id, $nomor, $code, $title, $autor, $genre, $total);

  $result = mysqli_stmt_execute($statement);
  
  if (!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
  }

  mysqli_stmt_close($statement);
}
header("location:hal_read.php")

?>