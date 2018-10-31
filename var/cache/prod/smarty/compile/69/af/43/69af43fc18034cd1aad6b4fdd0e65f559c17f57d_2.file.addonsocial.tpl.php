<?php
/* Smarty version 3.1.32, created on 2018-10-31 06:27:00
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\modules\jmspagebuilder\views\templates\hook\addonsocial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd983741430c2_76565428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69af43fc18034cd1aad6b4fdd0e65f559c17f57d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\modules\\jmspagebuilder\\views\\templates\\hook\\addonsocial.tpl',
      1 => 1538120373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd983741430c2_76565428 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="social_block">
	<ul class="find-us">
       <?php if ($_smarty_tpl->tpl_vars['facebook_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facebook_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="facebook"><span class="fa fa-facebook"></span></a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['twitter_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['twitter_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="twitter"><span class="fa fa-twitter"></span></a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['linkedin_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkedin_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="linkedin"><span class="fa fa-linkedin"></span></a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['youtube_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['youtube_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="youtube"><span class="fa fa-youtube"></span></a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['google_plus_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['google_plus_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="gplus"><span class="fa fa-google-plus"></span></a></li><?php }?>
		   <?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pinterest_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="pinterest"><span class="fa fa-pinterest"></span></a></li><?php }?>            
		   <?php if ($_smarty_tpl->tpl_vars['instagram_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['instagram_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="instagram"><span class="fa fa-instagram"></span></a></li><?php }?>
  </ul>
</div>
<?php }
}
