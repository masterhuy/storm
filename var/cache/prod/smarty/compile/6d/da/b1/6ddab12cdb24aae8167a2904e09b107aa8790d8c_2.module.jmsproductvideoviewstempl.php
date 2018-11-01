<?php
/* Smarty version 3.1.32, created on 2018-11-01 04:08:08
  from 'module:jmsproductvideoviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bdab468b82d32_48667469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ddab12cdb24aae8167a2904e09b107aa8790d8c' => 
    array (
      0 => 'module:jmsproductvideoviewstempl',
      1 => 1537323325,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdab468b82d32_48667469 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
	.jms-popup-wrap {
		width : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_width']->value, ENT_QUOTES, 'UTF-8');?>
px;
		height :<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_height']->value, ENT_QUOTES, 'UTF-8');?>
px;		
		margin: -<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_height']->value/2, ENT_QUOTES, 'UTF-8');?>
px 0 0 -<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_width']->value/2, ENT_QUOTES, 'UTF-8');?>
px;		
	}
</style>

<?php if ($_smarty_tpl->tpl_vars['product_videos']->value) {?>
<div class="jms-videos" id="jmsproductvideo">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_videos']->value, 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>	
		<div class="jms-video <?php if ($_smarty_tpl->tpl_vars['video_show']->value == '1') {?>popup-active<?php }?>">	
			<h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h3>
			<?php if ($_smarty_tpl->tpl_vars['video_show']->value == '1') {?>
				<div class="jms-popup-box">				
					<div class="jms-popup-wrap">						
							<a class="popup-close"><i class="fa fa-close"></i></a>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['video']->value['links'], 'video_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video_link']->value) {
?>
								<?php if (strpos($_smarty_tpl->tpl_vars['video_link']->value,'youtube') !== false) {?>
								<iframe width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_width']->value, ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_height']->value, ENT_QUOTES, 'UTF-8');?>
" src="https://www.youtube-nocookie.com/embed/<?php echo htmlspecialchars(substr($_smarty_tpl->tpl_vars['video_link']->value,(strpos($_smarty_tpl->tpl_vars['video_link']->value,'?v=')+3)), ENT_QUOTES, 'UTF-8');?>
?rel=0&amp;controls=0&amp;showinfo=0<?php if ($_smarty_tpl->tpl_vars['video_autoplay']->value) {?>&amp;autoplay=1<?php }?>" frameborder="0" allowfullscreen></iframe>
								<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('count_', (explode("/",$_smarty_tpl->tpl_vars['video_link']->value)));?>
									<iframe src="https://player.vimeo.com/video/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_']->value[count($_smarty_tpl->tpl_vars['count_']->value)-1], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['video_autoplay']->value) {?>?autoplay=1<?php }?>" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_width']->value, ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_height']->value, ENT_QUOTES, 'UTF-8');?>
" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>			
					</div>
					<div class="jms-popup-overlay" style="display:none;opacity:0;"></div>
				</div>	
			<?php } else { ?>			
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['video']->value['links'], 'video_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video_link']->value) {
?>				
					<?php if (strpos($_smarty_tpl->tpl_vars['video_link']->value,'youtube') !== false) {?>
						<iframe width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_width']->value, ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_height']->value, ENT_QUOTES, 'UTF-8');?>
" src="https://www.youtube-nocookie.com/embed/<?php echo htmlspecialchars(substr($_smarty_tpl->tpl_vars['video']->value['link'],(strpos($_smarty_tpl->tpl_vars['video_link']->value,'?v=')+3)), ENT_QUOTES, 'UTF-8');?>
?rel=0&amp;controls=0&amp;showinfo=0<?php if ($_smarty_tpl->tpl_vars['video_autoplay']->value) {?>&amp;autoplay=1<?php }?>" frameborder="0" allowfullscreen></iframe>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('count_', (explode("/",$_smarty_tpl->tpl_vars['video_link']->value)));?>
						<iframe src="https://player.vimeo.com/video/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_']->value[count($_smarty_tpl->tpl_vars['count_']->value)-1], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['video_autoplay']->value) {?>?autoplay=1<?php }?>" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_width']->value, ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_height']->value, ENT_QUOTES, 'UTF-8');?>
" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>		
			<?php }?>
		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
}
