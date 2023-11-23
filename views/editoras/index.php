<?php 
  require_once '../layout/header.php';
  require_once '../../controller/editora_controller.php';
  $editoras = AllEditoras($conn);
?>

<h3>
  Editoras
  <small class="text-body-secondary">lista de editoras</small>
</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($editoras as $editora): ?>
      <tr>
        <td class="user-name"><?=htmlspecialchars($editora['id'])?></td>
        <td class="user-email"><?=htmlspecialchars($editora['nome'])?></td>
        <td>
          <a class="btn btn-primary text-white" href="./update.php?id=<?=$editora['id']?>">Edit</a>
        </td>
        <td>
          <a class="btn btn-danger text-white" href="./delete.php?id=<?=$editora['id']?>">Remove</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php require_once '../layout/footer.php'; ?>
