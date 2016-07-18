 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if(!$this->session->has_userdata('logged_in'))
	   	{
	   		// echo $this->session->userdata('logged_in');
	   		redirect('login', 'refresh');
	   	}
	}

	public function index()
	{
		$session_data = $this->session->userdata('logged_in');

		$var['count_mhs'] = $this->db
			->select('*')
			->from('data_mhs')
			->get()->num_rows();

		$var['count_mhsLaki'] = $this->db
			->select('nrp')
			->from('data_mhs')
			->like('j_kelamin','0')
			->get()->num_rows();

		$var['count_mhsWanita'] = $this->db
			->select('nrp')
			->from('data_mhs')
			->like('j_kelamin','1')
			->get()->num_rows();

		$var['count_mhsCuti'] = $this->db
			->select('nrp')
			->from('data_mhs')
			->like('status','0')
			->get()->num_rows();

		$var['user'] = $this->db
		->select('*')
		->from('data_mhs')
		->get()->result_array();
		$this->show('dashboard1',$var,'Main');
	}


	private function show($content, $var = array(), $a = NULL){
		$view['active']=$a;
		$view['content']=$this->load->view($content,$var,TRUE);
		$this->load->view('dashboard1',$view);
	}

	public function createMhs()
	{
		$nrp=$this->input->post('nrp');
    	$nama=$this->input->post('nama');
    	$alamat=$this->input->post('alamat');
    	$ttl=$this->input->post('ttl');
    	$j_kelamin=$this->input->post('j_kelamin');
    	$status=$this->input->post('status');
    	$thn_masuk=$this->input->post('thn_masuk');

    	$data = array('nrp'=>$nrp, 'nama' => $nama, 'alamat' => $alamat,'ttl' => $ttl,'j_kelamin' => $j_kelamin,'status' => $status,'thn_masuk' => $status,'thn_masuk' => $thn_masuk);
    	$this->db->insert('data_mhs',$data);

    	if (condition) {
    		# code...
    	}
    	redirect('http://localhost/test/index.php/main');
	}
	public function editMhs()
	{
		$nrp=$this->input->post('nrp');
    	$nama=$this->input->post('nama');
    	$alamat=$this->input->post('alamat');
    	$ttl=$this->input->post('ttl');
    	$j_kelamin=$this->input->post('j_kelamin');
    	$status=$this->input->post('status');
    	$thn_masuk=$this->input->post('thn_masuk');

    	$data = array('nrp'=>$nrp, 'nama' => $nama, 'alamat' => $alamat,'ttl' => $ttl,'j_kelamin' => $j_kelamin,'status' => $status,'thn_masuk' => $status,'thn_masuk' => $thn_masuk);
	    
    	$this->db->where('nrp',$nrp);
	    $this->db->update('data_mhs',$data);

	    redirect('http://localhost/test/index.php/main');	
	}

	public function deleteMhs($nrp)
	{
		$data = array('nrp => $nrp');
		$this->db->where('nrp',$nrp)->from('data_mhs')->delete();
		redirect('http://localhost/test/index.php/main');
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');	
		session_destroy();
		redirect('http://localhost/test/index.php/login');
	}
}
