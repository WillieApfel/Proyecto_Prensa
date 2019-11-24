<?php include '../../../functions_forms.php';

?>
  <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Reportes</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                  </div>
                </div>
              </div>
            </div> 
<script src="main.js"></script>
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="container">
                        <div>
                            <table id="datatables-example" class="table table-striped table-bordered table-responsive text-center" width="100%" cellspacing="0" style="margin-top: 40px">
                                <thead>
                                    <tr>
                                        <th>Nro Juego</th>
                                        <th>Fecha</th>
                                        <th>Rival</th>
                                        <th COLSPAN="2">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="reportes">
                                    <?php reportes_view() ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php');
?>