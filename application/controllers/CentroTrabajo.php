<?php
class CentroTrabajo extends CI_Controller 
{
    function __construct() {
        parent::__construct();
        $this->load->model('CentroTrabajoM');
    }
   

    public function index(){
        $this->sexo_integrante_ct_municipio();
    }

    // Obtiene el sexo de los integrantes de un consejo por CCT
    public function sexo_integrante_ct_municipio()
	{
        $this->load->view('common/header');
		$data['variable'] = $this->CentroTrabajoM->getMatriculaCTMunicipio();
		$this->load->view('CentroTrabajo/matricula_ct_municipio',$data);
	}


    public function ct_localidad()
	{
        $this->load->view('common/header');
		$data['variable'] = $this->CentroTrabajoM->getCCTLocalidadTotal();
		$this->load->view('CentroTrabajo/ct_localidad',$data);
	}
    public function   tiposescuelas ()
    {
        $this->load->view('common/header');
        $data['variable'] = $this->CentroTrabajoM->getCCTtiposdeescuelas();
        $this->load->view('CentroTrabajo/tiposescuelas',$data);
    }
	public function cctcorde_loc_mun()
    {
        $this->load->view('common/header');
        $data['variable'] = $this->CentroTrabajoM->cctcorde_loc_mun();
        $this->load->view('CentroTrabajo/cctcorde_loc_mun',$data);
    }
    public function CCTmunicipios()
	{
        $this->load->view('common/header');
		$data['variable'] = $this->CentroTrabajoM->CCTmunicipios();
		$this->load->view('CentroTrabajo/CCTmunicipios',$data);
	}
   
   
}

?>