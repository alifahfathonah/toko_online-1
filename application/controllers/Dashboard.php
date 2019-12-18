<?php

class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('role_id') != '2') {
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Anda belum melakukan login!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('auth/login');
    }
  }

  public function tambah_ke_keranjang($id)
  {
    $barang = $this->Barang_model->find($id);

    $data = [
      'id' => $barang->id_brg,
      'qty' => 1,
      'price' => $barang->harga,
      'name' => $barang->nama_brg
    ];
    $this->cart->insert($data);
    redirect('welcome');
  }

  public function detail_keranjang()
  {
    $data['title'] = 'Detail Keranjang';

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('keranjang', $data);
    $this->load->view('templates/footer');
  }

  public function hapus_keranjang()
  {
    $this->cart->destroy();
    redirect('welcome');
  }

  public function pembayaran()
  {
    $data['title'] = 'Pembayaran';

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('pembayaran', $data);
    $this->load->view('templates/footer');
  }

  public function proses_pesanan()
  {
    $data['title'] = 'Proses Pesanan';

    $is_proccessed = $this->Invoice_model->index();
    if ($is_proccessed) {
      $this->cart->destroy();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('proses_pesanan', $data);
      $this->load->view('templates/footer');
    } else {
      echo 'Maaf, Pesanan anda gagal diproses.';
    }
  }

  public function detail($id_brg)
  {
    $data['title'] = 'Detail';
    $data['barang'] = $this->Barang_model->detail_brg($id_brg);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('detail_barang', $data);
    $this->load->view('templates/footer');
  }
}
