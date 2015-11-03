<?php

/*
Constantes y variables globales
*/

define(DOMINIO,'fplaneta.com');
define(LOCALHOST, !($Server = (substr($_SERVER['DOCUMENT_ROOT'],1,3) == 'opt') ? 0 : 1));
define(BASE, LOCALHOST ? 'http://localhost/'.DOMINIO.'/' : 'http://'.DOMINIO.'/');
define(R, LOCALHOST ? '/'.DOMINIO.'/':'/');



/*
Funciones
*/

function sal($length) {
	for($r=rand(48,109),srand(date('s'));$i<$length;$i++,$r=rand(48,109)) $s.=chr($r>83?$r+13:($r>57?$r+7:$r));
	return $s;
}

?>