<?php

/* PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig */
class __TwigTemplate_5ae7da1b47fc598f497f0a1109e082febb9709a44803ab346187e875e26ab670 extends Twig_Template
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
        $context["column"] = ((array_key_exists("column", $context)) ? (_twig_default_filter(($context["column"] ?? null), "")) : (""));
        // line 26
        $context["sortOrder"] = ((array_key_exists("sortOrder", $context)) ? (_twig_default_filter(($context["sortOrder"] ?? null), "")) : (""));
        // line 27
        $context["orderBy"] = ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? null), "")) : (""));
        // line 28
        echo "
";
        // line 29
        if (($context["column"] ?? null)) {
            // line 30
            echo "  ";
            ob_start();
            // line 31
            echo "    <span
      psorderby=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["column"] ?? null), "html", null, true);
            echo "\"
      psorderway=\"asc\"
      class=\"icon-caret-up icon-caret ";
            // line 34
            if (((($context["orderBy"] ?? null) == ($context["column"] ?? null)) && (($context["sortOrder"] ?? null) == "asc"))) {
                echo "-current";
            }
            echo "\"
    >
      &#9650;
    </span>
    <span
      psorderby=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["column"] ?? null), "html", null, true);
            echo "\"
      psorderway=\"desc\"
      class=\"icon-caret-down icon-caret ";
            // line 41
            if (((($context["orderBy"] ?? null) == ($context["column"] ?? null)) && (($context["sortOrder"] ?? null) == "desc"))) {
                echo "-current";
            }
            echo "\"
    >
      &#9660;
    </span>
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 41,  51 => 39,  41 => 34,  36 => 32,  33 => 31,  30 => 30,  28 => 29,  25 => 28,  23 => 27,  21 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "C:\\wamp64\\www\\src\\PrestaShopBundle/Resources/views/Admin/Product/Include/catalog_order_carrets.html.twig");
    }
}
