<div class="row">
	<div class="col-md-12">

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <a class="navbar-brand" href="index.php?hal=Home">TOWING</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php?hal=Home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?hal=Aboutus">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="index.php?hal=Data" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Data
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.php?hal=dataPegawai">Data Pegawai</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="index.php?hal=mitra">Mitra Kami</a>
            </div>
          </li>

          <?php
            if (!isset($_SESSION['MEMBER'])){                       
              ?>
              <li class="nav-item">
                <a class="nav-link" href="index.php?hal=formLogin">Login</a>
              </li>
              <?php
          }else{
            $member = $_SESSION['MEMBER'];
           ?>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?= $member['fullname'];?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.php?hal=dataUser">Users</a>         
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
              </li>
            <?php    
            }
            ?>
          
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
	</div>
</div>