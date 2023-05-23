<?php

class IntegrantesM extends CI_Controller 
{
    function getsexointengrantes()
	{
		$sql = "SELECT DISTINCT genero as Sexo,COUNT(*)AS total FROM integrante GROUP BY genero;";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	function getintegrantes_tienenhijos()
	{
		$sql = "SELECT integrante.tieneHijos as Nointegrantes, COUNT(*) as total FROM integrante GROUP BY integrante.tieneHijos;";
		$query = $this->db->query($sql);
		return $query->result();
	}
	function integrantes_corde ()
	{
		$sql = "SELECT corde.NombreCorde as corde,COUNT(integrante.idIntegrante) as total_integrantes FROM centrotrabajo 
		JOIN corde ON corde.IdCorde = centrotrabajo.IdCorde
		 join integrante ON integrante.IdCentroTrabajo = centrotrabajo.IdCentroTrabajo 
         GROUP BY corde.NombreCorde";
		$query = $this->db->query($sql);
		return $query->result();
	}
	function sexomunicipio ()
	{
		$sql = "SELECT municipio.Municipio, SUM(CASE WHEN genero='HOMBRE' THEN 1 ELSE 0 END) as hombres, 
		SUM(CASE WHEN genero='MUJER' THEN 1 ELSE 0 END) as mujeres FROM centrotrabajo  
		JOIN integrante on integrante.IdCentroTrabajo = centrotrabajo.IdCentroTrabajo 
		JOIN municipio ON municipio.ClaveMunicipio = centrotrabajo.ClaveMunicipio 
		GROUP by municipio.Municipio";
		$query = $this->db->query($sql);
		return $query->result();
	}
	function total_sex_corde ()
	{
		$sql = "SELECT corde.NombreCorde as Corde, SUM(CASE WHEN genero='HOMBRE' THEN 1 ELSE 0 END) as hombres, 
		SUM(CASE WHEN genero='MUJER' THEN 1 ELSE 0 END) as mujeres FROM centrotrabajo  
		JOIN corde ON corde.IdCorde = centrotrabajo.IdCorde
		JOIN integrante on integrante.IdCentroTrabajo = centrotrabajo.IdCentroTrabajo 
		GROUP by corde.NombreCorde";
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>
















