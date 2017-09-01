<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Prazos</title>
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
            
        <h2 class="w3-margin-bottom w3-margin-left"><i class="fa fa-calendar-check-o w3-xxlarge"></i> Controle de Prazos</h2>

            <section class="w3-container accordion-situacao">
                <button onclick="openAccordion('accordion1')" class="w3-button w3-block w3-left-align w3-red w3-large w3-card-2">
                    Urgências: 5
                </button>
                <div id="accordion1" class="w3-container w3-hide w3-border">
                    <table class="w3-table-all w3-hoverable">
                        <thead>
                            <tr class="w3-light-grey">
                                <th>Numero</th>
                                <th>Técnico</th>
                                <th>Entrada</th>
                                <th>Prazo</th>
                            </tr>
                        </thead>
                        <tr onclick="location.href = 'index.php?req=controller_ver-ordem'"> 
                            <td>82057</td>
                            <td>Diego Dinarte</td>
                            <td>30/07/2017</td>
                            <td>15/08/2017</td>                                                                                  
                        </tr>
                            <tr onclick="location.href = 'index.php?req=controller_ver-ordem'"> 
                            <td>82057</td>
                            <td>Diego Dinarte</td>
                            <td>30/07/2017</td>
                            <td>15/08/2017</td>                                                                                  
                        </tr>
                        <tr onclick="location.href = 'index.php?req=controller_ver-ordem'"> 
                            <td>82057</td>
                            <td>Diego Dinarte</td>
                            <td>30/07/2017</td>
                            <td>15/08/2017</td>                                                                                  
                        </tr>
                    </table>
                </div>
            </section>

            <section class="w3-container accordion-situacao">
                <button onclick="openAccordion('accordion2')" class="w3-button w3-block w3-left-align w3-deep-orange w3-large w3-card-2">
                    Garantias: 1 
                </button>
                <div id="accordion2" class="w3-container w3-hide w3-border">
                    <table class="w3-table-all w3-hoverable">
                            <thead>
                                <tr class="w3-light-grey">
                                    <th>Numero</th>
                                    <th>Técnico</th>
                                    <th>Entrada</th>
                                    <th>Prazo</th>
                                </tr>
                            </thead>
                            <tr onclick="location.href = 'index.php?req=controller_ver-ordem'"> 
                                <td>82057</td>
                                <td>Diego Dinarte</td>
                                <td>30/07/2017</td>
                                <td>15/08/2017</td>                                                                                  
                            </tr>
                                <tr onclick="location.href = 'index.php?req=controller_ver-ordem'"> 
                                <td>82057</td>
                                <td>Diego Dinarte</td>
                                <td>30/07/2017</td>
                                <td>15/08/2017</td>                                                                                  
                            </tr>
                            <tr onclick="location.href = 'index.php?req=controller_ver-ordem'"> 
                                <td>82057</td>
                                <td>Diego Dinarte</td>
                                <td>30/07/2017</td>
                                <td>15/08/2017</td>                                                                                  
                            </tr>
                        </table>
                </div>
            </section>

            <section class="w3-container accordion-situacao">
                <button onclick="openAccordion('accordion3')" class="w3-button w3-block w3-left-align w3-orange w3-large w3-card-2">
                    Aprovações Atrasadas: 4 
                </button>
                <div id="accordion3" class="w3-container w3-hide w3-border">
                    <table class="w3-table-all w3-hoverable">
                            <thead>
                                <tr class="w3-light-grey">
                                    <th>Numero</th>
                                    <th>Técnico</th>
                                    <th>Entrada</th>
                                    <th>Prazo</th>
                                </tr>
                            </thead>
                            <tr onclick="location.href = 'index.php?req=ordens'"> 
                                <td>82057</td>
                                <td>Diego Dinarte</td>
                                <td>30/07/2017</td>
                                <td>15/08/2017</td>                                                                                  
                            </tr>
                                <tr onclick="location.href = 'index.php?req=ordens'"> 
                                <td>82057</td>
                                <td>Diego Dinarte</td>
                                <td>30/07/2017</td>
                                <td>15/08/2017</td>                                                                                  
                            </tr>
                            <tr onclick="location.href = 'index.php?req=ordens'"> 
                                <td>82057</td>
                                <td>Diego Dinarte</td>
                                <td>30/07/2017</td>
                                <td>15/08/2017</td>                                                                                  
                            </tr>
                        </table>
                </div>
            </section>
                
            <section class="w3-container accordion-situacao">
                <button onclick="openAccordion('accordion4')" class="w3-button w3-block w3-left-align w3-amber w3-large w3-card-2">
                    Orçamentos Atrasados: 3 
                </button>
                <div id="accordion4" class="w3-container w3-hide w3-border">
                <p>Some text..</p>
                </div>
            </section>

            <section class="w3-container accordion-situacao">
                <button onclick="openAccordion('accordion5')" class="w3-button w3-block w3-left-align w3-khaki w3-large w3-card-2">
                    Aprovações Vencendo Hoje: 6 
                </button>
                <div id="accordion5" class="w3-container w3-hide w3-border">
                <p>Some text..</p>
                </div>
            </section>

            <section class="w3-container accordion-situacao">
                <button onclick="openAccordion('accordion6')" class="w3-button w3-block w3-left-align w3-lime w3-large w3-card-2">
                    Orçamentos Vencendo Hoje: 5 
                </button>
                <div id="accordion6" class="w3-container w3-hide w3-border">
                <p>Some text..</p>
                </div>
            </section>

            
           
        </section>
        
    </main>

    <script src="assets/js/functions.js"></script>
</body>
</html>