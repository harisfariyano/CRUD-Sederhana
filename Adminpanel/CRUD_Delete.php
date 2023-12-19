<div class="modal-backdrop modal animate-fading" style="background-color: rgba(0,0,0,.7)" id="background"></div>
<div class="modal " id="Delete_paket_internet">
        <div class="modal-dialog carousel-fade animate-top modal-dialog-scrollable ">
            <div class=" modal-content">
                <div class="modal-header"> <a class="navbar-brand"><b>HAPUS PAKET ?</b></a></div>
                <div class="modal-body">
                   <div class=" nav-link">Yakin ingin menghapus paket ini ?</div>                  
                </div>
                <div class ="modal-footer">
                    <input id="delete_id" name="delete_id"  style="display:none" >
                    <button onclick="hideModal('Delete_paket_internet')" class="btn btn-danger w-25">Batal</button>
                    <button name="deletebtn" onclick="Delete_paket_internet()" class="btn btn-success w-25">Sangat yakin</button>                                  
                </div>
            </div>
        </div>
    </div>
<script>
    function Delete_paket_internet(){
        var delete_id = document.getElementById("delete_id").value;
        window.location.href='?id='+delete_id;
    }
</script>
<?php
if(isset($_GET["id"])){
    include_once '../config/DBQuery.php';
    DBQuery::IUD("Delete from paket_internet where id = '".$_GET["id"]."'");
    echo '<script>window.location.href="CRUD.php";</script>';   
}
?>