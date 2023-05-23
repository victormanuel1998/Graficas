<?php
class ActaM extends CI_Controller
{
    function getacuerdos_tiposcomites()
	{
		$sql = "SELECT acta.Acuerdo1,acta.Acuerdo2,acta.Acuerdo3, tipocomite.descripcion as Comites FROM acta 
        JOIN comite ON comite.idComite = acta.idComite 
        JOIN tipocomite ON comite.idTipoComite = tipocomite.idTipoComite 
        GROUP BY acta.Acuerdo1,tipocomite.Descripcion";
		$query = $this->db->query($sql);
		return $query->result();
	}
    function acuerdos_tiposcomites_localidad()
	{
		$sql = "SELECT acta.Acuerdo1,acta.Acuerdo2,acta.Acuerdo3, tipocomite.descripcion as Comites,centrotrabajo.NomLocalidad as Localidad
         FROM acta 
        JOIN comite ON comite.idComite = acta.idComite 
        JOIN tipocomite ON comite.idTipoComite = tipocomite.idTipoComite 
        JOIN centrotrabajo ON centrotrabajo.IdCentroTrabajo = acta.IdCentroTrabajo
        GROUP BY acta.Acuerdo1,tipocomite.Descripcion";
		$query = $this->db->query($sql);
		return $query->result();
	}
    function acuerdos_tiposcomites_loc_Muni()
	{
		$sql = "SELECT acta.Acuerdo1,acta.Acuerdo2,acta.Acuerdo3,tipocomite.descripcion as Comites,
        centrotrabajo.NomLocalidad as Localidad,municipio.Municipio 
        FROM acta JOIN comite ON comite.idComite = acta.idComite 
        JOIN tipocomite ON comite.idTipoComite = tipocomite.idTipoComite 
        JOIN centrotrabajo ON centrotrabajo.IdCentroTrabajo = acta.IdCentroTrabajo 
        JOIN municipio ON centrotrabajo.ClaveMunicipio = municipio.ClaveMunicipio
         GROUP BY acta.Acuerdo1,tipocomite.Descripcion";
		$query = $this->db->query($sql);
		return $query->result();
	}
    function total_tipos_actas()
	{
		$sql = "SELECT TIPO as Actas  , COUNT(*) AS Total FROM `actaconsejo` GROUP BY Tipo";
		$query = $this->db->query($sql);
		return $query->result();
	}
}


?>