<?php
/* Smarty version 3.1.30, created on 2021-05-18 04:26:27
  from "D:\xampp\htdocs\php_09_projekt_ajax\app\views\PersonListFullPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60a325d3a16296_17793304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d2806779210d4e4d2dafb850eccb8d5b3ae9d40' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_09_projekt_ajax\\app\\views\\PersonListFullPage.tpl',
      1 => 1621304784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:PersonListTable.tpl' => 1,
  ),
),false)) {
function content_60a325d3a16296_17793304 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133829391060a325d3a14e37_01274262', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200231038060a325d3a15f15_92341151', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_133829391060a325d3a14e37_01274262 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personListPart','table'); return false;">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="Model" name="sf_surname" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->model;?>
" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_200231038060a325d3a15f15_92341151 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personNew">+ Nowy samochód</a>
</div>	
<br>

<div id="table">
<?php $_smarty_tpl->_subTemplateRender("file:PersonListTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

<?php
}
}
/* {/block 'bottom'} */
}
