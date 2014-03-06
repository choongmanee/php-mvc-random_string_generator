<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//change class name to reflect the controller page name
class Words extends CI_Controller {

	public function index()
	{
		$this->load->view('main');
	}

	public function generate()
	{
		$result['word'] = $this->word();
		$result['count'] = $this->counter();
		$this->load->view('main',$result);
	}

	private function word()
	{
		$characters = 'ABCDEFGHIJKLMN0PQRSTUVWXYZ0123456789';
		$word = '';

		for ($count=0; $count < 14; $count++) { 
			$word .= $characters[rand(0,strlen($characters)-1)];
		}
		$this->session->set_userdata('word',$word);
		return $this->session->userdata('word');
	}

	public function counter()
	{
		if ($this->session->userdata('count')) {
			$counter = $this->session->userdata('count');
			$counter ++;
			$this->session->set_userdata('count',$counter);
			return $this->session->userdata('count');
		}
		else{
			$this->session->set_userdata('count',0);
			$counter = $this->session->userdata('count');
			$counter ++;
			$this->session->set_userdata('count',$counter);
			// return "yo";
			return $this->session->userdata('count');
		}
	}

	public function reset()
	{
		$this->session->sess_destroy();
		redirect("/");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */