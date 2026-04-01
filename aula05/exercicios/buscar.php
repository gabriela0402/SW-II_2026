<?php
$emailBuscado = $_GET['email'] ?? 'maria@email.com';

$json_data = file_get_contents('usuarios04.json');
$usuarios = json_decode($json_data, true);

$usuarioEncontrado = null;

foreach ($usuarios as $usuario) {
    if ($usuario['email'] === $emailBuscado) {
        $usuarioEncontrado = $usuario;
        break;
    }
}

if ($usuarioEncontrado) {
    echo "<h3>Usuário Encontrado:</h3>";
    echo "Nome: " . $usuarioEncontrado['nome'] . "<br>";
    echo "Email: " . $usuarioEncontrado['email'] . "<br>";
    echo "Idade: " . $usuarioEncontrado['idade'];
} else {
    echo "Usuário com o email <strong>$emailBuscado</strong> não encontrado.";
}