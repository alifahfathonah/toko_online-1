<div class="container-fluid">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="2000">
        <img src="<?= base_url('assets/img/slider1.jpg'); ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h3 class="text-primary font-weight-bold">TOKO</h3>
          <p class="text-primary font-weight-bold">Pembelian melalui online toko.</p>
        </div>
      </div>
      <div class="carousel-item" data-interval="2000">
        <img src="<?= base_url('assets/img/slider2.jpg'); ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h3 class="text-primary font-weight-bold">ONLINE</h3>
          <p class="text-primary font-weight-bold">Transaksi pembayaran melalui online.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="row text-center mt-3">
    <?php foreach ($elektronik as $brg) : ?>
      <div class="card ml-3 mb-3" style="width: 16rem;">
        <img src="<?= base_url('uploads/' . $brg->gambar); ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title mb-1"><?= $brg->nama_brg; ?></h5>
          <small><?= $brg->keterangan; ?></small><br>
          <span class="badge badge-pill badge-success mb-3">Rp. <?= number_format($brg->harga, 0, ',', '.'); ?></span>
          <?= anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Kerajang</div>') ?>
          <?= anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-success btn-sm">Detail</div>'); ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>