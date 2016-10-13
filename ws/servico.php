<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET, POST');
include "persistente.php";
/**
 * Created by PhpStorm.
 * User: thiag
 * Date: 12/10/2016
 * Time: 11:04
 */

$acao = $_GET['acao'];

switch ($acao):
	case 'Listar':
		$retorno = Listar();
		$retorno = Tratar($retorno);
		return $retorno;
		break;
	case 1:
		echo "i equals 1";
		break;
	case 2:
		echo "i equals 2";
		break;
	default:
		echo "Erro na chamada , por favor revisar código.";
endswitch;


