<?php
 
include "../model/cliente.class.php";
session_start();

?>
<html lang="en">

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
		    <?php		
			if(isset($_GET['delCli']) and isset($_GET['cod']) ){
					$n = $_GET['nomeCliente'];
					unset($_SESSION['Cli'][$_GET['cod']]);
			?>
			<div class="mb-3">
				<h1 class="h3 d-inline align-middle"><?php echo $n;?> excluído(a) do vetor!</h1>						
			</div>
			<?php					
					header("Refresh:3; conCliente.php");
			}else{
					if(isset($_GET['ediCli']) and isset($_GET['cod']) ){
						$cod = $_GET['cod'];
						$nomeCliente = $_GET['nomeCliente'];
						$email =$_GET['email'];
						$cpf =$_GET['cpf'];
						$contato =$_GET['contato'];
						$endereco =$_GET['endereco'];
						$cidade =$_GET['cidade'];
						$estado =$_GET['estado'];
					}else{
						$cod = "";						
						$nomeCliente = "";
						$email ="";
						$cpf ="";
						$contato ="";
						$endereco ="";
						$cidade ="";
						$estado ="";
					}

		    ?>		
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">CADASTRO DE CLIENTE</h1>						
					</div>
					<form action="../controller/registrar.php" method="GET">
						<input type="hidden" name="editarCli" value="<?php echo $cod;?>">
					<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputName">Nome Cliente</label>
								<input type="text" name="nomeCliente" class="form-control" value="<?php echo $nomeCliente; ?>" placeholder="Digite o nome">
							</div>
							<div class="form-group col-md-6">
     					        <label for="inputEmail">Email</label>
								<input type="text" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Digite seu e-mail">
							</div>
							<div class="form-group col-md-6">
           						 <label for="cpf">CPF</label>
   							 	 <input type="text" name="cpf" value="<?php echo $cpf; ?>" class="form-control" placeholder="Informe o CPF">
							</div>
							<div class="form-group col-md-6">
      						     <label for="contato">Contato</label>
								 <input type="text" name="contato" value="<?php echo $endereco; ?>" class="form-control" placeholder="Informe o endereço">
							</div>
							<div class="form-group col-md-6">
       							 <label for="inputAddress">Endereço</label>
								 <input type="text" name="endereco" value="<?php echo $endereco; ?>" class="form-control" placeholder="Informe o endereço">
							</div>
							<div class="form-group col-md-6">
								 <label for="inputCity">Cidade</label>
								 <input type="text" name="cidade" value="<?php echo $cidade; ?>" class="form-control" placeholder="Informe a cidade">
							</div>
							<div class="form-group col-md-6">
        					     <label for="inputState">Estado</label>
										<select name="estado" value="<?php echo $estado; ?>" class="form-control">
										<option selected hidden>Escolha...</option>
											<option value="AC">Acre</option>
											<option value="AL">Alagoas</option>
											<option value="AP">Amapá</option>
											<option value="AM">Amazonas</option>
											<option value="BA">Bahia</option>
											<option value="CE">Ceará</option>
											<option value="DF">Distrito Federal</option>
											<option value="ES">Espírito Santo</option>
											<option value="GO">Goiás</option>
											<option value="MA">Maranhão</option>
											<option value="MT">Mato Grosso</option>
											<option value="MS">Mato Grosso do Sul</option>
											<option value="MG">Minas Gerais</option>
											<option value="PA">Pará</option>
											<option value="PB">Paraíba</option>
											<option value="PR">Paraná</option>
											<option value="PE">Pernambuco</option>
											<option value="PI">Piauí</option>
											<option value="RJ">Rio de Janeiro</option>
											<option value="RN">Rio Grande do Norte</option>
											<option value="RS">Rio Grande do Sul</option>
											<option value="RO">Rondônia</option>
											<option value="RR">Roraima</option>
											<option value="SC">Santa Catarina</option>
											<option value="SP">São Paulo</option>
											<option value="SE">Sergipe</option>
											<option value="TO">Tocantins</option>
										</select>
							</div>

							<div class="col-12 col-lg-12" style="text-align:right;">
								<button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
							</div>
						
					</div>
					</form>
							

				</div>
				<?php } ?>
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