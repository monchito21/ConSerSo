<?php if(!defined('BASEPATH'))exit('acceso directo no valido');
class modeloServicio extends CI_Model{

	function __construct() {
			parent::__construct();
		}

public function validar($datoslogin){
				  // correr la sentencia
					$query=$this->db->get_where('alumno',  array('matricula' => $datoslogin['usuario'] ));

					if($query->num_rows()>0){
			      // si existe un usuario, crear la sesion
			      $row = $query->row();
						//Si tiene la misma contraseña entonces llena los datos para futuras referencias y comienza la sesion
						if($row->contrasenha==$datoslogin['contrasenha']){
							$data = array(
				          'matricula' => $row->matricula,
				          'nombre' => $row->nombre,
				          'aPaterno' => $row->aPaterno,
				          'aMaterno' => $row->aMaterno,
									'carrera' => $row->carrera,
									'seccion' => $row->seccion,
									'bloque' => $row->bloque,
									'Activo' => $row->Activo,
									'contrasenha' => $row->contrasenha,
				          'idDocente' => $row->idDocente,
				          'cuentaactiva' => true
				          );
						  	$this->session->set_userdata($data);
				      return true;
						}
			    }
					else
					//Si el proceso anterioir no valido el usuario entonces regresa falso
					return false;
			  }
				public function validarProfesor($datoslogin){
						// correr la sentencia
						$query=$this->db->get_where('docente',  array('usuario' => $datoslogin['usuario'] ));

						if($query->num_rows()>0){
				      // si existe un usuario, crear la sesion
				      $row = $query->row();
							//Si tiene la misma contraseña entonces llena los datos para futuras referencias y comienza la sesion
							if($row->contrasenha==$datoslogin['contrasenha']){
								$data = array(
					          'idDocente' => $row->idDocente,
										'nombre' => $row->nombre,
					          'aPaterno' => $row->aPaterno,
					          'aMaterno' => $row->aMaterno,
										'cargo' => $row->cargo,
										'eMail' => $row->eMail,
										'usuario' => $row->usuario,
										'contrasenha' => $row->contrasenha,
					          'cuentaactiva' => true
					          );
							  	$this->session->set_userdata($data);
					      return true;
							}
				    }
						else
						//Si el proceso anterioir no valido el usuario entonces regresa falso
						return false;
				  }
					function sumarHoras($matricula){
								$this->db->where('matricula',$matricula);
								$query= $this->db->get('reporte');

								if ($query->num_rows()>0){
										return $query;
								}else{
										return FALSE;
								}
							}
		function obtenerAlumnos($matricula){
			if($matricula!=FALSE){
				$query=$this->db->where('matricula',$matricula);
				$query= $this->db->get('alumno');
			}else{
				$query= $this->db->get('alumno');
			}

				if ($query->num_rows()>0){
					return $query;
				}else{
					return FALSE;
				}
			}

	function obtenerDocentes($idDocente){
		if($idDocente!=FALSE){
			$query=$this->db->where('idDocente',$idDocente);
			$query= $this->db->get('docente');
		}else{
			$query= $this->db->get('docente');
		}


			if ($query->num_rows()>0){
				return $query;
			}else{
				return FALSE;
			}
		}

	function obtenerDependencias($id){

			if($id!=FALSE){
			$query=$this->db->where('idDependencia',$id);
			$query= $this->db->get('dependencia');
		}else{
			$query= $this->db->get('dependencia');
		}
		if ($query->num_rows()>0){
				return $query;
			}else{
				return FALSE;
			}
		}
		public function obtenerDependenciaID($matricula){
				//$query =$this->db->query("select dependencia.* from dependencia INNER JOIN convenio ON dependencia.idDependencia=convenio.idDependencia WHERE matricula ='".$matricula."'");
				$query =$this->db->select('*');
				$query =$this->db->from('dependencia');
				$query =$this->db->join('convenio', 'dependencia.idDependencia = convenio.idDependencia','left');
				$query =$this->db->where('matricula',$matricula);
				$query = $this->db->get();
				return $query;
		}
	function obtenerReportes($matricula){

		if($matricula!=FALSE){
			$query=$this->db->where('matricula',$matricula);
			$query= $this->db->get('reporte');
		}else{
			$query= $this->db->get('reporte');
		}
			if ($query->num_rows()>0){
				return $query;
			}else{
				return FALSE;
			}
		}

function obtenerCartaAceptacion($matricula){
			if($matricula!=FALSE){
					$query=$this->db->where('matricula',$matricula);
					$query= $this->db->get('cartaaceptacion');
				}else{
				$query= $this->db->get('cartaaceptacion');
				}
				if ($query->num_rows()>0){
					return $query;
				}else{
					return FALSE;
				}
		}

function obtenerCartaLiberacion($matricula){
		if($matricula!=FALSE){
				$query=$this->db->where('matricula',$matricula);
				$query= $this->db->get('cartaliberacion');
			}else{
				$query= $this->db->get('cartaliberacion');
			}
			if ($query->num_rows()>0){
				return $query;
			}else{
				return FALSE;
			}
	}

