<?php /**
 * 
 */
class CentroTrabajoM extends CI_Controller
{
	function getMatriculaCTMunicipio()
	{
		$sql = "Select SUM(centrotrabajo.MatriculaHombre) as MatriculaHombre,
		 SUM(centrotrabajo.MatriculaMujer) as MatriculaMujer, municipio.Municipio 
		 FROM centrotrabajo, municipio where
		  centrotrabajo.ClaveMunicipio = municipio.ClaveMunicipio GROUP by centrotrabajo.ClaveMunicipio";
		$query = $this->db->query($sql);
		return $query->result();
	}

    function getCCTLocalidadTotal()
	{
		$sql = "select count(NomLocalidad)as total ,NomLocalidad from CentroTrabajo group by NomLocalidad";
		$query = $this->db->query($sql);
		return $query->result();
	}
	function getCCTtiposdeescuelas()
	{
		$sql = "SELECT `centrotrabajo`.`Control` as Sector, COUNT(*) as total FROM `centrotrabajo` GROUP BY `centrotrabajo`.`Control`";
		$query = $this->db->query($sql);
		return $query->result();
		
	}
	function CCTmunicipios()
	{
		$sql = "SELECT municipio.Municipio, COUNT(centrotrabajo.ClaveMunicipio) as total FROM centrotrabajo
		JOIN municipio on municipio.ClaveMunicipio = centrotrabajo.ClaveMunicipio
		GROUP by municipio.Municipio";
		$query = $this->db->query($sql);
		return $query->result();
		
	}
	function cctcorde_loc_mun()
	{
		$sql = "SELECT corde.NombreCorde AS Corde, centrotrabajo.NomLocalidad as Localidad ,municipio.Municipio FROM centrotrabajo
		join corde on corde.IdCorde = centrotrabajo.IdCorde 
		join municipio on municipio.ClaveMunicipio = centrotrabajo.ClaveMunicipio
		GROUP by centrotrabajo.NomLocalidad";
		$query = $this->db->query($sql);
		return $query->result();
		
	}

}
	
?>