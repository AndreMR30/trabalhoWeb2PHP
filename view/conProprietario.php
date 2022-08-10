<?php
 
include "../model/proprietario.class.php";
include '../controller/init.php';
session_start();



?>
<html lang="en">

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
						<h1 class="h3 d-inline align-middle">CONSULTA PROPRIETÁRIO</h1>						
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<!-- <form action="#" method="GET">
								<div class="row">	
									<div class="col-12 col-lg-6">
										<input type="text" name="nome" class="form-control" placeholder="nome, contato ou cidade">
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
                         

							if(isset($_SESSION['prop'])){
								echo "<table class='table'>";
								echo "<tr><th>del / edit</th><th>NOME</th><th>E-MAIL</th><th>CPF</th><th>CONTATO</th><th>ENDEREÇO</th><th>CIDADE</th><th>ESTADO</th></tr>";

								$conexao = db_connect();

								$consulta = $conexao->query("SELECT * FROM tb_proprietario");

								while ($row = $consulta->fetch()) {
									$codigo = $row['id'];
									$nome = $row['nome'];
									$email = $row['email'];
									$cpf = $row['cpf'];
									$contato = $row['contato'];
									$endereco = $row['endereco'];
									$cidade = $row['cidade'];
									$estado = $row['estado'];
									echo "<tr>
									<td><input name='id' type='hidden' value=".$row['id'].">

									<i class='fa fa-trash btn btn-danger'></i>

									<form action='verProprietario.php' method='GET'>
									<input type='hidden' value='$codigo' name='idProp'>
									<input type='hidden' value='$nome' name='nome'>
									<input type='hidden' value='$email' name='email'>
									<input type='hidden' value='$cpf' name='cpf'>
									<input type='hidden' value='$contato' name='contato'>
									<input type='hidden' value='$endereco' name='endereco'>
									<input type='hidden' value='$cidade' name='cidade'>
									<input type='hidden' value='$estado' name='estado'>
									<button type='submit' class='fa fa-edit btn btn-warning'></button>
									</form>

									</td>
									<td>".$row['nome']."</td>
									<td>".$row['email']."</td>
									<td>".$row['cpf']."</td>
									<td>".$row['contato']."</td>
									<td>".$row['endereco']."</td>
									<td>".$row['cidade']."</td>
									<td>".$row['estado']."</td>
									</tr>";
								}

								
								// foreach($_SESSION['prop'] as $i=>$proprietario){
									
								// 	$nome = $proprietario->getNome();
								// 	$email = $proprietario->getEmail();
								// 	$cpf = $proprietario->getCpf();
								// 	$contato = $proprietario->getContato();
								// 	$endereco = $proprietario->getEndereco();
								// 	$cidade = $proprietario->getCidade();
								// 	$estado = $proprietario->getEstado();
									
								// 	if(isset($_GET['nome']) and ((str_contains($nome,$_GET['nome'])
								// 	or str_contains($contato,$_GET['nome']) or str_contains($cidade,$_GET['nome'])))									
								// 	){	
										
								// 		echo "<tr>
								// 		<td>
								// 			<div class='row'>
											
								// 				<form action='cadProprietario.php' method='GET' style='display:inline;'>
								// 					<input type='hidden' name='cod' value='$i'>
								// 					<input type='hidden' name='nome' value='$nome'>  
								// 					<input type='hidden' name='email' value='$email'>
								// 					<input type='hidden' name='cpf' value='$cpf'>  	        
								// 					<input type='hidden' name='contato' value='$contato'>  	        
								// 					<input type='hidden' name='endereco' value='$endereco'>  	        
								// 					<input type='hidden' name='cidade' value='$cidade'>  	        
								// 					<input type='hidden' name='estado' value='$estado'>  	        
								// 					<button type='submit' class='btn-danger' name='delProp'>
								// 						<i class='fa fa-trash'></i>
								// 					</button>
																						
								// 					<button type='submit' class='btn-info' name='ediProp'>
								// 					<i class='fa fa-edit'></i>
								// 					</button>
								// 				</form> 
												
								// 			</div>      
								// 		</td>       
								// 		<td>$nome</td><td>$email</td><td>$cpf</td><td>$contato</td><td>$endereco</td><td>$cidade</td><td>$estado</td></tr>";  
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