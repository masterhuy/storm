<?php
/* Smarty version 3.1.32, created on 2018-10-29 06:18:58
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\catalog\_partials\quickview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd6de92db6b77_59962262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e8807e9678790777fb36020cbd722e918c4ce0d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\catalog\\_partials\\quickview.tpl',
      1 => 1537323326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
  ),
),false)) {
function content_5bd6de92db6b77_59962262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="quickview-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" class="modal fade quickview" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog cover_product1 container" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
      <div class="row">
        <div class="col-md-6 col-sm-6 hidden-xs-down left">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153285bd6de92d78367_35511717', 'product_cover_tumbnails');
?>

        </div>
		
        <div class="col-md-6 col-sm-6 right">
          <h2 class="product-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h2>
		  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_283135bd6de92d80061_70085747', 'product_prices');
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_259505bd6de92d83ee9_63711275', 'product_description_short');
?>

		 <ul class="other-info">
						<?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>
												<!-- number of item in stock -->
						<li id="product_reference">
							<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Code:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
							<span class="editable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</span>
						</li>
						<?php }?>
						<li id="pQuantityAvailable">
							<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
							<span id="quantityAvailable"><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['quantity']), ENT_QUOTES, 'UTF-8');?>
</span>
							<span <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 1) {?> style="display: none;"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Item','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
							<span <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] == 1) {?> style="display: none;"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Items','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
						</li>
												<!-- availability or doesntExist -->
						<li id="availability_statut">
							<label id="availability_label">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

							</label>
							<span id="availability_value" class="label-availability">
								<?php if (intval($_smarty_tpl->tpl_vars['product']->value['quantity']) <= 0) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

								<?php } else { ?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

								<?php }?>
							</span>
						</li>
						<li>
						<?php if ($_smarty_tpl->tpl_vars['product']->value['additional_shipping_cost'] > 0) {?>
							<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping tax: '),$_smarty_tpl ) );?>
</label>
								<span class="shipping_cost"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['additional_shipping_cost'], ENT_QUOTES, 'UTF-8');?>
</span>
						<?php } else { ?>
							<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping tax:'),$_smarty_tpl ) );?>
</label><span class="shipping_cost"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Free'),$_smarty_tpl ) );?>
</span>
						<?php }?>
					</li>
	   </ul>
	   
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_320635bd6de92da32f6_61487666', 'product_buy');
?>

        </div>
      </div>
     </div>
     
   </div>
 </div>
</div>
<?php }
/* {block 'product_cover_tumbnails'} */
class Block_153285bd6de92d78367_35511717 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover_tumbnails' => 
  array (
    0 => 'Block_153285bd6de92d78367_35511717',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_cover_tumbnails'} */
/* {block 'product_prices'} */
class Block_283135bd6de92d80061_70085747 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_283135bd6de92d80061_70085747',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		  <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_259505bd6de92d83ee9_63711275 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_259505bd6de92d83ee9_63711275',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
          <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_138365bd6de92da7174_52513436 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_add_to_cart'} */
class Block_233815bd6de92da7172_89303785 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_310825bd6de92daee71_79443613 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <input class="product-refresh" data-url-update="false" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" hidden>
                <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_320635bd6de92da32f6_61487666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_320635bd6de92da32f6_61487666',
  ),
  'product_variants' => 
  array (
    0 => 'Block_138365bd6de92da7174_52513436',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_233815bd6de92da7172_89303785',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_310825bd6de92daee71_79443613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-actions">
              <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138365bd6de92da7174_52513436', 'product_variants', $this->tplIndex);
?>

				
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_233815bd6de92da7172_89303785', 'product_add_to_cart', $this->tplIndex);
?>

                
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_310825bd6de92daee71_79443613', 'product_refresh', $this->tplIndex);
?>

				
            </form>
          </div>
		  <div class="modal-footer">
		   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

		  </div>
        <?php
}
}
/* {/block 'product_buy'} */
}
