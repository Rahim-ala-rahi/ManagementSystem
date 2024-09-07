export function index2(myVarVal, hexToRgba) {
    "use strict";

    // Chartjs (#sales-summary) 
    var myCanvas = document.getElementById("sales-summary");
    myCanvas.height = "300";
    var myChart = new Chart(myCanvas, {
        type: 'bar',
        data: {
            labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            datasets: [{
                barPercentage: 0.15,
                label: 'This Month',
                data: [27, 50, 28, 50, 18, 30, 22],
                backgroundColor: myVarVal,
                borderWidth: 2,
                hoverBackgroundColor: myVarVal,
                hoverBorderWidth: 0,
                borderColor: myVarVal,
                hoverBorderColor: myVarVal,
                borderDash: [5, 2],
            }, {
                barPercentage: 0.15,
                label: 'Last Month',
                data: [68, 57, 53, 58, 23, 75, 28],
                backgroundColor: '#fe7f00',
                borderWidth: 2,
                hoverBackgroundColor: '#fe7f00',
                hoverBorderWidth: 0,
                borderColor: '#fe7f00',
                hoverBorderColor: '#fe7f00',
            }, {
                barPercentage: 0.15,
                label: 'Last Month',
                data: [100, 78, 68, 95, 0, 98, 58],
                backgroundColor: hexToRgba(myVarVal, 0.2),
                borderWidth: 2,
                hoverBackgroundColor: hexToRgba(myVarVal, 0.2),
                hoverBorderWidth: 0,
                borderColor: hexToRgba(myVarVal, 0.2),
                hoverBorderColor: hexToRgba(myVarVal, 0.2),
            }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            tooltips: {
                enabled: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        zeroLineColor: 'rgba(142, 156, 173,0.1)',
                        color: "rgba(142, 156, 173,0.1)",
                    },
                    scaleLabel: {
                        display: false,
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 25,
                        suggestedMin: 0,
                        suggestedMax: 100,
                        fontColor: "#8492a6",
                        userCallback: function (tick) {
                            return tick.toString() + '%';
                        }
                    },
                }],
                xAxes: [{
                    barValueSpacing: 0,
                    barDatasetSpacing: 0,
                    barRadius: 0,
                    stacked: true,
                    ticks: {
                        beginAtZero: true,
                        fontColor: "#8492a6",
                    },
                    gridLines: {
                        color: "rgba(142, 156, 173,0.1)",
                        display: false
                    },

                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });

}
export function index1(myVarVal) {
    "use strict";


    /*----- Employees ------*/
    var options = {
        series: [74, 35],
        chart: {
            height: 300,
            type: 'donut',
        },
        dataLabels: {
            enabled: false
        },

        legend: {
            show: false,
        },
        stroke: {
            show: true,
            width: 0
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '80%',
                    background: 'transparent',
                    labels: {
                        show: true,
                        name: {
                            show: true,
                            fontSize: '29px',
                            color: '#6c6f9a',
                            offsetY: -10
                        },
                        value: {
                            show: true,
                            fontSize: '26px',
                            color: undefined,
                            offsetY: 16,
                            formatter: function (val) {
                                return val + "%"
                            }
                        },
                        total: {
                            show: true,
                            showAlways: false,
                            label: 'Total',
                            fontSize: '22px',
                            fontWeight: 600,
                            color: '#373d3f',
                        }

                    }
                }
            }
        },
        responsive: [{
            options: {
                legend: {
                    show: false,
                }
            }
        }],
        labels: ["Male", "Female"],
        colors: [myVarVal, '#fe7f00'],
    };
    document.getElementById('employees').innerHTML = '';
    var chart = new ApexCharts(document.querySelector("#employees"), options);
    chart.render();

}
export function index(myVarVal, hexToRgba) {
    // LIne-Chart 
 
    var ctx = document.getElementById("chartLine").getContext('2d');
    var myChart = new Chart(ctx, {

        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Total BUdget',
                data: [100, 210, 180, 454, 454, 230, 230, 656, 656, 350, 350, 210, 410],
                borderWidth: 3,
                backgroundColor: 'transparent',
                borderColor: myVarVal,
                pointBackgroundColor: '#ffffff',
                pointRadius: 0,
                type: 'line',
            },
            {

                label: 'Total Employess',
                data: [200, 530, 110, 110, 480, 520, 780, 435, 475, 738, 454, 454, 230,],
                borderWidth: 3,
                backgroundColor: 'transparent',
                borderColor: hexToRgba(myVarVal, 0.2),
                pointBackgroundColor: '#ffffff',
                pointRadius: 0,
                type: 'line',
                borderDash: [7, 3],

            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            tooltips: {
                enabled: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        zeroLineColor: 'rgba(142, 156, 173,0.1)',
                        color: "rgba(142, 156, 173,0.1)",
                    },
                    scaleLabel: {
                        display: false,
                    },
                    ticks: {
                        beginAtZero: true,
                        min: 0,
                        max: 1050,
                        stepSize: 150,
                        fontColor: "#8492a6",
                    },
                }],
                xAxes: [{
                    ticks: {
                        beginAtZero: true,
                        fontColor: "#8492a6",
                    },
                    gridLines: {
                        color: "rgba(142, 156, 173,0.1)",
                        display: false
                    },

                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });
}
export function chartbar(myVarVal, hexToRgba) {
    'use strict';

    // Bar-Chart 
    var ctx = document.getElementById("chartbar").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                barPercentage: .8,
                categoryPercentage: 0.38,
                label: 'TOTAL BUDGET',
                data: [27, 17, 19, 23, 17, 19, 23, 17, 13, 28, 22, 27],
                borderWidth: 0,
                backgroundColor: hexToRgba(myVarVal, 0.2),
                borderColor: hexToRgba(myVarVal, 0.2),
                pointBackgroundColor: '#ffffff',
            },
            {
                label: 'AMOUNT USED',
                barPercentage: .8,
                categoryPercentage: 0.38,
                data: [28, 22, 21, 18, 13, 22, 24, 18, 16, 21, 18, 24],
                borderWidth: 0,
                backgroundColor: myVarVal,
                borderColor: myVarVal,
                pointBackgroundColor: myVarVal,

            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            tooltips: {
                enabled: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        zeroLineColor: 'rgba(142, 156, 173,0.1)',
                        color: "rgba(142, 156, 173,0.1)",
                    },
                    scaleLabel: {
                        display: false,
                    },
                    ticks: {
                        min: 5,
                        stepSize: 5,
                        max: 30,
                        fontColor: "#8492a6",
                        fontFamily: 'Poppins',
                    },
                }],
                xAxes: [{
                    barValueSpacing: -2,
                    barDatasetSpacing: 0,
                    barRadius: 15,
                    stacked: false,
                    ticks: {
                        beginAtZero: true,
                        fontColor: "#8492a6",
                        fontFamily: 'Poppins',
                    },
                    gridLines: {
                        color: "rgba(142, 156, 173,0.1)",
                        display: false
                    },

                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });


};

