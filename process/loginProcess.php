<?php
    if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password']))
    {
        include('../db.php');

        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    
        $query = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'") or die(mysqli_error($con));
        
        if(mysqli_num_rows($query) == 0)
        {
            echo
                '<script>
                    alert("Username Tidak Ditemukan!"); 
                    window.location = "../page/loginPage.php"
                </script>';
        }
        else
        {
            $user = mysqli_fetch_assoc($query);
            $status = $user['status'];
            if(password_verify($password, $user["password"]))
            {
                if($status == 0){
                    echo
                        '<script>
                            alert("Akun anda belum diaktivasi, harap cek kotak masuk email anda!"); 
                            window.location = "../page/loginPage.php"
                        </script>'; 
                }
                else 
                {
                    session_start();
                    $_SESSION['id_user'] = $user['id'];
                    echo
                        '<script>
                            alert("Login Berhasil!"); 
                            window.location = "../page/dashboardPage.php"
                        </script>';
                }
            }
            else
            {
                echo
                    '<script>
                        alert("Username atau Password Salah!");
                        window.location = "../page/loginPage.php"
                    </script>';
            }
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