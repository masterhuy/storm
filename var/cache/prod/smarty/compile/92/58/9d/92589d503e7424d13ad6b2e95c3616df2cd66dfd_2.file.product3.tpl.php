<?php
/* Smarty version 3.1.32, created on 2018-11-05 05:01:56
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\catalog\_partials\miniatures\product3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be01514735191_30517295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92589d503e7424d13ad6b2e95c3616df2cd66dfd' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\catalog\\_partials\\miniatures\\product3.tpl',
      1 => 1538722724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be01514735191_30517295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-miniature js-product-miniature product-box" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
	<div class="preview flexbox">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_261085be0151470e084_59134956', 'product_thumbnail');
?>
				
	</div>

    <div class="product-info">
	    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7305be01514729614_29707286', 'product_name');
?>

		    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212595be0151472d499_88724154', 'product_price_and_shipping');
?>

	   
    </div>
   
</div><?php }
/* {block 'product_flags'} */
class Block_257335be0151471da97_12929821 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value['label'] == 'New') {?>
						<span class="label label-new"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value['label'] == 'On sale!') {?>
						<span class="label label-sale"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sale','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
						<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
	                	<span class="label label-discount discount-percentage discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
						<?php }?>
					<?php }?>
			   <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_thumbnail'} */
class Block_261085be0151470e084_59134956 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_261085be0151470e084_59134956',
  ),
  'product_flags' => 
  array (
    0 => 'Block_257335be0151471da97_12929821',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product-image <?php if (isset($_smarty_tpl->tpl_vars['jpb_phover']->value) && $_smarty_tpl->tpl_vars['jpb_phover']->value == 'image_swap') {?>image_swap<?php } else { ?>image_blur<?php }?>">
				<img class="img-responsive product-img1 replace-2x"
				  src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
				  alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
				  data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
				/>
				<?php if (isset($_smarty_tpl->tpl_vars['jpb_phover']->value) && $_smarty_tpl->tpl_vars['jpb_phover']->value == 'image_swap' && $_smarty_tpl->tpl_vars['product']->value['images'][1]) {?>
					<img class="img-responsive product-img2 replace-2x"
					  src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
					  alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['legend'], ENT_QUOTES, 'UTF-8');?>
"
					  data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
					/>
				<?php }?>
		  	</a>
		 	<div class="block-label">
			  	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_257335be0151471da97_12929821', 'product_flags', $this->tplIndex);
?>
	
			</div>
		<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_7305be01514729614_29707286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_7305be01514729614_29707286',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'html' )), ENT_QUOTES, 'UTF-8');?>
" class="product-name"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
	    <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_212595be0151472d499_88724154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_212595be0151472d499_88724154',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
		          <div class="content_price">
		          	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

		            <span class="price new"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
		            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
		              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

		              <span class="old price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
		            <?php }?>
		            

		            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


		            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

		          </div>
		        <?php }?>
		    <?php
}
}
/* {/block 'product_price_and_shipping'} */
}
