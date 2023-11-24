<?php 
  require_once '../layout/header.php';
  require_once '../../controller/acervo_controller.php';
  $acervos = AllAcervos($conn);
?>

<h3>
  Acervos
  <small class="text-body-secondary">lista de acervos</small>
</h3>

<a class="text-white btn btn-success text-white" href="/views/acervos/create.php">Novo</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($acervos as $acervo): ?>
      <tr>
        <td class="user-name"><?=htmlspecialchars($acervo['id'])?></td>
        <td class="user-email"><?=htmlspecialchars($acervo['editora_id'])?></td>
        <td class="user-email"><?=htmlspecialchars($acervo['autor'])?></td>
        <td class="user-email"><?=htmlspecialchars($acervo['ano'])?></td>
        <td class="user-email"><?=htmlspecialchars($acervo['quantidade'])?></td>
        <td class="user-email"><?=htmlspecialchars($acervo['descricao'])?></td>
        <td>
          <a class="btn btn-primary text-white" href="/views/acervos/update.php?id=<?=$acervo['id']?>">Editar</a>
        </td>
        <td>
          <a class="btn btn-danger text-white" href="/views/acervos/delete.php?id=<?=$acervo['id']?>">Excluir</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php require_once '../layout/footer.php'; ?>
