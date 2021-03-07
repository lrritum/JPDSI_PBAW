
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalk-kredyt</title>
<style>
input{ 	text-align: right;
		left: 0;
		}
form{	width :250px; 	
		}
input{	width:100px;
		float: right;
		}
</style>
</head>
<body>


<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_x">Kwota: </label>
	<input id="id_x" type="text" name="x" value="<?php if (isset($x))print($x); ?>" /><br /> <br />
	<label for="id_lata">Na ile lat: </label>
	
	<input id="id_lata" type="number" name = "lata" value="<?php if (isset($y)) print($lata); ?>"></input>
	<br /><br />
	<label for="id_y">Oprocentowanie: </label>
	<input id="id_y" type="text" name="y" value="<?php if (isset($y)) print($y); ?>" /><br /><br />
	<input type="submit" value="Oblicz raty" /><br />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Raty miesięczne: '.$result; ?>
</div>
<?php } ?>

</body>
</html>