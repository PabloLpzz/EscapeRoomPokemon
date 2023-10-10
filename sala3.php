<html>
<head>
    <title>En este no hay pista...</title>
    <style>
        body {
            background-color:white ;
            background-size: 100%;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }

        .centered-image {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<center>
    <br><br><br><br><br><br><br>
    <img src="https://cdn.vox-cdn.com/thumbor/-famZFxgMFo2h1HQ5UjIIcBszrI=/0x0:1920x1080/1600x900/cdn.vox-cdn.com/uploads/chorus_image/image/53254027/who_pokemon.0.jpg" alt="Imagen" class="centered-image" width="50%" height="50%">
    <pre style="color:white">
    </pre>
    <br>
    <form action="sala3.php" method="post">
        <?php
        $combinacionSecreta = "PIKACHU";
        if (!isset($_POST["combSecreta"])) {
            $intento = "";
        } else {
            $intento = strtoupper($_POST['combSecreta']);
            if ($intento == $combinacionSecreta) {
                header('Location: sala5.php');
                die();
            }
        }
        ?>
        <input autocomplete="off" type="text" name="combSecreta" value="<?=$intento?>">
        <br>
        <input type="submit" value="PROBAR!!!">
    </form>
</center>
<br>
<center>
    <form action="salaBienvenida.php" method="post">
        <input type="submit" name="boton" value="Volver al inicio">
    </form>
</center>
</body>
</html>
