<?php

/* __string_template__7d84ce11c5ff5ddd5566d5843c262c6db245efb17c17f92615cfdd81a8102262 */
class __TwigTemplate_bb14ba21b0811a12b9607126d7aeda234e45d524b1641e6c007a8d589f3795cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/jms_storm/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/jms_storm/img/app_icon.png\" />

<title>Product • JMS Storm</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'US';
    var _PS_VERSION_ = '1.7.4.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '70cb3a28bc3acb36bfd2ab30638a02af';
    var token_admin_orders = '4c6ad497413d42e7cf88d3b1c1929d1f';
    var token_admin_customers = '61347eeefb3b4fa578d823b19d1170b2';
    var token_admin_customer_threads = '00618ce2d271e87766701878adfeec10';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = 'd29117ce1ac3b67cbf4873ab325a63d6';
    var choose_language_translate = 'Choose language';
    var default_language = '1';
    var admin_modules_link = '/jms_storm/admin063ihraim/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=qExK4rvL8gXMELyUQO4aia_i7ap0k9TUEfSdYn5kSY0';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/jms_storm/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_storm/admin063ihraim/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_storm/modules/gamification/views/css/advice-1.7.4.2_324.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_storm/modules/gamification/views/css/advice-1.7.4.2_479.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_storm/modules/gamification/views/css/advice-1.7.4.2_590.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_storm/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_storm/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_storm/admin063ihraim/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/jms_storm\\/admin063ihraim\\/\";
var baseDir = \"\\/jms_storm\\/\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"US Dollar\",\"format\":\"\\u00a4#,##0.00\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/jms_storm/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/jms_storm/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/jms_storm/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/jms_storm/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/jms_storm/admin063ihraim/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/jms_storm/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/jms_storm/js/admin.js?v=1.7.4.2\"></script>
<script type=\"text/javascript\" src=\"/jms_storm/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/jms_storm/js/tools.js?v=1.7.4.2\"></script>
<script type=\"text/javascript\" src=\"/jms_storm/admin063ihraim/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/jms_storm/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/jms_storm/admin063ihraim/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array(\"324\",\"479\",\"590\");
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminGamification&token=13d5933e0da7f6fb9d53c2f363b70894';
\t\t\t\tvar current_id_tab = 10;
\t\t\t</script>

