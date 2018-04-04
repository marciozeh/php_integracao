<?php require_once("../../conexao/conexao.php"); ?>

<?php 
//consulta bando de dados

    $produtos = "SELECT produtoID, nomeproduto,tempoentrega, precounitario, imagempequena ";
    $produtos .= "FROM produtos";
    $resultado = mysqli_query($conecta, $produtos);
    if(!$resultado){
        dia("falha na consulta ao banco");
    }
    
    
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("_incluir/topo.php")?>
        
        <main>  
            <?php
                while($linha = mysqli_fetch_assoc($resultado)){                    
            ?>
            
            <ul>
                <li><?php echo $linha["nomeproduto"]?></li>
                <li>Tempo de Entrega : <?php echo $linha["tempoentrega"]?></li>
                <li>Preco Unitario : <?php echo $linha["precounitario"]?></li>
            </ul>
            
            <?php
                }                    
            ?>
            
        </main>

        <?php include_once("_incluir/rodape.php")?>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>