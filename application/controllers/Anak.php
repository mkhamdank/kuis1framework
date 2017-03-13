<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anak extends CI_Controller {

	public function index($idPegawai)
	{
		$id = $idPegawai;
		$this->load->model('pegawai_model');
    	$data['anak_array'] = $this->pegawai_model->getAnakByPegawai($id);
    	$data['pegawai'] = $this->pegawai_model->getNamaPegawai($id);
		$this->load->view('anak',$data,$id);
	}

}

/* End of file Anak.php */
/* Location: ./application/controllers/Anak.php */
 ?>