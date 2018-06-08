<?php

/* __string_template__e6109f8c3227b2b7f1232deab101f581d4757d548eda349d832ca4d2cc212954 */
class __TwigTemplate_799144805e3d8351ab457e5f896000d4a89f4f3ec37ba0942563c88aa1e7a3fc extends Twig_Template
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
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Gérer les modules installés • beauvase</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModules';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'US';
    var _PS_VERSION_ = '1.7.3.3';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'b066ef8f6cefebdd696fb58ed6b98a0e';
    var token_admin_orders = '992457e46f5e219d0aecc46171db6f25';
    var token_admin_customers = '0a0fa29967067866a45cb1cd63d22df1';
    var token_admin_customer_threads = '15cbe3c6cf3b92c5b097f55108753e05';
    var currentIndex = 'index.php?controller=AdminModules';
    var employee_token = '028b25252fbc92c42ea8eaf06dd76df2';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/admin357xfcm9i/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=4s0MfsQBObaXYtDsK8Pvkh6ancQI8iHiXve1RrVi2iw';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin357xfcm9i/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/advice-1.7.3.3_590.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin357xfcm9i/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin357xfcm9i\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"dollar des \\u00c9tats-Unis\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/admin357xfcm9i/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.3.3\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.3.3\"></script>
<script type=\"text/javascript\" src=\"/admin357xfcm9i/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin357xfcm9i/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array(\"590\");
\t\t\t\tvar admin_gamification_ajax_url = 'http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminGamification&token=1b6ec328eaefcb2d27cfe3cb79c50abb';
\t\t\t\tvar current_id_tab = 45;
\t\t\t</script>

";
        // line 84
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-fr adminmodules\">



<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

    
    

    
    <i class=\"material-icons float-left px-1 js-mobile-menu d-md-none\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminDashboard&amp;token=cd1e3709e8786d4f3d435546cdf3e9a6\"></a>

    <div class=\"component d-none d-md-flex\" id=\"quick-access-container\"><div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminOrders&amp;token=992457e46f5e219d0aecc46171db6f25\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=0f1cc5de2fd5641574e7021fff02643a\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item active\"
         href=\"http://127.0.0.1/admin357xfcm9i/index.php/module/manage?token=29c9cf93d8a2b2528ee824d4350cd6b0\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=b0dc0e4ba8b8e86b84e0653c8986c663\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://127.0.0.1/admin357xfcm9i/index.php/product/new?token=29c9cf93d8a2b2528ee824d4350cd6b0\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminCategories&amp;addcategory&amp;token=e8c322dff36e11d82e340e4c5583ab93\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"24\"
        data-icon=\"icon-AdminParentModulesSf\"
        data-url=\"index.php/module/manage\"
        data-post-link=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminQuickAccesses&token=66e660147ce442f9b192d85f5286bf47\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\" - Liste\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Supprimer de l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminQuickAccesses&token=66e660147ce442f9b192d85f5286bf47\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
</div>
    <div class=\"component d-none d-md-inline-block col-md-4\" id=\"header-search-container\">
<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin357xfcm9i/index.php?controller=AdminSearch&amp;token=abdb53f210a52fa9e44add86d3e7b1f9\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\">
    <div class=\"input-group-btn\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
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

            <div class=\"component d-none d-md-inline-block\">  <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://127.0.0.1/\" target= \"_blank\">beauvase</a>
  </div>
