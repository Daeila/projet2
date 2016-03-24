<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d71284b2eb93dd0fa726e5d93e89db72fd36f2ead5cce1655575b705dd5144d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db2e6bf4709ac60b244d67669e365a1fc533a44439f09216a68c6ba993fc8d07 = $this->env->getExtension("native_profiler");
        $__internal_db2e6bf4709ac60b244d67669e365a1fc533a44439f09216a68c6ba993fc8d07->enter($__internal_db2e6bf4709ac60b244d67669e365a1fc533a44439f09216a68c6ba993fc8d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db2e6bf4709ac60b244d67669e365a1fc533a44439f09216a68c6ba993fc8d07->leave($__internal_db2e6bf4709ac60b244d67669e365a1fc533a44439f09216a68c6ba993fc8d07_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_de37a0f4e7abdcf5c999a4f6df5a8d377be59ad792259e493df8ace736bf62c7 = $this->env->getExtension("native_profiler");
        $__internal_de37a0f4e7abdcf5c999a4f6df5a8d377be59ad792259e493df8ace736bf62c7->enter($__internal_de37a0f4e7abdcf5c999a4f6df5a8d377be59ad792259e493df8ace736bf62c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_de37a0f4e7abdcf5c999a4f6df5a8d377be59ad792259e493df8ace736bf62c7->leave($__internal_de37a0f4e7abdcf5c999a4f6df5a8d377be59ad792259e493df8ace736bf62c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee0bae3a944592b306d459b008d3c418225098e156b6460176f510d0d8e8c3a4 = $this->env->getExtension("native_profiler");
        $__internal_ee0bae3a944592b306d459b008d3c418225098e156b6460176f510d0d8e8c3a4->enter($__internal_ee0bae3a944592b306d459b008d3c418225098e156b6460176f510d0d8e8c3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ee0bae3a944592b306d459b008d3c418225098e156b6460176f510d0d8e8c3a4->leave($__internal_ee0bae3a944592b306d459b008d3c418225098e156b6460176f510d0d8e8c3a4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d4884f872e02d635e6a398d781ec78004da3bc4fdb8343b5d162de52c0941e8 = $this->env->getExtension("native_profiler");
        $__internal_5d4884f872e02d635e6a398d781ec78004da3bc4fdb8343b5d162de52c0941e8->enter($__internal_5d4884f872e02d635e6a398d781ec78004da3bc4fdb8343b5d162de52c0941e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5d4884f872e02d635e6a398d781ec78004da3bc4fdb8343b5d162de52c0941e8->leave($__internal_5d4884f872e02d635e6a398d781ec78004da3bc4fdb8343b5d162de52c0941e8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
