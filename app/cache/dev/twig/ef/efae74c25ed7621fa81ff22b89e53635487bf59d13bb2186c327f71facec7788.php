<?php

/* base.html.twig */
class __TwigTemplate_64002c868c252dcfde56db12bf88f25e706a760d140613a5b6ee50bc147c1e2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5a67fa26744f3bc85332cfb89b67219bef83a467070ddbb2300065bc7eea9bc = $this->env->getExtension("native_profiler");
        $__internal_e5a67fa26744f3bc85332cfb89b67219bef83a467070ddbb2300065bc7eea9bc->enter($__internal_e5a67fa26744f3bc85332cfb89b67219bef83a467070ddbb2300065bc7eea9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e5a67fa26744f3bc85332cfb89b67219bef83a467070ddbb2300065bc7eea9bc->leave($__internal_e5a67fa26744f3bc85332cfb89b67219bef83a467070ddbb2300065bc7eea9bc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec95fb3c3ff7627d0bdae4906f74930e86e1104b36443e3425d77fd375b607c4 = $this->env->getExtension("native_profiler");
        $__internal_ec95fb3c3ff7627d0bdae4906f74930e86e1104b36443e3425d77fd375b607c4->enter($__internal_ec95fb3c3ff7627d0bdae4906f74930e86e1104b36443e3425d77fd375b607c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ec95fb3c3ff7627d0bdae4906f74930e86e1104b36443e3425d77fd375b607c4->leave($__internal_ec95fb3c3ff7627d0bdae4906f74930e86e1104b36443e3425d77fd375b607c4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bb98ec227b0cc2fc1f44a6601e55e4e6d617a978ab7b126edd966ee6d3c51496 = $this->env->getExtension("native_profiler");
        $__internal_bb98ec227b0cc2fc1f44a6601e55e4e6d617a978ab7b126edd966ee6d3c51496->enter($__internal_bb98ec227b0cc2fc1f44a6601e55e4e6d617a978ab7b126edd966ee6d3c51496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bb98ec227b0cc2fc1f44a6601e55e4e6d617a978ab7b126edd966ee6d3c51496->leave($__internal_bb98ec227b0cc2fc1f44a6601e55e4e6d617a978ab7b126edd966ee6d3c51496_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4834ec89f0fd9c761dd3c59d928b292c3aaf2f27bc4b1b7788f087b07d77b61c = $this->env->getExtension("native_profiler");
        $__internal_4834ec89f0fd9c761dd3c59d928b292c3aaf2f27bc4b1b7788f087b07d77b61c->enter($__internal_4834ec89f0fd9c761dd3c59d928b292c3aaf2f27bc4b1b7788f087b07d77b61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4834ec89f0fd9c761dd3c59d928b292c3aaf2f27bc4b1b7788f087b07d77b61c->leave($__internal_4834ec89f0fd9c761dd3c59d928b292c3aaf2f27bc4b1b7788f087b07d77b61c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_58d6adf91a061b678272453660bf6f348a3958b34e6d15df917575ea8fd89dff = $this->env->getExtension("native_profiler");
        $__internal_58d6adf91a061b678272453660bf6f348a3958b34e6d15df917575ea8fd89dff->enter($__internal_58d6adf91a061b678272453660bf6f348a3958b34e6d15df917575ea8fd89dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_58d6adf91a061b678272453660bf6f348a3958b34e6d15df917575ea8fd89dff->leave($__internal_58d6adf91a061b678272453660bf6f348a3958b34e6d15df917575ea8fd89dff_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
