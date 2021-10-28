<?php
    include '../component/sidebar.php'
?>

<?php
    include('../db.php');
    $id = $_GET['id_buku'];
    $queryShow = mysqli_query($con, "SELECT * FROM buku WHERE id_buku='$id'");
    $data = mysqli_fetch_assoc($queryShow);
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4><?php echo $data['judul'] ?></h4>
    <hr>
    <?php
    echo'
        <div class="container" style="display: flex; margin: 0 auto;">
            <div class="card" style="width: 50%; height: 200px; position: relative;">
                <img class="card-imgtop" style="height: 250px;" src="'.$data['imgURL'].'"
                    alt="Card image cap">
                <div class="card-body">
                    <a href="./pinjamAddPage.php?id_buku='.$data['id_buku'].'" class="btn btn-primary" style="display: flex; justify-content: center; align-items: center;">Pinjam Buku</a>
                </div>
            </div>
            <div class="description" style="width 40%">
                <h5 class="card-title" style="margin-left: 10px; height: 50px">Judul: '.$data['judul'].'</h5>
                <h5 class="card-title" style="margin-left: 10px; height: 50px">Penulis: '.$data['penulis'].'</h5>
                <h5 class="card-title" style="margin-left: 10px; height: 50px">Tanggal Terbit: '.$data['tahun_terbit'].'</h5>
                <h5 class="card-title" style="margin-left: 10px; height: 50px"> Sinopsis:</h5>
                <h5 class="card-title" style="margin-left: 10px; height: 50px"> '.$data['sinopsis'].'</h5>
            </div>
        </div>';
    ?>
</div>

</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
