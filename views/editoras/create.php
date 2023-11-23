<?php 
require_once '../layout/header.php'; 
require_once '../../controller/editora_controller.php';

  if (isset($_POST["nome"]))
  create($conn, $_POST["nome"]);
?>
  <div class="container">
    <div class="row">
          <a href="../../../index.php"><h1>Users - Create</h1></a>
          <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
      </div>
      <div class="row flex-center">
          <div class="form-div">
              <form class="form" action="create.php" method="POST">
                  <label>Nome</label>
                  <input type="text" name="nome" required/>
                  <button class="btn btn-success text-white" type="submit">Save</button>
              </form>
          </div>
      </div>
  </div>
<?php require_once '../layout/footer.php'; ?>
