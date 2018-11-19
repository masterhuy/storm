<?php
/* Smarty version 3.1.32, created on 2018-11-19 05:01:13
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\modules\jmspagebuilder\views\templates\hook\addonfeature_type2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf289e96cb367_42212222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43f20268e34affa83a1b0b2fefa6038797151a83' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\modules\\jmspagebuilder\\views\\templates\\hook\\addonfeature_type2.tpl',
      1 => 1541059527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf289e96cb367_42212222 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="feature-box<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->tpl_vars['text_align']->value) {?>style="text-align:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['text_align']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;"<?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['image_type']->value == 'image' && $_smarty_tpl->tpl_vars['image']->value) {?>	
		<div class="image"><img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alt_text']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />	</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['icon_class']->value) {?>
		<div class="feature-img">
			<i class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['icon_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i>
		</div>
	<?php }?>
	<div class="include_content_s">
		<?php if ($_smarty_tpl->tpl_vars['title']->value) {?>	
			<h4><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['html_content']->value) {?>
			<?php echo $_smarty_tpl->tpl_vars['html_content']->value;?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['button_text']->value) {?>
			<a class="btn-default active btn-shopnow"  href="<?php if ($_smarty_tpl->tpl_vars['button_link']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button_link']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"<?php if ($_smarty_tpl->tpl_vars['target']->value == 'new window') {?> target="_blank"
			<?php }?>><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button_text']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
		<?php }?>
	</div>
</div>	
<?php }
}
