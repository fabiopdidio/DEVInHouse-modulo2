<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta de Férias</title>
</head>

<body>

    <form class="container" method="post">
        <label>Nome do funcionário</label>
        <input type="text" placeholder="Digite o nome do funcionário" name="name">
        <br>
        <label>Data de início das férias</label>
        <input type="date" placeholder="Data de início das férias" name="start_date">
        <br>
        <label>Data de fim das férias</label>
        <input type="date" placeholder="Data de fim das férias" name="end_date">
        <br>
        <button type="submit">Gerar</button>
    </form>

    <?php
    if (isset($_POST['name']) && isset($_POST['start_date']) && isset($_POST['end_date'])) {
        echo $_POST['name'];
        echo $_POST['start_date'];
        echo $_POST['end_date'];
    } else {
        echo "Aguardando preenchimento";
    }
    ?>

</body>

<style>
    .container {
        margin: 0 auto;
        font-family: Arial, Helvetica, sans-serif;
    }

    button {
        background-color: skyblue;
    }

    input {
        margin-bottom: 8px;
    }
</style>

</html>