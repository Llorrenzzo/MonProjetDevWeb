<?php
//$id=(int)$_GET['id'];
$id=(isset ($_GET['id'])? (int)$_GET['id']:0);
?>

<h2> lecture d'un article</h2>


<?php
echo "debug N° id http://serveurvh.local/index.php?page=articles_read&id=".$id."<br>";
?>

<?php
$sql="SELECT * FROM article WHERE id=".$id;
echo "Ma chaine SQL:".$sql."<br>";

//http://php.net/manual/fr/pdo.query.php
// statement : objet de retour d'une requete 



$statement= $db->query($sql);
// ->acceder a une methode
print_r($statement);

echo "statement fin";


If ($article = $statement->fetch()) 
	{	

echo "<br><Br>print_r  \$article :";

echo "<pre>";
print_r($article);
echo "</pre>";
?>
<!--Resultat affiché en html
// fecth retourne fault si pas d'article correspondant / je teste si un resultat existe -->
	
<H2>Affichage Lecture d'un article <h2>
<article id= "<?php echo $article['id']; ?>">
	<h1><?php echo $article['title']; ?></h1>
	<p><?php echo nl2br($article['content']); ?></P>
</article>
<?php
	}
else {
	echo "<Br><Br>Pas d'article correspondant a cet ID";
}
?>
