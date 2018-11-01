{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- MODULE WishList -->
<a class=" wishlist_top home_page lnk_wishlist col-lg-4 col-md-6 col-sm-6 col-xs-12" href="{$link->getModuleLink('jmswishlist', 'mywishlist', array(), true)|escape:'html':'UTF-8'}" title="{l s='My wishlists' d='Shop.Theme'}">
	<i class="storm-heart"></i>
</a>
<a class=" wishlist_top my_account lnk_wishlist col-lg-4 col-md-6 col-sm-6 col-xs-12" href="{$link->getModuleLink('jmswishlist', 'mywishlist', array(), true)|escape:'html':'UTF-8'}" title="My wishlists">
  <span class="link-item">
		<i class="fa fa-heart"></i>
		My wishlists
	</span>
</a>
<!-- END : MODULE WishList -->