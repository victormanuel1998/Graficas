<?php
class Acta extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('ActaM');
    }
   

    public function index(){
        $this-> acuerdos_tiposcomites();
    }

    public function acuerdos_tiposcomites()
	{
        $this->load->view('common/header');
		$data['variable'] = $this->ActaM->getacuerdos_tiposcomites();
		$this->load->view('Acta/acuerdo_tiposcomites',$data);
	}
    public function acuerdos_tiposcomites_localidad()
	{
        $this->load->view('common/header');
		$data['variable'] = $this->ActaM->acuerdos_tiposcomites_localidad();
		$this->load->view('Acta/acuerdos_tiposcomites_localidad',$data);
	}
    public function acuerdos_tiposcomites_loc_Mun()
    
	{
        $this->load->view('common/header');
		$data['variable'] = $this->ActaM->acuerdos_tiposcomites_loc_Muni();
		$this->load->view('Acta/acuerdos_tiposcomites_loc_Mun',$data);
	}
    public function total_tipos_actas()
    
	{
        $this->load->view('common/header');
		$data['variable'] = $this->ActaM->total_tipos_actas();
		$this->load->view('Acta/total_tipos_actas',$data);
	}
    
}
?>
