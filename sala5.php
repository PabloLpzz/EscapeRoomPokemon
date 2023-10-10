<?php
    $combinacionSecreta = 11;

    if (isset($_POST["combSecreta"])) {
        $combinacionSecreta = $_POST["combSecreta"];
    }

    $intentos = 0;

    if (isset($_POST["intentos"])) {
        $intentos = $_POST["intentos"];
    }

    if (isset($_POST["pos1"])) {
        if ($combinacionSecreta == ($_POST['pos1'] . $_POST['pos2'])) {
            header('Location: salaEnhorabuena.php');
            die();
        } else {
            $intentos++;
    
            if ($intentos >= 3) {
                header('Location: hasPerdido.php'); 
                die();
            }
        }
    }
?>

<html>
<style>
    body {
        background-image: url("https://i.pinimg.com/736x/0a/d7/40/0ad740bdde2d5ed0f5a641ebefaff38b.jpg");
        background-size: 100%;
        background-repeat: no-repeat;
    }

    pre{
        color:black;
    }
</style>

<head>
    <title>Sala Final?</title>
</head>

<body>

    <center><br>
        <pre>
            Para ganar aquí, presta mucha atención,
            La generación de los Pokémon en las salas 3 y 4, es la solución.
            Solo tres intentos tendrás, así que es tu oportunidad,
            Adivina la combinación, ¡Con destreza y habilidad!
        </pre>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <form action="sala5.php" method="post">
            <!-- <input type="hidden" name="combSecreta" value="<?= $combinacionSecreta ?>"> -->
            <select name="pos1">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
            <select name="pos2">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
            <input type="hidden" name="intentos" value="<?= $intentos ?>">
            <br/>
            <input type="submit" value="PROBAR!!!">
        </form>
    </center>
    <br><br><br><br><br><br>
    <center>
        <form action="salaBienvenida.php" method="post">
            <input type="submit" name="boton" value="Volver al inicio"/>
        </form>
    </center>
</body>

</html>
