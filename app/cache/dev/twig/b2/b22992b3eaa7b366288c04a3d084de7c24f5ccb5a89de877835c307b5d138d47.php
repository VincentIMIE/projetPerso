<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7fbed71470d8f4e438713b9ad475086f6f25c461a2aa5b55295371339bc7b792 extends Twig_Template
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
        $__internal_0226a1653b5581779ede9888cfbf68d5bfc658116caedcf577c6bdf077c1abb0 = $this->env->getExtension("native_profiler");
        $__internal_0226a1653b5581779ede9888cfbf68d5bfc658116caedcf577c6bdf077c1abb0->enter($__internal_0226a1653b5581779ede9888cfbf68d5bfc658116caedcf577c6bdf077c1abb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0226a1653b5581779ede9888cfbf68d5bfc658116caedcf577c6bdf077c1abb0->leave($__internal_0226a1653b5581779ede9888cfbf68d5bfc658116caedcf577c6bdf077c1abb0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_22d742a23a703f5ff2a60ad1befd581218876dbe57b2e29c8e41bcb4923fa970 = $this->env->getExtension("native_profiler");
        $__internal_22d742a23a703f5ff2a60ad1befd581218876dbe57b2e29c8e41bcb4923fa970->enter($__internal_22d742a23a703f5ff2a60ad1befd581218876dbe57b2e29c8e41bcb4923fa970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_22d742a23a703f5ff2a60ad1befd581218876dbe57b2e29c8e41bcb4923fa970->leave($__internal_22d742a23a703f5ff2a60ad1befd581218876dbe57b2e29c8e41bcb4923fa970_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e141eba86ebb7d03d57dcd7524798eb19e263dba7002158520113692e5973139 = $this->env->getExtension("native_profiler");
        $__internal_e141eba86ebb7d03d57dcd7524798eb19e263dba7002158520113692e5973139->enter($__internal_e141eba86ebb7d03d57dcd7524798eb19e263dba7002158520113692e5973139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e141eba86ebb7d03d57dcd7524798eb19e263dba7002158520113692e5973139->leave($__internal_e141eba86ebb7d03d57dcd7524798eb19e263dba7002158520113692e5973139_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8604c25589f1db07a374488170ebd56e1c253d93cf9fdef8c0d0f8a0194c4c87 = $this->env->getExtension("native_profiler");
        $__internal_8604c25589f1db07a374488170ebd56e1c253d93cf9fdef8c0d0f8a0194c4c87->enter($__internal_8604c25589f1db07a374488170ebd56e1c253d93cf9fdef8c0d0f8a0194c4c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8604c25589f1db07a374488170ebd56e1c253d93cf9fdef8c0d0f8a0194c4c87->leave($__internal_8604c25589f1db07a374488170ebd56e1c253d93cf9fdef8c0d0f8a0194c4c87_prof);

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
