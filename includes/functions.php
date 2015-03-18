<?php
function addmessage($code, $type,$lib) {
	$_SESSION['messages'][]=array("code"=>$code,"type"=>$type, "lib"=>$lib);
}

Function aireDeCercle ($rayon){
	//$rayon = $rayon*$rayon;
	//$rayon= pow($rayon,2);
	//$resultat= M_PI*pow($rayon,2);
	//return M_PI*pow($rayon,2); //$resultat;
	return M_PI*($rayon*$rayon);
}

function addMessageRedirect($code, $type, $lib, $url = "index.php") {
	addMessage($code, $type, $lib);
	header("Location: ".$url);
	//exit();
}