<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" href="http://localhost/calculator.png" sizes="16x16" type="image/png">
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
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
                <div class="col-4">
                <form class="mt-5" action="index.php" method="POST">
                <h4 class="text-center">Calculadora Básica</h4>
                    <div class="row">
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Número 1" name="numero1">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Número 2" name="numero2">
                        </div>
                        <div>
                            <select class="custom-select" name="selector">
                                <option selected>Operación</option>
                                <option value="+">Suma</option>
                                <option value="-">Resta</option>
                                <option value="*">Multiplicación</option>
                                <option value="/">División</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5" name="botonEnviar">Enviar</button>
                </form>
                </div>
            </div>
        </div>

        <?php if(isset($_POST["botonEnviar"])):?>
        
        <div class="row justify-content-center">
            <h4>
                <?php 

                    $numeroA=$_POST["numero1"];
                    $numeroB=$_POST["numero2"];
                    $operador=$_POST["selector"];
                    
                    switch ($operador){

                        case "+":
                            $resultado = $numeroA + $numeroB;
                            echo("El resultado de la suma es: ".$resultado);
                            break;

                        case "-":
                            $resultado = $numeroA - $numeroB;
                            echo("El resultado de la resta es: ".$resultado);
                            break;

                        case "*":
                            $resultado = $numeroA * $numeroB;
                            echo("El resultado de la multiplicación es: ".$resultado);
                            break;

                        case "/":
                            if($numeroB == 0){

                                echo("La división entre 0 es indeterminada");
                                
                            }
                            else{

                                $resultado = $numeroA / $numeroB;
                                echo("El resultado de la división es: ".$resultado);
                                
                            }
                            break;
                        
                    }
                        
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