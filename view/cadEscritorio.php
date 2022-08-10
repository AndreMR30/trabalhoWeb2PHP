<?php
 
include "../model/proprietario.class.php";
include "../model/escritorio.class.php";
include "../controller/init.php";
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
            <?php		
			if(isset($_GET['delEscri']) and isset($_GET['cod']) ){
					$n = $_GET['nomeEscritorio'];
					unset($_SESSION['Escri'][$_GET['cod']]);
			?>
			<div class="mb-3">
				<h1 class="h3 d-inline align-middle"><?php echo $n;?> excluído(a) do vetor!</h1>						
			</div>
			<?php					
					header("Refresh:3; conEscritorio.php");
			}else{
					if(isset($_GET['ediEscri']) and isset($_GET['cod']) ){
						$cod = $_GET['cod'];
						$nomeEscritorio = $_GET['nomeEscritorio'];
						$proprietario =$_GET['proprietario'];
						$email =$_GET['email'];
						$qtdPessoa =$_GET['computador'];
						$endereco =$_GET['endereco'];
						$cidade =$_GET['cidade'];
						$estado =$_GET['estado'];
					}else{
						$cod = "";						
						$nomeEscritorio = "";
						$proprietario ="";
						$email ="";
						$computador ="";
						$endereco ="";
						$cidade ="";
						$estado ="";
					}
                
		    ?>	

				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">CADASTRO DE ESCRITÓRIO</h1>						
					</div>
					<form action="../controller/registrar.php" method="GET">
                    <input type="hidden" name="editarEscri" value="<?php echo $cod;?>">
					<div class="form-row">
					<div class="form-group col-md-6">
                <div class="form-group col-md-6">
                     <label for="inputNomeEscritorio">Nome do Escritório</label>
                <input type="text" class="form-control" name="nomeEscritorio" value="<?php echo $nomeEscritorio; ?>" placeholder="Digite o nome do escritorio">
                </div>

            <label>Proprietário</label>
            <select name="proprietario" class="form-control"  >
                <option value="">Selecione</option>

                <?php 
                $conexao = db_connect();
                    $consulta = $conexao->query("SELECT * FROM tb_proprietario");
                    while ($row = $consulta->fetch()) {
                        $idP = $row['id'];
                        $n = $row['nome'];
                         echo "<option value='$idP'>$n</option>";
                        }
                 ?>
        </select> 
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Digite o e-mail" required>
        </div>
        <div class="form-group col-md-6">
            <label for="computador">Numero Máximo de Computadores</label>
            <input type="number" class="form-control" name="computador" value="<?php echo $computador; ?>" placeholder="" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Endereço</label>
        <input type="text" class="form-control" name="endereco" value="<?php echo $endereco; ?>" placeholder="Av Vinicius de Morais, 25" required>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">Cidade</label>
            <input type="text" class="form-control" name="cidade" value="<?php echo $cidade; ?>" placeholder="Digite a Cidade" required>
        </div>
        <div class="form-group col-md-4">
            <label for="inputEstado">Estado</label>
            <select name="estado" class="form-control" value="<?php echo $estado; ?>" required>
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
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
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