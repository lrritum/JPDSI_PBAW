<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="{$page_description|default:"Opis domyślny"}">

    <title>{$page_title|default:"Tytuł domyślny"}</title>

	
        
  
   
	<script src="{$app_url}/js/jquery.min.js"></script>
	<script src="{$app_url}/js/softscroll.js"></script>

</head>
<body>
<div id="wrapper">
<span  class="avatar"><img id = "logo" src="{$conf->app_url}/images/logo.jpg" alt="Logo" /></span>
<div class = "cent1">
						<h1 ><strong>Kalkulator oprocentowania rat.</strong></h1>
						<ul class="icons">
							<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
							
							<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">{$page_title|default:"Tytuł domyślny"}</h1>
        <p class="splash-subhead">
             {$page_description|default:"Opis domyślny"}
        </p>
      
    </div>
</div>
</div>
<div class="content-wrapper">

    <div id="app_content" class="content">

{block name=content} Domyślna treść zawartości .... {/block}

    </div>

    <div class="footer l-box is-center">
		<p>
{block name=footer} Domyślna treść stopki .... {/block}
		</p>
          </div>

</div>

</div>
</body>
</html>