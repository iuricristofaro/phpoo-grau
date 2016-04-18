<?php


$fisica1 = new SON\Pessoa\PessoaFisica();
$fisica1->setId(0);
$fisica1->setNome('Iuri Cristofaro');
$fisica1->setEmail('admin@agenciaweb.com');
$fisica1->setTipo('');
$fisica1->setDocumentoTipo('CPF');
$fisica1->setDocumentoNumero('111.222.333-44');
$fisica1->setTelefone('5951-8514');
$fisica1->setRua('Rua Australia Nº 01');
$fisica1->setGrau(1);

$fisica2 = new SON\Pessoa\PessoaFisica();
$fisica2->setId(1);
$fisica2->setNome('Maria Cristo');
$fisica2->setEmail('maria@agenciapublicudade.com');
$fisica2->setTipo('');
$fisica2->setDocumentoTipo('CPF');
$fisica2->setDocumentoNumero('123.456.789-01');
$fisica2->setTelefone('2392-2192');
$fisica2->setRua('Rua Brazil Nº 02');
$fisica2->setGrau(1);

$fisica3 = new SON\Pessoa\PessoaFisica();
$fisica3->setId(2);
$fisica3->setNome('José Alves');
$fisica3->setEmail('jose@programadorweb.com');
$fisica3->setTipo('');
$fisica3->setDocumentoTipo('CPF');
$fisica3->setDocumentoNumero('123.456.789-01');
$fisica3->setTelefone('4764-5395');
$fisica3->setRua('Rua Dubai Nº 03');
$fisica3->setGrau(1);

$fisica4 = new SON\Pessoa\PessoaFisica();
$fisica4->setId(3);
$fisica4->setNome('Dayana Oliveira');
$fisica4->setEmail('adayana@jp3.com');
$fisica4->setTipo('');
$fisica4->setDocumentoTipo('CPF');
$fisica4->setDocumentoNumero('123.456.789-01');
$fisica4->setTelefone('3553-3113');
$fisica4->setRua('Rua Colonbia Nº 04');
$fisica4->setGrau(1);


$fisica5 = new SON\Pessoa\PessoaFisica();
$fisica5->setId(4);
$fisica5->setNome('Leonadro Alves');
$fisica5->setEmail('leonadro@jogo.com');
$fisica5->setTipo('');
$fisica5->setDocumentoTipo('CPF');
$fisica5->setDocumentoNumero('126.458.783-02');
$fisica5->setTelefone('3433-3639');
$fisica5->setRua('Rua Rio de Janerio Nº 04');
$fisica5->setGrau(1);


$juridica1 = new SON\Pessoa\PessoaJuridica();
$juridica1->setId(5);
$juridica1->setNome('Cláudia Jesus');
$juridica1->setEmail('claudia@agenciadesign.com');
$juridica1->setTipo('');
$juridica1->setDocumentoTipo('CNPJ');
$juridica1->setDocumentoNumero('167.756.729/1411-12');
$juridica1->setTelefone('5295-5995');
$juridica1->setRua('Rua Equardor Nº 01');
$juridica1->setGrau(3);

$juridica2 = new SON\Pessoa\PessoaJuridica();
$juridica2->setId(6);
$juridica2->setNome('Pedro Fonseca');
$juridica2->setEmail('pedro@donocozinha.com');
$juridica2->setTipo('');
$juridica2->setDocumentoTipo('CNPJ');
$juridica2->setDocumentoNumero('153.429.715/1614-18');
$juridica2->setTelefone('2559-4513');
$juridica2->setRua('Rua Franças Nº 02');
$juridica2->setGrau(2);

$juridica3 = new SON\Pessoa\PessoaJuridica();
$juridica3->setId(7);
$juridica3->setNome('Flávia Lucas');
$juridica3->setEmail('flavia@chefaustralia.com');
$juridica3->setTipo('');
$juridica3->setDocumentoTipo('CNPJ');
$juridica3->setDocumentoNumero('129.453.716/1211-10');
$juridica3->setTelefone('5835-5925');
$juridica3->setRua('Rua Goianas Nº 03');
$juridica3->setGrau(4);

$juridica4 = new SON\Pessoa\PessoaJuridica();
$juridica4->setId(8);
$juridica4->setNome('Santiago');
$juridica4->setEmail('santiago@agenciabackend.com');
$juridica4->setTipo('');
$juridica4->setDocumentoTipo('CNPJ');
$juridica4->setDocumentoNumero('193.696.717.1012-20');
$juridica4->setTelefone('5555-5555');
$juridica4->setRua('Rua Holandas Nº 04');
$juridica4->setGrau(6);

$juridica5 = new SON\Pessoa\PessoaJuridica();
$juridica5->setId(9);
$juridica5->setNome('Marcelo Santos');
$juridica5->setEmail('marcelo@backendo5.com');
$juridica5->setTipo('');
$juridica5->setDocumentoTipo('CNPJ');
$juridica5->setDocumentoNumero('113.426.759./1010-02');
$juridica5->setTelefone('5115-1585');
$juridica5->setRua('Rua Walter thome Nº 05');
$juridica5->setGrau(6);


$Objs = [$fisica1, $fisica2, $fisica3, $fisica4, $fisica5, $juridica1, $juridica2, $juridica3,$juridica4, $juridica5];
$clientes = new ArrayObject($Objs);

if(isset($_GET['valor']) && $_GET['valor'] == 'asc'){
    asort($Objs);
    $clientes = new ArrayObject($Objs);
}

if(isset($_GET['valor']) && $_GET['valor'] == 'desc'){
    rsort($Objs);
    $clientes = new ArrayObject($Objs);
}

if(isset($_GET['id']) && $_GET['id'] == 'key'){
    $selecionado = $clientes[$_GET['id']];
}