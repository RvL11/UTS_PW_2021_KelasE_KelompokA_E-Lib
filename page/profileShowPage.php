<?php
    include '../component/sidebar.php';
    $id_user = $_SESSION['id_user'];
    $data = mysqli_query($con,"SELECT * FROM user where id='$id_user'");
    $sql = mysqli_fetch_array($data);
?>

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold"><?php echo $sql['nama']?> </span>
                <span class="text-black-50"><?php echo $sql['email']?></span><span> </span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-20">
                        <label class="labels">Nama</label>
                        <p style="padding: 10px; border: 1px solid grey; border-radius:7px;"><?php echo $sql['nama']?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-20">
                        <label class="labels">Username</label>
                        <p style="padding: 10px; border: 1px solid grey; border-radius:7px;"><?php echo $sql['username']?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-20">
                        <label class="labels">Email</label>
                        <p style="padding: 10px; border: 1px solid grey; border-radius:7px;"><?php echo $sql['email']?></p>
                    </div>
                <div class="mt-5 text-center">
                    <a class="btn btn-primary profile-button" name="update_profile" href="./profileEditPage.php?id=<?php echo $id_user ?>">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>