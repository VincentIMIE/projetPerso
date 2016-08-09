<?php

/* base.html.twig */
class __TwigTemplate_bee94997b2bf44811837216443adec078d0ab991d1fce904bbbe1dcd35f82eb1 extends Twig_Template
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
        $__internal_6b151126e8e8f55cf60cb35ba679c7147d3fdcab86e885f38b7fe27a25bdbbe4 = $this->env->getExtension("native_profiler");
        $__internal_6b151126e8e8f55cf60cb35ba679c7147d3fdcab86e885f38b7fe27a25bdbbe4->enter($__internal_6b151126e8e8f55cf60cb35ba679c7147d3fdcab86e885f38b7fe27a25bdbbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6b151126e8e8f55cf60cb35ba679c7147d3fdcab86e885f38b7fe27a25bdbbe4->leave($__internal_6b151126e8e8f55cf60cb35ba679c7147d3fdcab86e885f38b7fe27a25bdbbe4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_34d727b27080356bad3e19c641a2f2bdf09377d97caafa947ec050879c70ef9d = $this->env->getExtension("native_profiler");
        $__internal_34d727b27080356bad3e19c641a2f2bdf09377d97caafa947ec050879c70ef9d->enter($__internal_34d727b27080356bad3e19c641a2f2bdf09377d97caafa947ec050879c70ef9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_34d727b27080356bad3e19c641a2f2bdf09377d97caafa947ec050879c70ef9d->leave($__internal_34d727b27080356bad3e19c641a2f2bdf09377d97caafa947ec050879c70ef9d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9bd95d2621417422d064662bcb7fd524b12d0d6b335838f7d5bd39d08b9a7c02 = $this->env->getExtension("native_profiler");
        $__internal_9bd95d2621417422d064662bcb7fd524b12d0d6b335838f7d5bd39d08b9a7c02->enter($__internal_9bd95d2621417422d064662bcb7fd524b12d0d6b335838f7d5bd39d08b9a7c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9bd95d2621417422d064662bcb7fd524b12d0d6b335838f7d5bd39d08b9a7c02->leave($__internal_9bd95d2621417422d064662bcb7fd524b12d0d6b335838f7d5bd39d08b9a7c02_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5626b7749bdb3720ac8794559a17f9653314be41a5b5e8f7414b875184d7f5b = $this->env->getExtension("native_profiler");
        $__internal_a5626b7749bdb3720ac8794559a17f9653314be41a5b5e8f7414b875184d7f5b->enter($__internal_a5626b7749bdb3720ac8794559a17f9653314be41a5b5e8f7414b875184d7f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a5626b7749bdb3720ac8794559a17f9653314be41a5b5e8f7414b875184d7f5b->leave($__internal_a5626b7749bdb3720ac8794559a17f9653314be41a5b5e8f7414b875184d7f5b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f373b5f19e53cfbe16e8f6cd95653204b26ef9aff1b091dbdf1e73662e21383f = $this->env->getExtension("native_profiler");
        $__internal_f373b5f19e53cfbe16e8f6cd95653204b26ef9aff1b091dbdf1e73662e21383f->enter($__internal_f373b5f19e53cfbe16e8f6cd95653204b26ef9aff1b091dbdf1e73662e21383f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f373b5f19e53cfbe16e8f6cd95653204b26ef9aff1b091dbdf1e73662e21383f->leave($__internal_f373b5f19e53cfbe16e8f6cd95653204b26ef9aff1b091dbdf1e73662e21383f_prof);

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
