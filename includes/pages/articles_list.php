<?php
$sql="SELECT * FROM article";
echo "Ma chaine SQL:".$sql."<br>";

//http://php.net/manual/fr/pdo.query.php
// statement : objet de retour d'une requete 



$statement= $db->query($sql);
// ->acceder a une methode
print_r($statement);
echo "statement fin ...";



If ($articles = $statement->fetchAll()) 
{	$nbRows = count($articles);
echo "<H2>Liste des articles (Total: ".$nbRows.") </h2>";
	Foreach ($articles as $article) 
	{
		
?>
<!--Resultat affiché en html
// fecth retourne fault si pas d'article correspondant / je teste si un resultat existe -->
	
		
			<Table border="1" >
				<article>
						<tr> 
							<td style="width:100px"> <?php echo $article['id']; ?></td> 	
							<td style="width:300px"><p><a href="index.php?page=articles_read&id=<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a></p></td>
							<!--<td style="width:300px"><p><?php echo nl2br($article['content']); ?></p></td>-->
							<td><a href="index.php?page=articles_edit&id=<?php echo $article['id']; ?>">modifier</a></td>
							<td><a href="index.php?page=articles_delete&id=<?php echo $article['id']; ?>">supprimer</a></td>
				</article>
						</tr> 
			</table>
			<br>
			
	
<?php
	}
}
else 
{
	echo "<Br><Br>Pas d'article correspondant a cet ID";
}

?>
