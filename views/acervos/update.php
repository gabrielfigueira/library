<?php 
  require_once '../layout/header.php'; 
  require_once '../../controller/acervo_controller.php';

  if (isset($_POST["editora_id"], $_POST["descricao"], $_POST["ano"], $_POST["autor"], $_POST["ano"], $_POST["quantidade"]))
  update($conn, $_POST["id"],$_POST["editora_id"], $_POST["descricao"], $_POST["ano"], $_POST["autor"], $_POST["ano"], $_POST["quantidade"]);

  $acervo = findAcervo($conn, $_GET['id']);
?>
<div class="container">
  <div class="row">
    <div class="col-4">
      <a class="btn btn-secondary text-white" href="./index.php">Lista de acervos</a>
    </div>
  </div>
  <div class="row flex-center">
    <div class="form-div">
      <form class="form" action="create.php" method="POST">
        <label>Editora</label>
        <input type="number" name="editora_id"  min="0" value="<?=htmlspecialchars($acervo['editora_id'])?>" required/>
        <label>Autor</label>
        <input type="text" name="autor" value="<?=htmlspecialchars($acervo['autor'])?>" required/>

        <label>Ano</label>
        <input type="number" name="ano" min="0" value="<?=htmlspecialchars($acervo['ano'])?>" required/>

        <label>Quantidade</label>
        <input type="number" name="quantidade" min="0" value="<?=htmlspecialchars($acervo['quantidade'])?>" required/>

        <label>Descrição</label>
        <input type="text" name="descricao" value="<?=htmlspecialchars($acervo['descricao'])?>" required/>

        <button class="btn btn-success text-white" type="submit">Salvar</button>
      </form>
    </div>
  </div>
</div>

<?php require_once '../layout/footer.php'; ?>
