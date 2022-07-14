<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_pasien extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pasien_model');
    $this->load->library('form_validation');
  }
  public function profile()
  {
    $username = $this->session->EMAIL_PASIEN;

    $data = $this->auth_pasien->getUser2($username);
    $id = $data->ID_PASIEN;
    $user['pasien'] = $this->Pasien_model->getPasienByID($id);
    render4('pasien/profile/index', $user);

    // $data['pasien'] = $this->Pasien_model->getPasienByID($id);
    // render4('pasien/profile/index', $data);
  }

  public function editProfile($id)
  {
    $this->form_validation->set_rules('kelahiran', 'Kelahiran', 'required');
    $this->form_validation->set_rules('nik', 'NIK', 'required|numeric|exact_length[16]');
    $this->form_validation->set_rules('hp', 'HP', 'required|numeric');
    $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
    $this->form_validation->set_rules('gol', 'Golongan Darah', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    if ($this->form_validation->run() == FALSE) {
      $data['pasien'] = $this->Pasien_model->getPasienByID($id);
      $data['pekerjaan'] = $this->Pasien_model->getPekerjaan();
      $data['gol'] = $this->Pasien_model->getGol();
      $data['provinsi'] = $this->Pasien_model->getProv();
      $data['kota'] = $this->Pasien_model->getKab();
      render4('pasien/profile/edit_profile', $data); //helper
    } else {
      // $foto = $_FILES['foto'];
      $ktp = $_FILES['ktp'];
      // if ($foto == '') {
      // } else {
      //   $file_name = $this->session->ID_PASIEN;
      //   $config['upload_path']          = './assets/foto_profil';
      //   $config['allowed_types']        = 'jpg|jpeg|png';
      //   $config['file_name']            = $file_name;
      //   $config['overwrite']            = true;
      //   // $config['max_size']             = 1024; // 1MB
      //   // $config['max_width']            = 1080;
      //   // $config['max_height']           = 1080;
      //   $this->load->library('upload', $config);
      //   if (!$this->upload->do_upload('foto')) {
      //     echo ('gagal');
      //     $data['error'] = $this->upload->display_errors();
      //   } else {
      //     $uploaded_data = $this->upload->data();
      //   }
      // }
      if ($ktp == '') {
      } else {
        $file_name = $this->session->ID_PASIEN;
        $config['upload_path']          = './assets/foto_ktp';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['file_name']            = $file_name;
        $config['overwrite']            = true;
        // $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1080;
        // $config['max_height']           = 1080;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('ktp')) {
          echo ('gagal');
          $data['error'] = $this->upload->display_errors();
        } else {
          $uploaded_data_ktp = $this->upload->data();
        }
      }
      $this->Pasien_model->updateProfile($id, $uploaded_data_ktp);
      redirect('profil_pasien/profile/' . $id);
    }
  }

  public function getDataKabupaten()
  {
    $id_provinsi = $this->input->post('provinsi');
    $getdatakab = $this->Pasien_model->getKota($id_provinsi);
    echo json_encode($getdatakab);
  }

  public function getDataKecamatan()
  {
    $id_kabupaten = $this->input->post('kabupaten');
    $getdatakec = $this->Pasien_model->getKecamatan($id_kabupaten);
    echo json_encode($getdatakec);
  }

  public function getDataKelurahan()
  {
    $id_kecamatan = $this->input->post('kecamatan');
    $getdatakel = $this->Pasien_model->getKelurahan($id_kecamatan);
    echo json_encode($getdatakel);
  }
}
