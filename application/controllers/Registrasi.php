<?php

class Registrasi extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'Registrasi';

    $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama harus diisi.']);
    $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username harus diisi.']);
    $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', ['required' => 'Password harus diisi.', 'matches' => 'Password harus sama dengan Konfirmasi Password.']);
    $this->form_validation->set_rules('password_2', 'Konfirmasi Password', 'required|matches[password_1]', ['required' => 'Konfirmasi Password harus diisi.', 'matches' => 'Konfirmasi Password harus sama dengan Password.']);
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('registrasi', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'id' => null,
        'nama' => $this->input->post('nama'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password_1'),
        'role_id' => 2
      ];

      $this->db->insert('tb_user', $data);
      redirect('auth/login');
    }
  }
}
