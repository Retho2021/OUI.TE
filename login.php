<!DOCTYPE HTML>


<html>
<?php include('header.php'); ?>

	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>Se connecter / S'inscrire</h1>

					</header>

				<!-- Main -->
					<div id="main">
					<?php include('nav2.php'); ?>
						<!-- Content -->
							<section id="content" class="main">
								<h2>Se connecter</h2>
								<form method="post" action="traitement.php"> <fieldset>
 <!-- Titre du fieldset --> 
<label for="prenom">Pseudo :</label>
<input type="text" name="pseudo" id="pseudo" /> 
<br /> 
<label for="pass">Votre mot de passe :</label> <input type="password" name="pass" id="pass" />
<br />
<input type="submit" value="Se connecter" /></br>

<p><br />Vous n'avez pas de compte ? Inscrivez-vous !</p>

<hr />
<h2>S'inscrire</h2>
<form method="post" action="traitement.php"> <fieldset>
 <!-- Titre du fieldset --> 
 <label for="prenom">Pseudo :</label>
<input type="text" name="pseudo" id="pseudo" /> 
<br />
<label for="email">E-mail :</label>
<input type="email" name="email" id="email" />
<br /> 
<label for="pass">Votre mot de passe :</label> <input type="password" name="pass" id="pass" />
<br />
<label for="pass">Vérification du mot de passe :</label> <input type="password" name="pass" id="pass" />
<br />
</br><input type="submit" value="Créer votre compte" />
</section>
</div>

<?php include('footer.php'); ?>

	</body>
</html>