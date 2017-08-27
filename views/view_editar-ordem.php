<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Ordem</title>
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
            
            <h2 class="w3-margin-bottom w3-margin-left"><i class="fa fa-pencil w3-xxlarge"></i> Editar Ordem</h2>     
           
            <section class="w3-card-4 w3-white folha-edit w3-margin-bottom">
                <h3 class="w3-center">Ordem numero: 82666</h3>
                
                <form class="w3-container" action="">
                    <label for="">Técinco:</label>
                    <select class="w3-select w3-border" name="tecnico">
                        <option value="" disabled selected>Selecione um técnico</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>

                    <br><br>

                    <label for="">Situação:</label>
                    <select class="w3-select w3-border" name="tecnico">
                        <option value="" disabled selected>Selecione a situação</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>

                    <br><br>

                    <label for="">Data de entrada:</label>
                    <input type="date" class="w3-input w3-border">

                    <br>

                    <label for="">Prazo:</label>
                    <input type="date" class="w3-input w3-border">

                    <br>

                    <p><label for="">Defeitos Relatados:</label></p>
                    <textarea name="" ></textarea>

                    <br><br>

                    <p><label for="">Orçamento:</label></p>
                    <textarea name="" ></textarea>
                </form>
                
                <p>
                    <a href="index.php?req=controller_ver-ordem" class="w3-button w3-blue w3-right">Salvar</a>
                </p>
                        
            </section>

        </section> <!-- fim da section.area -->
       
    </main>

    <script src="assets/js/functions.js"></script>
</body>
</html>