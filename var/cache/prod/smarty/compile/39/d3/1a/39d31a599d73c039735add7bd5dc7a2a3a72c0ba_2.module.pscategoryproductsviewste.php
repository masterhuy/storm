<?php
/* Smarty version 3.1.32, created on 2018-11-05 20:43:53
  from 'module:pscategoryproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be0f1d95c93b6_94755548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d31a599d73c039735add7bd5dc7a2a3a72c0ba' => 
    array (
      0 => 'module:pscategoryproductsviewste',
      1 => 1540539631,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5be0f1d95c93b6_94755548 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="featured-products clearfix mt-3 addon-title">
  <h3>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'RELATED PRODUCTS','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

  </h3>
  <div class="product_box">
    <div class="products customs-carousel-product">
        
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                <div class="item ajax_block_product">
                    <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </div>
  </div>
</section>
<?php }
}
