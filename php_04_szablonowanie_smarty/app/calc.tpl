{extends file="../templates/main.tpl"}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}

<h2 class="content-head is-center">Kalkulator Rat</h2>

<div class="pure-g">

	<form  action="{$app_url}/app/calc.php" method="post">
		<legend>Kalkulator oprocentowania rat:</legend>
	<fieldset>
		<label for="id_x">Podaj kwotę pożyczki: </label>
		<input id="id_x" type="text" min = "0" name="x" value="{$x}" />
		<label for="id_lata">Na ile lat: </label>
	
                <input id="id_lata" type="number" name = "lata" value="{$lata}"></input>
            
                <label for="id_y">Oprocentowanie: </label>
                <input id="id_y" type="text" name="y" value="{$y}" /><br />
		
	</fieldset>
        <div style ="text-align: center;">
	<input type="submit" value="Oblicz ratę" class="pure-button pure-button-primary" />
        </div>
	</form>


<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if isset($messages)}
	{if count($messages) > 0} 
		
		<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #ad172d; width:25em; margin:auto" class="err">
		{foreach  $messages as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}



{if isset($result)}
	
	<p class="res">
            <div style="display: inline-block; margin: auto; padding: 1em; border-radius: 2px; color: #fff ;background-color: #0078e7; position: relative;left: 50%;transform: translateX(-50%); ">
                Kwota miesięcznej raty: {$result}
            </div>
	
	</p>
{/if}

</div>
</div>

{/block}