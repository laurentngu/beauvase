<?php

/* @PrestaShop/Admin/Common/_partials/_sidebar.html.twig */
class __TwigTemplate_4fdc9260a9959263a11bbac93e3d4fa8b0da915b4dc5f82ab5d20513033a0fbf extends Twig_Template
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
        echo "<div id=\"ps-quicknav-sidebar\"  class=\"_fullspace\">
    <div class=\"quicknav-header\">
        <div class=\"float-left\"><a href=\"#\" data-toggle=\"sidebar\" data-target=\".sidebar\">×</a></div>
        <h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null), array(), "AdminCommon"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"quicknav-scroller _fullspace\">
        <object class=\"_fullspace\" data=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\"></object>
    </div>
    <div class=\"quicknav-fixed-bottom navbar-form-footer\">
        ";
        // line 34
        echo ($context["footer"] ?? null);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/_partials/_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 34,  30 => 31,  24 => 28,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Common/_partials/_sidebar.html.twig", "C:\\wamp64\\www\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\_partials\\_sidebar.html.twig");
    }
}
