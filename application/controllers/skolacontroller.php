    <?php
   class skolacontroller extends CI_Controller {
  public function menu() {
  $data['polozky'] = $this->skolamodel->get_menu_polozky();
  $this->load->view('layout/layout_main', $data);
         }
}

