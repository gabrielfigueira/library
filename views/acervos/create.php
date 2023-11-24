<?php 
require_once '../layout/header.php'; 
require_once '../../controller/acervo_controller.php';

  if (isset($_POST["editora_id"], $_POST["descricao"], $_POST["ano"], $_POST["autor"], $_POST["ano"], $_POST["quantidade"]))
  create($conn, $_POST["editora_id"], $_POST["descricao"], $_POST["ano"], $_POST["autor"], $_POST["ano"], $_POST["quantidade"]);
?>
  <div class="container">
    <div class="row">
          <a href="./index.php"><h1>Acervos - List</h1></a>
          <a class="btn btn-success text-white" href="./index.php">Prev</a>
      </div>
      <div class="row flex-center">
        <div class="form-div">
          <form class="form" action="create.php" method="POST">

            <label>Editora</label>
            <input type="number" name="editora_id"  min="0" required/>
            <label>Autor</label>
            <input type="text" name="autor" required/>

            <label>Ano</label>
            <input type="number" name="ano"  min="0" required/>

            <label>Quantidade</label>
            <input type="number" name="quantidade" min="0" required/>

            <label>Descrição</label>
            <input type="text" name="descricao" required/>

            <button class="btn btn-success text-white" type="submit">Salvar</button>
          </form>
        </div>
      </div>
  </div>
<?php require_once '../layout/footer.php'; ?>
