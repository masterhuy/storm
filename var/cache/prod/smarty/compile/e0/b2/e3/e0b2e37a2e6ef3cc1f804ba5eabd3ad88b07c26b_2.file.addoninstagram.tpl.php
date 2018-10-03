<?php
/* Smarty version 3.1.32, created on 2018-10-02 23:55:13
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\modules\jmspagebuilder\views\templates\hook\addoninstagram.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb43da188c213_56159726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0b2e37a2e6ef3cc1f804ba5eabd3ad88b07c26b' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\modules\\jmspagebuilder\\views\\templates\\hook\\addoninstagram.tpl',
      1 => 1538538909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb43da188c213_56159726 (Smarty_Internal_Template $_smarty_tpl) {
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
