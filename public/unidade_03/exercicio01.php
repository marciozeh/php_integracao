<?php
// abrir conexao
    require_once("../../conexao/conexao.php");
?>

<?php
    //passo 3 consulta banco de dados
    $consulta_categorias = "SELECT *";
    $consulta_categorias .= " FROM categorias";
    //$consulta_categorias .= " WHERE categoriaID > 2";
    $categorias = mysqli_query($conecta, $consulta_categorias);
    
    if(!$categorias){
        die("Falha no banco");
    }
    
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <ul>
        <?php
            //passo 4 imprime resultados
            while ($registro = mysqli_fetch_assoc($categorias)) {
        ?>
            <li><?php echo $registro["nomecategoria"]?></li>
        <?php
        }
        ?>
        </ul>
        <?php
        //passo 5 liberar memoria
            mysqli_free_result($categorias);
        ?>
    </body>
</html>
<?php
// fechar conexao
    mysqli_close($conecta);
?>