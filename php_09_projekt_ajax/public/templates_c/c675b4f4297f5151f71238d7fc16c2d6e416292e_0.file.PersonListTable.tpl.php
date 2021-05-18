<?php
/* Smarty version 3.1.30, created on 2021-05-18 03:57:47
  from "D:\xampp\htdocs\php_09_projekt_ajax\app\views\PersonListTable.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60a31f1be83da9_75928905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c675b4f4297f5151f71238d7fc16c2d6e416292e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_09_projekt_ajax\\app\\views\\PersonListTable.tpl',
      1 => 1621303066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a31f1be83da9_75928905 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
<tr ><td><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["surname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["birthdate"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['idperson'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['idperson'];?>
','Czy na pewno usunąć rekord ?')">Usuń</a></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</tbody>
</table><?php }
}
