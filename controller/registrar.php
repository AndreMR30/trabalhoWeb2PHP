<?php
 include "../model/proprietario.class.php";
 include "../model/salaReuniao.class.php";
 include "../model/escritorio.class.php";
 include "../model/auditorio.class.php";
 include "../model/cliente.class.php";
 include "../model/reservaSalaReuniao.class.php";
 include "../model/reservaEscritorio.class.php";
 include "../model/reservaAuditorio.class.php";
 session_start();


?>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Trabalho -  QUAL O TEMA?</title>

	<link href="../view/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">

		</nav>

		<div class="main">
		<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						
				

							
		    			    <a class="dropdown-item" href="../view/indexMenu.php">Administrador</a>
		    			    <a class="dropdown-item" href="../view/indexCliente.php">Cliente</a>
						
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

				<?php
						
						if(isset($_GET['nome']) and isset($_GET['email'])and isset($_GET['cpf'])and isset($_GET['contato'])and isset($_GET['endereco'])and isset($_GET['cidade'])and isset($_GET['estado'])){
							if(isset($_GET['editarProp']) and $_GET['editarProp']>=0){
								$i=$_GET['editarProp'];  
								$_SESSION['prop'][$i] = new Proprietario(
									$_GET['nome'],$_GET['email'],$_GET['cpf'],$_GET['contato'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
									echo "<h1>PROPRIETÁRIO EDITADO!</h1>";			
							}else{
							 $_SESSION['prop'][]= new Proprietario(
								$_GET['nome'],$_GET['email'],$_GET['cpf'],$_GET['contato'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
							 echo "<h1>PROPRIETÁRIO CADASTRADO!</h1>";
							}
								header("Refresh:4;../view/cadProprietario.php");
						}









						elseif(isset($_GET['nomeSala']) and isset($_GET['proprietario'])and isset($_GET['email'])and isset($_GET['qtdPessoa'])and isset($_GET['endereco'])and isset($_GET['cidade'])and isset($_GET['estado'])){
							if(isset($_GET['editarsRei']) and $_GET['editarsRei']>=0){
								$i=$_GET['editarsRei'];  
								$_SESSION['sRei'][$i] = new SalaReuniao(
									$_GET['nomeSala'],$_GET['proprietario'],$_GET['email'],$_GET['qtdPessoa'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
									echo "<h1>SALA DE REUNIÃO EDITADA!</h1>";			
							}else{
							 $_SESSION['sRei'][]= new SalaReuniao(
								$_GET['nomeSala'],$_GET['proprietario'],$_GET['email'],$_GET['qtdPessoa'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
							 echo "<h1>SALA DE REUNIÃO CADASTRADO!</h1>";
							}
								header("Refresh:4;../view/cadSalaReuniao.php");
						}







						elseif(isset($_GET['nomeEscritorio']) and isset($_GET['proprietario'])and isset($_GET['email'])and isset($_GET['computador'])and isset($_GET['endereco'])and isset($_GET['cidade'])and isset($_GET['estado'])){
							if(isset($_GET['editarEscri']) and $_GET['editarEscri']>=0){
								$i=$_GET['editarEscri'];  
								$_SESSION['Escri'][$i] = new Escritorio(
									$_GET['nomeEscritorio'],$_GET['proprietario'],$_GET['email'],$_GET['computador'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
									echo "<h1>ESCRITÓRIO EDITADO!</h1>";			
							}else{
							 $_SESSION['Escri'][]= new Escritorio(
								$_GET['nomeEscritorio'],$_GET['proprietario'],$_GET['email'],$_GET['computador'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
							 echo "<h1>ESCRITÓRIO CADASTRADO!</h1>";
							}
								header("Refresh:4;../view/cadEscritorio.php");
						}



						elseif(isset($_GET['nomeAuditorio']) and isset($_GET['proprietario'])and isset($_GET['email'])and isset($_GET['qtdPessoa'])and isset($_GET['endereco'])and isset($_GET['cidade'])and isset($_GET['estado'])){
							if(isset($_GET['editarAudi']) and $_GET['editarAudi']>=0){
								$i=$_GET['editarAudi'];  
								$_SESSION['Audi'][$i] = new Auditorio(
									$_GET['nomeAuditorio'],$_GET['proprietario'],$_GET['email'],$_GET['qtdPessoa'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
									echo "<h1>AUDITÓRIO EDITADO!</h1>";			
							}else{
							 $_SESSION['Audi'][]= new Auditorio(
								$_GET['nomeAuditorio'],$_GET['proprietario'],$_GET['email'],$_GET['qtdPessoa'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
							 echo "<h1>AUDITÓRIO CADASTRADO!</h1>";
							}
								header("Refresh:4;../view/cadAuditorio.php");
						}

						elseif(isset($_GET['nomeCliente']) and isset($_GET['email'])and isset($_GET['cpf'])and isset($_GET['contato'])and isset($_GET['endereco'])and isset($_GET['cidade'])and isset($_GET['estado'])){
							if(isset($_GET['editarCli']) and $_GET['editarCli']>=0){
								$i=$_GET['editarCli'];  
								$_SESSION['Cli'][$i] = new Cliente(
									$_GET['nomeCliente'],$_GET['email'],$_GET['cpf'],$_GET['contato'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
									echo "<h1>CLIENTE EDITADO!</h1>";			
							}else{
							 $_SESSION['Cli'][]= new Cliente(
								$_GET['nomeCliente'],$_GET['email'],$_GET['cpf'],$_GET['contato'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
							 echo "<h1>CLIENTE CADASTRADO!</h1>";
							}
								header("Refresh:4;../view/cadCliente.php");
						}

						elseif(isset($_GET['nomeReserva']) and isset($_GET['local'])and isset($_GET['data'])){
							if(isset($_GET['editarreser']) and $_GET['editarreser']>=0){
								$i=$_GET['editarreser'];  
								$_SESSION['reser'][$i] = new ReservaSalaReuniao(
									$_GET['nomeReserva'],$_GET['local'],$_GET['data']);
									echo "<h1>RESERVA DE SALA DE REUNIÃO EDITADO!</h1>";			
							}else{
							 $_SESSION['reser'][]= new ReservaSalaReuniao(
								$_GET['nomeReserva'],$_GET['local'],$_GET['data']);
							 echo "<h1>RESERVA DE SALA DE REUNIÃO CADASTRADA!</h1>";
							}
								header("Refresh:4;../view/cadReservaSalaReuniao.php");
						}

						elseif(isset($_GET['nomeReservaEscritorio']) and isset($_GET['local'])and isset($_GET['data'])){
							if(isset($_GET['editarreserE']) and $_GET['editarreserE']>=0){
								$i=$_GET['editarreserE'];  
								$_SESSION['reserE'][$i] = new ReservaEscritorio(
									$_GET['nomeReservaEscritorio'],$_GET['local'],$_GET['data']);
									echo "<h1>RESERVA ESCRITÓRIO EDITADO!</h1>";			
							}else{
							 $_SESSION['reserE'][]= new ReservaEscritorio(
								$_GET['nomeReservaEscritorio'],$_GET['local'],$_GET['data']);
							 echo "<h1>RESERVA ESCRITÓRIO CADASTRADA!</h1>";
							}
								header("Refresh:4;../view/cadReservaEscritorio.php");
						}

						elseif(isset($_GET['nomeReservaAuditorio']) and isset($_GET['local'])and isset($_GET['data'])){
							if(isset($_GET['editarreserA']) and $_GET['editarreserA']>=0){
								$i=$_GET['editarreserA'];  
								$_SESSION['reserA'][$i] = new ReservaAuditorio(
									$_GET['nomeReservaAuditorio'],$_GET['local'],$_GET['data']);
									echo "<h1>RESERVA AUDITÓRIO EDITADO!</h1>";			
							}else{
							 $_SESSION['reserA'][]= new ReservaAuditorio(
								$_GET['nomeReservaAuditorio'],$_GET['local'],$_GET['data']);
							 echo "<h1>RESERVA AUDITÓRIO CADASTRADA!</h1>";
							}
								header("Refresh:4;../view/cadReservaAuditorio.php");
						}

						?>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="#" ><strong>Aluno: André Marques Rysdyk</strong></a> &copy;
							</p>
						</div>
						
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="../view/js/app.js"></script>

</body>

</html>