<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../vendor/autoload.php';

    if(isset($_POST['register']))
    {
        include('../db.php'); 

        $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $query_check_email = mysqli_query($con,"SELECT * FROM user WHERE (email = '$email')");
        $query_check_username = mysqli_query($con,"SELECT * FROM user WHERE (username = '$username')");
        
        if(mysqli_num_rows($query_check_email) > 0)
        {
            echo
            '<script>
                alert("Alamat Email Sudah Terdaftar!"); 
                window.location = "../page/registerPage.php"
            </script>';
        }
        else if(mysqli_num_rows($query_check_username) > 0)
        {
            echo
            '<script>
                alert("Username Sudah Terpakai!"); 
                window.location = "../page/registerPage.php"
            </script>';
        }
        else
        {
            $query = mysqli_query($con, "INSERT INTO user(username, password, nama, email, status) 
            VALUES ('$username', '$password', '$nama', '$email', 0)") 
            or die(mysqli_error($con));
        }
        
        if($query)
        {
            $mail = new PHPMailer();
            $mail->SMTPDebug = 0;                   
            $mail->isSMTP();                        
            $mail->Host ='smtp.gmail.com'; 
            $mail->SMTPAuth= true;              
            $mail->Username ='pw.kelompoka@gmail.com';     
            $mail->Password   = 'kelompokA2021';       
            $mail->SMTPSecure = 'tls';              
            $mail->Port       = 587; 
            $mail->setFrom('pw.kelompoka@gmail.com', 'E-Lib');           
            $mail->addAddress($email);         
            $mail->isHTML(true);                                  
            $mail->Subject='E-Lib Account Activation';
            $mail->SMTPDebug = 0;       
            $query=mysqli_query($con,"SELECT id FROM user WHERE email='$email'");
            $data = mysqli_fetch_assoc($query);
            $mail->Body='Terima kasih sudah mendaftar di E-Lib, silahkan klik link berikut ini untuk mengaktivasi akun anda: http://localhost:8080/projek-uts/activation.php?id='.$data['id'].'';  
            // $mail->Body='Terima kasih sudah mendaftar di E-Lib, silahkan klik link berikut ini untuk mengaktivasi akun anda: http://e-lib.infinityfreeapp.com/activation.php?id='.$data['id'].'';  
            $mail->send();
            echo
                '<script>
                    alert("Register Berhasil! Cek email anda untuk aktivasi akun!");
                    window.location = "../page/loginPage.php"
                </script>';
        }
        else
        {
            echo 
            '<script>
                alert("Register Gagal!"); 
                window.location = "../page/registerPage.php"
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