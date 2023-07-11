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
  include 'database.php';

  $customerID = $_GET['customerID'];
  $sql = "SELECT * FROM customer WHERE customerID = {$customerID}";
  $result = mysqli_query($conn, $sql) or die("Gagal.");

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
  ?>
      <form class="post-form" action="function_update.php" method="post">
        <input type="hidden" name="customerID" value="<?php echo $row['customerID']; ?>" class="form-control" />

        <div class="m-3">
          <label for="username" class="form-label">User Name Customer</label>
          <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>">
        </div>
        <div class="m-3">
          <label for="email" class="form-label">Email Customer</label>
          <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
        </div>
        <div class="m-3">
          <label for="password" class="form-label">Password Customer</label>
          <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>">
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