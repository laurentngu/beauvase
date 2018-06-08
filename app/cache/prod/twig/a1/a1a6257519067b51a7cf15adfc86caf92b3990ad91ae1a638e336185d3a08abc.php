<?php

/* @PrestaShop/Admin/Product/form.html.twig */
class __TwigTemplate_8d7d3b6f87164db4fe9c11281a286ef77a9b24a3bbd0bd99452e3fb3917d74ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/form.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            '__internal_983c99b8025a31827bb35fdd07de228d59c1815ed84bf8b90e32ff63e4b159ac' => array($this, 'block___internal_983c99b8025a31827bb35fdd07de228d59c1815ed84bf8b90e32ff63e4b159ac'),
            '__internal_b0088be42fc3079c74e8c2fa3b19fad7c343b1e17520c4f6127ec883a6ab4c25' => array($this, 'block___internal_b0088be42fc3079c74e8c2fa3b19fad7c343b1e17520c4f6127ec883a6ab4c25'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1253
        $context["js_translatable"] = twig_array_merge(array("Are you sure to disable variations ? they will all be deleted" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will delete all the combinations. Do you wish to proceed?", array(), "Admin.Catalog.Notification")),         // line 1255
($context["js_translatable"] ?? null));
        // line 1257
        $context["js_translatable"] = twig_array_merge(array("Form update success" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings updated.", array(), "Admin.Notifications.Success"), "Form update errors" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unable to update settings.", array(), "Admin.Notifications.Error"), "Delete" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", array(), "Admin.Actions"), "ToLargeFile" => twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The file is too large. Maximum size allowed is: [1]. The file you are trying to upload is [2].", array(), "Admin.Notifications.Error"), array("[1]" => "{{maxFilesize}}", "[2]" => "{{filesize}}")), "Drop images here" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop images here", array(), "Admin.Catalog.Feature"), "or select files" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or select files", array(), "Admin.Catalog.Feature"), "files recommandations" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Recommended size 800 x 800px for default theme.", array(), "Admin.Catalog.Feature"), "files recommandations2" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("JPG, GIF or PNG format.", array(), "Admin.Catalog.Feature"), "Cover" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cover", array(), "Admin.Catalog.Feature"), "Are you sure to delete this?" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure to delete this?", array(), "Admin.Notifications.Warning"), "This will delete the specific price. Do you wish to proceed?" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will delete the specific price. Do you wish to proceed?", array(), "Admin.Catalog.Notification"), "Quantities" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", array(), "Admin.Catalog.Feature"), "Combinations" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", array(), "Admin.Catalog.Feature"), "Virtual product" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Virtual product", array(), "Admin.Catalog.Feature"), "tax incl." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tax incl.", array(), "Admin.Catalog.Feature"), "tax excl." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tax excl.", array(), "Admin.Catalog.Feature"), "You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A pack of products can't have combinations.", array(), "Admin.Catalog.Notification") . " ") . $this->getAttribute(        // line 1274
