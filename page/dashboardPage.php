<?php
    include '../component/sidebar.php'
?>
    <div class="container p-3 m-4 h-100"
        style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4>E-Lib Books List</h4>
        <hr>
        <?php
            $queryBuku = mysqli_query($con, "SELECT * FROM buku") or die(mysqli_error($con));
            while($data = mysqli_fetch_assoc($queryBuku))
            {
                if($data['id_buku'] == 1)
                {
                    echo '
                    <div class="d-flex">
                        <div class="card" style="width: 200px; height: 250px; margin-right: 25px;">
                            <img class="card-imgtop" style="height: 250px;" src="'.$data['imgURL'].'"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="margin-bottom: 30px; text-align: center; height: 50px">'.$data['judul'].'</h5>
                                <a href="./showBukuPage.php?id_buku='.$data['id_buku'].'" class="btn btn-primary" 
                                style="display: flex; justify-content: center; align-items: center;">Lihat Detail</a>
                            </div>
                        </div>';
                }
                elseif($data['id_buku'] == 2)
                {
                    echo'
                    <div class="card" style="width: 200px; height: 200px; margin-right: 25px;">
                        <img class="card-imgtop" style="height: 250px;" src="'.$data['imgURL'].'"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="margin-bottom: 30px; text-align: center; height: 50px">'.$data['judul'].'</h5>
                            <a href="./showBukuPage.php?id_buku='.$data['id_buku'].'" class="btn btn-primary" style="display: flex; justify-content: center; align-items: center;">Lihat Detail</a>
                        </div>
                    </div>';
                }
                elseif($data['id_buku'] == 3)
                {
                    echo'
                    <div class="card" style="width: 200px; height: 200px; margin-right: 25px;">
                        <img class="card-imgtop" style="height: 250px;" src="'.$data['imgURL'].'"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="margin-bottom: 30px; text-align: center; height: 50px">'.$data['judul'].'</h5>
                            <a href="./showBukuPage.php?id_buku='.$data['id_buku'].'" class="btn btn-primary" style="display: flex; justify-content: center; align-items: center;">Lihat Detail</a>
                        </div>
                    </div>';
                }
                elseif($data['id_buku'] == 4)
                {
                    echo'
                    <div class="card" style="width: 200px; height: 200px; margin-right: 25px;">
                        <img class="card-imgtop" style="height: 250px;" src="'.$data['imgURL'].'"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="margin-bottom: 30px; text-align: center; height: 50px">'.$data['judul'].'</h5>
                            <a href="./showBukuPage.php?id_buku='.$data['id_buku'].'" class="btn btn-primary" style="display: flex; justify-content: center; align-items: center;">Lihat Detail</a>
                        </div>
                    </div>';
                }
                elseif($data['id_buku'] == 5)
                {
                    echo'
                    <div class="card" style="width: 200px; height: 200px; margin-right: 25px;">
                        <img class="card-imgtop" style="height: 250px;" src="'.$data['imgURL'].'"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="margin-bottom: 30px; text-align: center; height: 50px">'.$data['judul'].'</h5>
                            <a href="./showBukuPage.php?id_buku='.$data['id_buku'].'" class="btn btn-primary" style="display: flex; justify-content: center; align-items: center;">Lihat Detail</a>
                        </div>
                    </div>';

                }
                elseif($data['id_buku'] == 6)
                {
                    echo'
                    <div class="card" style="width: 200px; height: 200px;">
                        <img class="card-imgtop" style="height: 250px;" src="'.$data['imgURL'].'"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="margin-bottom: 30px; text-align: center; height: 50px">'.$data['judul'].'</h5>
                            <a href="./showBukuPage.php?id_buku='.$data['id_buku'].'" class="btn btn-primary" style="display: flex; justify-content: center; align-items: center;">Lihat Detail</a>
                        </div>
                    </div>
                </div>';
                }
            }
        ?>
    </div>

    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>