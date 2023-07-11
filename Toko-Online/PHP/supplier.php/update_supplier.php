<?php include 'header.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update supplier</title>
</head>
<body>
  <div id="main-content">
  <h2>UPDATE DATA</h2>
  <?php
  include 'koneksi.php';

  $supplierID = $_GET['supplierID'];
  $sql = "SELECT * FROM supplier WHERE supplierID = {$supplierID}";
  $result = mysqli_query($conn, $sql) or die("Gagal.");

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
  ?>
      <form class="post-form" action="function_update.php" method="post">
        <input type="hidden" name="supplierID" value="<?php echo $row['supplierID']; ?>" class="form-control" />

        <div class="m-3">
          <label for="suppliername" class="form-label">NAMA SUPPLIER</label>
          <input type="text" class="form-control" name="suppliername" value="<?php echo $row['suppliername']; ?>">
        </div>
        <div class="m-3">
          <label for="nohp" class="form-label">NO HP</label>
          <input type="text" class="form-control" name="nohp" value="<?php echo $row['nohp']; ?>">
        </div>
        <div class="m-3">
          <label for="alamat" class="form-label">ALAMAT</label>
          <input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat']; ?>">
        </div>
        <div class="m-3">
          <label for="kota" class="form-label">KOTA</label>
          <input type="text" class="form-control" name="kota" value="<?php echo $row['kota']; ?>">
        </div>
        <div class="m-3">
          <label for="kodepost" class="form-label">KODE POST</label>
          <input type="text" class="form-control" name="kodepost" value="<?php echo $row['kodepost']; ?>">
        </div>
        <input class="submit" type="submit" value="Update" />
      </form>
  <?php
    }
  }
  ?>
</div>
</body>
</html>