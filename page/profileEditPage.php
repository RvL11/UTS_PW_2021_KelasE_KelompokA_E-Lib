<?php
    include '../component/sidebar.php';
    $id_user = $_SESSION['id_user'];
    $data = mysqli_query($con,"SELECT * FROM user where id='$id_user'");
    $sql = mysqli_fetch_array($data);
?>

<div class="container rounded bg-white mt-5 mb-5">
    <form action="../process/editProfileProcess.php"  method="post">
    <div class="row">
        <input  class ="form-control" type="hidden" id = "id" name = "id" value="<?php echo $sql['id'];?>">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold"><?php echo $sql['nama']?> </span>
            <span class="text-black-50"><?php echo $sql['email']?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-20"><label class="labels">Name</label>
                    <input id="nama" name="nama"  type="text" class="form-control"  value="<?php echo $sql['nama']?>" required></div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-20"><label class="labels">Username</label>
                    <input id="username" name="username"  type="text" class="form-control"  value="<?php echo $sql['username']?>" required></div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-20">
                        <label class="labels">Email</label>
                        <input id="email" name="email" type="email" class="form-control" placeholder="Email" value="<?php echo $sql['email']?>" required></div>
                    </div>
                    <div class="row mt-2">
                    <div class="col-md-20"><label class="labels">Password</label>
                    <input id="password" name="password" type="password" class="form-control" required></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" name="update_profile" type="submit">Save Profile</button></div>
            </div>
        </div>
       
    </div>
</form>
 
</div>