<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function index($idPegawai)
	{
		$id = $idPegawai;
		$this->load->model('pegawai_model');
    	$data['jabatan_array'] = $this->pegawai_model->getJabatanByPegawai($id);
    	$data['pegawai'] = $this->pegawai_model->getNamaPegawai($id);
		$this->load->view('jabatan',$data,$id);
	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>