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
      // session_start();
      include '../../controller/connect.php';
      $username=$_SESSION['username'];
      //  echo $username;
      $sql="SELECT npsn, username, nama_sekolah, alamat_sekolah, kepala_sekolah
      FROM public.sekolah WHERE username='$username';";
      $hasil=pg_query($conn,$sql);

      while ($isinya = pg_fetch_assoc($hasil)) {
        echo "<b>";
        echo "Nama Sekolah: ".$isinya['nama_sekolah']."<br/>";
        echo "Username: ".$isinya['username']."<br/>";
        echo "NPSN: ".$isinya['npsn']."<br/>";
        echo "Alamat Sekolah: ".$isinya['alamat_sekolah']."<br/>";
        echo "Kepala Sekolah: ".$isinya['kepala_sekolah']."<br/>";
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