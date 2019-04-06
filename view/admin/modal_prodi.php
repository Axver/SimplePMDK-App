<div id="modal_prodi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Prodi</h4>
      </div>
      <div class="modal-body">
      <form action="../../controller/admin/tambah_prodi.php" method='POST'>
      <?php
      include "../../controller/connect.php";
      $max_=pg_query($conn,"SELECT MAX(id_prodi)
      FROM public.prodi;");
       while ($row = pg_fetch_assoc($max_)) {
              $max= $row['max'];
      }

      
         
      $sql=pg_query($conn,"SELECT id_politeknik, nama_politeknik
      FROM public.daftar_poltek;");
      ?>
      <select name="id_politeknik" id="id_politeknik">
      <?php
      while ($row = pg_fetch_assoc($sql)) {
        ?>  
       <option value="<?php echo $row['id_politeknik']; ?>"><?php echo $row['nama_politeknik']; ?></option> 
      <?php
      }
      ?>
      </select>
      Prodi:<input type="text" name='prodi'>
      <input class='btn btn-normal' type="submit" value='Tambahkan'>
      
      </form>
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>