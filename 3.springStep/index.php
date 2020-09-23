<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spring Step</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" href="http://localhost/springstep.png" sizes="16x16" type="image/png">
</head>
<body>
<header>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>

</header>
<main>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
            <form class="mt-5" action="index.php" method="POST">
            <h4 class="text-center">Spring Step</h4>
                <div class="row mt-4">
                    <div>
                            <select class="custom-select" name="selector">
                                <option default selected disabled value="Marca">Marca del par de Zapatos</option>
                                <option value="Nike">Nike</option>
                                <option value="Adidas">Adidas</option>
                                <option value="Converse">Converse</option>
                                <option value="Puma">Puma</option>
                            </select>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Cantidad vendida" name="cantidadVendida">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary mt-5" name="botonEnviar">Enviar</button>
                
            </form>
            </div>
        </div>
    </div>

            <?php if(isset($_POST["botonEnviar"])):?>
                
                <div class="row justify-content-center">
                    <h4 class="mt-5">
                        <?php 

                            $cantidadVendida1=$_POST["cantidadVendida"];
                            $selectorA=$_POST["selector"];
                            
                            switch ($selectorA){
                                case 'Nike':
                                    $precio=300000;
                                    break;

                                case 'Adidas':
                                    $precio=320000;   
                                    break;

                                case 'Converse':
                                    $precio=180000;       
                                    break;

                                case 'Puma':
                                    $precio=280000;           
                                    break;

                                default:
                                    echo("Seleccione una Marca del par de Zapatos"); 
                                    echo("<br>");
                                    echo("<br>");   
                                    break;                          
                            };
                            
                            if ($cantidadVendida1 == 3) {
                                $total=$cantidadVendida1 * $precio;
                                echo("Valor de la compra sin descuento: $".$total);
                                echo("<br>");
                                echo("<br>");
                                $descuento=$total-($total * 0.1);
                                echo("Su compra fue de 3 pares de Zapatos y obtuvo un descuento del 10% sobre el valor de la compra");
                                echo("<br>");
                                echo("<br>");
                                echo("Valor a pagar: $".$descuento);
                            }
                            else if ($cantidadVendida1 > 3 && $cantidadVendida1 <=8) {
                                $total=$cantidadVendida1 * $precio;
                                echo("Valor de la compra sin descuento: $".$total);
                                echo("<br>");
                                echo("<br>");
                                $descuento=$total-($total * 0.2);
                                echo("Su compra fue de ".$cantidadVendida1." pares de Zapatos y obtuvo un descuento del 20% sobre el valor de la compra");
                                echo("<br>");
                                echo("<br>");
                                echo("Valor a pagar: $".$descuento);
                            }
                            else if ($cantidadVendida1 > 8) {
                                $total=$cantidadVendida1 * $precio;
                                echo("Valor de la compra sin descuento: $".$total);
                                echo("<br>");
                                echo("<br>");
                                $descuento=$total-($total * 0.5);
                                echo("Su compra fue de ".$cantidadVendida1." pares de Zapatos y obtuvo un descuento del 50% sobre el valor de la compra");
                                echo("<br>");
                                echo("<br>");
                                echo("Valor a pagar: $".$descuento);
                            }
                            else if($cantidadVendida1 > 0 && $cantidadVendida1 <3){
                                $total=$cantidadVendida1 * $precio;
                                echo("Valor a pagar: $".$total);
                            }
                            else{
                                echo("Cantidad vendida no definida");
                            };
                       
                                                           
                        ?>
                    </h4>
                </div>
                    
            <?php endif ?>
            
</main>

    <footer>
   
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>