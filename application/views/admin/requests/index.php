<div class="col-sm-9">
  <!-- column 2 -->
  <h1 class="page-header">Halaman Permintaan</h1>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nama</th><th>Email</th><th>No Telp</th><th>Konten</th><th>Mengatur</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($requests->result_array() as $request_item): ?>
        <tr>
          <td><?php echo $request_item['req_name'] ?></td>
          <td><?php echo $request_item['req_email'] ?></td>
          <td><?php echo $request_item['req_no_telp'] ?></td>
          <td><?php echo $request_item['req_content'] ?></td>
          <td>
            <a href="<?php echo base_url("index.php/admin/requests/reply/" . $request_item['req_id']) ?>">Balas</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div><!--/col-span-9-->