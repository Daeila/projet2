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
        $__internal_80e5d382dc7fd5d82d6654a9a86e540b0f31aca428f580fd1bd0195cecff988b = $this->env->getExtension("native_profiler");
        $__internal_80e5d382dc7fd5d82d6654a9a86e540b0f31aca428f580fd1bd0195cecff988b->enter($__internal_80e5d382dc7fd5d82d6654a9a86e540b0f31aca428f580fd1bd0195cecff988b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80e5d382dc7fd5d82d6654a9a86e540b0f31aca428f580fd1bd0195cecff988b->leave($__internal_80e5d382dc7fd5d82d6654a9a86e540b0f31aca428f580fd1bd0195cecff988b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a56e5c3112036bde78110aa4e311e82594b4626328d8c5d233b452e9d18a84de = $this->env->getExtension("native_profiler");
        $__internal_a56e5c3112036bde78110aa4e311e82594b4626328d8c5d233b452e9d18a84de->enter($__internal_a56e5c3112036bde78110aa4e311e82594b4626328d8c5d233b452e9d18a84de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a56e5c3112036bde78110aa4e311e82594b4626328d8c5d233b452e9d18a84de->leave($__internal_a56e5c3112036bde78110aa4e311e82594b4626328d8c5d233b452e9d18a84de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94bd9015a6ef34810354c37944ad5f4e9220987a4be879b48b242e1b2b92de92 = $this->env->getExtension("native_profiler");
        $__internal_94bd9015a6ef34810354c37944ad5f4e9220987a4be879b48b242e1b2b92de92->enter($__internal_94bd9015a6ef34810354c37944ad5f4e9220987a4be879b48b242e1b2b92de92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94bd9015a6ef34810354c37944ad5f4e9220987a4be879b48b242e1b2b92de92->leave($__internal_94bd9015a6ef34810354c37944ad5f4e9220987a4be879b48b242e1b2b92de92_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2227f31e52fbee883984bb599762ddfc0e280563b7cb8e967aefc5730411c04 = $this->env->getExtension("native_profiler");
        $__internal_e2227f31e52fbee883984bb599762ddfc0e280563b7cb8e967aefc5730411c04->enter($__internal_e2227f31e52fbee883984bb599762ddfc0e280563b7cb8e967aefc5730411c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e2227f31e52fbee883984bb599762ddfc0e280563b7cb8e967aefc5730411c04->leave($__internal_e2227f31e52fbee883984bb599762ddfc0e280563b7cb8e967aefc5730411c04_prof);

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
