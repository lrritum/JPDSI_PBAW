<?php
//Tu już nie ładujemy konfiguracji - sam widok nie będzie już punktem wejścia do aplikacji.
//Wszystkie żądania idą do kontrolera, a kontroler wywołuje skrypt widoku.
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator oprocentowania</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/assets/css/main.css" />
        <style>
            input{
                border-radius: 2px !important;
            }
        </style>
    
</head>
<body>
       <?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>
<div id="wrapper">
    <h2>
<div style="width:90%; margin: 2em auto;">
    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button">Wyloguj</a>
	<a style="margin-left:1em;" href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">Inny kalkulator</a>
	
</div>
        </h2>
        
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
        <div style ="text-align: center;">
	<input type="submit" value="Oblicz ratę" class="pure-button pure-button-primary" />
        </div>
</form>	
<div style ="  align-items: center;margin: 2em;">
<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #ad172d; width:25em; margin:auto">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="display: inline-block; margin: auto; padding: 1em; border-radius: 2px; color: #fff ;background-color: #0078e7; position: relative;left: 50%;transform: translateX(-50%); ">
<?php echo 'Kwota miesięcznej raty: '.$result; echo' zł'?>
</div>
<?php } ?>
</div>
</div>
</div>
    <?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>
</body>
</html>