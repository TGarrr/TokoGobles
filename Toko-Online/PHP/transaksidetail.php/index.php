<?php
include 'header.php';
?>

    <div id="main-content">
        <h2>Data Details Transaksi</h2>
        <br><button type="button" class="btn btn-warning btn-sm"> <a href="add_transaksidetail.php">+ Tambah Data Tansaksi Details</a></button> <br> <br>
        <?php
        include 'koneksi.php';

        $sql = "SELECT 
                transaksidetail.transaksidetailID, transaksidetail.transaksiID, product.productname, product.price, transaksidetail.quantity, 
                product.price*transaksidetail.quantity as total
                from transaksidetail
                INNER JOIN product ON transaksidetail.productID = product.productID;";
        $result = mysqli_query($conn, $sql) or die("Query Bermasalah");

        if (mysqli_num_rows($result) > 0) {
        ?>
        <table id="datatable" class="table table-white table-bordered border-dark" style="text-align: center;">
            <thead>
                <th>ID DETAILS TRANSACTION </th>
                <th>ID TRANSACTION</th> 
                <th>NAMA PRODUCT</th>
                <th>HARGA PRODUCT</th>
                <th>ITEM QUANTITY</th>
                <th>TOTAL</th> 
                <th>OPTIONS</th>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['transaksidetailID']; ?></td>
                        <td><?php echo $row['transaksiID']; ?></td>
                        <td><?php echo $row['productname']; ?></td>
                        <td><?php echo "Rp ".number_format ($row['price']); ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo "Rp ".number_format ($row['total']); ?></td>
                        <td>
                            <a href='update_transaksidetail.php?transaksidetailID=<?php echo $row['transaksidetailID']; ?>'><i class="fa fa-user-plus" style="font-size:36px;color:green"></i></a>
                            <a href='delete_transaksidetail.php?transaksidetailID=<?php echo $row['transaksidetailID']; ?>'><i class="fa fa-user-times" style="font-size:36px;color:red"></i></a>
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
    $(document).ready(function () {
      $('#datatable').DataTable({
        "paging": false
         });
    });
    </script>
</body>
</html>
