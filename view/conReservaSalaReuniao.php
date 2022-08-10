<?php
 
include "../model/salaReuniao.class.php";
include "../model/ReservaSalaReuniao.class.php";
include '../controller/init.php';
session_start();

?>
<html lang="pt-br">

<?php include "head.php"; ?>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
		   <?php
		     include "menuCliente.php";
		  
		 ?>
		</nav>

		<div class="main">
		<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
                    <a class="dropdown-item" href="indexMenu.php">Administrador</a>
		    		<a class="dropdown-item" href="indexCliente.php">Cliente</a>
						
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">CONSULTA RESERVA SALA REUNIAO</h1>						
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<!-- <form action="#" method="GET">
								<div class="row">	
									<div class="col-12 col-lg-6">
										<input type="text" name="nomeReserva" class="form-control" placeholder="nome, sala ou data">
									</div>
									<div class="col-12 col-lg-6">	
										<button class="btn btn-info" type="submit">BUSCAR</button>
										<button class="btn btn-warning" type="cancel">LIMPAR</button>
									</div>	
								</div>	
							</form> -->
						</div>
					</div>
					<div class="row">
						<?php
                         

							if(isset($_SESSION['reser'])){
								echo "<table class='table'>";
								echo "<tr><th>del / edit</th><th>NOME DA RESERVA</th><th>CÓDIGO DO CLIENTE</th><th>CÓDIGO DA SALA DE REUNIAO</th><th>DATA DA RESERVA</th>
									</tr>";

									$conexao = db_connect();

									$consulta = $conexao->query("SELECT * FROM tb_reservasalareuniao");
	
									while ($row = $consulta->fetch()) {
										echo "<tr>
										<td><input name='id' type='hidden' value=".$row['id'].">
										<i class='fa fa-trash btn btn-danger'></i>
										<i class='fa fa-edit btn btn-warning'></i>
										</td>
										<td>".$row['nomeReserva']."</td>
										<td>".$row['idNomeCliente']."</td>
										<td>".$row['idNomeSalaReuniao']."</td>
										<td>".$row['dataReserva']."</td>
										</tr>";
									}


								// foreach($_SESSION['reser'] as $i=>$reservaSalaReuniao){
									
								// 	$nomeReserva = $reservaSalaReuniao->getNomeReserva();
								// 	$local = $reservaSalaReuniao->getLocal();
								// 	$data = $reservaSalaReuniao->getData();
								// 	if(isset($_GET['nomeReserva']) and ((str_contains($nomeReserva,$_GET['nomeReserva'])
								// 	or  str_contains($local,$_GET['nomeReserva']) or  str_contains($data,$_GET['nomeReserva']))))									
								// 	{	
										

									
								// 		echo "<tr>
								// 		<td>
								// 		<div class='row'>
										
								// 		<form action='cadReservaSalaReuniao.php' method='GET' style='display:inline;'>
								// 		<input type='hidden' name='cod' value='$i'>
								// 		<input type='hidden' name='nomeReserva' value='$nomeReserva'>          
								// 		<input type='hidden' name='local' value='$local'>          
								// 		<input type='hidden' name='data' value='$data'>          
								// 		<button type='submit' class='btn-danger' name='delreser'>
								// 		<i class='fa fa-trash'></i>
								// 	</button>
																		
								// 	<button type='submit' class='btn-info' name='edireser'>
								// 	<i class='fa fa-edit'></i>
								// 	</button>
								// 		</form> 
								// 		</div>      
								// 		</td>       
								// 		<td>$nomeReserva</td><td>$local</td><td>$data</td>
								// 		</tr>";  
								// 	} 
								// }    
								
								echo "</table>";
							}
							
							?>
					</div>		

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
							<a class="text-muted" target="_blank" href="https://github.com/AndreMR30" ><strong>Aluno: André Marques Rysdyk</strong></a> &copy;
							</p>
						</div>
						
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>