export function balance(myVarVal, hexToRgba) {
    /*-----Balance Statistics-----*/
    var myCanvas = document.getElementById("balance");

    var myCanvasContext = myCanvas.getContext("2d");
    var gradientStroke1 = myCanvasContext.createLinearGradient(0, 180, 0, 280);
    gradientStroke1.addColorStop(0, hexToRgba(myVarVal, 0.1));
    gradientStroke1.addColorStop(1, 'rgba(246, 247, 249, .05)');

    myCanvas.height = "380";
    var myChart = new Chart(myCanvas, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'on going',
                data: [11, 13, 13, 20, 22, 25, 17, 23, 16, 16, 15, 17, 15],
                backgroundColor: 'transparent',
                borderWidth: 3,
                borderColor: myVarVal,
                hoverBorderColor: myVarVal,
            }, {
                label: 'Completed',
                data: [10, 12, 12.2, 16, 18, 12, 17, 15.2, 20.2, 15, 14, 16],
                backgroundColor: 'transparent',
                borderWidth: 3,
                borderColor: '#fe7f00',
                hoverBorderColor: '#fe7f00',

            }, {

                label: '',
                data: [13, 18, 12, 22, 18, 22, 17, 21, 20, 22, 24, 19],
                backgroundColor: gradientStroke1,
                borderWidth: 3,
                borderColor: hexToRgba(myVarVal, 0.1),
            }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            tooltips: {
                enabled: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        zeroLineColor: 'rgba(142, 156, 173,0.1)',
                        color: "rgba(142, 156, 173,0.1)",
                    },
                    scaleLabel: {
                        display: false,
                    },
                    ticks: {
                        min: 5,
                        stepSize: 5,
                        max: 30,
                        fontColor: "#8492a6",
                    },
                }],
                xAxes: [{
                    ticks: {
                        fontColor: "#8492a6",
                    },
                    gridLines: {
                        color: "rgba(142, 156, 173,0.1)",
                        display: false
                    },

                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });
    /*-----Balance Statistics-----*/
}

