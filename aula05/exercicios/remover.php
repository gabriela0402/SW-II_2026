<?php
$arquivo = 'produtos.json';
$nomeParaRemover = 'Moletom'; 

$conteudo = file_get_contents($arquivo);
$produtos = json_decode($conteudo, true);

$produtosAtualizados = array_filter($produtos, function($item) use ($nomeParaRemover) {
    return $item['nome'] !== $nomeParaRemover;
});

$produtosAtualizados = array_values($produtosAtualizados);

file_put_contents($arquivo, json_encode($produtosAtualizados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "Produto '$nomeParaRemover' removido com sucesso!";
?>