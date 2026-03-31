<?php

$produtoParaRemover = "Teclado"; 
$caminhoArquivo = 'dado2.json';

if (!file_exists($caminhoArquivo)) {
    die("Erro: O arquivo '$caminhoArquivo' não foi encontrado.");
}

$conteudoJson = file_get_contents($caminhoArquivo);
$produtos = json_decode($conteudoJson, true);

if (isset($produtos['nome'])) {
    $produtos = [$produtos];
}

if (!is_array($produtos)) {
    die("Erro: O arquivo JSON está vazio ou em formato inválido.");
}

$novoArrayProdutos = [];
$encontrou = false;

foreach ($produtos as $produto) {
    if (is_array($produto) && isset($produto['nome']) && $produto['nome'] === $produtoParaRemover) {
        $encontrou = true;
    } else {
        $novoArrayProdutos[] = $produto;
    }
}

if ($encontrou) {
    $jsonAtualizado = json_encode($novoArrayProdutos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents($caminhoArquivo, $jsonAtualizado);

    echo "Sucesso: O produto '<strong>$produtoParaRemover</strong>' foi removido!";
} else {
    echo "Aviso: O produto '<strong>$produtoParaRemover</strong>' não foi encontrado.";
}

?>