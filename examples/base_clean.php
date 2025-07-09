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

                foreach($result as $row) {
                        $mes_d = date("m", strtotime($row['datanasc']));

                        if($mes_d == date('m')) {
                                $color = '#FF8000';
                        } else {
                                $color = '#E6E6E6';
                        }

                        echo "<span class='card' style='width: 17rem; float: left; margin-left: 12px;border-color: $color'>
                                <img class='card-img-top' src='img/new.png' alt='Salgado'>
                                <div class='card-block'>
                                        <h4 class='card-title'>".$row['nome'] . "</h4> 
                                        <p class='card-text'>". date("d/m/Y", strtotime($row['datanasc'])). "</p>
                                </div>
                                <div id='number'></div>
                        </span>";
                }
                ?>
        </div>
</div>

<script src="../js/tether.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>