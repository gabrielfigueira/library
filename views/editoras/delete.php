<?php 
  require_once '../layout/header.php';
  require_once '../../controller/editora_controller.php';

  if(isset($_POST['id']))
  deleteEditora($conn, $_POST['id']);

?>

<h3>
  Editoras
  <small class="text-body-secondary">lista de editoras</small>
</h3>

<div class="row">
  <div class="col-4">
    <a class="btn btn-secondary text-white" href="./index.php">Lista de Editoras</a>
  </div>
</div>
<div class="row flex-center">
  <div class="form-div">
    <form class="form" action="./delete.php" method="POST">
        <label>Certezar que quer excluir??</label>
        <input type="hidden" name="id" value="<?=$_GET['id']?>" required/>

        <button class="btn btn-danger text-white" type="submit">Yes</button>
    </form>
  </div>
</div>
<?php require_once '../layout/footer.php'; ?>