($context["js_translatable"] ?? null), "Are you sure to disable variations ? they will all be deleted", array(), "array")), "You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A virtual product can't have combinations.", array(), "Admin.Catalog.Notification") . " ") . $this->getAttribute(        // line 1275
($context["js_translatable"] ?? null), "Are you sure to disable variations ? they will all be deleted", array(), "array"))),         // line 1276
($context["js_translatable"] ?? null));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "
  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row justify-content-md-center\" novalidate=\"novalidate\">

    ";
        // line 31
        if ( !($context["editable"] ?? null)) {
            echo " <fieldset disabled id=\"field-disabled\"> ";
        }
        // line 32
        echo "    ";
        // line 33
        echo "    <div class=\"product-header col-md-12\">
      <div class=\"row justify-content-md-center\">
      ";
        // line 35
        if (($context["is_multishop_context"] ?? null)) {
            // line 36
            echo "        <div class=\"col-md-10\">
          <div class=\"alert alert-warning\" role=\"alert\">
            <p class=\"alert-text\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are in a multistore context: any modification will impact all your shops, or each shop of the active group.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "</p>
          </div>
        </div>
      ";
        }
        // line 42
        echo "
      <div class=\"col-md-10\">
        <div class=\"row\">
          <div class=\"col-md-7 big-input ";
        // line 45
        echo ((($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_FORCE_FRIENDLY_PRODUCT") == 1)) ? ("friendly-url-force-update") : (""));
        echo "\" id=\"form_step1_names\">
            ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "name", array()), 'widget');
        echo "
          </div>
          <div class=\"col-md-2 form_step1_type_product\">
            ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "type_product", array()), 'widget');
        echo "
            <span class=\"help-box pull-xs-right\" data-toggle=\"popover\"
              data-content=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Is the product a pack (a combination of at least two existing products), a virtual product (downloadable file, service, etc.), or simply a standard, physical product?", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"></span>
          </div>
          <div class=\"col-md-1 form_switch_language\">
            <div class=\"";
        // line 54
        echo (((twig_length_filter($this->env, ($context["languages"] ?? null)) == 1)) ? ("hide") : (""));
        echo "\">
              <select id=\"form_switch_language\" class=\"custom-select\">
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 57
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "iso_code", array()), "html", null, true);
            echo "\" ";
            if ((($context["default_language_iso"] ?? null) == $this->getAttribute($context["language"], "iso_code", array()))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "iso_code", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "              </select>
            </div>
          </div>
          <div class=\"toolbar col-md-2 text-md-right\">
            <a class=\"toolbar-button btn-sales\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["stats_link"] ?? null), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sales", array(), "Admin.Global"), "html", null, true);
        echo "\"
               id=\"product_form_go_to_sales\">
              <i class=\"material-icons\">assessment</i>
              <span class=\"title\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sales", array(), "Admin.Global"), "html", null, true);
        echo "</span>
            </a>

            <a
              class=\"toolbar-button btn-quicknav btn-sidebar\"
              href=\"#\"
              title=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quick navigation", array(), "Admin.Global"), "html", null, true);
        echo "\"
              data-toggle=\"sidebar\"
              data-target=\"#right-sidebar\"
              data-url=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_list", array("limit" => "last", "offset" => "last", "view" => "quicknav")), "html", null, true);
        echo "\"
              id=\"product_form_open_quicknav\"
            >
              <i class=\"material-icons\">list</i>
              <span class=\"title\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product list", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
            </a>

            <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
               title=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Help", array(), "Admin.Global"), "html", null, true);
        echo "\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["help_link"] ?? null), "html", null, true);
        echo "\"
               id=\"product_form_open_help\"
            >
              <i class=\"material-icons\">help</i>
              <span class=\"title\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Help", array(), "Admin.Global"), "html", null, true);
        echo "</span>
            </a>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-12\">
            ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "name", array()), 'errors');
        echo "
            ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "type_product", array()), 'errors');
        echo "
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class=\"col-md-10\">
      <div id=\"form_bubbling_errors\">
        ";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
      </div>
    </div>

    ";
        // line 111
        echo "    <div id=\"form-loading\" class=\"col-md-10\">
      <div class=\"tabs js-tabs\">
        <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
          <li id=\"tab_step1\" class=\"nav-item\"><a href=\"#step1\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Basic settings", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
          <li id=\"tab_step3\" class=\"nav-item\"><a href=\"#step3\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
          <li id=\"tab_step4\" class=\"nav-item\"><a href=\"#step4\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
          <li id=\"tab_step2\" class=\"nav-item\"><a href=\"#step2\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pricing", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
          <li id=\"tab_step5\" class=\"nav-item\"><a href=\"#step5\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SEO", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
          <li id=\"tab_step6\" class=\"nav-item\"><a href=\"#step6\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Options", array(), "Admin.Global"), "html", null, true);
        echo "</a></li>
          ";
        // line 120
        if (($this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->hookCount("displayAdminProductsExtra") > 0)) {
            // line 121
            echo "            <li id=\"tab_hooks\" class=\"nav-item\"><a href=\"#hooks\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modules", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</a></li>
          ";
        }
        // line 123
        echo "        </ul>
        <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
          <i class=\"material-icons hide\">chevron_left</i>
        </div>
        <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
          <i class=\"material-icons hide\">chevron_right</i>
        </div>
      </div>
      <div id=\"form_content\" class=\"tab-content\">

        ";
        // line 134
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane active\" id=\"step1\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  ";
        // line 141
        echo "                  <div class=\"col-md-9 left-column\">

                    <div id=\"js_form_step1_inputPackItems\">
                      ";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "inputPackItems", array()), 'errors');
        echo "
                      ";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "inputPackItems", array()), 'widget');
        echo "
                    </div>

                    <div id=\"product-images-container\" class=\"mb-4\">
                      <div id=\"product-images-dropzone\" class=\"panel dropzone ui-sortable col-md-12\"
                           url-upload=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_upload", array("idProduct" => ($context["id_product"] ?? null))), "html", null, true);
        echo "\"
                           url-position=\"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_positions");
        echo "\"
                           data-max-size=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_LIMIT_UPLOAD_IMAGE_VALUE"), "html", null, true);
        echo "\"
                      >
                        <div id=\"product-images-dropzone-error\" class=\"text-danger\"></div>
                        <div class=\"dz-default dz-message openfilemanager\">
                            <i class=\"material-icons\">add_a_photo</i><br/>
                            ";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute(($context["js_translatable"] ?? null), "Drop images here", array(), "array"), "html", null, true);
        echo "<br/>
                            <a>";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute(($context["js_translatable"] ?? null), "or select files", array(), "array"), "html", null, true);
        echo "</a><br/>
                            <small>
                                ";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute(($context["js_translatable"] ?? null), "files recommandations", array(), "array"), "html", null, true);
        echo "<br/>
                                ";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute(($context["js_translatable"] ?? null), "files recommandations2", array(), "array"), "html", null, true);
        echo "
                            </small>
                        </div>
                        ";
        // line 164
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "images", array(), "any", true, true)) {
            // line 165
            echo "                            ";
            if (($context["editable"] ?? null)) {
                // line 166
                echo "                                <div class=\"dz-preview disabled openfilemanager\">
                                    <div><span>+</span></div>
                                </div>
                            ";
            }
            // line 170
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "vars", array()), "value", array()), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 171
                echo "                            <div class=\"dz-preview dz-processing dz-image-preview dz-complete ui-sortable-handle\"
                                 data-id=\"";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                echo "\"
                                 url-delete=\"";
                // line 173
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_delete", array("idImage" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
                echo "\"
                                 url-update=\"";
                // line 174
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_form", array("idImage" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
                echo "\"
                            >
                              <div class=\"dz-image bg\" style=\"background-image: url('";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "base_image_url", array()), "html", null, true);
                echo "-home_default.";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "format", array()), "html", null, true);
                echo "');\"></div>
                              <div class=\"dz-details\">
                                <div class=\"dz-size\"><span data-dz-size=\"\"></span></div>
                                <div class=\"dz-filename\"><span data-dz-name=\"\"></span></div>
                              </div>
                              <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress=\"\" style=\"width: 100%;\"></span></div>
                              <div class=\"dz-error-message\"><span data-dz-errormessage=\"\"></span></div>
                              <div class=\"dz-success-mark\"></div>
                              <div class=\"dz-error-mark\"></div>
                              ";
                // line 185
                if ($this->getAttribute($context["image"], "cover", array())) {
                    // line 186
                    echo "                                <div class=\"iscover\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cover", array(), "Admin.Catalog.Feature"), "html", null, true);
                    echo "</div>
                              ";
                }
                // line 188
                echo "                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                        ";
        }
        // line 191
        echo "                      </div>
                      <div id=\"product-images-form-container\" class=\"col-md-4\">
                        <div id=\"product-images-form\"></div>
                      </div>
                      <div class=\"dropzone-expander text-sm-center col-md-12\">
                        <span class=\"expand\">";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View all images", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
                        <span class=\"compress\">";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View less", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
                      </div>

                    </div>

                    <div class=\"summary-description-container\">
                      <ul class=\"nav nav-tabs bordered\">
                        <li id=\"tab_description_short\" class=\"nav-item\"><a href=\"#description_short\" data-toggle=\"tab\" class=\"nav-link description-tab active\">";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Summary", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
                        <li id=\"tab_description\" class=\"nav-item\"><a href=\"#description\" data-toggle=\"tab\" class=\"nav-link description-tab\">";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", array(), "Admin.Global"), "html", null, true);
        echo "</a></li>
                      </ul>

                      <div class=\"tab-content bordered\">
                        <div class=\"tab-pane panel panel-default active\" id=\"description_short\">
                          ";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "description_short", array()), 'widget');
        echo "
                        </div>
                        <div class=\"tab-pane panel panel-default \" id=\"description\">
                          ";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "description", array()), 'widget');
        echo "
                        </div>
                      </div>
                    </div>

                    ";
        // line 218
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsMainStepLeftColumnMiddle", array("id_product" => ($context["id_product"] ?? null)));
        echo "

                    <div id=\"features\" class=\"mb-3\">
                      <div id=\"features-content\" class=\"content ";
        // line 221
        echo (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "features", array())) == 0)) ? ("hide") : (""));
        echo "\">
                        <h2>";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Features", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                        ";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "features", array()), 'errors');
        echo "
                        <div
                          class=\"feature-collection nostyle\"
                          data-prototype=\"";
        // line 226
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_983c99b8025a31827bb35fdd07de228d59c1815ed84bf8b90e32ff63e4b159ac", $context, $blocks));
        // line 228
        echo "\"
                        >
                          ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "features", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 231
            echo "                            ";
            echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_feature.html.twig", array("form" => $context["feature"]));
            echo "
                          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "                        </div>
                      </div>
                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <button type=\"button\" class=\"btn btn-outline-primary sensitive add\" id=\"add_feature_button\"><i class=\"material-icons\">add_circle</i> ";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a feature", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
                        </div>
                      </div>
                    </div>

                    <div id=\"manufacturer\" class=\"mb-3\">
                      ";
        // line 243
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_manufacturer.html.twig", array("form" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "id_manufacturer", array())));
        echo "
                    </div>

                    <div id=\"related-product\" class=\"mb-3\">
                      ";
        // line 247
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_related_products.html.twig", array("form" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "related_products", array())));
        echo "
                    </div>

                    ";
        // line 250
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsMainStepLeftColumnBottom", array("id_product" => ($context["id_product"] ?? null)));
        echo "

                  </div>

                  ";
        // line 255
        echo "                  <div class=\"col-md-3 right-column\">

                      <div class=\"row\">
                        <div class=\"col-md-12\">

                          ";
        // line 260
        if (($context["is_combination_active"] ?? null)) {
            // line 261
            echo "                            <div class=\"form-group mb-3\" id=\"show_variations_selector\">
                              <h2>
                                ";
            // line 263
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                                <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
            // line 265
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. Does your product require combinations?", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\" ></span>
                              </h2>
                              <div class=\"radio\">
                                <label>
                                  <input type=\"radio\" name=\"show_variations\" value=\"0\" ";
            // line 269
            if ( !($context["has_combinations"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo ">
                                  ";
            // line 270
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Simple product", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                                </label>
                              </div>
                              <div class=\"radio\">
                                <label>
                                  <input type=\"radio\" name=\"show_variations\" value=\"1\" ";
            // line 275
            if (($context["has_combinations"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo ">
                                  ";
            // line 276
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product with combinations", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                                </label>
                                <div id=\"product_type_combinations_shortcut\">
                                  <span class=\"small font-secondary\">
                                    ";
            // line 281
            echo "                                    ";
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advanced settings in [1][2]Combinations[/1]", array(), "Admin.Catalog.Help"), array("[1]" => "<a href=\"#tab-step3\" onclick=\"\$('a[href=\\'#step3\\']').tab('show');\" class=\"btn sensitive px-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"));
            echo "
                                  </span>
                                </div>
                              </div>
                            </div>
                          ";
        }
        // line 287
        echo "
                          <div class=\"form-group mb-4\">
                            <h2>
                              ";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your reference code for this product. Allowed special characters: .-_#.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            </h2>
                            ";
        // line 294
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "reference", array()), 'errors');
        echo "
                            <div class=\"row\">
                              <div class=\"col-xl-12 col-lg-12\" id=\"product_reference_field\">
                                  ";
        // line 297
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "reference", array()), 'widget');
        echo "
                              </div>
                            </div>
                          </div>

                          ";
        // line 302
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 303
            echo "                            <div class=\"form-group mb-4\" id=\"product_qty_0_shortcut_div\">
                              <h2>
                                ";
            // line 305
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                                <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
            // line 307
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How many products should be available for sale?", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\" ></span>
                              </h2>
                              ";
            // line 309
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "qty_0_shortcut", array()), 'errors');
            echo "
                              <div class=\"row\">
                                <div class=\"col-xl-6 col-lg-12\">
                                  ";
            // line 312
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "qty_0_shortcut", array()), 'widget');
            echo "
                                </div>
                              </div>
                              <span class=\"small font-secondary\">
                                ";
            // line 317
            echo "                                ";
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advanced settings in [1][2]Quantities[/1]", array(), "Admin.Catalog.Help"), array("[1]" => "<a href=\"#tab-step3\" onclick=\"\$('a[href=\\'#step3\\']').tab('show');\" class=\"btn sensitive px-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"));
            echo "
                              </span>
                            </div>
                          ";
        }
        // line 321
        echo "
                          <div class=\"form-group mb-4\">
                            <h2>
                              ";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price", array(), "Admin.Global"), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the retail price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            </h2>
                            <div class=\"row\">
                              <div class=\"col-md-6\">
                                <label class=\"form-control-label\">";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax excluded", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 331
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "price_shortcut", array()), 'widget');
        echo "
                                ";
        // line 332
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "price_shortcut", array()), 'errors');
        echo "
                              </div>
                              <div class=\"col-md-6 col-offset-md-1\">
                                <label class=\"form-control-label\">";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax included", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 336
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "price_ttc_shortcut", array()), 'widget');
        echo "
                                ";
        // line 337
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "price_ttc_shortcut", array()), 'errors');
        echo "
                              </div>
                              <div class=\"col-md-12 mt-1\">
                                <label class=\"form-control-label\">";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax rule", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 341
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PrestaShopBundle:Admin/Product:renderField", array("productId" => ($context["id_product"] ?? null), "step" => "step2", "fieldName" => "id_tax_rules_group")));
        echo "
                              </div>
                              <div class=\"col-md-12\">
                                <span class=\"small font-secondary\">
                                  ";
        // line 346
        echo "                                  ";
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advanced settings in [1][2]Pricing[/1]", array(), "Admin.Catalog.Help"), array("[1]" => "<a href=\"#tab-step2\" onclick=\"\$('a[href=\\'#step2\\']').tab('show');\" class=\"btn sensitive px-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"));
        echo "
                                </span>
                              </div>
                            </div>
                            <div class=\"row hide\">
                              <div class=\"col-md-12\">
                                <label>";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax rule", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                              </div>
                              <div class=\"clearfix\"></div>
                              <div class=\"col-md-11\" id=\"tax_rule_shortcut\">
                              </div>
                              <a href=\"#\" onclick=\"\$(this).parent().hide()\">&times;</a>
                            </div>
                          </div>

                          <div class=\"form-group mb-4\" id=\"categories\">
                            ";
        // line 362
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form-categories.html.twig", array("form" => $this->getAttribute(($context["form"] ?? null), "step1", array()), "productId" => ($context["id_product"] ?? null)));
        echo "
                          </div>

                          ";
        // line 365
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsMainStepRightColumnBottom", array("id_product" => ($context["id_product"] ?? null)));
        echo "

                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 377
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step3\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">

                    <div id=\"quantities\" style=\"";
        // line 385
        if ((($context["has_combinations"] ?? null) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "depends_on_stock", array()), "vars", array()), "value", array()) != "0"))) {
            echo "display: none;";
        }
        echo "\">
                      <h2>";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                      <fieldset class=\"form-group\">
                        <div class=\"row\">
                          ";
        // line 389
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 390
            echo "                            <div class=\"col-md-4\">
                              <label class=\"form-control-label\">";
            // line 391
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "qty_0", array()), "vars", array()), "label", array()), "html", null, true);
            echo "</label>
                              ";
            // line 392
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "qty_0", array()), 'errors');
            echo "
                              ";
            // line 393
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "qty_0", array()), 'widget');
            echo "
                            </div>
                          ";
        }
        // line 396
        echo "                          <div class=\"col-md-4\">
                            <label class=\"form-control-label\">";
        // line 397
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "minimal_quantity", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            ";
        // line 400
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "minimal_quantity", array()), 'errors');
        echo "
                            ";
        // line 401
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "minimal_quantity", array()), 'widget');
        echo "
                          </div>
                        </div>
                      </fieldset>

                      <h2>";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock alerts", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                      <fieldset class=\"form-group\">
                        <div class=\"row\">
                          <div class=\"col-md-4\">
                            <label class=\"form-control-label\">";
        // line 410
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "low_stock_threshold", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            ";
        // line 411
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "low_stock_threshold", array()), 'errors');
        echo "
                            ";
        // line 412
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "low_stock_threshold", array()), 'widget');
        echo "
                          </div>
                          <div class=\"col-md-8\">
                            <label class=\"form-control-label\">&nbsp;</label>
                            <div class=\"widget-checkbox-inline\">
                              ";
        // line 417
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "low_stock_alert", array()), 'errors');
        echo "
                              ";
        // line 418
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "low_stock_alert", array()), 'widget');
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\" data-html=\"true\" data-content=\"";
        // line 419
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]", array("[1]" => (("<a href=&quot;" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminEmployees")) . "&quot;>"), "[/1]" => "</a>"), "Admin.Catalog.Help");
        echo "\" ></span>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </div>

                    <div id=\"virtual_product\" data-action=\"";
        // line 426
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_save_action", array("idProduct" => 1));
        echo "\" data-action-remove=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_remove_action", array("idProduct" => 1));
        echo "\">

                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <h2>";
        // line 430
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</h2>
                        </div>
                        <div class=\"col-md-8\">
                          <fieldset class=\"form-group\">
                            ";
        // line 434
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "is_virtual_file", array()), 'widget');
        echo "
                          </fieldset>
                        </div>
                      </div>

                      <div id=\"virtual_product_content\" class=\"row col-md-8\">
                        ";
        // line 440
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), 'errors');
        echo "
                        <div class=\"col-md-12\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 443
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "file", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload a file from your computer (%maxUploadSize% max.)", array("%maxUploadSize%" => ($context["max_upload_size"] ?? null)), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            <div id=\"form_step3_virtual_product_file_input\" class=\"";
        // line 446
        echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array(), "any", false, true), "virtual_product", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "filename", array(), "any", true, true)) ? ("hide") : ("show"));
        echo "\">
                              ";
        // line 447
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "file", array()), 'widget');
        echo "
                            </div>
                            <div id=\"form_step3_virtual_product_file_details\" class=\"";
        // line 449
        echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array(), "any", false, true), "virtual_product", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "filename", array(), "any", true, true)) ? ("show") : ("hide"));
        echo "\">
                              <a href=\"";
        // line 450
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array(), "any", false, true), "virtual_product", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "file_download_link", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "vars", array()), "value", array()), "file_download_link", array())) : ("")), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm download\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download file", array(), "Admin.Actions"), "html", null, true);
        echo "</a>
                              <a href=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_remove_file_action", array("idProduct" => ($context["id_product"] ?? null))), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm delete\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete this file", array(), "Admin.Actions"), "html", null, true);
        echo "</a>
                            </div>
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 457
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "name", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The full filename with its extension (e.g. Book.pdf)", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            ";
        // line 460
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "name", array()), 'errors');
        echo "
                            ";
        // line 461
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "name", array()), 'widget');
        echo "
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 466
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "nb_downloadable", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of downloads allowed per customer. Set to 0 for unlimited downloads.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            ";
        // line 469
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "nb_downloadable", array()), 'errors');
        echo "
                            ";
        // line 470
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "nb_downloadable", array()), 'widget');
        echo "
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 475
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "expiration_date", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If set, the file will not be downloadable after this date. Leave blank if you do not wish to attach an expiration date.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            ";
        // line 478
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "expiration_date", array()), 'errors');
        echo "
                            ";
        // line 479
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "expiration_date", array()), 'widget');
        echo "
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 484
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "nb_days", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of days this file can be accessed by customers. Set to zero for unlimited access.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            ";
        // line 487
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "nb_days", array()), 'errors');
        echo "
                            ";
        // line 488
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "nb_days", array()), 'widget');
        echo "
                          </fieldset>
                        </div>
                        <div class=\"col-md-12\">
                          ";
        // line 492
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "virtual_product", array()), "save", array()), 'widget');
        echo "
                        </div>
                      </div>
                    </div>

                    ";
        // line 497
        if ((($context["asm_globally_activated"] ?? null) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "type_product", array()), "vars", array()), "value", array()) != "2"))) {
            // line 498
            echo "                      <div class=\"form-group\" id=\"asm_quantity_management\">
                        <label class=\"col-sm-2 control-label\" for=\"form_step3_advanced_stock_management\"></label>
                        <div class=\"col-sm-10\">
                          ";
            // line 501
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "advanced_stock_management", array()), 'errors');
            echo "
                          ";
            // line 502
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "advanced_stock_management", array()), 'widget');
            echo "
                          ";
            // line 503
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "type_product", array()), "vars", array()), "value", array()) == "1")) {
                // line 504
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When enabling advanced stock management for a pack, please make sure it is also enabled for its product(s) – if you choose to decrement product quantities.", array(), "Admin.Catalog.Notification"), "html", null, true);
                echo "
                          ";
            }
            // line 506
            echo "                        </div>
                      </div>
                      <div class=\"form-group\" id=\"depends_on_stock_div\" style=\"";
            // line 508
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "advanced_stock_management", array()), "vars", array()), "checked", array())) {
                echo "display: none;";
            }
            echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"form_step3_depends_on_stock\"></label>
                        <div class=\"col-sm-10\">
                          ";
            // line 511
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "depends_on_stock", array()), 'errors');
            echo "
                          ";
            // line 512
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "depends_on_stock", array()), 'widget');
            echo "
                        </div>
                      </div>
                    ";
        }
        // line 516
        echo "                    ";
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 517
            echo "                      <div id=\"pack_stock_type\">
                        <h2>";
            // line 518
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "pack_stock_type", array()), "vars", array()), "label", array()), "html", null, true);
            echo "</h2>
                        <div class=\"row col-md-4\">
                          <fieldset class=\"form-group\">
                            ";
            // line 521
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "pack_stock_type", array()), 'errors');
            echo "
                            ";
            // line 522
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "pack_stock_type", array()), 'widget');
            echo "
                          </fieldset>
                        </div>
                      </div>
                    ";
        }
        // line 527
        echo "                    ";
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_combinations.html.twig", array("form" => $this->getAttribute(($context["form"] ?? null), "step3", array()), "form_combination_bulk" => ($context["formCombinations"] ?? null)));
        echo "

                    ";
        // line 529
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsQuantitiesStepBottom", array("id_product" => ($context["id_product"] ?? null)));
        echo "

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 539
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">
                  ";
        // line 544
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig", array("form" => $this->getAttribute(        // line 545
($context["form"] ?? null), "step4", array()), "asm_globally_activated" =>         // line 546
($context["asm_globally_activated"] ?? null), "isNotVirtual" => ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 547
($context["form"] ?? null), "step1", array()), "type_product", array()), "vars", array()), "value", array()) != "2"), "isChecked" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 548
($context["form"] ?? null), "step3", array()), "advanced_stock_management", array()), "vars", array()), "checked", array()), "warehouses" =>         // line 549
($context["warehouses"] ?? null)));
        // line 550
        echo "
                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 558
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step2\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">
                    <h2>";
        // line 565
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Retail price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    </h2>
                  </div>

                  <div class=\"col-md-12 form-group\">
                    <div class=\"row\">

                      <div class=\"col-xl-2 col-lg-3\">
                        <label class=\"form-control-label\">";
        // line 575
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "price", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                        ";
        // line 576
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "price", array()), 'errors');
        echo "
                        ";
        // line 577
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "price", array()), 'widget');
        echo "
                      </div>
                      <div class=\"col-xl-2 col-lg-3\">
                        <label class=\"form-control-label\">";
        // line 580
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "price_ttc", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                        ";
        // line 581
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "price_ttc", array()), 'errors');
        echo "
                        ";
        // line 582
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "price_ttc", array()), 'widget');
        echo "
                      </div>

                      <div class=\"col-xl-4 col-lg-6 mx-auto\">
                        <label class=\"form-control-label\">
                          ";
        // line 587
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "unit_price", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 589
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Some products can be purchased by unit (per bottle, per pound, etc.),  and this is the price for one unit. For instance, if you’re selling fabrics, it would be the price per meter.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </label>
                        <div class=\"row\">
                          <div class=\"col-md-6\">
                            ";
        // line 593
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "unit_price", array()), 'errors');
        echo "
                            ";
        // line 594
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "unit_price", array()), 'widget');
        echo "
                          </div>
                          <div class=\"col-md-6\">
                            ";
        // line 597
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "unity", array()), 'errors');
        echo "
                            ";
        // line 598
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "unity", array()), 'widget');
        echo "
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-2 col-md-offset-1 ";
        // line 602
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_USE_ECOTAX") != 1)) {
            echo "hide";
        }
        echo "\">
                        <label class=\"form-control-label\">";
        // line 603
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "ecotax", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                        ";
        // line 604
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "ecotax", array()), 'errors');
        echo "
                        ";
        // line 605
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "ecotax", array()), 'widget');
        echo "
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row form-group\">
                      <div class=\"col-md-4\">
                        <label class=\"form-control-label\">";
        // line 613
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "id_tax_rules_group", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                        ";
        // line 614
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "id_tax_rules_group", array()), 'errors');
        echo "
                        ";
        // line 615
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "id_tax_rules_group", array()), 'widget');
        echo "
                      </div>
                      <div class=\"col-md-8\">
                        <label class=\"form-control-label\">&nbsp;</label>
                        <a class=\"form-control-static external-link\" href=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminTaxes"), "html", null, true);
        echo "\">
                          ";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Manage tax rules", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                        </a>
                      </div>
                      <div class=\"col-md-12 pt-1\">
                        ";
        // line 624
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "on_sale", array()), 'widget');
        echo "
                      </div>
                      <div class=\"col-md-12\">
                        <div class=\"row\">
                          <div class=\"col-xl-5 col-lg-12\">
                            <div class=\"alert alert-info mt-2\" role=\"alert\">
                              <p class=\"alert-text\">
                                ";
        // line 631
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Final retail price: [1][2][/2] tax incl.[/1] / [3][/3] tax excl.", array(), "Admin.Catalog.Feature"), array("[1]" => "<strong>", "[/1]" => "</strong>", "[2]" => "<span id=\"final_retail_price_ti\">", "[/2]" => "</span>", "[3]" => "<span id=\"final_retail_price_te\">", "[/3]" => "</span>"));
        echo "
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row mb-3\">
                      <div class=\"col-md-12\">
                        <h2>
                          ";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cost price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The cost price is the price you paid for the product. Do not include the tax. It should be lower than the retail price: the difference between the two will be your margin.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-xl-2 col-lg-3 form-group\">
                        <label class=\"form-control-label\">";
        // line 650
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "wholesale_price", array()), "vars", array()), "label", array());
        echo "</label>
                        ";
        // line 651
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "wholesale_price", array()), 'errors');
        echo "
                        ";
        // line 652
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "wholesale_price", array()), 'widget');
        echo "
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row mb-3\">
                      <div class=\"col-md-12\">
                        <h2>
                          ";
        // line 661
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Specific prices", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can set specific prices for customers belonging to different groups, different countries, etc.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-md-12\">
                        <div id=\"specific-price\" class=\"mb-2\">
                          <a class=\"btn btn-outline-primary mb-3\" data-toggle=\"collapse\" href=\"#specific_price_form\" aria-expanded=\"false\">
                            <i class=\"material-icons\">add_circle</i>
                            ";
        // line 670
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a specific price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                          </a>
                          <table id=\"js-specific-price-list\" class=\"table hide seo-table\" data=\"";
        // line 672
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_specific_price_list", array("idProduct" => 1));
        echo "\" data-action-delete=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_specific_price", array("idSpecificPrice" => 1));
        echo "\">
                            <thead class=\"thead-default\">
                            <tr>
                              <th>";
        // line 675
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Rule", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                              <th>";
        // line 676
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combination", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                              <th>";
        // line 677
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currency", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                              <th>";
        // line 678
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                              <th>";
        // line 679
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Group", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                              <th>";
        // line 680
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                              <th>";
        // line 681
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fixed price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                              <th>";
        // line 682
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Impact", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                              <th>";
        // line 683
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Period", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                              <th>";
        // line 684
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                              <th></th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                        <div class=\"collapse\" id=\"specific_price_form\" data-action=\"";
        // line 691
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_specific_price_add");
        echo "\">
                          ";
        // line 692
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin:Product/Include/form-specific-price.html.twig", array("form" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "specific_price", array()), "is_multishop_context" => ($context["is_multishop_context"] ?? null)));
        echo "
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>
                          ";
        // line 702
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Priority management", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 704
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sometimes one customer can fit into multiple price rules. Priorities allow you to define which rules apply first.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>";
        // line 709
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Priorities", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                          ";
        // line 710
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "specificPricePriority_0", array()), 'errors');
        echo "
                          ";
        // line 711
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "specificPricePriority_0", array()), 'widget');
        echo "
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          ";
        // line 717
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "specificPricePriority_1", array()), 'errors');
        echo "
                          ";
        // line 718
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "specificPricePriority_1", array()), 'widget');
        echo "
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          ";
        // line 724
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "specificPricePriority_2", array()), 'errors');
        echo "
                          ";
        // line 725
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "specificPricePriority_2", array()), 'widget');
        echo "
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          ";
        // line 731
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "specificPricePriority_3", array()), 'errors');
        echo "
                          ";
        // line 732
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "specificPricePriority_3", array()), 'widget');
        echo "
                        </fieldset>
                      </div>
                      <div class=\"col-md-12\">
                        ";
        // line 736
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step2", array()), "specificPricePriorityToAll", array()), 'widget');
        echo "
                      </div>
                    </div>
                  </div>

                  ";
        // line 741
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsPriceStepBottom", array("id_product" => ($context["id_product"] ?? null)));
        echo "

                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 750
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step5\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  ";
        // line 756
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_seo.html.twig", array("form" => $this->getAttribute(($context["form"] ?? null), "step5", array())));
        echo "

                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 765
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step6\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">

                    ";
        // line 773
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsOptionsStepTop", array("id_product" => ($context["id_product"] ?? null)));
        echo "

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>";
        // line 777
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Visibility", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                        <p class=\"subtitle\">";
        // line 778
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Where do you want your product to appear?", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-4 form-group\">
                        ";
        // line 784
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "visibility", array()), 'errors');
        echo "
                        ";
        // line 785
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "visibility", array()), 'widget');
        echo "
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-7 form-group\">
                          ";
        // line 791
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "display_options", array()), 'errors');
        echo "
                          <div class=\"row\">
                            <div class=\"col-md-4 js-available-for-order\">
                              ";
        // line 794
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "display_options", array()), "available_for_order", array()), 'widget');
        echo "
                            </div>
                            <div class=\"col-md-3 js-show-price\">
                              ";
        // line 797
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "display_options", array()), "show_price", array()), 'widget');
        echo "
                            </div>
                            <div class=\"col-md-5\">
                              ";
        // line 800
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "display_options", array()), "online_only", array()), 'widget');
        echo "
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class=\"row form-group\">
                      <div class=\"col-md-8\">
                        <label class=\"form-control-label\">";
        // line 807
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tags", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                        ";
        // line 808
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "tags", array()), 'errors');
        echo "
                        ";
        // line 809
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "tags", array()), 'widget');
        echo "
                        <div class=\"alert expandable-alert alert-info mt-3\" role=\"alert\">
                          <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#tagsInfo\" aria-expanded=\"false\" aria-controls=\"collapseDanger\">
                            ";
        // line 812
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read more", array(), "Admin.Actions");
        echo "
                          </button>
                          <p class=\"alert-text\">";
        // line 814
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tags are meant to help your customers find your products via the search bar.", array(), "Admin.Catalog.Help");
        echo "</p>
                          <div class=\"alert-more collapse\" id=\"tagsInfo\">
                            <p>
                              ";
        // line 817
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose terms and keywords that your customers will use to search for this product and make sure you are consistent with the tags you may have already used.", array(), "Admin.Catalog.Help");
        echo "<br>
                              ";
        // line 818
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can manage tag aliases in the [1]Search section[/1]. If you add new tags, you have to rebuild the index.", array(), "Admin.Catalog.Help"), array("[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminSearchConf")) . "\" target=\"_blank\">"), "[/1]" => "</a>"));
        // line 823
        echo "
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>";
        // line 832
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Condition & References", array(), "Admin.Catalog.Feature");
        echo "</h2>
                      </div>
                    </div>

                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          ";
        // line 839
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "condition", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 841
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not all shops sell new products. This option enables you to indicate the condition of the product. It can be required on some marketplaces.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </label>
                        ";
        // line 843
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "condition", array()), 'errors');
        echo "
                        ";
        // line 844
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "condition", array()), 'widget');
        echo "
                      </fieldset>
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">&nbsp;</label>
                        ";
        // line 848
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "show_condition", array()), 'widget');
        echo "
                      </fieldset>
                    </div>
                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          ";
        // line 854
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "isbn", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 856
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ISBN is used internationally to identify books and their various editions.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </label>
                        ";
        // line 858
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "isbn", array()), 'errors');
        echo "
                        ";
        // line 859
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "isbn", array()), 'widget');
        echo "
                      </fieldset>
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          ";
        // line 863
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "ean13", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 865
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </label>
                        ";
        // line 867
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "ean13", array()), 'errors');
        echo "
                        ";
        // line 868
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "ean13", array()), 'widget');
        echo "
                      </fieldset>
                    </div>
                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          ";
        // line 874
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "upc", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 876
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This type of product code is widely used in the United States, Canada, the United Kingdom, Australia, New Zealand and in other countries.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </label>
                        ";
        // line 878
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "upc", array()), 'errors');
        echo "
                        ";
        // line 879
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "upc", array()), 'widget');
        echo "
                      </fieldset>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <div id=\"custom_fields\" class=\"mt-3\">
                          <h2>";
        // line 886
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "custom_fields", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</h2>
                          <p class=\"subtitle\">";
        // line 887
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customers can personalize the product by entering some text or by providing custom image files.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
                          ";
        // line 888
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "custom_fields", array()), 'errors');
        echo "
                          <ul class=\"customFieldCollection nostyle\" data-prototype=\"
                                      ";
        // line 890
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_b0088be42fc3079c74e8c2fa3b19fad7c343b1e17520c4f6127ec883a6ab4c25", $context, $blocks));
        // line 892
        echo "\">
                            ";
        // line 893
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "custom_fields", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 894
            echo "                              <li>
                                ";
            // line 895
            echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig", array("form" => $context["field"]));
            echo "
                              </li>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 898
        echo "                          </ul>
                          <a href=\"#\" class=\"btn btn-outline-secondary add\">
                            <i class=\"material-icons\">add_circle</i>
                            ";
        // line 901
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a customization field", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class=\"row mt-4\">
                      <div class=\"col-md-8\">
                        <h2>";
        // line 909
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attached files", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                        <p class=\"subtitle\">";
        // line 910
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add files that customers can download directly on the product page (instructions, manual, recipe, etc.).", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
                        ";
        // line 911
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "attachments", array()), 'widget');
        echo "
                      </div>
                    </div>
                    <div class=\"row mt-3\">
                      <div class=\"col-md-8\">
                        <a
                          class=\"btn btn-outline-secondary mb-3\"
                          href=\"#collapsedForm\"
                          data-toggle=\"collapse\"
                          aria-expanded=\"false\"
                          aria-controls=\"collapsedForm\"
                        >
                          <i class=\"material-icons\">add_circle</i>
                          ";
        // line 924
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attach a new file", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                        </a>
                        <fieldset class=\"form-group collapse\" id=\"collapsedForm\">
                          ";
        // line 927
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "attachment_product", array()), 'errors');
        echo "
                          <div id=\"form_step6_attachment_product\" data-action=\"";
        // line 928
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "attachment_product", array()), "vars", array()), "attr", array()), "data-action", array(), "array"), "html", null, true);
        echo "\">
                            <div class=\"form-group\">";
        // line 929
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "attachment_product", array()), "file", array()), 'widget');
        echo "</div>
                            <div class=\"form-group\">";
        // line 930
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "attachment_product", array()), "name", array()), 'widget');
        echo "</div>
                            <div class=\"form-group\">";
        // line 931
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "attachment_product", array()), "description", array()), 'widget');
        echo "</div>
                            <div class=\"form-group\">
                              ";
        // line 933
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "attachment_product", array()), "add", array()), 'widget');
        echo "
                              ";
        // line 934
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "attachment_product", array()), "cancel", array()), 'widget');
        echo "
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>

                    <div class=\"row mt-3\">
                      <div class=\"col-md-8\" id=\"supplier_collection\">
                        ";
        // line 943
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin:Product/Include/form-supplier-choice.html.twig", array("form" => $this->getAttribute(($context["form"] ?? null), "step6", array())));
        echo "
                      </div>
                    </div>
                    <div class=\"row\">
                      <div id=\"supplier_combination_collection\" class=\"col-md-12\" data-url=\"";
        // line 947
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_supplier_refresh_product_supplier_combination_form", array("idProduct" => 1, "supplierIds" => 1)), "html", null, true);
        echo "\">
                        ";
        // line 948
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin:Product/Include/form-supplier-combination.html.twig", array("suppliers" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "suppliers", array()), "vars", array()), "value", array()), "form" => $this->getAttribute(($context["form"] ?? null), "step6", array())));
        echo "
                      </div>
                    </div>

                    ";
        // line 952
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsOptionsStepBottom", array("id_product" => ($context["id_product"] ?? null)));
        echo "

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 962
        echo "        ";
        if (($this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->hookCount("displayAdminProductsExtra") > 0)) {
            // line 963
            echo "          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"container-fluid\">
                  <div class=\"row\">

                    ";
            // line 970
            echo "                    <div class=\"col-md-12\">
                      ";
            // line 971
            $context["hooks"] = $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHooksArray("displayAdminProductsExtra", array("id_product" => ($context["id_product"] ?? null)));
            // line 972
            echo "
                      <div class=\"row module-selection\" style=\"display: none;\">
                        <div class=\"col-md-12 col-lg-7\">
                          ";
            // line 975
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 976
                echo "                            <div class=\"module-render-container module-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "name", array()), "html", null, true);
                echo "\">
                              <div>
                                <img class=\"top-logo\" src=\"";
                // line 978
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "img", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "\">
                                <h2 class=\"text-ellipsis module-name-grid\">
                                  ";
                // line 980
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "
                                </h2>
                                <div class=\"text-ellipsis small-text module-version\">
                                  ";
                // line 983
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "version", array()), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "author", array()), "html", null, true);
                echo "
                                </div>
                              </div>
                              <div class=\"small no-padding\">
                                ";
                // line 987
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "description", array()), "html", null, true);
                echo "
                              </div>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 991
            echo "                        </div>
                        <div class=\"col-md-12 col-lg-5\">
                          <h2>";
            // line 993
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Module to configure", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                          <select class=\"modules-list-select\" data-toggle=\"select2\">
                            ";
            // line 995
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 996
                echo "                              <option value=\"module-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "name", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 998
            echo "                          </select>
                        </div>
                      </div>

                      <div class=\"module-render-container all-modules\">
                        <p>
                          <h2>";
            // line 1004
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose a module to configure", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                          ";
            // line 1005
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These modules are relative to the product page of your shop.", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "<br />
                          ";
            // line 1006
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To manage all your modules go to the [1]Installed module page[/1]", array(), "Admin.Catalog.Feature"), array("[1]" => (("<a href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_manage")) . "\">"), "[/1]" => "</a>"));
            echo "
                        </p>
                        <div class=\"row\">
                          ";
            // line 1009
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 1010
                echo "                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                              <div class=\"module-item-wrapper-grid\">
                                <div class=\"module-item-heading-grid\">
                                  <img class=\"module-logo-thumb-grid\" src=\"";
                // line 1013
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "img", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "\">
                                  <h3 class=\"text-ellipsis module-name-grid\">
                                    ";
                // line 1015
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "
                                  </h3>
                                  <div class=\"text-ellipsis small-text module-version-author-grid\">
                                    ";
                // line 1018
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "version", array()), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "author", array()), "html", null, true);
                echo "
                                  </div>
                                </div>
                                <div class=\"module-quick-description-grid small no-padding\">
                                  ";
                // line 1022
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "description", array()), "html", null, true);
                echo "
                                </div>
                                <div class=\"module-container\">
                                  <div class=\"module-quick-action-grid clearfix\">
                                    <button class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-";
                // line 1026
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
                echo "\">
                                      ";
                // line 1027
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure", array(), "Admin.Actions"), "html", null, true);
                echo "
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1034
            echo "                        </div>
                      </div>

                      ";
            // line 1037
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 1038
                echo "                        <div
                          id=\"module_";
                // line 1039
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
                echo "\"
                          class=\"module-render-container module-";
                // line 1040
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "name", array()), "html", null, true);
                echo "\"
                          style=\"display: none;\"
                        >
                          <div>
                            ";
                // line 1044
                echo $this->getAttribute($context["module"], "content", array());
                echo "
                          </div>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1048
            echo "                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 1056
        echo "
      </div>

      ";
        // line 1059
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "id_product", array()), 'widget');
        echo "
      ";
        // line 1060
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "

    </div>
    ";
        // line 1064
        echo "    <div class=\"product-footer justify-content-md-center\">
      <div class=\"col-lg-5\">
        <a
          href=\"";
        // line 1067
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", array("action" => "delete", "id" => ($context["id_product"] ?? null))), "html", null, true);
        echo "\"
          class=\"tooltip-link btn btn-lg\"
          data-toggle=\"pstooltip\"
          id=\"product_form_delete_btn\"
          title=\"";
        // line 1071
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Permanently delete this product.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
          data-placement=\"left\"
          data-original-title=\"Delete\"
        >
          <i class=\"material-icons\">delete</i>
        </a>
        <a
          href=\"\"
          data-redirect=\"";
        // line 1079
        echo twig_escape_filter($this->env, ($context["preview_link"] ?? null), "html", null, true);
        echo "\"
          data-url-deactive=\"";
        // line 1080
        echo twig_escape_filter($this->env, ($context["preview_link_deactivate"] ?? null), "html", null, true);
        echo "\"
          target=\"_blank\"
          class=\"btn btn-secondary preview\"
          data-toggle=\"pstooltip\"
          id=\"product_form_preview_btn\"
          title=\"";
        // line 1085
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("See how your product sheet will look online: ALT+SHIFT+V", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
         >
          ";
        // line 1087
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Preview", array(), "Admin.Actions"), "html", null, true);
        echo "
        </a>
        ";
        // line 1089
        if (($context["editable"] ?? null)) {
            // line 1090
            echo "        <h2 class=\"for-switch online-title\" ";
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "vars", array()), "value", array()), "active", array())) {
                echo "style=\"display:none;\"";
            }
            echo " data-toggle=\"pstooltip\"
            title=\"";
            // line 1091
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable the product on your shop: ALT+SHIFT+O", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Online", array(), "Admin.Global"), "html", null, true);
            echo "</h2>
        <h2 class=\"for-switch offline-title\" ";
            // line 1092
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "vars", array()), "value", array()), "active", array())) {
                echo "style=\"display:none;\"";
            }
            echo " data-toggle=\"pstooltip\"
            title=\"";
            // line 1093
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable the product on your shop: ALT+SHIFT+O", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Offline", array(), "Admin.Global"), "html", null, true);
            echo "</h2>
        <input
          class=\"switch-input-lg\"
          id=\"form_step1_active\"
          data-toggle=\"switch\"
          type=\"checkbox\"
          name=\"form[step1][active]\"
          value=\"1\"
          ";
            // line 1101
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "vars", array()), "value", array()), "active", array())) ? ("checked=\"checked\"") : (""));
            echo "
        />
        ";
        }
        // line 1104
        echo "      </div>
      <div class=\"col-lg-6 text-lg-right\">
        ";
        // line 1106
        if (($context["is_shop_context"] ?? null)) {
            // line 1107
            echo "          <button
            type=\"button\"
            class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase duplicate ml-3\"
            id=\"product_form_save_duplicate_btn\"
            data-redirect=\"";
            // line 1111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", array("action" => "duplicate", "id" => ($context["id_product"] ?? null))), "html", null, true);
            echo "\"
            data-toggle=\"pstooltip\"
            title=\"";
            // line 1113
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and duplicate this product, then go to the new product: ALT+SHIFT+D", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\"
            >
            ";
            // line 1115
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate", array(), "Admin.Actions");
            echo "
          </button>
        ";
        }
        // line 1118
        echo "        <button
          type=\"button\"
          class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase go-catalog ml-3\"
          id=\"product_form_save_go_to_catalog_btn\"
          data-redirect=\"";
        // line 1122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("offset" => "last", "limit" => "last")), "html", null, true);
        echo "\"
          data-toggle=\"pstooltip\"
          title=\"";
        // line 1124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and go back to the catalog: ALT+SHIFT+Q", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
          >
          ";
        // line 1126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go to catalog", array(), "Admin.Catalog.Feature");
        echo "
        </button>
        <button
          type=\"button\"
          class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase new-product ml-3\"
          id=\"product_form_save_new_btn\"
          data-redirect=\"";
        // line 1132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
          data-toggle=\"pstooltip\"
          title=\"";
        // line 1134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and create a new product: ALT+SHIFT+P", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
          >
          ";
        // line 1136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new product", array(), "Admin.Catalog.Feature");
        echo "
        </button>
        <input
          id=\"submit\"
          type=\"submit\"
          class=\"btn btn-primary save uppercase ml-3\"
          value=\"";
        // line 1142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "\"
          data-toggle=\"pstooltip\"
          title=\"";
        // line 1144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save the product and stay on the current page: ALT+SHIFT+S", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
          />

          <div class=\"js-spinner spinner hide btn-primary-reverse onclick mr-1 btn\"></div>
          <div class=\"btn-group hide dropdown\">
            <button
             class=\"btn btn-primary js-btn-save ml-3\"
             type=\"submit\"
             >
              <span>";
        // line 1153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</span>
            </button><button
              class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"
              type=\"button\"
              id=\"dropdownMenu\"
              data-toggle=\"dropdown\"
              aria-expanded=\"false\"
            >
              <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
              ";
        // line 1164
        if (($context["is_shop_context"] ?? null)) {
            // line 1165
            echo "                <a
                 class=\"dropdown-item duplicate js-btn-save\"
                 href=\"";
            // line 1167
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", array("action" => "duplicate", "id" => ($context["id_product"] ?? null))), "html", null, true);
            echo "\"
                >
                ";
            // line 1169
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate", array(), "Admin.Actions");
            echo "
                </a>
              ";
        }
        // line 1172
        echo "             <a
              class=\"dropdown-item go-catalog js-btn-save\"
              href=\"";
        // line 1174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("offset" => "last", "limit" => "last")), "html", null, true);
        echo "\"
              >
              ";
        // line 1176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go to catalog", array(), "Admin.Catalog.Feature");
        echo "
             </a>
             <a
              class=\"dropdown-item new-product js-btn-save\"
              href=\"";
        // line 1180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
              >
              ";
        // line 1182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new product", array(), "Admin.Catalog.Feature");
        echo "
            </a>
          </div>
        </div>
      </div>
    </div>
    ";
        // line 1188
        if ( !($context["editable"] ?? null)) {
            echo " </fieldset> ";
        }
        // line 1189
        echo "  </form>


  ";
        // line 1192
        $this->loadTemplate("@PrestaShop/Admin/Product/form.html.twig", "@PrestaShop/Admin/Product/form.html.twig", 1192, "454137684")->display(array_merge($context, array("id" => "confirmation_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning", array(), "Admin.Notifications.Warning"), "closable" => false, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No", array(), "Admin.Global"), "class" => "btn btn-outline-secondary btn-lg cancel"), 1 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes", array(), "Admin.Global"), "class" => "btn btn-primary btn-lg continue")))));
        // line 1213
        echo "
