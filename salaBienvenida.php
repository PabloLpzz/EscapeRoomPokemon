<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url('https://i.etsystatic.com/33782074/r/il/c144fd/3646648521/il_fullxfull.3646648521_byu7.jpg');
            background-size: 100% 185%;
            background-repeat: no-repeat;
        }
        .content {
            text-align: center;
            padding-top: 100px;
        }
    </style>
</head>
<body>
    <center>
    <p style="color:white;">Para salir, necesitarás entrar <a href="https://www.pokemon.com/es/pokedex">aqui</a></p>
    <br><br><br><br><br><br>
    <!-- <?php var_export($_POST);?> -->
    <?php
    if (isset($_POST['boton'])) {
        if ($_POST['boton'] == "Sala 1") {
            header('Location: sala1.php');
        } elseif ($_POST['boton'] == "Sala 2") {
            header('Location: sala2.php');
        }
    }?>
        <h1></h1>
        <br><br><br><br><br><br><br><br><br><br><br>
        <form action="salaBienvenida.php" method="post">
            <input type="submit" name="boton" style="padding: 10px 20px;" value="Sala 1"/>
            <input type="submit" name="boton" style="padding: 10px 20px;" value="Sala 2"/>
        </form>
        </center>
</body>
</html>
