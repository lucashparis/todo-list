<?php

require 'init.php';
require 'Conexao-bd.php';

$result_tarefa = "SELECT * FROM tbtarefa order by prazo asc";
$resultado_tarefa = mysqli_query($con, $result_tarefa);

if ($_POST) {
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$prazo = $_POST['prazo'];
	$dt_cadastro = date('Y/m/d');
	$inRealizado = 0;

	// Valida informacoes
	if ($nome == '') {?>

		<script>
		  alert("Informe o Nome da Tarefa!");
		  window.location.href = "..";
		</script>

		<?php

	}elseif ($prazo == '') {?>
		<script>
		  alert("Informe um prazo para Tarefa!");
		  window.location.href = "..";
		</script>
		<?php
	}elseif ($descricao == '') {?>
		<script>
		  alert("Informe uma descriçao para Tarefa!");
		  window.location.href = "..";
		</script>
		<?php
	}else {
		$sql = mysqli_query($con, "INSERT INTO tbtarefa (nome, descricao, prazo, dt_cadastro, inRealizado) 
		VALUES ('$nome', '$descricao', '$prazo','$dt_cadastro', '$inRealizado')");
			?>
			<script>
				alert("Tarefa Cadastrada com sucesso!");
				window.location.href = ".."
			</script>
			<?php 
              // $_POST = array();
              // $nome = '';
              // $descricao = '';
              // $prazo = '';
              // $dt_cadastro = '';
              // $inRealizado = '';
	}
}

