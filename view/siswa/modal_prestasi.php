<div id="modal_prestasi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data Prestasi</h4>
      </div>
      <div class="modal-body">
        <form action="../../controller/siswa/tambah_prestasi.php" method="GET">
        
        Nama Prestasi:<input type="text" name='prestasi'>
        Skala:<input type="text" name='skala'>
        Jenis Prestasi:<input type="text" name='jenis'>
        Juara/Peringkat:<input type="text" name='peringkat'>
        Tahun:<input type="text" name='tahun'>

        <input class='btn btn-danger' type="submit" values="Tambahkan">
        
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>