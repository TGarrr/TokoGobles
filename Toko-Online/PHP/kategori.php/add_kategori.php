<?php include 'header.php'; ?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KATEGORI</title>
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
            <label for="kategoriname">NAME KATEGORI</label>
            <input type="text" name="kategoriname"/>
        </div>
        <div class="form-group">
            <label for="deskripsi">DESCRIBE</label>
            <input type="text" name="deskripsi"/>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</body>
</html>