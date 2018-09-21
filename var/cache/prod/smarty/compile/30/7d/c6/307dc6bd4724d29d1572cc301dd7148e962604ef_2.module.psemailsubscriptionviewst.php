<?php
/* Smarty version 3.1.32, created on 2018-09-21 06:21:41
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba4c635ca8dc8_47003561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1537525297,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba4c635ca8dc8_47003561 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block Newsletter module-->
<div id="newsletter_block_left" class="block">	
	<div class="block_content">
		<div class="textnews_h1 addon-title">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter Signup','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</h3>
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up our Newsletter for Exclusive Discount codes','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
		</div>
		<div class="news_content">
        	<div  class="block_content block_c_right">
				<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
					<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['msg']->value) && $_smarty_tpl->tpl_vars['msg']->value) {?> <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>form-error<?php } else { ?>form-ok<?php }
}?>" >
						<input class="inputNew form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email here...','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
" />
						<button type="submit" name="submitNewsletter" class="newsletter-btn buttonh1 btn-active">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up','d'=>'Shop.Theme'),$_smarty_tpl ) );?>

						</button>
						<input type="hidden" name="action" value="0" />
					</div>
				</form>
			</div>
       </div>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
    <div class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

    </div>
<?php }?>



<?php }
}
