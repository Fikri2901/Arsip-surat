<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_c extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

		$this->load->model('m_surat');
	}

	public function index()
	{
        $data['surat'] = $this->m_surat->getSurat()->result();
		$this->load->view('index',$data);
	}

	public function cari()
	{
        $keyword = $this->input->get('keyword');
        $data = $this->m_surat->ambil_data($keyword);
        $data = array(
			'keyword'	=> $keyword,
			'surat'		=> $data
		);
		$this->load->view('index',$data);
	}

    public function lihat($id)
    {
        $data['berita'] = $this->m_surat->getSuratById($id);
        $this->load->view('lihat',$data);
    }

	public function about()
	{
		$this->load->view('about');
	}

	public function arsip()
	{
		$this->load->view('arsip');
	}

    public function TambahSurat()
	{
		$this->m_surat->addSurat();
        redirect('Surat_c/index');
	}

    public function HapusSurat($id)
    {
        $this->m_surat->deleteSurat($id);
        redirect('Surat_c/index');
    }

    public function UnduhSurat($id)
    {
        if(!empty($id)){
            $file1 = $this->m_surat->GetSuratById($id);
            $file = 'assets/surat/'.$file1->file;
            force_download($file, NULL);
        }
    }

    public function EditSurat($id)
    {
        $this->m_surat->updateSurat($id);
        redirect('Surat_c/index');
    }
    
}
