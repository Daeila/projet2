<?php

/* sil10VitrineBundle:Default:index.html.twig */
class __TwigTemplate_8406ef2b4f6ad680ba85f9c4ccab1c45d88ce6c884fecfb064bf764dc509cbe6 extends Twig_Template
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
        $__internal_d6716adefbdcda2b6dd849a6920feb924ef349df6e63ea15201e421f5e9c4360 = $this->env->getExtension("native_profiler");
        $__internal_d6716adefbdcda2b6dd849a6920feb924ef349df6e63ea15201e421f5e9c4360->enter($__internal_d6716adefbdcda2b6dd849a6920feb924ef349df6e63ea15201e421f5e9c4360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sil10VitrineBundle:Default:index.html.twig"));

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
        
        <a href=\"/catalogue\">Catalogue</a>
    </body>
    
    <a href=\"/mention\">Mention</a>
</html>

";
        
        $__internal_d6716adefbdcda2b6dd849a6920feb924ef349df6e63ea15201e421f5e9c4360->leave($__internal_d6716adefbdcda2b6dd849a6920feb924ef349df6e63ea15201e421f5e9c4360_prof);

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
        return array (  30 => 7,  22 => 1,);
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
/*         <a href="/catalogue">Catalogue</a>*/
/*     </body>*/
/*     */
/*     <a href="/mention">Mention</a>*/
/* </html>*/
/* */
/* */
