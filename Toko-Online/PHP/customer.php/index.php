<?php
include 'header.php';
?>
<div id="main-content">
    <h2>Data Customer</h2>
    <br><button type="button" class="btn btn-warning btn-sm"> <a href="add_customer.php">+ Tambah Data Customer</a></button> <br> <br>
    <?php
    include 'database.php';

    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn, $sql) or die("Query Bermasalah");

    if (mysqli_num_rows($result) > 0) {
    ?>
        <table id="datatable" class="table table-white table-bordered border-dark" style="text-align: center;">
            <thead>
                <th>ID Customer</th>
                <th>Nama Customer</th>
                <th>Email</th>
                <th>Password</th>
                <th>Options</th>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['customerID']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td>
                            <a href='update_customer.php?customerID=<?php echo $row['customerID']; ?>'><i class="fa fa-user-plus" style="font-size:36px;color:green"></i></a>
                            <a href='delete_customer.php?customerID=<?php echo $row['customerID']; ?>'><i class="fa fa-user-times" style="font-size:36px;color:red"></i></a>
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