<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'config.php';

//        $sql = new Sql();
//        $usuarios = $sql->select("SELECT * FROM tb_usuarios");
//
//        echo json_encode($usuarios);


        $usuario = new Usuario();
        $usuario->loadByID(1);
        echo $usuario;
        ?>
    </body>
</html>