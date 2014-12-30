<div class="col-sm-9">
  <!-- column 2 -->
  <h1 class="page-header">Halaman Perternakan</h1>

  <a href="<?php echo base_url("index.php/admin/agricultures/create"); ?>" class="btn btn-primary">Tambah</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Judul</th><th>Deskripsi</th><th>Lokasi</th><th>Pemilik</th><th>Mengatur</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($agricultures->result_array() as $agricultures_item): ?>
        <tr>
          <td><?php echo $agricultures_item['title'] ?></td>
          <td><?php echo $agricultures_item['description'] ?></td>
          <td><?php echo $agricultures_item['location'] ?></td>
          <td><?php echo $agricultures_item['username'] ?></td>
          <td><a href="#">Ubah</a> | <a href="#">Hapus</a> | <a href="lihat.html">Lihat</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div><!--/col-span-9-->