<?php
/* Smarty version 3.1.32, created on 2018-11-02 04:20:11
  from 'D:\xamppp\htdocs\jms_storm\modules\jmsadvsearch\views\templates\hook\ajax_search_result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bdc08bb5d83e8_78667733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a843d340c2af577891fc58b8eca05289339c72c8' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\modules\\jmsadvsearch\\views\\templates\\hook\\ajax_search_result.tpl',
      1 => 1537260447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdc08bb5d83e8_78667733 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="result_div">
<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
<div class="results">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
		<div class="item">
		<?php if ($_smarty_tpl->tpl_vars['show_image']->value) {?>
			<div class="left-img">
				<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" class="product_image">
				<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" />
				</a>
			</div>
		<?php }?>
			<div class="right-info">
				<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' ));?>
">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],35,'...' ));?>

				</a>
				<?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
				<p class="product-description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['desc'],$_smarty_tpl->tpl_vars['count_description']->value,'...' ));?>
</p>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
					<span class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
				<?php }?>
			</div>
		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php } else {
echo $_smarty_tpl->tpl_vars['no_text']->value;?>

<?php }?>
</div>
<?php }
}
