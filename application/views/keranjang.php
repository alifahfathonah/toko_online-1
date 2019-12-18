<div class="container-fluid">
  <h4>Keranjang Belanja</h4>

  <table class="table table-bordered table-striped table-hover">
    <tr>
      <th>NO</th>
      <th>Nama Produk</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Sub-Total</th>
    </tr>
    <?php
    $no = 0;
    foreach ($this->cart->contents() as $items) : ?>
      <tr>
        <td><?= ++$no; ?></td>
        <td><?= $items['name']; ?></td>
        <td><?= $items['qty']; ?></td>
        <td align="right">Rp. <?= number_format($items['price'], 0, ',', '.'); ?></td>
        <td align="right">Rp. <?= number_format($items['subtotal'], 0, ',', '.'); ?></td>
      </tr>
    <?php endforeach; ?>
    <tr>
      <td colspan="4"></td>
      <td align="right">Rp. <?= number_format($this->cart->total(), 0, ',', '.'); ?></td>
    </tr>
  </table>

  <div align="right">
    <a href="<?= base_url('dashboard/hapus_keranjang'); ?>" class="btn btn-danger btn-sm">Hapus Keranjang</a>
    <a href="<?= base_url('dashboard/index'); ?>" class="btn btn-primary btn-sm">Lanjutkan Belanja</a>
    <a href="<?= base_url('dashboard/pembayaran'); ?>" class="btn btn-success btn-sm">Pembayaran</a>
  </div>

</div>