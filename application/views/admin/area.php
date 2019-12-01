<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Areas</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
              <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nombre</th>
                      <th>Estado</th>
                      <th>Fecha de registro</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                  <?php 
            $start = 0; 
            foreach ($areas as $datos) 
            { 
                ?> 
                <tr> 
                <td> 
                        <?php echo $datos->id ?> 
                    </td> 
                    <td> 
                        <?php echo $datos->nombre ?> 
                    </td> 
                    
                    <td> 
                        <?php echo $datos->estado ?> 
                    </td> 
                   
                    <td> 
                        <?php echo $datos->fecha_registro ?> 
                    </td> 
                   
                </tr> 
                <?php 
            } 
            ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

    </div>

</div>

</div>





  <!-- Page level plugins -->
  <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>
  <script type="text/javascript"> 
        $(document).ready(function() { 
            $("#dataTable").dataTable(); 
        }); 
    </script> 