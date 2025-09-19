<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Cek login
        if (!$this->session->userdata('logged_in')) {
            redirect('welcome');
        }
        $this->load->model('Ab_rental');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // Data untuk dashboard
        $data['total_alat'] = $this->Ab_rental->count_alat();
        $data['total_customer'] = $this->Ab_rental->count_customer();
        $data['total_transaksi'] = $this->Ab_rental->count_transaksi();
        $data['total_pendapatan'] = $this->Ab_rental->total_pendapatan();
        $data['transaksi_terbaru'] = $this->Ab_rental->get_transaksi_terbaru();
        $data['alat_disewa'] = $this->Ab_rental->get_alat_disewa();
        
        $this->load->view('admin/header');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
    }

    // CRUD untuk Alat Berat
    public function alatberat()
    {
        $data['alat'] = $this->Ab_rental->get_all_alat();
        
        $this->load->view('admin/header');
        $this->load->view('admin/alatberat', $data);
        $this->load->view('admin/footer');
    }

    public function tambahalatberat()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/tambahalatberat');
        $this->load->view('admin/footer');
    }

    public function simpanalatberat()
    {
        $this->form_validation->set_rules('nama_alat', 'Nama Alat', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('plat_nomor', 'Plat Nomor', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|numeric');
        $this->form_validation->set_rules('harga_sewa', 'Harga Sewa', 'required|numeric');
        
        if ($this->form_validation->run() == FALSE) {
            $this->tambahalatberat();
        } else {
            $data = array(
                'nama_alat' => $this->input->post('nama_alat'),
                'merk' => $this->input->post('merk'),
                'jenis' => $this->input->post('jenis'),
                'plat_nomor' => $this->input->post('plat_nomor'),
                'tahun' => $this->input->post('tahun'),
                'harga_sewa' => $this->input->post('harga_sewa'),
                'status' => 'tersedia'
            );
            
            $this->Ab_rental->insert_alat($data);
            $this->session->set_flashdata('pesan', 'Data alat berat berhasil ditambahkan!');
            redirect('admin/alatberat');
        }
    }

    public function editalatberat($id)
    {
        $data['alat'] = $this->Ab_rental->get_alat_by_id($id);
        
        $this->load->view('admin/header');
        $this->load->view('admin/editalatberat', $data);
        $this->load->view('admin/footer');
    }

    public function updatealatberat()
    {
        $this->form_validation->set_rules('nama_alat', 'Nama Alat', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('plat_nomor', 'Plat Nomor', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|numeric');
        $this->form_validation->set_rules('harga_sewa', 'Harga Sewa', 'required|numeric');
        
        if ($this->form_validation->run() == FALSE) {
            $id = $this->input->post('id_alat');
            $this->editalatberat($id);
        } else {
            $id = $this->input->post('id_alat');
            $data = array(
                'nama_alat' => $this->input->post('nama_alat'),
                'merk' => $this->input->post('merk'),
                'jenis' => $this->input->post('jenis'),
                'plat_nomor' => $this->input->post('plat_nomor'),
                'tahun' => $this->input->post('tahun'),
                'harga_sewa' => $this->input->post('harga_sewa')
            );
            
            $this->Ab_rental->update_alat($id, $data);
            $this->session->set_flashdata('pesan', 'Data alat berat berhasil diperbarui!');
            redirect('admin/alatberat');
        }
    }

    public function hapusalatberat($id)
    {
        $this->Ab_rental->delete_alat($id);
        $this->session->set_flashdata('pesan', 'Data alat berat berhasil dihapus!');
        redirect('admin/alatberat');
    }

    // CRUD untuk Customer
    public function customer()
    {
        $data['customer'] = $this->Ab_rental->get_all_customer();
        
        $this->load->view('admin/header');
        $this->load->view('admin/customer', $data);
        $this->load->view('admin/footer');
    }

    public function tambahcustomer()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/tambahcustomer');
        $this->load->view('admin/footer');
    }

    public function simpancustomer()
    {
        $this->form_validation->set_rules('nama_customer', 'Nama Customer', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required');
        $this->form_validation->set_rules('no_ktp', 'No KTP', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        if ($this->form_validation->run() == FALSE) {
            $this->tambahcustomer();
        } else {
            $data = array(
                'nama_customer' => $this->input->post('nama_customer'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'no_ktp' => $this->input->post('no_ktp'),
                'email' => $this->input->post('email')
            );
            
            $this->Ab_rental->insert_customer($data);
            $this->session->set_flashdata('pesan', 'Data customer berhasil ditambahkan!');
            redirect('admin/customer');
        }
    }

    public function editcustomer($id)
    {
        $data['customer'] = $this->Ab_rental->get_customer_by_id($id);
        
        $this->load->view('admin/header');
        $this->load->view('admin/editcustomer', $data);
        $this->load->view('admin/footer');
    }

    public function updatecustomer()
    {
        $this->form_validation->set_rules('nama_customer', 'Nama Customer', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required');
        $this->form_validation->set_rules('no_ktp', 'No KTP', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        if ($this->form_validation->run() == FALSE) {
            $id = $this->input->post('id_customer');
            $this->editcustomer($id);
        } else {
            $id = $this->input->post('id_customer');
            $data = array(
                'nama_customer' => $this->input->post('nama_customer'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'no_ktp' => $this->input->post('no_ktp'),
                'email' => $this->input->post('email')
            );
            
            $this->Ab_rental->update_customer($id, $data);
            $this->session->set_flashdata('pesan', 'Data customer berhasil diperbarui!');
            redirect('admin/customer');
        }
    }

    public function hapuscustomer($id)
    {
        $this->Ab_rental->delete_customer($id);
        $this->session->set_flashdata('pesan', 'Data customer berhasil dihapus!');
        redirect('admin/customer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('welcome');
    }
}
?>