export function advancedtask(myVarVal) {
    "use strict";

    /*----- Advancedtask ------*/
    var options = {
        series: [74, 35],
        chart: {
            height: 280,
            type: 'donut',
        },
        dataLabels: {
            enabled: false
        },

        legend: {
            show: false,
        },
        stroke: {
            show: true,
            width: 0
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '80%',
                    background: 'transparent',
                    labels: {
                        show: true,
                        name: {
                            show: true,
                            fontSize: '29px',
                            color: '#6c6f9a',
                            offsetY: -10
                        },
                        value: {
                            show: true,
                            fontSize: '26px',
                            color: undefined,
                            offsetY: 16,
                            formatter: function (val) {
                                return val + "%"
                            }
                        },
                        total: {
                            show: true,
                            showAlways: false,
                            label: 'Total Tasks',
                            fontSize: '22px',
                            fontWeight: 600,
                            color: '#373d3f',
                            // formatter: function (w) {
                            //   return w.globals.seriesTotals.reduce((a, b) => {
                            // 	return a + b
                            //   }, 0)
                            // }
                        }

                    }
                }
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                    show: false,
                }
            }
        }],
        labels: ["Completed", "Running"],
        colors: [myVarVal, '#fe7f00'],
    };
    document.getElementById('advancedtask').innerHTML = ''
    var chart = new ApexCharts(document.querySelector("#advancedtask"), options);
    chart.render();
}

