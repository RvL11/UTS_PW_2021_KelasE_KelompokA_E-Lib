<?php
    if(isset($_GET['id_pinjam']))
    {
        include ('../db.php');
        $id = $_GET['id_pinjam'];
        $queryDelete = mysqli_query($con, "DELETE FROM pinjam WHERE id_pinjam='$id'") or die(mysqli_error($con));
        if($queryDelete)
        {
            echo
            '<script>
                alert("Buku Berhasil Dikembalikan!"); 
                window.location = "../page/pinjamShowPage.php"
            </script>';
        }
        else
        {
            echo
            '<script>
                alert("Pengembalian Buku Gagal!"); 
                window.location = "../page/pinjamShowPage.php"
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