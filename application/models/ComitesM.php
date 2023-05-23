<?pHP
class ComitesM  extends CI_Controller{

function totaltiposcomites()
	{
		$sql = "SELECT tipocomite.Descripcion as Comite,COUNT(comite.idComite)as Total FROM tipocomite, comite 
        WHERE comite.IdTipoComite = tipocomite.IdTipoComite GROUP by tipocomite.Descripcion";
		$query = $this->db->query($sql);
		return $query->result();
	
	}
	function comites_actividades()
	{
		$sql ="SELECT tipocomite.Descripcion, comite.Actividad_1,comite.Actividad_2,comite.Actividad_3,comite.Actividad_4,comite.Actividad_5, cicloescolar.Activo as cicloescolar_activo from comite JOIN tipocomite on tipocomite.IdTipoComite = comite.IdTipoComite join cicloescolar 
		ON cicloescolar.idCicloEscolar = comite.IdCicloEscolar GROUP by tipocomite.Descripcion";
		$query = $this->db->query($sql);
		return $query->result();
	
	}
	function comites_integrantes()
	{
		$sql ="SELECT tipocomite.Descripcion as tipocomite, integrante.nombre from comiteintegrante
		JOIN comite on comiteintegrante.idComite = comite.idComite
		join integrante on comiteintegrante.idIntegrante = integrante.idIntegrante
		JOIN tipocomite on comite.IdTipoComite = tipocomite.IdTipoComite";
		$query = $this->db->query($sql);
		return $query->result();
	
	}
	function comites_sexo_loc_municipio()
	{
		$sql ="SELECT tipocomite.Descripcion as tipocomite, COUNT(comite.idComite)as total, 
		(integrante.genero) as sexo, centrotrabajo.NomLocalidad, municipio.Municipio
		 FROM comiteintegrante JOIN comite on comiteintegrante.idComite = 
		 comite.idComite join integrante on comiteintegrante.idIntegrante = integrante.idIntegrante 
		 JOIN tipocomite on comite.IdTipoComite = tipocomite.IdTipoComite 
		 JOIN centrotrabajo ON centrotrabajo.IdCentroTrabajo = comite.IdCentroTrabajo 
		 join municipio on municipio.ClaveMunicipio = centrotrabajo.ClaveMunicipio 
		 WHERE integrante.genero = 'HOMBRE'OR integrante.genero = 'mujer'
		  GROUP by integrante.genero,tipocomite.Descripcion,municipio.Municipio";
		$query = $this->db->query($sql);
		return $query->result();
	
	}
	function comites_sexo_loc()
	{
		$sql ="SELECT tipocomite.Descripcion as tipocomite, COUNT(comite.idComite)as total, 
		(integrante.genero) as sexo, centrotrabajo.NomLocalidad
		 FROM comiteintegrante JOIN comite on comiteintegrante.idComite = 
		 comite.idComite join integrante on comiteintegrante.idIntegrante = integrante.idIntegrante 
		 JOIN tipocomite on comite.IdTipoComite = tipocomite.IdTipoComite 
		 JOIN centrotrabajo ON centrotrabajo.IdCentroTrabajo = comite.IdCentroTrabajo 
		  GROUP by integrante.genero,tipocomite.Descripcion,centrotrabajo.NomLocalidad";
		$query = $this->db->query($sql);
		return $query->result();
	
	}
     function tiposcomites_sexo()

	{
		$sql ="SELECT tipocomite.Descripcion as tipocomite, COUNT(comite.idComite)as total, (integrante.genero) as sexo FROM comiteintegrante 
		JOIN comite on comiteintegrante.idComite = comite.idComite 
		join integrante on comiteintegrante.idIntegrante = integrante.idIntegrante 
		JOIN tipocomite on comite.IdTipoComite = tipocomite.IdTipoComite 
		GROUP by integrante.genero,tipocomite.Descripcion";
		$query = $this->db->query($sql);
		return $query->result();
	
	}
	
}
?>