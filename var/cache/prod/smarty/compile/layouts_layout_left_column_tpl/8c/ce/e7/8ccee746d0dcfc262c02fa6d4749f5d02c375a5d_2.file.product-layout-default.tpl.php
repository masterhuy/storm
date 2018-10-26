<?php
/* Smarty version 3.1.32, created on 2018-10-26 06:18:04
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\catalog\product-layout-default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd2e9dc02acd0_78428536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ccee746d0dcfc262c02fa6d4749f5d02c375a5d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\catalog\\product-layout-default.tpl',
      1 => 1540540284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_5bd2e9dc02acd0_78428536 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_318455bd2e9dbed89b6_94434528', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_279625bd2e9dbedc832_32938774', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_240435bd2e9dbee83b0_03398073', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_318455bd2e9dbed89b6_94434528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_318455bd2e9dbed89b6_94434528',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head'} */
class Block_279625bd2e9dbedc832_32938774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_279625bd2e9dbedc832_32938774',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['product']->value['weight']) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'product_flags'} */
class Block_89665bd2e9dbeec235_08490373 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <ul class="product-flags">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
                    <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
              <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover_tumbnails'} */
class Block_281035bd2e9dbefbc36_97191655 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php
}
}
/* {/block 'product_cover_tumbnails'} */
/* {block 'page_content'} */
class Block_312015bd2e9dbeec236_14013697 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89665bd2e9dbeec235_08490373', 'product_flags', $this->tplIndex);
?>


              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_281035bd2e9dbefbc36_97191655', 'product_cover_tumbnails', $this->tplIndex);
?>

              <div class="scroll-box-arrows">
                <i class="fa fa-angle-left left"></i>
                <i class="fa fa-angle-right right"></i>
              </div>

            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_182485bd2e9dbeec239_76543127 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <section class="page-content" id="content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_312015bd2e9dbeec236_14013697', 'page_content', $this->tplIndex);
?>

          </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_270265bd2e9dbeffab5_09299142 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_212775bd2e9dbeffab2_64124928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<h2  itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_270265bd2e9dbeffab5_09299142', 'page_title', $this->tplIndex);
?>
</h2>
				<?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_40845bd2e9dbefbc30_35195320 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212775bd2e9dbeffab2_64124928', 'page_header', $this->tplIndex);
?>

			<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_80355bd2e9dbeffab4_92940431 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_141765bd2e9dbf03942_22610631 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-desc"itemprop="description"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['description_short']),150,"..." )), ENT_QUOTES, 'UTF-8');?>
</div>
				<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_10495bd2e9dbf0f4c8_19806832 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
					<?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_201595bd2e9dbf2aa47_07119035 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_186455bd2e9dbf2e8c6_37700599 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
										<?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_270205bd2e9dbf2aa46_95348280 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
								<section class="product-pack">
									<h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186455bd2e9dbf2e8c6_37700599', 'product_miniature', $this->tplIndex);
?>

									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</section>
							<?php }?>
							<?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_63785bd2e9dbf2e8c4_11800427 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							<?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_61075bd2e9dbf32744_99568763 extends Smarty_Internal_Block
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
class Block_47285bd2e9dbf365c0_28597641 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
							<?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_32945bd2e9dbf26bc1_04946281 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
							<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
							<input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
							<input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201595bd2e9dbf2aa47_07119035', 'product_variants', $this->tplIndex);
?>


							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_270205bd2e9dbf2aa46_95348280', 'product_pack', $this->tplIndex);
?>

							
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63785bd2e9dbf2e8c4_11800427', 'product_discounts', $this->tplIndex);
?>

							
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61075bd2e9dbf32744_99568763', 'product_add_to_cart', $this->tplIndex);
?>

							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47285bd2e9dbf365c0_28597641', 'product_refresh', $this->tplIndex);
?>

						</form>
					<?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_description'} */
class Block_229665bd2e9dc003bc8_71029184 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                     <div class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                   <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_221995bd2e9dc007a51_33530624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                 <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_241005bd2e9dc007a54_37039649 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                   <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                    <div class="tab-pane fade in" id="attachments" role="tabpanel">
                       <section class="product-attachments">
                         <h3 class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h3>
                         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
?>
                           <div class="attachment">
                             <h4><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
                             <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p
                             <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                               <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)
                             </a>
                           </div>
                         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                       </section>
                     </div>
                   <?php }?>
                 <?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_tabs'} */
class Block_75055bd2e9dbf3a447_80077556 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="tabs">
                <ul class="nav nav-tabs" role="tablist">
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
                    <li class="nav-item">
                       <a
                         class="nav-link<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>"
                         data-toggle="tab"
                         href="#description"
                         role="tab"
                         aria-controls="description"
                         <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Descriptions','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                    </li>
                  <?php }?>
                  <li class="nav-item">
                    <a
                      class="nav-link<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>"
                      data-toggle="tab"
                      href="#product-details"
                      role="tab"
                      aria-controls="product-details"
                      <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#attachments"
                        role="tab"
                        aria-controls="attachments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                    </li>
                  <?php }?>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"
                        role="tab"
                        aria-controls="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                    </li>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>

                <div class="tab-content" id="tab-content">
                 <div class="tab-pane fade in<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" id="description" role="tabpanel">
                   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_229665bd2e9dc003bc8_71029184', 'product_description', $this->tplIndex);
