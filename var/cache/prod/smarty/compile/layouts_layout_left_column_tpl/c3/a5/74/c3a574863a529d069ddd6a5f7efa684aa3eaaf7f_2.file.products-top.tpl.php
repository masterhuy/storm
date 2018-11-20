<?php
/* Smarty version 3.1.32, created on 2018-11-19 23:34:30
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\catalog\_partials\products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf38ed60eb209_29076671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3a574863a529d069ddd6a5f7efa684aa3eaaf7f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\catalog\\_partials\\products-top.tpl',
      1 => 1540454228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_5bf38ed60eb209_29076671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="filters-panel">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 view-mode left clearfix">
			<div class="button">
				<a class="view-grid <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 1) {?>active<?php }?>" href="#">
					<i class="storm-four-dots"></i>
				</a> 
				<a class="view-list <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 0) {?>active<?php }?>" href="#">
					<i class="storm-text"></i>
				</a>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 right">
			<div class="view-mode ">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19775bf38ed60eb202_13719339', 'sort_by');
?>

			</div>
		</div>
	</div>
</div>
<?php }
/* {block 'sort_by'} */
class Block_19775bf38ed60eb202_13719339 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_19775bf38ed60eb202_13719339',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
			<?php
}
}
/* {/block 'sort_by'} */
}
