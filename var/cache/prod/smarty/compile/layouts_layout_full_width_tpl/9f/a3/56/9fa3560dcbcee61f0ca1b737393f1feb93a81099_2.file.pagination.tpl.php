<?php
/* Smarty version 3.1.32, created on 2018-11-16 01:59:21
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\_partials\pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bee6ac99ca516_88786646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fa3560dcbcee61f0ca1b737393f1feb93a81099' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\_partials\\pagination.tpl',
      1 => 1537323326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bee6ac99ca516_88786646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav class="pagination col-lg-12 col-sm-12 col-xs-12 col-md-12">
  <div class="col-md-6 col-sm-6 col-xs-6 left-pagination">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_326045bee6ac99b2e09_72071149', 'pagination_summary');
?>

  </div>

  <div class=" col-md-6 col-sm-6 col-xs-6 right-pagination">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_292855bee6ac99bab09_41939753', 'pagination_page_list');
?>

  </div>

</nav>
<?php }
/* {block 'pagination_summary'} */
class Block_326045bee6ac99b2e09_72071149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_summary' => 
  array (
    0 => 'Block_326045bee6ac99b2e09_72071149',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['pagination']->value['total_items'])),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'pagination_summary'} */
/* {block 'pagination_page_list'} */
class Block_292855bee6ac99bab09_41939753 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_page_list' => 
  array (
    0 => 'Block_292855bee6ac99bab09_41939753',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <?php if ($_smarty_tpl->tpl_vars['pagination']->value['should_be_displayed']) {?>
        <ul class="page-list clearfix text-sm-center">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
          
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> class="current" <?php }?>>
              <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>
                <span class="spacer">&hellip;</span>
              <?php } else { ?>
                <a
                  rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next<?php } else { ?>nofollow<?php }?>"
                  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                  class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next <?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
                >
                  <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>
                    <i class="fa fa-chevron-left"></i>
                  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>
                   <i class="fa fa-chevron-right"></i>
                  <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

                  <?php }?>
                </a>
              <?php }?>
            </li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      <?php }?>
    <?php
}
}
/* {/block 'pagination_page_list'} */
}
