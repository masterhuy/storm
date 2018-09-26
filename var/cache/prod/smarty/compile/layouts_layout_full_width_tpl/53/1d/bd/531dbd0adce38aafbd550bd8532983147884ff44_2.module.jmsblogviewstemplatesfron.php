<?php
/* Smarty version 3.1.32, created on 2018-09-26 00:52:05
  from 'module:jmsblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bab10752c6fd5_08672553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '531dbd0adce38aafbd550bd8532983147884ff44' => 
    array (
      0 => 'module:jmsblogviewstemplatesfron',
      1 => 1537937513,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:modules/jmsblog/views/templates/front/comment_default.tpl' => 1,
    'file:modules/jmsblog/views/templates/front/comment_facebook.tpl' => 1,
  ),
),false)) {
function content_5bab10752c6fd5_08672553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
if ($_smarty_tpl->tpl_vars['sidebar']->value == 'left') {?> 
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-left-column.tpl");
} elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'right') {?>
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-right-column.tpl");
} elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'no') {?>	
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-full-width.tpl");
}?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157875bab107526d232_60644419', "page_content");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "page_content"} */
class Block_157875bab107526d232_60644419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_157875bab107526d232_60644419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamppp\\htdocs\\jms_storm\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<div class="single-blog">
<div class="blog-post">
		<?php $_smarty_tpl->_assignInScope('catparams', array('category_id'=>$_smarty_tpl->tpl_vars['post']->value['category_id'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias']));?>	
		<?php if ($_smarty_tpl->tpl_vars['post']->value['link_video'] && $_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
			<div class="post-video">
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['link_video'], ENT_QUOTES, 'UTF-8');?>

			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['image'] && $_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
			<div class="post-thumb">
				<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image Blog','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
" />
			</div>
		<?php }?>
		<h1 class="title"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h1>
		<ul class="post-meta">
			<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_CATEGORY']) {?>
				<li>
					<span>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In:','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
 
						<a href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-category',$_smarty_tpl->tpl_vars['catparams']->value), ENT_QUOTES, 'UTF-8');?>
">
							<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['category_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

						</a>
					</span>
				</li>
			<?php }?>
			<li>
				<span><?php echo htmlspecialchars(smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8' )),"%B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</span>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_COMMENTS']) {?>
				<li>
					<span><?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['comments']->value), ENT_QUOTES, 'UTF-8');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' comments','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</span>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_VIEWS']) {?>
				<li>
					<span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['views'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'view(s)','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</span>
				</li>
			<?php }?>
		</ul>
		<div class="post-fulltext">
			<?php echo $_smarty_tpl->tpl_vars['post']->value['fulltext'];?>
	
		</div>
	</div>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_SOCIAL_SHARING']) {?>
<div class="social-sharing">

<?php echo '<script'; ?>
 type="text/javascript">var switchTo5x=true;<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="http://w.sharethis.com/button/buttons.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">stLight.options({publisher: "a6f949b3-864b-44c5-b0ec-4140186ad958", doNotHash: false, doNotCopy: false, hashAddressBar: false});<?php echo '</script'; ?>
>

<span class='st_sharethis_large' displayText='ShareThis'></span>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_FACEBOOK']) {?>
<span class='st_facebook_large' displayText='Facebook'></span>
<?php }
if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_TWITTER']) {?>
<span class='st_twitter_large' displayText='Tweet'></span>
<?php }
if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_GOOGLEPLUS']) {?>
<span class='st_googleplus_large' displayText='Google +'></span>
<?php }
if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_LINKEDIN']) {?>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<?php }
if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_PINTEREST']) {?>
<span class='st_pinterest_large' displayText='Pinterest'></span>
<?php }
if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_EMAIL']) {?>
<span class='st_email_large' displayText='Email'></span>
<?php }?>
</div>
<?php }?>
</div>
	<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_COMMENT_ENABLE']) {?>	
		<div id="comments">
			<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_FACEBOOK_COMMENT'] == 0) {?>
				<?php $_smarty_tpl->_subTemplateRender("file:modules/jmsblog/views/templates/front/comment_default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>		
			<?php } else { ?>
				<?php $_smarty_tpl->_subTemplateRender("file:modules/jmsblog/views/templates/front/comment_facebook.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>		
			<?php }?>
		</div>
	<?php }
}
}
/* {/block "page_content"} */
}
