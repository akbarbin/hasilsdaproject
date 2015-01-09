<div class="col-sm-9">
  <!-- column 2 -->
  <h1 class="page-header">Halaman Perternakan</h1>

  <a href="<?php echo base_url("index.php/admin/animal_farms/create"); ?>" class="btn btn-primary">Tambah</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Judul</th><th>Deskripsi</th><th>Lokasi</th><th>Pemilik</th><th>Mengatur</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($animal_farms->result_array() as $animal_farms_item): ?>
        <tr>
          <td><?php echo $animal_farms_item['pr_title'] ?></td>
          <td><?php echo $animal_farms_item['pr_description'] ?></td>
          <td><?php echo $animal_farms_item['pr_location'] ?></td>
          <td><?php echo $animal_farms_item['usr_username'] ?></td>
          <td>
            <a href="<?php echo base_url("index.php/admin/animal_farms/edit/" . $animal_farms_item['pr_id']) ?>">Ubah</a> |
            <a href="<?php echo base_url("index.php/admin/animal_farms/destroy/" . $animal_farms_item['pr_id']); ?>" onclick="return confirm('Apakah yakin akan menghapus?')">Hapus</a> |
            <a href="<?php echo base_url("index.php/admin/animal_farms/show/" . $animal_farms_item['pr_id']) ?>">Lihat</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div><!--/col-span-9-->