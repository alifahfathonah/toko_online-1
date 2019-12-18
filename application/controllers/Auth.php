<?php

class Auth extends CI_Controller
{

  public function login()
  {
    $data['title'] = 'Login';

    $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username harus diisi.']);
    $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password harus diisi.']);
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('form_login', $data);
      $this->load->view('templates/footer');
    } else {
      $auth = $this->Auth_model->cek_login();

      if ($auth == false) {
        $this->session->set_flashdata(
          'pesan',
          '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Username atau Password anda salah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
        );
        redirect('auth/login');
      } else {
        $this->session->set_userdata('username', $auth->username);
        $this->session->set_userdata('role_id', $auth->role_id);

        switch ($auth->role_id) {
          case 1:
            redirect('admin/dashboard_admin');
            break;
          case 2:
            redirect('welcome');
            break;
          default:
            break;
        }
      }
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('role_id');
    session_destroy('username');
    session_destroy('role_id');
    redirect('auth/login');
  }
}
