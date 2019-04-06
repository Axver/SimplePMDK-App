<div id="modal_tambahsiswa" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Informasi Sekolah</h4>
      </div>
      <div class="modal-body">
      
      <form action='../../controller/sekolah/tambah_user.php' method='POST'>
      <br>
      Username: <input type="text" name='username'>
      <br>
      Password: <input type="password" name='password'>
      <br>

      <input class='btn btn-info' type="submit" value='Tambah User'>
      </form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>