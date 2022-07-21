<?php
 
include "../model/escritorio.class.php";
include "../model/ReservaEscritorio.class.php";
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
						<h1 class="h3 d-inline align-middle">CONSULTA RESERVA ESCRITÓRIO</h1>						
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<form action="#" method="GET">
								<div class="row">	
									<div class="col-12 col-lg-6">
										<input type="text" name="nomeReservaEscritorio" class="form-control" placeholder="nome, sala ou data">
									</div>
									<div class="col-12 col-lg-6">	
										<button class="btn btn-info" type="submit">BUSCAR</button>
										<button class="btn btn-warning" type="cancel">LIMPAR</button>
									</div>	
								</div>	
							</form>
						</div>
					</div>
					<div class="row">
						<?php
                         

							if(isset($_SESSION['reserE'])){
								echo "<table class='table'>";
								echo "<tr><th>del / edit</th><th>NOME DO CLIENTE</th><th>NOME DO LOCAL</th><th>DATA</th>
									</tr>";
								foreach($_SESSION['reserE'] as $i=>$reservaEscritorio){
									
									$nomeReservaEscritorio = $reservaEscritorio->getNomeReservaEscritorio();
									$local = $reservaEscritorio->getLocal();
									$data = $reservaEscritorio->getData();
									if(isset($_GET['nomeReservaEscritorio']) and ((str_contains($nomeReservaEscritorio,$_GET['nomeReservaEscritorio'])
									or  str_contains($local,$_GET['nomeReservaEscritorio']) or  str_contains($data,$_GET['nomeReservaEscritorio']))))									
									{	
										

									
										echo "<tr>
										<td>
										<div class='row'>
										
										<form action='cadReservaEscritorio.php' method='GET' style='display:inline;'>
										<input type='hidden' name='cod' value='$i'>
										<input type='hidden' name='nomeReservaEscritorio' value='$nomeReservaEscritorio'>          
										<input type='hidden' name='local' value='$local'>          
										<input type='hidden' name='data' value='$data'>          
										<button type='submit' class='btn-danger' name='delreserE'>
										<i class='fa fa-trash'></i>
									</button>
																		
									<button type='submit' class='btn-info' name='edireserE'>
									<i class='fa fa-edit'></i>
									</button>
										</form> 
										</div>      
										</td>       
										<td>$nomeReservaEscritorio</td><td>$local</td><td>$data</td>
										</tr>";  
									} 
								}    
								
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