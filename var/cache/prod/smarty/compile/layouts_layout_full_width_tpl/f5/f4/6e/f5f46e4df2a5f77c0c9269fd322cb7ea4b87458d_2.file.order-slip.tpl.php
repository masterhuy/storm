<?php
/* Smarty version 3.1.32, created on 2018-11-01 00:47:39
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\customer\order-slip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bda856b95a631_24859899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5f46e4df2a5f77c0c9269fd322cb7ea4b87458d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\customer\\order-slip.tpl',
      1 => 1537323326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bda856b95a631_24859899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173565bda856b933537_77882275', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138455bda856b933532_11926764', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_173565bda856b933537_77882275 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_173565bda856b933537_77882275',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slips','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_138455bda856b933532_11926764 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_138455bda856b933532_11926764',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h6><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slips you have received after canceled orders','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
.</h6>
  <?php if ($_smarty_tpl->tpl_vars['credit_slips']->value) {?>
    <table class="table table-striped table-bordered hidden-sm-down">
      <thead class="thead-default">
        <tr>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slip','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date issued','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View credit slip','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</th>
        </tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['credit_slips']->value, 'slip');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slip']->value) {
?>
          <tr>
            <td><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slip']->value['order_url_details'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="view-order-details"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slip']->value['order_reference'], ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td scope="row"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slip']->value['credit_slip_number'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slip']->value['credit_slip_date'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="text-xs-center">
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slip']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">&#xE415;</i></a>
            </td>
          </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
    <div class="credit-slips hidden-md-up">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['credit_slips']->value, 'slip');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slip']->value) {
?>
        <div class="credit-slip">
          <ul>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</strong>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slip']->value['order_url_details'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="view-order-details"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slip']->value['order_reference'], ENT_QUOTES, 'UTF-8');?>
</a>
            </li>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slip','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</strong>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slip']->value['credit_slip_number'], ENT_QUOTES, 'UTF-8');?>

            </li>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date issued','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</strong>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slip']->value['credit_slip_date'], ENT_QUOTES, 'UTF-8');?>

            </li>
            <li>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slip']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View credit slip','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</a>
            </li>
          </ul>
        </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  <?php }
}
}
/* {/block 'page_content'} */
}
