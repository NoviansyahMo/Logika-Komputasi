<?php 
	if ($_POST['submit']) {
		$no_1 = $_POST['1'];
		$no_2 = $_POST['2'];
		$no_3 = $_POST['3'];
		$no_4 = $_POST['4'];
		$no_5 = $_POST['5'];
		$no_6 = $_POST['6'];
		// $no_7 = $_POST['7'];
		// $no_8 = $_POST['8'];

		$nilai = '';
		if($no_1 == '1' && $no_2 == '1' && $no_3 == '1'){
			$nilai += 50;
		}else{
			$nilai += 0;
		}

		if(in_array("2", $no_4) || in_array("4", $no_4)){
			$nilai += 10;
		}

		if(in_array("2", $no_5) || in_array("4", $no_5) || in_array("3", $no_5)){
			$nilai += 10;
		}

		if(in_array("2", $no_6) || in_array("1", $no_6)){
			$nilai += 10;
		}
?>
		<div class="row">
			<div class="col-md-3">
				<a href="?halaman=tes" class="btn btn-danger">Kembali</a>
			</div>
		</div>
		<div class="row my-3">
			<div class="col-md-12">
				<div class="alert alert-info alert-dismissible fade show" role="alert">
				  	<strong>Hasil</strong> 
				  	<br>
				  	setelah anda menjawab semua pertanyaan sebelumnya, dari hasil ini 
				  	anda dikategorikan sebagai <b><?php if($nilai >= 80){echo "Gamer Expert";}elseif($nilai >= 30 && $nilai < 80){echo "Gamer biasa";}else{echo "Bukan Gamer";} ?></b>
				</div>
			</div>
		</div>	
<?php
		die();
	}
?>
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-info alert-dismissible fade show" role="alert">
		  	<strong>Info</strong> Halaman ini digunakan untuk tes seberapa level gamer kamu. <br>
		  	Metode penghitungan menggunakan metode operator logika. Jawab dengan kondisi anda saat ini.
		</div>
	</div>
</div>
<div class="row">
	<div class="col col-sm-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<form method="POST">
							<h5>Kategori 1 Gerbang AND</h5>
							<hr>

							<p style="font-weight:bold;">1.Seberapa sering anda main game dalam sehari?</p>
							<input type="radio" name="1" value="1"> > 3 Jam  <br>
							<input type="radio" name="1" value="0"> 0 - 3 Jam 
							
							<br>
							<br>

							<p style="font-weight:bold;">2.Mana yang anda dahulukan, membeli peralatan gaming atau membeli keperluan yang lain(tidak urgent).</p>
							<input type="radio" name="2" value="1"> Peralatan Gaming  <br>
							<input type="radio" name="2" value="0"> Keperluan lain

							<br>
							<br>

							<p style="font-weight:bold;">3.Apakah Anda merasa nyaman menggunakan mouse biasa?</p>
							<input type="radio" name="3" value="0"> Ya	<br>					
							<input type="radio" name="3" value="1"> Tidak   

							<br>
							<br>
							<br>

							<h5>Kategori 2 Gerbang OR</h5>
							<hr>

							<p style="font-weight:bold;">
								4.Mana yang akan anda pilih antara dibawah ini? <br>
								<ol>
									<li>Membeli kaset film </li>	
									<li>Membeli game di steam</li>
									<li>Menghabiskan waktu untuk tidur </li>
									<li>Menghabiskan waktu untuk bermain game</li>
								</ol>
							</p>
							<input type="checkbox" name="4[]" value="1"> 1 <br>					
							<input type="checkbox" name="4[]" value="2"> 2 <br>
							<input type="checkbox" name="4[]" value="3"> 3 <br>
							<input type="checkbox" name="4[]" value="4"> 4

							<br>
							<br>

							<p style="font-weight:bold;">
								5. Dari pilihan dibawah ini, apa yang anda lakukan ketika weekend? <br>
								<ol>
									<li>Bermain ke tempat ramai </li>	
									<li>Bermain game bersama teman</li>
									<li>Istirahat atau Me time </li>
									<li>Menghabiskan waktu seharian di depan smartphone/pc/laptop</li>
								</ol>
							</p>
							<input type="checkbox" name="5[]" value="1"> 1 <br>					
							<input type="checkbox" name="5[]" value="2"> 2 <br>
							<input type="checkbox" name="5[]" value="3"> 3 <br>
							<input type="checkbox" name="5[]" value="4"> 4

							<br>
							<br>

							<p style="font-weight:bold;">
								6. Dibawah ini game apa yang termasuk game moba?
								<br>
								<ol>
									<li>Dota 2</li>	
									<li>League of Legends</li>
									<li>Grand Theft Auto</li>
									<li>PUBG</li>
								</ol>
							</p>
							<input type="checkbox" name="6[]" value="1"> 1 <br>					
							<input type="checkbox" name="6[]" value="2"> 2 <br>
							<input type="checkbox" name="6[]" value="3"> 3 <br>
							<input type="checkbox" name="6[]" value="4"> 4

							<br>
							<br>

							<!--<p style="font-weight:bold;">7.Di Console manakah Game Story Of Season:Trio of Town rilis?</p>
							<input type="radio" name="7" value="0"> PS4	<br>					
							<input type="radio" name="7" value="0"> SEGA  <br>
							<input type="radio" name="7" value="1"> Nintendo 3DS  <br>  
							<input type="radio" name="7" value="0"> PS1  

							<br>
							<br>
							<p style="font-weight:bold;">8.Dibawah ini manakah console terlaris sepanjang masa?</p>
							<input type="radio" name="8" value="0"> PS3	<br>					
							<input type="radio" name="8" value="1"> PS2  <br>
							<input type="radio" name="8" value="0"> Xbox 360  <br>  
							<input type="radio" name="8" value="0"> Nintendo Switch  

							<br>
							<br> -->

							<input type="submit" name="submit" name="submit" value="Submit" class="btn btn-primary btn-block">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>