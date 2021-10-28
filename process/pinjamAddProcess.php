<?php
    if(isset($_POST['pinjam'])){
    
        include('../db.php');
        
        $id = $_POST['user'];
        $id_buku = $_POST['buku'];
        $start = $_POST['start_date'];
        $end = $_POST['end_date'];

        $query = mysqli_query($con,
            "INSERT INTO pinjam (id_User, id_buku, tgl_pinjam, tgl_kembali)
                VALUES
            ('$id', '$id_buku', '$start', '$end')")
                or die(mysqli_error($con));
                
        if($query){
            echo
                '<script>
                    alert("Buku Berhasil Dipinjam!");
                    window.location = "../page/pinjamShowPage.php"
                </script>';
        }
        else{
            echo
                '<script>
                    alert("Peminjaman Buku Gagal!");
                </script>';
        }

    }
    else{
        echo
        '<script>
            window.history.back()
        </script>';
    }
?>