<?php include 'header.php'; ?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supplier</title>
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
            <label>supplier Name</label>
            <input type="text" name="suppliername" required/>
        </div>
        <div class="form-group">
            <label>No HP</label>
            <input type="text" name="nohp" required/>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" required/>
        </div>
        <div class="form-group">
            <label>Kota</label>
            <input type="text" name="kota" required/>
        </div>
        <div class="form-group">
            <label>Kode Post</label>
            <input type="text" name="kodepost" required/>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</body>
</html>