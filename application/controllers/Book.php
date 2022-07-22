<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Book_model');
        $this->load->model('Auth_pasien');
    }

    public function index()
    {
        $username = $this->session->EMAIL_PASIEN;

        $a = $this->auth_pasien->getUser2($username);
        $a2 = array(
            'ID_PASIEN' => $a->ID_PASIEN,
        );
        $id = $a2['ID_PASIEN'];

        $cek_status = $this->Book_model->cekStatus($id);

        $cek = array(
            'STATUS_AKUN' => $cek_status->STATUS_AKUN,
        );

        if ($cek['STATUS_AKUN'] == TRUE) {
            $data['sesi'] = $this->Book_model->getSesi();
            render4('pasien/book/index', $data);
            // C:\xampp\htdocs\telemedicine\assets\pasien\images\logo
        } else {
            $this->session->set_flashdata('message', '
                <div class="modal animated fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered w-80">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="cookiesContent" id="cookiesPopup">
                                    <img class="img-edit mb-4" src="https://ik.imagekit.io/dxofqajmq/telemedicine/resume_kjKF_l3Bx.png?ik-sdk-version=javascript-1.4.3&updatedAt=1658124642679" alt="cookies-img" />
                                    <h6 class="member__name mt-2"><a href="#">Harap Lengkapi Data Diri Anda dan Pastikan Akun Anda Sudah Terverifikasi Sebelum Melakukan Konsultasi</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }



    public function getDataSesi()
    {
        $id_sesi = $this->input->post('sesi');
        $getdatasesi = $this->Book_model->getSesi($id_sesi);
        echo json_encode($getdatasesi);
    }

    public function getJadwal()
    {
        //get data
        $date = $this->input->post('tgl_konsul');
        $sesi = $this->input->post('sesi');
        //list hari to get id jadwal
        $daftar_hari = array(
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        );

        $namahari = date('l', strtotime($date));
        //echo hari
        $day = $daftar_hari[$namahari];

        if ($day == 'Minggu') {
            $this->session->set_flashdata('nothing', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Tidak Ada Jadwal Pada Hari Libur!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>      
            ');

            redirect('book/index');
        } elseif ($day == 'Sabtu') {
            $this->session->set_flashdata('nothing', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Tidak Ada Jadwal Pada Hari Libur!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>      
            ');

            redirect('book/index');
        } else {
            //get id jadwal
            $getJadwal = $this->Book_model->getIdJadwal($day);

            $jadwal = array(
                'ID_JADWAL' => $getJadwal->ID_JADWAL,
                'HARI' => $getJadwal->HARI,
                'KUOTA' => $getJadwal->KUOTA
            );

            $session = array(
                'TGL_KONSUL' => $date,
                'SESI' => $sesi,
            );

            $this->session->set_userdata($session);

            $id = $jadwal['ID_JADWAL'];

            $getDetJad = $this->Book_model->getDetailJadwal2($id, $sesi);
            $get = array(
                'ID_DETAIL_JADWAL' => $getDetJad->ID_DETAIL_JADWAL,
            );
            $id_det_jad = $get['ID_DETAIL_JADWAL'];

            if($id_det_jad != NULL){
                $data['data'] = $this->Book_model->getDetailJadwal($id, $sesi);
                render4('pasien/book/data_dokter', $data);
                
            }else{
                $this->session->set_flashdata('nothing', '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Tidak Ada Jadwal Dokter Pada Hari Ini!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>      
                ');

                redirect('book/index');
            }

        }
    }

    public function inputKel($id)
    {
        $data['detail'] = $this->Book_model->getIdDetJadwal($id);
        render4('pasien/book/keluhan', $data);
    }

    public function getKel($id)
    {
        //get data
        $date = $this->session->TGL_KONSUL;
        $sesi = $this->session->SESI;

        //get data sesi
        $getSesi = $this->Book_model->getJam($sesi);
        $sesi = array(
            'JAM' => $getSesi->JAM
        );

        //trim string
        $jam = substr($sesi['JAM'], 0, -6);

        //get keluhan
        $keluhan = $this->input->post('keluhan');

        // get id_pasien
        $user = $this->session->EMAIL_PASIEN;
        $id_user = $this->auth_pasien->getUser($user);
        $user = array(
            'ID_PASIEN' => $id_user->ID_PASIEN
        );

        // get id_dokter
        $detail_jadwal = $this->Book_model->getIdDetJadwal($id);


        // zoom generate
        $getZoom = $this->Book_model->genZoom($date, $jam);

        $url = $getZoom->join_url;

        //insert data
        $data = array(
            'ID_PASIEN' => $user['ID_PASIEN'],
            'ID_DOKTER' => $detail_jadwal[0]['ID_DOKTER'],
            'TGL_KONSUL' => $date,
            'KELUHAN' => $keluhan,
            'BIAYA' => 100000,
            'LINK_ZOOM' => $url
        );

        $this->db->insert('konsultasi', $data);

        render3('pasien/book/success');
    }
}
