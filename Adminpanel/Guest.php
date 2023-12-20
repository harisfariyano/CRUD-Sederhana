<!DOCTYPE html>
<html>
<head>

<title>Belajar_CRUD</title>
<meta content="" name="description">
<meta content="" name="keywords">

  <!-- Favicons -->
<link href="../assets/img/logoCRUD.png" rel="icon">
<link href="../assets/img/logoCRUD.png" rel="apple-touch-icon">

<link rel="stylesheet" href="../assets/css/Animation.css">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/Animation.css">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<script src="assets/js/MyJS.js" type="text/javascript"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand"> <img src="../assets/img/Belajar_CRUD.png" width ="150">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pengunjung
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="SelectedRow" class="text-white"></div>
    <div class="container-fluid" style="margin-top:100px">
        <center>
        <div class="w-75">
        <table class="table">
            <thead>
                <td>No</td>  
                <td>Nama Paket</td>  
                <td>Harga</td>  
                <td>Masa Aktiv</td>  
                <td>Kuota</td>
                <td>Kecepatan</td>  
                <td>Deskripsi</td>
            </thead>
            <tbody>
                <?php
                include_once '../config/DBQuery.php';
                $DBQuery = new DBQuery();
                $DBQuery->SetDiv("SELECT * FROM paket_internet order by id desc", 'Gridview_paket_internet_Guest.php');
                ?>
            </tbody>
        </table>
        </div>
        </center>
    </div>  
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>