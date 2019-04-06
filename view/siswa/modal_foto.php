<div id="modal_foto" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data Prestasi</h4>
      </div>
      <div class="modal-body">
      <?php
      session_start();
      $username=$_SESSION['username'];
      include '../../controller/connect.php';
      $foto=pg_query($conn,"SELECT image
      FROM public.biodata WHERE username='$username';");

 while ($row=pg_fetch_assoc($foto)) {
 $image=$row['image'];
 
}

 

      ?>

      <img src="<?php echo "file/".$image; ?>" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>