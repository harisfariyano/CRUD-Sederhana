<!DOCTYPE html>
<html>
<head>

<title>Cleon</title>
<meta content="" name="description">
<meta content="" name="keywords">

  <!-- Favicons -->
<link href="../assets/img/cleon_icon.png" rel="icon">
<link href="../assets/img/cleon_icon.png" rel="apple-touch-icon">

<link rel="stylesheet" href="../assets/css/Animation.css">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">

<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<script src="../config/jquery-3.5.1.min.js" type="text/javascript"></script>
</head>
<body>
<div class="position-relative">
    <img src="../assets/img/3.png" class=" w-100 fixed-top" style="z-index: -1;">
    <div class=" float-right position-absolute" style="right:100px; top:150px">
        <div class="card" style="width:500px">
        <div class="login-logo">
                            <center>
                              <br>
                                <img src="../assets/img/cleon.png" width ="100">
                              </center>
                        </div>
            <div class="card-body">
            <form method="POST" action="Login_Behind.php" >
            <div class="p-1">              
                 <div>Username</div>
                 <div><input name="usernametbx" required class="form-control"></div>                
               </div>
               <div class="p-1">
                 <div>Password</div>
                 <div><input type = "password"name="passwordtbx" required class="form-control"></div>                
               </div>
               <div class="p-1">
                 <div class="d-flex">
                     <input type="submit" name="IDSubmit" style="width:250px"  value="Masuk" class="form-control bg-dark text-white">
                     <a href="Guest.php"style="width:250px" class="form-control bg-success text-white text-center">Masuk sebagai Tamu</a>     
                </div>  
                <div class="text-center text-danger"><label  id="wrongpasswordlbl">Username atau Pasword yang kamu masukan salah</label></div>   
               </div>                  
             </form>
              
            </div>
        </div>
    </div>
</div>
<?php
    echo "<script>document.getElementById('wrongpasswordlbl').style.display = 'none';</script>";
   if(isset($_GET["Error"])){
    echo "<script>document.getElementById('wrongpasswordlbl').style.display = 'block';</script>";
    }
?>
</body>
</html>