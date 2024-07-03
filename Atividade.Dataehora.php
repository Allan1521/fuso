<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atividade Fuso Horário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <h1>Fuso Horário</h1>
    <form action="" method="post">

        <select class="form-select" name="escolha" aria-label="Default select example">
            <option selected>Selecione o Fuso Horário</option>
            <option value="America/Sao_Paulo">America/Sao_Paulo</option>
            <option value="Europe/Lisbon">Europe/Lisbon</option>
            <option value="Australia/Sydney">Australia/Sydney</option>
            <option value="Asia/Tokyo">Asia/Tokyo</option>
            <option value="Africa/Nairobi">África/Nairobi</option>
            <option value="America/New_York">América/New_York</option>
           
        </select>
        <button type="submit">pesquisar</button>
           
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $regiao= $_POST['escolha'];
      
$date=new Datetime("now", new DatetimeZone("America/Sao_Paulo"));
echo"Data e hora de São Paulo: ".$date->format("Y-m-d H:i:s")."<br>";

$date->setTimezone(new DatetimeZone( $regiao));
echo"data e hora de Londres: ".$date->format("Y-m-d H:i:s")."<br>";
}
        ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>