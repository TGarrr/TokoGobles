<?php include 'header.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Product</title>
</head>
<body>
  <div id="main-content">
  <h2>UPDATE DATA</h2>
  <?php
  include 'koneksi.php';

  $productID = $_GET['productID'];
  $sql = "SELECT * FROM product WHERE productID = {$productID}";
  $result = mysqli_query($conn, $sql) or die("Gagal.");

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
  ?>
      <form class="post-form" action="function_update.php" method="post">
        <input type="hidden" name="productID" value="<?php echo $row['productID']; ?>" class="form-control" />

        <div class="m-3">
          <label for="productname" class="form-label">NAMA PRODUCT</label>
          <input type="text" class="form-control" name="productname" value="<?php echo $row['productname']; ?>">
        </div>
        <div class="m-3">
          <label for="sku" class="form-label">SKU</label>
          <input type="text" class="form-control" name="sku" value="<?php echo $row['sku']; ?>">
        </div>
        <div class="m-3">
          <label for="price" class="form-label">PRICE</label>
          <input type="text" class="form-control" name="price" value="<?php echo $row['price']; ?>">
        </div>
        <div class="m-3">
          <label for="stok" class="form-label">STOK</label>
          <input type="text" class="form-control" name="stok" value="<?php echo $row['stok']; ?>">
        </div>
        <div class="m-3">
          <label for="kategoriID" class="form-label">NAMA KATEGORI</label>
          <input type="text" class="form-control" name="kategoriID" value="<?php echo $row['kategoriID']; ?>">
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