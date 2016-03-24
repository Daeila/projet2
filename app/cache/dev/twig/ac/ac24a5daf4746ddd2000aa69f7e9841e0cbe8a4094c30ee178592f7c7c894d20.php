<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_042d3005254b67cadb7a7e69c36135b7fc34db07b1611121c35b36966400000b extends Twig_Template
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
        $__internal_00bc264e1f578d8ac406b3b73f3981f5be5166f228dbc36e1a6fdbcfa1fc9dd7 = $this->env->getExtension("native_profiler");
        $__internal_00bc264e1f578d8ac406b3b73f3981f5be5166f228dbc36e1a6fdbcfa1fc9dd7->enter($__internal_00bc264e1f578d8ac406b3b73f3981f5be5166f228dbc36e1a6fdbcfa1fc9dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00bc264e1f578d8ac406b3b73f3981f5be5166f228dbc36e1a6fdbcfa1fc9dd7->leave($__internal_00bc264e1f578d8ac406b3b73f3981f5be5166f228dbc36e1a6fdbcfa1fc9dd7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a865da1b3bb7e0d2d11eec2e9751beddb157b17edd2eade5152da46a91d3c6fc = $this->env->getExtension("native_profiler");
        $__internal_a865da1b3bb7e0d2d11eec2e9751beddb157b17edd2eade5152da46a91d3c6fc->enter($__internal_a865da1b3bb7e0d2d11eec2e9751beddb157b17edd2eade5152da46a91d3c6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a865da1b3bb7e0d2d11eec2e9751beddb157b17edd2eade5152da46a91d3c6fc->leave($__internal_a865da1b3bb7e0d2d11eec2e9751beddb157b17edd2eade5152da46a91d3c6fc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a7332c40e047e056fda86bfb01c909ce6362e768d78b038a0182c7885cd12b2a = $this->env->getExtension("native_profiler");
        $__internal_a7332c40e047e056fda86bfb01c909ce6362e768d78b038a0182c7885cd12b2a->enter($__internal_a7332c40e047e056fda86bfb01c909ce6362e768d78b038a0182c7885cd12b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a7332c40e047e056fda86bfb01c909ce6362e768d78b038a0182c7885cd12b2a->leave($__internal_a7332c40e047e056fda86bfb01c909ce6362e768d78b038a0182c7885cd12b2a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1cc07ceba5f5e90de39253345039c74e52005eaa8bfe3efc2b153b8f440edaf = $this->env->getExtension("native_profiler");
        $__internal_d1cc07ceba5f5e90de39253345039c74e52005eaa8bfe3efc2b153b8f440edaf->enter($__internal_d1cc07ceba5f5e90de39253345039c74e52005eaa8bfe3efc2b153b8f440edaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d1cc07ceba5f5e90de39253345039c74e52005eaa8bfe3efc2b153b8f440edaf->leave($__internal_d1cc07ceba5f5e90de39253345039c74e52005eaa8bfe3efc2b153b8f440edaf_prof);

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
