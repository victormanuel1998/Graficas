<?php
class Programa extends CI_Controller 
{
    function __construct() {
        parent::__construct();
        $this->load->model('ProgramaM');
    }
    public function index(){
        $this->Totalprogramaestatal_cct();
    }
    public function Totalprogramaestatal_cct()
	{
        $this->load->view('common/header');
		$data['variable'] = $this->ProgramaM->Totalprogramaestatal_cct();
		$this->load->view('Programa/Totalprogramaestatal_cct',$data);
	}
    public function programaestatal_loc()
	{
        $this->load->view('common/header');
		$data['variable'] = $this->ProgramaM->programaestatal_loc();
		$this->load->view('Programa/programaestatal_loc',$data);
	}
    public function programaestatal_loc_mun()
	{
        $this->load->view('common/header');
		$data['variable'] = $this->ProgramaM->programaestatal_loc_mun();
		$this->load->view('Programa/programaestatal_loc_mun',$data);
	}
    public function programamunicipal_cct()
	{
        $this->load->view('common/header');
		$data['variable'] = $this->ProgramaM->programamunicipal_cct();
		$this->load->view('Programa/programamunicipal_cct',$data);
	}

}
    ?>