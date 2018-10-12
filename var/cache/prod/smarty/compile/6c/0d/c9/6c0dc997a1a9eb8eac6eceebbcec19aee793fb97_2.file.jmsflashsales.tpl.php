<?php
/* Smarty version 3.1.32, created on 2018-10-12 04:43:38
  from 'D:\xamppp\htdocs\jms_storm\modules\jmsflashsales\views\templates\hook\jmsflashsales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc05eba32f2d9_22828057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c0dc997a1a9eb8eac6eceebbcec19aee793fb97' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\modules\\jmsflashsales\\views\\templates\\hook\\jmsflashsales.tpl',
      1 => 1537260447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc05eba32f2d9_22828057 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
jQuery(function ($) {
    "use strict";
	var productCarousel = $(".flashsales-carousel");
  });
<?php echo '</script'; ?>
>


<div class="jmsflashsales">
	<div class="flashsales-countdown"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['expiretime']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
	<div class="flashsales-carousel">	
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>				
		Product Code Here	
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div><?php }
}
