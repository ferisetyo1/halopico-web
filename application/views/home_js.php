<!-- ChartJS -->
<script src="<?= base_url('public/plugins/chart.js/Chart.min.js') ?>"></script>
<script src="<?= base_url('public/plugins/moment/moment.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
<script type="text/javascript">
    $(function() {
        var labelCovid = JSON.parse('<?= $labelCovid ?>');
        var labelKondisi = JSON.parse('<?= $labelKondisi ?>');
        var labelPekerjaan = JSON.parse('<?= $labelPekerjaan ?>');
        var labelProvinsi = JSON.parse('<?= $labelProvinsi ?>');
        var valueCovid = JSON.parse('<?= $valueCovid ?>');
        var valueKondisi = JSON.parse('<?= $valueKondisi ?>');
        var valuePekerjaan = JSON.parse('<?= $valuePekerjaan ?>');
        var valueProvinsi = JSON.parse('<?= $valueProvinsi ?>');
    
        /* Chart.js Charts */
        // Sales chart
        var covidChartCanvas = document.getElementById('covid-chart-canvas').getContext('2d');
        var kondisiChartCanvas = document.getElementById('kondisi-chart-canvas').getContext('2d');
        var pekerjaanChartCanvas = document.getElementById('pekerjaan-chart-canvas').getContext('2d');
        //$('#revenue-chart').get(0).getContext('2d');
        console.log(valuePekerjaan);
        console.log(valueKondisi);
        console.log(valueProvinsi);
        console.log(valueCovid);
        var color = [];
        var dynamicColors = function() {
            var r = Math.floor(Math.random() * 255);
            var g = Math.floor(Math.random() * 255);
            var b = Math.floor(Math.random() * 255);
            return "rgb(" + r + "," + g + "," + b + ")";
        };

        for (var i in labelPekerjaan) {
            color.push(dynamicColors());
        }

        var pekerjaanChartData = {
            labels: labelPekerjaan,
            datasets: [{
                label: 'Jumlah',
                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: valuePekerjaan
            }, ]
        }

        var pekerjaanChartOptions = {
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 30,
                    bottom: 0
                }
            },
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            },
            plugins: {
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    formatter: Math.round,
                    font: {
                        weight: 'bold'
                    }
                }
            }
        }
        var covidChartData = {
            labels: labelCovid,
            datasets: [{
                label: 'Jumlah',
                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: valueCovid
            }, ]
        }

        var covidChartOptions = {
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 30,
                    bottom: 0
                }
            },
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            },
            plugins: {
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    formatter: Math.round,
                    font: {
                        weight: 'bold'
                    }
                }
            }
        }
        var kondisiChartData = {
            labels: labelKondisi,
            datasets: [{
                label: 'Jumlah',
                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: valueKondisi
            }, ]
        }

        var kondisiChartOptions = {
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 30,
                    bottom: 0
                }
            },
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            },
            plugins: {
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    formatter: Math.round,
                    font: {
                        weight: 'bold'
                    }
                }
            }
        }

        // This will get the first returned node in the jQuery collection.
        var covidChart = new Chart(covidChartCanvas, {
            type: 'bar',
            data: covidChartData,
            options: covidChartOptions
        });
        // This will get the first returned node in the jQuery collection.
        var kondisiChart = new Chart(kondisiChartCanvas, {
            type: 'bar',
            data: kondisiChartData,
            options: kondisiChartOptions
        });
        // This will get the first returned node in the jQuery collection.
        var pekerjaanChart = new Chart(pekerjaanChartCanvas, {
            type: 'bar',
            data: pekerjaanChartData,
            options: pekerjaanChartOptions
        });

        // Donut Chart
        var pieChartCanvas = $('#provinsi-chart-canvas').get(0).getContext('2d')
        var pieData = {
            labels: labelProvinsi,
            datasets: [{
                data: valueProvinsi,
                backgroundColor: color,
            }]
        }
        var pieOptions = {
            legend: {
                display: true
            },
            maintainAspectRatio: false,
            responsive: true,
            plugins: {
                datalabels: {
                    align: 'center',
                    formatter: Math.round,
                    font: {
                        weight: 'bold'
                    }
                }
            }
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var pieChart = new Chart(pieChartCanvas, {
            type: 'doughnut',
            data: pieData,
            options: pieOptions
        });
    });
</script>