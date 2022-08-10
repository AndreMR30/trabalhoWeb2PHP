<?php
 
include "../model/proprietario.class.php";
include "../model/salaReuniao.class.php";
include "../model/reservaSalaReuniao.class.php";
include "../model/cliente.class.php";
include "../model/escritorio.class.php";
include "../model/auditorio.class.php";
include "../controller/init.php";

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
			if(isset($_GET['delreserA']) and isset($_GET['cod']) ){
					$n = $_GET['nomeReservaAuditorio'];
					unset($_SESSION['reserA'][$_GET['cod']]);
			?>
			<div class="mb-3">
				<h1 class="h3 d-inline align-middle"><?php echo $n;?> excluído(a) do vetor!</h1>						
			</div>
			<?php					
					header("Refresh:3; conReservaAuditorio.php");
			}else{
					if(isset($_GET['edireserA']) and isset($_GET['cod']) ){
						$cod = $_GET['cod'];
						$nomeReservaAuditorio = $_GET['nomeReservaAuditorio'];
						$nomeCliente =$_GET['nomeCliente'];
						$nomeReservaAuditorio =$_GET['nomeReservaAuditorio'];
						$dataReserva =$_GET['dataReserva'];
						
					}else{
						$cod = "";						
						$nomeReservaAuditorio = "";
						$nomeCliente ="";
						$nomeReservaAuditorio ="";
						$dataReserva ="";
					}
                
		    ?>	

				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">CADASTRAR RESERVA DE AUDITÒRIO</h1>						
					</div>
					<form action="../controller/registrar.php" method="GET">
                    <input type="hidden" name="editarreserA" value="<?php echo $cod;?>">
					<div class="form-row">
					<div class="form-group col-md-6">
                <div class="form-group col-md-6">
            <label for="inputNome">Nome do Auditório</label>
            <input type="text" class="form-control" name="nomeReservaAuditorio" placeholder="Digite o nome do Auditório" required>
        </div>



		<label>Nome do Cliente</label>
            <select name="nomeCliente" class="form-control"  >
                <option value="">Selecione</option>

                <?php 
                $conexao = db_connect();
                    $consulta = $conexao->query("SELECT * FROM tb_cliente");
                    while ($row = $consulta->fetch()) {
                        $idC = $row['id'];
                        $n = $row['nomeCliente'];
                         echo "<option value='$idC'>$n</option>";
                        }
                 ?>
        </select>

		<label>Nome do Auditório</label>
            <select name="nomeAuditorio" class="form-control"  >
                <option value="">Selecione</option>

                <?php 
                $conexao = db_connect();
                    $consulta = $conexao->query("SELECT * FROM tb_auditorio");
                    while ($row = $consulta->fetch()) {
                        $idNa = $row['id'];
                        $nA = $row['nomeAuditorio'];
                        $c = $row['cidade'];
                         echo "<option value='$idNa'>$nA Local: $c</option>";
                        }
                 ?>
        </select> 

        </div>
        <div class="form-group col-md-6">
            <label for="inputDate">Data</label>
            <input type="date" class="form-control" name="dataReserva" value="<?php echo $data; ?>" required>
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