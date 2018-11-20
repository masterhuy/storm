<?php
/* Smarty version 3.1.32, created on 2018-11-20 05:26:29
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\modules\jmspagebuilder\views\templates\hook\addonsocial_h7.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf3e155d3c5e3_71781674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f730b4e98db7c60a18591e8bf4e421bb5d93252d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\modules\\jmspagebuilder\\views\\templates\\hook\\addonsocial_h7.tpl',
      1 => 1538733808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf3e155d3c5e3_71781674 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="social_block">
	<ul class="find-us">
       <?php if ($_smarty_tpl->tpl_vars['facebook_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facebook_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="facebook">Facebook</a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['twitter_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['twitter_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="twitter">Twitter</a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['linkedin_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkedin_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="linkedin">Linkedin</a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['youtube_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['youtube_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="youtube">Youtube</a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['google_plus_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['google_plus_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="gplus">Google-plus</a></li><?php }?>
	   <?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pinterest_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="pinterest">Pinterest</a></li><?php }?>            
	   <?php if ($_smarty_tpl->tpl_vars['instagram_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['instagram_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="instagram">Instagram</a></li><?php }?>
  </ul>
</div>
<?php }
}
