<?php 
class ConsejosM extends CI_Controller
{
  function consejos_asunto(){
	$sql = "SELECT tipoconsejo.Descripcion, centrotrabajo.NomLocalidad, actaconsejo.AsuntoGeneral FROM actaconsejo JOIN centrotrabajo on centrotrabajo.IdCentroTrabajo= actaconsejo.IdCentroTrabajo JOIN consejo on consejo.idConsejo = actaconsejo.IdConsejo 
	JOIN tipoconsejo on consejo.IdTipoConsejo = tipoconsejo.IdTipoConsejo
	 GROUP by actaconsejo.AsuntoGeneral,centrotrabajo.NomLocalidad ORDER by centrotrabajo.NomLocalidad";
		$query = $this->db->query($sql);
		return $query->result();
  }

}	
?>