<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <title>Hello, world!</title>
  </head>
  <body>
<!--Dashboard-->
  <div id= "content">
        <section>
            <div class= "container">
                <div class= "row">
                    <div class= "col-lg-9">
                        <h1>Welcome</h1>
                        <p>Revisa tu informacion</p>
                    </div>
                    <div class= "col-lg-3">
                        <button class= "btn btn-primary w-100">descargar</button>
                    </div>
                </div>
            </div>
        </section>
        <section class>
            <div class= "container">
                <div class= "card">
                    <div class="card-body">
                        <div class="row">
                            <div class= "col-lg-3 d-flex stat my-3">
                                <div class="mx-auto">
                                    <h6 class="text-primary">Ingresos mensuales</h6>
                                    <h3 class= "font-weight-bold">$50,000</h3>
                                    <h6 class="text-success">50.50%</h6>
                                </div>
                            </div>

                            <div class= "col-lg-3 d-flex stat my-3">
                                <div class="mx-auto">
                                    <h6 class="text-primary">Ingresos mensuales</h6>
                                    <h3 class= "font-weight-bold">$50,000</h3>
                                    <h6 class="text-success">50.50%</h6>
                                </div>
                            </div>

                            <div class= "col-lg-3 d-flex stat my-3">
                                <div class="mx-auto">
                                    <h6 class="text-primary">Ingresos mensuales</h6>
                                    <h3 class= "font-weight-bold">$50,000</h3>
                                    <h6 class="text-success">50.50%</h6>
                                </div>
                            </div>

                            <div class= "col-lg-3 d-flex my-3">
                                <div class="mx-auto">
                                    <h6 class="text-primary">Ingresos mensuales</h6>
                                    <h3 class= "font-weight-bold">$50,000</h3>
                                    <h6 class="text-success">50.50%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 my-3">
                        <div class="card rounded-0">
                            <div class="card header">
                                <h6 class="font-weight-bold mb-0">numero de usuarios de paga</h6>
                            </div>
                            <div class="card-body">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">

                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.0/dist/chart.min.js" integrity="sha256-KP9rTEikFk097YZVFmsYwZdAg4cdGdea8O/V7YZJUxw=" crossorigin="anonymous"></script>
    <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, { 
                type: 'bar',
                data: {
                    labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020'],
                    datasets: [{
                        label: 'Nuevos usuarios',
                        data: [50, 100, 150, 200],
                        backgroundColor: [
                            '#12C9E5',  
                            '#12C9E5',
                            '#12C9E5',
                            '#111B54'
                        ],
                        maxBarThickness: 30,
                        maxBarLength: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            </script>
</body>
</html>