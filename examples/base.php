<html>
<head>
	<link rel="stylesheet" href="../compiled/flipclock.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<script src="../compiled/flipclock.js"></script>
	<!-- Última versão CSS compilada e minificada -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Tema opcional -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Última versão JavaScript compilada e minificada -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<h2 class="bg-success">SGS</h2>
<br>
<?php

date_default_timezone_set('America/Los_Angeles');

$aniversrio =
	array(
0 => array("data" => date("Y")."-04-05 16:30:00", "id" => "1", "nome" => "Sara"),
1 => array("data" => date("Y")."-04-18 16:30:00", "id" => "2", "nome" => "Thiago"),
2 => array("data" => date("Y")."-04-30 16:30:00", "id" => "3", "nome" => "Alisson"),
3 => array("data" => date("Y")."-05-12 16:30:00", "id" => "4", "nome" => "Maikon"),
4 => array("data" => date("Y")."-06-10 16:30:00", "id" => "5", "nome" => "Franciela"),
5 => array("data" => date("Y")."-07-26 16:30:00", "id" => "6", "nome" => "Carlos"),
6 => array("data" => date("Y")."-07-29 16:30:00", "id" => "7", "nome" => "Alan"),
7 => array("data" => date("Y")."-07-29 16:30:00", "id" => "8", "nome" => "Alex"),
8 => array("data" => date("Y")."-07-31 16:30:00", "id" => "9", "nome" => "Leandro"),
9 => array("data" => date("Y")."-08-11 16:30:00", "id" => "10", "nome" => "Sandra"),
10 => array("data" => date("Y")."-08-28 16:30:00", "id" => "11", "nome" => "Cristopher"),
11 => array("data" => date("Y")."-09-07 16:30:00", "id" => "12", "nome" => "Flavio"),
12 => array("data" => date("Y")."-09-08 16:30:00", "id" => "13", "nome" => "Teixeira"),
13 => array("data" => date("Y")."-10-01 16:30:00", "id" => "14", "nome" => "Fernando"),
14 => array("data" => date("Y")."-10-24 16:30:00", "id" => "15", "nome" => "Mauro"),
15 => array("data" => date("Y")."-12-28 16:30:00", "id" => "16", "nome" => "Isabela")

	);
$i = 0;

while ($i <= 14) {

	$data_agora = strtotime($aniversrio[$i]['data']);

	$data_agora_hoje = strtotime(date('Y-m-d'));

	$dif =  $data_agora - $data_agora_hoje ;
	
	if($dif < 0) {
		$dif = mktime(0, 0, 0, date("m"), date("d"), date("Y")+1);
		
	}


	?>
	<label style="border: solid; display: block; text-align: center; border-width: thin;">
		<div style="padding: 10px;">
			<span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $aniversrio[$i]['nome']." - ".$aniversrio[$i]['data']; ?>
			<img src="img/assa.jpg" width="200px;"></div>
		<div id="clock<?php echo $i; ?>" class="flip-counter clock flip-clock-wrapper" style="width: 900px;    height: 116px;   margin: 0 auto;"></div>
		<script type="text/javascript">  var clock;
			$(document).ready(function () {
				var clock = $('#clock<?php echo $i;?>').FlipClock(<?php echo $dif;?>, {
					clockFace: 'DailyCounter',
					countdown: true
				});
			});  </script>
	</label>

	<?php
	$i++;
}
?>
</body>
</html>