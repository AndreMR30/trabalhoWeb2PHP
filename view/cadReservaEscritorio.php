<?php
 
include "../model/proprietario.class.php";
include "../model/salaReuniao.class.php";
include "../model/reservaSalaReuniao.class.php";
include "../model/cliente.class.php";
include "../model/escritorio.class.php";
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
			if(isset($_GET['delreserE']) and isset($_GET['cod']) ){
					$n = $_GET['nomeReservaEscritorio'];
					unset($_SESSION['reserE'][$_GET['cod']]);
			?>
			<div class="mb-3">
				<h1 class="h3 d-inline align-middle"><?php echo $n;?> excluído(a) do vetor!</h1>						
			</div>
			<?php					
					header("Refresh:3; conReservaEscritorio.php");
			}else{
					if(isset($_GET['edireserE']) and isset($_GET['cod']) ){
						$cod = $_GET['cod'];
						$nomeReservaEscritorio = $_GET['nomeReservaEscritorio'];
						$local =$_GET['local'];
						$data =$_GET['data'];
						
					}else{
						$cod = "";						
						$nomeReserva = "";
						$local ="";
						$data ="";
					}
                
		    ?>	

				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">CADASTRAR RESERVA DE ESCRITÓRIO</h1>						
					</div>
					<form action="../controller/registrar.php" method="GET">
                    <input type="hidden" name="editarreserE" value="<?php echo $cod;?>">
					<div class="form-row">
					<div class="form-group col-md-6">
                <div class="form-group col-md-6">
            <label for="inputNome">Nome Cliente</label>
            <input type="text" class="form-control" name="nomeReservaEscritorio" placeholder="Digite o Cliente" required>
        </div>



            <label>Local</label>
            <select name="local" class="form-control"  >
                <option value="">Selecione</option>

                <?php 
                    if (isset($_SESSION['Escri'])) {
                        for ($i=0; $i <count ($_SESSION['Escri']); $i++) { 
                            $na=$_SESSION['Escri'] [$i]->getNomeEscritorio ();
                            echo "<option value='$na'>$na</option>";
                        }
                    }
                ?>
        </select> 
        </div>
        <div class="form-group col-md-6">
            <label for="inputDate">Data</label>
            <input type="date" class="form-control" name="data" value="<?php echo $data; ?>" required>
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