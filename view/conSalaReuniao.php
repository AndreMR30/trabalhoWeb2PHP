<?php
 
include "../model/salaReuniao.class.php";
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
						<h1 class="h3 d-inline align-middle">CONSULTA SALA DE REUNIÃO</h1>						
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<form action="#" method="GET">
								<div class="row">	
									<div class="col-12 col-lg-6">
										<input type="text" name="nomeSala" class="form-control" placeholder="nome, qtd de pessoas ou cidade">
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
                         

							if(isset($_SESSION['sRei'])){
								echo "<table class='table'>";
								echo "<tr><th>del / edit</th><th>NOME DA SALA</th><th>PROPRIETÁRIO</th><th>E-MAIL</th>
								<th>QUANTIDADE PESSOAS</th><th>ENDEREÇO</th><th>CIDADE</th><th>ESTADO</th>
								</tr>";
								foreach($_SESSION['sRei'] as $i=>$salaReuniao){
									
									$nomeSala = $salaReuniao->getNomeSala();
									$proprietario = $salaReuniao->getProprietario();
									$email = $salaReuniao->getEmail();
									$qtdPessoa = $salaReuniao->getQtdPessoa();
									$endereco = $salaReuniao->getEndereco();
									$cidade = $salaReuniao->getCidade();
									$estado = $salaReuniao->getEstado();
									if(isset($_GET['nomeSala']) and ((str_contains($nomeSala,$_GET['nomeSala'])
									or  str_contains($cidade,$_GET['nomeSala']) or  str_contains($qtdPessoa,$_GET['nomeSala']))))									
									{	
										

									
										echo "<tr>
										<td>
										<div class='row'>
										
										<form action='cadSalaReuniao.php' method='GET' style='display:inline;'>
										<input type='hidden' name='cod' value='$i'>
										<input type='hidden' name='nomeSala' value='$nomeSala'>          
										<input type='hidden' name='proprietario' value='$proprietario'>          
										<input type='hidden' name='email' value='$email'>          
										<input type='hidden' name='qtdPessoa' value='$qtdPessoa'>          
										<input type='hidden' name='endereco' value='$endereco'>          
										<input type='hidden' name='cidade' value='$cidade'>          
										<input type='hidden' name='estado' value='$estado'>          
										<button type='submit' class='btn-danger' name='delsRei'>
										<i class='fa fa-trash'></i>
									</button>
																		
									<button type='submit' class='btn-info' name='edisRei'>
									<i class='fa fa-edit'></i>
									</button>
										</form> 
										</div>      
										</td>       
										<td>$nomeSala</td><td>$proprietario</td><td>$email</td>
										<td>$qtdPessoa</td><td>$endereco</td>
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