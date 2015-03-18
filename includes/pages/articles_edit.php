<?php
// nouveau code ajout/edition
// on regarde si un ID a été fourni par L'url sinon on on pass id à 0
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// on regarde si un formulaire a été soumis
if (isset($_POST['submit'])) {
	// on regarde si un id est passé dans le formulaire, si oui il est prioritaire
	if (isset($_POST['id'])&&$_POST['id']>0)
		$id = (int)$_POST['id'];
	// si on a un id (GET ou POST), on fait une mise à jour
	if ($id>0)
		$sql = "UPDATE article SET title=:title, content=:content WHERE id=".$id;
	// sinon on insère un nouvel enregistrement
	else
		$sql = "INSERT INTO article (title, content) VALUES (:title, :content)";
	
	// requete préparée PDO
	$statement = $db->prepare($sql);
	$statement->bindParam(":title", $_POST['title']);
	$statement->bindParam(":content", $_POST['content']);
	$result = $statement->execute();	
	// on valide et on redirige
	addMessageRedirect(0,"valid","Votre article a bien été inséré");
} 
// si on est jusqu'ici, il n'y a pas eu de redirection
// il faut donc générer un formulaire
// mais d'abord, regardons si on a un article correspondant à l'identifiant demandé
if ($id>0) {
	$sql = "SELECT * FROM article WHERE id=".$id;
	$statement = $db->query($sql);
	if ($article = $statement->fetch()) {
		// notre article est pret à etre utilisé
	} else {
		addMessageRedirect(0,"error","Aucun article trouvé avec cet identifiant.");
	}
}
?>
<form method="post" action="index.php?page=articles_edit" enctype="multipart/form-data">
		<H2>Editer un produit de la liste</h2>
			
					
			<fieldset>
				<Label>Title (titre) :<br>
					<input type="text" name="title" size="100" value="<?php echo ($id>0 ? $article['title'] : ""); ?>" required>
				</label><br>
		
				<Label>Content (Contenu) :
					<Br><textarea rows="4" cols="100" name="content"> <?php echo ($id>0 ? $article['content'] : ""); ?></textarea>
				</label><br>
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
				<input type="submit" name="submit" value="Envoyer" />
				
			</fieldset>
</form>
			
			