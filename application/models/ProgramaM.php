<?php
class ProgramaM extends CI_Controller 
{
    function Totalprogramaestatal_cct()
	{
		$sql = "SELECT programaestatal.NombrePrograma ,COUNT(centrotrabajo.IdCentroTrabajo) as total FROM `centrotrabajoprogramaestatal`
        JOIN centrotrabajo on centrotrabajo.IdCentroTrabajo = centrotrabajoprogramaestatal.IdCentroTrabajo
        JOIN programaestatal on programaestatal.IdProgramaEstatal = centrotrabajoprogramaestatal.IdProgramaEstatal
        GROUP by programaestatal.NombrePrograma";
		$query = $this->db->query($sql);
		return $query->result();
		
	}
    function programaestatal_loc()
	{
		$sql = "SELECT programaestatal.NombrePrograma ,centrotrabajo.NomLocalidad
         FROM `centrotrabajoprogramaestatal` 
         JOIN centrotrabajo on centrotrabajo.IdCentroTrabajo = centrotrabajoprogramaestatal.IdCentroTrabajo 
        JOIN programaestatal on programaestatal.IdProgramaEstatal = centrotrabajoprogramaestatal.IdProgramaEstatal GROUP by centrotrabajo.NomLocalidad;";
		$query = $this->db->query($sql);
		return $query->result();
		
	}
    function programaestatal_loc_mun()
	{
		$sql = "SELECT programaestatal.NombrePrograma ,centrotrabajo.NomLocalidad,municipio.Municipio
        FROM `centrotrabajoprogramaestatal`
        JOIN centrotrabajo on centrotrabajo.IdCentroTrabajo = centrotrabajoprogramaestatal.IdCentroTrabajo
        JOIN programaestatal on programaestatal.IdProgramaEstatal = centrotrabajoprogramaestatal.IdProgramaEstatal
        JOIN municipio ON municipio.ClaveMunicipio = centrotrabajo.ClaveMunicipio
        GROUP by centrotrabajo.NomLocalidad";
		$query = $this->db->query($sql);
		return $query->result();
		
	}
	function programamunicipal_cct()
	{
		$sql = "SELECT COUNT(programamunicipal.NombrePrograma)as Numprograma,
		programamunicipal.NombrePrograma,
		centrotrabajo.CCT,municipio.Municipio FROM `programamunicipal`
		JOIN centrotrabajo on centrotrabajo.IdCentroTrabajo = programamunicipal.IdCentroTrabajo
		join municipio on municipio.ClaveMunicipio = centrotrabajo.ClaveMunicipio
		GROUP by programamunicipal.NombrePrograma;";
		$query = $this->db->query($sql);
		return $query->result();
		
	}
	


}
?>