<?php
/* Smarty version 3.1.32, created on 2018-11-21 02:40:34
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf50bf2c692a0_51433968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2009ffde739a01759e180fb2762d6e68e5d8c008' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\layouts\\layout-full-width.tpl',
      1 => 1537323326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf50bf2c692a0_51433968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52785bf50bf2c615a8_60735158', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70395bf50bf2c65426_52312705', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59645bf50bf2c65421_53251709', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_52785bf50bf2c615a8_60735158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_52785bf50bf2c615a8_60735158',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_70395bf50bf2c65426_52312705 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_70395bf50bf2c65426_52312705',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_173015bf50bf2c65425_22283862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_59645bf50bf2c65421_53251709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_59645bf50bf2c65421_53251709',
  ),
  'content' => 
  array (
    0 => 'Block_173015bf50bf2c65425_22283862',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != "index") {?>class="col-lg-12 col-md-12 col-sm-12 col-xs-12"<?php }?>>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173015bf50bf2c65425_22283862', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
