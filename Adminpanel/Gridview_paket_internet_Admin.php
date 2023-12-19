<tr>
    <th><?php echo $row["id"]?></th>
    <th><?php echo $row["nama_paket"]?></th>
    <th><?php echo $row["harga"]?></th>
    <th><?php echo $row["masa_aktiv"]?></th>
    <th><?php echo $row["kuota"]?></th>
    <th><?php echo $row["kecepatan"]?></th>
    <th><?php echo $row["deskripsi"]?></th>
    <th>
        <button class="btn btn-primary " onclick="Gridview_paket_internet_Update('<?php echo $row['id']?>','<?php echo $row['nama_paket']?>','<?php echo $row['harga']?>','<?php echo $row['masa_aktiv']?>','<?php echo $row['kuota']?>','<?php echo $row['kecepatan']?>','<?php echo $row['deskripsi']?>','Update_paket_internet')">Update</button>
        <button class="btn btn-danger " onclick="Gridview_paket_internet_Delete('<?php echo $row['id']?>','Delete_paket_internet')">Delete</button>
    </th> 
</tr>

<script>
    function Gridview_paket_internet_Update(id,nama_paket,harga,masa_aktiv,kuota,kecepatan,deskripsi,IDModal)
    {   
        document.getElementById('update_id').value =id;
        document.getElementById('update_paket').value =nama_paket;
        document.getElementById('update_harga').value =harga;
        document.getElementById('update_masa_aktiv').value =masa_aktiv;
        document.getElementById('update_kuota').value =kuota;
        document.getElementById('update_kecepatan').value =kecepatan;
        document.getElementById('update_deskripsi').value =deskripsi;
        showModal(IDModal);  
         
    }
    function Gridview_paket_internet_Delete(id,IDModal)
    {   
        document.getElementById('delete_id').value =id;
        showModal(IDModal);  
         
    }
</script>


