<?php

/* sil10VitrineBundle:Default:catalogue.html.twig */
class __TwigTemplate_738ac3e30dc60f0f2687a496402a763c16aadf55b44bdc12e12bc8123910942e extends Twig_Template
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
        $__internal_e3d23895b8aba26cebf0fc32b692807966e2bbebd4a5080eadd547aea24a9279 = $this->env->getExtension("native_profiler");
        $__internal_e3d23895b8aba26cebf0fc32b692807966e2bbebd4a5080eadd547aea24a9279->enter($__internal_e3d23895b8aba26cebf0fc32b692807966e2bbebd4a5080eadd547aea24a9279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sil10VitrineBundle:Default:catalogue.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Librio</title>
    </head>
    <body>
        <a href=\"/accueil\">Retour accueil</a>
        <table>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 10
            echo "            <tr>
                <td><a href=\"/articlesParCategorie/";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "intitule", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </table>
    </body>
</html>
";
        
        $__internal_e3d23895b8aba26cebf0fc32b692807966e2bbebd4a5080eadd547aea24a9279->leave($__internal_e3d23895b8aba26cebf0fc32b692807966e2bbebd4a5080eadd547aea24a9279_prof);

    }

    public function getTemplateName()
    {
        return "sil10VitrineBundle:Default:catalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  45 => 12,  39 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>Librio</title>*/
/*     </head>*/
/*     <body>*/
/*         <a href="/accueil">Retour accueil</a>*/
/*         <table>*/
/*         {% for categorie in categories %}*/
/*             <tr>*/
/*                 <td><a href="/articlesParCategorie/{{ categorie.id }}">{{categorie.id}}</a></td>*/
/*                 <td>{{categorie.intitule}}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </table>*/
/*     </body>*/
/* </html>*/
/* */