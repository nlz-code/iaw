<?php

function es_bisiesto($anyo)
{
	$bisiesto=$anyo%4==0 && $anyo%100!=0 || $anyo%400==0;
	
	return $bisiesto;
}

$num=2200;

echo es_bisiesto($num) ? "$num es bisiesto" : "$num no es bisiesto";