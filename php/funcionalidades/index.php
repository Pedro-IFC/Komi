<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("Location: login.php");
    }
    include_once "../../config/default.inc.php";
    require_once "../../config/Conexao.php";
?>
<html>
<head>
    <link rel="icon" type="image/png" href="../../midiadocs/favicon/1.png">
    <title>Komi-chan</title>
    <meta charset="utf-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="../../designdocs/materialize/css/materialize.css">
    <!-- Compiled and minified Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="../../designdocs/materialize/js/materialize.js"></script>     
    <!-- CSS Pessoal-->
    <link rel="stylesheet" href="../../designdocs/estilo1.css">
    <!-- JS Pessoal-->
    <link rel="stylesheet" href="../../js/first.js">
</head>
<body>
    <div class="container-2">
        <div class="row">
            <div class="col s1 voltar">       
                <a class="voltar" href="../../index.php">Voltar</a>
            </div>
        </div>
        <form method="POST" action="cadastrar.php">
            <select name="select">
                <option value="proposta">Proposta</option>
                <option value="desenvolvimento">Desenvolvimento</option>
                <option value="finalizada">Finalizada</option>
            </select>
            <div class="row">
                <div class="col s4 input-func">
                    <div class="col s8">
                        <input type="text" name="titulo" placeholder="Título">
                    </div>
                    <div class="col s4">
                        <button type="submit" class="btn-margin-top btn waves-effect waves-light pink">Salvar</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="table">
            <table class="default-table">
                <thead>
                    <tr class="default-table-tr">
                        <th>Título</th>
                        <th>Data em que foi proposta</th>
                        <th>Estado</th>
                        <th>Trocar para finalizada</th>
                        <th>Trocar para desenvolvimento</th>
                        <th>Trocar para proposta</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $pdo = Conexao::getInstance();
                        $sql="SELECT * FROM funcionalidades;"; 
                        $consulta = $pdo->query($sql);
                        while ($linha = $consulta->fetch(PDO::FETCH_BOTH)) {
                    ?>
                            <tr class="default-table-tr">
                                <td><?php echo $linha['1']; ?></td>
                                <td><?php echo $linha['2']; ?></td>
                                <td class="<?php echo $linha['3']; ?>"><?php echo ucfirst($linha['3']); ?></td>
                                <td><?php echo '<a class="finalizada" href="alterarEstado.php?id='.$linha['0'].'&estado=finalizada">Trocar</a>'; ?></td>
                                <td><?php echo '<a class="desenvolvimento" href="alterarEstado.php?id='.$linha['0'].'&estado=desenvolvimento">Trocar</a>'; ?></td>
                                <td><?php echo '<a class="proposta" href="alterarEstado.php?id='.$linha['0'].' &estado=proposta">Trocar</a>'; ?></td>
                                <td><?php echo '<a class="excluir"href="excluir.php?id='.$linha['0'].'"><i class="material-icons">delete</i></a>'; ?></td>
                            </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>