<?php 
  require_once '../layout/header.php';
  require_once '../../controller/acervo_controller.php';

  if(isset($_POST['id']))
  delete($conn, $_POST['id']);

?>

<h3>
  Acervos
  <small class="text-body-secondary">lista de acervos</small>
</h3>

<div class="row">
  <div class="col-4">
    <a class="btn btn-secondary text-white" href="./index.php">Lista de acervos</a>
  </div>
</div>
<div class="row flex-center">
  <div class="form-div">
    <form class="form" action="./delete.php" method="POST">
        <label>Certezar que quer excluir??</label>
        <input type="hidden" name="id" value="<?=$_GET['id']?>" required/>

        <button class="btn btn-danger text-white" type="submit">Sim</button>
    </form>
  </div>
</div>
<?php require_once '../layout/footer.php'; ?>
