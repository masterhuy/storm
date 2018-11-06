<?php
/* Smarty version 3.1.32, created on 2018-11-06 05:26:52
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\modules\jmspagebuilder\views\templates\hook\addoninstagram_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be16c6cb3c8b9_79519243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad2495a56a8c3b77debcec7188630c2410dcf3cc' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\modules\\jmspagebuilder\\views\\templates\\hook\\addoninstagram_footer.tpl',
      1 => 1539764630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be16c6cb3c8b9_79519243 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addon-title">
	<h3>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'INSTAGRAM','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>

	</h3>
</div>
<div class="instagram-images">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['insta_images']->value, 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
		<a class="grouped_elements" data-fancybox-group="gallery" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['img']->value['link'];?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['url'];?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instagram Image','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>
"/>
		</a>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
