<?php
require 'Conexao-bd.php';

// Mini Dashboard task
$sql = "SELECT COUNT(id) AS num_result FROM tbtarefa WHERE inRealizado = 1";
$resultado_task = mysqli_query($con, $sql);
$completed_tasks = mysqli_fetch_assoc($resultado_task);


$sql = "SELECT COUNT(id) AS num_result FROM tbtarefa WHERE inRealizado = 0";
$resultado_task = mysqli_query($con, $sql);
$pending_tasks = mysqli_fetch_assoc($resultado_task);
// End Mini Dashboard task

//Inicio código deleção de tarefa 
if($_GET['excluir']) {
	$excluirSql = "DELETE FROM tbtarefa WHERE id = ?";
	$stmt = $con->prepare($excluirSql);
	$stmt->bind_param("i", $_GET['excluir']);
	$stmt->execute();
  header('Location: ..');

}
// Fim código deleção de tarefa

//Inicio código edição de tarefa 
if ($_GET['editar']) {
  $sql = "SELECT * FROM tbtarefa WHERE id = ?";
  $stmt = $con->prepare($sql);
  $stmt->bind_param("i", $_GET['editar']);

  if ($stmt->execute()) {
    $resultado = $stmt->get_result();
    if ($resultado->num_rows > 0) {
      $dados = $resultado->fetch_assoc();
    }
  }
}
// Fim código edição de tarefa

//Inicio código info da tarefa 
if ($_GET['info']) {
  // var_dump("teste");exit;
  $sql = "SELECT * FROM tbtarefa WHERE id = ?";
  $stmt = $con->prepare($sql);
  $stmt->bind_param("i", $_GET['info']);

  if ($stmt->execute()) {
    $resultado = $stmt->get_result();
    if ($resultado->num_rows > 0) {
      $dados = $resultado->fetch_assoc();
    }
  }
}
// Fim código info da tarefa

$nome = $dados['nome'];
$descricao = $dados['descricao'];
$prazo = $dados['prazo'];
$id = $dados['id'];


if ($_POST) {
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $inRealizado = $_POST['inRealizado'];
  $prazo = $_POST['prazo'];
  $dt_cadastro = date('Y/m/d');

  if ($nome == '') { ?>

    <script>
      alert("Informe o Nome da Tarefa!");
      window.location.href = "..";
    </script>

  <?php

  } elseif ($prazo == '') { ?>
    <script>
      alert("Informe um prazo para Tarefa!");
      window.location.href = "..";
    </script>
  <?php
  } elseif ($descricao == '') { ?>
    <script>
      alert("Informe uma descriçao para Tarefa!");
      window.location.href = "..";
    </script>
<?php
  } else{
    // var_dump($id);exit;
    $sql = mysqli_query($con, "UPDATE tbtarefa 
      SET nome = '$nome',
      descricao = '$descricao',
      prazo = '$prazo',
      inRealizado = '$inRealizado'
      WHERE id = '$id'");
    ?>
    <script>
      alert("Tarefa Atualizada com sucesso!");
      window.location.href = "../";
    </script>
    <?php

  }
}

?>