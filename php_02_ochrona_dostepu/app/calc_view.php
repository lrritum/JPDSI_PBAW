<?php
//Tu już nie ładujemy konfiguracji - sam widok nie będzie już punktem wejścia do aplikacji.
//Wszystkie żądania idą do kontrolera, a kontroler wywołuje skrypt widoku.
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator oprocentowania</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <style>
            input{
                border-radius: 2px !important;
            }
        </style>
    
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">Inny kalkulator</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator oprocentowania rat:</legend>
	<fieldset>
		<label for="id_x">Podaj kwotę pożyczki: </label>
		<input id="id_x" type="text" min = "0" name="x" value="<?php out($x) ?>" />
		<label for="id_lata">Na ile lat: </label>
	
                <input id="id_lata" type="number" name = "lata" value="<?php out($lata) ?>"></input>
            
                <label for="id_y">Oprocentowanie: </label>
                <input id="id_y" type="text" name="y" value="<?php out($y) ?>" /><br />
		
	</fieldset>	
	<input type="submit" value="Oblicz ratę" class="pure-button pure-button-primary" />
</form>	

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin-top: 1em; padding: 1em; border-radius: 2px; color: #fff ;background-color: #0078e7; float: left; clear: left;">
<?php echo 'Kwota miesięcznej raty: '.$result; echo' zł'?>
</div>
<?php } ?>

</div>

</body>
</html>