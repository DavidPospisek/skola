<?php
class Pages extends CI_Controller {

        public function view()
    {            
 $this->load->model('skolamodel');
  $data['polozky'] = $this->skolamodel->get_menu();
$this->load->view('templates/hlavicka', $data);                
	$this->load->view('pages/domu', $data);  
	$this->load->view('templates/paticka');
	}
        public function domu()
        {
        $this->load->model('skolamodel');
          $data['polozky'] = $this->skolamodel->get_menu();
          $this->load->view('templates/hlavicka', $data);                
	$this->load->view('pages/domu', $data);  
	$this->load->view('templates/paticka');
        }
}

