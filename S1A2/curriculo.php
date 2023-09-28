<?php

$name = 'Fábio Pieluhowski Didio'; // string
$age = 26; // int
$salary_expectation = 10000.50; // float
$description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.  rem accusantium explicabo!';
$open_to_negociation = true; // bool

$skills = ['JavaScript', 'HTML5', 'Vue.JS'];

$address = [
    'cep' => '91220190',
    'city' => 'Porto Alegre',
    'street' => 'Dr. José Éboli',
    'state' => 'Rio Grande do Sul',
    'neighborhood' => 'Jardim Itú',
    'number' => 248,
];

$contacts = (object)[
    'github' => 'https/github.com/fabio',
    'phone' => '51991731746',
];

$experiences = [
    [
        'company' =>  'Empresa X',
        'cargo' => 'Programador',
        'period' => '01/01/2001 - 02/02/2002',
        'description' => '.....................'
    ],
    [
        'company' =>  'Empresa Y',
        'cargo' => 'Analista',
        'period' => '03/03/2003 - 04/04/2004',
        'description' => '.....................'
    ]
]

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 24px;
            margin-top: 20px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        p {
            margin: 0;
        }

        ul {
            list-style-type: square;
            padding-left: 20px;
        }
    </style>
</head>

<body>

    <header>
        <h1><?php echo $name ?></h1>
        <p><?php echo "$address[street], $address[number] - $address[neighborhood] " ?></p>
        <p><?php echo "$address[cep], $address[city] - $address[state] " ?></p>
        <p><?php Github:
            echo $contacts->github ?></p>
        <p>Telefone: <?php echo $contacts->phone ?> </p>

    </header>

    <div class="container">
        <h2>Resumo Profissional</h2>
        <p><?php echo $description ?></p>

        <h2>Experiência Profissional</h2>
        <ul>
            <?php foreach ($experiences as $experience) { ?>
                <li>
                    <p><strong><?php echo $experience['company'] ?></strong></p>
                    <p>Cargo: <?php echo $experience['cargo'] ?></p>
                    <p>Período: <?php echo $experience['period'] ?></p>
                    <p><?php echo $experience['description'] ?></p>
                </li>
            <?php } ?>
        </ul>

        <h2>Formação Acadêmica</h2>
        <ul>
            <li>
                <p><strong>Nome da Universidade</strong></p>
                <p>Curso: Nome do Curso</p>
                <p>Ano de Conclusão: Ano de Conclusão</p>
            </li>
            <!-- Adicione mais formações acadêmicas conforme necessário -->
        </ul>

        <h2>Habilidades Técnicas</h2>
        <ul>
            <li><?php echo $skills[0] ?></li>
            <li><?php echo $skills[1] ?></li>
            <li><?php echo $skills[2] ?></li>
        </ul>
    </div>
</body>

</html>