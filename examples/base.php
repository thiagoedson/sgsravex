<html>
<head>
	<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../compiled/flipclock.css">
	<title>SGS</title>
	<script src="../js/jquery.min.js"></script>
	<script src="../compiled/flipclock.js"></script>

	<script src="../src/flipper.js"></script>
	<script src="../src/material.min.js"></script>
	<script src="../src/ripples.min.js"></script>
	<link href="../src/flipper.css">
	<link href="../src/material-wfont.min.css">
	<link href="../src/ripples.min.css">
	<style type="text/css">
		* {
			padding: 0;
			margin: 0;

			}

	</style>
</head>
<body>

<h1 style="text-align: center; font-weight: bold; background-color: #1f2021;color: #ffffff;padding: 20px;" >SGS - <a href="http://www.guiainforme.com/buon-mangiare-itapema-sc-alimentos-congelados" target='_blank' style="color: #ffffff;"> Buon Mangiare -(47) 3368-4733</a></h1>

<br>
<div class="container">
	<div id="example-row" class="row">
		<?php

		date_default_timezone_set('America/Sao_Paulo');

		//--Banco de dados SqLite3
		try {

			$db = new PDO('sqlite:bd_web.sqlite');
		} catch (Exception $e) {
			echo "caiu aqui " . $e;
		}
		$result = $db->query("SELECT * FROM usuarios ORDER BY date(datanasc) DESC");


		foreach($result as $row)
		   {

		   	$mes_d = date("m", strtotime($row['datanasc']));

		   	if($mes_d == date('m')) {
		   		$color = '#FF8000';
				}
				else {
					$color = '#E6E6E6';
				}




			echo "<span class='card' style='width: 17rem; float: left; margin-left: 12px;border-color: $color'>
							<img class='card-img-top' src='img/new.png' alt='Salgado'>
					
							<div class='card-block'><h4 class='card-title'>".$row['nome'] . "</h4> <p class='card-text'>". date("d/m/Y", strtotime($row['datanasc'])). "</p></div>
                                                        <div id='number'></div>
						</span>";
		}


		echo "<hr><br>";


		$result2 = count($aniversrio);
		$i = 0;

		while ($i <= ($result2 - 1)) {




			$data_agora = strtotime($aniversrio[$i]['data']);

			$data_agora_hoje = strtotime(date('Y-m-d'));

			$dif = $data_agora - $data_agora_hoje;


/*
			if ($dif < 0) {


				$testeadata = date('Y-m-d', strtotime("+365 day", $data_agora));

				$testeadata = strtotime($testeadata);

				$dif = $testeadata - $data_agora_hoje;

			}


			$data = date("Y-m-d");

			$arrayData2 = explode("-", $aniversrio[$i]['data']);
			$mes = $arrayData2[1];


			// Aqui você separa esta em um Array
			$arrayData = explode("-", $data);

			// Imprimindo os dados:


			$classe = $arrayData[1] == $mes ? "darkorange" : "white";

			if ($classe == "darkorange") {
				$texto = "<a href=\"http://www.guiainforme.com/buon-mangiare-itapema-sc-alimentos-congelados\" class='btn btn-default' target='_blank'> Buon Mangiare -(47) 3368-4733</a>";

				*/?><!--

				<div class="col-xs-12 col-md-12 full-card" style="background-color: <?php /*echo $classe; */?>; text-align: center;">
					<div class="flip-card" style="box-shadow: black;">
						<div class="card label">

						</div>
						<div class="well">
							<h1><img src="img/new.png" width="200px;">
							</h1>
							<?php /*echo $texto; */?>
							<h3><?php /*echo $aniversrio[$i]['nome'] . " - " . date('d/m/Y', strtotime($aniversrio[$i]['data'])); */?></h3>
							<br>
							<div id="clock<?php /*echo $i; */?>" class="flip-counter clock flip-clock-wrapper" style="margin-left: 20%"></div>
							<script type="text/javascript">  var clock;
								$(document).ready(function () {
									var clock = $('#clock<?php /*echo $i;*/?>').FlipClock(<?php /*echo $dif;*/?>, {
										clockFace: 'DailyCounter',
										countdown: true
									});
								});  </script>
						</div>
					</div>


				</div>

				<?php
/*				$i++;
			} else {
				$texto = "";
				*/?>

				<div class="col-xs-12 col-md-12 full-card" style="background-color: <?php /*echo $classe; */?>; text-align: center;">
					<div class="flip-card" style="box-shadow: black;">
						<div class="card label">

						</div>
						<div class="well">
							<h1><img src="img/new.png" width="200px;">
							</h1>
							<?php /*echo $texto; */?>
							<h3><?php /*echo $aniversrio[$i]['nome'] . " - " . date('d/m/Y', strtotime($aniversrio[$i]['data'])); */?></h3>
							<br>
							<div id="clock<?php /*echo $i; */?>" class="flip-counter clock flip-clock-wrapper" style="margin-left: 20%"></div>

						</div>
					</div>


				</div>

				--><?php
/*				$i++;
			}*/

		$i++;
		}
		?>
	</div>
</div>

<script src="../js/tether.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>