<?php
/* Smarty version 3.1.32, created on 2018-11-01 00:46:49
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\customer\_partials\order-messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bda8539585658_44847537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72d6c7f3646f9cfa78d152d7fc8612c4deb5e38e' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\customer\\_partials\\order-messages.tpl',
      1 => 1537323326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bda8539585658_44847537 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['order']->value['messages']) {?>
<div class="box messages">
  <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Messages','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</h3>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value['messages'], 'message');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
?>
    <div class="message row">
      <div class="col-sm-4">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['name'], ENT_QUOTES, 'UTF-8');?>
<br/>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['message_date'], ENT_QUOTES, 'UTF-8');?>

      </div>
      <div class="col-sm-8">
        <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

      </div>
    </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>

<section class="order-message-form box">
  <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_detail'], ENT_QUOTES, 'UTF-8');?>
" method="post">

    <header>
      <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a message','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</h3>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you would like to add a comment about your order, please write it in the field below.','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</p>
    </header>

    <section class="form-fields">

      <div class="form-group row">
        <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
        <div class="col-md-5 select-box">
          <select name="id_product" class="form-control form-control-select">
            <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
              <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-3 form-control-label"></label>
        <div class="col-md-9">
          <textarea rows="3" name="msgText" class="form-control"></textarea>
        </div>
      </div>

    </section>

    <footer class="form-footer text-xs-center">
      <input type="hidden" name="id_order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['id'], ENT_QUOTES, 'UTF-8');?>
">
      <button type="submit" name="submitMessage" class="btn btn-default btn-effect form-control-submit">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
    </footer>

  </form>
</section>
<?php }
}
