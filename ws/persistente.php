<?php
/**
 * Created by PhpStorm.
 * User: thiag
 * Date: 12/10/2016
 * Time: 11:07
 */
function Tratar($array) {

	$arrayCRU = json_encode($array);
	print_r($arrayCRU);

}

function Listar()
{

	$db = new PDO("sqlite:../bd_web.sqlite");

	$array = array();
	foreach ($db->query("SELECT nome, datanasc FROM usuarios") as $row) {

		array_push($array , $row);

	}

	return $array;
}