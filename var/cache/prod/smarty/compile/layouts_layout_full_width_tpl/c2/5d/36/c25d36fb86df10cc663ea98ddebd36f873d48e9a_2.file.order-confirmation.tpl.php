<?php
/* Smarty version 3.1.32, created on 2018-11-15 02:11:20
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\checkout\order-confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bed1c18906029_79575941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c25d36fb86df10cc663ea98ddebd36f873d48e9a' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\checkout\\order-confirmation.tpl',
      1 => 1541045000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/order-confirmation-table.tpl' => 1,
  ),
),false)) {
function content_5bed1c18906029_79575941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84045bed1c188cf512_98506346', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170215bed1c188d7219_78725899', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_container'} */
class Block_84045bed1c188cf512_98506346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_84045bed1c188cf512_98506346',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content-hook_order_confirmation" class="card">
		<div class="card-block">
			<div class="row">
				<div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
					<div class="title-block">
						<h3 class="h1 card-title">
						<i class="done fa fa-check-circle-o"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order is confirmed','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

					</h3>
					<p>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An email has been sent to your mail address %email%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%email%'=>$_smarty_tpl->tpl_vars['customer']->value['email'])),$_smarty_tpl ) );?>

						<?php if ($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url']) {?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can also [1]download your invoice[/1]','d'=>'Shop.Theme.Checkout','sprintf'=>array('[1]'=>"<a href='".((string)$_smarty_tpl->tpl_vars['order']->value['details']['invoice_url'])."'>",'[/1]'=>"</a>")),$_smarty_tpl ) );?>

					  <?php }?>
					</p>
				<?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

					</div>
				</div>
			</div>
		</div>
    </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'order_confirmation_table'} */
class Block_54905bed1c188db090_80338619 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/order-confirmation-table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['order']->value['products'],'subtotals'=>$_smarty_tpl->tpl_vars['order']->value['subtotals'],'totals'=>$_smarty_tpl->tpl_vars['order']->value['totals'],'labels'=>$_smarty_tpl->tpl_vars['order']->value['labels'],'add_product_link'=>false), 0, false);
?>
        <?php
}
}
/* {/block 'order_confirmation_table'} */
/* {block 'action_button'} */
class Block_35235bed1c188f6620_47679446 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="action-buttons">
		<a class="btn-default btn-shopping btn-effect button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

		</a>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8');?>
" class="btn-default btn-effect button-small">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account Page','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

		</a>
	</div>
			<?php
}
}
/* {/block 'action_button'} */
/* {block 'page_content_container'} */
class Block_170215bed1c188d7219_78725899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_170215bed1c188d7219_78725899',
  ),
  'order_confirmation_table' => 
  array (
    0 => 'Block_54905bed1c188db090_80338619',
  ),
  'action_button' => 
  array (
    0 => 'Block_35235bed1c188f6620_47679446',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content page-order-confirmation card">
    <div class="card-block">
      <div class="row">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54905bed1c188db090_80338619', 'order_confirmation_table', $this->tplIndex);
?>


        <div id="order-details" class="col-md-4">
          <h3 class="h3 card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order details','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
:</h3>
          <ul>
            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference: %reference%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%reference%'=>$_smarty_tpl->tpl_vars['order']->value['details']['reference'])),$_smarty_tpl ) );?>
</li>
            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment method: %method%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%method%'=>$_smarty_tpl->tpl_vars['order']->value['details']['payment'])),$_smarty_tpl ) );?>
</li>
            <?php if (!$_smarty_tpl->tpl_vars['order']->value['details']['is_virtual']) {?>
              <li>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping method: %method%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%method%'=>$_smarty_tpl->tpl_vars['order']->value['carrier']['name'])),$_smarty_tpl ) );?>
<br>
                <em><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['carrier']['delay'], ENT_QUOTES, 'UTF-8');?>
</em>
              </li>
            <?php }?>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <?php if (!empty($_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value)) {?>
  <section id="content-hook_payment_return" class="card definition-list">
    <div class="card-block">
      <div class="row">
        <div class="col-md-12 payment_return">
          <?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value;?>

        </div>
      </div>
    </div>
  </section>
  <?php }?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35235bed1c188f6620_47679446', 'action_button', $this->tplIndex);
?>

  <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_guest']) {?>
    <div id="registration-form" class="card">
      <div class="card-block">
        <h4 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save time on your next order, sign up now','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/customer-form.tpl','ui'=>$_smarty_tpl->tpl_vars['register_form']->value),$_smarty_tpl ) );?>

      </div>
    </div>
  <?php }?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmation1'),$_smarty_tpl ) );?>


  <section id="content-hook-order-confirmation-footer">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmation2'),$_smarty_tpl ) );?>

  </section>
<?php
}
}
/* {/block 'page_content_container'} */
}
