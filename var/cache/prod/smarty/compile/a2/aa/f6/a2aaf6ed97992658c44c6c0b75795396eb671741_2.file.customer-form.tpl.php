<?php
/* Smarty version 3.1.32, created on 2018-11-13 22:17:34
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\checkout\_partials\customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5beb93ce624b15_69970861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2aaf6ed97992658c44c6c0b75795396eb671741' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\checkout\\_partials\\customer-form.tpl',
      1 => 1541044276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beb93ce624b15_69970861 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202205beb93ce618f95_22977312', "form_field");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65335beb93ce624b18_60937668', "form_buttons");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "customer/_partials/customer-form.tpl");
}
/* {block "form_field"} */
class Block_202205beb93ce618f95_22977312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field' => 
  array (
    0 => 'Block_202205beb93ce618f95_22977312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['field']->value['name'] === 'password' && $_smarty_tpl->tpl_vars['guest_allowed']->value) {?>
      <p>
        <span class="font-weight-bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span> <span class="font-italic"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(optional)','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
        <br>
        <span class="text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'And save time on your next order!','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
      </p>
      <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php }
}
}
/* {/block "form_field"} */
/* {block "form_buttons"} */
class Block_65335beb93ce624b18_60937668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_65335beb93ce624b18_60937668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <button
      class="btn-default continue btn btn-primary button-small pull-xs-right"
      name="continue"
      data-link-action="register-new-customer"
      type="submit"
      value="1"
    >
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

    </button>
<?php
}
}
/* {/block "form_buttons"} */
}
