<?php
 include "../model/proprietario.class.php";
 include "../model/salaReuniao.class.php";
 include "../model/escritorio.class.php";
 include "../model/auditorio.class.php";
 include "../model/cliente.class.php";
 include "../model/reservaSalaReuniao.class.php";
 include "../model/reservaEscritorio.class.php";
 include "../model/reservaAuditorio.class.php";
 include "init.php";
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
							 $prop = new Proprietario(
								$_GET['nome'],$_GET['email'],$_GET['cpf'],$_GET['contato'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
							 echo "<h1>PROPRIETÁRIO CADASTRADO!</h1>";
							$_SESSION['prop'][]= $prop; //INSERE PROPRIETARIO NO ARRAY
							try {
								$conecta = db_connect();
								$n = $prop->getNome();
								$e = $prop->getEmail();
								$c = $prop->getCpf();
								$co = $prop->getContato();
								$en = $prop->getEndereco();
								$ci = $prop->getCidade();
								$es = $prop->getEstado();
								$comandoSQL = "INSERT INTO tb_proprietario (nome,email,cpf,contato,endereco,cidade,estado)
								VALUES ('$n','$e','$c','$co','$en','$ci','$es')";
								$grava = $conecta->prepare($comandoSQL); //Teste no SQL
								$grava->execute(array());
								echo '<h1>PROPRIETÁRIO CADASTRADO NO BANCO DE DADOS!</h1>';
							} catch (PDOException $e) { //casa retorne erro
								echo '<h1>Erro' . $e->getMessage() . '</h1>';
							}

							}
								header("Refresh:5;../view/cadProprietario.php");
						}









						elseif(isset($_GET['nomeSala']) and isset($_GET['proprietario'])and isset($_GET['email'])and isset($_GET['qtdPessoa'])and isset($_GET['endereco'])and isset($_GET['cidade'])and isset($_GET['estado'])){
							if(isset($_GET['editarsRei']) and $_GET['editarsRei']>=0){
								$i=$_GET['editarsRei'];  
								$_SESSION['sRei'][$i] = new SalaReuniao(
									$_GET['nomeSala'],$_GET['proprietario'],$_GET['email'],$_GET['qtdPessoa'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
									echo "<h1>SALA DE REUNIÃO EDITADA!</h1>";			
							}else{
								$sRei = new SalaReuniao(
								$_GET['nomeSala'],$_GET['proprietario'],$_GET['email'],$_GET['qtdPessoa'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
							 echo "<h1>SALA DE REUNIÃO CADASTRADO!</h1>";
							 $_SESSION['sRei'][] = $sRei;
							 try {
								$conecta = db_connect();
								$ns = $sRei->getNomeSala();
								$idP = $sRei->getProprietario();
								$em = $sRei->getEmail();
								$qtdp = $sRei->getQtdPessoa();
								$en = $sRei->getEndereco();
								$ci = $sRei->getCidade();
								$es = $sRei->getEstado();
								$comandoSQL = "INSERT INTO tb_salareuniao (nomeSalaReuniao,idProprietario,email,qtdPessoa,endereco,cidade,estado)
								VALUES ('$ns','$idP','$em','$qtdp','$en','$ci','$es')";
								$grava = $conecta->prepare($comandoSQL); //Teste no SQL
								$grava->execute(array());
								echo '<h1>SALA DE REUNIÃO CADASTRADO NO BANCO DE DADOS!</h1>';
							} catch (PDOException $e) { //casa retorne erro
								echo '<h1>Erro' . $e->getMessage() . '</h1>';
							}
				
							}

							
								header("Refresh:5;../view/cadSalaReuniao.php");
						}







						elseif(isset($_GET['nomeEscritorio']) and isset($_GET['proprietario'])and isset($_GET['email'])and isset($_GET['computador'])and isset($_GET['endereco'])and isset($_GET['cidade'])and isset($_GET['estado'])){
							if(isset($_GET['editarEscri']) and $_GET['editarEscri']>=0){
								$i=$_GET['editarEscri'];  
								$_SESSION['Escri'][$i] = new Escritorio(
									$_GET['nomeEscritorio'],$_GET['proprietario'],$_GET['email'],$_GET['computador'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
									echo "<h1>ESCRITÓRIO EDITADO!</h1>";			
							}else{
								$Escri = new Escritorio(
									$_GET['nomeEscritorio'],$_GET['proprietario'],$_GET['email'],$_GET['computador'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
								 echo "<h1>ESCRITÓRIO CADASTRADO!</h1>";
								 $_SESSION['Escri'][] = $Escri;
								 try {
									$conecta = db_connect();
									$ne = $Escri->getNomeEscritorio();
									$idP = $Escri->getProprietario();
									$em = $Escri->getEmail();
									$co = $Escri->getComputador();
									$en = $Escri->getEndereco();
									$ci = $Escri->getCidade();
									$es = $Escri->getEstado();
									$comandoSQL = "INSERT INTO tb_escritorio (nomeEscritorio,idProprietario,email,computador,endereco,cidade,estado)
									VALUES ('$ne','$idP','$em','$co','$en','$ci','$es')";
									$grava = $conecta->prepare($comandoSQL); //Teste no SQL
									$grava->execute(array());
									echo '<h1>ESCRITÓRIO CADASTRADO NO BANCO DE DADOS!</h1>';
								} catch (PDOException $e) { //casa retorne erro
									echo '<h1>Erro' . $e->getMessage() . '</h1>';
								}
					
								}
	
								
									header("Refresh:5;../view/cadEscritorio.php");
							}



						elseif(isset($_GET['nomeAuditorio']) and isset($_GET['proprietario'])and isset($_GET['email'])and isset($_GET['qtdPessoa'])and isset($_GET['endereco'])and isset($_GET['cidade'])and isset($_GET['estado'])){
							if(isset($_GET['editarAudi']) and $_GET['editarAudi']>=0){
								$i=$_GET['editarAudi'];  
								$_SESSION['Audi'][$i] = new Auditorio(
									$_GET['nomeAuditorio'],$_GET['proprietario'],$_GET['email'],$_GET['qtdPessoa'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
									echo "<h1>AUDITÓRIO EDITADO!</h1>";			
							}else{
								$Audi = new Auditorio(
									$_GET['nomeAuditorio'],$_GET['proprietario'],$_GET['email'],$_GET['qtdPessoa'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
								 echo "<h1>AUDITÓRIO CADASTRADO!</h1>";
								 $_SESSION['Audi'][] = $Audi;
								 try {
									$conecta = db_connect();
									$nA = $Audi->getNomeAuditorio();
									$idP = $Audi->getProprietario();
									$em = $Audi->getEmail();
									$qtdp = $Audi->getQtdPessoa();
									$en = $Audi->getEndereco();
									$ci = $Audi->getCidade();
									$es = $Audi->getEstado();
									$comandoSQL = "INSERT INTO tb_auditorio (nomeAuditorio,idProprietario,email,qtdPessoa,endereco,cidade,estado)
									VALUES ('$nA','$idP','$em','$qtdp','$en','$ci','$es')";
									$grava = $conecta->prepare($comandoSQL); //Teste no SQL
									$grava->execute(array());
									echo '<h1>AUDITÓRIO CADASTRADO NO BANCO DE DADOS!</h1>';
								} catch (PDOException $e) { //casa retorne erro
									echo '<h1>Erro' . $e->getMessage() . '</h1>';
								}
					
								}
	
								
									header("Refresh:5;../view/cadAuditorio.php");
							}

						elseif(isset($_GET['nomeCliente']) and isset($_GET['email'])and isset($_GET['cpf'])and isset($_GET['contato'])and isset($_GET['endereco'])and isset($_GET['cidade'])and isset($_GET['estado'])){
							if(isset($_GET['editarCli']) and $_GET['editarCli']>=0){
								$i=$_GET['editarCli'];  
								$_SESSION['Cli'][$i] = new Cliente(
									$_GET['nomeCliente'],$_GET['email'],$_GET['cpf'],$_GET['contato'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
									echo "<h1>CLIENTE EDITADO!</h1>";			
							}else{
								$Cli = new Cliente(
									$_GET['nomeCliente'],$_GET['email'],$_GET['cpf'],$_GET['contato'],$_GET['endereco'],$_GET['cidade'],$_GET['estado']);
								 echo "<h1>CLIENTE CADASTRADO!</h1>";
								$_SESSION['Cli'][]= $Cli; //INSERE Cliente  NO ARRAY
								try {
									$conecta = db_connect();
									$nc = $Cli->getNomeCliente();
									$e = $Cli->getEmail();
									$c = $Cli->getCpf();
									$co = $Cli->getContato();
									$en = $Cli->getEndereco();
									$ci = $Cli->getCidade();
									$es = $Cli->getEstado();
									$comandoSQL = "INSERT INTO tb_cliente (nomeCliente,email,cpf,contato,endereco,cidade,estado)
									VALUES ('$nc','$e','$c','$co','$en','$ci','$es')";
									$grava = $conecta->prepare($comandoSQL); //Teste no SQL
									$grava->execute(array());
									echo '<h1>CLIENTE CADASTRADO NO BANCO DE DADOS!</h1>';
								} catch (PDOException $e) { //casa retorne erro
									echo '<h1>Erro' . $e->getMessage() . '</h1>';
								}
	
								}
								header("Refresh:4;../view/cadCliente.php");
						}

						elseif(isset($_GET['nomeReserva']) and isset($_GET['nomeCliente'])and isset($_GET['nomeSalaReuniao'])and isset($_GET['dataReserva'])){
							if(isset($_GET['editarreser']) and $_GET['editarreser']>=0){
								$i=$_GET['editarreser'];  
								$_SESSION['reser'][$i] = new ReservaSalaReuniao(
									$_GET['nomeReserva'],$_GET['nomeCliente'],$_GET['nomeSalaReuniao'],$_GET['dataReserva']);
									echo "<h1>RESERVA DE SALA DE REUNIÃO EDITADO!</h1>";			
							}else{
								$reser = new ReservaSalaReuniao(
									$_GET['nomeReserva'],$_GET['nomeCliente'],$_GET['nomeSalaReuniao'],$_GET['dataReserva']);
								 echo "<h1>RESERVA DE SALA DE REUNIÃO CADASTRADO!</h1>";
								 $_SESSION['reser'][] = $reser;
								 try {
									$conecta = db_connect();
									$nr = $reser->getNomeReserva();
									$idC = $reser->getNomeCliente();
									$idSr = $reser->getNomeSalaReuniao();
									$d = $reser->getDataReserva();
									$comandoSQL = "INSERT INTO tb_reservasalareuniao (nomeReserva,idNomeCliente,idNomeSalaReuniao,dataReserva)
									VALUES ('$nr','$idC','$idSr','$d')";
									$grava = $conecta->prepare($comandoSQL); //Teste no SQL
									$grava->execute(array());
									echo '<h1>RESERVA DE SALA DE REUNIÃO CADASTRADO NO BANCO DE DADOS!</h1>';
								} catch (PDOException $e) { //casa retorne erro
									echo '<h1>Erro' . $e->getMessage() . '</h1>';
								}
					
								}
								header("Refresh:4;../view/cadReservaSalaReuniao.php");
						}

						elseif(isset($_GET['nomeReservaEscritorio']) and isset($_GET['nomeCliente'])and isset($_GET['nomeEscritorio'])and isset($_GET['dataReserva'])){
							if(isset($_GET['editarreserE']) and $_GET['editarreserE']>=0){
								$i=$_GET['editarreserE'];  
								$_SESSION['reserE'][$i] = new ReservaEscritorio(
									$_GET['nomeReservaEscritorio'],$_GET['nomeCliente'],$_GET['nomeEscritorio'],$_GET['dataReserva']);
									echo "<h1>RESERVA ESCRITÓRIO EDITADO!</h1>";			
							}else{
								$reserE = new ReservaEscritorio(
									$_GET['nomeReservaEscritorio'],$_GET['nomeCliente'],$_GET['nomeEscritorio'],$_GET['dataReserva']);
								 echo "<h1>RESERVA DE ESCRITÓRIO CADASTRADO!</h1>";
								 $_SESSION['reserE'][] = $reserE;
								 try {
									$conecta = db_connect();
									$nre = $reserE->getNomeReservaEscritorio();
									$idC = $reserE->getNomeCliente();
									$idNe = $reserE->getNomeEscritorio();
									$d = $reserE->getDataReserva();
									$comandoSQL = "INSERT INTO tb_reservaescritorio (nomeReservaEscritorio,idNomeCliente,idNomeEscritorio,dataReserva)
									VALUES ('$nre','$idC','$idNe','$d')";
									$grava = $conecta->prepare($comandoSQL); //Teste no SQL
									$grava->execute(array());
									echo '<h1>RESERVA DE ESCRITORIO CADASTRADO NO BANCO DE DADOS!</h1>';
								} catch (PDOException $e) { //casa retorne erro
									echo '<h1>Erro' . $e->getMessage() . '</h1>';
								}
					
								}
								header("Refresh:4;../view/cadReservaEscritorio.php");
						}

						elseif(isset($_GET['nomeReservaAuditorio']) and isset($_GET['nomeCliente'])and isset($_GET['nomeAuditorio'])and isset($_GET['dataReserva'])){
							if(isset($_GET['editarreserA']) and $_GET['editarreserA']>=0){
								$i=$_GET['editarreserA'];  
								$_SESSION['reserA'][$i] = new ReservaAuditorio(
									$_GET['nomeReservaAuditorio'],$_GET['nomeCliente'],$_GET['nomeAuditorio'],$_GET['dataReserva']);
									echo "<h1>RESERVA AUDITÓRIO EDITADO!</h1>";			
							}else{
								$reserA = new ReservaAuditorio(
									$_GET['nomeReservaAuditorio'],$_GET['nomeCliente'],$_GET['nomeAuditorio'],$_GET['dataReserva']);
								 echo "<h1>RESERVA DE ESCRITÓRIO CADASTRADO!</h1>";
								 $_SESSION['reserA'][] = $reserA;
								 try {
									$conecta = db_connect();
									$nra = $reserA->getNomeReservaAuditorio();
									$idC = $reserA->getNomeCliente();
									$idNa = $reserA->getNomeReservaAuditorio();
									$d = $reserA->getDataReserva();
									$comandoSQL = "INSERT INTO tb_reservaauditorio (nomeReservaAuditorio,idNomeCliente,idNomeAuditorio,dataReserva)
									VALUES ('$nra','$idC','$idNa','$d')";
									$grava = $conecta->prepare($comandoSQL); //Teste no SQL
									$grava->execute(array());
									echo '<h1>RESERVA DE ESCRITORIO CADASTRADO NO BANCO DE DADOS!</h1>';
								} catch (PDOException $e) { //casa retorne erro
									echo '<h1>Erro' . $e->getMessage() . '</h1>';
								}
					
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