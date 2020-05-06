<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="proses.php" method="post">
<div class="container">
<div class="form-group">
    <label for="formGroupExampleInput">Nama Lengkap:</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">NIM:</label>
    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan NIM">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Tanggal Lahir:</label>
    <input type="date" class="form-control" id="tl" name="tl" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Tempat Lahir:</label>
    <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Masukan Tempat Lahir">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Umur:</label>
    <input type="text" class="form-control" id="umur" name="umur" placeholder="Masukan Umur">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Hobby:</label>
    <input type="text" class="form-control" id="hobby" name="hobby" placeholder="Masukan Hobby">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Keterangan</label>
    <textarea class="form-control" id="keterangan" rows="3" name="keterangan"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</body>
</html>