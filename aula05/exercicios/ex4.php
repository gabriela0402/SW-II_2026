<?php

if (isset($_GET['email']) && !empty($_GET['email'])) {
    
    $emailBuscado = trim($_GET['email']);
    $caminhoArquivo = 'usuarios.json';

    if (!file_exists($caminhoArquivo)) {
        die("Erro: O arquivo 'usuarios.json' não foi encontrado.");
    }

    $conteudoJson = file_get_contents($caminhoArquivo);
    $usuarios = json_decode($conteudoJson, true);

    $usuarioEncontrado = null;

    if (is_array($usuarios)) {
        foreach ($usuarios as $usuario) {
            if (isset($usuario['email']) && $usuario['email'] === $emailBuscado) {
                $usuarioEncontrado = $usuario;
                break;
            }
        }
    }

    echo "<h2>Resultado da Busca</h2>";

    if ($usuarioEncontrado) {
        echo "<strong>Usuário encontrado!</strong><br>";
        echo "Nome: " . $usuarioEncontrado['nome'] . "<br>";
        echo "Email: " . $usuarioEncontrado['email'] . "<br>";
    } else {
        $emailSeguro = htmlspecialchars($emailBuscado);
        echo "<p style='color: red;'>Erro: Usuário com o e-mail <strong>$emailSeguro</strong> não encontrado.</p>";
    }

} else {
    echo "<h2>Busca de Usuários</h2>";
    echo "Por favor, preencha o formulário para pesquisar.";
}

?>