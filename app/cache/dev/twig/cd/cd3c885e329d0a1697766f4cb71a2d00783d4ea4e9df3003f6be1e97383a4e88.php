<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c3cd3ad371f8aaec44c8dba6a48a2e06cd0ae45578766e98e52ae85f785f6956 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c4b9a791a8d7cdbace5d9dd96dc03ac0558f45f4467f6fc8c7848f002bc8fe9 = $this->env->getExtension("native_profiler");
        $__internal_1c4b9a791a8d7cdbace5d9dd96dc03ac0558f45f4467f6fc8c7848f002bc8fe9->enter($__internal_1c4b9a791a8d7cdbace5d9dd96dc03ac0558f45f4467f6fc8c7848f002bc8fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c4b9a791a8d7cdbace5d9dd96dc03ac0558f45f4467f6fc8c7848f002bc8fe9->leave($__internal_1c4b9a791a8d7cdbace5d9dd96dc03ac0558f45f4467f6fc8c7848f002bc8fe9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6e4f064b1024806ca82522d464e09f8ae394a13d103be13078d64520e8cca518 = $this->env->getExtension("native_profiler");
        $__internal_6e4f064b1024806ca82522d464e09f8ae394a13d103be13078d64520e8cca518->enter($__internal_6e4f064b1024806ca82522d464e09f8ae394a13d103be13078d64520e8cca518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6e4f064b1024806ca82522d464e09f8ae394a13d103be13078d64520e8cca518->leave($__internal_6e4f064b1024806ca82522d464e09f8ae394a13d103be13078d64520e8cca518_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a6561d93dc0807b1a576ac149310a0abadc2b079ecdc0f9c3fd72f94288df3f8 = $this->env->getExtension("native_profiler");
        $__internal_a6561d93dc0807b1a576ac149310a0abadc2b079ecdc0f9c3fd72f94288df3f8->enter($__internal_a6561d93dc0807b1a576ac149310a0abadc2b079ecdc0f9c3fd72f94288df3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a6561d93dc0807b1a576ac149310a0abadc2b079ecdc0f9c3fd72f94288df3f8->leave($__internal_a6561d93dc0807b1a576ac149310a0abadc2b079ecdc0f9c3fd72f94288df3f8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33fe517d43f1348057116efd75226ee0900cf2b0bcef2936e17089a77db42aea = $this->env->getExtension("native_profiler");
        $__internal_33fe517d43f1348057116efd75226ee0900cf2b0bcef2936e17089a77db42aea->enter($__internal_33fe517d43f1348057116efd75226ee0900cf2b0bcef2936e17089a77db42aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_33fe517d43f1348057116efd75226ee0900cf2b0bcef2936e17089a77db42aea->leave($__internal_33fe517d43f1348057116efd75226ee0900cf2b0bcef2936e17089a77db42aea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
