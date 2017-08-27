<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Ordem</title>
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
            
            <h2 class="w3-margin-bottom w3-margin-left"><i class="fa fa-file w3-xxlarge"></i> Ver Ordem</h2>     
           
            <section class="w3-card-4 w3-white folha-ordem w3-margin-bottom">
                <h3 class="w3-center">Ordem numero: 82666</h3>
                <table class="w3-table">
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
                <div class="w3-panel">
                    <p>Defeitos Reletados:</p>
                    <br>
                    <p>
                        <textarea disabled>
                            lkjlkfjdslkjfklçdsjflkdsjfldksjflkdsjfdslfjdfljkdsfkljdsflkjfdsklfjdfjsklçfjsdlfjkdslfkjdsflkdjslsjlsfjsldfkjdsklçfdsjflkdsjfdsljkfdsldskjfdslkfjdsflk
                        </textarea>
                    </p>
                </div>

                <div class="w3-panel">
                    <p>Orçamento:</p>
                    <br>
                    <p>
                        <textarea disabled>
                            lkjlkfjdslkjfklçdsjflkdsjfldksjflkdsjfdslfjdfljkdsfkljdsflkjfdsklfjdfjsklçfjsdlfjkdslfkjdsflkdjslsjlsfjsldfkjdsklçfdsjflkdsjfdsljkfdsldskjfdslkfjdsflk
                        </textarea>
                    </p>
                    
                    <p>Atualizado por Pablo as 10:45 do dia 25/08/2017 </p>
                </div>
                
                        <p>
                            <a href="#" class="w3-button w3-blue w3-right">Editar</a>
                        </p>
                        
            </section>

        </section> <!-- fim da section.area -->
       
    </main>

    <script src="assets/js/functions.js"></script>
</body>
</html>