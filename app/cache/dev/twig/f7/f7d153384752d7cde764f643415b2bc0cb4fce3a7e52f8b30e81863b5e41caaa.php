<?php

/* sil10VitrineBundle:Default:index.html.twig */
class __TwigTemplate_8d87e56b843c25901f4f484d90e09f8e4c500ab24122b89d4568cfccfc2cfa0d extends Twig_Template
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
        $__internal_e21634aa5cd950614701ecb4914d11740a28d806a2de47f397b1681df2cb5258 = $this->env->getExtension("native_profiler");
        $__internal_e21634aa5cd950614701ecb4914d11740a28d806a2de47f397b1681df2cb5258->enter($__internal_e21634aa5cd950614701ecb4914d11740a28d806a2de47f397b1681df2cb5258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sil10VitrineBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_e21634aa5cd950614701ecb4914d11740a28d806a2de47f397b1681df2cb5258->leave($__internal_e21634aa5cd950614701ecb4914d11740a28d806a2de47f397b1681df2cb5258_prof);

    }

    public function getTemplateName()
    {
        return "sil10VitrineBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{name}}!*/
/* */
