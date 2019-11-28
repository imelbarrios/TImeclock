<!--<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-1">
            <h3>Admin Login</h3>
            <form form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="<?php echo base_url() ?>index.php/login/admin" method="POST">
                <div class="form-group">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Nombre de usuario" value="" />
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese contraseña" value="" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btnSubmit">Login</button>
                </div>

            </form>
        </div>
        <div class="col-md-6 login-form-2">
            <h3>Horas Login</h3>
            <form form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="<?php echo base_url() ?>index.php/login/horas" method="POST">
                <div class="form-group">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Nombre de usuario" value="" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Ingrese contraseña" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" id="password" name="password" class="btnSubmit" value="Login" />
                </div>

            </form>
        </div>
    </div>
</div>-->


<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenidos !</h1>
                  </div>
                  <form class="user" action="<?php echo base_url() ?>index.php/login/admin" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" aria-describedby="emailHelp" placeholder="Ingrese su usuario...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user"  id="password" name="password" placeholder="Ingrese contraseña">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    
                    <input type="submit" id="password" name="password" class="btn btn-primary btn-user btn-block" value="Login" />
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


