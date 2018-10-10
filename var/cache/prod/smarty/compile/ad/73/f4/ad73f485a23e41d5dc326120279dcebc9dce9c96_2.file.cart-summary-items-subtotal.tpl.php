<?php
/* Smarty version 3.1.32, created on 2018-10-10 00:54:18
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\checkout\_partials\cart-summary-items-subtotal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbd85fa0d8011_87611990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad73f485a23e41d5dc326120279dcebc9dce9c96' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\checkout\\_partials\\cart-summary-items-subtotal.tpl',
      1 => 1537323326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbd85fa0d8011_87611990 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
  <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
  <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
</div>
<?php }
}
