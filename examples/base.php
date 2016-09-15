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
</head>
<body>

<h1 style="text-align: center; font-weight: bold;">SGS</h1>

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
		$result = $db->query('SELECT * FROM usuarios');


		foreach($result as $row)
		   {
			echo "<span class='card' style='max-width: 20rem; float: left;'>
							<img class='card-img-top' src='img/new.png' alt='Salgado'>
							<div class='card-block'><h4 class='card-title'>".$row['nome'] . "</h4> <p class='card-text'>". date("d/m/Y", strtotime($row['datanasc'])). "</p></div>
						</span>";
		}


		echo "<hr><br>";


		$aniversrio =
			array(
				0  => array("data" => date("Y") . "-04-05 16:30:00", "id" => "1", "nome" => "Sara"),
				1  => array("data" => date("Y") . "-04-18 16:30:00", "id" => "2", "nome" => "Thiago"),
				2  => array("data" => date("Y") . "-06-10 16:30:00", "id" => "3", "nome" => "Franciela"),
				3  => array("data" => date("Y") . "-07-26 16:30:00", "id" => "4", "nome" => "Carlos"),
				4  => array("data" => date("Y") . "-07-29 16:30:00", "id" => "5", "nome" => "Alan"),
				5  => array("data" => date("Y") . "-07-29 16:30:00", "id" => "6", "nome" => "Alex"),
				6  => array("data" => date("Y") . "-07-31 16:30:00", "id" => "7", "nome" => "Leandro"),
				7  => array("data" => date("Y") . "-08-28 16:30:00", "id" => "8", "nome" => "Cristopher"),
				8  => array("data" => date("Y") . "-09-07 16:30:00", "id" => "9", "nome" => "Flavio"),
				9  => array("data" => date("Y") . "-09-08 16:30:00", "id" => "10", "nome" => "Teixeira"),
				10 => array("data" => date("Y") . "-10-01 16:30:00", "id" => "11", "nome" => "Fernando"),
				11 => array("data" => date("Y") . "-10-24 16:30:00", "id" => "12", "nome" => "Mauro"),
				12 => array("data" => date("Y") . "-12-28 16:30:00", "id" => "13", "nome" => "Isabela"),
				13 => array("data" => date("Y") . "-12-10 16:30:00", "id" => "14", "nome" => "Willian"),
				14 => array("data" => date("Y") . "-05-29 16:30:00", "id" => "15", "nome" => "Alex Sander")

			);

		$result2 = count($aniversrio);
		$i = 0;

		while ($i <= ($result2 - 1)) {

			$data_agora = strtotime($aniversrio[$i]['data']);

			$data_agora_hoje = strtotime(date('Y-m-d'));

			$dif = $data_agora - $data_agora_hoje;

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

				?>

				<div class="col-xs-12 col-md-12 full-card" style="background-color: <?php echo $classe; ?>; text-align: center;">
					<div class="flip-card" style="box-shadow: black;">
						<div class="card label">

						</div>
						<div class="well">
							<h1><img src="img/new.png" width="200px;">
							</h1>
							<?php echo $texto; ?>
							<h3><?php echo $aniversrio[$i]['nome'] . " - " . date('d/m/Y', strtotime($aniversrio[$i]['data'])); ?></h3>
							<br>
							<div id="clock<?php echo $i; ?>" class="flip-counter clock flip-clock-wrapper" style="margin-left: 20%"></div>
							<script type="text/javascript">  var clock;
								$(document).ready(function () {
									var clock = $('#clock<?php echo $i;?>').FlipClock(<?php echo $dif;?>, {
										clockFace: 'DailyCounter',
										countdown: true
									});
								});  </script>
						</div>
					</div>


				</div>

				<?php
				$i++;
			} else {
				$texto = "";
				?>

				<div class="col-xs-12 col-md-12 full-card" style="background-color: <?php echo $classe; ?>; text-align: center;">
					<div class="flip-card" style="box-shadow: black;">
						<div class="card label">

						</div>
						<div class="well">
							<h1><img src="img/new.png" width="200px;">
							</h1>
							<?php echo $texto; ?>
							<h3><?php echo $aniversrio[$i]['nome'] . " - " . date('d/m/Y', strtotime($aniversrio[$i]['data'])); ?></h3>
							<br>
							<div id="clock<?php echo $i; ?>" class="flip-counter clock flip-clock-wrapper" style="margin-left: 20%"></div>

						</div>
					</div>


				</div>

				<?php
				$i++;
			}


		}
		?>
	</div>
</div>

<script src="../js/tether.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>