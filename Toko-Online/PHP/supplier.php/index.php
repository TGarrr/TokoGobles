<?php
include 'header.php';
?>


    <div id="main-content">
        <h2>Data supplier</h2>
        <br><button type="button" class="btn btn-warning btn-sm"> <a href="add_supplier.php">+ Tambah Data supplier</a></button> <br> <br>
        <?php
        include 'koneksi.php';

        $sql = "SELECT * FROM supplier";
        $result = mysqli_query($conn, $sql) or die("Query Bermasalah");

        if (mysqli_num_rows($result) > 0) {
        ?>
        <table id="datatable" class="table table-white table-bordered border-dark" style="text-align: center;">
            <thead>
                <th>ID SUPPLIER</th>
                <th>SUPPLIER NAME</th>
                <th>NO HP</th>
                <th>ALAMAT</th>
                <th>KOTA</th>
                <th>KODE POST</th>
                <th>OPTIONS</th>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['supplierID']; ?></td>
                        <td><?php echo $row['suppliername']; ?></td>
                        <td><?php echo $row['nohp']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td><?php echo $row['kota']; ?></td>
                        <td><?php echo $row['kodepost']; ?></td>
                        <td>
                            <a href='update_supplier.php?supplierID=<?php echo $row['supplierID']; ?>'><i class="fa fa-user-plus" style="font-size:36px;color:green"></i></a>
                            <a href='delete_supplier.php?supplierID=<?php echo $row['supplierID']; ?>'><i class="fa fa-user-times" style="font-size:36px;color:red"></i></a>
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
