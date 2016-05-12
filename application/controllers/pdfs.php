<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pdfs extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->load->model('modeloServicio');
        $this->load->library('Pdf');
        $this->folder='C:\xampp\htdocs\conSerSo\PDFS';
    }

    public function index()
    {

    }
    private function createFolder()
    {

        if(!is_dir($this->folder.'/'.$this->session->userdata('matricula')))
        {
            mkdir($this->folder,0777);
            mkdir($this->folder.'/'.$this->session->userdata('matricula'), 0777);
        }
    }
    public function show()
    {
        if(is_dir($this->folder.'/'.$this->session->userdata('matricula')))
        {
            $filename = "CartaAceptacion.pdf";

            if(file_exists($this->folder.'/'.$this->session->userdata('matricula').'/'.$filename))
            {
              header('Content-type: application/pdf');
              header('Content-Disposition: inline; filename="' . $filename . '"');
              header('Content-Transfer-Encoding: binary');
              header('Accept-Ranges: bytes');
              readfile($this->folder.'/'.$this->session->userdata('matricula').'/CartaAceptacion.pdf');
            }
}
}
    public function generarCartaAceptacion() {
        //$this->load->library('Pdf');
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('ConSerSo');
        $pdf->SetTitle('CartadeAceptacion');
        $pdf->SetSubject('TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config_alt.php de libraries/config
        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
        //$pdf->setFooterData($tc = array(0, 64, 0), $lc = array(0, 64, 128));
// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
//relación utilizada para ajustar la conversión de los píxeles
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
// ---------------------------------------------------------
// establecer el modo de fuente por defecto
        $pdf->setFontSubsetting(true);
// Establecer el tipo de letra
//Si tienes que imprimir carácteres ASCII estándar, puede utilizar las fuentes básicas como
// Helvetica para reducir el tamaño del archivo.
        $pdf->SetFont('helvetica', '', 12, '', true);
// Añadir una página
// Este método tiene varias opciones, consulta la documentación para más información.
        $pdf->AddPage();
//fijar efecto de sombra en el texto
        //$pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));
// Establecemos el contenido para imprimir
			//preparamos y maquetamos el contenido a crear
      /*  $html = '';
        $html .= "<style type=text/css>";
        $html .= "th{color: #fff; font-weight: bold; background-color: #222}";
        $html .= "td{background-color: #AAC7E3; color: #000000; border: 1px solid transparent}";
        $html .= "</style>";
        $html .= "<h2>Bloque "." Seccion "." </h2>";
        $html .= "<table width='100%'>";
        $html .= "<tr><th>Matricula</th><th>Fecha actual</th><th>Fecha de inicio</th><th>Fecha de fin</th></tr>";*/
        $data = array(
  				'filas' => $this->modeloServicio->obtenerCartaAceptacion($this->session->userdata('matricula'))
  				);
        $data1 = array(
          'alumno'=>$this->modeloServicio->obtenerAlumnos($this->session->userdata('matricula'))
          );
        $data2 = array(
          'dependencia'=>$this->modeloServicio->obtenerDependenciaID($this->session->userdata('matricula'))
        );
        $data3 = array(
          'plan'=>$this->modeloServicio->obtenerPlan($this->session->userdata('matricula'))
        );

        //$rows1=$this->$modeloServicio->obtenerCartaAceptacion($this->session->userdata('matricula'));
			foreach($data['filas']->result() as $row){
			   $matricula = $row->matricula;
			   $fechaActual = $row->fechaActual;
			   $fechaInicio = $row->fechaInicio;
         $fechaFin = $row->fechaFin;
       }
       foreach($data1['alumno']->result() as $row){
 			   $nombre = $row->nombre;
 			   $paterno = $row->aPaterno;
 			   $materno = $row->aMaterno;
        }
        foreach($data2['dependencia']->result() as $row){
  			   $nombreD = $row->nombre;
           $responsable=$row->responsable;
           $email=$row->eMail;
           $telefono=$row->telefono;
  		  }
        foreach($data3['plan']->result() as $row){
 			    $horas = $row->diasHoras;
 		    }

       $html = <<<EOD
<h3 align="right">Xalapa-Enríquez, Ver., a  $fechaActual</h3>
<i>M.C.C. JUAN CARLOS PÉREZ ARRIAGA<br>
COORDINADOR DE SERVICIO SOCIAL <br>
FACULTAD DE ESTADISTICA E INFORMATICA<br>
UNIVERSIDAD VERACRUZANA<br><br>
P  R  E  S  E  N  T  E
</i>
<p>Por medio de la presente le informo que el C. $nombre $paterno $materno, alumno de la Facultad de Estadística e Informática con matrícula $matricula,
ha sido aceptado para realizar su servicio social en $nombreD, teniendo como fecha de inicio $fechaInicio y aproximada de terminación $fechaFin,
en el cual cubrirá un total de 480 horas, en las que realizará actividades afines a su carrera.</p>
<p>El horario pactado para realizar el servicio social es el siguiente:<br>
$horas
</p>
<p>Los datos de contacto del responsable del servicio social son: <br> correo electrónico: $email <br> teléfono: $telefono.
</p>
<p align="center">Sin más por el momento quedo a su disposición para cualquier aclaración.<br><br>
Atentamente<br>
__________________________<br>
<br>
$responsable<br>
Puesto<br>

</p>
EOD;
		   // Imprimimos el texto con writeHTMLCell()
        $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);



// ---------------------------------------------------------
// Cerrar el documento PDF y preparamos la salida
// Este método tiene varias opciones, consulte la documentación para más información.
        $this->createFolder();
        $nombre_archivo = utf8_decode($this->folder.'/'.$this->session->userdata('matricula').'/CartaAceptacion.pdf');
        $pdf->Output($nombre_archivo, 'FI');
    }