</div>
          <div class=\"component\"><div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <div class=\"notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
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
              Commandes<span id=\"_nb_new_orders_\"></span>
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
              Clients<span id=\"_nb_new_customers_\"></span>
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
              Pas de nouvelle commande pour le moment :(<br>
              Et pourquoi pas lancer des promotions de saison ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
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
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
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
        <div class=\"component -norightmargin d-none d-md-inline-block\"><div class=\"employee-dropdown dropdown\">
      <div class=\"person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">account_circle</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/laurentngu%40gmail.com.jpg\" /><br>
      <span>Laurent Nguyen</span>
    </div>
    <div>
      <a class=\"employee-link profile-link\" href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminEmployees&amp;token=028b25252fbc92c42ea8eaf06dd76df2&amp;id_employee=1&amp;updateemployee\">
        <i class=\"material-icons\">settings_applications</i> Votre profil
      </a>
    </div>
    <div>
      <a class=\"employee-link\" id=\"header_logout\" href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminLogin&amp;token=dde9e648b7e0547e83499640bc58f175&amp;logout\">
        <i class=\"material-icons\">power_settings_new</i> Déconnexion
      </a>
    </div>
  </div>
</div>
</div>

    
  </nav>
  </header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminDashboard&amp;token=cd1e3709e8786d4f3d435546cdf3e9a6\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminOrders&amp;token=992457e46f5e219d0aecc46171db6f25\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Commandes
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminOrders&amp;token=992457e46f5e219d0aecc46171db6f25\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminInvoices&amp;token=42247f5b9950d84060e9cff65f7c964b\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminSlip&amp;token=f710456d8ced7ab7465278001c8f3905\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminDeliverySlip&amp;token=e0af7d6c6c5d0507139be5374b18fd25\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminCarts&amp;token=e23c154a005b940a6d8a7569566a93bf\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin357xfcm9i/index.php/product/catalog?_token=4s0MfsQBObaXYtDsK8Pvkh6ancQI8iHiXve1RrVi2iw\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catalogue
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin357xfcm9i/index.php/product/catalog?_token=4s0MfsQBObaXYtDsK8Pvkh6ancQI8iHiXve1RrVi2iw\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminCategories&amp;token=e8c322dff36e11d82e340e4c5583ab93\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminTracking&amp;token=1cd5c3f0d4bb747059ca3c8ba3c4b93a\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminAttributesGroups&amp;token=4ccb157856408fcb49020de5a86b2a50\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminManufacturers&amp;token=26ec02d17102c9c4e4a60c9db76ed60b\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminAttachments&amp;token=a0011db71be2a75dfc86ab51c33caa8b\" class=\"link\"> Fichiers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminCartRules&amp;token=b0dc0e4ba8b8e86b84e0653c8986c663\" class=\"link\"> Réductions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin357xfcm9i/index.php/stock/?_token=4s0MfsQBObaXYtDsK8Pvkh6ancQI8iHiXve1RrVi2iw\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminCustomers&amp;token=0a0fa29967067866a45cb1cd63d22df1\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Clients
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminCustomers&amp;token=0a0fa29967067866a45cb1cd63d22df1\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminAddresses&amp;token=3242b5d25e2a946a60d9c7ecb1471407\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminCustomerThreads&amp;token=15cbe3c6cf3b92c5b097f55108753e05\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    SAV
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminCustomerThreads&amp;token=15cbe3c6cf3b92c5b097f55108753e05\" class=\"link\"> SAV
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminOrderMessage&amp;token=a509b5f89c2031e103475835f84a6066\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminReturn&amp;token=400465873d380c04236e9cb24df13c0d\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminStats&amp;token=0f1cc5de2fd5641574e7021fff02643a\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistiques
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin357xfcm9i/index.php/module/catalog?_token=4s0MfsQBObaXYtDsK8Pvkh6ancQI8iHiXve1RrVi2iw\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Modules
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin357xfcm9i/index.php/module/catalog?_token=4s0MfsQBObaXYtDsK8Pvkh6ancQI8iHiXve1RrVi2iw\" class=\"link\"> Modules et services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/admin357xfcm9i/index.php/module/addons-store?_token=4s0MfsQBObaXYtDsK8Pvkh6ancQI8iHiXve1RrVi2iw\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminThemes&amp;token=87570813e124eb407d8114c42acd0da0\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Apparence
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminThemes\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminThemes&amp;token=87570813e124eb407d8114c42acd0da0\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminThemesCatalog&amp;token=4520d5672d53809da00ca90d0f4425bc\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminCmsContent&amp;token=b21d134194622edc1bbe5a169fcbef23\" class=\"link\"> Pages CMS
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminModulesPositions&amp;token=9a61805d8526f7aa9664d731f18d31a9\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminImages\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminImages&amp;token=e1a24aec5a4fceb309ff4bf48453a68e\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminLinkWidget&amp;token=f62c8398b870c440627a4cdb31025024\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminCarriers&amp;token=8ef3a9af739ee502548d6c7ae18230d5\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Livraison
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminCarriers&amp;token=8ef3a9af739ee502548d6c7ae18230d5\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminShipping\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminShipping&amp;token=24b491c8be879db072ead7ad22336293\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\" id=\"subtab-AdminParentPayment\">
                  <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminPayment&amp;token=4b98e2988147ad3cf94038a4f67b5c5e\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Paiement
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminPayment\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminPayment&amp;token=4b98e2988147ad3cf94038a4f67b5c5e\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminPaymentPreferences&amp;token=3af126e4bef28f40d61fcec13acd1dd5\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\" id=\"subtab-AdminInternational\">
                  <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminLocalization&amp;token=ee075adee55873a47032f0fd4ab1ae51\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    International
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminLocalization&amp;token=ee075adee55873a47032f0fd4ab1ae51\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminZones&amp;token=9eae691b9d52d0fed5f527d99984ea2e\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminTaxes&amp;token=9de6253a37d8acea0d1fef3b74331aaa\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminTranslations\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminTranslations&amp;token=8c1e5bb41c5bc6d35f4d638961935a7d\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"73\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\" id=\"subtab-ShopParameters\">
                  <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminPreferences&amp;token=ca33208bccb873dfab90be62596ff19b\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Paramètres de la boutique
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminPreferences&amp;token=ca33208bccb873dfab90be62596ff19b\" class=\"link\"> Paramètres généraux
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminOrderPreferences&amp;token=98384b391167a3353930e9747266bd23\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminPPreferences\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminPPreferences&amp;token=027e029db25d2e12d8d9c4e23d44c0a2\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminCustomerPreferences&amp;token=838d94105b579b35e4373f219eab71fd\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminContacts&amp;token=3d3d8de07aad17277676187a3cb6e1e9\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentMeta\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminMeta&amp;token=aea9722280f29184735905fb3cd89052\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminSearchConf&amp;token=fc3826357a194c34cedd6700f37ead9c\" class=\"link\"> Rechercher
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\" id=\"subtab-AdminGamification\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminGamification&amp;token=1b6ec328eaefcb2d27cfe3cb79c50abb\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin357xfcm9i/index.php/configure/advanced/system_information?_token=4s0MfsQBObaXYtDsK8Pvkh6ancQI8iHiXve1RrVi2iw\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Paramètres avancés
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin357xfcm9i/index.php/configure/advanced/system_information?_token=4s0MfsQBObaXYtDsK8Pvkh6ancQI8iHiXve1RrVi2iw\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin357xfcm9i/index.php/configure/advanced/performance?_token=4s0MfsQBObaXYtDsK8Pvkh6ancQI8iHiXve1RrVi2iw\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminAdminPreferences&amp;token=f32c0c95f8ca46230f851f88228acaea\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminEmails\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminEmails&amp;token=5a49d0c85c18bc205f55816ce9040a70\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\" id=\"subtab-AdminImport\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminImport&amp;token=621e3c25b01c752be6b54d582c8870e7\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminEmployees&amp;token=028b25252fbc92c42ea8eaf06dd76df2\" class=\"link\"> Équipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminRequestSql&amp;token=b27a5d5bc9ce423f7a27aab602f47022\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminLogs\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminLogs&amp;token=af757034ddab026f0f700689a9bb0c7f\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminWebservice&amp;token=5583ef296db442d35628f7478ce58840\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse d-none d-md-block\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <nav class=\"breadcrumb\">

                        <a class=\"breadcrumb-item\" href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminParentModulesSf&amp;token=5735fa5027a578824b6e8a4598dae3ed\">Modules</a>
              
      
    </nav>
  

  
    <h2 class=\"title\">
      Gérer les modules installés    </h2>
  

  
    <div class=\"toolbar-icons\">
      
                        
          <a
            class=\"mx-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add_module\"
            href=\"#\"            title=\"Installer un module\"            data-toggle=\"pstooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">cloud_upload</i>
            <span class=\"title\">Installer un module</span>
          </a>
                                
          <a
            class=\"mx-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-addons_connect\"
            href=\"#\"            title=\"Se connecter à la marketplace Addons\"            data-toggle=\"pstooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">vpn_key</i>
            <span class=\"title\">Se connecter à la marketplace Addons</span>
          </a>
                          
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Aide\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/admin357xfcm9i/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D1.7.3.3%2526country%253Dfr/Aide?_token=4s0MfsQBObaXYtDsK8Pvkh6ancQI8iHiXve1RrVi2iw\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Aide</span>
          </a>
                  </div>
  
        <div class=\"page-head-tabs\" id=\"head_tabs\">
                <a class=\"tab\"
   href=\"/admin357xfcm9i/index.php/module/catalog?_token=4s0MfsQBObaXYtDsK8Pvkh6ancQI8iHiXve1RrVi2iw\">Sélection</a>

                <a class=\"tab current\"
   href=\"/admin357xfcm9i/index.php/module/manage?_token=4s0MfsQBObaXYtDsK8Pvkh6ancQI8iHiXve1RrVi2iw\">Modules installés</a>

                <a class=\"tab\"
   href=\"/admin357xfcm9i/index.php/module/notifications?_token=4s0MfsQBObaXYtDsK8Pvkh6ancQI8iHiXve1RrVi2iw\">Notifications  <div class=\"notification-container\">
    <span class=\"notification-counter\">6</span>
  </div>
  </a>

            </div>
      
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=laurentngu%40gmail.com&amp;firstname=Laurent&amp;lastname=Nguyen&amp;website=http%3A%2F%2F127.0.0.1%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin357xfcm9i/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=laurentngu%40gmail.com&amp;firstname=Laurent&amp;lastname=Nguyen&amp;website=http%3A%2F%2F127.0.0.1%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
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

    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1116
        $this->displayBlock('content_header', $context, $blocks);
        // line 1117
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1118
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1119
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1120
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://127.0.0.1/admin357xfcm9i/index.php?controller=AdminDashboard&amp;token=cd1e3709e8786d4f3d435546cdf3e9a6\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=laurentngu%40gmail.com&amp;firstname=Laurent&amp;lastname=Nguyen&amp;website=http%3A%2F%2F127.0.0.1%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin357xfcm9i/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=laurentngu%40gmail.com&amp;firstname=Laurent&amp;lastname=Nguyen&amp;website=http%3A%2F%2F127.0.0.1%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
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
        // line 1228
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 84
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1116
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1117
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1118
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1119
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1228
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
        return "__string_template__e6109f8c3227b2b7f1232deab101f581d4757d548eda349d832ca4d2cc212954";
    }

    public function getDebugInfo()
    {
        return array (  1307 => 1228,  1302 => 1119,  1297 => 1118,  1292 => 1117,  1287 => 1116,  1278 => 84,  1270 => 1228,  1160 => 1120,  1157 => 1119,  1154 => 1118,  1151 => 1117,  1149 => 1116,  113 => 84,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__e6109f8c3227b2b7f1232deab101f581d4757d548eda349d832ca4d2cc212954", "");
    }
}
