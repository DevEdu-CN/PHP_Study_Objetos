<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Petr�polis',
    'bairro qualquer',
    'Minha rua',
    '71b'
    );
$outroEndereco = new Endereco(
    'Rio',
    'Centro',
    'Uma rua a�',
    '50'
    );

echo $umEndereco->bairro;
exit();