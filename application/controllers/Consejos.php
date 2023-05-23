<?php
class Consejos extends CI_Controller 
{
    function __construct() {
        parent::__construct();
        $this->load->model('ConsejosM');
    }
   

    public function index(){
        $this->consejos_asunto();
    }



    // Obtiene el sexo de los integrantes de un consejo por CCT
    public function consejos_asunto()
	{
        $this->load->view('common/header');
		$data['variable'] = $this->ConsejosM->consejos_asunto();
		$this->load->view('Consejos/consejos_asunto',$data);
	}
}
?>