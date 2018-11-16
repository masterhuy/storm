<?php
/* Smarty version 3.1.32, created on 2018-11-16 05:14:53
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\modules\jmswishlist\jmswishlist_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bee989dc916b7_94324958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f84282434fa2f9a2e4a09b9eb781acbf45df9e97' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\modules\\jmswishlist\\jmswishlist_top.tpl',
      1 => 1537323325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bee989dc916b7_94324958 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var loggin_required= '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loggin_required']->value, ENT_QUOTES, 'UTF-8');?>
';
    var added_to_wishlist= '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['added_to_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
';
    var mywishlist_url= '<?php echo $_smarty_tpl->tpl_vars['mywishlist_url']->value;?>
';
<?php echo '</script'; ?>
>
<?php }
}
