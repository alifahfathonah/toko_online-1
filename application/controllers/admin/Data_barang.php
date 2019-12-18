<?php

class Data_barang extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('role_id') != '1') {
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

  public function index()
  {
    $data['title'] = 'Data Barang';
    $data['barang'] = $this->Barang_model->tampil_data()->result();

    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/data_barang', $data);
    $this->load->view('templates_admin/footer');
  }

  public function tambah_aksi()
  {
    $nama_brg = $this->input->post('nama_brg');
    $keterangan = $this->input->post('keterangan');
    $kategori = $this->input->post('kategori');
    $harga = $this->input->post('harga');
    $stok = $this->input->post('stok');
    $gambar = $_FILES['gambar']['name'];

    if ($gambar == '') {
      // 
    } else {
      $config['upload_path'] = './uploads';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';

      // load library
      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('gambar')) {
        echo 'Gambar gagal diupload.';
      } else {
        $gambar = $this->upload->data('file_name');
      }
    }

    $data = [
      'nama_brg' => $nama_brg,
      'keterangan' => $keterangan,
      'kategori' => $kategori,
      'harga' => $harga,
      'stok' => $stok,
      'gambar' => $gambar
    ];

    $this->Barang_model->tambah_barang($data, 'tb_barang');
    redirect('admin/data_barang/index');
  }

  public function edit($id)
  {
    $data['title'] = 'Edit Data Barang';

    $where = ['id_brg' => $id];
    $data['barang'] = $this->Barang_model->edit_barang($where, 'tb_barang')->result();

    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/edit_barang', $data);
    $this->load->view('templates_admin/footer');
  }

  public function update()
  {
    $id = $this->input->post('id_brg');
    $nama_brg = $this->input->post('nama_brg');
    $keteranga = $this->input->post('keterangan');
    $kategori = $this->input->post('kategori');
    $harga = $this->input->post('harga');
    $stok = $this->input->post('stok');

    $data = [
      'nama_brg' => $nama_brg,
      'keterangan' => $keteranga,
      'kategori' => $kategori,
      'harga' => $harga,
      'stok' => $stok
    ];

    $where = ['id_brg' => $id];

    $this->Barang_model->update_data($where, $data, 'tb_barang');
    redirect('admin/data_barang/index');
  }

  public function hapus($id)
  {
    $where = ['id_brg' => $id];
    $this->Barang_model->hapus_data($where, 'tb_barang');
    redirect('admin/data_barang/index');
  }
}