public function generarCartaLiberacion() {
        //$this->load->library('Pdf');
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('ConSerSo');
        $pdf->SetTitle('CartaDeLiberacion');
        $pdf->SetSubject('TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config_alt.php de libraries/config
        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
        //$pdf->setFooterData($tc = array(0, 64, 0), $lc = array(0, 64, 128));
// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
//relación utilizada para ajustar la conversión de los píxeles
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
// ---------------------------------------------------------
// establecer el modo de fuente por defecto
        $pdf->setFontSubsetting(true);
// Establecer el tipo de letra
//Si tienes que imprimir carácteres ASCII estándar, puede utilizar las fuentes básicas como
// Helvetica para reducir el tamaño del archivo.
        $pdf->SetFont('helvetica', '', 12, '', true);
// Añadir una página
// Este método tiene varias opciones, consulta la documentación para más información.
        $pdf->AddPage();
//fijar efecto de sombra en el texto
        //$pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));
// Establecemos el contenido para imprimir
            //preparamos y maquetamos el contenido a crear
      /*  $html = '';
        $html .= "<style type=text/css>";
        $html .= "th{color: #fff; font-weight: bold; background-color: #222}";
        $html .= "td{background-color: #AAC7E3; color: #000000; border: 1px solid transparent}";
        $html .= "</style>";
        $html .= "<h2>Bloque "." Seccion "." </h2>";
        $html .= "<table width='100%'>";
        $html .= "<tr><th>Matricula</th><th>Fecha actual</th><th>Fecha de inicio</th><th>Fecha de fin</th></tr>";*/
       $data = array(
                'filas' => $this->modeloServicio->obtenerCartaLiberacion($this->session->userdata('matricula'))
                );
        $data1 = array(
                'acep' => $this->modeloServicio->obtenerCartaAceptacion($this->session->userdata('matricula'))
                );
        $data2 = array(
                'alumno'=>$this->modeloServicio->obtenerAlumnos($this->session->userdata('matricula'))
                );
        $data3 = array(
                'dependencia'=>$this->modeloServicio->obtenerDependenciaID($this->session->userdata('matricula'))
                );
        $data4 = array(
                'plan'=>$this->modeloServicio->obtenerPlan($this->session->userdata('matricula'))
                );

        //$rows1=$this->$modeloServicio->obtenerCartaLiberacion($this->session->userdata('matricula'));
        foreach($data['filas']->result() as $row){
               $matricula = $row->matricula;
               $fechaFin = $row->fecha;
        }
        foreach($data1['acep']->result() as $row){
               $fechaInicio = $row->fechaInicio;
               $fechaActual = $row->fechaActual;
        }
       foreach($data2['alumno']->result() as $row){
               $nombre = $row->nombre;
               $paterno = $row->aPaterno;
               $materno = $row->aMaterno;
        }
        foreach($data3['dependencia']->result() as $row){
               $nombreD = $row->nombre;
               $responsable=$row->responsable;
          }
        foreach($data4['plan']->result() as $row){
                $nombreP = $row->nombreProy;
            }

       $html = <<<EOD
<br><br><br><br><br>
<i>M.C.C. JUAN CARLOS PÉREZ ARRIAGA<br>
COORDINADOR DE LA ACADEMIA DE SERVICIO SOCIAL <br>
Y EXPERIENCIA RECEPCIONAL<br>
FACULTAD DE ESTADISTICA E INFORMATICA<br>
UNIVERSIDAD VERACRUZANA<br><br><br><br><br>
PRESENTE
</i>
<br><br>
<p align="justify">Por medio de la presente me permito informar a Ud. que el C. $nombre $paterno $materno, estudiante de la Facultad de Estadística e Informática con matrícula $matricula, ha realizado su servicio social en el proyecto $nombreP a mi cargo, durante el periodo que comprende de $fechaInicio a $fechaFin cubriendo un total de 480 horas, habiendo demostrado buena disposición para el trabajo, responsabilidad, seriedad y motivación, dándose por concluido su servicio social.
<br><br><br><br>
<p align="center" line-height: 2em> ATENTAMENTE<br>
Xalapa, Ver. a $fechaActual
<br>
"LIS DE VERACRUZ: ARTE CIENCIA, LUZ"<br><br><br><br>
__________________________<br>
$responsable<br>
$nombreD<br>

</p>
EOD;
           // Imprimimos el texto con writeHTMLCell()
        $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);



// ---------------------------------------------------------
// Cerrar el documento PDF y preparamos la salida
// Este método tiene varias opciones, consulte la documentación para más información.
        $this->createFolder();
        $nombre_archivo = utf8_decode($this->folder.'/'.$this->session->userdata('matricula').'/CartaLiberacion.pdf');
        $pdf->Output($nombre_archivo, 'FI');
    }

  }
