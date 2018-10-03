<?php
/* Smarty version 3.1.32, created on 2018-10-03 03:06:26
  from 'module:pscurrencyselectorpscurre' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb46a726d70d3_74044365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b97756c07f8c7dd53da6530f78f67ddd242f77c9' => 
    array (
      0 => 'module:pscurrencyselectorpscurre',
      1 => 1538550384,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb46a726d70d3_74044365 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_currency_selector" class="btn-group compact-hidden currency-info type1">
   	<a href="#"  class="btn-xs dropdown-toggle" data-toggle="dropdown">
		<span class="btn-name"><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</b> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
</span>
	</a>
	<ul class="dropdown-menu hidden-sm-down" aria-labelledby="currency-selector-label">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
			<li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
			  	<a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item">
             		<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</b> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>

         		</a>
			</li>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
	
<div id="_desktop_currency_selector" class="btn-group compact-hidden currency-info type2">
	<span class="btn-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Currency:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
	<ul class="curentry-list">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
			<li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
			  	<a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</a>
			</li>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>

<div id="_desktop_currency_selector" class="btn-group compact-hidden currency-info type3">
	<span class="btn-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>	
	<ul>
      	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
	        <li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
	          	<a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</a>
	        </li>
      	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>

<?php }
}
