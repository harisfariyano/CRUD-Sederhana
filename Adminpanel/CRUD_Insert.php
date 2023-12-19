<div class="modal-backdrop modal animate-fading" style="background-color: rgba(0,0,0,.7)" id="background"></div>
<div class="modal " id="Insert_paket_internet">
        <div class="modal-dialog carousel-fade animate-top modal-dialog-scrollable ">          
            <div class=" modal-content">
            <form method="POST">        
            <div class="modal-header"> <a class="navbar-brand"><b>Paket yang ingin ditambahkan</b></a></div>
             <div class="modal-body">
             <input id="insert_id" name="insert_id"  style="display:none" >
                <div class="form-group">
                <div style="width: 465px; text-align: left;">Nama Paket</div>
                <input class="form-control" id="insert_paket" name="insert_paket" required></div>
                <div class="form-group">
                <div style="width: 465px; text-align: left;">Harga</div>
                <input class="form-control" id="insert_harga" name="insert_harga" required></div>
                <div style="width: 465px; text-align: left;">Masa aktiv</div>
                <div><input class="form-control" id="insert_masa_aktiv" name="insert_masa_aktiv" required></div>
                <div style="width: 465px; text-align: left;">Kuota</div>
                <div><input class="form-control" id="insert_kuota" name="insert_kuota" required></div>
                <div style="width: 465px; text-align: left;">Kecepatan</div>
                <div><input class="form-control" id="insert_kecepatan" name="insert_kecepatan" required></div> 
                <div style="width: 465px; text-align: left;">Deskripsi</div>
                <div><input class="form-control" id="insert_deskripsi" name="insert_deskripsi" required></div>               
             </div>
                <div class="modal-footer">
                    <button onclick="hideModal('Insert_paket_internet')" class="btn btn-danger">Cancel</button>
                    <button name="insertbtn" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    if(isset($_POST["insertbtn"])){
        include_once '../config/DBQuery.php';
        
        $insert_paket = $_POST["insert_paket"];
        $insert_harga = $_POST["insert_harga"];
        $insert_masa_aktiv = $_POST["insert_masa_aktiv"];
        $insert_kuota = $_POST["insert_kuota"];
        $insert_kecepatan = $_POST["insert_kecepatan"];
        $insert_deskripsi = $_POST["insert_deskripsi"];
        
        $query = "INSERT INTO paket_internet (nama_paket, harga, masa_aktiv, kuota, kecepatan, deskripsi) VALUES ('$insert_paket', '$insert_harga', '$insert_masa_aktiv', '$insert_kuota', '$insert_kecepatan', '$insert_deskripsi')";
        
        DBQuery::IUD($query);
    }
?>