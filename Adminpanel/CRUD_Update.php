<div class="modal-backdrop modal animate-fading" style="background-color: rgba(0,0,0,.7)" id="background"></div>
<div class="modal " id="Update_paket_internet">
        <div class="modal-dialog carousel-fade animate-top modal-dialog-scrollable ">          
            <div class=" modal-content">
            <form method="POST">        
            <div class="modal-header"> <a class="navbar-brand"><b>Ubah Paket</b></a></div>
             <div class="modal-body">
             <input id="update_id" name="update_id"  style="display:none" >
             <div>Nama Paket</div>
                <div><input class="form-control" id="update_paket" name="update_paket" required></div>
                <div>Harga</div>
                <div><input class="form-control" id="update_harga" name="update_harga" required></div>
                <div>Masa aktiv</div>
                <div><input class="form-control" id="update_masa_aktiv" name="update_aktiv" required></div>
                <div>Kuota</div>
                <div><input class="form-control" id="update_kuota" name="update_kuota" required></div>
                <div>Kecepatan</div>
                <div><input class="form-control" id="update_kecepatan" name="update_kecepatan" required></div> 
                <div>Deskripsi</div>
                <div><textarea class="form-control" id="update_deskripsi" name="update_deskripsi" required></textarea></div>               
             </div>
             <div class ="modal-footer">
                    <button onclick="hideModal('Update_paket_internet')" class="btn btn-danger w-25">Cancel</button>
                    <button name="updatebtn" class="btn btn-success w-25">Yes</button>                                  
                </div>
            </form>                
            </div>
        </div>
    </div>
<script>

</script>
<?php
    if(isset($_POST["updatebtn"])){     
        DBQuery::IUD("Update paket_internet SET nama_paket = '".$_POST["update_paket"]."',  harga ='".$_POST["update_harga"]."', masa_aktiv ='".$_POST["update_aktiv"]."',  kuota ='".$_POST["update_kuota"]."',  kecepatan ='".$_POST["update_kecepatan"]."',  deskripsi ='".$_POST["update_deskripsi"]."' WHERE id ='".$_POST["update_id"]."'");
        echo '<script>window.location.href="";</script>';   
    }
?>