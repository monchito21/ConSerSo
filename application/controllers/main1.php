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

		$this->load->view('head');
		$this->load->view('inicio');
		$this->load->view('foot');
	}

public function login(){
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
			$data = array(
				'filas' => $this->modeloServicio->obtenerCartaAceptacion($this->session->userdata('matricula'))
				);

		$this->load->view('head');
		$this->load->view('cartaAceptacion',$data);
		$this->load->view('foot');
	}
	public function regCartaAceptacion(){
		$this->load->view('head');
		$this->load->view('registraCartaAceptacion');
		$this->load->view('foot');
	}
	public function guardarAceptacion(){
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
				echo $id = $this->uri->segment(3);
				$this->modeloServicio->deleteCartaAceptacion($id);
				redirect('main/verCartasAceptacion');
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


				$this->load->view('head');
				$this->load->view('buscarCartaAceptacion',$data);
				$this->load->view('foot');

			}

			public function verCartasLiberacion(){
					$data = array(
						'filas' => $this->modeloServicio->obtenerCartaLiberacion($this->session->userdata('matricula'))
						);
								$this->load->view('head');
				$this->load->view('cartaLiberacion',$data);
				$this->load->view('foot');
			}

			public function regCartaLiberacion(){
				$this->load->view('head');
				$this->load->view('registraCartaLiberacion');
				$this->load->view('foot');
			}
			public function guardarLiberacion(){
					$data = array(
						'fecha' => $this->input->post('fecha'),
						'matricula' => $this->input->post('matricula',TRUE)
						);
					$this->modeloServicio->saveCartaLiberacion($data);
					redirect('main/verCartasLiberacion');
				}
				public function eliminarCartaLiberacion(){
						echo $id = $this->uri->segment(3);
						$this->modeloServicio->deleteCartaLiberacion($id);
						redirect('main/verCartasLiberacion');
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


				$this->load->view('head');
				$this->load->view('buscarCartaLiberacion',$data);
				$this->load->view('foot');

			}
			public function verPlanDeActividades(){
					$data = array(
						'filas' => $this->modeloServicio->obtenerPlan($this->session->userdata('matricula')),
						'dep' => $this->modeloServicio->obtenerDependenciaID($this->session->userdata('matricula'))
						);
				$this->load->view('head');
				$this->load->view('planActividades',$data);
				$this->load->view('foot');
			}

			public function regPlanActividades(){
				$data = array(
					'filas' => $this->modeloServicio->obtenerDependenciaID($this->session->userdata('matricula'))
					);
				$this->load->view('head');
				$this->load->view('registraPlanActividades',$data);
				$this->load->view('foot');
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
				redirect('main/verPlanDeActividades');
			}
			public function eliminarPlan(){
				echo $id = $this->uri->segment(3);
				$this->modeloServicio->deletePlan($id);
				redirect('main/verPlanDeActividades');
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


				$this->load->view('head');
				$this->load->view('buscarPlan',$data);
				$this->load->view('foot');

			}

			public function verReportes(){

				$data = array(
					'filas' => $this->modeloServicio->obtenerReportes($this->session->userdata('matricula'))
					);

				$this->load->view('head');
				$this->load->view('reporte',$data);
				$this->load->view('foot');
			}

			public function modificarReporte(){
				$this->load->view('head');
				$this->load->view('editarReporte');
				$this->load->view('foot');
			}
			public function regReporte(){
				$this->load->view('head');
				$this->load->view('registraReporte');
				$this->load->view('foot');
			}
			public function guardarReporte(){
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
					redirect('main/verReportes');
			}
			public function eliminarReporte(){
					echo $id = $this->uri->segment(3);
					$this->modeloServicio->deleteReporte($id);
					redirect('main/verReportes');
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


					$this->load->view('head');
					$this->load->view('buscarReporte',$data);
					$this->load->view('foot');

				}

	public function consulta()
	{
		$this->load->view('head');
		$this->load->view('documentos');
		$this->load->view('foot');
	}

	public function avances()
	{
		
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
         $id=$this->uri->segment(3);
        
		$data = file_get_contents($this->folder.'/'.$this->session->userdata('matricula').'/'.$id); 
       	force_download($id,$data); 
              
}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
