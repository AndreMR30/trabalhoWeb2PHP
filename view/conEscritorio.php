<?php
 
include "../model/escritorio.class.php";
session_start();

?>
<html lang="pt-br">

<?php include "head.php"; ?>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
		   <?php
		     include "menu.php";
		  
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
						<h1 class="h3 d-inline align-middle">CONSULTA ESCRITÓRIO</h1>						
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<form action="#" method="GET">
								<div class="row">	
									<div class="col-12 col-lg-6">
										<input type="text" name="nomeEscritorio" class="form-control" placeholder="nome, qtd de computador ou cidade">
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
                         

							if(isset($_SESSION['Escri'])){
								echo "<table class='table'>";
								echo "<tr><th>del / edit</th><th>NOME DO ESCRITÓRIO</th><th>PROPRIETÁRIO</th><th>E-MAIL</th>
								<th>QUANTIDADE COMPUTADORES</th><th>ENDEREÇO</th><th>CIDADE</th><th>ESTADO</th>
								</tr>";
								foreach($_SESSION['Escri'] as $i=>$escritorio){
									
									$nomeEscritorio = $escritorio->getNomeEscritorio();
									$proprietario = $escritorio->getProprietario();
									$email = $escritorio->getEmail();
									$computador = $escritorio->getComputador();
									$endereco = $escritorio->getEndereco();
									$cidade = $escritorio->getCidade();
									$estado = $escritorio->getEstado();
									if(isset($_GET['nomeEscritorio']) and ((str_contains($nomeEscritorio,$_GET['nomeEscritorio'])
									or  str_contains($cidade,$_GET['nomeEscritorio']) or  str_contains($computador,$_GET['nomeEscritorio']))))									
									{	
										

									
										echo "<tr>
										<td>
										<div class='row'>
										
										<form action='cadEscritorio.php' method='GET' style='display:inline;'>
										<input type='hidden' name='cod' value='$i'>
										<input type='hidden' name='nomeEscritorio' value='$nomeEscritorio'>          
										<input type='hidden' name='proprietario' value='$proprietario'>          
										<input type='hidden' name='email' value='$email'>          
										<input type='hidden' name='computador' value='$computador'>          
										<input type='hidden' name='endereco' value='$endereco'>          
										<input type='hidden' name='cidade' value='$cidade'>          
										<input type='hidden' name='estado' value='$estado'>          
										<button type='submit' class='btn-danger' name='delEscri'>
										<i class='fa fa-trash'></i>
									</button>
																		
									<button type='submit' class='btn-info' name='ediEscri'>
									<i class='fa fa-edit'></i>
									</button>
										</form> 
										</div>      
										</td>       
										<td>$nomeEscritorio</td><td>$proprietario</td><td>$email</td>
										<td>$computador</td><td>$endereco</td>
										<td>$cidade</td><td>$estado</td>
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