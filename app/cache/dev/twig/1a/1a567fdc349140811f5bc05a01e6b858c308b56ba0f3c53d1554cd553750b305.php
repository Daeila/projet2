<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_476ffdd80f2f4d39aeab48d0b6b2a1fed2c27c9417891736398da315f00175eb extends Twig_Template
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
        $__internal_f9bf11bf0a3895e6e379ca7103b9804089ed361944ee66b5038bf46c624edaa0 = $this->env->getExtension("native_profiler");
        $__internal_f9bf11bf0a3895e6e379ca7103b9804089ed361944ee66b5038bf46c624edaa0->enter($__internal_f9bf11bf0a3895e6e379ca7103b9804089ed361944ee66b5038bf46c624edaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9bf11bf0a3895e6e379ca7103b9804089ed361944ee66b5038bf46c624edaa0->leave($__internal_f9bf11bf0a3895e6e379ca7103b9804089ed361944ee66b5038bf46c624edaa0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c9b29eb1e2733468c4d442d24e918e398bd8fc558399a256ea97a6812513fc0 = $this->env->getExtension("native_profiler");
        $__internal_1c9b29eb1e2733468c4d442d24e918e398bd8fc558399a256ea97a6812513fc0->enter($__internal_1c9b29eb1e2733468c4d442d24e918e398bd8fc558399a256ea97a6812513fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1c9b29eb1e2733468c4d442d24e918e398bd8fc558399a256ea97a6812513fc0->leave($__internal_1c9b29eb1e2733468c4d442d24e918e398bd8fc558399a256ea97a6812513fc0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d2b07719f5756aa4c281923596ebb29d35f35129507ef2debd4ed3ac8a6cde1 = $this->env->getExtension("native_profiler");
        $__internal_9d2b07719f5756aa4c281923596ebb29d35f35129507ef2debd4ed3ac8a6cde1->enter($__internal_9d2b07719f5756aa4c281923596ebb29d35f35129507ef2debd4ed3ac8a6cde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9d2b07719f5756aa4c281923596ebb29d35f35129507ef2debd4ed3ac8a6cde1->leave($__internal_9d2b07719f5756aa4c281923596ebb29d35f35129507ef2debd4ed3ac8a6cde1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd61d575e81f0aff356221168ff310716e71ca7a652574bc9627bf64a379aab5 = $this->env->getExtension("native_profiler");
        $__internal_bd61d575e81f0aff356221168ff310716e71ca7a652574bc9627bf64a379aab5->enter($__internal_bd61d575e81f0aff356221168ff310716e71ca7a652574bc9627bf64a379aab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bd61d575e81f0aff356221168ff310716e71ca7a652574bc9627bf64a379aab5->leave($__internal_bd61d575e81f0aff356221168ff310716e71ca7a652574bc9627bf64a379aab5_prof);

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
