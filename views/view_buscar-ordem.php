<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscar Ordem</title>
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
            
            <h2 class="w3-margin-bottom w3-margin-left"><i class="fa fa-search w3-xxlarge"></i> Buscar Ordem</h2>     
           
            <section class="w3-container search-form">
                <div class="w3-third">
                    <label class="w3-text-blue"><b>Numero da Ordem de Serviço</b></label>
                    <input class="w3-input w3-border" type="number" placeholder="Somente numeros">
                </div>
                <button class="w3-button w3-white w3-border"><i class="fa fa-search w3-large"></i></button>           
            </section>

            
            <section class="w3-container w3-margin-top">
                <!-- aqui aparece o resultado da pesquisa -->
                <?php for($i = 0; $i < 10; $i++){ ?>
                <div class="card-ordem w3-card-4"><!-- inicio .card-ordem -->
                    <div class="card-ordem-head w3-light-green"><h3>82666</h3></div>
                    <div class="card-ordem-body">
                        <table class="w3-table w3-striped">
                            <tr>
                                <td>Técnico:</td>
                                <td>Guilherme Rodrigues</td>
                            </tr>
                            <tr>
                                <td>Situação:</td>
                                <td>Aprovado</td>
                            </tr>
                            <tr>
                                <td>Entrada:</td>
                                <td>30/06/2017</td>
                            </tr>
                            <tr>
                                <td>Prazo:</td>
                                <td>02/07/2017</td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-ordem-footer w3-light-grey w3-padding">
                        <a href="#" class="w3-text-blue">Ver tudo</a>
                        <a href="#" class="w3-button w3-blue w3-margin-left">Editar</a>
                    </div>
                </div><!-- fim .card-ordem -->
                <?php } ?>        
                
            </section>

        </section> <!-- fim da section.area -->
       
    </main>

    <script src="assets/js/functions.js"></script>
</body>
</html>