	function obtenerPlan($matricula){
		if($matricula!=FALSE){
					$query=$this->db->where('matricula',$matricula);
					$query= $this->db->get('planactividades');
				}else{
					$query= $this->db->get('planactividades');
				}
			if ($query->num_rows()>0){
					return $query;
				}else{
					return FALSE;
						}
	}

	function obtenerConvenios($matricula){
		if($matricula!=FALSE){
					$query=$this->db->where('matricula',$matricula);
					$query= $this->db->get('convenio');
				}else{
					$query= $this->db->get('convenio');
				}
			if ($query->num_rows()>0){
				return $query;
				}else{
				return FALSE;
					}
		}
		function obtenerConveniosID($matricula){
			$query =$this->db->select('*');
			$query =$this->db->from('convenio');
			$query =$this->db->join('dependencia', 'convenio.idDependencia = dependencia.idDependencia','left');
			if($matricula!=FALSE){
						$query=$this->db->where('matricula',$matricula);
					}
			$query = $this->db->get();
			return $query;
			}
			function obtenerConveniosIDD($Id){
				$query =$this->db->select('*');
				$query =$this->db->from('convenio');
				$query =$this->db->join('dependencia', 'convenio.idDependencia = dependencia.idDependencia','left');
				if($Id!=FALSE){
							$query=$this->db->where('idConvenio',$Id);
						}
				$query = $this->db->get();
				return $query;
				}

		function saveAlumno($data){

		$this->db->insert('alumno',$data);
		}

		function saveDocente($data){

		$this->db->insert('docente',$data);
		}

	function saveDependencia($data){

		$this->db->insert('dependencia',$data);
		}

	function saveReporte($data){

	$this->db->insert('reporte',$data);
	}

	function saveCartaAceptacion($data){

		$this->db->insert('cartaaceptacion',$data);
		}

	function saveCartaLiberacion($data){

			$this->db->insert('cartaliberacion',$data);
			}

	function savePlan($data){

	$this->db->insert('planactividades',$data);
	}

	function saveConvenio($data){

	$this->db->insert('convenio',$data);
	}

	function deleteAlumno($id){

		$this->db->where('matricula',$id);
		$this->db->delete('alumno');
	}

	function deleteDocente($id){

		$this->db->where('idDocente',$id);
		$this->db->delete('docente');
	}

	function deleteDependencia($id){

		$this->db->where('idDependencia',$id);
		$this->db->delete('dependencia');
	}

	function deleteReporte($id){

		$this->db->where('idReporte',$id);
		$this->db->delete('reporte');
	}

	function deleteCartaAceptacion($id){

		$this->db->where('idCartaAceptacion',$id);
		$this->db->delete('cartaaceptacion');
	}

	function deleteCartaLiberacion($id){

		$this->db->where('idCartaLiberacion',$id);
		$this->db->delete('cartaliberacion');
	}

	function deletePlan($id){

		$this->db->where('idPlanActividades',$id);
		$this->db->delete('planactividades');
	}

		function deleteConvenio($id){

		$this->db->where('idConvenio',$id);
		$this->db->delete('convenio');
	}
//-funciones Busqueda
		function seekAlumno($query){

		$this->db->like('matricula',$query);
		$query = $this->db->get('alumno');

		if ($query->num_rows() >0 ){

			return $query;
		}else{
			return FALSE;
		}
	}

