<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sistema SS</title>

<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
<script src="../js/libs/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="../js/libs/jquery-1.10.2.min.js"></script>
<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/groundwork.css">
<style>
  body {background-color:lightblue;}
  p{color:red;}
</style>
</head>
<body>

<header class="padded flipInX animated">
<div class="container">
<div class="row">

<div class="one centered mobile third">
  <h3 class="logo">
      <img src="<?=base_url()?>images/uv.png" height="100" width="130">
        Sistema Servicio Social
  </h3>
</div>
</div>
</div>
</header>

</br></br>

<div class="row fadeInUp animated">
  <div class="one centered mobile third">
    <form action="<?=base_url()?>main/login" method="post" >

  <fieldset>

    <div class="row" align="center" >
        <?php if ($error): ?>
          <p> <?php echo $error ?> </p>
        <?php endif; ?>
            <label for="usuario">Matrícula</label>
            <input id="usuario" name="" type="text" placeholder="Introduce tu usuario">
            <label for="contrasenha">Contraseña</label>
            <input id="contrasenha" name="contrasenha" type="password" placeholder="Introduce tu Contraseña">
          </br>
            <input type="submit" value="Entrar" class="green button" >

    </div>
    <div class="row" align="right">
      <a href="<?=base_url()?>main/verRegistrarAlumno">Registrarse como alumno</a>
    </div>

  </fieldset>

</form>
</div>
</div>


<script type="text/javascript" src="../js/groundwork.all.js"></script>
</body>
</html>
