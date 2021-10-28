<?php
    include '../component/sidebar.php'
?>

<?php
    include('../db.php');
    $id = $_GET['id_reservasi'];
    $query = mysqli_query($con, "SELECT p.id_perpustakaan, p.nama_perpustakaan, p.alamat, r.id_reservasi, r.tgl_reservasi FROM perpustakaan p 
                INNER JOIN reservasi r ON p.id_perpustakaan = r.id_perpus WHERE r.id_reservasi='$id'") or die(mysqli_error($con));
    $data = mysqli_fetch_assoc($query);
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4>GANTI TANGGAL RESERVASI</h4>
        <hr>
        <form action="../process/reservasiEditProcess.php?id_reservasi=<?php echo $id ?>" method="post">
            <div class="mb-3">
                <h5>Nama Perpustakaan</h5>
                <?php echo $data['nama_perpustakaan'] ?>
            </div>
            <div class="mb-3">
                <h5>Alamat Perpustakaan</h5>
                <?php echo $data['alamat'] ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Reservasi</label>
                <input type="date" class="form-control" name="res_date" value="<?php echo $data['tgl_reservasi'] ?>" required>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="edit">Edit Tanggal Reservasi</button>
            </div>
        </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>