export function spenttask(myVarVal, hexToRgba) {
    "use strict";

    /* Chartjs (#spenttask) */
    var myCanvas = document.getElementById("spenttask");
    myCanvas.height = "310";
    var myChart = new Chart(myCanvas, {
        type: 'bar',
        data: {
            labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            datasets: [{
                barPercentage: 0.2,
                label: 'Work',
                data: [8, 6.5, 7, 8.2, 7, 7.8, 6.5],
                backgroundColor: myVarVal,
                borderWidth: 2,
                hoverBackgroundColor: myVarVal,
                hoverBorderWidth: 0,
                borderColor: myVarVal,
                hoverBorderColor: myVarVal,
                borderDash: [5, 2],
            }, {
                label: 'Working Hours',
                barPercentage: 0.2,
                data: [10, 10, 10, 10, 10, 10, 10],
                backgroundColor: hexToRgba(myVarVal, 0.5),
                borderWidth: 2,
                hoverBackgroundColor: hexToRgba(myVarVal, 0.5),
                hoverBorderWidth: 0,
                borderColor: hexToRgba(myVarVal, 0.5),
                hoverBorderColor: hexToRgba(myVarVal, 0.5),
            }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            tooltips: {
                enabled: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        zeroLineColor: 'rgba(142, 156, 173,0.1)',
                        color: "rgba(142, 156, 173,0.1)",
                    },
                    scaleLabel: {
                        display: false,
                    },
                    ticks: {
                        beginAtZero: true,
                        min: 0,
                        max: 10,
                        stepSize: 2,
                        fontColor: "#8492a6",
                        userCallback: function (tick) {
                            return tick.toString() + 'hrs';
                        }
                    },
                }],
                xAxes: [{
                    barValueSpacing: 0,
                    barDatasetSpacing: 0,
                    barRadius: 0,
                    stacked: true,
                    ticks: {
                        beginAtZero: true,
                        fontColor: "#8492a6",
                    },
                    gridLines: {
                        color: "rgba(142, 156, 173,0.1)",
                        display: false
                    },

                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });

}

export function statistics(myVarVal, hexToRgba) {
    "use strict";

    /*-----Statistics-----*/
    var myCanvas = document.getElementById("statistics");

    var myCanvasContext = myCanvas.getContext("2d");
    var gradientStroke1 = myCanvasContext.createLinearGradient(0, 180, 0, 280);
    gradientStroke1.addColorStop(0, hexToRgba(myVarVal, 0.1));
    gradientStroke1.addColorStop(1, 'rgba(246, 247, 249, .05)');

    myCanvas.height = "350";
    var myChart = new Chart(myCanvas, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'on going',
                data: [12, 20, 23, 18, 26, 25, 29.9, 25.5, 23, 25, 27, 18],
                backgroundColor: 'transparent',
                borderWidth: 3,
                borderColor: myVarVal,
                hoverBorderColor: myVarVal,
            }, {
                label: 'Completed',
                data: [15, 17, 9.2, 20, 23, 17, 10, 25.2, 25, 18, 22, 20],
                backgroundColor: 'transparent',
                borderWidth: 3,
                borderColor: '#fe7f00',
                hoverBorderColor: '#fe7f00',

            }, {

                label: '',
                data: [18, 18, 15, 23, 20, 16, 22, 18, 20, 24, 15, 22],
                backgroundColor: gradientStroke1,
                borderWidth: 3,
                borderColor: hexToRgba(myVarVal, 0.1),
            }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            tooltips: {
                enabled: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        zeroLineColor: 'rgba(142, 156, 173,0.1)',
                        color: "rgba(142, 156, 173,0.1)",
                    },
                    scaleLabel: {
                        display: false,
                    },
                    ticks: {
                        min: 5,
                        stepSize: 5,
                        max: 30,
                        fontColor: "#8492a6",
                    },
                }],
                xAxes: [{
                    ticks: {
                        fontColor: "#8492a6",
                    },
                    gridLines: {
                        color: "rgba(142, 156, 173,0.1)",
                        display: false
                    },

                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });
    /*-----Statistics-----*/

}

export function employee1(myVarVal) {
    "use strict";

    /*----- Advancedtask ------*/
    var options = {
        series: [74, 35],
        chart: {
            height: 260,
            type: 'donut',
        },
        dataLabels: {
            enabled: false
        },

        legend: {
            show: false,
        },
        stroke: {
            show: true,
            width: 0
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '80%',
                    background: 'transparent',
                    labels: {
                        show: true,
                        name: {
                            show: true,
                            fontSize: '29px',
                            color: '#6c6f9a',
                            offsetY: -10
                        },
                        value: {
                            show: true,
                            fontSize: '26px',
                            color: undefined,
                            offsetY: 16,
                            formatter: function (val) {
                                return val + "%"
                            }
                        },
                        total: {
                            show: true,
                            showAlways: false,
                            label: 'Total Employees',
                            fontSize: '22px',
                            fontWeight: 600,
                            color: '#373d3f',
                            // formatter: function (w) {
                            //   return w.globals.seriesTotals.reduce((a, b) => {
                            // 	return a + b
                            //   }, 0)
                            // }
                        }

                    }
                }
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                    show: false,
                }
            }
        }],
        labels: ["Male", "Female"],
        colors: [myVarVal, '#fe7f00'],
    };

    document.getElementById('employee1').innerHTML = '';
    var chart = new ApexCharts(document.querySelector("#employee1"), options);
    chart.render();

}

