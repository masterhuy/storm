<?php
/* Smarty version 3.1.32, created on 2018-10-31 06:27:00
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\modules\jmsajaxsearch\views\templates\hook\jmsajaxsearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd983749d67d4_37925190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81e1d46057f39725d126cac9b0ce7ccc34ad5157' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\modules\\jmsajaxsearch\\views\\templates\\hook\\jmsajaxsearch.tpl',
      1 => 1539921201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd983749d67d4_37925190 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['jpb_homepage']->value == 6 || $_smarty_tpl->tpl_vars['jpb_homepage']->value == 8 || $_smarty_tpl->tpl_vars['jpb_homepage']->value == 11 || $_smarty_tpl->tpl_vars['jpb_homepage']->value == 19 || $_smarty_tpl->tpl_vars['jpb_homepage']->value == 20) {?>
<div class="btn-group compact-hidden jms_ajax_search" id="jms_ajax_search">
	<a href="#" class="btn-xs icon_search" title="Search">
		<span class="button-search storm-zoom"></span>
	</a>
	<div class="search-box">
		<div class="close-search">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="searchbox">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input type="text" id="ajax_search" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search...','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl ) );?>
" class="form-control ajax_search"  />		
		 	<button type="submit" name="submit_search" class="button-search storm-zoom"></button>
		</form>
		<div id="search_result"></div>
	</div>	
</div>
<?php } else { ?>
<div class="btn-group compact-hidden jms_ajax_search" id="jms_ajax_search">
	<div class="search-box">
		<form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="searchbox">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input type="text" id="ajax_search" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search...','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl ) );?>
" class="form-control ajax_search" />		
			<button type="submit" name="submit_search" class="button-search storm-zoom"></button>
		</form>
		<div id="search_result"></div>
	</div>	
</div>
<?php }?>

<?php }
}
