<?php
/* Smarty version 3.1.32, created on 2018-11-05 23:02:11
  from 'D:\xamppp\htdocs\jms_storm\modules\jmspagebuilder\views\templates\hook\addonvideo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be11243464e26_78057155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b666023ac2ad183d8642eb6b34f0edf7683901c4' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\modules\\jmspagebuilder\\views\\templates\\hook\\addonvideo.tpl',
      1 => 1537260447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be11243464e26_78057155 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
<?php }?>
<div class="jms-addon jms-video">
<?php if ($_smarty_tpl->tpl_vars['src']->value) {?>
    <iframe width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
" height="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['src']->value;?>
" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
<?php }?>
</div><?php }
}