export function chartstatistics(myVarVal, hexToRgba) {
    "use strict";

    /*Bar-Chart */
    var ctx = document.getElementById('chartbar-statistics').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Projects',
                categoryPercentage: 0.45,
                data: [27, 18, 27, 23, 17, 19, 22.5, 19.5, 17.5, 18.5, 19.8, 27],
                borderWidth: 0,
                backgroundColor: hexToRgba(myVarVal, 0.2),
                borderColor: hexToRgba(myVarVal, 0.2),
                pointBackgroundColor: hexToRgba(myVarVal, 0.2),
            },
            {
                label: 'Expenses',
                categoryPercentage: 0.45,
                data: [29.5, 22, 23, 17, 20.5, 21, 24.8, 17, 15.8, 21, 22, 28.5],
                borderWidth: 0,
                backgroundColor: myVarVal,
                borderColor: myVarVal,
                pointBackgroundColor: myVarVal,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 20
                }
            },
            tooltips: {
                enabled: false,
            },
            scales: {
                xAxes: [{
                    barValueSpacing: 20,
                    barDatasetSpacing: 2,
                    barRadius: 15,
                    stacked: false,
                    ticks: {
                        beginAtZero: true,
                        fontColor: "#8492a6",
                        fontFamily: 'Poppins',
                    },
                    gridLines: {
                        color: "rgba(142, 156, 173,0.1)",
                        display: false
                    },

                }],
                yAxes: [{
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        zeroLineColor: 'rgba(142, 156, 173,0.1)',
                        color: "rgba(142, 156, 173,0.1)",
                    },
                    scaleLabel: {
                        display: false,
                    },
                    ticks: {
                        stepSize: 5,
                        suggestedMin: 0,
                        suggestedMax: 30,
                        fontColor: "#8492a6",
                    },
                }]
            },
            legend: {
                display: false
            }
        }
    });

}

export function analysis(myVarVal) {
    /*----- Advancedtask ------*/
    var options = {
        series: [62, 23, 15],
        chart: {
            height: 280,
            type: 'donut',
        },
        dataLabels: {
            enabled: false
        },

        legend: {
            show: false,
        },
        stroke: {
            show: true,
            width: 0
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '80%',
                    background: 'transparent',
                    labels: {
                        show: true,
                        name: {
                            show: true,
                            fontSize: '29px',
                            color: '#6c6f9a',
                            offsetY: -10
                        },
                        value: {
                            show: true,
                            fontSize: '26px',
                            color: undefined,
                            offsetY: 16,
                            formatter: function (val) {
                                return val + "%"
                            }
                        },
                        total: {
                            show: true,
                            showAlways: false,
                            label: 'Total Analysis',
                            fontSize: '22px',
                            fontWeight: 600,
                            color: '#373d3f',
                            // formatter: function (w) {
                            //   return w.globals.seriesTotals.reduce((a, b) => {
                            // 	return a + b
                            //   }, 0)
                            // }
                        }

                    }
                }
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                    show: false,
                }
            }
        }],
        labels: ["Design", "Development", "Service"],
        colors: [myVarVal, '#fe7f00', '#0dcd94'],
    };
    document.getElementById('analysis').innerHTML = '';
    var chart = new ApexCharts(document.querySelector("#analysis"), options);
    chart.render();
    if (document.querySelectorAll('#analysis svg').length >= 2) {
        let svgs = document.querySelectorAll('#analysis svg')

        for (var i = 0; i <= svgs.length - 1; i++) {
            if (i == 0) {

            }
            else {
                svgs[i].remove()
            }
        }
    }


}

