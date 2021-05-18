{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}personSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane osoby</legend>
		<div class="pure-control-group">
            <label for="name">Marka</label>
            <input id="name" type="text" placeholder="Marka" name="name" value="{$form->name}">
        </div>
		<div class="pure-control-group">
            <label for="surname">Model</label>
            <input id="surname" type="text" placeholder="Model" name="surname" value="{$form->surname}">
        </div>
		<div class="pure-control-group">
            <label for="birthdate">Rok produkcji</label>
            <input id="birthdate" type="text" placeholder="Rok produkcji" name="birthdate" value="{$form->birthdate}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}personList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="{$form->id}">
</form>	
</div>

{/block}
