<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">Sistema de Timeclock</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="glyphicon glyphicon-user"></span> Usuario</a>
      </li>
      <li class="nav-item active">
       <a  class="nav-link" href="<?= base_url();?>index.php/login/logout"><span class="glyphicon glyphicon-log-in"></span> Cerrar sesion</a>
      </li>
    </ul>
  </div>
</nav>