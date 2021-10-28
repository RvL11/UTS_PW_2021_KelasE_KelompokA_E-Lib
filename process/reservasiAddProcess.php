<?php
    if(isset($_POST['reserve']) && $_POST['perpus'] != "null")
    {
    
        include('../db.php');
        
        $id = $_POST['user'];
        $id_perpus = $_POST['perpus'];
        $date = $_POST['res_date'];

        $query = mysqli_query($con,
            "INSERT INTO reservasi (id_user, id_perpus, tgl_reservasi)
                VALUES
            ('$id', '$id_perpus', '$date')") or die(mysqli_error($con));
                
        if($query){
            echo
                '<script>
                    alert("Reservasi Berhasil Dibuat!");
                    window.location = "../page/reservasiShowPage.php"
                </script>';
        }
        else{
            echo
                '<script>
                    alert("Pembuatan Reservasi Gagal!");
                </script>';
        }

    }
    else{
        echo
        '<script>
            alert("Silahkan Pilih Perpustakaan!");
            window.history.back()
        </script>';
    }
?>