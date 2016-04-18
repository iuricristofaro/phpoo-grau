<?php  

require_once 'autoload.php';

require_once 'dados.php';

?>
<?php require_once 'includes/header.php'; ?>
   
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1>Listagem de Clientes</h1>
                </div>
            </div>

            <div class="alert alert-defaul" role="alert">
                <a href="?valor=asc" class="btn btn-primary">
                    <span aria-hidden="true"></span>&nbsp;Ordem Crescente
                </a>
                <a href="?valor=desc" class="btn btn-primary">
                    <span aria-hidden="true"></span>&nbsp;Ordem Decrescente
                </a>
            </div>
            <div class="row">
               <table id="tablaDatos" class="table table-bordered">
                <thead>
                    <tr>
                        <td class="list-group-item-danger">ID</td>
                        <td class="list-group-item-danger">Nome</td>
                        <td class="list-group-item-danger">E-mail</td>
                        <td class="list-group-item-danger">Documento Tipo</td>
                        <td class="list-group-item-danger">Documento Número</td>
                        <td class="list-group-item-danger">Endereço</td>
                        <td class="list-group-item-danger">Telefone</td>
                        <td class="list-group-item-danger">Grau</td>
                        <td class="list-group-item-danger">Exibir</td>
                    </tr>
                </thead>
                <tbody>
                
                    <?php foreach($clientes as $cliente): ?>
                    <tr>
                        <td class="list-group-item-success"><?= $cliente->getId() + 1; ?></td>
                        <td class="list-group-item-success"><?= $cliente->getNome(); ?></td>
                        <td class="list-group-item-success"><?= $cliente->getEmail(); ?></td>
                        <td class="list-group-item-success"><?= $cliente->getDocumentoTipo(); ?></td>
                        <td class="list-group-item-success"><?= $cliente->getDocumentoNumero(); ?></td>
                        <td class="list-group-item-success"><?= $cliente->getRua(); ?></td>
                        <td class="list-group-item-success"><?= $cliente->getTelefone(); ?></td>
                        <td class="list-group-item-success"><?= $cliente->getGrau(); ?></td>
                        <td class="list-group-item-success"><a href="detalhes.php?id=<?= $cliente->getId(); ?>"><img src="imagem/search.png" alt=""></a></td>
                    </tr>
                    <?php endforeach; ?>
                    
                </tbody>
            </table>
            </div>
        </div>
    
<?php  require_once 'includes/footer.php'; ?>

