<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postobon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" href="http://localhost/postobon.png"  type="image/png">
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
            <h4 class="text-center">Postobon</h4>
                <div class="row mt-4">
                    <div class="col">
                        <input type="number" required="required" class="form-control" placeholder="Horas trabajadas" name="horasTrabajadas">
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

                            $horasTrabajadasA=$_POST["horasTrabajadas"];
                            $pagoHora = 20000;
                            $pagoExtra = 25000; 

                            if($horasTrabajadasA < 0){

                                echo("Ingrese valores positivos");

                            }
                            else if($horasTrabajadasA <= 40){

                                $sueldoSemanal = $horasTrabajadasA * $pagoHora;
                                
                                echo("Su sueldo semanal es de: $".$sueldoSemanal);

                            }
                            else if ($horasTrabajadasA > 40){

                                $horasExtra = $horasTrabajadasA - 40;
                                $sueldoNormal = 40 * $pagoHora;
                                $sueldoExtra = $horasExtra * $pagoExtra;
                                $sueldoSemanal = $sueldoNormal + $sueldoExtra; 
                                
                                echo("Su sueldo semanal es de: $".$sueldoSemanal);
                                echo("<br>");
                                echo("<br>");
                                echo("Recuerde que las horas extras tienen un valor de $".$pagoExtra);
                                echo("<br>");
                                echo("<br>");
                                echo("Esta semana usted trabajo ".$horasExtra." hora(s) extra(s) y obtuvo un sueldo extra de: $".$sueldoExtra);
                                
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