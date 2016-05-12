<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProfesorControlador extends CI_Controller {

	function __construct() {

			parent::__construct();
			$this->load->model('modeloServicio');
			$this->load->helper(array('download', 'file','html','directory','date'));
    $this->folder = 'C:\xampp\htdocs\conSerSo\PDFS';

		}

	public function index(){

		$this->load->view('profesor/loginProfesor');
		$this->load->view('foot');
	}

	public function inicioAlumno()
	{
	redirect('');

	}
	public function inicioProf()
	{
		if($this->session->userdata('cargo') == 'administrador'){
		$this->load->view('administrador/headAdmin');
	}else{
		$this->load->view('profesor/headProf');
	}
		$this->load->view('profesor/inicioProf');
		$this->load->view('foot');
	}


	public function verAlumnos(){

		$data = array(
			'filas' => $this->modeloServicio->obtenerAlumnos(FALSE)
			);

		$this->load->view('profesor/headProf');
		$this->load->view('profesor/alumnosProf',$data);
		$this->load->view('foot');
	}

public function nuevoAlumno(){
		$data = array(
			'filas' => $this->modeloServicio->obtenerDocentes(FALSE)
			);

		$this->load->view('profesor/headProf');
		$this->load->view('profesor/registroAlumno',$data);
		$this->load->view('foot');
	}

	public function modificarAlumno(){
		$this->load->view('profesor/headProf');
		$this->load->view('profesor/editarAlumno');
		$this->load->view('foot');
	}

	public function verDocentes(){

		$data = array(
			'filas' => $this->modeloServicio->obtenerDocentes(FALSE)
			);

		$this->load->view('profesor/headProf');
		$this->load->view('profesor/docentes',$data);
		$this->load->view('foot');
	}

	public function nuevoDocente(){
	$this->load->view('profesor/headProf');
	$this->load->view('profesor/registrarDocente');
	$this->load->view('foot');
}

	public function verDependencias(){

		$data = array(
			'filas' => $this->modeloServicio->obtenerDependencias(FALSE)
			);

		$this->load->view('profesor/headProf');
		$this->load->view('profesor/dependencias',$data);
		$this->load->view('foot');
	}

	public function nuevaDependencia(){
	$this->load->view('profesor/headProf');
	$this->load->view('profesor/registrarDependencia');
	$this->load->view('foot');
}

	public function verConvenio(){

		$data = array(
			'filas' => $this->modeloServicio->obtenerConvenios(FALSE)
			);

		$this->load->view('profesor/headProf');
		$this->load->view('profesor/convenios',$data);
		$this->load->view('foot');
	}


		public function nuevoConvenio(){
	$data = array(
		'filas' => $this->modeloServicio->obtenerAlumnos(FALSE),
		'filas1' => $this->modeloServicio->obtenerDependencias(FALSE)
		);

	$this->load->view('profesor/headProf');
	$this->load->view('profesor/registrarConvenio',$data);
	$this->load->view('foot');
	}

	public function verReportes(){

		$data = array(
			'filas' => $this->modeloServicio->obtenerReportes(FALSE)
			);

		$this->load->view('profesor/headProf');
		$this->load->view('profesor/reporte',$data);
		$this->load->view('foot');
	}

	public function modificarReporte(){
		$this->load->view('profesor/headProf');
		$this->load->view('profesor/editarReporte');
		$this->load->view('foot');
	}

	public function regReporte(){
		$data = array(
			'filas' => $this->modeloServicio->obtenerAlumnos(FALSE)
			);

		$this->load->view('profesor/headProf');
		$this->load->view('profesor/registraReporte',$data);
		$this->load->view('foot');
	}

	public function verCartasAceptacion(){

		$data = array(
			'filas' => $this->modeloServicio->obtenerCartaAceptacion(FALSE)
			);

		$this->load->view('profesor/headProf');
		$this->load->view('profesor/cartaAceptacion',$data);
		$this->load->view('foot');
	}


	public function regCartaAceptacion(){
	$data = array(
		'filas' => $this->modeloServicio->obtenerAlumnos(FALSE)
		);

	$this->load->view('profesor/headProf');
	$this->load->view('profesor/registraCartaAceptacion',$data);
	$this->load->view('foot');
}

	public function verCartasLiberacion(){

		$data = array(
			'filas' => $this->modeloServicio->obtenerCartaLiberacion(FALSE)
			);

		$this->load->view('profesor/headProf');
		$this->load->view('profesor/cartaLiberacion',$data);
		$this->load->view('foot');
	}


		public function regCartaLiberacion(){
	$data = array(
		'filas' => $this->modeloServicio->obtenerAlumnos(FALSE)
		);

	$this->load->view('profesor/headProf');
	$this->load->view('profesor/registraCartaLiberacion',$data);
	$this->load->view('foot');
	}


	public function verPlanDeActividades(){

		$data = array(
			'filas' => $this->modeloServicio->obtenerPlan(FALSE)
			);

		$this->load->view('profesor/headProf');
		$this->load->view('profesor/planActividades',$data);
		$this->load->view('foot');
	}


	public function regPlanActividades(){
	$data = array(
		'filas' => $this->modeloServicio->obtenerAlumnos(FALSE),
		'filas1' => $this->modeloServicio->obtenerDependencias(FALSE)
		);

	$this->load->view('profesor/headProf');
	$this->load->view('profesor/registraPlanActividades',$data);
	$this->load->view('foot');
	}



	public function guardarAlumno(){
		$data = array(
			"nombre" => $this->input->post('nombre',TRUE),
			'aPaterno' => $this->input->post('aPaterno',TRUE),
			'aMaterno' => $this->input->post('aMaterno',TRUE),
			'matricula' => $this->input->post('matricula',TRUE),
			'carrera' => $this->input->post('carrera',TRUE),
			'bloque' => $this->input->post('bloque',TRUE),
			'seccion' => $this->input->post('seccion',TRUE),
			'contrasenha' => $this->input->post('contrasenha',TRUE),
			'idDocente' => $this->input->post('idDocente',TRUE)

			);
		$this->modeloServicio->saveAlumno($data);
		redirect('profesorControlador/verAlumnos');
	}

	public function guardarDocente(){
		$data = array(
			"nombre" => $this->input->post('nombre',TRUE),
			'aPaterno' => $this->input->post('aPaterno',TRUE),
			'aMaterno' => $this->input->post('aMaterno',TRUE),
			'cargo' => $this->input->post('cargo',TRUE),
			'eMail' => $this->input->post('eMail',TRUE),
			'usuario' => $this->input->post('usuario',TRUE),
			'contrasenha' => $this->input->post('contrasenha',TRUE)

			);
		$this->modeloServicio->saveDocente($data);
		redirect('profesorControlador/verDocentes');
	}

		public function guardarDependencia(){
		$data = array(
			"nombre" => $this->input->post('nombre',TRUE),
			'no' => $this->input->post('no',TRUE),
			'calle' => $this->input->post('calle',TRUE),
			'colonia' => $this->input->post('colonia',TRUE),
			'ciudad' => $this->input->post('ciudad',TRUE),
			'estado' => $this->input->post('estado',TRUE),
			'telefono' => $this->input->post('telefono',TRUE),
			'eMail' => $this->input->post('eMail',TRUE),
			'sector' => $this->input->post('sector',TRUE),
			'pobAtDirectos' => $this->input->post('pobAtDirectos',TRUE),
			'pobAtIndirectos' => $this->input->post('pobAtIndirectos',TRUE),
			'responsable' => $this->input->post('responsable',TRUE)
			);
		$this->modeloServicio->saveDependencia($data);
		redirect('profesorControlador/verDependencias');
	}

public function guardarReporte(){
		$data = array(
			"noReporte" => $this->input->post('noReporte',TRUE),
			'mes' => $this->input->post('mes',TRUE),
			'horasReportadas' => $this->input->post('horasReportadas',TRUE),
			'responsableDirecto' => $this->input->post('responsableDirecto',TRUE),
			'periodo' => $this->input->post('periodo',TRUE),
			'matricula' => $this->input->post('matricula',TRUE),
			'actividad' => $this->input->post('actividad',TRUE),
			'observacion' => $this->input->post('observacion',TRUE)
			);
		$this->modeloServicio->saveReporte($data);
		redirect('profesorControlador/verReportes');
	}

public function guardarAceptacion(){
		$data = array(
			"fechaActual" => $this->input->post('fechaActual'),
			'fechaInicio' =>$this->input->post('fechaInicio'),
			'fechaFin' => $this->input->post('fechaFin'),
			'matricula' => $this->input->post('matricula',TRUE)
			);
		$this->modeloServicio->saveCartaAceptacion($data);
		redirect('profesorControlador/verCartasAceptacion');
	}

public function guardarLiberacion(){
		$data = array(
			//'fecha' => date('Y-m-d'),
			'fecha' => $this->input->post('fecha'),
			'matricula' => $this->input->post('matricula',TRUE)
			);
		$this->modeloServicio->saveCartaLiberacion($data);
		redirect('profesorControlador/verCartasLiberacion');
	}

	public function guardarPlan(){
		$data = array(
			'nombreProy' => $this->input->post('nombreProy',TRUE),
			'matricula' => $this->input->post('matricula',TRUE),
			'descripcion' => $this->input->post('descripcion',TRUE),
			'objMediatos' => $this->input->post('objMediatos',TRUE),
			'objInmediatos' => $this->input->post('objInmediatos',TRUE),
			'metodologia' => $this->input->post('metodologia',TRUE),
			'recursos' => $this->input->post('recursos',TRUE),
			'actFuncionales' => $this->input->post('actFuncionales',TRUE),
			'responsabilidades' => $this->input->post('responsabilidades',TRUE),
			'duracion' => $this->input->post('duracion',TRUE),
			'diasHoras' => $this->input->post('diasHoras',TRUE),
			'mesActividades' => $this->input->post('mesActividades',TRUE),
			'idDependencia' => $this->input->post('idDependencia',TRUE)
			);
		$this->modeloServicio->savePlan($data);
		redirect('profesorControlador/verPlanDeActividades');
	}

public function guardarConvenio(){
		$data = array(
			'fecha_inicial' => $this->input->post('fecha_inicial'),
			'fecha_final' => $this->input->post('fecha_final'),
			'horas_servicio' => $this->input->post('horas_servicio',TRUE),
			'idDependencia' => $this->input->post('idDependencia',TRUE),
			'matricula' => $this->input->post('matricula',TRUE)
			);
		$this->modeloServicio->saveConvenio($data);
		redirect('profesorControlador/verConvenio');
	}

	public function eliminarAlumno(){
		echo $id = $this->uri->segment(3);
		$this->modeloServicio->deleteAlumno($id);
		redirect('profesorControlador/verAlumnos');
	}

	public function eliminarDocente(){
		echo $id = $this->uri->segment(3);
		$this->modeloServicio->deleteDocente($id);
		redirect('profesorControlador/verDocentes');
	}

public function eliminarDependencia(){
		echo $id = $this->uri->segment(3);
		$this->modeloServicio->deleteDependencia($id);
		redirect('profesorControlador/verDependencias');
	}

public function eliminarReporte(){
		echo $id = $this->uri->segment(3);
		$this->modeloServicio->deleteReporte($id);
		redirect('profesorControlador/verReportes');
	}

public function eliminarCartaAceptacion(){
		echo $id = $this->uri->segment(3);
		$this->modeloServicio->deleteCartaAceptacion($id);
		redirect('profesorControlador/verCartasAceptacion');
	}

public function eliminarCartaLiberacion(){
		echo $id = $this->uri->segment(3);
		$this->modeloServicio->deleteCartaLiberacion($id);
		redirect('profesorControlador/verCartasLiberacion');
	}

	public function eliminarPlan(){
		echo $id = $this->uri->segment(3);
		$this->modeloServicio->deletePlan($id);
		redirect('profesorControlador/verPlanDeActividades');
	}

	public function eliminarConvenio(){
		echo $id = $this->uri->segment(3);
		$this->modeloServicio->deleteConvenio($id);
		redirect('profesorControlador/verConvenio');
	}

//Funciones de Busqueda

public function buscaAlumno(){
		$query=$this->input->get('query',TRUE);

		if($query){
			$result = $this->modeloServicio->seekAlumno(trim($query));
			if ($result != FALSE){
				$data = array('result' => $result);
			}else{
				$data = array('result'=>'');
			}
		}else{
			$data = array('result'=>'');
		}


		$this->load->view('profesor/headProf');
		$this->load->view('profesor/buscarAlumno',$data);
		$this->load->view('foot');

	}

	public function buscaDocente(){
		$query=$this->input->get('query',TRUE);

		if($query){
			$result = $this->modeloServicio->seekDocente(trim($query));
			if ($result != FALSE){
				$data = array('result' => $result);
			}else{
				$data = array('result'=>'');
			}
		}else{
			$data = array('result'=>'');
		}


		$this->load->view('profesor/headProf');
		$this->load->view('profesor/buscarDocente',$data);
		$this->load->view('foot');

	}

public function buscaDependencia(){
		$query=$this->input->get('query',TRUE);

		if($query){
			$result = $this->modeloServicio->seekDependencia(trim($query));
			if ($result != FALSE){
				$data = array('result' => $result);
			}else{
				$data = array('result'=>'');
			}
		}else{
			$data = array('result'=>'');
		}


		$this->load->view('profesor/headProf');
		$this->load->view('profesor/buscarDependencia',$data);
		$this->load->view('foot');

	}

public function buscaReporte(){
		$query=$this->input->get('query',TRUE);

		if($query){
			$result = $this->modeloServicio->seekReporte(trim($query));
			if ($result != FALSE){
				$data = array('result' => $result);
			}else{
				$data = array('result'=>'');
			}
		}else{
			$data = array('result'=>'');
		}


		$this->load->view('profesor/headProf');
		$this->load->view('profesor/buscarReporte',$data);
		$this->load->view('foot');

	}

	public function buscaCartaAceptacion(){
		$query=$this->input->get('query',TRUE);

		if($query){
			$result = $this->modeloServicio->seekCartaAceptacion(trim($query));
			if ($result != FALSE){
				$data = array('result' => $result);
			}else{
				$data = array('result'=>'');
			}
		}else{
			$data = array('result'=>'');
		}


		$this->load->view('profesor/headProf');
		$this->load->view('profesor/buscarCartaAceptacion',$data);
		$this->load->view('foot');

	}

		public function buscaCartaLiberacion(){
		$query=$this->input->get('query',TRUE);

		if($query){
			$result = $this->modeloServicio->seekCartaLiberacion(trim($query));
			if ($result != FALSE){
				$data = array('result' => $result);
			}else{
				$data = array('result'=>'');
			}
		}else{
			$data = array('result'=>'');
		}


		$this->load->view('profesor/headProf');
		$this->load->view('profesor/buscarCartaLiberacion',$data);
		$this->load->view('foot');

	}

	public function buscaPlan(){
		$query=$this->input->get('query',TRUE);

		if($query){
			$result = $this->modeloServicio->seekPlan(trim($query));
			if ($result != FALSE){
				$data = array('result' => $result);
			}else{
				$data = array('result'=>'');
			}
		}else{
			$data = array('result'=>'');
		}


		$this->load->view('profesor/headProf');
		$this->load->view('profesor/buscarPlan',$data);
		$this->load->view('foot');

	}

	public function buscaConvenio(){
	$query=$this->input->get('query',TRUE);

	if($query){
		$result = $this->modeloServicio->seekConvenio(trim($query));
		if ($result != FALSE){
			$data = array('result' => $result);
		}else{
			$data = array('result'=>'');
		}
	}else{
		$data = array('result'=>'');
	}


	$this->load->view('profesor/headProf');
	$this->load->view('profesor/buscarConvenios',$data);
	$this->load->view('foot');

}

public  function detallesAlumno(){
		$query=$this->input->get('query',TRUE);
		$idDocente = $this->uri->segment(3);
		$result = $this->modeloServicio->traerAlumno($idDocente);

		if ($result != FALSE){
			foreach ($result->result() as $row) {
				$matricula = $row->matricula;
				$nombre = $row->nombre;
				$aPaterno=$row->aPaterno;
				$aMaterno=$row->aMaterno;
				$carrera=$row->carrera;
				$Activo=$row->Activo;
				$seccion=$row->seccion;
				$bloque=$row->bloque;
				$idDocente=$row->idDocente;
				$contrasenha=$row->contrasenha;
			}
			$data= array(
				'matricula' => $matricula,
				'nombre'  => $nombre,
				'aPaterno' => $aPaterno,
				'aMaterno' => $aMaterno,
				'carrera' => $carrera,
				'Activo'=>$Activo,
				'seccion' => $seccion,
				'bloque' => $bloque,
				'idDocente' => $idDocente,
				'contrasenha' => $contrasenha,
				'filas' => $this->modeloServicio->obtenerDocentes(FALSE)
				);
		}else{
			$data = '';
			return FALSE;
		}

		$this->load->view('profesor/headProf');
		if ($query == "Actualizar Valores"){
			$this->load->view('profesor/editarAlumno', $data);
		}else{
			$this->load->view('profesor/listaAlumno', $data);
		}


		$this->load->view('foot');
	}

	function actualizaAlumno(){
		$id=$this->uri->segment(3);
		$data = array(
			'matricula' => $this->input->post('matricula',TRUE),
			'nombre' => $this->input->post('nombre',TRUE),
			'aPaterno' => $this->input->post('aPaterno',TRUE),
			'aMaterno' => $this->input->post('aMaterno',TRUE),
			'carrera' => $this->input->post('carrera',TRUE),
			'seccion' => $this->input->post('seccion',TRUE),
			'bloque' => $this->input->post('bloque',TRUE),
			'contrasenha' => $this->input->post('contrasenha',TRUE),
			'idDocente' => $this->input->post('idDocente',TRUE)
			 );

		$this->modeloServicio->editarAlumno($id,$data);
		redirect('profesorControlador/verAlumnos');
	}


public  function detallesDocente(){
	$query=$this->input->get('query',TRUE);
	$idDocente = $this->uri->segment(3);
	$result = $this->modeloServicio->traerDocente($idDocente);

		if ($result != FALSE){
			foreach ($result->result() as $row) {
				$idDocente = $row->idDocente;
				$nombre = $row->nombre;
				$aPaterno=$row->aPaterno;
				$aMaterno=$row->aMaterno;
				$cargo=$row->cargo;
				$eMail=$row->eMail;
				$usuario=$row->usuario;
				$contrasenha=$row->contrasenha;
			}
			$data= array(
				'idDocente' => $idDocente,
				'nombre'  => $nombre,
				'aPaterno' => $aPaterno,
				'aMaterno' => $aMaterno,
				'cargo' => $cargo,
				'eMail' => $eMail,
				'usuario' => $usuario,
				'contrasenha' => $contrasenha
				);
		}else{
			$data = '';
			return FALSE;
		}

	$this->load->view('profesor/headProf');
	if ($query == "Actualizar Valores"){
		$this->load->view('profesor/editarDocente', $data);
	}else{
		$this->load->view('profesor/listaDocente', $data);
	}
	$this->load->view('foot');

	}

function actualizaDocente(){
		$id=$this->uri->segment(3);
		$data = array(
			//'idDocente' => $this->input->post('idDocente',TRUE),
			'nombre' => $this->input->post('nombre',TRUE),
			'aPaterno' => $this->input->post('aPaterno',TRUE),
			'aMaterno' => $this->input->post('aMaterno',TRUE),
			'cargo' => $this->input->post('cargo',TRUE),
			'eMail' => $this->input->post('eMail',TRUE),
			'usuario' => $this->input->post('usuario',TRUE),
			'contrasenha' => $this->input->post('contrasenha',TRUE)
			 );

		$this->modeloServicio->editarDocente($id,$data);
		redirect('profesorControlador/verDocentes');
	}

	public  function detallesDependencia(){
		$query=$this->input->get('query',TRUE);
		$idDocente = $this->uri->segment(3);
		$result = $this->modeloServicio->traerDependencia($idDocente);

		if ($result != FALSE){
			foreach ($result->result() as $row) {
				$idDependencia = $row->idDependencia;
				$nombre = $row->nombre;
				$no=$row->no;
				$calle=$row->calle;
				$colonia=$row->colonia;
				$ciudad=$row->ciudad;
				$estado=$row->estado;
				$eMail=$row->eMail;
				$pobAtDirectos=$row->pobAtDirectos;
				$pobAtIndirectos=$row->pobAtIndirectos;
				$sector=$row->sector;
				$responsable=$row->responsable;
				$telefono=$row->telefono;
			}
			$data= array(
				'idDependencia' => $idDependencia,
				'nombre'  => $nombre,
				'no' => $no,
				'calle' => $calle,
				'colonia' => $colonia,
				'ciudad' => $ciudad,
				'estado' => $estado,
				'eMail' => $eMail,
				'pobAtDirectos' => $pobAtDirectos,
				'pobAtIndirectos' => $pobAtIndirectos,
				'sector' => $sector,
				'responsable' => $responsable,
				'telefono' => $telefono
				);
		}else{
			$data = '';
			return FALSE;
		}

	$this->load->view('profesor/headProf');
	if ($query == "Actualizar Valores"){
		$this->load->view('profesor/editarDependencia', $data);
	}else{
		$this->load->view('profesor/listaDependencia', $data);
	}
	$this->load->view('foot');

	}

	function actualizaDependencia(){
		$id=$this->uri->segment(3);
		$data = array(
			//'idDependencia' => $this->input->post('idDependencia',TRUE),
			'nombre' => $this->input->post('nombre',TRUE),
			'no' => $this->input->post('no',TRUE),
			'calle' => $this->input->post('calle',TRUE),
			'colonia' => $this->input->post('colonia',TRUE),
			'ciudad' => $this->input->post('ciudad',TRUE),
			'estado' => $this->input->post('estado',TRUE),
			'eMail' => $this->input->post('eMail',TRUE),
			'pobAtDirectos' => $this->input->post('pobAtDirectos',TRUE),
			'pobAtIndirectos' => $this->input->post('pobAtIndirectos',TRUE),
			'sector' => $this->input->post('sector',TRUE),
			'responsable' => $this->input->post('responsable',TRUE),
			'telefono' => $this->input->post('telefono',TRUE)
			 );

		$this->modeloServicio->editarDependencia($id,$data);
		redirect('profesorControlador/verDependencias');
	}

	public  function detallesReporte(){
		$query=$this->input->get('query',TRUE);
		$idDocente = $this->uri->segment(3);
		$result = $this->modeloServicio->traerReporte($idDocente);

		if ($result != FALSE){
			foreach ($result->result() as $row) {
				$idReporte = $row->idReporte;
				$noReporte = $row->noReporte;
				$mes=$row->mes;
				$horasReportadas=$row->horasReportadas;
				$horasAcumuladas=$row->horasAcumuladas;
				$observacion=$row->observacion;
				$periodo=$row->periodo;
				$actividad=$row->actividad;
				$responsableDirecto=$row->responsableDirecto;
				$matricula=$row->matricula;

			}
			$data= array(
				'idReporte' => $idReporte,
				'noReporte'  => $noReporte,
				'mes' => $mes,
				'horasReportadas' => $horasReportadas,
				'horasAcumuladas' => $horasAcumuladas,
				'observacion' => $observacion,
				'periodo' => $periodo,
				'actividad' => $actividad,
				'responsableDirecto' => $responsableDirecto,
				'matricula' => $matricula,
				'filas' => $this->modeloServicio->obtenerAlumnos(FALSE)
				);
		}else{
			$data = '';
			return FALSE;
		}
$this->load->view('profesor/headProf');
	if ($query == "Actualizar Valores"){
		$this->load->view('profesor/editarReporte', $data);
	}else{
		$this->load->view('profesor/listaReporte', $data);
	}
	$this->load->view('foot');

	}

function actualizaReporte(){
		$id=$this->uri->segment(3);
		$data = array(
			//'idDependencia' => $this->input->post('idDependencia',TRUE),
			'noReporte' => $this->input->post('noReporte',TRUE),
			'mes' => $this->input->post('mes',TRUE),
			'horasReportadas' => $this->input->post('horasReportadas',TRUE),
			'horasAcumuladas' => $this->input->post('horasAcumuladas',TRUE),
			'observacion' => $this->input->post('observacion',TRUE),
			'periodo' => $this->input->post('periodo',TRUE),
			'actividad' => $this->input->post('actividad',TRUE),
			'responsableDirecto' => $this->input->post('responsableDirecto',TRUE),
			'matricula' => $this->input->post('matricula',TRUE)

			 );
		$this->modeloServicio->editarReporte($id,$data);
		redirect('profesorControlador/verReportes');
	}

	public  function detallesAceptacion(){
		$query=$this->input->get('query',TRUE);
		$idDocente = $this->uri->segment(3);
		$result = $this->modeloServicio->traerAceptacion($idDocente);

		if ($result != FALSE){
			foreach ($result->result() as $row) {
				$idCartaAceptacion = $row->idCartaAceptacion;
				$fechaInicio = $row->fechaInicio;
				$fechaFin=$row->fechaFin;
				$fechaActual=$row->fechaActual;
				$matricula=$row->matricula;

			}
			$data= array(
				'idCartaAceptacion' => $idCartaAceptacion,
				'fechaInicio'  => $fechaInicio,
				'fechaFin' => $fechaFin,
				'fechaActual' => $fechaActual,
				'matricula' => $matricula,
				'filas' => $this->modeloServicio->obtenerAlumnos(FALSE)
				);
		}else{
			$data = '';
			return FALSE;
		}

	$this->load->view('profesor/headProf');
	if ($query == "Actualizar Valores"){
		$this->load->view('profesor/editarCartaAceptacion', $data);
	}else{
		$this->load->view('profesor/listaAceptacion', $data);
	}
	$this->load->view('foot');

	}

function actualizaAceptacion(){
		$id=$this->uri->segment(3);
		$data = array(
			//'idDependencia' => $this->input->post('idDependencia',TRUE),
			'fechaInicio' => $this->input->post('fechaInicio',TRUE),
			'fechaFin' => $this->input->post('fechaFin',TRUE),
			'fechaActual' => $this->input->post('fechaActual',TRUE),
			'matricula' => $this->input->post('matricula',TRUE)

			 );
		$this->modeloServicio->editarAceptacion($id,$data);
		redirect('profesorControlador/verCartasAceptacion');
	}

	public  function detallesLiberacion(){
		$query=$this->input->get('query',TRUE);
		$idDocente = $this->uri->segment(3);
		$result = $this->modeloServicio->traerLiberacion($idDocente);

		if ($result != FALSE){
			foreach ($result->result() as $row) {
				$idCartaLiberacion = $row->idCartaLiberacion;
				$matricula = $row->matricula;
				$fecha=$row->fecha;

			}
			$data= array(
				'idCartaLiberacion' => $idCartaLiberacion,
				'matricula'  => $matricula,
				'fecha' => $fecha,
				'filas' => $this->modeloServicio->obtenerAlumnos(FALSE)
				);
		}else{
			$data = '';
			return FALSE;
		}

	$this->load->view('profesor/headProf');
	if ($query == "Actualizar Valores"){
		$this->load->view('profesor/editarCartaLiberacion', $data);
	}else{
		$this->load->view('profesor/listaLiberacion', $data);
	}
	$this->load->view('foot');

	}

function actualizaLiberacion(){
		$id=$this->uri->segment(3);
		$data = array(
			//'idDependencia' => $this->input->post('idDependencia',TRUE),
			'matricula' => $this->input->post('matricula',TRUE),
			'fecha' => $this->input->post('fecha',TRUE)

			 );
		$this->modeloServicio->editarLiberacion($id,$data);
		redirect('profesorControlador/verCartasLiberacion');
	}

	public  function detallesPlan(){
		$query=$this->input->get('query',TRUE);
		$idDocente = $this->uri->segment(3);
		$result = $this->modeloServicio->traerPlan($idDocente);

		if ($result != FALSE){
			foreach ($result->result() as $row) {
				$idPlanActividades = $row->idPlanActividades;
				$nombreProy = $row->nombreProy;
				$descripcion=$row->descripcion;
				$objInmediatos=$row->objInmediatos;
				$objMediatos=$row->objMediatos;
				$metodologia=$row->metodologia;
				$recursos=$row->recursos;
				$actFuncionales=$row->actFuncionales;
				$responsabilidades=$row->responsabilidades;
				$duracion=$row->duracion;
				$diasHoras=$row->diasHoras;
				$mesActividades=$row->mesActividades;
				$matricula=$row->matricula;
				$idDependencia=$row->idDependencia;
			}
			$data= array(
				'idPlanActividades' => $idPlanActividades,
				'nombreProy'  => $nombreProy,
				'descripcion' => $descripcion,
				'objInmediatos' => $objInmediatos,
				'objMediatos' => $objMediatos,
				'metodologia' => $metodologia,
				'recursos' => $recursos,
				'actFuncionales' => $actFuncionales,
				'responsabilidades' => $responsabilidades,
				'duracion' => $duracion,
				'diasHoras' => $diasHoras,
				'mesActividades' => $mesActividades,
				'matricula' => $matricula,
				'idDependencia' => $idDependencia,
				'filas1' => $this->modeloServicio->obtenerDependencias(FALSE),
				'filas' => $this->modeloServicio->obtenerAlumnos(FALSE)
				);
		}else{
			$data = '';
			return FALSE;
		}
$this->load->view('profesor/headProf');
	if ($query == "Actualizar Valores"){
		$this->load->view('profesor/editarPlan', $data);
	}else{
		$this->load->view('profesor/listaPlan', $data);
	}
	$this->load->view('foot');
	}

function actualizaPlan(){
		$id=$this->uri->segment(3);
		$data = array(
			//'idDependencia' => $this->input->post('idDependencia',TRUE),
			'nombreProy' => $this->input->post('nombreProy',TRUE),
			'descripcion' => $this->input->post('descripcion',TRUE),
			'objInmediatos' => $this->input->post('objInmediatos',TRUE),
			'objMediatos' => $this->input->post('objMediatos',TRUE),
			'metodologia' => $this->input->post('metodologia',TRUE),
			'recursos' => $this->input->post('recursos',TRUE),
			'actFuncionales' => $this->input->post('actFuncionales',TRUE),
			'responsabilidades' => $this->input->post('responsabilidades',TRUE),
			'duracion' => $this->input->post('duracion',TRUE),
			'diasHoras' => $this->input->post('diasHoras',TRUE),
			'mesActividades' => $this->input->post('mesActividades',TRUE),
			'matricula' => $this->input->post('matricula',TRUE),
			'idDependencia' => $this->input->post('idDependencia',TRUE)

			 );
		$this->modeloServicio->editarPlan($id,$data);
		redirect('profesorControlador/verPlanDeActividades');
	}

	public  function detallesConvenio(){
		$query=$this->input->get('query',TRUE);
		$idDocente = $this->uri->segment(3);
		$result = $this->modeloServicio->traerConvenio($idDocente);

		if ($result != FALSE){
			foreach ($result->result() as $row) {
				$idConvenio = $row->idConvenio;
				$fecha_inicial = $row->fecha_inicial;
				$fecha_final=$row->fecha_final;
				$horas_servicio=$row->horas_servicio;
				$matricula=$row->matricula;
				$idDependencia=$row->idDependencia;

			}
			$data= array(
				'idConvenio' => $idConvenio,
				'fecha_inicial'  => $fecha_inicial,
				'fecha_final' => $fecha_final,
				'horas_servicio' => $horas_servicio,
				'matricula' => $matricula,
				'idDependencia' => $idDependencia,
				'filas1' => $this->modeloServicio->obtenerDependencias(FALSE),
				'filas' => $this->modeloServicio->obtenerAlumnos(FALSE)
				);
		}else{
			$data = '';
			return FALSE;
		}
$this->load->view('profesor/headProf');
	if ($query == "Actualizar Valores"){
		$this->load->view('profesor/editarConvenio', $data);
	}else{
		$this->load->view('profesor/listaConvenio', $data);
	}
	$this->load->view('foot');
	}

function actualizaConvenio(){
		$id=$this->uri->segment(3);
		$data = array(
			//'idDependencia' => $this->input->post('idDependencia',TRUE),
			'fecha_inicial' => $this->input->post('fecha_inicial',TRUE),
			'fecha_final' => $this->input->post('fecha_final',TRUE),
			'horas_servicio' => $this->input->post('horas_servicio',TRUE),
			'matricula' => $this->input->post('matricula',TRUE),
			'idDependencia' => $this->input->post('idDependencia',TRUE)

			 );
		$this->modeloServicio->editarConvenio($id,$data);
		redirect('profesorControlador/verConvenio');
	}

public function buscaDocumentos(){

        $this->load->view('profesor/headProf');
		$this->load->view('profesor/buscaDocAlumno');
		$this->load->view('foot');
	
}

public function pdfsAlumno(){

$query=$this->input->get('query',TRUE);

	$result = $this->modeloServicio->datosAlumno(trim($query));
	$cosa=   $result->row_array();
	$mat=$cosa['matricula'];
	

	$info = get_dir_file_info($this->folder.'/'.$mat.'/', TRUE);
   
		if($info){
				$data['info']=$info;
				$data['mat']=$mat;
        }else{
            $data['info']=NULL;
        }

       	$this->load->view('profesor/headProf');
		$this->load->view('profesor/docsAlumno',$data);
		$this->load->view('foot');
}


}
