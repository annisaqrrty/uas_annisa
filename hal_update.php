<?php
@include 'config.php';

if (isset($_GET['id'])) {
    $id = ($_GET['id']);
  
    $query = "SELECT * FROM library_uas WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
  
    if (!$result) {
        die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
    }
  
    $data = mysqli_fetch_array($result);
      $id = $data['id'];
      $nomor = $data['nomor'];
      $code = $data['code'];
      $title = $data['title'];
      $autor = $data['autor'];
      $genre = $data['genre'];
      $total = $data['total'];
} else {
  header("location:hal_read.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>LIBRARY - BOOK LIST</title>
  <meta charset="utf-8">
		<link href="css/styles.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet">
    <body>
    <title>LIBRARY</title>    
</head>
<body>
  <div class="container-create">
    <h1>LIBRARY</h1>
    <form action="proses_update.php" method="post" class="form-create">
    <legend>BOOK LIST</legend>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div>
          <label for="nomor">No </label>
          <input type="text" name="nomor" value="<?php echo $nomor; ?>">
        </div>
        <div>
          <label for="code">Code </label>
          <input type="text" name="code" value="<?php echo $code; ?>">
        </div>
        <div>
          <label for="title">Title </label>
          <input type="text" name="title" id="title" value="<?php echo $title; ?>">
        </div>
        <div>
          <label for="autor">Autor </label>
          <input type="text" name="autor" id="autor" value="<?php echo $autor; ?>">
        </div>
        <div>
          <label for="genre">Genre </label>
          <input type="text" name="genre" id="genre" value="<?php echo $genre; ?>">
        </div>
        <div>
          <label for="total">Total </label>
          <input type="text" name="total" id="total" value="<?php echo $total; ?>">
        </div>
      <div class="btn-create">
        <input type="submit" name="edit" value="Update Data">
      </div>
    </form>
  </div>
</body>
</html>