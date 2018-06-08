<?php

/* PrestaShopBundle:Admin/Module:tab-modules-list.html.twig */
class __TwigTemplate_46fb316130386af9c932aeebf7d2f7cb437ec3ea73bd16b7f2df42d1eca6ff8b extends Twig_Template
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
        if ((array_key_exists("modulesList", $context) &&  !twig_test_empty(($context["modulesList"] ?? null)))) {
            // line 26
            echo "<div class=\"row row-margin-bottom\">
  <div class=\"col-lg-12\">
    <ul class=\"nav nav-pills\">
      ";
            // line 29
            if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? null), "notInstalled", array())) > 0)) {
                // line 30
                echo "      <li class=\"active\">
        <a href=\"#tab_modules_list_not_installed\" data-toggle=\"tab\">
          ";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not Installed", array()), "html", null, true);
                echo "
        </a>
      </li>
      ";
            }
            // line 36
            echo "
      ";
            // line 37
            if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? null), "installed", array())) > 0)) {
                // line 38
                echo "        <li ";
                if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? null), "notInstalled", array())) == 0)) {
                    echo "class=\"active\"";
                }
                echo ">
        <a href=\"#tab_modules_list_installed\" data-toggle=\"tab\">
          ";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Installed", array()), "html", null, true);
                echo "
        </a>
        </li>
      ";
            }
            // line 44
            echo "    </ul>
  </div>
</div>
<div id=\"modules_list_container_content\" class=\"tab-content modal-content-overflow\">
  ";
            // line 48
            if (($this->getAttribute(($context["modulesList"] ?? null), "notInstalled", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["modulesList"] ?? null), "notInstalled", array())))) {
                // line 49
                echo "  <div class=\"tab-pane active\" id=\"tab_modules_list_not_installed\">
    <table id=\"tab_modules_list_not_installed\" class=\"table\">
      ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["modulesList"] ?? null), "notInstalled", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 52
                    echo "        ";
                    echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Module/Includes:tab-module-line.html.twig", array("module" => $context["module"]));
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "    </table>
  </div>
  ";
            }
            // line 57
            echo "  ";
            if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? null), "installed", array())) > 0)) {
                // line 58
                echo "  <div class=\"tab-pane ";
                if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? null), "notInstalled", array())) == 0)) {
                    echo "active";
                }
                echo "\" id=\"tab_modules_list_installed\">
    <table id=\"tab_modules_list_installed\" class=\"table\">
      ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["modulesList"] ?? null), "installed", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 61
                    echo "        ";
                    echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Module/Includes:tab-module-line.html.twig", array("module" => $context["module"]));
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "    </table>
  </div>
  ";
            }
            // line 66
            echo "</div>
";
        }
        // line 68
        echo "<div class=\"alert alert-addons row-margin-top\" role=\"alert\">
  <p class=\"alert-text\">
    <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=dispatch&amp;utm_campaign=back-office-";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array()), "html", null, true);
        echo "&amp;utm_content=download";
        if (array_key_exists("adminListFromSource", $context)) {
            echo "&amp;utm_term=";
            echo twig_escape_filter($this->env, ($context["adminListFromSource"] ?? null), "html", null, true);
        }
        echo "\" onclick=\"return !window.open(this.href);\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("More modules on addons.prestashop.com", array()), "html", null, true);
        echo "</a>
  </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module:tab-modules-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 70,  164 => 68,  160 => 66,  155 => 63,  138 => 61,  121 => 60,  113 => 58,  110 => 57,  105 => 54,  88 => 52,  71 => 51,  67 => 49,  65 => 48,  59 => 44,  52 => 40,  44 => 38,  42 => 37,  39 => 36,  32 => 32,  28 => 30,  26 => 29,  21 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Module:tab-modules-list.html.twig", "C:\\wamp64\\www\\src\\PrestaShopBundle/Resources/views/Admin/Module/tab-modules-list.html.twig");
    }
}
