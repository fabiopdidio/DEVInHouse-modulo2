<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá, mundo!</title>
</head>

<body>
    <?php
    $nome = "Fábio";
    $idade = 26;
    $salario = 2100.00;
    $is_old = false;
    $lista_nomes = ['fulano', 'beltrano', 'ciclano'];
    $pessoa = ['nome' => 'fulano', 'idade' => 26];
    $pessoas = [
        ['nome' => 'fulano', 'idade' => 26],
        ['nome' => 'beltrano', 'idade' => 30]
    ]
    ?>

    <?php echo "meu nome é $nome e tenho $idade anos" ?>;

</body>

</html>