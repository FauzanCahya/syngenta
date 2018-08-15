<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testing_germination extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$data = $this->session->userdata('sign_in');
        // $nama = $data['id'];

        // if($nama == "" || $nama == null){
        // 	redirect('login_c','refresh');
        // }
	}

	public function index()
	{
		$data = array(
			'title'    	=> 'Master Data',
			'sub_menu' 	=> 'master_data',
			'sub_menu1'	=> 'master_data',
			'page' 	   	=> 'testing_dvn_v',
			'page2' 	=> 'testing_germination_v',
			'menu' 	   	=> 'germination',
			'menu2'		=> '',
		);

		$this->load->view('home_v',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */