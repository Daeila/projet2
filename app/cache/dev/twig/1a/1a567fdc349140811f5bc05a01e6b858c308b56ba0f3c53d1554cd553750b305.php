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
        $__internal_7dac2ce25e6ac624c559ddfa1f7b1a4e22045b5dcf373a8bc8bba03a77fb01d0 = $this->env->getExtension("native_profiler");
        $__internal_7dac2ce25e6ac624c559ddfa1f7b1a4e22045b5dcf373a8bc8bba03a77fb01d0->enter($__internal_7dac2ce25e6ac624c559ddfa1f7b1a4e22045b5dcf373a8bc8bba03a77fb01d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dac2ce25e6ac624c559ddfa1f7b1a4e22045b5dcf373a8bc8bba03a77fb01d0->leave($__internal_7dac2ce25e6ac624c559ddfa1f7b1a4e22045b5dcf373a8bc8bba03a77fb01d0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e8b17d6493b6d045b1caba99a9a28c657a8226d94ab43c992de599a71dcec894 = $this->env->getExtension("native_profiler");
        $__internal_e8b17d6493b6d045b1caba99a9a28c657a8226d94ab43c992de599a71dcec894->enter($__internal_e8b17d6493b6d045b1caba99a9a28c657a8226d94ab43c992de599a71dcec894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e8b17d6493b6d045b1caba99a9a28c657a8226d94ab43c992de599a71dcec894->leave($__internal_e8b17d6493b6d045b1caba99a9a28c657a8226d94ab43c992de599a71dcec894_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4b7fa91c031eb83faf3468a9f2ed57ada10061287d9562d6ef0d58d29164d98f = $this->env->getExtension("native_profiler");
        $__internal_4b7fa91c031eb83faf3468a9f2ed57ada10061287d9562d6ef0d58d29164d98f->enter($__internal_4b7fa91c031eb83faf3468a9f2ed57ada10061287d9562d6ef0d58d29164d98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4b7fa91c031eb83faf3468a9f2ed57ada10061287d9562d6ef0d58d29164d98f->leave($__internal_4b7fa91c031eb83faf3468a9f2ed57ada10061287d9562d6ef0d58d29164d98f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_384de12d6f4b52f4fff3fe55227ac16d2d464d7e673fcff0ab3178447e5bb1a0 = $this->env->getExtension("native_profiler");
        $__internal_384de12d6f4b52f4fff3fe55227ac16d2d464d7e673fcff0ab3178447e5bb1a0->enter($__internal_384de12d6f4b52f4fff3fe55227ac16d2d464d7e673fcff0ab3178447e5bb1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_384de12d6f4b52f4fff3fe55227ac16d2d464d7e673fcff0ab3178447e5bb1a0->leave($__internal_384de12d6f4b52f4fff3fe55227ac16d2d464d7e673fcff0ab3178447e5bb1a0_prof);

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
