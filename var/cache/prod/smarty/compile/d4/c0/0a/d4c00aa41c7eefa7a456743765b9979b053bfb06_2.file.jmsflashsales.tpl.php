<?php
/* Smarty version 3.1.32, created on 2018-10-12 05:19:23
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\modules\jmsflashsales\views\templates\hook\jmsflashsales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc0671b7825d2_95717306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4c00aa41c7eefa7a456743765b9979b053bfb06' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\modules\\jmsflashsales\\views\\templates\\hook\\jmsflashsales.tpl',
      1 => 1539335960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product_flashdeal.tpl' => 1,
  ),
),false)) {
function content_5bc0671b7825d2_95717306 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="jmsflashsales">
	<div class="product_box">
		<div class="title">
			<div class="addon-title col-lg-3">
				<h3>Daily deals</h3>
			</div>
			<div class="flashsales-countdown col-lg-6"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['expiretime']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
			<div class="col-lg-3"></div>
		</div>
		<div class="flashsales-carousel">	
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>	
				<div class="item ajax_block_product">		
					<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product_flashdeal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
</div><?php }
}
