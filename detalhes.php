<?php 
    require_once 'autoload.php'; 
    require_once 'dados.php';

    $key = filter_input(INPUT_GET, 'id');
    if(!array_key_exists($key ,$clientes)) {
        header('location: /');
    }
?>

<?php require_once 'includes/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1>Detalhes do Cliente</h1>
            </div>
        </div>
        
            <div class="row">
                <p>Nome:<strong><?= $clientes[$key]->getNome(); ?></strong></p>
                <p>E-Mail: <?= $clientes[$key]->getEmail(); ?></p>
                <p>Tipo de Pessoas: <?= $clientes[$key]->getTipo(); ?></p>
                <p>Documento de Tipo: <?= $clientes[$key]->getDocumentoTipo(); ?></p>
                <p>Documento de Numero: <?= $clientes[$key]->getDocumentoNumero(); ?></p>
                <p>Telefone: <?= $clientes[$key]->getTelefone(); ?></p>
                <p>Grau: <?= $clientes[$key]->getGrau(); ?></p>
            </div>

            <div class="row">
                <p>Endereço:<?= $clientes[$key]->getRua(); ?></p>
                
                <button class="btn btn-primary" onclick="history.back()">Voltar</button>
            </div>
        
    </div>

<?php  require_once 'includes/footer.php'; ?>

