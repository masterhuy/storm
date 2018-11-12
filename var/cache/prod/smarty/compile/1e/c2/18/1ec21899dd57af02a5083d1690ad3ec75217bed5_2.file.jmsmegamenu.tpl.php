<?php
/* Smarty version 3.1.32, created on 2018-11-12 05:26:19
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\modules\jmsmegamenu\views\templates\hook\jmsmegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be9554b816e84_44087624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ec21899dd57af02a5083d1690ad3ec75217bed5' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\modules\\jmsmegamenu\\views\\templates\\hook\\jmsmegamenu.tpl',
      1 => 1537341629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be9554b816e84_44087624 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="jms-megamenu-wrap">
	<a id="open-button" class="open-button hidden-lg hidden-md" href="#"></a>
	<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu_html']->value,'' ));?>

</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var jmmm_event = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JMSMM_MOUSEEVENT']->value, ENT_QUOTES, 'UTF-8');?>
';
	var jmmm_duration = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JMSMM_DURATION']->value, ENT_QUOTES, 'UTF-8');?>
;	
<?php echo '</script'; ?>
><?php }
}
