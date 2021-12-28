<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="scss/dist/estilos.css">
    <title>Etiketas</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <button class="btn btn-secondary my-2 my-sm-0" type="button" onclick="window.print()">
        Imprimir
    </button>

        <form class="form-inline my-2 my-lg-0 ml-auto">
        <input class="form-control mr-sm-2" type="text" placeholder="buscar por municipio" aria-label="Search" id="buscador">
        </form>

    </nav>

    <div class="container">
        <div class="row">
        

    <?php
        require 'config.php';

        $consulta = $conexion->query("SELECT DISTINCT zona FROM area7 ORDER BY zona ASC");
        
        $count = 0;
        while($fila = $consulta->fetch_array()) {
            $count++;
            echo '<div class="col-md-3 mt-1 caja">';
            echo '<div class="lazo bg-primary"></div>';
            echo '<div class="card">';
            echo '<div class="card-header bg-primary">';
            echo '<h6 class="text-white">'.$fila["zona"].'</h6>';
            echo '</div><div class="card-body">';
            $consul = $conexion->query("SELECT * FROM area7 WHERE zona = '$fila[zona]'");

            while($zona = $consul->fetch_array()) {
                echo '<h6 class="text-secondary">• <span class="text-dark">'.$zona["grupo"].'</span></h6>';
            }

            echo "</div></div></div>";
        }
?>

        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>
</body>

</html>