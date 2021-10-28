<?php
if (isset($_POST['update_profile'])) 
{
    include('../db.php');

    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $id = $_POST['id'];
    
    $query = mysqli_query($con, "SELECT * FROM user WHERE id = '$id'") or die(mysqli_error($con));
    $user = mysqli_fetch_assoc($query);
    
    if($query)
    {
        if(password_verify($password, $user["password"])) 
        {        
            $queryUpdate = mysqli_query($con, "UPDATE user SET nama='$nama', username='$username',email='$email' WHERE id='$id'") or die(mysqli_error($con));
            echo
            '<script>
                alert("Profil Berhasil Diedit"); 
                window.location = "../page/profileShowPage.php"
            </script>';
        }
        else
        {
            echo
            '<script>
            alert("Gagal Edit Profil! Password Salah");
            window.location = "../page/profileEditPage.php"
            </script>';
        }
    }
    else
    {
        echo
        '<script>
           alert("Gagal Edit Profil");
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
