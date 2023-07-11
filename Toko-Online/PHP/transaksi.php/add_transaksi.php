<?php include 'header.php'; ?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSACTION</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="function_add.php" method="post">
        <div class="form-group">
            <label>CUSTOMER ID</label>
            <input type="text" name="customerID" required/>
        </div>
        <!-- <div class="form-group">
            <label>EMAIL</label>
            <input type="email" name="email" required/>
        </div> -->
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</body>
</html>