<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe dados</title>
</head>
<body>
    <?php
    
        $nome = htmlspecialchars($_POST['nome']);
        $email = $_POST['email'];
        $idade = $_POST['idade'];

        $ano_atual = date('Y');
        $ano = $ano_atual - $idade;

    ?>

    <p>O nome é: <?php echo $nome; ?></p>
    <p>O email é: <?php echo $email; ?></p>
    <p>A idade é: <?php echo $idade; ?></p>

    <hr>

    <p>Aahh então você nasceu no ano de <?php echo $ano ?></p>

    <?php
        if ($idade>=18) {
            echo"<p style='color: green'>Maior de idade</p>";
        }else{
            echo"<p style='color: red'>Menor de idade</p>";
        }
    ?>

</body>
</html>