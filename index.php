<?php  
    require 'controller/init.php';
    require 'controller/new-task.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="icon" href="img/task.jpg" sizes="32x32"/>
    <!-- Import CSS -->
    <link rel="stylesheet" href="style/style.css">
    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <!-- Import fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css">
    <!-- Import icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <!-- Modal JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<script src="controller/js/personalizado.js"></script>	
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>Todo List</h1>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="offset-3 col-6 offset-3 center">
                <div class="shadow-lg p-3 mb-5 bg-white rounded task-card">
                    <label for="">NEW TASK:</label>
                    <form action="controller/new-task.php" method="POST">
                        <input type="text" name="nome" id="" placeholder="Task Name:">
                        <input type="date" name="prazo" id="" min="<?php echo date('Y-m-d');?>">
                        <textarea name="descricao" id="" cols="" rows="" placeholder="Description:"></textarea>
                        <div class="center">
                            <button type="submit" class="btn btn-info top40">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr class="center">
                            <th scope="col">CHECK</th>
                            <th scope="col">NAME</th>
                            <th scope="col">DEADLINE</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                    </thead>
                    <?php
                        while ($row_tarefa = mysqli_fetch_array($resultado_tarefa)) {
                    ?>    
                    <tbody class="center">
                        <tr>
                            <td>
                                <input type="checkbox" name="inRealizado" value="0" <?php echo ($row_tarefa['inRealizado'] == 1) ? "checked" : NULL; ?> class="form-check-input" disabled>
                            </td>
                            <td>
                                <?= $row_tarefa['nome']; ?>
                            </td>
                            <td>
                                <?= date('d/m/Y', strtotime($row_tarefa['prazo'])); ?>
                            </td>
                            <td>
                                <a href="task-information.php?info=<?=$row_tarefa['id']?>">
                                    <i class="fas fa-info Details"></i>
                                </a>

                                <a href="task-editing.php?editar=<?=$row_tarefa['id']?>">
                                    <i class="fas fa-marker pen"></i>
                                </a>

                                <a href="controller/edit-task.php?excluir=<?=$row_tarefa['id']?>" data-confirm='Tem certeza de que deseja excluir à tarefa selecionada?'>
                                    <i class="fas fa-trash-alt trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    
</body>

</html>