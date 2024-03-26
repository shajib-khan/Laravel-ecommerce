@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <body>

                        <div class="container-fluid">
                          <div class="row">
                            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                              <div class="sidebar-sticky">
                                <ul class="nav flex-column">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                      <span data-feather="home"></span>
                                      Dashboard <span class="sr-only">(current)</span>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">
                                      <span data-feather="file"></span>
                                      Orders
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">
                                      <span data-feather="shopping-cart"></span>
                                      Products
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">
                                      <span data-feather="users"></span>
                                      Customers
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">
                                      <span data-feather="bar-chart-2"></span>
                                      Reports
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">
                                      <span data-feather="layers"></span>
                                      Integrations
                                    </a>
                                  </li>
                                </ul>

                                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                  <span>Saved reports</span>
                                  <a class="d-flex align-items-center text-muted" href="#">
                                    <span data-feather="plus-circle"></span>
                                  </a>
                                </h6>
                                <ul class="nav flex-column mb-2">
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">
                                      <span data-feather="file-text"></span>
                                      Current month
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">
                                      <span data-feather="file-text"></span>
                                      Last quarter
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">
                                      <span data-feather="file-text"></span>
                                      Social engagement
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">
                                      <span data-feather="file-text"></span>
                                      Year-end sale
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </nav>


                          </div>
                        </div>

                        <!-- Bootstrap core JavaScript
                        ================================================== -->
                        <!-- Placed at the end of the document so the pages load faster -->
                        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                        <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
                        <script src="../../../../assets/js/vendor/popper.min.js"></script>
                        <script src="../../../../dist/js/bootstrap.min.js"></script>

                        <!-- Icons -->
                        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
                        <script>
                          feather.replace()
                        </script>

                        <!-- Graphs -->
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
                        <script>
                          var ctx = document.getElementById("myChart");
                          var myChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                              labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                              datasets: [{
                                data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                                lineTension: 0,
                                backgroundColor: 'transparent',
                                borderColor: '#007bff',
                                borderWidth: 4,
                                pointBackgroundColor: '#007bff'
                              }]
                            },
                            options: {
                              scales: {
                                yAxes: [{
                                  ticks: {
                                    beginAtZero: false
                                  }
                                }]
                              },
                              legend: {
                                display: false,
                              }
                            }
                          });
                        </script>
                      </body>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
