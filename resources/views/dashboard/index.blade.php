<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.png">
    <title>E-Electricity</title>
</head>
<body>

    <link rel="stylesheet" type="text/css" href="{{ ('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ('assets/css/all.css') }}">

    <nav class="navbar navbar-expand-lg navbar-light fixed-stop" style="background-color: #406BE5">
    <h1 class="text-center text-dark h5 my-auto py-2"><img src="img/logo.png" alt="" style="width: 50px; position: relative; left: 50px;"></h1>
        
          <form class="form-inline my-2 my-lg-0 ml-auto">
            <div class="icon ml-4 text-white">
              <h5>
                  <i class="fas fa-user mr-2" data-toggle="tooltip" title=""></i>
                  <i class="fas fa-sort-down mr-2" data-toggle="tooltip" title=""></i>
              </h5>
          </div>
          </form>
          
          
      </nav>

    <div class="container-fluid">
		<div class="row">
			<nav id="sidebarMenu" class="col-md-3 col-lg-2" style="background-color: #3259C7">
				<div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-tachometer-alt text-white"></i>
                                <span class="text-white">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <i class="fas fa-user text-white"></i>
                                <span class="text-white">Kelola Pelanggan</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-project-diagram text-white"></i>
                                <span class="text-white">Kelola Tarif</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-briefcase text-white"></i>
                                <span class="text-white">Transaksi</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-coins text-white"></i>
                                <span class="text-white">Laporan</span>
                            </a>
                        </li>
                    </ul>
	             </div>
		    </nav>
		</div>
	</div>

</body>
</html>