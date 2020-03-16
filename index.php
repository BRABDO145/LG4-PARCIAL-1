<?php 
    include('includes/db.php');

    $sql = "select * from usuarios";
    
    $result = DB::query($sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTADO DE USUARIOS</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div>
        <h1>
            <i>LISTA DE USUARIOS</i><br>
        </h1>
        <h2>
            <a href="crear.php"><i>NUEVO USUARIO</i></a>
        </h2>
    </div>

    <div>
        <table class="table">
            <thead>
            <tr>
                <th><i>ID</i></th>
                        <th><i>NOMBRES</i></th>
                             <th><i>APELLIDOS</i></th>
                                  <th><i>EMAIL</i></th>
                                    <th><i>ESTADO</i></th>
                                       <th><i>ACCIONES</i></th>
            </tr>
            </thead>

            <tbody class="center">
            <?php while($mostrar=mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?= $mostrar['id'] ?></td>
                <td><?= $mostrar['nombres'] ?></td>
                <td><?= $mostrar['apellidos'] ?></td>
                <td><?= $mostrar['email'] ?></td>
                <td class="<?= $mostrar['estado'] ?>"><?= $mostrar['estado'] ?></td>
                <input type="hidden" name="estado" value="<?= $mostrar['estado']?>">
                <td>
                    <?php  if($mostrar['estado'] == "activo"){  ?>
                        <a href="guardar.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>">Inactivar</a>
                    <?php  }else{  ?>
                        <a href="guardar.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>">Activar</a>
                    <?php  }  ?>
                    <a href="editar.php?id=<?= $mostrar['id']?>">Editar</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>