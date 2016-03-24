<?php

/* sil10VitrineBundle:default:index.html.twig */
class __TwigTemplate_6399a7612c662fc2f84a9c0123fae4a48ec5779c19aed1fe4da5b0dc1d96d7e7 extends Twig_Template
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
        $__internal_ee985f4ce3e244a183c354921d123437524e8c55abe63f29ddd1faeba3a83ff0 = $this->env->getExtension("native_profiler");
        $__internal_ee985f4ce3e244a183c354921d123437524e8c55abe63f29ddd1faeba3a83ff0->enter($__internal_ee985f4ce3e244a183c354921d123437524e8c55abe63f29ddd1faeba3a83ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sil10VitrineBundle:default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_ee985f4ce3e244a183c354921d123437524e8c55abe63f29ddd1faeba3a83ff0->leave($__internal_ee985f4ce3e244a183c354921d123437524e8c55abe63f29ddd1faeba3a83ff0_prof);

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
/* Hello {{name}}!*/
/* */
