<?php require_once("cabecalho.php");      
      require_once("banco-produto.php");
    
    $id = $_POST["id"];      
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];  
    $descricao = $_POST["descricao"];
    $categoria_id = $_POST['categoria_id'];
    if(array_key_exists('usado', $_POST)) {
        $usado = "true";
    } else {
        $usado = 0;
    }    
    
    if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>
        <p class="text-success">O Produto <?= $nome; ?> - <?= $preco; ?> foi alterado com sucesso!</p>
    <?php } else { ?>
        <p class="text-danger">O Produto <?= $nome; ?> não foi alterado!</p>
    <?php               
    }
        
?>
    
<?php require_once("rodape.php");?>