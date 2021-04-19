<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables User</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" widht="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Grup</th>
            <th></th>
          </tr>
        </thead>
        <tfoot>
            <th>No</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Grup</th>
            <th></th>
        </tfoot>

        <tbody>
          <?php
            $no = 1;
            foreach($user as $baris){
          ?>
          <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $baris->username; ?></td>
              <td><?php echo $baris->nama; ?></td>
              <td><?php echo $baris->grup; ?></td>
              <td></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <a href="<?php echo site_url('admin/Overview/tambah') ?>" class="btn btn-success btn-icon-split">
        <span class="text">Tambah Data</span>
      </a>
    </div>
  </div>
</div>
