<?php
    include '../component/sidebar.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4>BUAT RESERVASI</h4>
        <hr>
        <form action="../process/reservasiAddProcess.php" method="post">
            <?php  if (isset($_SESSION['id_user'])) : ?> 
            <input type="hidden" value=" <?php echo $_SESSION['id_user']; ?> " name="user">
            <?php endif ?>
            <div class="mb-3">
                <h5>Nama Perpustakaan</h5>
                <select class="form-select" aria-label="Default select example" name="perpus" id="perpus">
                    <option value="null">Pilih di sini</option>
                    <option value="1">Perpustakaan Mondstadt</option>
                    <option value="2">Perpustakaan Liyue</option>
                    <option value="3">Perpustakaan Inazuma</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="res_date" class="form-label">Tanggal Reservasi</label>
                <input type="date" class="form-control" name="res_date" id="res_date" required>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="reserve">Buat Reservasi</button>
            </div>
        </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>