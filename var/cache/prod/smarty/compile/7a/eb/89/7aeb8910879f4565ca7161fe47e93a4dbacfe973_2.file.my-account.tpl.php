<?php
/* Smarty version 3.1.32, created on 2018-10-26 06:24:30
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\modules\jmswishlist\views\templates\hook\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd2eb5eb5e438_13977626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7aeb8910879f4565ca7161fe47e93a4dbacfe973' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\modules\\jmswishlist\\views\\templates\\hook\\my-account.tpl',
      1 => 1539080294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd2eb5eb5e438_13977626 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- MODULE WishList -->
<a class=" wishlist_top lnk_wishlist col-lg-4 col-md-6 col-sm-6 col-xs-12" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('jmswishlist','mywishlist',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
">
	<i class="storm-heart"></i>
</a>
<!-- END : MODULE WishList --><?php }
}
