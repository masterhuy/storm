<?php
/* Smarty version 3.1.32, created on 2018-09-18 22:28:48
  from 'D:\xamppp\htdocs\jms_storm\admin063ihraim\themes\default\template\controllers\currencies\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba1b460233728_15437559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b99e546eb0fef6465a8f2313d8cf39c5c3a9dec' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\admin063ihraim\\themes\\default\\template\\controllers\\currencies\\content.tpl',
      1 => 1532446063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/currencies/status.tpl' => 1,
    'file:controllers/currencies/conversion_rate.tpl' => 1,
  ),
),false)) {
function content_5ba1b460233728_15437559 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-10 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
	<div class="col-lg-2 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['isForm']->value)) {?>
			<?php $_smarty_tpl->_subTemplateRender('file:controllers/currencies/status.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_subTemplateRender('file:controllers/currencies/conversion_rate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php }?>
	</div>
</div>
<?php }
}
