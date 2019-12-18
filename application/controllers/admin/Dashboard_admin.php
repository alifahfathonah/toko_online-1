<?php

// sampai video ke : 13
// lanjut video ke : 14
// channel         : Framework Indonesia
// link video      : https://www.youtube.com/watch?v=3v5fOQWUiuA&list=PLce3Eyp7oY98Kfzlhi25W1fEhcd36SXCY

class Dashboard_admin extends CI_Controller
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
    $data['title'] = 'Dashboard Admin';

    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/dashboard', $data);
    $this->load->view('templates_admin/footer');
  }
}
