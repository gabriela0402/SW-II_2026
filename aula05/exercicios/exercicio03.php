<?php
$arquivo = 'produtos.json';

$conteudoJson = file_get_contents($arquivo);
$produtos = json_decode($conteudoJson, true); 

$novoProduto = [
    "nome" => "Moletom",
    "preco" => 90,
    "quantidade" => 5
];
$produtos[] = $novoProduto;

$jsonAtualizado = json_encode($produtos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
file_put_contents($arquivo, $jsonAtualizado);

echo "Produto adicionado com sucesso!";
?>
