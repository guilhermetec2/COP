<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Tecnico</title>
    <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
</head>

<body>

    <!-- Criar regra para modificar o NAV dependendo do usuário -->
    <?php
        require_once __DIR__.'/../views/header-usuario.php';
    ?>
    
    <main class="w3-container">
        <section class="area">
            
            <h2 class="w3-margin-bottom w3-margin-left"><i class="fa fa-home w3-xxlarge"></i> Home de Jeferson Machado</h2>     
                       
            <section class="w3-container w3-margin-top">
                <!-- aqui aparecem os cards com o numero que OSs em cada status -->
                <div class="w3-row w3-margin-bottom">
                    <p> <h3>Produção do dia:</h3> </p>
                    <a href="" class="w3-button w3-blue">PRONTOS <span class="w3-badge w3-margin-left w3-white">5</span></a>
                    <a href="" class="w3-button w3-khaki">ORÇADOS <span class="w3-badge w3-margin-left w3-white">10</span></a>
                    <a href="" class="w3-button w3-dark-grey">MONTAGENS <span class="w3-badge w3-margin-left w3-white">2</span></a>
                    <a href="" class="w3-button w3-amber w3-right">PARA ORÇAR<span class="w3-badge w3-margin-left w3-white">8</span></a>
                </div>

                <!-- aqui aparecem os cards com o numero que OSs em cada status -->
                <div class="w3-row container-home-tecnico">
                    <p> <h3>Fila de produção:</h3> </p>
                    <div class="card-status w3-card-4 w3-hover-opacity" onclick="location.href = 'index.php?req=controller_buscar-ordem'"><!-- inicio .card-status -->
                        <div class="card-status-head w3-red"><h3>Urgentes</h3></div>
                        <div class="card-status-body">
                            <p>5</p>  
                        </div>                 
                    </div><!-- fim .card-status -->

                    <div class="card-status w3-card-4 w3-hover-opacity" onclick="location.href = 'index.php?req=controller_buscar-ordem'"><!-- inicio .card-status -->
                        <div class="card-status-head w3-deep-orange"><h3>Garantia</h3></div>
                        <div class="card-status-body">
                            <p>1</p>  
                        </div>                 
                    </div><!-- fim .card-status -->

                    <div class="card-status w3-card-4 w3-hover-opacity" onclick="location.href = 'index.php?req=controller_buscar-ordem'"><!-- inicio .card-status -->
                        <div class="card-status-head w3-light-green"><h3>Aprovadas</h3></div>
                        <div class="card-status-body">
                            <p>3</p>  
                        </div>                 
                    </div><!-- fim .card-status -->

                    <div class="card-status w3-card-4 w3-hover-opacity" onclick="location.href = 'index.php?req=controller_buscar-ordem'"><!-- inicio .card-status -->
                        <div class="card-status-head w3-dark-grey"><h3>Montagens</h3></div>
                        <div class="card-status-body">
                            <p>3</p>  
                        </div>                 
                    </div><!-- fim .card-status -->

                </div>
            </section>

        </section> <!-- fim da section.area -->
       
    </main>

    <script src="assets/js/functions.js"></script>
</body>
</html>