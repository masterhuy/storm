<?php
/* Smarty version 3.1.32, created on 2018-11-01 21:55:58
  from 'D:\xamppp\htdocs\jms_storm\modules\jmsblog\views\templates\front\comment_default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bdbaeae8a8b06_76449037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b925c4a21fedbce19bf9e9883a84440aaf7d7001' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\modules\\jmsblog\\views\\templates\\front\\comment_default.tpl',
      1 => 1537260447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdbaeae8a8b06_76449037 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msg']->value == 1) {?><div class="success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment submited','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
 ! <?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_AUTO_APPROVE_COMMENT'] == 0) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please waiting approve from Admin','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
.<?php }?></div><?php }
if (count($_smarty_tpl->tpl_vars['cerrors']->value) > 0) {?>
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cerrors']->value, 'cerror');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cerror']->value) {
?>
		<li class="error"><?php echo $_smarty_tpl->tpl_vars['cerror']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
	</ul>
<?php }?>
<div id="accordion" class="panel-group">
	<div class="panel panel-default">
		<div class="comment-heading clearfix">
			<h5><a data-toggle="collapse" data-parent="#accordion" href="#post-comments"><?php echo count($_smarty_tpl->tpl_vars['comments']->value);?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</a></h5>
		</div>		
		<div id="post-comments" class="panel-collapse collapse">
		<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['comment']->value) {
?>
				<div class="post-comment clearfix">
					<div class="post-comment-info">
					<img class="attachment-widget wp-post-image img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
user.png" />
					<h6><?php echo $_smarty_tpl->tpl_vars['comment']->value['customer_name'];?>
</h6>
					<span class="customer_site"><?php echo $_smarty_tpl->tpl_vars['comment']->value['customer_site'];?>
</span>
					<span class="time_add"><?php echo $_smarty_tpl->tpl_vars['comment']->value['time_add'];?>
</small>
					</div>
					<p class="post-comment-content"><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>
</p>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
		<?php }?>
		</div>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_ALLOW_GUEST_COMMENT'] || (!$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_ALLOW_GUEST_COMMENT'] && $_smarty_tpl->tpl_vars['logged']->value)) {?>	
<div class="commentForm">
	<form id="commentForm" enctype="multipart/form-data" method="post" action="index.php?fc=module&module=jmsblog&controller=post&post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
&action=submitComment">
		<div class="row">
			<div class="col-sm-12">
				<h4 class="heading">Leave a Comment</h4>
				<p class="h-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address will not be published','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
.</p>
			</div>
		</div>	
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="comment_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Name','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label>
					<input id="customer_name" class="form-control" name="customer_name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
" required />
				</div>	
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="comment_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Email','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label>
					<input id="comment_title" class="form-control" name="email" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['email'], ENT_QUOTES, 'UTF-8');?>
" required />
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="comment_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Website','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</label>
			<input id="customer_site" class="form-control" name="customer_site" type="text" value=""/></br>
		</div>
		<div class="form-group">
			<label for="content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Comment','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label>
			<textarea id="comment" class="form-control" name="comment" rows="8" required></textarea>
		</div>
		<div id="new_comment_form_footer">
			<input id="item_id_comment_send" name="post_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" />
			<input id="item_id_comment_reply" name="post_id_comment_reply" type="hidden" value="" />
			<p class="">
				<button id="submitComment" class="btn btn-default" name="submitComment" type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit Comment','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</button>
			</p>
		</div>
	</form>
	<?php echo '<script'; ?>
>
	$("#commentForm").validate({
	  rules: {		
		customer_name: "required",		
		email: {
		  required: true,
		  email: true
		}
	  }
	});
	<?php echo '</script'; ?>
>
</div>
<?php }
if (!$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_ALLOW_GUEST_COMMENT'] && !$_smarty_tpl->tpl_vars['logged']->value) {?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please Login to comment','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>

<?php }
}
}
