<?php

/* PrestaShopBundle:Admin/Product/Include:categories_theme.html.twig */
class __TwigTemplate_268095e0bf72690123d0db10cf1b8c37b21a44555f9df0983d6d8e1ff812fcf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'choice_tree_widget' => array($this, 'block_choice_tree_widget'),
            'choice_tree_item_widget' => array($this, 'block_choice_tree_item_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
    }

    // line 1
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        // line 2
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    <ul class=\"category-tree\">";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 5
            echo "        ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>
  </div>";
    }

    // line 11
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        // line 12
        echo "<li>
    ";
        // line 13
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "submitted_values", array(), "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? null), "id_category", array()), array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 14
        echo "
    <div class=\"radio\">
      <label class=\"category-label\" for=\"form[";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "][tree]\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", array()), "html", null, true);
        echo "
        <input
          type=\"radio\"
          name=\"form[";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "][tree]\"
          value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", array()), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
        echo "
          class=\"category float-right\"
        >
      </label>
    </div>

    ";
        // line 26
        if ($this->getAttribute(($context["child"] ?? null), "children", array(), "any", true, true)) {
            // line 27
            echo "      <ul>
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? null), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo "          ";
                $context["child"] = $context["item"];
                // line 30
                echo "          ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "</ul>
    ";
        }
        // line 34
        echo "  </li>";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Include:categories_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  158 => 34,  154 => 32,  137 => 30,  134 => 29,  117 => 28,  114 => 27,  112 => 26,  101 => 20,  97 => 19,  89 => 16,  85 => 14,  83 => 13,  80 => 12,  77 => 11,  72 => 7,  55 => 5,  38 => 4,  33 => 2,  30 => 1,  26 => 11,  23 => 10,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Product/Include:categories_theme.html.twig", "C:\\wamp64\\www\\src\\PrestaShopBundle/Resources/views/Admin/Product/Include/categories_theme.html.twig");
    }
}
