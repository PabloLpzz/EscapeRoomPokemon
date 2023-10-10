<html>
<style>
        body {
            background-image: url("/ProyectoEscapeRoom/imagenes/fondoSala1.jpeg");
            background-size: 100%;
            background-repeat: no-repeat;
            
        }
        .content {
            text-align: center;
            padding-top: 100px;
        }
    </style>
    <?php
    #var_export($_POST);
    if (!isset($_POST["combSecreta"])) {
        $combinacionSecreta=004;
    }else{
        $combinacionSecreta= $_POST['combSecreta'];
        if ($combinacionSecreta==($_POST['pos1'].$_POST['pos2'].$_POST['pos3'])) {
            header('Location: sala4.php');
            die();
        }
    }
    ?>
    <head>
    <title>Pokedex?</title>
    <link rel="icon" type="image/x-icon" href="/ProyectoEscapeRoom/imagenes/sala1.ico">
    </head>
    <body>
        
        <center><br>
            <pre>
En la web siempre estoy presente,
No importa el fondo, soy relevante.
Un pequeño ícono, no pases por alto,
En la pestaña del navegador, yo soy el voto.

Soy distintivo en cada sitio,
Debo ser pequeño, sin más grito.
No importa la página que quieras ver,
Sin mí, algo falta, ¿quién soy? ¡Puedes entender?
</pre>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <form action="sala1.php" method="post">
            <input type="hidden" name="combSecreta" value="<?=$combinacionSecreta?>">
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
            <select name="pos3">
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