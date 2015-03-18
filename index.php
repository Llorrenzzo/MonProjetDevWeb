<?php
session_start();

include('includes/blocs/head.php');
include ('includes/functions.php');
include ('includes/blocs/menus.php');

Require ("includes/db_connect.php");
print_r($db);

if(isset($_SESSION['messages']))
{
	//inserer du css dans un switch cas avec des classe .info .erreur .valid
	foreach ($_SESSION['messages']as $msg){
		switch ($msg['code']){
			case 0: 
			echo '<p class=valid>'. $msg['type']. ' - ' .$msg['code'].' - '.$msg['lib'].'</p><br>';
			break;
			case 1: 
			echo '<p class=erreur>'. $msg['type']. ' - '.$msg['code'].' - '.$msg['lib'].'</p><br>';
			break;
			case 2: 
			echo '<p class=info>'. $msg['type']. ' - '.$msg['code'].' - '.$msg['lib'].'</p><br>';
			break;
		}
	
	//echo $msg['type']." - ".$msg['code']." - ".$msg['lib']."<br>";	
	}
unset($_SESSION['messages']);
}

if(!isset ($_GET['page'])){
	$page="Variable page n'existe pas (debug)<br>";
}
else {
	$page=$_GET['page'];
echo "<br>variable page =".$page."(debug)<br>";
}

echo $page;


switch ($page){
	case "formulaireregister2":
		include("includes/pages/formulaireregister2.php");
		break;
	case "registertraitement2":
		include("includes/pages/registertraitement2.php");
		break;
	case "articles_read":
		$titre="Lecture d'un article";
		include("includes/pages/articles_read.php");
		break;
	Case "articles_list":
		//$titre="liste des articles";
		include("includes/pages/articles_list.php");
		break;
	Case "articles_edit":
		//$titre="liste des articles";
		include("includes/pages/articles_edit.php");
		break;
	//case "home":
		//echo "vous est sur home";
	default : 
	include("includes/pages/home.php");
	break;
}


include("includes/blocs/foot.php");
