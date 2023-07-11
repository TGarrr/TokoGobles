<?php
include 'header.php';
?>


<div id="main-content">
    <h2>Data Product</h2>
    <br><button type="button" class="btn btn-warning btn-sm"> <a href="add_product.php">+ Tambah Data product</a></button> <br> <br>
    <?php
    include 'koneksi.php';

    // $sql = "SELECT * FROM product";
    $sql = "SELECT product.productID, product.productname, product.sku, product.price, product.stok, kategori.kategoriname 
    FROM product 
    INNER JOIN	kategori 	
    ON product.kategoriID=kategori.kategoriID                 
    order by stok ASC"; 
    $result = mysqli_query($conn, $sql) or die("Query Bermasalah");

    if (mysqli_num_rows($result) > 0) {
    ?>
        <table id="datatable" class="table table-white table-bordered border-dark" style="text-align: center;">
            <thead>
                <th>ID PRODUCT</th>
                <th>PRODUCT NAME</th>
                <th>SKU</th>
                <th>PRICE</th>
                <th>STOK</th>
                <th>KATEGORI</th>
                <th>OPTIONS</th>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['productID']; ?></td>
                        <td><?php echo $row['productname']; ?></td>
                        <td><?php echo $row['sku']; ?></td>
                        <td><?php echo "Rp ".number_format ($row['price']); ?></td>
                        <td><?php echo $row['stok']; ?></td>
                        <td><?php echo $row['kategoriname']; ?></td>
                        <td>
                            <a href='update_product.php?productID=<?php echo $row['productID']; ?>'><i class="fa fa-user-plus" style="font-size:36px;color:green"></i></a>
                            <a href='delete_product.php?productID=<?php echo $row['productID']; ?>'><i class="fa fa-user-times" style="font-size:36px;color:red"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else {
        echo "<h2>No Record Found</h2>";
    }
    mysqli_close($conn);
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            "paging": false
        });
    });
</script>
</body>

</html>