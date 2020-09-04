<?php 
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Materi Operator Logika</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<style type="text/css">
		.jumbotron {
		  background-image: url("../img/jumbotron_bg.jpg");
		  background-size: cover;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">Logika Komputasi</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item <?php if($_GET[halaman] == 'tes' || $_GET[halaman] == ''){echo 'active';}?>">
	        <a class="nav-link" href="?halaman=tes">Test Kepribadian Gamer</a>
	      </li>
	      <li class="nav-item <?php if($_GET[halaman] == 'kalkulator'){echo 'active';}?>">
	        <a class="nav-link" href="?halaman=kalkulator">Kalkulator Logika Sederhana</a>
	      </li>
	      <!-- <li class="nav-item <?php if($_GET[halaman] == 'materi'){echo 'active';}?>">
	        <a class="nav-link" href="?halaman=materi">Materi Logika</a>
	      </li> -->
	    </ul>
	  </div>
	</nav>

	 <div class="jumbotron text-center">
	  <h1>Tugas Besar Logika Komputasi</h1>
	  <p>Informatika A</p>
	</div>


	<div class="container">
		<?php 
			switch ($_GET['halaman']) {
				case 'tes':
					include 'include/tes.php';
				break;
				case 'kalkulator':
					include 'include/kalkulator.php';
				break;
				// case 'materi':
				// 	include 'include/materi.php';
				// break;
				default:
					include 'include/tes.php';
				break;
			}
		?>
	</div> 
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</body>
</html>