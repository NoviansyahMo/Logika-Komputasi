<?php 
	if ($_POST['submit']) {
		$input = $_POST['input'];

		$lenght = str_replace(array('v','^'), '-',$input);
		$explode = explode("-", $lenght);
		$long = count($explode);

		function get_string_between($string, $start, $end){
		    $string = ' ' . $string;
		    $ini = strpos($string, $start);
		    if ($ini == 0) return '';
		    $ini += strlen($start);
		    $len = strpos($string, $end, $ini) - $ini;
		    return substr($string, $ini, $len);
		}

		if($long == 3){
			$parsed_1 = get_string_between($input, $explode[0], $explode[1]);
			$parsed_2 = get_string_between($input, $explode[1], $explode[2]);
		}else{
			$parsed_1 = get_string_between($input, $explode[0], $explode[1]);
		}

?>
	<h3><?php echo $input; ?></h3>
	<table class="table table-bordered">
		<thead>
			<tr>
				<?php
					if ($long == 3) {
					for($i = 0; $i < $long; $i++){
				?>
					<th><?php echo $explode[$i]; ?></th>
				<?php
					}
				?>
				<th>
					<?php 
						echo $explode[0].' '.$parsed_1.' '.$explode[1];
					?>
				</th>
				<th>
					<?php 
						echo '('.$explode[0].' '.$parsed_1.' '.$explode[1].')'.' '.$parsed_2.' '.$explode[2];
					?>
				</th>
				<?php }else{?>
				<th><?php echo $explode[0];?></th>
				<th><?php echo $explode[1];?></th>
				<th><?php echo $explode[0].' '.$parsed_1.' '.$explode[1];?></th>
				<?php }?>
			</tr>
		</thead>
		<tbody>
			<?php if ($long == 3): ?>
				<tr>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>
						<?php
							if($parsed_1 == "v"){
								echo "1";
							}else{
								echo "1";
							}
						?>
					</td>
					<td>
						<?php
							if($parsed_2 == "v"){
								echo "1";
							}else{
								echo "1";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>1</td>
					<td>0</td>
					<td>
						<?php
							if($parsed_1 == "v"){
								echo "1";
							}else{
								echo "1";
							}
						?>
					</td>
					<td>
						<?php
							if($parsed_2 == "v"){
								echo "1";
							}else{
								echo "0";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>0</td>
					<td>1</td>
					<td>
						<?php
							if($parsed_1 == "v"){
								echo $ke3 = "1";
							}else{
								echo $ke3 = "0";
							}
						?>
					</td>
					<td>
						<?php
							if($parsed_2 == "v"){
								echo "1";
							}elseif ($parsed_2 == "^" && $ke3 == "1") {
								echo "1";
							}else{
								echo "0";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>0</td>
					<td>0</td>
					<td>
						<?php
							if($parsed_1 == "v"){
								echo $ke4 = "1";
							}else{
								echo $ke4 = "0";
							}
						?>
					</td>
					<td>
						<?php
							if($parsed_2 == "v" && $ke4 == '1'){
								echo "1";
							}else{
								echo "0";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>0</td>
					<td>1</td>
					<td>1</td>
					<td>
						<?php
							if($parsed_1 == "v"){
								echo $ke5 = "1";
							}else{
								echo $ke5 = "0";
							}
						?>
					</td>
					<td>
						<?php
							if($parsed_2 == "v" && $ke5 == '1'){
								echo "1";
							}elseif($parsed_2 == "^" && $ke5 == '1'){
								echo "1";
							}else{
								echo "0";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>0</td>
					<td>1</td>
					<td>0</td>
					<td>
						<?php
							if($parsed_1 == "v"){
								echo $ke5 = "1";
							}else{
								echo $ke5 = "0";
							}
						?>
					</td>
					<td>
						<?php
							if($parsed_2 == "v" && $ke5 == '1'){
								echo "1";
							}else{
								echo "0";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>0</td>
					<td>0</td>
					<td>1</td>
					<td>
						<?php
							echo $ke6 = "0";
						?>
					</td>
					<td>
						<?php
							if($parsed_2 == "v"){
								echo "1";
							}else{
								echo "0";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
				</tr>
			<?php else: ?>
				<tr>
					<td>1</td>
					<td>1</td>
					<td>1</td>
				</tr>
				<tr>
					<td>1</td>
					<td>0</td>
					<td>
						<?php 
							if($parsed_1 == 'v'){
								echo '1';
							}else{
								echo '0';
							}
						?>
					</td>
				</tr>
				<tr>
					<td>0</td>
					<td>1</td>
					<td>
						<?php 
							if($parsed_1 == 'v'){
								echo '1';
							}else{
								echo '0';
							}
						?>
					</td>
				</tr>
				<tr>
					<td>0</td>
					<td>0</td>
					<td>0</td>
				</tr>
			<?php endif ?>
		</tbody>
	</table>
	<br>
	<div class="row">
		<div class="col-md-3">
			<a href="?halaman=kalkulator" class="btn btn-danger">Kembali</a>
		</div>
	</div>
<?php
		die();
	}
?>
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-info alert-dismissible fade show" role="alert">
		  <strong>Info</strong> Halaman ini digunakan untuk melakukan perhitungan sederhada dari operator logika. <br>
		  Untuk saat ini masih belum bisa melakukan perhitungan dengan kompleks.
		</div>
	</div>
</div>
<div class="row">
	<div class="col col-sm-12">
		<div class="card">
			<div class="card-body">
				<form method="POST">
					<div class="row">
						<div class="col-md-7">
							<input type="text" id="input" name="input" class="form-control">
						</div>
						<div class="col-md-1">
							<button type="button" id="a" class="btn btn-info btn-block">A</button>
						</div>
						<div class="col-md-1">
							<button type="button" id="b" class="btn btn-info btn-block">B</button>
						</div>
						<div class="col-md-1">
							<button type="button" id="c" class="btn btn-info btn-block">C</button>
						</div>
						<div class="col-md-1">
							<button type="button" id="and" class="btn btn-info btn-block">AND</button>
						</div>
						<div class="col-md-1">
							<button type="button" id="or" class="btn btn-info btn-block">OR</button>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<input type="submit" name="submit" name="submit" class="btn btn-success btn-block" value="Submit">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#a").click(function(){
			var val = $("#input").val();

			$("#input").val(val + "A");

			$(this).attr('disabled', true);
		});
		$("#b").click(function(){
			var val = $("#input").val();

			$("#input").val(val + "B");

			$(this).attr('disabled', true);
		});
		$("#c").click(function(){
			var val = $("#input").val();

			$("#input").val(val + "C");

			$(this).attr('disabled', true);
		});
		$("#or").click(function(){
			var val = $("#input").val();

			$("#input").val(val + "v");
		});
		$("#and").click(function(){
			var val = $("#input").val();

			$("#input").val(val + "^");
		});
	});
</script>