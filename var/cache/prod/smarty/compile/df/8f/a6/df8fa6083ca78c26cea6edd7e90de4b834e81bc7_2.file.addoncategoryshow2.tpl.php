<?php
/* Smarty version 3.1.32, created on 2018-09-25 03:23:05
  from 'D:\xamppp\htdocs\jms_storm\modules\jmspagebuilder\views\templates\hook\addoncategoryshow2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba9e2595a7387_77768641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df8fa6083ca78c26cea6edd7e90de4b834e81bc7' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\modules\\jmspagebuilder\\views\\templates\\hook\\addoncategoryshow2.tpl',
      1 => 1537260447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba9e2595a7387_77768641 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
jQuery(function ($) {
    "use strict";
	var categoriesCarousel = $(".categories-carousel2");		
	var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;				
	categoriesCarousel.owlCarousel({
		responsiveClass:true,
		responsive:{			
			1199:{
				items:4
			},
			991:{
				items:3
			},
			768:{
				items:2
			},
			318:{
				items:1
			}
		},
		rtl: rtl,
		margin:30,
	    nav: true,
	    dots: false,
		autoplay: false,
		loop: true,
	    rewindNav: false,
	    navigationText: ["", ""],
	    slideBy: false,
	    slideSpeed: 200	
	});
});
<?php echo '</script'; ?>
>
<div class="home_categories2">
    <?php if (isset($_smarty_tpl->tpl_vars['categories']->value) && $_smarty_tpl->tpl_vars['categories']->value) {?>
            <div class="categories-carousel2">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                <?php $_smarty_tpl->_assignInScope('categoryLink', $_smarty_tpl->tpl_vars['link']->value->getcategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']));?>
					<div class="categories-wrapper">
						<div class="categoy-image">
							<a href="<?php echo $_smarty_tpl->tpl_vars['categoryLink']->value;?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['img_cat_dir']->value;
echo $_smarty_tpl->tpl_vars['category']->value['id_category'];?>
_thumb.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
" class="img-responsive"/>
							</a>
						</div>
						<div class="category-info">
							<a class="cat-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryLink']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
						</div>
					</div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
    <?php } else { ?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No categories','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>
</p>
  <?php }?>
</div><?php }
}