export function expenses(myVarVal, hexToRgba) {
    "use strict";

    /*-----Expenses-----*/
    var myCanvas = document.getElementById("expenses");
    myCanvas.height = "150";
    var myChart = new Chart(myCanvas, {
        type: 'line',
        data: {
            labels: ['2015', '2016', '2017', '2018', '2019', '2020'],
            datasets: [{
                label: 'Expenses',
                data: [15, 32, 15, 38, 18, 25, 22],
                backgroundColor: 'transparent',
                borderWidth: 3,
                borderColor: myVarVal,
                hoverBorderColor: myVarVal,
            }, {

                label: '',
                data: [25, 28, 21, 33, 18, 36, 18],
                backgroundColor: hexToRgba(myVarVal, 0.2),
                borderWidth: 3,
                borderColor: hexToRgba(myVarVal, 0.2),
            }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            tooltips: {
                enabled: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        zeroLineColor: 'rgba(142, 156, 173,0.1)',
                        color: "rgba(142, 156, 173,0.1)",
                    },
                    scaleLabel: {
                        display: false,
                    },
                    ticks: {
                        min: 10,
                        stepSize: 10,
                        max: 40,
                        fontColor: "#8492a6",
                        userCallback: function (tick) {
                            return tick.toString() + 'k';
                        }
                    },
                }],
                xAxes: [{
                    ticks: {
                        fontColor: "#8492a6",
                    },
                    gridLines: {
                        color: "rgba(142, 156, 173,0.1)",
                        display: false
                    },

                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });
    /*-----Expenses-----*/
}

export function statistics1(myVarVal, hexToRgba) {
    "use strict";

    /*-----Statistics-----*/
    var myCanvas = document.getElementById("statistics1");

    var myCanvasContext = myCanvas.getContext("2d");
    var gradientStroke1 = myCanvasContext.createLinearGradient(0, 180, 0, 230);
    gradientStroke1.addColorStop(0, hexToRgba(myVarVal, 0.1));
    gradientStroke1.addColorStop(1, 'rgba(246, 247, 249, .05)');

    myCanvas.height = "350";
    var myChart = new Chart(myCanvas, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Applications',
                data: [12.5, 17, 12.5, 15.5, 18, 14.5, 22, 11, 17.5, 15.5, 16, 12.5],
                backgroundColor: 'transparent',
                borderWidth: 3,
                borderColor: myVarVal,
                hoverBorderColor: myVarVal,
            }, {
                label: 'Shortlisted',
                data: [9.5, 18, 11.2, 18, 14.5, 18, 11, 15.5, 13.5, 11.5, 13, 11],
                backgroundColor: 'transparent',
                borderWidth: 3,
                borderColor: hexToRgba(myVarVal, 0.5),
                hoverBorderColor: hexToRgba(myVarVal, 0.5),
                type: 'line',
                borderDash: [7, 6],

            }, {

                label: '',
                data: [17, 23, 18, 18.5, 14, 20.5, 18, 19, 22, 20, 18.5, 24],
                backgroundColor: gradientStroke1,
                borderWidth: 3,
                borderColor: hexToRgba(myVarVal, 0.1),
            }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            tooltips: {
                enabled: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        zeroLineColor: 'rgba(142, 156, 173,0.1)',
                        color: "rgba(142, 156, 173,0.1)",
                    },
                    scaleLabel: {
                        display: false,
                    },
                    ticks: {
                        min: 5,
                        stepSize: 5,
                        max: 25,
                        fontColor: "#8492a6",
                    },
                }],
                xAxes: [{
                    ticks: {
                        fontColor: "#8492a6",
                    },
                    gridLines: {
                        color: "rgba(142, 156, 173,0.1)",
                        display: false
                    },

                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });
    /*-----Statistics-----*/
}

