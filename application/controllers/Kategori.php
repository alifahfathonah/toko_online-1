<?php

class Kategori extends CI_Controller
{

  public function elektronik()
  {
    $data['title'] = 'Elektronik';
    $data['elektronik'] = $this->Kategori_model->data_elektronik()->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('elektronik', $data);
    $this->load->view('templates/footer');
  }

  public function pakaian_pria()
  {
    $data['title'] = 'Pakaian Pria';
    $data['pakaian_pria'] = $this->Kategori_model->data_pakaian_pria()->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('pakaian_pria', $data);
    $this->load->view('templates/footer');
  }

  public function pakaian_wanita()
  {
    $data['title'] = 'Pakaian Wanita';
    $data['pakaian_wanita'] = $this->Kategori_model->data_pakaian_wanita()->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('pakaian_wanita', $data);
    $this->load->view('templates/footer');
  }

  public function pakaian_anak()
  {
    $data['title'] = 'Pakaian Anak-anak';
    $data['pakaian_anak'] = $this->Kategori_model->data_pakaian_anak_anak()->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('pakaian_anak', $data);
    $this->load->view('templates/footer');
  }

  public function peralatan_olahraga()
  {
    $data['title'] = 'Peralatan Olahraga';
    $data['peralatan_olahraga'] = $this->Kategori_model->data_peralatan_olahraga()->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('peralatan_olahraga', $data);
    $this->load->view('templates/footer');
  }
}
