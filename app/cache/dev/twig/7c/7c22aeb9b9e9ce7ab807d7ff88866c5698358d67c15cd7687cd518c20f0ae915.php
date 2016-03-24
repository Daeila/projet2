<?php

/* sil10VitrineBundle:Default:articlesParCategorie.html.twig */
class __TwigTemplate_2a338d207e7fc78ba2f3ab7911ef47a148ca3c5863f51ffde65408e4af7ef456 extends Twig_Template
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
        $__internal_b48672d12b6c6012b95d65e03701217d0e638359766004a1213f8fcd9ae7fd69 = $this->env->getExtension("native_profiler");
        $__internal_b48672d12b6c6012b95d65e03701217d0e638359766004a1213f8fcd9ae7fd69->enter($__internal_b48672d12b6c6012b95d65e03701217d0e638359766004a1213f8fcd9ae7fd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sil10VitrineBundle:Default:articlesParCategorie.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Librio</title>
    </head>
    <body>
        <a href=\"/accueil\">Retour accueil</a><a href=\"/catalogue\">Retour catalogue</a>
        <table>
            <tr><td>Libelle</td><td>Prix</td><td>Stock</td></tr>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            echo "            <tr>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "libelle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "stock", array()), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </table>
    </body>
</html>
";
        
        $__internal_b48672d12b6c6012b95d65e03701217d0e638359766004a1213f8fcd9ae7fd69->leave($__internal_b48672d12b6c6012b95d65e03701217d0e638359766004a1213f8fcd9ae7fd69_prof);

    }

    public function getTemplateName()
    {
        return "sil10VitrineBundle:Default:articlesParCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  48 => 14,  44 => 13,  40 => 12,  37 => 11,  33 => 10,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>Librio</title>*/
/*     </head>*/
/*     <body>*/
/*         <a href="/accueil">Retour accueil</a><a href="/catalogue">Retour catalogue</a>*/
/*         <table>*/
/*             <tr><td>Libelle</td><td>Prix</td><td>Stock</td></tr>*/
/*             {% for article in articles %}*/
/*             <tr>*/
/*                 <td>{{ article.libelle }}</td>*/
/*                 <td>{{ article.prix }}</td>*/
/*                 <td>{{ article.stock }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </body>*/
/* </html>*/
/* */
