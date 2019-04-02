<div id="modal_nilai" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data Prestasi</h4>
      </div>
      <div class="modal-body">
       <form action="../../controller/siswa/tambah_nilai.php" method='GET'>
       
       <h3>Semester 1</h3>

       Semester:
<select name="semester" id="semester">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
       

       <?php 
         $result = pg_query($conn,"SELECT kode_mapel, nama_mapel
         FROM public.daftar_mapel;");
         $rows = pg_num_rows($result);
       ?>

         <p><b style='color:black;'>Mata pelajaran:</b><select  name="mata_pelajaran" id="mata_pelajaran">
    
    <?php 
     while ($row=pg_fetch_assoc($result)) {
       ?>
    <option value="<?php echo $row['kode_mapel']?>"><?php echo $row['nama_mapel']?></option>
    <?php
    }
    
    ?>
    
    
    </select>
    </p>

    Nilai Mapel:<input type="text" name='nilai'>
    <input type="submit">
       
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>