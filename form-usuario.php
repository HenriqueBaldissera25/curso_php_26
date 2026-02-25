<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <p>oiiiii</p>
    <hr>
    <h3>Todos usuarios</h3>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Nome Usuario</th>
            <th>status</th>
            <th>E-mail</th>
            <tr>
        <thead>
        </tbody>
            <td>1</td>
            <td>Ariel</td>
            <td>Ariel_usuario</td>
            <td>Ativo</td>
            <td>ariel@infoserv.com</td>
            <tbody>
                <?php
                $existeUsuarios = !empty($usuarios);
                if ($existeUsuarios) {
                    foreach($usuarios as $idx => $usuario) {
                        // IF Ternario: Condicao ? ATENDIDA : SENAO 
                            $status = $usuario->status == 1 ? "Ativo" : "Inativo";
                            
                        ?>
                        <tr>
                            <td><?=  $usuario->id ?></td>
                            <td><?=  $usuario->nome ?></td>
                            <td><?=  $usuario->nomeUsuario ?></td>
                            <td><?=  $usuario->status ?></td>
                            <td><?=  $usuario->email ?></td>
                        </tr>
                    <?php }
                }
            ?>
    </table>
</body>
</html>
