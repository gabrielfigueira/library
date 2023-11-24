<?php 
require_once '../layout/header.php'; 
require_once '../../controller/editora_controller.php';

  if (isset($_POST["nome"]))
    updateEditora($conn, $_POST["nome"]);

  $editora = findEditora($conn, $_GET['id']);
?>
<div class="container">
  <div class="row">
    <div class="col-4">
      <a class="btn btn-secondary text-white" href="./index.php">Lista de Editoras</a>
    </div>
  </div>
  <div class="row flex-center">
      <div class="form-div">
          <form class="form" action="create.php" method="POST">
              <label>Nome</label>
              <input type="text" name="nome" value="<?=htmlspecialchars($editora['nome'])?>" required/>
              <button class="btn btn-success text-white" type="submit">Save</button>
          </form>
      </div>
  </div>
</div>

<?php require_once '../layout/footer.php'; ?>
