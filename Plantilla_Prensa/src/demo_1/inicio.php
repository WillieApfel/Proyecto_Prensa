<?php include('header.php');
?>
  <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Prensa</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links">
                      <li><a href="#">Estadisticas</a></li>
                      <li><a href="#">Juegos</a></li>
                      <li><a href="#">Asistencia de los juegos</a></li>
                    </ul>
                    <ul class="quick-links ml-auto">
                      <li><a href="#">Opciones</a></li>
                      <li><a href="#">Analisis</a></li>
                      <li><a href="#">Vista</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> 
<!-- partial -->
 <div class="col-md-12">
                <div class="page-header-toolbar">
                  <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-left"></i></button>
                    <button type="button" class="btn btn-secondary">03/02/2019 - 20/08/2019</button>
                    <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-right"></i></button>
                  </div>
                  <div class="filter-wrapper">
                    <div class="dropdown toolbar-item">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Todos los dias</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                        <a class="dropdown-item" href="#">Hace un día</a>
                        <a class="dropdown-item" href="#">Hace un mes</a>
                        <a class="dropdown-item" href="#">El año pasado</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
        <div class="row">
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-0">Historial estadistico de la temporada</h4>
                    <div class="d-flex flex-column flex-lg-row">
                      <p>Navegantes del Magallanes BBC</p>
                      <ul class="nav nav-tabs sales-mini-tabs ml-lg-auto mb-4 mb-md-0" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="sales-statistics_switch_1" data-toggle="tab" role="tab" aria-selected="true">S1</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="sales-statistics_switch_2" data-toggle="tab" role="tab" aria-selected="false">S2</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="sales-statistics_switch_3" data-toggle="tab" role="tab" aria-selected="false">S3</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="sales-statistics_switch_4" data-toggle="tab" role="tab" aria-selected="false">S4</a>
                        </li>
                      </ul>
                    </div>
                    <div class="d-flex flex-column flex-lg-row">
                      <div class="data-wrapper d-flex mt-2 mt-lg-0">
                        <div class="wrapper pr-5">
                          <h5 class="mb-0">Victorias</h5>
                          <div class="d-flex align-items-center">
                            <h4 class="font-weight-semibold mb-0">4</h4>
                            </div>
                        </div>
                        <div class="wrapper">
                          <h5 class="mb-0">Derrotas</h5>
                          <div class="d-flex align-items-center">
                            <h4 class="font-weight-semibold mb-0">6</h4>
                          </div>
                        </div>
                      </div>
                      <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                    </div>
                    <canvas class="mt-5" height="120" id="sales-statistics-overview"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body d-flex flex-column">
                    <div class="wrapper">
                      <h4 class="card-title mb-0">Gráfica Estadistica</h4>
                      <p>Comienzo de temporada hasta hoy</p>
                        
                      <div class="mb-4" id="net-profit-legend"></div> 
                    </div>
                    <canvas class="my-auto mx-auto" height="250" id="net-profit"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      </div>
                  </div>
              
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Roster</h4>
                          <a href="#"><small>Todos los jugadores</small></a>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>Invoice ID</th>
                                <th>Customer</th>
                                <th>Status</th>
                                <th>Due Date</th>
                                <th>Amount</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>INV-87239</td>
                                <td>Viola Ford</td>
                                <td>Paid</td>
                                <td>20 Jan 2019</td>
                                <td>$755</td>
                              </tr>
                              <tr>
                                <td>INV-87239</td>
                                <td>Dylan Waters</td>
                                <td>Unpaid</td>
                                <td>23 Feb 2019</td>
                                <td>$800</td>
                              </tr>
                              <tr>
                                <td>INV-87239</td>
                                <td>Louis Poole</td>
                                <td>Unpaid</td>
                                <td>25 Mar 2019</td>
                                <td>$463</td>
                              </tr>
                              <tr>
                                <td>INV-87239</td>
                                <td>Vera Howell</td>
                                <td>Paid</td>
                                <td>27 Mar 2019</td>
                                <td>$235</td>
                              </tr>
                              <tr>
                                <td>INV-87239</td>
                                <td>Allie Goodman</td>
                                <td>Unpaid</td>
                                <td>1 Apr 2019</td>
                                <td>$657</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
               
                </div>
              </div>
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <h1 class="card-title mb-4">Promedio de asistencia por juego</h1>
                        <div class="row">
                          <div class="col-5 col-md-5">
                            <div class="wrapper border-bottom mb-2 pb-2">
                              <h4 class="font-weight-semibold mb-0">4,532</h4>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">Promedio de la temporada</p>
                                <div class="dot-indicator bg-secondary ml-auto"></div>
                              </div>
                            </div>
                            <div class="wrapper">
                              <h4 class="font-weight-semibold mb-0">1,674</h4>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">Promedio por juego</p>
                                <div class="dot-indicator bg-primary ml-auto"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-5 col-md-7 d-flex pl-4">
                            <div class="ml-auto">
                              <canvas height="100" id="realtime-statistics"></canvas>
                            </div>
                          </div>
                        </div>
                        <div class="row mt-5">
                          <div class="col-6">
                            <div class="d-flex align-items-center mb-2">
                              <h2 class="font-weight-semibold mb-0">3,605</h2>
                            </div>
                            <p>Asistencia de la semana pasada</p>
                          </div>
                          <div class="col-6">
                            <div class="mt-n3 ml-auto" id="dashboard-guage-chart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>

<?php include('footer.php');
?>
