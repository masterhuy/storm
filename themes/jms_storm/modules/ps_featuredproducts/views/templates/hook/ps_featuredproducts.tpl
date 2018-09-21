<section class="featured-products clearfix">
	<div class="addon-title">
		<h3 class="products-section-title text-uppercase ">
			{l s='Popular Products' d='Shop.Theme.Catalog'}
		</h3>
	</div>
  
  <div class="products customs-carousel-product">
    {foreach from=$products item="product"}
      {include file="catalog/_partials/miniatures/product.tpl" product=$product}
    {/foreach}
  </div>
</section>