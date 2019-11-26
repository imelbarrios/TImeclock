
<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Admin Login</h3>
                    <form form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="<?php echo base_url() ?>index.php/login/admin"  method="POST">
                        <div class="form-group">
                            <input type="text" id="username" name="username" class="form-control" placeholder="Nombre de usuario" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password"  id="password" name="password" class="form-control" placeholder="Ingrese contraseña" value="" />
                        </div>
                        <div class="form-group">
                        	<button type="submit" class="btnSubmit" >Login</button>
                        </div>
                        
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Horas Login</h3>
                    <form form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="<?php echo base_url() ?>index.php/login/horas"  method="POST">
                        <div class="form-group">
                            <input type="text" id="username" name="username" class="form-control" placeholder="Nombre de usuario" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Ingrese contraseña" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit"  id="password" name="password" class="btnSubmit" value="Login" />
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>

<script type="text/javascript">
	


</script>