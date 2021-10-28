<?php
    if(isset($_GET['id_reservasi'])){
    
        include('../db.php');
        
        $id = $_GET['id_reservasi'];
        $date = $_POST['res_date'];

        $query = mysqli_query($con, "UPDATE reservasi SET tgl_reservasi='$date' WHERE id_reservasi='$id'") or die(mysqli_error());
                
        if($query){
            echo
                '<script>
                    alert("Tanggal Reservasi Berhasil Diubah!"); 
                    window.location = "../page/reservasiShowPage.php"
                </script>';
        }
        else{
            echo
                '<script>
                    alert("Pengubahan Tanggal Reservasi Gagal!");
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