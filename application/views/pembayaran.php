<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 mb-3">
      <div class="btn btn-sm btn-success mb-3">
        <?php
        $grand_total = 0;
        if ($keranjang = $this->cart->contents()) {
          foreach ($keranjang as $item) {
            $grand_total = $grand_total + $item['subtotal'];
          }
          echo '<h4>Total Belanja Anda : Rp. ' . number_format($grand_total, 0, ',', '.') . '</h4>';
        ?>
      </div>

      <h3>Masukan Alamat Pengiriman & Pembayaran</h3>
      <form action="<?= base_url('dashboard/proses_pesanan'); ?>" method="POST">
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap Anda">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat Lengkap</label>
          <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Lengkap Anda">
        </div>
        <div class="form-group">
          <label for="no_telp">No. Telepon</label>
          <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="Nomor Telepon Anda">
        </div>
        <div class="form-group">
          <label for="jasa_pengiriman">Jasa Pengiriman</label>
          <select name="jasa_pengiriman" id="jasa_pengiriman" class="form-control">
            <option value="JNE">JNE</option>
            <option value="TIKI">TIKI</option>
            <option value="POS Indinesia">POS Indonesia</option>
            <option value="GOJEK">GOJEK</option>
            <option value="GRAB">GRAB</option>
          </select>
        </div>
        <div class="form-group">
          <label for="bank">Pilih BANK</label>
          <select name="bank" id="bank" class="form-control">
            <option value="BCA">BCA - XXXXXXX</option>
            <option value="BNI">BNI - XXXXXXX</option>
            <option value="BRI">BRI - XXXXXXX</option>
            <option value="MANDIRI">MANDIRI - XXXXXXX</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
        </div>
      </form>

    <?php
                  } else {
                    echo '<h4>Keranjang Belanja Anda Masih Kosong.</h4>';
                  }
    ?>

    </div>
    <div class="col-md-2"></div>
  </div>
</div>