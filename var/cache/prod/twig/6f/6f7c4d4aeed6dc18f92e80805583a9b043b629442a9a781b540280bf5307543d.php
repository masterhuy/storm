<?php

/* @PrestaShop/Admin/Configure/ShopParameters/customer_preferences.html.twig */
class __TwigTemplate_ff6e8876745b3637560e488c5829f93b1a60e3934bb233ff0827f1af54a83edd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/customer_preferences.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 28
        $context["generalForm"] = $this->getAttribute(($context["form"] ?? null), "general", array());
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"container\">
        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form", "id" => "configuration_form")));
        echo "
        <div class=\"row\">
            ";
        // line 34
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/Blocks/customer_preferences_general.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/customer_preferences.html.twig", 34)->display($context);
        // line 35
        echo "        </div>
        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/customer_preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 36,  44 => 35,  42 => 34,  37 => 32,  34 => 31,  31 => 30,  27 => 25,  25 => 28,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/ShopParameters/customer_preferences.html.twig", "D:\\xamppp\\htdocs\\jms_storm\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\ShopParameters\\customer_preferences.html.twig");
    }
}
