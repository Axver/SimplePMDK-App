<div id="modal_informasi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><b>Informasi Sekolah</b></h4>
      </div>
      <div class="modal-body">
      <?php
       include '../../controller/connect.php';
       $informasi=pg_query($conn,"SELECT npsn, username, nama_sekolah, alamat_sekolah, kepala_sekolah
       FROM public.sekolah;");

       while ($row=pg_fetch_assoc($informasi)){
        echo"<b>";
        echo "NPSN: ".$row['npsn']."<br/>";
        echo "Username: ".$row['username']."<br/>";
        echo "Nama Sekolah: ".$row['nama_sekolah']."<br/>";
        echo "Kepala Sekolah: ".$row['kepala_sekolah']."<br/>";
        echo "</b>";
       }
      ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>