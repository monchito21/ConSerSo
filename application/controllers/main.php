<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {


function __construct(){
	parent::__construct();
	$this->load->model('modeloServicio');
	$this->load->helper(array('download', 'file','html','directory','date'));
    $this->folder = 'C:\xampp\htdocs\conSerSo\PDFS';
}

	public function index()
	{
		$data = array();
   	$data['error'] = $this->session->flashdata('error');
		$this->load->view('login',$data);
	}

public function inicio()
	{
		if($this->session->userdata('cuentaactiva') != TRUE )
		{
			redirect('main/login');
		}
		$this->load->view('head');
		$this->load->view('inicio');
		$this->load->view('foot');
	}

public function login(){
		  //$this->session->sess_destroy();
			// obtenemos datos del formulario
			$datoslogin = array(
				'usuario'=>$this->input->post('usuario',TRUE),
				'contrasenha'=>$this->input->post('contrasenha',TRUE),
			);
			//validar datos
			$result=$this->modeloServicio->validar($datoslogin);

			if(! $result){
				// Si no existe validamos en el directorio del profesor
				$result=$this->modeloServicio->validarProfesor($datoslogin);
				if(! $result){
					//si no encuentra nada redirecciona al loguin con mensaje de error
					$this->session->set_flashdata('error', 'El usuario o la contraseña son incorrectos.');
					redirect('main/index');
				}else{
					//si encuentra algo redirecciona al inicio de profesor
					redirect('profesorControlador/inicioProf');
				}
		//de otra forma redireciona al inicio del alumno
			}else{
			redirect('main/inicio');
		}
	}
	public function cerrarSesion(){

		$this->session->sess_destroy();
		redirect('main/index');
	}

	public function verCartasAceptacion(){
		if($this->session->userdata('cuentaactiva') != TRUE)
		{
			redirect('main/login');
		}
			$data = array(
				'filas' => $this->modeloServicio->obtenerCartaAceptacion($this->session->userdata('matricula'))
				);

		$this->load->view('head');
		$this->load->view('cartaAceptacion',$data);
		$this->load->view('foot');
	}
	public function regCartaAceptacion(){
		if($this->session->userdata('cuentaactiva') != TRUE )
		{
			redirect('main/login');
		}
		$this->load->view('head');
		$this->load->view('registraCartaAceptacion');
		$this->load->view('foot');
	}
	public function guardarAceptacion(){
		if($this->session->userdata('cuentaactiva') != TRUE )
		{
			redirect('main/login');
		}
		$data = array(
				'fechaActual' => $this->input->post('fechaActual'),
				'fechaInicio' => $this->input->post('fechaInicio'),
				'fechaFin' => $this->input->post('fechaFinal'),
				'matricula' => $this->input->post('matricula',TRUE)
				);
			$this->modeloServicio->saveCartaAceptacion($data);
			redirect('pdfs/generarCartaAceptacion');

		}
		public function eliminarCartaAceptacion(){
			if($this->session->userdata('cuentaactiva') != TRUE )
			{
				redirect('main/login');
			}
			echo $id = $this->uri->segment(3);
				$this->modeloServicio->deleteCartaAceptacion($id);
				redirect('main/verCartasAceptacion');
			}
			public function buscaCartaAceptacion(){
				if($this->session->userdata('cuentaactiva') != TRUE )
				{
					redirect('main/login');
				}
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


				$this->load->view('head');
				$this->load->view('buscarCartaAceptacion',$data);
				$this->load->view('foot');

			}

			public function verCartasLiberacion(){
				if($this->session->userdata('cuentaactiva') != TRUE )
				{
					redirect('main/login');
				}
					$data = array(
						'filas' => $this->modeloServicio->obtenerCartaLiberacion($this->session->userdata('matricula'))
						);
								$this->load->view('head');
				$this->load->view('cartaLiberacion',$data);
				$this->load->view('foot');
			}

			public function regCartaLiberacion(){
				if($this->session->userdata('cuentaactiva') != TRUE )
				{
					redirect('main/login');
				}
				$this->load->view('head');
				$this->load->view('registraCartaLiberacion');
				$this->load->view('foot');
			}
			public function guardarLiberacion(){
				if($this->session->userdata('cuentaactiva') != TRUE )
				{
					redirect('main/login');
				}
					$data = array(
						'fecha' => $this->input->post('fecha'),
						'matricula' => $this->input->post('matricula',TRUE)
						);
					$this->modeloServicio->saveCartaLiberacion($data);
					redirect('pdfs/generarCartaLiberacion');
				}
				public function eliminarCartaLiberacion(){
					if($this->session->userdata('cuentaactiva') != TRUE )
					{
						redirect('main/login');
					}
							echo $id = $this->uri->segment(3);
						$this->modeloServicio->deleteCartaLiberacion($id);
						redirect('main/verCartasLiberacion');
				}
				public function buscaCartaLiberacion(){
					if($this->session->userdata('cuentaactiva') != TRUE )
					{
						redirect('main/login');
					}
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


				$this->load->view('head');
				$this->load->view('buscarCartaLiberacion',$data);
				$this->load->view('foot');

			}
			public function verPlanDeActividades(){
				if($this->session->userdata('cuentaactiva') != TRUE )
				{
					redirect('main/login');
				}
				$data = array(
						'filas' => $this->modeloServicio->obtenerPlan($this->session->userdata('matricula')),
						'dep' => $this->modeloServicio->obtenerDependenciaID($this->session->userdata('matricula'))
						);
				$this->load->view('head');
				$this->load->view('planActividades',$data);
				$this->load->view('foot');
			}

			public function regPlanActividades(){
				if($this->session->userdata('cuentaactiva') != TRUE )
				{
					redirect('main/login');
				}
				$data = array(
					'filas' => $this->modeloServicio->obtenerDependenciaID($this->session->userdata('matricula'))
					);
				$this->load->view('head');
				$this->load->view('registraPlanActividades',$data);
				$this->load->view('foot');
			}
			public function guardarPlan(){
				if($this->session->userdata('cuentaactiva') != TRUE )
				{
					redirect('main/login');
				}
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
				redirect('pdfs/generarPlan');
			}
			public function eliminarPlan(){
				if($this->session->userdata('cuentaactiva') != TRUE )
				{
					redirect('main/login');
				}
				echo $id = $this->uri->segment(3);
				$this->modeloServicio->deletePlan($id);
				redirect('main/verPlanDeActividades');
			}
			public function buscaPlan(){
				if($this->session->userdata('cuentaactiva') != TRUE )
				{
					redirect('main/login');
				}
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


				$this->load->view('head');
				$this->load->view('buscarPlan',$data);
				$this->load->view('foot');

			}

			public function verReportes(){
				if($this->session->userdata('cuentaactiva') != TRUE )
				{
					redirect('main/login');
				}

				$data = array(
					'filas' => $this->modeloServicio->obtenerReportes($this->session->userdata('matricula'))
					);

				$this->load->view('head');
				$this->load->view('reporte',$data);
				$this->load->view('foot');
			}

			public function modificarReporte(){
				if($this->session->userdata('cuentaactiva') != TRUE )
				{
					redirect('main/login');
				}
				$this->load->view('head');
				$this->load->view('editarReporte');
				$this->load->view('foot');
			}
			public function regReporte(){
				if($this->session->userdata('cuentaactiva') != TRUE )
				{
					redirect('main/login');
				}
				$this->load->view('head');
				$this->load->view('registraReporte');
				$this->load->view('foot');
			}
			public function guardarReporte(){
				if($this->session->userdata('cuentaactiva') != TRUE )
				{
					redirect('main/login');
				}
				$acumulada=0;
					$horas= $this->modeloServicio->sumarHoras($this->input->post('matricula',TRUE));
					if($horas!= FALSE){
						foreach($horas->result() as $hora){
							$acumulada=$acumulada+$hora->horasAcumuladas;
						}
						$acumulada=$acumulada+$this->input->post('horasReportadas',TRUE);
					}else{
						$acumulada=$this->input->post('horasReportadas',TRUE);
					}
					$data = array(
						'noReporte' => $this->input->post('noReporte',TRUE),
						'mes' => $this->input->post('mes',TRUE),
						'horasReportadas' => $this->input->post('horasReportadas',TRUE),
						'responsableDirecto' => $this->input->post('responsableDirecto',TRUE),
						'periodo' => $this->input->post('periodo',TRUE),
						'matricula' => $this->input->post('matricula',TRUE),
						'actividad' => $this->input->post('actividad',TRUE),
						'observacion' => $this->input->post('observacion',TRUE),
						'horasAcumuladas'=>$acumulada
						);
					$this->modeloServicio->saveReporte($data);
					redirect('pdfs/generarReporteMensual');
			}
			public function eliminarReporte(){
				if($this->session->userdata('cuentaactiva') != TRUE )
				{
					redirect('main/login');
				}
					echo $id = $this->uri->segment(3);
					$this->modeloServicio->deleteReporte($id);
					redirect('main/verReportes');
			}
			public function buscaReporte(){
				if($this->session->userdata('cuentaactiva') != TRUE )
				{
					redirect('main/login');
				}
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


					$this->load->view('head');
					$this->load->view('buscarReporte',$data);
					$this->load->view('foot');

				}

	public function consulta()
	{
		if($this->session->userdata('cuentaactiva') != TRUE )
		{
			redirect('main/login');
		}
			$this->load->view('head');
		$this->load->view('documentos');
		$this->load->view('foot');
	}

	public function avances()
	{
		if($this->session->userdata('cuentaactiva') != TRUE )
		{
			redirect('main/login');
		}

		 $info = get_dir_file_info($this->folder.'/'.$this->session->userdata('matricula').'/', TRUE);

		if($info){
				$data['info']=$info;
        }else{
            $data['info']=NULL;
        }
        $this->load->view('head');
		$this->load->view('avance',$data);
		$this->load->view('foot');
	}

	/*DESCARGA DE ARCHIVOS*/

	public function downloads(){
		if($this->session->userdata('cuentaactiva') != TRUE )
		{
			redirect('main/login');
		}
         $id=$this->uri->segment(3);

		$data = file_get_contents($this->folder.'/'.$this->session->userdata('matricula').'/'.$id);
       	force_download($id,$data);

}
public function guardarAlumno(){
	if($this->session->userdata('cuentaactiva') != TRUE )
	{
		redirect('main/login');
	}
		$data = array(
			"nombre" => $this->input->post('nombre',TRUE),
			'aPaterno' => $this->input->post('aPaterno',TRUE),
			'aMaterno' => $this->input->post('aMaterno',TRUE),
			'matricula' => $this->input->post('matricula',TRUE),
			'carrera' => $this->input->post('carrera',TRUE),
			'bloque' => $this->input->post('bloque',TRUE),
			'seccion' => $this->input->post('seccion',TRUE),
			'contrasenha' => $this->input->post('contrasenha',TRUE),
			'idDocente' => $this->input->post('idDocente',TRUE),
			'Activo' => 0
			);
		$this->modeloServicio->saveAlumno($data);
		$this->session->set_flashdata('error', 'Espera a que tu usuario sea activado.');
		redirect('main/index');
	}
	public function verRegistrarAlumno(){
				$data = array(
			'filas' => $this->modeloServicio->obtenerDocentes(FALSE)
			);
		$this->load->view('registrarAlumno',$data);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
