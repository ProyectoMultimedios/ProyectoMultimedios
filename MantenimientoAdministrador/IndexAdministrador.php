


<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>Inicio Administrador</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Inicio
                    </a>
<li><a href="PdfIndex.php">Integrantes</a></li>
                </li>
                <li>
                    <a href="#">Niveles</a>
                    <ul>
          		<li><a href="frmIngresarNivel.php">Agregar niveles</a>
                </li>
                <li><a href="frmListarNivel.php">Listar niveles</a>
                <li><a href="frmListarSecciones.php">Listar Secciones</a>




          	</ul>
          </li>

                <li>
                    <a href="#">Cursos</a>
                    <ul>
          		<li><a href="FrmAgregarCurso.php">Agregar Cursos</a>
                </li>

                <li><a href="ListarCursos.php">Listar Cursos</a></li>

                <li><a href="FrmBuscarAsignarProfesor.php">Asignar Profesor</a></li>
          	</ul>
          </li>



               <li>
          	<a href="#">Profesores</a>
            <ul>

<li><a href="FrmRegistroProfesor.php">Registrar Profesores</a></li>
 <li><a href="buscarProfesor.php">Editar Profesores</a></li>
<li><a href="FrmBuscarEliminar.php">Eliminar Profesores</a></li>
<li><a href="Listar.php">Listar Profesores</a></li>


            </ul>
          </li>

               <li>
          	<a href="#">Estudiantes</a>
            <ul>

<li><a href="FrmingresarEstudiante.php">Ingresar Estudiantes</a></li>
 <li><a href="FrmBuscarEstudianteEditar.php">Editar Estudiantes</a></li>
<li><a href="FrmBuscarEstudianteEliminar.php">Eliminar Estudiantes</a></li>
<li><a href="ListarEstudiantes.php">Listar Estudiantes</a></li>
            </ul>
          </li>

               <li>
          	<a href="#">Encargados </a>
            <ul>
 <li><a href="FrmBuscarEncargadoEditar.php">Editar Encargado</a></li>
<li><a href="FrmListarEncargado.php">Listar Encargados</a></li>

            </ul>
          </li>


               <li><a href="#">Secciones</a>
          	<ul>
            	<li><a href="modGrupos/">Grupos</a></li>
            	<li><a href="FrmAusenciasTardiasEscapadas.php">Asistencia</a></li>
                <li><a href="FrmAgregarNotas.php">Notas</a></li>
                <li><a href="">Asignar Cursos</a></li>
            </ul>
          </li>

               <li><a href="MantenimientoMatricula/MantenimientoMatricula.php">Matricular</a></li>


                <li><a href="logout.php">Salir</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                       <h2 align="center"> Bienvenido <? echo $Persona[1].' '.$Persona[2]; ?> </h2>

                        <? include('CuerpoAdministrador.php'); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
