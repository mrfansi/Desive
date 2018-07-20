<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('Gudang');
    }

    public function master_barang()
    {
        $this->load->model('model_bahan');

        $data['members'] = $this->model_bahan->all()->result();
        $this->load->view('Gudang_mst_barang', $data);
    }

    public function master_supplier()
    {
        $this->load->model('model_supplier');

        $data['members'] = $this->model_supplier->all()->result();
        $this->load->view('Gudang_mst_supplier', $data);
    }

    public function masuk_barang()
    {
        $this->load->model('model_brg_masuk');

        $data['members'] = $this->model_brg_masuk->all()->result();
        $this->load->view('Gudang_masuk_barang', $data);
    }

    public function keluar_barang()
    {
        $this->load->model('model_brg_keluar');

        $data['members'] = $this->model_brg_keluar->all()->result();
        $this->load->view('Gudang_keluar_barang', $data);
    }

    public function retur_barang()
    {
        $this->load->model('model_brg_retur');

        $data['members'] = $this->model_brg_retur->all()->result();
        $this->load->view('Gudang_retur_barang', $data);
    }

    public function crud_master_barang($action, $id = '')
    {
        $this->load->model('model_bahan');

        switch ($action) {
            case 'tambah':
                $this->load->view('Gudang_mst_barang_tambah');
                break;
            case 'tambah_simpan':
                $data = array(
                    'kode_jenis' => $this->input->post('kode_jenis'),
                    'nama_bahan' => $this->input->post('nama_bahan'),
                    'stok' => $this->input->post('stok'),
                    'min_stok' => $this->input->post('min_stok')
                );

                if ($this->model_bahan->insert($data)) {
                    $this->session->set_flashdata('berhasil', 'Data berhasil disimpan');
                } else {
                    $this->session->set_flashdata('gagal', 'Data gagal disimpan');
                }

                $this->crud_master_barang('tambah');
                break;
            case 'edit':
                if ($id == '') {
                    redirect('gudang/master_barang');
                }

                $member = $this->model_bahan->get($id);

                $data['id_bahan'] = $member->id_bahan;
                $data['kode_jenis'] = $member->kode_jenis;
                $data['nama_bahan'] = $member->nama_bahan;
                $data['stok'] = $member->stok;
                $data['min_stok'] = $member->min_stok;

                $this->load->view('Gudang_mst_barang_edit', $data);
                break;
            case 'edit_simpan':
                $data = array(
                    'id_bahan' => $this->input->post('id_bahan'),
                    'kode_jenis' => $this->input->post('kode_jenis'),
                    'nama_bahan' => $this->input->post('nama_bahan'),
                    'stok' => $this->input->post('stok'),
                    'min_stok' => $this->input->post('min_stok')
                );

                if ($this->model_bahan->update($data)) {
                    $this->session->set_flashdata('berhasil', 'Data berhasil disimpan');
                } else {
                    $this->session->set_flashdata('gagal', 'Data gagal disimpan');
                }

                $this->crud_master_barang('edit', $data['id_bahan']);
                break;

            case 'delete':
                if ($id == '') {
                    redirect('gudang/master_barang');
                }

                if ($this->model_bahan->delete($id)) {
                    $this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
                } else {
                    $this->session->set_flashdata('gagal', 'Data gagal dihapus');
                }

                redirect('gudang/master_barang');
                break;
        }
    }

    public function crud_master_supplier($action, $id = '')
    {
        $this->load->model('model_supplier');

        switch ($action) {
            case 'tambah':
                $this->load->view('Gudang_mst_supplier_tambah');
                break;
            case 'tambah_simpan':
                $data = array(
                    'nama_supplier' => $this->input->post('nama_supplier'),
                    'alamat' => $this->input->post('alamat'),
                    'telp' => $this->input->post('telp'),
                );

                if ($this->model_supplier->insert($data)) {
                    $this->session->set_flashdata('berhasil', 'Data berhasil disimpan');
                } else {
                    $this->session->set_flashdata('gagal', 'Data gagal disimpan');
                }

                $this->crud_master_supplier('tambah');
                break;
            case 'edit':
                if ($id == '') {
                    redirect('gudang/master_supplier');
                }

                $member = $this->model_supplier->get($id);

                $data['id_supplier'] = $member->id_supplier;
                $data['nama_supplier'] = $member->nama_supplier;
                $data['alamat'] = $member->alamat;
                $data['telp'] = $member->telp;

                $this->load->view('Gudang_mst_supplier_edit', $data);
                break;
            case 'edit_simpan':
                $data = array(
                    'id_supplier' => $this->input->post('id_supplier'),
                    'nama_supplier' => $this->input->post('nama_supplier'),
                    'alamat' => $this->input->post('alamat'),
                    'telp' => $this->input->post('telp'),
                );

                if ($this->model_supplier->update($data)) {
                    $this->session->set_flashdata('berhasil', 'Data berhasil disimpan');
                } else {
                    $this->session->set_flashdata('gagal', 'Data gagal disimpan');
                }

                $this->crud_master_supplier('edit', $data['id_supplier']);
                break;

            case 'delete':
                if ($id == '') {
                    redirect('gudang/master_supplier');
                }

                if ($this->model_supplier->delete($id)) {
                    $this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
                } else {
                    $this->session->set_flashdata('gagal', 'Data gagal dihapus');
                }

                redirect('gudang/master_supplier');
                break;
        }
    }

    public function crud_masuk_barang($action, $id = '')
    {
        $this->load->model('model_brg_masuk');

        switch ($action) {
            case 'tambah':
                $this->load->model('model_supplier');
                $this->load->model('model_user');

                $data['suppliers'] = $this->model_supplier->all()->result();
                $data['users'] = $this->model_user->all()->result();
                $this->load->view('Gudang_masuk_barang_tambah', $data);
                break;
            case 'tambah_simpan':
                $data = array(
                    'tgl_masuk' => $this->input->post('tgl_masuk'),
                    'kode_jenis' => $this->input->post('kode_jenis'),
                    'nama_bahan' => $this->input->post('nama_bahan'),
                    'jumlah' => $this->input->post('jumlah'),
                    'id_supplier' => $this->input->post('id_supplier'),
                    'id_user' => $this->input->post('id_user'),
                );

                if ($this->model_brg_masuk->insert($data)) {
                    $this->session->set_flashdata('berhasil', 'Data berhasil disimpan');
                } else {
                    $this->session->set_flashdata('gagal', 'Data gagal disimpan');
                }

                $this->crud_masuk_barang('tambah');
                break;
            case 'edit':
                $this->load->model('model_supplier');
                $this->load->model('model_user');

                if ($id == '') {
                    redirect('gudang/masuk_barang');
                }

                $member = $this->model_brg_masuk->get($id);

                $data['suppliers'] = $this->model_supplier->all()->result();
                $data['users'] = $this->model_user->all()->result();

                $data['id_barang_m'] = $member->id_barang_m;
                $data['tgl_masuk'] = $member->tgl_masuk;
                $data['kode_jenis'] = $member->kode_jenis;
                $data['nama_bahan'] = $member->nama_bahan;
                $data['jumlah'] = $member->jumlah;
                $data['id_supplier'] = $member->id_supplier;
                $data['id_user'] = $member->id_user;

                $this->load->view('Gudang_masuk_barang_edit', $data);
                break;
            case 'edit_simpan':
                $data = array(
                    'id_barang_m' => $this->input->post('id_barang_m'),
                    'tgl_masuk' => $this->input->post('tgl_masuk'),
                    'kode_jenis' => $this->input->post('kode_jenis'),
                    'nama_bahan' => $this->input->post('nama_bahan'),
                    'jumlah' => $this->input->post('jumlah'),
                    'id_supplier' => $this->input->post('id_supplier'),
                    'id_user' => $this->input->post('id_user'),
                );

                if ($this->model_brg_masuk->update($data)) {
                    $this->session->set_flashdata('berhasil', 'Data berhasil disimpan');
                } else {
                    $this->session->set_flashdata('gagal', 'Data gagal disimpan');
                }

                $this->crud_masuk_barang('edit', $data['id_barang_m']);
                break;

            case 'delete':
                if ($id == '') {
                    redirect('gudang/masuk_barang');
                }

                if ($this->model_brg_masuk->delete($id)) {
                    $this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
                } else {
                    $this->session->set_flashdata('gagal', 'Data gagal dihapus');
                }

                redirect('gudang/masuk_barang');
                break;
        }
    }

    public function crud_keluar_barang()
    {

    }

    public function crud_retur_barang()
    {

    }
}
