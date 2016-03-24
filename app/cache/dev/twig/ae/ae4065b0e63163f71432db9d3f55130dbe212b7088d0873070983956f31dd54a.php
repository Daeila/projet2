<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_45410cd5c46c5899b56748b63f9ca2fe613d0c81a900c034230c81c65d89b3ad extends Twig_Template
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
        $__internal_d7ce6d77968d26c7d8e67d6d6468b774854e585e6854009d22396f6f92e4735f = $this->env->getExtension("native_profiler");
        $__internal_d7ce6d77968d26c7d8e67d6d6468b774854e585e6854009d22396f6f92e4735f->enter($__internal_d7ce6d77968d26c7d8e67d6d6468b774854e585e6854009d22396f6f92e4735f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7ce6d77968d26c7d8e67d6d6468b774854e585e6854009d22396f6f92e4735f->leave($__internal_d7ce6d77968d26c7d8e67d6d6468b774854e585e6854009d22396f6f92e4735f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1abab2c0d8e44ffb4794351fe10386255e2302afddf4620e636c48b572b5b12d = $this->env->getExtension("native_profiler");
        $__internal_1abab2c0d8e44ffb4794351fe10386255e2302afddf4620e636c48b572b5b12d->enter($__internal_1abab2c0d8e44ffb4794351fe10386255e2302afddf4620e636c48b572b5b12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1abab2c0d8e44ffb4794351fe10386255e2302afddf4620e636c48b572b5b12d->leave($__internal_1abab2c0d8e44ffb4794351fe10386255e2302afddf4620e636c48b572b5b12d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_90d9f7bd97708ba80413cd51ba59c437c181e1446a3119c7a114e941fabedcc7 = $this->env->getExtension("native_profiler");
        $__internal_90d9f7bd97708ba80413cd51ba59c437c181e1446a3119c7a114e941fabedcc7->enter($__internal_90d9f7bd97708ba80413cd51ba59c437c181e1446a3119c7a114e941fabedcc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_90d9f7bd97708ba80413cd51ba59c437c181e1446a3119c7a114e941fabedcc7->leave($__internal_90d9f7bd97708ba80413cd51ba59c437c181e1446a3119c7a114e941fabedcc7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_092f48b47a9231027577995dea134aa53ac5662dfe2e394031b405afc24512ab = $this->env->getExtension("native_profiler");
        $__internal_092f48b47a9231027577995dea134aa53ac5662dfe2e394031b405afc24512ab->enter($__internal_092f48b47a9231027577995dea134aa53ac5662dfe2e394031b405afc24512ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_092f48b47a9231027577995dea134aa53ac5662dfe2e394031b405afc24512ab->leave($__internal_092f48b47a9231027577995dea134aa53ac5662dfe2e394031b405afc24512ab_prof);

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
