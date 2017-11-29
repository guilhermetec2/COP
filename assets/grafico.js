function geraGrafico(largura, titulo, tipo, idGrafico){

    // var largura = 12;
    // var titulo = 'Grafico de teste';
    // var tipo = 'bar';

    var wrapper = $("#"+idGrafico+"").parent();
    wrapper.addClass("col-md-"+largura);

    var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
         
    var barChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: 'Dataset 1',
            backgroundColor: "rgba(220,220,220,0.5)",
            data: [10, 20, 30, 40, 50, 60,40]
        },{
            label: 'Dataset 3',
            backgroundColor: "rgba(151,187,205,0.5)",
            data: [20, 10, 40, 35, 60, 25, 30]
        }]
    };

    var ctx = document.getElementById(idGrafico).getContext("2d");
    window.myBar = new Chart(ctx, {
        type: tipo,
        data: barChartData,
        options: {
            elements: {
                rectangle: {
                    borderWidth: 2,
                    borderColor: 'rgb(0, 255, 0)',
                    borderSkipped: 'bottom'
                }
            },
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: titulo
            }
        }
    });

}