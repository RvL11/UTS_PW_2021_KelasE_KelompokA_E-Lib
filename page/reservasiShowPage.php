<?php
    include '../component/sidebar.php'
?>


<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>DAFTAR RESERVASI</h4>
    <hr>
    <a href="./reservasiAddPage.php" style ="float: right; margin-bottom: 10px; background-color: #17337A" class="btn btn-success">Buat Reservasi Baru</a>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Perpustakaan</th>
                <th scope="col">Alamat Perpustakaan</th>
                <th scope="col">Tanggal Reservasi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $user = $_SESSION['id_user'];
                $query = mysqli_query($con, "SELECT p.id_perpustakaan, p.nama_perpustakaan, p.alamat, r.id_reservasi, r.id_user, r.tgl_reservasi FROM perpustakaan p 
                INNER JOIN reservasi r ON p.id_perpustakaan = r.id_perpus WHERE r.id_user = '$user'") or die(mysqli_error($con));
                if (mysqli_num_rows($query) == 0) 
                {
                    echo '<tr> <td colspan="7"> Belum Ada Reservasi </td> </tr>';
                }
                else
                {
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query))
                    {
                        echo '
                            <tr>
                                <th scope="row">'.$no.'</th>
                                <td>'.$data['nama_perpustakaan'].'</td>
                                <td>'.$data['alamat'].'</td>
                                <td>'.$data['tgl_reservasi'].'</td>
                                <td>
                                    <a href="./reservasiEditPage.php?id_reservasi='.$data['id_reservasi'].'" class="btn btn-info btn-sm">Ubah</a>
                                    <a href="../process/reservasiDeleteProcess.php?id_reservasi='.$data['id_reservasi'].'"
                                        onClick="return confirm ( \'Yakin Ingin Membatalkan Reservasi?\')"class="btn btn-primary btn-sm">Batalkan</a>
                                </td>
                            </tr>';
                    $no++;
                    }
                }  
            ?>
        </tbody>
    </table>
</div>
</aside>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
