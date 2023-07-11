<?php
include 'header.php';
?>
<div id="main-content">
    <h2>Data Kategori</h2>
    <br><button type="button" class="btn btn-warning btn-sm"> <a href="add_kategori.php">+ Tambah Data Kategori</a></button> <br> <br>
    <?php
    include 'database1.php';

    $sql = "SELECT * FROM kategori";
    $result = mysqli_query($conn, $sql) or die("Query Bermasalah");

    if (mysqli_num_rows($result) > 0) {
    ?>
        <table id="datatable" class="table table-white table-bordered border-dark" style="text-align: center;">
            <thead>
                <th>ID kategori</th>
                <th>Nama kategori</th>
                <th>Describe</th>
                <th>Options</th>

            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['kategoriID']; ?></td>
                        <td><?php echo $row['kategoriname']; ?></td>
                        <td><?php echo $row['deskripsi']; ?></td>
                        <td>
                            <a href='update_kategori.php?kategoriID=<?php echo $row['kategoriID']; ?>'><i class="fa fa-user-plus" style="font-size:36px;color:green"></i></a>
                            <a href='delete_kategori.php?kategoriID=<?php echo $row['kategoriID']; ?>'><i class="fa fa-user-times" style="font-size:36px;color:red"></i></a>
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