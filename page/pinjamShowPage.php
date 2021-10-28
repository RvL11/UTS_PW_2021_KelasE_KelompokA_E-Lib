<?php
    include '../component/sidebar.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4>DAFTAR PEMINJAMAN</h4>
        <hr>
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $user = $_SESSION['id_user'];
                    $query = mysqli_query($con, "SELECT p.id_pinjam, p.id_User, p.tgl_pinjam, p.tgl_kembali, b.judul FROM pinjam p 
                    INNER JOIN buku b ON p.id_buku = b.id_buku WHERE p.id_user = '$user'") or die(mysqli_error($con));
                    if (mysqli_num_rows($query) == 0) 
                    {
                        echo '<tr> <td colspan="7"> Belum Ada Peminjaman </td> </tr>';
                    }
                    else
                    {
                        $no = 1;
                        while($data = mysqli_fetch_assoc($query))
                        {
                            echo '
                                <tr>
                                    <th scope="row">'.$no.'</th>
                                    <td>'.$data['judul'].'</td>
                                    <td>'.$data['tgl_pinjam'].'</td>
                                    <td>'.$data['tgl_kembali'].'</td>
                                    <td>
                                        <a href="./pinjamEditPage.php?id_pinjam='.$data['id_pinjam'].'" class="btn btn-info btn-sm">Ubah</a>
                                        <a href="../process/pinjamDeleteProcess.php?id_pinjam='.$data['id_pinjam'].'"
                                            onClick="return confirm ( \'Yakin Ingin Mengembalikan Buku?\')"class="btn btn-primary btn-sm">Kembalikan</a>
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