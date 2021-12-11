<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Device List</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Device Name</th>
      <th scope="col">Brand</th>
      <th scope="col">Quantity</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?= $i=1; ?>
    <?php foreach($device as $d) : ?>
      <tr>
        <th scope="row"><?= $i++; ?></th>
        <td><?= $d['device_name']; ?></td>
        <td><?= $d['device_brand']; ?></td>
        <td><?= $d['device_quantity']; ?></td>
        <td><?= $d['device_status']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>