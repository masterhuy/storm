<?php
/* Smarty version 3.1.32, created on 2018-11-01 05:53:32
  from 'D:\xamppp\htdocs\jms_storm\modules\jmsblog\views\templates\admin\jmsblog_comment\filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bdacd1ccd5908_97273139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e290b45a01366e0cdb367891f8ade4fb1e0fa88' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\modules\\jmsblog\\views\\templates\\admin\\jmsblog_comment\\filter.tpl',
      1 => 1537260447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdacd1ccd5908_97273139 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
$( document ).ready(function() {
	$( "#filter_post_id" ).change(function() {
		filterchange();
	});
	$( "#filter_cstate" ).change(function() {
		filterchange();
	});
});
function filterchange(){
	var post_id = $( "#filter_post_id" ).val();
	var state = $( "#filter_cstate" ).val();
	var url = "<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogComment');?>
&configure=jmsblog&filter_post_id=" + post_id + "&filter_cstate=" + state;
	url = url.replace('&amp;','&');
	window.location = url;
}
<?php echo '</script'; ?>
>
<div class="jms-blog-filter">
	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Post Filter','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</span>
	<select id="filter_post_id">
		<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Post','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</option>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
		<?php $_smarty_tpl->_assignInScope('category_index', ((string)$_smarty_tpl->tpl_vars['category']->value['category_id']));?>		
		<optgroup label="<?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->tpl_vars['category_index']->value], 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['post']->value['post_id'] == $_smarty_tpl->tpl_vars['filter_post_id']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</option>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</optgroup>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</select>
	
	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State Filter','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</span>
	<select id="filter_cstate">
		<option <?php if ($_smarty_tpl->tpl_vars['filter_cstate']->value == '-1') {?>selected<?php }?> value="-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Status','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</option>		
		<option <?php if ($_smarty_tpl->tpl_vars['filter_cstate']->value == '1') {?>selected<?php }?> value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</option>		
		<option <?php if ($_smarty_tpl->tpl_vars['filter_cstate']->value == '0') {?>selected<?php }?> value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disabled','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</option>
		<option <?php if ($_smarty_tpl->tpl_vars['filter_cstate']->value == '-2') {?>selected<?php }?> value="-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Waiting for approve','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</option>		
	</select>
	
</div><?php }
}
