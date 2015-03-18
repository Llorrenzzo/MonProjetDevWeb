<?php 
//session_unset();

?>
<?php

Echo "Print_r SuperVariable FILES";
echo "<pre>";
print_r($_FILES);
echo "</pre>";

//chargement du fichier dans le dossier prévu sur le serveur
//On defini le chemin (relatif ou absolu) de telechargement du fichier sur le serveur
$uploaddir = 'FichierDL/';
//On recupere le champ "name" du champs chargement de fichier du formulaire HTML
$uploadfile = $uploaddir . basename($_FILES['Photo_profil']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['Photo_profil']['tmp_name'], $uploadfile)) {
    		
	addmessage (0, "valid","le fichier est transféré");
		
} else {
    addmessage (1, "erreur","le fichier est n'est pas transféré");	
}
// on recupere le nom de fichier
$nomFichier= $_FILES['Photo_profil']['name'];
echo $nomFichier. "<br>";

addmessage (0, "info","le fichier transféré est nommmé".$nomFichier);
//On extrait l'extention du fichier (voir infos pathinfo)
$ext = pathinfo($nomFichier, PATHINFO_EXTENSION);
echo $ext. "<br>";
addmessage (0, "info","le fichier porte l'extention :".$ext);

//controle de l'extension

/*$extAutorises = array('gif','png','jpg');
if(in_array($ext,$extAutorises)) {
	
	addmessage (0, "info","l'extention est Autorisée");	
}
else {
	// on pourrait mettre ici l'instruction move_uploaded_file
			
		addmessage (0, "info","l'extention n'est pas la bonne... mais bon ...");	
		
		// on collecte les messages dans une variable messages
	//$messages []=$msg;
}*/
echo'</PRE>';
echo "fin de page registertraitement2";