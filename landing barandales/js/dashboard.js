// initDayVisitChart = function(){
//     var options = {
//         series: [{
//             name: "Visitas",
//             data: [10, 41, 35, 51, 49, 62, 69, 91, 148, 145, 125, 35, 1, 54, 41, 65, 87, 12, 15, 14, 18, 22, 35, 24]
//         }],
//         chart: {
//             height: 350,
//             type: 'line',
//             zoom: {
//                 enabled: false
//             }
//         },
//         dataLabels: {
//             enabled: false
//         },
//         stroke: {
//             curve: 'straight'
//         },
//         title: {
//             text: 'REPORTE DE VISITAS DIARIAS 19/07/2023',
//             align: 'left'
//         },
//         grid: {
//             row: {
//                 colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
//                 opacity: 0.5
//             },
//         },
//         xaxis: {
//             categories: ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00', '10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00','21:00','22:00','23:00'],
//         }
//     };
//
//     var chart = new ApexCharts(document.querySelector("#todayVisitChart"), options);
//     document.getElementById('rowTodayVisit').classList.remove('d-none');
//     chart.render();
// }

initWeeklyVisitChart = function(){
    var options = {
        series: [{
            name: "Visitas",
            data: [125,135,456,214,354,235,486]
        }],
        chart: {
            height: 350,
            type: 'line',
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },
        title: {
            text: 'REPORTE DE VISITAS DE LA SEMANA 10/07/2023 - 16/07/2023',
            align: 'left'
        },
        grid: {
            row: {
                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                opacity: 0.5
            },
        },
        xaxis: {
            categories: ['Lunes','Martes','Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'],
        }
    };

    var chart = new ApexCharts(document.querySelector("#weeklyVisitsChart"), options);
    document.getElementById('rowWeekVisit').classList.remove('d-none');
    chart.render();
}

initMonthVisitChart = function(){
    var options = {
        series: [{
            name: "Visitas",
            data: [125,135,456,214,354,235,486, 412, 123, 254,
                352,112,124,234,213,102,122, 45, 25, 52,
                452,25,76,94,52,256,14, 35, 12, 53,]
        }],
        chart: {
            height: 350,
            type: 'line',
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },
        title: {
            text: 'REPORTE DE VISITAS DEL MES DE JUNIO ',
            align: 'left'
        },
        grid: {
            row: {
                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                opacity: 0.5
            },
        },
        xaxis: {
            categories: [
                '01/06/2023',
                '02/06/2023',
                '03/06/2023',
                '04/06/2023',
                '05/06/2023',
                '06/06/2023',
                '07/06/2023',
                '08/06/2023',
                '09/06/2023',
                '10/06/2023',
                '11/06/2023',
                '12/06/2023',
                '13/06/2023',
                '14/06/2023',
                '15/06/2023',
                '16/06/2023',
                '17/06/2023',
                '18/06/2023',
                '19/06/2023',
                '20/06/2023',
                '21/06/2023',
                '22/06/2023',
                '23/06/2023',
                '24/06/2023',
                '25/06/2023',
                '26/06/2023',
                '27/06/2023',
                '28/06/2023',
                '29/06/2023',
                '30/06/2023'
            ],
        }
    };

    var chart = new ApexCharts(document.querySelector("#monthVisitChart"), options);
    document.getElementById('rowMonthVisit').classList.remove('d-none');
    chart.render();
}

initAllCharts = function(){

    let allMethods = [ initWeeklyVisitChart, initMonthVisitChart]

    allMethods.forEach(function(currentMethod, i){
        try{
            currentMethod()
        }catch{
            console.log('An exeption has been detected in allMethods, index' + i  );
        }
    });

    document.getElementById('loadingVisitData').classList.add('d-none');
}

openCreateUsers = function(){
    $('#createUserModal').modal('show');
}