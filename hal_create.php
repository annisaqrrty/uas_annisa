<!DOCTYPE html>
<html lang="en">
<head>
<head>
<meta charset="utf-8">
		<title>LIBRARY - BOOK LIST</title>
		<link href="css/styles.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet">
    </head>
    <body>
  <title>Input</title>
</head>
<body>
  <div class="container-create">
   <h1>LIBRARY</h1>
    <form action="proses_create.php" method="post" class="form-create">
      
        <legend>Book List</legend>
        <div>
          <label for="nomor">No </label>
          <input type="text" name="nomor" id="nomor">
        </div>
        <div>
          <label for="code">Code </label>
          <input type="text" name="code" id="code">
        </div>
        <div>
          <label for="title">Title </label>
          <input type="text" name="title" id="title">
        </div>
        <div>
          <label for="autor">Autor </label>
          <input type="text" name="autor" id="autor">
        </div>
        <div>
          <label for="genre">Genre </label>
          <input type="text" name="genre" id="genre">
        </div>
        <div>
          <label for="total">Total </label>
          <input type="text" name="total" id="total">
        </div>
      
        <div class="btn-create">
          <input type="submit" name="input" value="SUBMIT">
        </div>
    </form>
  </div>
</body>
</html>