export function overview(myVarVal) {
    "use strict";

    /*----- Advancedtask ------*/
    var options = {
        series: [64, 45, 28, 18],
        chart: {
            height: 300,
            type: 'donut',
        },
        dataLabels: {
            enabled: false
        },

        legend: {
            show: false,
        },
        stroke: {
            show: true,
            width: 0
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '80%',
                    background: 'transparent',
                    labels: {
                        show: true,
                        name: {
                            show: true,
                            fontSize: '29px',
                            color: '#6c6f9a',
                            offsetY: -10
                        },
                        value: {
                            show: true,
                            fontSize: '26px',
                            color: undefined,
                            offsetY: 16,
                            formatter: function (val) {
                                return val + "%"
                            }
                        },
                        total: {
                            show: true,
                            showAlways: false,
                            label: 'Total Overview',
                            fontSize: '22px',
                            fontWeight: 600,
                            color: '#373d3f',
                            // formatter: function (w) {
                            //   return w.globals.seriesTotals.reduce((a, b) => {
                            // 	return a + b
                            //   }, 0)
                            // }
                        }

                    }
                }
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                    show: false,
                }
            }
        }],
        labels: ["Applications", "Interviews", "Reject", "Hired"],
        colors: [myVarVal, '#fe7f00', '#f7284a', '#0dcd94'],
    };
    document.getElementById('overview').innerHTML = '';
    var chart = new ApexCharts(document.querySelector("#overview"), options);
    chart.render();

}

export function chartline1(myVarVal, hexToRgba) {
    "use strict";

    /*LIne-Chart */
    var ctx = document.getElementById("chartline1").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Income',
                categoryPercentage: 0.4,
                barPercentage: 0.8,
                data: [20, 17, 27, 23, 17, 19, 23, 17, 13, 28, 22, 27],
                borderWidth: 2,
                backgroundColor: hexToRgba(myVarVal, 0.2),
                borderColor: hexToRgba(myVarVal, 0.2),
                pointBackgroundColor: '#ffffff',
                pointRadius: 0,
                type: 'bar',
            },
            {
                label: 'Expense',
                categoryPercentage: 0.4,
                barPercentage: 0.8,
                data: [28, 22, 21, 18, 13, 22, 24, 18, 16, 21, 18, 24],
                borderWidth: 3,
                backgroundColor: myVarVal,
                borderColor: myVarVal,
                pointBackgroundColor: myVarVal,
                pointRadius: 0,
                type: 'bar',

            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            tooltips: {
                enabled: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        zeroLineColor: 'rgba(142, 156, 173,0.1)',
                        color: "rgba(142, 156, 173,0.1)",
                    },
                    scaleLabel: {
                        display: false,
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 5,
                        suggestedMin: 5,
                        suggestedMax: 30,
                        fontColor: "#8492a6",
                    },
                }],
                xAxes: [{
                    barValueSpacing: -2,
                    barDatasetSpacing: 0,
                    barRadius: 15,
                    stacked: false,
                    ticks: {
                        beginAtZero: true,
                        fontColor: "#8492a6",
                    },
                    gridLines: {
                        color: "rgba(142, 156, 173,0.1)",
                        display: false
                    },

                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });


}

