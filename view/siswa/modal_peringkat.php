<div id="modal_peringkat" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data Prestasi</h4>
      </div>
      <div class="modal-body">
       <form action="../../controller/siswa/tambah_peringkat.php" method='POST'>
       
       <h3>Semester:</h3>
Semester:
<select name="semester" id="semester">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
       
       Peringkat:<input type="text" name='peringkat'>
    <input type="submit">
       
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>