";
        // line 85
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-en adminproducts\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminDashboard&amp;token=37344745ba6de68f3dfc04ffb9a41a59\"></a>
    <span id=\"shop_version\">1.7.4.2</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=9fc48e9790603846632e85a97db717bc\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_storm/admin063ihraim/index.php/module/manage?token=00a9608aaa0890b29f0a5fbeb178e368\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminCategories&amp;addcategory&amp;token=a340f09ac2d6ffa1809f03f847adab80\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_storm/admin063ihraim/index.php/product/new?token=00a9608aaa0890b29f0a5fbeb178e368\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=da773b88e04461681cc7ec1592ab87e6\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminOrders&amp;token=4c6ad497413d42e7cf88d3b1c1929d1f\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"5\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/form/62\"
        data-post-link=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminQuickAccesses&token=34bc17217db7d59fc0edbf013ff4e175\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Products - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to QuickAccess
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminQuickAccesses&token=34bc17217db7d59fc0edbf013ff4e175\">
      <i class=\"material-icons\">settings</i>
      Manage quick accesses
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/jms_storm/admin063ihraim/index.php?controller=AdminSearch&amp;token=d7c080e0ab377abc730ac2db180a9edd\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, SKU, reference...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, name...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice Number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/jms_storm/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      View my shop
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminCarts&token=66ac684cb44dae1b664522935db39a62&action=filterOnlyAbandonedCarts\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              That's more time for something else!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/admin%40admin.com.jpg\" />
      <span>Mr Huy</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminEmployees&amp;token=d29117ce1ac3b67cbf4873ab325a63d6&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i>
      Your profile
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminLogin&amp;token=9d5e57ef0ab8083c3db6c00cd9399127&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminDashboard&amp;token=37344745ba6de68f3dfc04ffb9a41a59\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Sell</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminOrders&amp;token=4c6ad497413d42e7cf88d3b1c1929d1f\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Orders
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminOrders&amp;token=4c6ad497413d42e7cf88d3b1c1929d1f\" class=\"link\"> Orders
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminInvoices&amp;token=11ffd0f9de4e7be0f4373ea76657eecb\" class=\"link\"> Invoices
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminSlip&amp;token=391f4d33c14621b914094dbd88e7de90\" class=\"link\"> Credit Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminDeliverySlip&amp;token=dda05eb1f4c33a858dc42784e5dd6aa4\" class=\"link\"> Delivery Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminCarts&amp;token=66ac684cb44dae1b664522935db39a62\" class=\"link\"> Shopping Carts
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/jms_storm/admin063ihraim/index.php/product/catalog?_token=qExK4rvL8gXMELyUQO4aia_i7ap0k9TUEfSdYn5kSY0\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/jms_storm/admin063ihraim/index.php/product/catalog?_token=qExK4rvL8gXMELyUQO4aia_i7ap0k9TUEfSdYn5kSY0\" class=\"link\"> Products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminCategories&amp;token=a340f09ac2d6ffa1809f03f847adab80\" class=\"link\"> Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminTracking&amp;token=8415d5964258dca0db16b0d75152825b\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminAttributesGroups&amp;token=ff61763b3b8d5ce6688c7225bf06764b\" class=\"link\"> Attributes &amp; Features
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminManufacturers&amp;token=c0dffd42e6535d7da591926639fde20d\" class=\"link\"> Brands &amp; Suppliers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminAttachments&amp;token=1cba3db9a8a3c7177213c76169faee22\" class=\"link\"> Files
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminCartRules&amp;token=da773b88e04461681cc7ec1592ab87e6\" class=\"link\"> Discounts
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/jms_storm/admin063ihraim/index.php/stock/?_token=qExK4rvL8gXMELyUQO4aia_i7ap0k9TUEfSdYn5kSY0\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminCustomers&amp;token=61347eeefb3b4fa578d823b19d1170b2\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Customers
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminCustomers&amp;token=61347eeefb3b4fa578d823b19d1170b2\" class=\"link\"> Customers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminAddresses&amp;token=b083073f73a23749e0dbbc666f51b0f0\" class=\"link\"> Addresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminCustomerThreads&amp;token=00618ce2d271e87766701878adfeec10\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Customer Service
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminCustomerThreads&amp;token=00618ce2d271e87766701878adfeec10\" class=\"link\"> Customer Service
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminOrderMessage&amp;token=4493168465436244f609653ff08c9d07\" class=\"link\"> Order Messages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminReturn&amp;token=56fb0b13ed943ff25fbdaaf7a2c84cc7\" class=\"link\"> Merchandise Returns
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminStats&amp;token=9fc48e9790603846632e85a97db717bc\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Stats
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Improve</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/jms_storm/admin063ihraim/index.php/module/manage?_token=qExK4rvL8gXMELyUQO4aia_i7ap0k9TUEfSdYn5kSY0\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/jms_storm/admin063ihraim/index.php/module/manage?_token=qExK4rvL8gXMELyUQO4aia_i7ap0k9TUEfSdYn5kSY0\" class=\"link\"> Modules &amp; Services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/jms_storm/admin063ihraim/index.php/module/addons-store?_token=qExK4rvL8gXMELyUQO4aia_i7ap0k9TUEfSdYn5kSY0\" class=\"link\"> Modules Catalog
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminThemes&amp;token=f155bc9dd7a431566352dbfcb3c7e866\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Design
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"121\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminThemes&amp;token=f155bc9dd7a431566352dbfcb3c7e866\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminThemesCatalog&amp;token=20b93ff536709313e25755e624756365\" class=\"link\"> Theme Catalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminCmsContent&amp;token=f24bb582b58c87039811f8f39dd692c6\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminModulesPositions&amp;token=501c841d1c8bf1a44fff38c649ecfcbc\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminImages&amp;token=0fdcd1b958367f236345ce4990e2ba2c\" class=\"link\"> Image Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"120\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminLinkWidget&amp;token=abcc4eb30009631941f87ec4f595140b\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminCarriers&amp;token=60e613e125c85a464aa978195d13ab5c\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Shipping
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminCarriers&amp;token=60e613e125c85a464aa978195d13ab5c\" class=\"link\"> Carriers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminShipping\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminShipping&amp;token=a43d3e200a82e54468c6961365d79609\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"59\" id=\"subtab-AdminParentPayment\">
                  <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminPayment&amp;token=6e818ff5006169fd54dd34710f9fe572\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Payment
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminPayment\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminPayment&amp;token=6e818ff5006169fd54dd34710f9fe572\" class=\"link\"> Payment Methods
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminPaymentPreferences&amp;token=c7d014302ca4cd5f5d9a78f1d3b9f685\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"62\" id=\"subtab-AdminInternational\">
                  <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminLocalization&amp;token=fdae1512a171fae70db0fb0daedbd0e0\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-62\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminLocalization&amp;token=fdae1512a171fae70db0fb0daedbd0e0\" class=\"link\"> Localization
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminZones&amp;token=95e95cf89d6fd31779a7e97421d4b0de\" class=\"link\"> Locations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminTaxes&amp;token=e7f4bc68ca0185626fc2d535780144ae\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminTranslations\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminTranslations&amp;token=f513783989fe5ac4f768892b14f61770\" class=\"link\"> Translations
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"76\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configure</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"77\" id=\"subtab-ShopParameters\">
                  <a href=\"/jms_storm/admin063ihraim/index.php/configure/shop/preferences?_token=qExK4rvL8gXMELyUQO4aia_i7ap0k9TUEfSdYn5kSY0\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Shop Parameters
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-77\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/jms_storm/admin063ihraim/index.php/configure/shop/preferences?_token=qExK4rvL8gXMELyUQO4aia_i7ap0k9TUEfSdYn5kSY0\" class=\"link\"> General
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminOrderPreferences&amp;token=97116dc8b425924738c25f6370fdf01e\" class=\"link\"> Order Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"84\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/jms_storm/admin063ihraim/index.php/configure/shop/product_preferences?_token=qExK4rvL8gXMELyUQO4aia_i7ap0k9TUEfSdYn5kSY0\" class=\"link\"> Product Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/jms_storm/admin063ihraim/index.php/configure/shop/customer_preferences?_token=qExK4rvL8gXMELyUQO4aia_i7ap0k9TUEfSdYn5kSY0\" class=\"link\"> Customer Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminContacts&amp;token=64f54ceeffd24acd95ead8ee678462b4\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\" id=\"subtab-AdminParentMeta\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminMeta&amp;token=ee8ac31e90225149be77b4f5cc512993\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminSearchConf&amp;token=c16e788c6ba02565e554b1ad75feb392\" class=\"link\"> Search
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminGamification&amp;token=13d5933e0da7f6fb9d53c2f363b70894\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"99\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/jms_storm/admin063ihraim/index.php/configure/advanced/system_information?_token=qExK4rvL8gXMELyUQO4aia_i7ap0k9TUEfSdYn5kSY0\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Advanced Parameters
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-99\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminInformation\">
                              <a href=\"/jms_storm/admin063ihraim/index.php/configure/advanced/system_information?_token=qExK4rvL8gXMELyUQO4aia_i7ap0k9TUEfSdYn5kSY0\" class=\"link\"> Information
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\" id=\"subtab-AdminPerformance\">
                              <a href=\"/jms_storm/admin063ihraim/index.php/configure/advanced/performance?_token=qExK4rvL8gXMELyUQO4aia_i7ap0k9TUEfSdYn5kSY0\" class=\"link\"> Performance
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/jms_storm/admin063ihraim/index.php/configure/advanced/administration?_token=qExK4rvL8gXMELyUQO4aia_i7ap0k9TUEfSdYn5kSY0\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminEmails\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminEmails&amp;token=b53890a3cb19a5406e5237720be9022d\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminImport\">
                              <a href=\"/jms_storm/admin063ihraim/index.php/configure/advanced/import?_token=qExK4rvL8gXMELyUQO4aia_i7ap0k9TUEfSdYn5kSY0\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminEmployees&amp;token=d29117ce1ac3b67cbf4873ab325a63d6\" class=\"link\"> Team
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminRequestSql&amp;token=f67f278fb738ffc644d7f176076eec99\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"112\" id=\"subtab-AdminLogs\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminLogs&amp;token=1509f7829da27bcde9685bd485210243\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminWebservice&amp;token=6a0003b001e8143e0295981206a3e992\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"127\" id=\"tab-JMS-MODULES\">
              <span class=\"title\">Jms Modules</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"128\" id=\"subtab-AdminJmsmegamenuDashboard\">
                  <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminJmsmegamenuManager&amp;token=23caa300ad8bda5eeee6565ede1dc673\" class=\"link\">
                    <i class=\"material-icons mi-menu\">menu</i>
                    <span>
                    Jms MegaMenu
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-128\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"129\" id=\"subtab-AdminJmsmegamenuManager\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminJmsmegamenuManager&amp;token=23caa300ad8bda5eeee6565ede1dc673\" class=\"link\"> Menu Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminJmsmegamenuStyle\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminJmsmegamenuStyle&amp;token=0b915f568c96ee095ceef28fea452bbd\" class=\"link\"> Menu Style
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"131\" id=\"subtab-AdminJmsblogDashboard\">
                  <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminJmsblogCategories&amp;token=468c7d05173922b968e6189fdb31f986\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    Jms Blog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-131\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"132\" id=\"subtab-AdminJmsblogCategories\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminJmsblogCategories&amp;token=468c7d05173922b968e6189fdb31f986\" class=\"link\"> Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"133\" id=\"subtab-AdminJmsblogPost\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminJmsblogPost&amp;token=d95e373fe9a95eb8225faf139728ee7b\" class=\"link\"> Post
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"134\" id=\"subtab-AdminJmsblogComment\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminJmsblogComment&amp;token=468b7765c10515d4c5e87d28a58e1cbd\" class=\"link\"> Comments
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"135\" id=\"subtab-AdminJmsblogSetting\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminJmsblogSetting&amp;token=da139fb59470f97236f2efd23698cffd\" class=\"link\"> Setting
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"136\" id=\"subtab-AdminJmspagebuilderDashboard\">
                  <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminJmspagebuilderHomepages&amp;token=8e60d72bc974fd030e14d60d265c5e47\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    Jms Page Builder
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-136\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminJmspagebuilderHomepages\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminJmspagebuilderHomepages&amp;token=8e60d72bc974fd030e14d60d265c5e47\" class=\"link\"> Home Pages
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"139\" id=\"subtab-AdminJmspagebuilderSetting\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminJmspagebuilderSetting&amp;token=f4fbd90b350e63f80278149787966f5d\" class=\"link\"> Setting
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"140\" id=\"subtab-AdminJmsvermegamenuDashboard\">
                  <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminJmsvermegamenuManager&amp;token=096a7065d46ad2428e0c96ffd8bef220\" class=\"link\">
                    <i class=\"material-icons mi-menu\">menu</i>
                    <span>
                    Jms Vertical MegaMenu
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-140\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"141\" id=\"subtab-AdminJmsvermegamenuManager\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminJmsvermegamenuManager&amp;token=096a7065d46ad2428e0c96ffd8bef220\" class=\"link\"> Menu Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"142\" id=\"subtab-AdminJmsvermegamenuStyle\">
                              <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminJmsvermegamenuStyle&amp;token=d42034968923e1870baaa9c41ecca7aa\" class=\"link\"> Menu Style
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
        
    <div class=\"content-div -notoolbar \">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1156
        $this->displayBlock('content_header', $context, $blocks);
        // line 1157
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1158
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1159
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1160
        echo "
          
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/jms_storm/admin063ihraim/index.php?controller=AdminDashboard&amp;token=37344745ba6de68f3dfc04ffb9a41a59\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=admin%40admin.com&amp;firstname=Mr&amp;lastname=Huy&amp;website=http%3A%2F%2Flocalhost%2Fjms_storm%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/jms_storm/admin063ihraim/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=admin%40admin.com&amp;firstname=Mr&amp;lastname=Huy&amp;website=http%3A%2F%2Flocalhost%2Fjms_storm%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1269
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 85
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1156
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1157
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1158
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1159
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1269
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__7d84ce11c5ff5ddd5566d5843c262c6db245efb17c17f92615cfdd81a8102262";
    }

    public function getDebugInfo()
    {
        return array (  1348 => 1269,  1343 => 1159,  1338 => 1158,  1333 => 1157,  1328 => 1156,  1319 => 85,  1311 => 1269,  1200 => 1160,  1197 => 1159,  1194 => 1158,  1191 => 1157,  1189 => 1156,  114 => 85,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__7d84ce11c5ff5ddd5566d5843c262c6db245efb17c17f92615cfdd81a8102262", "");
    }
}
