<?php

/* PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig */
class __TwigTemplate_b1167e83ddc59347f3d955ca9c86e9b0ca73287185f3f925fc1fb288d38bb66c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        list($context["dimension_unit"], $context["weight_unit"]) =         array($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_DIMENSION_UNIT"), $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_WEIGHT_UNIT"));
        // line 26
        echo "
<div class=\"col-md-12 pb-1\">
  <h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Package dimension", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
  <p class=\"subtitle\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adjust your shipping costs by filling in the product dimensions.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
</div>

<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "width", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "width", array()), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "width", array()), 'widget');
        echo "
      <span class=\"input-group-addon\">";
        // line 38
        echo twig_escape_filter($this->env, ($context["dimension_unit"] ?? null), "html", null, true);
        echo "</span>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "height", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "height", array()), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "height", array()), 'widget');
        echo "
      <span class=\"input-group-addon\">";
        // line 48
        echo twig_escape_filter($this->env, ($context["dimension_unit"] ?? null), "html", null, true);
        echo "</span>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "depth", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "depth", array()), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "depth", array()), 'widget');
        echo "
      <span class=\"input-group-addon\">";
        // line 58
        echo twig_escape_filter($this->env, ($context["dimension_unit"] ?? null), "html", null, true);
        echo "</span>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "weight", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "weight", array()), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "weight", array()), 'widget');
        echo "
      <span class=\"input-group-addon\">";
        // line 68
        echo twig_escape_filter($this->env, ($context["weight_unit"] ?? null), "html", null, true);
        echo "</span>
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>
      ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "additional_delivery_times", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display delivery time for a product is advised for merchants selling in Europe to comply with the local laws.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
    </h2>
    <div class=\"row\">
       <div class=\"col-md-12\" ";
        // line 81
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
          ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "additional_delivery_times", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 83
            echo "            ";
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()) == 1)) {
                // line 84
                echo "              <div class=\"widget-radio-inline\">
                ";
                // line 85
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminPPreferences"), "html", null, true);
                echo "\" class=\"btn sensitive px-0\" target=_blank><i class=\"material-icons\">open_in_new</i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit", array(), "Admin.Catalog.Help"), "html", null, true);
                echo "</a>
              </div>
            ";
            } else {
                // line 89
                echo "              ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
            ";
            }
            // line 91
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </div>
     </div>
  </div>
</div>

<div class=\"col-xl-6 col-lg-6\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "delivery_in_stock", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "delivery_in_stock", array()), 'errors');
        echo "
    ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "delivery_in_stock", array()), 'widget');
        echo "
    <p class=\"subtitle italic\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave empty to disable.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
  </div>
</div>
<div class=\"col-xl-6 col-lg-6\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "delivery_out_stock", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "delivery_out_stock", array()), 'errors');
        echo "
    ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "delivery_out_stock", array()), 'widget');
        echo "
    <p class=\"subtitle italic\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave empty to disable.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>
      ";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "additional_shipping_cost", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If a carrier has a tax, it will be added to the shipping fees.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
    </h2>
    <label class=\"form-control-label\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Does this product incur additional shipping costs?", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
    <div class=\"row\">
      <div class=\"col-md-2\">
        ";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "additional_shipping_cost", array()), 'widget');
        echo "
      </div>
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "selectedCarriers", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</h2>
    ";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "selectedCarriers", array()), 'widget');
        echo "
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"alert alert-warning\" role=\"alert\">
    <p class=\"alert-text\">
        ";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If no carrier is selected then all the carriers will be available for customers orders.", array(), "Admin.Catalog.Notification");
        echo "
    </p>
  </div>
</div>

<div class=\"col-md-12\">
  <div id=\"warehouse_combination_collection\" class=\"col-md-12 form-group\" data-url=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_warehouse_refresh_product_warehouse_combination_form");
        echo "\">
    ";
        // line 147
        if (((($context["asm_globally_activated"] ?? null) && ($context["isNotVirtual"] ?? null)) && ($context["isChecked"] ?? null))) {
            // line 148
            echo "      ";
            echo twig_include($this->env, $context, "PrestaShopBundle:Admin:Product/Include/form-warehouse-combination.html.twig", array("warehouses" => ($context["warehouses"] ?? null), "form" => ($context["form"] ?? null)));
            echo "
    ";
        }
        // line 150
        echo "  </div>
</div>

";
        // line 153
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsShippingStepBottom", array("id_product" => ($context["id_product"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 153,  289 => 150,  283 => 148,  281 => 147,  277 => 146,  268 => 140,  258 => 133,  254 => 132,  243 => 124,  237 => 121,  232 => 119,  227 => 117,  217 => 110,  213 => 109,  209 => 108,  205 => 107,  197 => 102,  193 => 101,  189 => 100,  185 => 99,  176 => 92,  170 => 91,  164 => 89,  156 => 86,  152 => 85,  149 => 84,  146 => 83,  142 => 82,  138 => 81,  132 => 78,  127 => 76,  116 => 68,  112 => 67,  107 => 65,  103 => 64,  94 => 58,  90 => 57,  85 => 55,  81 => 54,  72 => 48,  68 => 47,  63 => 45,  59 => 44,  50 => 38,  46 => 37,  41 => 35,  37 => 34,  29 => 29,  25 => 28,  21 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig", "C:\\wamp64\\www\\src\\PrestaShopBundle/Resources/views/Admin/Product/Include/form_shipping.html.twig");
    }
}
