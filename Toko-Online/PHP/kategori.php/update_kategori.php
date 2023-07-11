<?php include 'header.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
</head>
<body>
  <div id="main-content">
  <h2>UPDATE DATA</h2>
  <?php
  include 'database1.php';

  $kategoriID = $_GET['kategoriID'];
  $sql = "SELECT * FROM kategori WHERE kategoriID = {$kategoriID}";
  $result = mysqli_query($conn, $sql) or die("Gagal.");

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
  ?>
      <form class="post-form" action="function_update.php" method="post">
        <input type="hidden" name="kategoriID" value="<?php echo $row['kategoriID']; ?>" class="form-control" />

        <div class="m-3">
          <label for="kategoriname" class="form-label"> Name kategori</label>
          <input type="text" class="form-control" name="kategoriname" value="<?php echo $row['kategoriname']; ?>">
        </div>
        <div class="m-3">
          <label for="email" class="form-label">DESCRIBE</label>
          <input type="text" class="form-control" name="deskripsi" value="<?php echo $row['deskripsi']; ?>">
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