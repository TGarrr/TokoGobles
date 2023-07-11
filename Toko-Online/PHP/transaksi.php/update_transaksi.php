<?php include 'header.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update transaksi</title>
</head>
<body>
  <div id="main-content">
  <h2>UPDATE DATA</h2>
  <?php
  include 'koneksi.php';

  $transaksiID = $_GET['transaksiID'];
  $sql = "SELECT * FROM transaksi WHERE transaksiID = {$transaksiID}";
  $result = mysqli_query($conn, $sql) or die("Gagal.");

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
  ?>
      <form class="post-form" action="function_update.php" method="post">
        <input type="hidden" name="transaksiID" value="<?php echo $row['transaksiID']; ?>" class="form-control" />

        <div class="m-3">
          <label for="customerID" class="form-label">ID CUSTOMER</label>
          <input type="text" class="form-control" name="customerID" value="<?php echo $row['customerID']; ?>">
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