";
    }

    // line 226
    public function block___internal_983c99b8025a31827bb35fdd07de228d59c1815ed84bf8b90e32ff63e4b159ac($context, array $blocks = array())
    {
        // line 227
        echo "                            ";
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_feature.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "features", array()), "vars", array()), "prototype", array())));
        echo "
                          ";
    }

    // line 890
    public function block___internal_b0088be42fc3079c74e8c2fa3b19fad7c343b1e17520c4f6127ec883a6ab4c25($context, array $blocks = array())
    {
        // line 891
        echo "                                      ";
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step6", array()), "custom_fields", array()), "vars", array()), "prototype", array())));
        echo "
                                      ";
    }

    // line 1216
    public function block_javascripts($context, array $blocks = array())
    {
        // line 1217
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 1218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/form.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 1220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-manufacturer.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-related.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-category-tags.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/default-category.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-combinations.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module_card.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/modal-confirmation.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce.inc.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce_loader.js"), "html", null, true);
        echo "\"></script>

  <script>
      \$(function() {
        var editable = '";
        // line 1234
        echo twig_escape_filter($this->env, ($context["editable"] ?? null), "html", null, true);
        echo "';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2464 => 1234,  2457 => 1230,  2453 => 1229,  2449 => 1228,  2445 => 1227,  2441 => 1226,  2437 => 1225,  2433 => 1224,  2429 => 1223,  2425 => 1222,  2421 => 1221,  2417 => 1220,  2412 => 1218,  2407 => 1217,  2404 => 1216,  2397 => 891,  2394 => 890,  2387 => 227,  2384 => 226,  2379 => 1213,  2377 => 1192,  2372 => 1189,  2368 => 1188,  2359 => 1182,  2354 => 1180,  2347 => 1176,  2342 => 1174,  2338 => 1172,  2332 => 1169,  2327 => 1167,  2323 => 1165,  2321 => 1164,  2307 => 1153,  2295 => 1144,  2290 => 1142,  2281 => 1136,  2276 => 1134,  2271 => 1132,  2262 => 1126,  2257 => 1124,  2252 => 1122,  2246 => 1118,  2240 => 1115,  2235 => 1113,  2230 => 1111,  2224 => 1107,  2222 => 1106,  2218 => 1104,  2212 => 1101,  2199 => 1093,  2193 => 1092,  2187 => 1091,  2180 => 1090,  2178 => 1089,  2173 => 1087,  2168 => 1085,  2160 => 1080,  2156 => 1079,  2145 => 1071,  2138 => 1067,  2133 => 1064,  2127 => 1060,  2123 => 1059,  2118 => 1056,  2108 => 1048,  2098 => 1044,  2091 => 1040,  2087 => 1039,  2084 => 1038,  2080 => 1037,  2075 => 1034,  2062 => 1027,  2058 => 1026,  2051 => 1022,  2042 => 1018,  2036 => 1015,  2029 => 1013,  2024 => 1010,  2020 => 1009,  2014 => 1006,  2010 => 1005,  2006 => 1004,  1998 => 998,  1987 => 996,  1983 => 995,  1978 => 993,  1974 => 991,  1964 => 987,  1955 => 983,  1949 => 980,  1942 => 978,  1936 => 976,  1932 => 975,  1927 => 972,  1925 => 971,  1922 => 970,  1914 => 963,  1911 => 962,  1899 => 952,  1892 => 948,  1888 => 947,  1881 => 943,  1869 => 934,  1865 => 933,  1860 => 931,  1856 => 930,  1852 => 929,  1848 => 928,  1844 => 927,  1838 => 924,  1822 => 911,  1818 => 910,  1814 => 909,  1803 => 901,  1798 => 898,  1781 => 895,  1778 => 894,  1761 => 893,  1758 => 892,  1756 => 890,  1751 => 888,  1747 => 887,  1743 => 886,  1733 => 879,  1729 => 878,  1724 => 876,  1719 => 874,  1710 => 868,  1706 => 867,  1701 => 865,  1696 => 863,  1689 => 859,  1685 => 858,  1680 => 856,  1675 => 854,  1666 => 848,  1659 => 844,  1655 => 843,  1650 => 841,  1645 => 839,  1635 => 832,  1624 => 823,  1622 => 818,  1618 => 817,  1612 => 814,  1607 => 812,  1601 => 809,  1597 => 808,  1593 => 807,  1583 => 800,  1577 => 797,  1571 => 794,  1565 => 791,  1556 => 785,  1552 => 784,  1543 => 778,  1539 => 777,  1532 => 773,  1522 => 765,  1511 => 756,  1503 => 750,  1492 => 741,  1484 => 736,  1477 => 732,  1473 => 731,  1464 => 725,  1460 => 724,  1451 => 718,  1447 => 717,  1438 => 711,  1434 => 710,  1430 => 709,  1422 => 704,  1417 => 702,  1404 => 692,  1400 => 691,  1390 => 684,  1386 => 683,  1382 => 682,  1378 => 681,  1374 => 680,  1370 => 679,  1366 => 678,  1362 => 677,  1358 => 676,  1354 => 675,  1346 => 672,  1341 => 670,  1331 => 663,  1326 => 661,  1314 => 652,  1310 => 651,  1306 => 650,  1299 => 646,  1294 => 644,  1278 => 631,  1268 => 624,  1261 => 620,  1257 => 619,  1250 => 615,  1246 => 614,  1242 => 613,  1231 => 605,  1227 => 604,  1223 => 603,  1217 => 602,  1210 => 598,  1206 => 597,  1200 => 594,  1196 => 593,  1189 => 589,  1184 => 587,  1176 => 582,  1172 => 581,  1168 => 580,  1162 => 577,  1158 => 576,  1154 => 575,  1143 => 567,  1138 => 565,  1129 => 558,  1120 => 550,  1118 => 549,  1117 => 548,  1116 => 547,  1115 => 546,  1114 => 545,  1113 => 544,  1106 => 539,  1094 => 529,  1088 => 527,  1080 => 522,  1076 => 521,  1070 => 518,  1067 => 517,  1064 => 516,  1057 => 512,  1053 => 511,  1045 => 508,  1041 => 506,  1035 => 504,  1033 => 503,  1029 => 502,  1025 => 501,  1020 => 498,  1018 => 497,  1010 => 492,  1003 => 488,  999 => 487,  995 => 486,  990 => 484,  982 => 479,  978 => 478,  974 => 477,  969 => 475,  961 => 470,  957 => 469,  953 => 468,  948 => 466,  940 => 461,  936 => 460,  932 => 459,  927 => 457,  916 => 451,  910 => 450,  906 => 449,  901 => 447,  897 => 446,  893 => 445,  888 => 443,  882 => 440,  873 => 434,  866 => 430,  857 => 426,  847 => 419,  843 => 418,  839 => 417,  831 => 412,  827 => 411,  823 => 410,  816 => 406,  808 => 401,  804 => 400,  800 => 399,  795 => 397,  792 => 396,  786 => 393,  782 => 392,  778 => 391,  775 => 390,  773 => 389,  767 => 386,  761 => 385,  751 => 377,  737 => 365,  731 => 362,  718 => 352,  708 => 346,  701 => 341,  697 => 340,  691 => 337,  687 => 336,  683 => 335,  677 => 332,  673 => 331,  669 => 330,  662 => 326,  657 => 324,  652 => 321,  644 => 317,  637 => 312,  631 => 309,  626 => 307,  621 => 305,  617 => 303,  615 => 302,  607 => 297,  601 => 294,  596 => 292,  591 => 290,  586 => 287,  576 => 281,  569 => 276,  563 => 275,  555 => 270,  549 => 269,  542 => 265,  537 => 263,  533 => 261,  531 => 260,  524 => 255,  517 => 250,  511 => 247,  504 => 243,  495 => 237,  489 => 233,  472 => 231,  455 => 230,  451 => 228,  449 => 226,  443 => 223,  439 => 222,  435 => 221,  429 => 218,  421 => 213,  415 => 210,  407 => 205,  403 => 204,  393 => 197,  389 => 196,  382 => 191,  379 => 190,  372 => 188,  366 => 186,  364 => 185,  350 => 176,  345 => 174,  341 => 173,  337 => 172,  334 => 171,  329 => 170,  323 => 166,  320 => 165,  318 => 164,  312 => 161,  308 => 160,  303 => 158,  299 => 157,  291 => 152,  287 => 151,  283 => 150,  275 => 145,  271 => 144,  266 => 141,  258 => 134,  246 => 123,  240 => 121,  238 => 120,  234 => 119,  230 => 118,  226 => 117,  222 => 116,  218 => 115,  214 => 114,  209 => 111,  202 => 106,  190 => 97,  186 => 96,  177 => 90,  170 => 86,  164 => 83,  157 => 79,  150 => 75,  144 => 72,  135 => 66,  127 => 63,  121 => 59,  106 => 57,  102 => 56,  97 => 54,  91 => 51,  86 => 49,  80 => 46,  76 => 45,  71 => 42,  64 => 38,  60 => 36,  58 => 35,  54 => 33,  52 => 32,  48 => 31,  43 => 28,  40 => 27,  36 => 25,  34 => 1276,  33 => 1275,  32 => 1274,  31 => 1257,  29 => 1255,  28 => 1253,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Product/form.html.twig", "C:\\wamp64\\www\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\form.html.twig");
    }
}


