<?php

/* sil10VitrineBundle:default:index.html.twig */
class __TwigTemplate_e4c94bbf2706b91c25a38d2cd34971c1e77218c76df613f7b097dcf591408ecf extends Twig_Template
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
        $__internal_8c3e91e75e1134d4e4bc3437fc298bb424e2516ceaaa5dca74302d30496fa541 = $this->env->getExtension("native_profiler");
        $__internal_8c3e91e75e1134d4e4bc3437fc298bb424e2516ceaaa5dca74302d30496fa541->enter($__internal_8c3e91e75e1134d4e4bc3437fc298bb424e2516ceaaa5dca74302d30496fa541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sil10VitrineBundle:default:index.html.twig"));

        // line 1
        echo "Bonjour ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " bienvenu sur notre site !
";
        
        $__internal_8c3e91e75e1134d4e4bc3437fc298bb424e2516ceaaa5dca74302d30496fa541->leave($__internal_8c3e91e75e1134d4e4bc3437fc298bb424e2516ceaaa5dca74302d30496fa541_prof);

    }

    public function getTemplateName()
    {
        return "sil10VitrineBundle:default:index.html.twig";
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
/* Bonjour {{name}} bienvenu sur notre site !*/
/* */
