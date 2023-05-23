<?php
class Integrantes extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('IntegrantesM');
    }

    public function index(){
        $this->sexointegrantes();
       
    }
    public function sexointegrantes ()
	{
        $this->load->view('common/header');
		$data['variable'] = $this->IntegrantesM->getsexointengrantes();
		$this->load->view('Integrantes/sexointengrantes',$data);
	}
    public function   integrantescnhijos()
    {
        $this->load->view('common/header');
        $data['variable'] = $this->IntegrantesM->getintegrantes_tienenhijos();
        $this->load->view('Integrantes/integrantescnhijos',$data);
    }
    public function   integrantes_corde()
    {
        $this->load->view('common/header');
        $data['variable'] = $this->IntegrantesM->integrantes_corde ();
        $this->load->view('Integrantes/integrantes_corde',$data);
    }
    public function   sexomunicipio()
    {
        $this->load->view('common/header');
        $data['variable'] = $this->IntegrantesM->sexomunicipio ();
        $this->load->view('Integrantes/sexomunicipio',$data);
    }
 public function total_sex_corde(){
    $this->load->view('common/header');
    $data['variable'] = $this->IntegrantesM->total_sex_corde ();
    $this->load->view('Integrantes/total_sex_corde',$data);

 }
   
   
}
?>

