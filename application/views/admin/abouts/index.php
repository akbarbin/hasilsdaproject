<div class="col-sm-9">
  <!-- column 2 -->
  <h1 class="page-header">Halaman Tentang RSDA</h1>

  <a href="<?php echo base_url("index.php/admin/abouts/create"); ?>" class="btn btn-primary">Tambah</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Judul</th><th>Deskripsi</th><th>Lokasi</th><th>Mengatur</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($abouts->result_array() as $abouts_item): ?>
        <tr>
          <td><?php echo $abouts_item['abt_title'] ?></td>
          <td><?php echo $abouts_item['abt_description'] ?></td>
          <td><?php echo $abouts_item['abt_location'] ?></td>
          <td>
            <a href="<?php echo base_url("index.php/admin/abouts/edit/" . $abouts_item['abt_id']) ?>">Ubah</a> |
            <a href="<?php echo base_url("index.php/admin/abouts/destroy/" . $abouts_item['abt_id']); ?>" onclick="return confirm('Apakah yakin akan menghapus?')">Hapus</a> |
            <a href="<?php echo base_url("index.php/admin/abouts/show/" . $abouts_item['abt_id']) ?>">Lihat</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div><!--/col-span-9-->