<?php
/* Smarty version 3.1.32, created on 2018-10-29 11:17:55
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\catalog\listing\product-list-banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd724a39ee694_23834060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '206b81ba5dc27bc48bd864a0447a1980ffd36b2f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\catalog\\listing\\product-list-banner.tpl',
      1 => 1537323326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5bd724a39ee694_23834060 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_269215bd724a39dae11_98402723', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_top'} */
class Block_298705bd724a39e2b10_63135077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_251675bd724a39e6993_30747463 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="" class="hidden-sm-down">
            <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

          </div>
        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_76445bd724a39ea813_09109062 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_283895bd724a39ea819_34626348 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_269215bd724a39dae11_98402723 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_269215bd724a39dae11_98402723',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_298705bd724a39e2b10_63135077',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_251675bd724a39e6993_30747463',
  ),
  'product_list' => 
  array (
    0 => 'Block_76445bd724a39ea813_09109062',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_283895bd724a39ea819_34626348',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">
    <section id="products">
			<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == "category") {?>
				<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url']) && $_prefixVariable1 != '') {?>
					<div style="background:transparent url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'], ENT_QUOTES, 'UTF-8');?>
')
						no-repeat scroll center center / cover; height: 229px" class="content_scene_cat_bg">	
					</div>
				<?php }?>
			<?php }?>
      <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
        <div id="">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_298705bd724a39e2b10_63135077', 'product_list_top', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_251675bd724a39e6993_30747463', 'product_list_active_filters', $this->tplIndex);
?>


          <div id="product_list" class="product_list <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 1) {?>products-list-in-column<?php } else { ?>products-list-in-row<?php }?>  products-list-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_productperrow']->value, ENT_QUOTES, 'UTF-8');?>
">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76445bd724a39ea813_09109062', 'product_list', $this->tplIndex);
?>

        </div>

        <div id="js-product-list-bottom">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_283895bd724a39ea819_34626348', 'product_list_bottom', $this->tplIndex);
?>

        </div>

      <?php } else { ?>

        <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php }?>
    </section>

  </section>
<?php
}
}
/* {/block 'content'} */
}
