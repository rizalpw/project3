<?php 
// buat koneksi dengan MySQL, gunakan database: universitas
$link = mysqli_connect("localhost", "root", "", "ci-test");
 
// jalankan query
$result = mysqli_query($link, "SELECT users.nama, fakultas.Nama, prodi.Nama, users.status, users.ket FROM users INNER JOIN prodi ON users.id_prodi=prodi.id_prodi INNER JOIN fakultas ON prodi.id_fak=fakultas.id_fak");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Universitas Muhammadiah Banjarmasin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom fonts for this template-->
    <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin.css" rel="stylesheet">
</head>
<style>
  .jumbotron{
    background: url("../Project1/img/umb_bg.jpg") no-repeat center center; 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100%;

  }
  .strokeme{
    text-align: right;
    color: #005B89 ;
    text-shadow:
    -1px -1px 0 #fff,
    1px -1px 0 #fff,
    -1px 1px 0 #fff,
    1px 1px 0 #fff;  
  }
</style>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#"><i class="fa fa-home"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Login/index">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="jumbotron text-center">
  <h1 class="strokeme">Selamat Datang di Universitas Muhammadiyah Banjarmasin</h1>
  <p class="strokeme" style="color: black;">Resize this responsive page to see the effect!</p> 
</div>
  
<center>
  <!-- DataTables Example -->
  <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            DAFTAR DOSEN</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                <thead>
                  <tr>
                    
                    <th>NAMA</th>
                    <th>FAKULTAS</th>
                    <th>PRODI</th>
                    <th>STATUS</th>
					          <th>KETERANGAN</th>
					          
                  </tr>
				</thead>
				<tbody>
				<?php 
			while ($row=mysqli_fetch_row($result)) {
					$count = 1;
		          echo '  
                  <tr>
                    
                    <td>'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                    <td>'.$row[2].'</td>
                    <td>'.$row[3].'</td>
					<td>'.$row[3].'</td>
					
				  </tr>';
			 
			}?>
				</tbody>
              </table>
            </div>
          </div>
          </div>

      </div>
	<!-- <div class="container">
    <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <br>	

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <a?php 
			while ($row=mysqli_fetch_row($result))
{
	if ($row[4] == 'tesPid1') {
		
	
   echo "<tr> <td> $row[1] </td> <td> $row[2] </td> <td> <a> Detail >> </a> </td> </tr>" ;
   }
}

    	 ?>
    </tbody>
  </table>
</div> -->
</center>
  <!-- Bootstrap core JavaScript-->
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="assets/chart.js/Chart.min.js"></script>
  <script src="assets/datatables/jquery.dataTables.js"></script>
  <script src="assets/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
</body>
</html>