<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
        <!-- <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/assets/css/main.css" />
        <style>
            #logo{
                object-fit: cover !important;
            }
        </style>

</head>
<body>
<div id="bgimg">
</div>
    
    <?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>
    
<div id="wrapper">
<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
	<legend>Logowanie</legend>
	<fieldset>
		<label for="id_login">Login: </label>
		<input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" />
		<label for="id_pass">Hasło: </label>
		<input id="id_pass" type="password" name="pass" />
                
	</fieldset>
        <div style ="text-align: center; margin: 2em;">
            <input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
        </div>
</form>	
    <div width: 100% style="align-content: center;">
<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #ad172d; width:300px;margin:auto">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

</div>
</div>
<?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>
</div>
    
			<script src="_APP_ROOT/assets/js/jquery.min.js"></script>
			<script src="_APP_ROOT/assets/js/jquery.poptrox.min.js"></script>
			<script src="_APP_ROOT/assets/js/skel.min.js"></script>
			<script src="_APP_ROOT/assets/js/main.js"></script>

</body>
</html>