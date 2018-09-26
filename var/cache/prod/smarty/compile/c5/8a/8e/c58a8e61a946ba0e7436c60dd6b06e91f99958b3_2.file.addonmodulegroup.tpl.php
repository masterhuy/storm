<?php
/* Smarty version 3.1.32, created on 2018-09-24 04:42:47
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\modules\jmspagebuilder\views\templates\hook\addonmodulegroup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba8a387f30bf9_11736850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c58a8e61a946ba0e7436c60dd6b06e91f99958b3' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\modules\\jmspagebuilder\\views\\templates\\hook\\addonmodulegroup.tpl',
      1 => 1537323325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba8a387f30bf9_11736850 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="btn-group module-group-box">
<a title="Search" data-toggle="dropdown" class="dropdown-toggle" href="#">
<?php if ($_smarty_tpl->tpl_vars['icon_class']->value) {?>
<i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class']->value, ENT_QUOTES, 'UTF-8');?>
"></i>
<?php }
if ($_smarty_tpl->tpl_vars['addon_title']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

<?php }
if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_desc']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
<?php }?>
</a>
<div role="menu" class="dropdown-menu">
	<?php if ($_smarty_tpl->tpl_vars['module1_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['module1_content']->value;?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['module2_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['module2_content']->value;?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['module3_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['module3_content']->value;?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['module4_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['module4_content']->value;?>

	<?php }?>
</div>
</div><?php }
}
