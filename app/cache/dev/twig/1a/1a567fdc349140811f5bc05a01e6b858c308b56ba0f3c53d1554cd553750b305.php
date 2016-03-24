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
        $__internal_a0bcfdd082f27b4c489599c3cbd1020d26002eb09c1865c7dd26b845bfd16cd2 = $this->env->getExtension("native_profiler");
        $__internal_a0bcfdd082f27b4c489599c3cbd1020d26002eb09c1865c7dd26b845bfd16cd2->enter($__internal_a0bcfdd082f27b4c489599c3cbd1020d26002eb09c1865c7dd26b845bfd16cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0bcfdd082f27b4c489599c3cbd1020d26002eb09c1865c7dd26b845bfd16cd2->leave($__internal_a0bcfdd082f27b4c489599c3cbd1020d26002eb09c1865c7dd26b845bfd16cd2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d36241a8cce3fc695214b59b8c8eb72b1cf9dd812a7fea1533f151fb4a9bd452 = $this->env->getExtension("native_profiler");
        $__internal_d36241a8cce3fc695214b59b8c8eb72b1cf9dd812a7fea1533f151fb4a9bd452->enter($__internal_d36241a8cce3fc695214b59b8c8eb72b1cf9dd812a7fea1533f151fb4a9bd452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d36241a8cce3fc695214b59b8c8eb72b1cf9dd812a7fea1533f151fb4a9bd452->leave($__internal_d36241a8cce3fc695214b59b8c8eb72b1cf9dd812a7fea1533f151fb4a9bd452_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_528cb71049212c42dbb782d03ceb2e6d78a5bd215894a21642c53652198f817c = $this->env->getExtension("native_profiler");
        $__internal_528cb71049212c42dbb782d03ceb2e6d78a5bd215894a21642c53652198f817c->enter($__internal_528cb71049212c42dbb782d03ceb2e6d78a5bd215894a21642c53652198f817c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_528cb71049212c42dbb782d03ceb2e6d78a5bd215894a21642c53652198f817c->leave($__internal_528cb71049212c42dbb782d03ceb2e6d78a5bd215894a21642c53652198f817c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b4becc004c06ddd46688b437a531c9333666f0d3ab017f7e65fb9fb948bd58a = $this->env->getExtension("native_profiler");
        $__internal_7b4becc004c06ddd46688b437a531c9333666f0d3ab017f7e65fb9fb948bd58a->enter($__internal_7b4becc004c06ddd46688b437a531c9333666f0d3ab017f7e65fb9fb948bd58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7b4becc004c06ddd46688b437a531c9333666f0d3ab017f7e65fb9fb948bd58a->leave($__internal_7b4becc004c06ddd46688b437a531c9333666f0d3ab017f7e65fb9fb948bd58a_prof);

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
