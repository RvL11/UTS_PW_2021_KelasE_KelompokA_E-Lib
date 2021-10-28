<?php
    if(isset($_GET['id_reservasi']))
    {
        include ('../db.php');
        $id = $_GET['id_reservasi'];
        $queryDelete = mysqli_query($con, "DELETE FROM reservasi WHERE id_reservasi='$id'") or die(mysqli_error($con));
        if($queryDelete)
        {
            echo
            '<script>
                alert("Reservasi Dibatalkan!"); 
                window.location = "../page/reservasiShowPage.php"
            </script>';
        }
        else
        {
            echo
            '<script>
                alert("Reservasi Gagal Dibatalkan!"); 
                window.location = "../page/reservasiShowPage.php"
            </script>';
        }
    }
    else 
    {
        echo
        '<script>
            window.history.back()
        </script>';
    }
?>