<!DOCTYPE HTML>

<html>
<?php include("header.php")?>
<body class="is-preload">
<!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->

        <?php include("nav1.php")?> 
        <header id="header">
        <h2>Recherche de votre trajet : </h2>
        <h3>Paris > London St Pancras</h3>
        </header>

                      
<section>        
<section id="content" class="main special">

<div class="table-wrapper">
	<table>
		<thead>
			<tr>
			    <th>N° de train</th>
			    <th>Heures de départ / Arrivée</th>
			    <th>Prix en 1ère Classe / 2nde Classe (en €)</th>
			</tr>
		</thead>
		<tbody>
		    <tr>
	            <td>(Eurostar) n°215064</td>
			    <td>21:00 / 23:12</td>
			    <td>156.52 / 82.59</td>
                <td><a href="#" class="button primary fit small">Acheter en 1ère Classe</a></td>
                <td><a href="#" class="button primary fit small">Acheter en 2nde Classe</a></td>
			</tr>
			<tr>
			    <td>(Eurostar) n°217526</td>
			    <td>08:00 / 10:32</td>
			    <td>123.99 / 67.90</td>
                <td><a href="#" class="button primary fit small">Acheter en 1ère Classe</a></td>
                <td><a href="#" class="button primary fit small">Acheter en 2nde Classe</a></td>
			</tr>
			<tr>
			    <td>(Eurostar) n°805899</td>
			    <td>12:05 / 14:20</td>
			    <td>122.99 /74.7</td>
                <td><a href="#" class="button primary fit small">Acheter en 1ère Classe</a></td>
                <td><a href="#" class="button primary fit small">Acheter en 2nde Classe</a></td>
            </tr>
            <tr>
			    <td>(Eurostar) n°213165</td>
			    <td>13:15 / 15:30</td>
			    <td>142.92 / 86.72</td>
                <td><a href="#" class="button primary fit small">Acheter en 1ère Classe</a></td>
                <td><a href="#" class="button primary fit small">Acheter en 2nde Classe</a></td>
			</tr>
			<tr>
			    <td>(Eurostar) n°215064</td>
			    <td>21:00 / 23:12</td>
			    <td>156.52 / 92.60</td>
                <td><a href="#" class="button primary fit small">Acheter en 1ère Classe</a></td>
                <td><a href="#" class="button primary fit small">Acheter en 2nde Classe</a></td>
			</tr>
			</tbody>
			<tfoot>
			    <tr>
			        <td colspan="4"></td>
			        <td>Page suivante</td>
			    </tr>
			</tfoot>
	</table>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Quantité</th>
    <th scope="col">Composition</th>
    </tr>
  </thead>
  <tbody>
    

<?php
$api = '50f0821448810c13f752c3a974686f';
$station = '25';
$url = 'https://train-empire.com/api/getToStation.php?auth=' . $api . '&station=' . $station . '&limit=10';

// On effectue l'appel cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
// On désactive la verification de la présence du https
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$data = curl_exec($ch);
$json = json_decode($data);

$i = 0;

foreach ($json as $trajet => $value) {}?>

      <?php echo '<tr><td>'; echo $json[$i]->id; echo '</td>'; ?>
      <?php echo '<td>'; echo $json[$i]->name; echo '</td>'; ?>
      <?php echo '<td>'; echo $json[$i]->quant; echo '</td>'; ?>
     <?php echo '<td>'; echo '<img src="'; echo $json[$i]->img; echo '"></td></tr>'; ?>
     
      <?php

    $i++;
    
    ?>        
    
  </tbody>
</table>

<?php
//$api = '50f0821448810c13f752c3a974686f';
//$station = '18';
//$url = 'https://train-empire.com/api/getCompanyEngines.php?auth=' . $api . '&station=' . $station . '&limit=10';

// On effectue l'appel cURL
//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, $url);
// On désactive la verification de la présence du https
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//$data = curl_exec($ch);
//$json = json_decode($data);

//$i = 0;

//foreach ($json as $trajet => $value) {}?>

<?php include("footer.php") ?>


</body>
</html>