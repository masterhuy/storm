<?php
/* Smarty version 3.1.32, created on 2018-11-20 23:56:12
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\modules\jmspagebuilder\views\templates\hook\addonbanner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf4e56c2d1983_66781052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07eed80213cf94065c5298a38fc89791d3167e3c' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\modules\\jmspagebuilder\\views\\templates\\hook\\addonbanner.tpl',
      1 => 1537323325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf4e56c2d1983_66781052 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="jms-banner<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
<?php if ($_smarty_tpl->tpl_vars['banner']->value) {?>
	
		<a href="<?php if ($_smarty_tpl->tpl_vars['banner_link']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner_link']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"<?php if ($_smarty_tpl->tpl_vars['target']->value == 'new window') {?> target="_blank"<?php }?>>
			<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alt_text']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
		</a>

<?php }
if ($_smarty_tpl->tpl_vars['html_content']->value) {
echo $_smarty_tpl->tpl_vars['html_content']->value;?>

<?php }?>
</div>	
<?php }
}
