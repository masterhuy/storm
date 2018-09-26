<?php
/* Smarty version 3.1.32, created on 2018-09-25 05:43:09
  from 'D:\xamppp\htdocs\jms_storm\modules\jmspagebuilder\views\templates\hook\addonbannerproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5baa032db126e3_49752569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce72c30bb4387c525598205e555e0bbbba2107c8' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\modules\\jmspagebuilder\\views\\templates\\hook\\addonbannerproduct.tpl',
      1 => 1537260447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5baa032db126e3_49752569 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var bp_items = <?php if ($_smarty_tpl->tpl_vars['cols']->value) {
echo $_smarty_tpl->tpl_vars['cols']->value;
} else { ?>4<?php }?>;
var bp_itemsDesktop = <?php if ($_smarty_tpl->tpl_vars['cols']->value) {
echo $_smarty_tpl->tpl_vars['cols']->value;
} else { ?>4<?php }?>;
var bp_itemsDesktopSmall = <?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo $_smarty_tpl->tpl_vars['cols_md']->value;
} else { ?>3<?php }?>;
var bp_itemsTablet = <?php if ($_smarty_tpl->tpl_vars['cols_sm']->value) {
echo $_smarty_tpl->tpl_vars['cols_sm']->value;
} else { ?>2<?php }?>;
var bp_itemsMobile = <?php if ($_smarty_tpl->tpl_vars['cols_xs']->value) {
echo $_smarty_tpl->tpl_vars['cols_xs']->value;
} else { ?>1<?php }?>;
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
<?php }?>	
<?php ob_start();
echo $_smarty_tpl->tpl_vars['addon_tpl_dir']->value;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('box_template', $_prefixVariable1."productbox.tpl");
if ($_smarty_tpl->tpl_vars['banner_img1']->value) {?>
<div class="banner-1 col-lg-6 col-md-6 col-xs-12">
	<img src="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;
echo $_smarty_tpl->tpl_vars['banner_img1']->value;?>
" alt="" class="img-responsive" />
	<div class="banner-content">
	<?php if ($_smarty_tpl->tpl_vars['banner_html1']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['banner_html1']->value;?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['banner_link1']->value) {?>
		<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['banner_link1']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SHOP NOW','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>
! <span class="fa fa-long-arrow-right"></span></a>
	<?php }?>
	</div>
</div>
<?php }?>
<div class="product-box col-lg-6 col-md-6 col-xs-12">
	<div class="banner-product-carousel">	
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_slides']->value, 'products_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->value) {
?>
			<div class="item">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_slide']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
					<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>	
	<?php if ($_smarty_tpl->tpl_vars['banner_img2']->value) {?>
	<div class="banner-2">	
		<img src="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;
echo $_smarty_tpl->tpl_vars['banner_img2']->value;?>
" alt="" class="img-responsive" />
		<div class="banner-content">
			<?php if ($_smarty_tpl->tpl_vars['banner_html2']->value) {?>
				<?php echo $_smarty_tpl->tpl_vars['banner_html2']->value;?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['banner_link2']->value) {?>
			<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['banner_link2']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SHOP NOW','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>
! <span class="fa fa-long-arrow-right"></span></a>
			<?php }?>
		</div>	
	</div>	
	<?php }?>	
</div><?php }
}
