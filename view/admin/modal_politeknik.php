<div id="modal_politeknik" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Politeknik</h4>
      </div>
      <div class="modal-body">
      <form action='../../controller/admin/tambah_poltek.php' method='POST'>
      <br>
      Nama Politeknik: <input type="text" name='nama_poltek'>
      <br>

      <input class='btn btn-info' type="submit" value='Tambah Politeknik'>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>