<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Cadastre um livro </h2>

    <form action="/home" method="POST">
        <label>Titulo</label>
        <input type="text" name="title"><br>

        <label>Autor</label>
        <input type="text" name="author"><br>

        <button type="submit">Registrar</button>
    </form>
    <h2>Livros</h2>

    <?php if(count($books) > 0) { ?>
        <ul>
        <?php for($i = 0; $i < count($books); $i++){ ?>
            <li><?php echo $books[$i]["titulo"] ?></li>
        <?php } ?>
    <?php } ?>
</body>
</html>