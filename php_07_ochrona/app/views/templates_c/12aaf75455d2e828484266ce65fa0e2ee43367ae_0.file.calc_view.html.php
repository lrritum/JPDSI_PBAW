<?php
/* Smarty version 3.1.39, created on 2021-04-27 02:04:35
  from 'D:\xampp\htdocs\php_05_obiektowo\app\calc_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60875513987bd0_75785453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12aaf75455d2e828484266ce65fa0e2ee43367ae' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_05_obiektowo\\app\\calc_view.html',
      1 => 1619481866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60875513987bd0_75785453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7725920316087551397c417_81106340', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13589725356087551397d234_65090918', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'footer'} */
class Block_7725920316087551397c417_81106340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7725920316087551397c417_81106340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_13589725356087551397d234_65090918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13589725356087551397d234_65090918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Kalkulator Rat</h2>

<div class="pure-g">

	<form  action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
		<legend>Kalkulator oprocentowania rat:</legend>
	<fieldset>
		<label for="id_x">Podaj kwotę pożyczki: </label>
		<input id="id_x" type="text" min = "0" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" />
		<label for="id_lata">Na ile lat: </label>
	
                <input id="id_lata" type="number" name = "lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
"></input>
            
                <label for="id_y">Oprocentowanie: </label>
                <input id="id_y" type="text" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
" /><br />
		
	</fieldset>
        <div style ="text-align: center;">
	<input type="submit" value="Oblicz ratę" class="pure-button pure-button-primary" />
        </div>
	</form>


<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

<?php if ((isset($_smarty_tpl->tpl_vars['msgs']->value->isMsgs))) {?>
	
		
		<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #ad172d; width:25em; margin:auto" class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMsgs, 'messages');
$_smarty_tpl->tpl_vars['messages']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['messages']->value) {
$_smarty_tpl->tpl_vars['messages']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['messages']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	{
<?php }?>



<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	
	<p class="res">
            <div style="display: inline-block; margin: auto; padding: 1em; border-radius: 2px; color: #fff ;background-color: #0078e7; position: relative;left: 50%;transform: translateX(-50%); ">
                Kwota miesięcznej raty: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

            </div>
	
	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