	function seekDocente($query){

		$this->db->like('nombre',$query);
		$query = $this->db->get('docente');

		if ($query->num_rows() >0 ){

			return $query;
		}else{
			return FALSE;
		}
	}

	function seekDependencia($query){

		$this->db->like('nombre',$query);
		$query = $this->db->get('dependencia');

		if ($query->num_rows() >0 ){

			return $query;
		}else{
			return FALSE;
		}
	}

	function seekReporte($query){

		$this->db->like('matricula',$query);
		$query = $this->db->get('reporte');

		if ($query->num_rows() >0 ){

			return $query;
		}else{
			return FALSE;
		}
	}

		function seekCartaAceptacion($query){

		$this->db->like('matricula',$query);
		$query = $this->db->get('cartaaceptacion');

		if ($query->num_rows() >0 ){

			return $query;
		}else{
			return FALSE;
		}
	}

		function seekCartaLiberacion($query){

		$this->db->like('matricula',$query);
		$query = $this->db->get('cartaliberacion');

		if ($query->num_rows() >0 ){

			return $query;
		}else{
			return FALSE;
		}
	}

	function seekPlan($query){

	$this->db->like('matricula',$query);
	$query = $this->db->get('planactividades');

	if ($query->num_rows() >0 ){

		return $query;
	}else{
		return FALSE;
	}
}

function seekConvenio($query){

	$this->db->like('matricula',$query);
	$query = $this->db->get('convenio');

	if ($query->num_rows() >0 ){

		return $query;
	}else{
		return FALSE;
	}
}

function traerAlumno($idDocente){

		$this->db->where('matricula',$idDocente);
		$query= $this->db->get('alumno');
		if ($query->num_rows()>0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function editarAlumno($id,$data){
	$this->db->where('matricula',$id);
	$this->db->update('alumno',$data);

}

function traerDocente($idDocente){

		$this->db->where('idDocente',$idDocente);
		$query= $this->db->get('docente');
		if ($query->num_rows()>0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function editarDocente($id,$data){
	$this->db->where('idDocente',$id);
	$this->db->update('docente',$data);

}

	function traerDependencia($idDocente){

		$this->db->where('idDependencia',$idDocente);
		$query= $this->db->get('dependencia');
		if ($query->num_rows()>0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function editarDependencia($id,$data){
		$this->db->where('idDependencia',$id);
		$this->db->update('dependencia',$data);
}

	function traerReporte($idDocente){

		$this->db->where('idReporte',$idDocente);
		$query= $this->db->get('reporte');
		if ($query->num_rows()>0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function editarReporte($id,$data){
		$this->db->where('idReporte',$id);
		$this->db->update('reporte',$data);
	}

function traerAceptacion($idDocente){

		$this->db->where('idCartaAceptacion',$idDocente);
		$query= $this->db->get('cartaaceptacion');
		if ($query->num_rows()>0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function editarAceptacion($id,$data){
		$this->db->where('idCartaAceptacion',$id);
		$this->db->update('cartaaceptacion',$data);
	}


	function traerLiberacion($idDocente){

		$this->db->where('idCartaLiberacion',$idDocente);
		$query= $this->db->get('cartaliberacion');
		if ($query->num_rows()>0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function editarLiberacion($id,$data){
		$this->db->where('idCartaLiberacion',$id);
		$this->db->update('cartaliberacion',$data);
	}

function traerPlan($idDocente){

		$this->db->where('idPlanActividades',$idDocente);
		$query= $this->db->get('planactividades');
		if ($query->num_rows()>0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function editarPlan($id,$data){
		$this->db->where('idPlanActividades',$id);
		$this->db->update('planactividades',$data);
	}

	function traerConvenio($idDocente){

		$this->db->where('idConvenio',$idDocente);
		$query= $this->db->get('convenio');
		if ($query->num_rows()>0){
			return $query;
		}else{
			return FALSE;
		}
	}

		function editarConvenio($id,$data){
		$this->db->where('idConvenio',$id);
		$this->db->update('convenio',$data);
	}

		function consultaAlumno($query){
		$query = $this->db->get_where('alumno', array('matricula' => $query));

		//$query = $this->db->get();

		if ($query->num_rows() >0 ){

			return $query;
		}else{
			return FALSE;
		}

	}


}?>