/* @PrestaShop/Admin/Product/form.html.twig */
class __TwigTemplate_8d7d3b6f87164db4fe9c11281a286ef77a9b24a3bbd0bd99452e3fb3917d74ca_454137684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1192
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/form.html.twig", 1192);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1209
    public function block_content($context, array $blocks = array())
    {
        // line 1210
        echo "      <div class=\"modal-body\"></div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2543 => 1210,  2540 => 1209,  2523 => 1192,  2464 => 1234,  2457 => 1230,  2453 => 1229,  2449 => 1228,  2445 => 1227,  2441 => 1226,  2437 => 1225,  2433 => 1224,  2429 => 1223,  2425 => 1222,  2421 => 1221,  2417 => 1220,  2412 => 1218,  2407 => 1217,  2404 => 1216,  2397 => 891,  2394 => 890,  2387 => 227,  2384 => 226,  2379 => 1213,  2377 => 1192,  2372 => 1189,  2368 => 1188,  2359 => 1182,  2354 => 1180,  2347 => 1176,  2342 => 1174,  2338 => 1172,  2332 => 1169,  2327 => 1167,  2323 => 1165,  2321 => 1164,  2307 => 1153,  2295 => 1144,  2290 => 1142,  2281 => 1136,  2276 => 1134,  2271 => 1132,  2262 => 1126,  2257 => 1124,  2252 => 1122,  2246 => 1118,  2240 => 1115,  2235 => 1113,  2230 => 1111,  2224 => 1107,  2222 => 1106,  2218 => 1104,  2212 => 1101,  2199 => 1093,  2193 => 1092,  2187 => 1091,  2180 => 1090,  2178 => 1089,  2173 => 1087,  2168 => 1085,  2160 => 1080,  2156 => 1079,  2145 => 1071,  2138 => 1067,  2133 => 1064,  2127 => 1060,  2123 => 1059,  2118 => 1056,  2108 => 1048,  2098 => 1044,  2091 => 1040,  2087 => 1039,  2084 => 1038,  2080 => 1037,  2075 => 1034,  2062 => 1027,  2058 => 1026,  2051 => 1022,  2042 => 1018,  2036 => 1015,  2029 => 1013,  2024 => 1010,  2020 => 1009,  2014 => 1006,  2010 => 1005,  2006 => 1004,  1998 => 998,  1987 => 996,  1983 => 995,  1978 => 993,  1974 => 991,  1964 => 987,  1955 => 983,  1949 => 980,  1942 => 978,  1936 => 976,  1932 => 975,  1927 => 972,  1925 => 971,  1922 => 970,  1914 => 963,  1911 => 962,  1899 => 952,  1892 => 948,  1888 => 947,  1881 => 943,  1869 => 934,  1865 => 933,  1860 => 931,  1856 => 930,  1852 => 929,  1848 => 928,  1844 => 927,  1838 => 924,  1822 => 911,  1818 => 910,  1814 => 909,  1803 => 901,  1798 => 898,  1781 => 895,  1778 => 894,  1761 => 893,  1758 => 892,  1756 => 890,  1751 => 888,  1747 => 887,  1743 => 886,  1733 => 879,  1729 => 878,  1724 => 876,  1719 => 874,  1710 => 868,  1706 => 867,  1701 => 865,  1696 => 863,  1689 => 859,  1685 => 858,  1680 => 856,  1675 => 854,  1666 => 848,  1659 => 844,  1655 => 843,  1650 => 841,  1645 => 839,  1635 => 832,  1624 => 823,  1622 => 818,  1618 => 817,  1612 => 814,  1607 => 812,  1601 => 809,  1597 => 808,  1593 => 807,  1583 => 800,  1577 => 797,  1571 => 794,  1565 => 791,  1556 => 785,  1552 => 784,  1543 => 778,  1539 => 777,  1532 => 773,  1522 => 765,  1511 => 756,  1503 => 750,  1492 => 741,  1484 => 736,  1477 => 732,  1473 => 731,  1464 => 725,  1460 => 724,  1451 => 718,  1447 => 717,  1438 => 711,  1434 => 710,  1430 => 709,  1422 => 704,  1417 => 702,  1404 => 692,  1400 => 691,  1390 => 684,  1386 => 683,  1382 => 682,  1378 => 681,  1374 => 680,  1370 => 679,  1366 => 678,  1362 => 677,  1358 => 676,  1354 => 675,  1346 => 672,  1341 => 670,  1331 => 663,  1326 => 661,  1314 => 652,  1310 => 651,  1306 => 650,  1299 => 646,  1294 => 644,  1278 => 631,  1268 => 624,  1261 => 620,  1257 => 619,  1250 => 615,  1246 => 614,  1242 => 613,  1231 => 605,  1227 => 604,  1223 => 603,  1217 => 602,  1210 => 598,  1206 => 597,  1200 => 594,  1196 => 593,  1189 => 589,  1184 => 587,  1176 => 582,  1172 => 581,  1168 => 580,  1162 => 577,  1158 => 576,  1154 => 575,  1143 => 567,  1138 => 565,  1129 => 558,  1120 => 550,  1118 => 549,  1117 => 548,  1116 => 547,  1115 => 546,  1114 => 545,  1113 => 544,  1106 => 539,  1094 => 529,  1088 => 527,  1080 => 522,  1076 => 521,  1070 => 518,  1067 => 517,  1064 => 516,  1057 => 512,  1053 => 511,  1045 => 508,  1041 => 506,  1035 => 504,  1033 => 503,  1029 => 502,  1025 => 501,  1020 => 498,  1018 => 497,  1010 => 492,  1003 => 488,  999 => 487,  995 => 486,  990 => 484,  982 => 479,  978 => 478,  974 => 477,  969 => 475,  961 => 470,  957 => 469,  953 => 468,  948 => 466,  940 => 461,  936 => 460,  932 => 459,  927 => 457,  916 => 451,  910 => 450,  906 => 449,  901 => 447,  897 => 446,  893 => 445,  888 => 443,  882 => 440,  873 => 434,  866 => 430,  857 => 426,  847 => 419,  843 => 418,  839 => 417,  831 => 412,  827 => 411,  823 => 410,  816 => 406,  808 => 401,  804 => 400,  800 => 399,  795 => 397,  792 => 396,  786 => 393,  782 => 392,  778 => 391,  775 => 390,  773 => 389,  767 => 386,  761 => 385,  751 => 377,  737 => 365,  731 => 362,  718 => 352,  708 => 346,  701 => 341,  697 => 340,  691 => 337,  687 => 336,  683 => 335,  677 => 332,  673 => 331,  669 => 330,  662 => 326,  657 => 324,  652 => 321,  644 => 317,  637 => 312,  631 => 309,  626 => 307,  621 => 305,  617 => 303,  615 => 302,  607 => 297,  601 => 294,  596 => 292,  591 => 290,  586 => 287,  576 => 281,  569 => 276,  563 => 275,  555 => 270,  549 => 269,  542 => 265,  537 => 263,  533 => 261,  531 => 260,  524 => 255,  517 => 250,  511 => 247,  504 => 243,  495 => 237,  489 => 233,  472 => 231,  455 => 230,  451 => 228,  449 => 226,  443 => 223,  439 => 222,  435 => 221,  429 => 218,  421 => 213,  415 => 210,  407 => 205,  403 => 204,  393 => 197,  389 => 196,  382 => 191,  379 => 190,  372 => 188,  366 => 186,  364 => 185,  350 => 176,  345 => 174,  341 => 173,  337 => 172,  334 => 171,  329 => 170,  323 => 166,  320 => 165,  318 => 164,  312 => 161,  308 => 160,  303 => 158,  299 => 157,  291 => 152,  287 => 151,  283 => 150,  275 => 145,  271 => 144,  266 => 141,  258 => 134,  246 => 123,  240 => 121,  238 => 120,  234 => 119,  230 => 118,  226 => 117,  222 => 116,  218 => 115,  214 => 114,  209 => 111,  202 => 106,  190 => 97,  186 => 96,  177 => 90,  170 => 86,  164 => 83,  157 => 79,  150 => 75,  144 => 72,  135 => 66,  127 => 63,  121 => 59,  106 => 57,  102 => 56,  97 => 54,  91 => 51,  86 => 49,  80 => 46,  76 => 45,  71 => 42,  64 => 38,  60 => 36,  58 => 35,  54 => 33,  52 => 32,  48 => 31,  43 => 28,  40 => 27,  36 => 25,  34 => 1276,  33 => 1275,  32 => 1274,  31 => 1257,  29 => 1255,  28 => 1253,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Product/form.html.twig", "C:\\wamp64\\www\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\form.html.twig");
    }
}
