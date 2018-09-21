<?php
/* Smarty version 3.1.32, created on 2018-09-19 23:44:27
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\catalog\_partials\product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba3179ba56b73_58761440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd9cf3501b05ad39b6abc83af8d921444add2580' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\catalog\\_partials\\product-add-to-cart.tpl',
      1 => 1537323326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba3179ba56b73_58761440 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-add-to-cart">
  <?php if (isset($_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10875ba3179ba2fa78_39787823', 'product_quantity');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149335ba3179ba56b75_24660638', 'product_minimal_quantity');
?>

  <?php }?>
</div>
<?php }
/* {block 'product_availability'} */
class Block_125565ba3179ba2fa77_51955581 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <span id="product-availability">
					<?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
					  <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
						<i class="material-icons product-available">&#xE5CA;</i>
					  <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
						<i class="material-icons product-last-items">&#xE002;</i>
					  <?php } else { ?>
						<i class="material-icons product-unavailable">&#xE14B;</i>
					  <?php }?>
					  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

					<?php }?>
				  </span>
				<?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_quantity'} */
class Block_10875ba3179ba2fa78_39787823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_10875ba3179ba2fa78_39787823',
  ),
  'product_availability' => 
  array (
    0 => 'Block_125565ba3179ba2fa77_51955581',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="product-quantity">
			<div class="qty">
			  <input
				type="text"
				name="qty"
				id="quantity_wanted"
				value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
				class="input-group"
				min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
			  />
			</div>
        <div class="add">
			
				<button class="btn-effect add-to-cart btn-default btn-active" data-button-action="add-to-cart" type="submit" <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>disabled<?php }?>>
					  <span class="text-addcart"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
	</span>		
					  <span class="text-outofstock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sold out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				</button>
			
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125565ba3179ba2fa77_51955581', 'product_availability', $this->tplIndex);
?>

			
        </div>
      </div>
      <div class="clearfix"></div>
    <?php
}
}
/* {/block 'product_quantity'} */
/* {block 'product_minimal_quantity'} */
class Block_149335ba3179ba56b75_24660638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_minimal_quantity' => 
  array (
    0 => 'Block_149335ba3179ba56b75_24660638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p class="product-minimal-quantity">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > 1) {?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl ) );?>

        <?php }?>
      </p>
    <?php
}
}
/* {/block 'product_minimal_quantity'} */
}
