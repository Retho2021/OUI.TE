<!DOCTYPE HTML>

<html>
<?php include("header.php")?>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>Bonjour <?php echo("Rétho")?></h1>
					</header>

				<!-- Main -->
					<div id="main">
<?php include("nav1.php")?>
<section id="content" class="main">
<h3>
    Pseudo :<?php echo(" Rétho")?> <br />
    Compagnie : Eurovia INTL
</h3>
<hr>
<h1>ZONE DANGEUREUSE !</h1>
<h2>
    Changer le mot de passe :
</h2>
<h3>
<label for="pass">Votre ancien mot de passe :</label> <input type="password" name="pass" id="pass" />
</br>
<label for="pass">Nouveau mot de passe :</label> <input type="password" name="pass" id="pass" />
</br>
<input type="submit" value="Changer le mot de passe" />
</br>

<hr>

<h5> Si vous supprimez votre compte, vos données serons supprimées et non récupérables. Il faudra alors se recréer un compte.</h6>
<a href="#" class="button">Supprimer mon compte</a>

</h3>


</div>
<?php include('footer.php'); ?>