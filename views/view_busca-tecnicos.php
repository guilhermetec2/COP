<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscar Técnicos</title>
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
            
            <h2 class="w3-margin-bottom w3-margin-left"><i class="fa fa-wrench w3-xxlarge"></i> Buscar Técnicos</h2>     
           
            <section class="w3-container search-form">
                <div class="w3-third">
                    <label class="w3-text-blue"><b>Nome do Técnico:</b></label>
                    <input class="w3-input w3-border" type="text" placeholder="Digite o nome do técnico">
                </div>
                <button class="w3-button w3-white w3-border"><i class="fa fa-search w3-large"></i></button>           
            </section>

            
            <section class="w3-container w3-margin-top">
                <!-- aqui aparece o resultado da pesquisa -->
                <?php for($i = 0; $i < 6; $i++){ ?>
                <div class="card-tecnico w3-card-4"><!-- inicio .card-ordem -->
                    <div class="card-tecnico-head w3-blue"><h3>Jeferson Machado</h3></div>
                    <div class="card-tecnico-body">
                        <table class="w3-table w3-striped">
                            <tr class="w3-grey">
                                <td>Setor:</td>
                                <td>Hardware</td>
                            </tr>
                            <tr class="w3-large">
                                <td>Ordens na fila:</td>
                                <td>6</td>
                            </tr>
                            <tr class="w3-large">
                                <td>Aguard. aprovação</td>
                                <td>3</td>
                            </tr>
                            <tr class="w3-large">
                                <td>Aprovadas</td>
                                <td>4</td>
                            </tr>
                            <tr class="w3-large">
                                <td>Prontas hoje</td>
                                <td>5</td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-tecnico-footer w3-light-grey w3-padding">
                        <a href="index.php?req=controller_ver-ordem" class="w3-text-blue">Ver tudo</a>
                        <a href="index.php?req=controller_editar-ordem" class="w3-button w3-blue w3-margin-left">Editar</a>
                    </div>
                </div><!-- fim .card-ordem -->
                <?php } ?>        
                
            </section>

        </section> <!-- fim da section.area -->
       
    </main>

    <script src="assets/js/functions.js"></script>
</body>
</html>