?>

                 </div>

                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_221995bd2e9dc007a51_33530624', 'product_details', $this->tplIndex);
?>


                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_241005bd2e9dc007a54_37039649', 'product_attachments', $this->tplIndex);
?>


                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
                 <div class="tab-pane fade in <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tabpanel" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
                   <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

                 </div>
                 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>  
            </div>
          <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_miniature'} */
class Block_233625bd2e9dc022fd1_91171120 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?>
						<?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_157575bd2e9dc01f155_87465510 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
        <section class="product-accessories clearfix">
			<div class="addon-title">
				<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accessories','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
			</div>
		
			<div class="products accessories-carousel customs-carousel-product">			
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
					<div class="item ajax_block_product">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_233625bd2e9dc022fd1_91171120', 'product_miniature', $this->tplIndex);
?>
  
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			
        </section>
      <?php }?>
    <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_100675bd2e9dc022fd2_40549266 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_144805bd2e9dc026e55_27386608 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer_container'} */
class Block_96095bd2e9dc026e55_18550979 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_240435bd2e9dbee83b0_03398073 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_240435bd2e9dbee83b0_03398073',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_182485bd2e9dbeec239_76543127',
  ),
  'page_content' => 
  array (
    0 => 'Block_312015bd2e9dbeec236_14013697',
  ),
  'product_flags' => 
  array (
    0 => 'Block_89665bd2e9dbeec235_08490373',
  ),
  'product_cover_tumbnails' => 
  array (
    0 => 'Block_281035bd2e9dbefbc36_97191655',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_40845bd2e9dbefbc30_35195320',
  ),
  'page_header' => 
  array (
    0 => 'Block_212775bd2e9dbeffab2_64124928',
  ),
  'page_title' => 
  array (
    0 => 'Block_270265bd2e9dbeffab5_09299142',
  ),
  'product_prices' => 
  array (
    0 => 'Block_80355bd2e9dbeffab4_92940431',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_141765bd2e9dbf03942_22610631',
  ),
  'product_customization' => 
  array (
    0 => 'Block_10495bd2e9dbf0f4c8_19806832',
  ),
  'product_buy' => 
  array (
    0 => 'Block_32945bd2e9dbf26bc1_04946281',
  ),
  'product_variants' => 
  array (
    0 => 'Block_201595bd2e9dbf2aa47_07119035',
  ),
  'product_pack' => 
  array (
    0 => 'Block_270205bd2e9dbf2aa46_95348280',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_186455bd2e9dbf2e8c6_37700599',
    1 => 'Block_233625bd2e9dc022fd1_91171120',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_63785bd2e9dbf2e8c4_11800427',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_61075bd2e9dbf32744_99568763',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_47285bd2e9dbf365c0_28597641',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_75055bd2e9dbf3a447_80077556',
  ),
  'product_description' => 
  array (
    0 => 'Block_229665bd2e9dc003bc8_71029184',
  ),
  'product_details' => 
  array (
    0 => 'Block_221995bd2e9dc007a51_33530624',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_241005bd2e9dc007a54_37039649',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_157575bd2e9dc01f155_87465510',
  ),
  'product_footer' => 
  array (
    0 => 'Block_100675bd2e9dc022fd2_40549266',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_144805bd2e9dc026e55_27386608',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_96095bd2e9dc026e55_18550979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="row product-detail">
      <div class="pb-left-column col-sm-6 col-md-6 col-lg-6 col-xs-12">
	   <div class="pd-left-content">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182485bd2e9dbeec239_76543127', 'page_content_container', $this->tplIndex);
?>

		 </div>
        </div>
        <div class="pb-right-column col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40845bd2e9dbefbc30_35195320', 'page_header_container', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80355bd2e9dbeffab4_92940431', 'product_prices', $this->tplIndex);
?>

			<div class="product-information">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141765bd2e9dbf03942_22610631', 'product_description_short', $this->tplIndex);
?>

			
				<?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10495bd2e9dbf0f4c8_19806832', 'product_customization', $this->tplIndex);
?>

				<?php }?>
				
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
				<div class="product-actions">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32945bd2e9dbf26bc1_04946281', 'product_buy', $this->tplIndex);
?>

				</div>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

				
			</div>
          <!-- Go to www.addthis.com/dashboard to customize your tools -->
          <div class="addthis_inline_share_toolbox_ld1s"></div>
            
		</div>
	
    </div>
	
	<div id="more_info_block" class="tabs">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75055bd2e9dbf3a447_80077556', 'product_tabs', $this->tplIndex);
?>

          </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157575bd2e9dc01f155_87465510', 'product_accessories', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100675bd2e9dc022fd2_40549266', 'product_footer', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144805bd2e9dc026e55_27386608', 'product_images_modal', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96095bd2e9dc026e55_18550979', 'page_footer_container', $this->tplIndex);
?>

  </section>

<?php
}
}
/* {/block 'content'} */
}
