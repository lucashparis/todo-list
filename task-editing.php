<?php
require 'controller/init.php';
require 'controller/edit-task.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="icon" href="img/task.jpg" sizes="32x32" />
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
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
                    <label for="">Edit Task</label>
                    <form action="controller/edit-task.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo ($dados['id']); ?>">
                        <input type="text" name="nome" id="" value="<?php echo ($dados['nome']); ?>" placeholder="Nome da tarefa">
                        <input type="date" name="prazo" id="" value="<?php echo ($dados['prazo']); ?>" min="" placeholder="  Prazo">
                        <textarea name="descricao" id="" value="teste" cols="" rows="" placeholder="Descrição:"><?php echo ($dados['descricao']); ?>
                        </textarea>
                        <div class="form-check1">
                            <input class="form-check-input" type="radio" name="inRealizado" value="1" <?php echo ($dados['inRealizado'] == 1) ? "checked" : NULL; ?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Completed
                            </label>
                        </div>
                        <div class="form-check2">
                            <input class="form-check-input" type="radio" name="inRealizado" value="0" <?php echo ($dados['inRealizado'] == 0) ? "checked" : NULL; ?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Pending
                            </label>
                        </div>
                        <div class="center top40">
                            <button class="reset" type="submit"><i class="fas fa-save Details"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>