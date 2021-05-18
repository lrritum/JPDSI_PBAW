<table class="pure-table pure-table-bordered" >
<thead>
	<tr >
		<th style="color: black; font-weight: 700">Marka</th>
		<th style="color: black; font-weight: 700">Model</th>
		<th style="color: black; font-weight: 700">Rok produkcji</th>
		<th style="color: black; font-weight: 700">Opcje</th>
	</tr>
</thead>
<tbody>
{foreach $people as $p}
{strip}
	<tr >
		<td>{$p["name"]}</td>
		<td>{$p["surname"]}</td>
		<td>{$p["birthdate"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}personEdit/{$p['idperson']}">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning"
			  onclick="confirmLink('{$conf->action_url}personDelete/{$p['idperson']}','Czy na pewno usunąć rekord ?')">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>