export function ticketoverview(myVarVal, hexToRgba){
	'use strict';

	// Ticketstatistics
	var ctx = document.getElementById("ticketoverview").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			datasets: [{
				label: 'Total Assigned Tickets',
				categoryPercentage: 0.2,
				barPercentage: 0.8,
				data: [20, 17, 14, 13, 17, 19, 20, 17, 13, 18, 12, 17],
				borderWidth: 3,
				backgroundColor: myVarVal,
				borderColor:myVarVal ,
				pointBackgroundColor: myVarVal,
				pointRadius: 0,
				type: 'bar',
			},
			{
				label: 'Total Closed Tickets',
				categoryPercentage: 0.2,
				barPercentage: 0.8,
				data: [28, 22, 21, 28, 23, 22, 24, 28, 26, 25, 28, 24],
				borderWidth: 2,
				backgroundColor: '#fe7f00',
				borderColor: '#fe7f00',
				pointBackgroundColor: '#fe7f00',
				pointRadius: 0,
				type: 'bar',
			},
			{
				label: '',
				categoryPercentage: 0.2,
				barPercentage: 0.8,
				data: [30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30],
				borderWidth: 3,
				backgroundColor: hexToRgba(myVarVal, 0.2),
				borderColor: hexToRgba(myVarVal, 0.2),
				pointBackgroundColor: hexToRgba(myVarVal, 0.2),
				pointRadius: 0,
				type: 'bar',

			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			layout: {
				padding: {
					left: 0,
					right: 0,
					top: 0,
					bottom: 0
				}
			},
			tooltips: {
				enabled: false,
			},
			scales: {
				yAxes: [{
					gridLines: {
						display: true,
						drawBorder: false,
						zeroLineColor: 'rgba(142, 156, 173,0.1)',
						color: "rgba(142, 156, 173,0.1)",
					},
					scaleLabel: {
						display: false,
					},
					ticks: {
						beginAtZero: true,
						stepSize: 5,
						suggestedMin: 5,
						suggestedMax: 30,
						fontColor: "#8492a6",
					},
				}],
				xAxes: [{
					barValueSpacing :-2,
					barDatasetSpacing : 0,
					barRadius: 15,
					stacked: true,
					ticks: {
						beginAtZero: true,
						fontColor: "#8492a6",
					},
					gridLines: {
						color: "rgba(142, 156, 173,0.1)",
						display: false
					},

				}]
			},
			legend: {
				display: false
			},
			elements: {
				point: {
					radius: 0
				}
			}
		}
	});

}

export function chartLine3(myVarVal, hexToRgba){
	'use strict';

	// LIne-Chart 
	var ctx = document.getElementById("chartLine3").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			datasets: [{
				label: 'Total Open Tickets',
				categoryPercentage: 0.4,
				barPercentage: 0.8,
				data: [20,17,27,23,17,19,23,17,13,28,22,27],
				borderWidth: 2,
				backgroundColor: hexToRgba(myVarVal, 0.2),
				borderColor: hexToRgba(myVarVal, 0.2),
				pointBackgroundColor: '#ffffff',
				pointRadius: 0,
				type: 'bar',
			},
			{

				label: 'Total Closed Tickets',
				categoryPercentage: 0.4,
				barPercentage: 0.8,
				data: [28,22,21,18,13,22,24,18,16,21,18,24],
				borderWidth: 3,
				backgroundColor:  myVarVal,
				borderColor:  myVarVal,
				pointBackgroundColor:  myVarVal,
				pointRadius: 0,
				type: 'bar',

			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			layout: {
				padding: {
					left: 0,
					right: 0,
					top: 0,
					bottom: 0
				}
			},
			tooltips: {
				enabled: false,
			},
			scales: {
				yAxes: [{
					gridLines: {
						display: true,
						drawBorder: false,
						zeroLineColor: 'rgba(142, 156, 173,0.1)',
						color: "rgba(142, 156, 173,0.1)",
					},
					scaleLabel: {
						display: false,
					},
					ticks: {
						beginAtZero: true,
						stepSize: 5,
						suggestedMin: 5,
						suggestedMax: 30,
						fontColor: "#8492a6",
					},
				}],
				xAxes: [{
					barValueSpacing :-2,
					barDatasetSpacing : 0,
					barRadius: 15,
					stacked: false,
					ticks: {
						beginAtZero: true,
						fontColor: "#8492a6",
					},
					gridLines: {
						color: "rgba(142, 156, 173,0.1)",
						display: false
					},

				}]
			},
			legend: {
				display: false
			},
			elements: {
				point: {
					radius: 0
				}
			}
		}
	});

}
