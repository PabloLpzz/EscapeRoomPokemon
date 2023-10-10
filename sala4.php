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
    <img src="https://pm1.aminoapps.com/6346/8c0fe1350f915024ab662bc936fcb9d30e8f564c_hq.jpg" alt="Imagen" class="centered-image">
    <pre style="color:white">
    </pre>
    <br>
    <form action="sala4.php" method="post">
        <?php
        $combinacionSecreta = "MEWTWO";
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
