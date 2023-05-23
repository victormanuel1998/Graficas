<?php
class Comites extends CI_Controller{

    
    function __construct() {
        parent::__construct();
        $this->load->model('ComitesM');
    }
    public function index(){
        $this->totaltiposcomites();
    }
    public function totaltiposcomites()
	{
        $this->load->view('common/header');
		$data['variable'] = $this->ComitesM->totaltiposcomites();
		$this->load->view('Comites/totaltiposcomites',$data);
	}
      public function comites_actividades()
	{
        $this->load->view('common/header');
		$data['variable'] = $this->ComitesM->comites_actividades();
		$this->load->view('Comites/comites_actividades',$data);
	}
    public function comites_integrantes()
	{
        $this->load->view('common/header');
		$data['variable'] = $this->ComitesM->comites_integrantes();
		$this->load->view('Comites/comites_integrantes',$data);
	}
    public function tiposcomites_sexo()
	{
        $this->load->view('common/header');
		$data['variable'] = $this->ComitesM->tiposcomites_sexo();
		$this->load->view('Comites/tiposcomites_sexo',$data);
	}
    public function comites_sexo_loc_municipio()
	{
        $this->load->view('common/header');
		$data['variable'] = $this->ComitesM->comites_sexo_loc_municipio();
		$this->load->view('Comites/comites_sexo_loc_municipio',$data);
	}
	public function comites_sexo_loc()
	{
        $this->load->view('common/header');
		$data['variable'] = $this->ComitesM->comites_sexo_loc();
		$this->load->view('Comites/comites_sexo_loc',$data);
	}


}
?>