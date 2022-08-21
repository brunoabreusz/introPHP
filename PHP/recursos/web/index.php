<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site PHP</title>
    <link rel="stylesheet" href="includes-require/styles.css">
</head>
<body>


    <?php
        include('includes-require/header.php'); // inclui um arquivo - é a ideia de componente vue.
        //include_once -> inclui apenas uma única vez.
    ?>

<div class="">
    <?php
        echo 'Sou o conteudo php do site.'
    ?>
</div>

    <?php
        require('includes-require/footer.php'); // obriga a encontrar esse arquivo. e tudo que está pra baixo não funciona.
        //require_once
    ?>

</body>
</html>