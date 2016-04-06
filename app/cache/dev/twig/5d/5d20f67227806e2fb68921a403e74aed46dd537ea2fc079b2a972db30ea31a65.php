<?php

/* sil10VitrineBundle:Default:index.html.twig */
class __TwigTemplate_06eb0cdaa9b958e0f7b056f1a128c4a9c9b8f2350dc81a26f992cfe277ad4e6f extends Twig_Template
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
        $__internal_0ef48050ccaaa0786450a6187891af51ba970fd3980ca3280215c410cfc0f254 = $this->env->getExtension("native_profiler");
        $__internal_0ef48050ccaaa0786450a6187891af51ba970fd3980ca3280215c410cfc0f254->enter($__internal_0ef48050ccaaa0786450a6187891af51ba970fd3980ca3280215c410cfc0f254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sil10VitrineBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Librio</title>
    </head>
    <body>
        <p>Bonjour ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " bienvenu sur notre site !</p>
        
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("_catalogue");
        echo "\">Catalogue</a>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_contenuPanier");
        echo "\">Panier</a>
    </body>
    
    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("_mention");
        echo "\">Mention</a>
</html>

";
        
        $__internal_0ef48050ccaaa0786450a6187891af51ba970fd3980ca3280215c410cfc0f254->leave($__internal_0ef48050ccaaa0786450a6187891af51ba970fd3980ca3280215c410cfc0f254_prof);

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
        return array (  45 => 13,  39 => 10,  35 => 9,  30 => 7,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>Librio</title>*/
/*     </head>*/
/*     <body>*/
/*         <p>Bonjour {{ name }} bienvenu sur notre site !</p>*/
/*         */
/*         <a href="{{ path('_catalogue') }}">Catalogue</a>*/
/*         <a href="{{ path('_contenuPanier') }}">Panier</a>*/
/*     </body>*/
/*     */
/*     <a href="{{ path('_mention') }}">Mention</a>*/
/* </html>*/
/* */
/* */
