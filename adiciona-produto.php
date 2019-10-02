<?php require_once("cabecalho.php");      
      require_once("banco-produto.php");
      require_once("logica-usuario.php");
    
    verificaUsuario();

    $nome = $_POST["nome"];
    $preco = $_POST["preco"];  
    $descricao = $_POST["descricao"];
    $categoria_id = $_POST['categoria_id'];
    if(array_key_exists('usado', $_POST)) {
        $usado = "true";
    } else {
        $usado = 0;
    }    
    
    if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>
        <p class="text-success">Produto <?= $nome; ?> - <?= $preco; ?> adicionado com sucesso!</p>
    <?php } else { ?>
        <p class="text-danger">Produto <?= $nome; ?> não adicionado!</p>
    <?php               
    }
        
?>
    
<?php include("rodape.php");?>