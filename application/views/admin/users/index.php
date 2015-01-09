<div class="col-sm-9">
  <!-- column 2 -->
  <h1 class="page-header">Halaman User</h1>

  <a href="<?php echo base_url("index.php/admin/users/create"); ?>" class="btn btn-primary">Tambah</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Username</th><th>Alamat</th><th>Tipe</th><th>Mengatur</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users->result_array() as $users_item): ?>
        <tr>
          <td><?php echo $users_item['usr_username'] ?></td>
          <td><?php echo $users_item['usr_address'] ?></td>
          <td><?php echo $users_item['usr_type'] ?></td>
          <td>
            <a href="<?php echo base_url("index.php/admin/users/edit/" . $users_item['usr_id']) ?>">Ubah</a> |
            <a href="<?php echo base_url("index.php/admin/users/destroy/" . $users_item['usr_id']); ?>" onclick="return confirm('Apakah yakin akan menghapus?')">Hapus</a> |
            <a href="<?php echo base_url("index.php/admin/users/show/" . $users_item['usr_id']) ?>">Lihat</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div><!--/col-span-9-->