<?php
    include '../component/sidebar.php'
?>

<?php
    include('../db.php');
    $id = $_GET['id_pinjam'];
    $idUser = $_SESSION['id_user'];
    $query = mysqli_query($con, "SELECT p.id_pinjam, p.tgl_pinjam, p.id_User, p.tgl_kembali, b.id_buku, b.judul, b.penulis, b.tahun_terbit FROM pinjam p 
                    INNER JOIN buku b ON p.id_buku = b.id_buku 
                    WHERE p.id_pinjam = '$id' 
                    AND p.id_User = '$idUser'");
    $data = mysqli_fetch_assoc($query);
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4>GANTI TANGGAL PEMINJAMAN</h4>
        <hr>
        <form action="../process/pinjamEditProcess.php?id_pinjam=<?php echo $id ?>" method="post">
            <div class="mb-3">
                <h5>Judul Buku</h5>
                <?php echo $data['judul'] ?>
            </div>
            <div class="mb-3">
                <h5>Penulis</h5>
                <?php echo $data['penulis'] ?>
            </div>
            <div class="mb-3">
                <h5>Tahun Terbit</h5>
                <?php echo $data['tahun_terbit'] ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Pinjam</label>
                <input type="date" class="form-control" name="start_date" value="<?php echo $data['tgl_pinjam'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Kembali</label>
                <input type="date" class="form-control" name="end_date" value="<?php echo $data['tgl_kembali'] ?>" required>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="edit">Edit Tanggal Peminjaman</button>
            </div>
        </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>