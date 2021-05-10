<?php
/* Smarty version 3.1.39, created on 2021-04-25 23:48:00
  from 'D:\xampp\htdocs\php_04_szablonowanie_smart\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6085e3909520d0_06959832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b48966199ab3d88b805b1e98dabbd329e7dc63fa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_04_szablonowanie_smart\\app\\calc.tpl',
      1 => 1619387279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6085e3909520d0_06959832 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3450025466085e390941824_65334069', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21047213346085e390942393_73727510', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_3450025466085e390941824_65334069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3450025466085e390941824_65334069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_21047213346085e390942393_73727510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21047213346085e390942393_73727510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Kalkulator Rat</h2>

<div class="pure-g">

	<form  action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
		<legend>Kalkulator oprocentowania rat:</legend>
	<fieldset>
		<label for="id_x">Podaj kwotę pożyczki: </label>
		<input id="id_x" type="text" min = "0" name="x" value="<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
" />
		<label for="id_lata">Na ile lat: </label>
	
                <input id="id_lata" type="number" name = "lata" value="<?php echo $_smarty_tpl->tpl_vars['lata']->value;?>
"></input>
            
                <label for="id_y">Oprocentowanie: </label>
                <input id="id_y" type="text" name="y" value="<?php echo $_smarty_tpl->tpl_vars['y']->value;?>
" /><br />
		
	</fieldset>
        <div style ="text-align: center;">
	<input type="submit" value="Oblicz ratę" class="pure-button pure-button-primary" />
        </div>
	</form>


<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		
		<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #ad172d; width:25em; margin:auto" class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>



<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	
	<p class="res">
            <div style="display: inline-block; margin: auto; padding: 1em; border-radius: 2px; color: #fff ;background-color: #0078e7; position: relative;left: 50%;transform: translateX(-50%); ">
                Kwota miesięcznej raty: <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

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
