<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4fb280d5525bcb7ea3e5fa0c0a24b1987b6e9fcedf397a39b9ec04dc47493704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5850b9a8cba3b33f01933fbd58f2009d74af216d6a41c43e2384173f52d4349a = $this->env->getExtension("native_profiler");
        $__internal_5850b9a8cba3b33f01933fbd58f2009d74af216d6a41c43e2384173f52d4349a->enter($__internal_5850b9a8cba3b33f01933fbd58f2009d74af216d6a41c43e2384173f52d4349a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5850b9a8cba3b33f01933fbd58f2009d74af216d6a41c43e2384173f52d4349a->leave($__internal_5850b9a8cba3b33f01933fbd58f2009d74af216d6a41c43e2384173f52d4349a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff7ba1b88f7e081c66ffc446f6a1aa33a05b10b5b7dcab7ed144798e3ca3b0ef = $this->env->getExtension("native_profiler");
        $__internal_ff7ba1b88f7e081c66ffc446f6a1aa33a05b10b5b7dcab7ed144798e3ca3b0ef->enter($__internal_ff7ba1b88f7e081c66ffc446f6a1aa33a05b10b5b7dcab7ed144798e3ca3b0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ff7ba1b88f7e081c66ffc446f6a1aa33a05b10b5b7dcab7ed144798e3ca3b0ef->leave($__internal_ff7ba1b88f7e081c66ffc446f6a1aa33a05b10b5b7dcab7ed144798e3ca3b0ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6997367714b12612e219c0ec265f821ab0c77235b4e2bee6a689d899ede5bf81 = $this->env->getExtension("native_profiler");
        $__internal_6997367714b12612e219c0ec265f821ab0c77235b4e2bee6a689d899ede5bf81->enter($__internal_6997367714b12612e219c0ec265f821ab0c77235b4e2bee6a689d899ede5bf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6997367714b12612e219c0ec265f821ab0c77235b4e2bee6a689d899ede5bf81->leave($__internal_6997367714b12612e219c0ec265f821ab0c77235b4e2bee6a689d899ede5bf81_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa70c967394f2b7e772ea1a2d95e5084222879f9dc0b38596a592fb65ba7795b = $this->env->getExtension("native_profiler");
        $__internal_fa70c967394f2b7e772ea1a2d95e5084222879f9dc0b38596a592fb65ba7795b->enter($__internal_fa70c967394f2b7e772ea1a2d95e5084222879f9dc0b38596a592fb65ba7795b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fa70c967394f2b7e772ea1a2d95e5084222879f9dc0b38596a592fb65ba7795b->leave($__internal_fa70c967394f2b7e772ea1a2d95e5084222879f9dc0b38596a592fb65ba7795b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
