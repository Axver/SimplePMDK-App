<div id="modal_tambahinfo" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><b>Tambah Informasi Sekolah</b></h4>
      </div>
      <div class="modal-body">
      <form style='color:black;' action="../../controller/sekolah/tambah_infosekolah.php" method='POST'>
      
      NPSN: <input style='color:black;' class='form-control' type="text" name="npsn" id="">
      Nama Sekolah : <input style='color:black;' class='form-control' type="text" name="nama_sekolah" id="">
      Alamat Sekolah : <input style='color:black;' class='form-control' type="text" name="alamat" id="">
      Kepala Sekolah : <input style='color:black;' class='form-control' type="text" name="kepala_sekolah" id="">

      <input type="submit" class='btn btn-info' value="Tambahkan Info">
      
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>