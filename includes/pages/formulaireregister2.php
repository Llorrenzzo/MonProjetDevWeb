		
	<form method="post" action="index.php?page=registertraitement2" enctype="multipart/form-data">
		<H2>Formulaire d'enregistrement 2</h2>
			
		<style type="text/css">
			input#R {
			border: 1px solid red;
			background-color : lightgray;
			width : 200px;
			}
		</style>
			
			<fieldset>
				<legend>Civilité:</legend>
		<Label>Civilité :<Br><select name="sexe">
		<Option value=""></option>
		<Option value="mlle"> Mademoiselle </option>
		<option value="mme"> Madame</option>
		<option value="mr"> Monsieur</option>
		</select>
		</label><br>
			
		
		<Label>Nom :<input type="text" name="nom" placeholder="Tapez votre nom de famille"  size="50" id="R" required title ="Ton vrai nom stp!">
		</label><br>
		
		<Label>Prenom :<input type="text" name="prenom" placeholder="Tapez votre prénom" id="R" required>
		</label><br>
		
		<Label>Date Naissance jj/mm/aaaa:<br> <input type="text" name="datenaissance" placeholder="jj/mm/aaaa" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])/(0[1-9]|1[012])/[0-9]{4}" title="Veuillez entrer une date crédible"><Br>
		</label><br>
		
		Sexe :<br><label id="R" required><input type="radio" name="sexe" value="homme"> Homme </label><br>
		<Label><input type="radio" name="sexe" value="femme"> Femme</label><br>
		<Label><input type="radio" name="sexe" value="autre"> Autre</label>
		<br>
		
			</fieldset>
			
			<fieldset>
				<legend>Coordonées électroniques:</legend>			
		<Label>Email1 :<input type="email" name="email1" id="R" required>
		</label><br>
		<Label>Email2 :<input type="email" name="email2" id="R" required>
		</label><br>
		<Label>Login :<input type="text" name="login" id="R" required>
		</label><br>
		<Label>Password1 :<input type="password" name="password1" id="R" required>
		</label><br>
		<Label>Password2 :<input type="password" name="password2" id="R" required>
			
		</label><br>
		<Label>Photo Profil :<input type="file" name="Photo_profil">
		</label><br>
		<Label>Téléphone :<input type="tel" name="telephone">
		</label><br>		
		<Label>Adresse site URL :<input type="url" name="site_url" value="http://">
		</label><br>
		<Label>Présentation :<Br><textarea rows="4" cols="50"> Tapez votre texte de description </textarea>
		</label><br>
		<Label>Abo Newsletter :<input type="checkbox" name="abo_news" checked>
		</label><br>
		
			</fieldset>
		
		<Label>S'enregistrer :<input type="submit" name="enregistrer">
		</label><br>
	</form>
			