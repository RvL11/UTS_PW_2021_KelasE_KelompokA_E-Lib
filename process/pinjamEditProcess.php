<?php
    if(isset($_GET['id_pinjam'])){
    
        include('../db.php');
        
        $id = $_GET['id_pinjam'];
        $start = $_POST['start_date'];
        $end = $_POST['end_date'];

        $query = mysqli_query($con, "UPDATE pinjam SET tgl_pinjam='$start', tgl_kembali='$end' WHERE id_pinjam='$id'") or die(mysqli_error());
                
        if($query){
            echo
                '<script>
                    alert("Tanggal Peminjaman Berhasil Diubah!"); 
                    window.location = "../page/pinjamShowPage.php"
                </script>';
        }
        else{
            echo
                '<script>
                    alert("Pengubahan Tanggal Peminjaman Gagal!");
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