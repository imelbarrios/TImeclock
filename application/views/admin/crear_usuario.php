<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Crear usuario</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-12">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Complemente información</h6>
                </div>
                <div class="card-body">
                    <form class="user" action="<?php echo base_url() ?>index.php/usuario/admin" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="name" name="name" aria-describedby="emailHelp" placeholder="Ingrese nombre completo...">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Ingrese usuario">
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Ingrese contraseña">
                            </div>
                        </div>

                        <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <select>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                        </div>


                        <input type="submit" id="password" name="password" class="btn btn-primary btn-user btn-block" value="Crear" />
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>

</div>





<!-- Page level plugins -->
<script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/chart-pie-demo.js"></script>