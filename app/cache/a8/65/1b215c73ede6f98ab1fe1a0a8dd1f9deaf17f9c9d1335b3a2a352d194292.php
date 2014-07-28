<?php

/* _header.twig */
class __TwigTemplate_a8651b215c73ede6f98ab1fe1a0a8dd1f9deaf17f9c9d1335b3a2a352d194292 extends Twig_Template
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
        // line 1
        $this->env->loadTemplate("_header_basic.twig")->display($context);
        // line 2
        echo "
";
        // line 3
        if ((!array_key_exists("active", $context))) {
            $context["active"] = "dashboard";
        }
        // line 4
        echo "
<div class=\"navbar navbar-fixed-top \">
    <div class=\"navbar-bolt navbar-inverse\">
        <div class=\"container\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span>
            </a>
            <a class=\"brand\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">
                <strong>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/name"), "method"), "html", null, true);
        echo "</strong> <span class=\"hidden-phone\"> ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/sitename"), "method")) {
            echo "- ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        }
        echo "</span>
            </a>

            ";
        // line 15
        $this->env->loadTemplate("_sub_mainmenu.twig")->display($context);
        // line 16
        echo "
        </div>
    </div>
</div>

<div class=\"container-fluid\">

";
        // line 23
        $this->env->loadTemplate("_messages.twig")->display($context);
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  63 => 23,  54 => 16,  52 => 15,  41 => 12,  37 => 11,  28 => 4,  24 => 3,  124 => 43,  118 => 40,  112 => 36,  97 => 31,  91 => 28,  87 => 27,  75 => 24,  69 => 23,  61 => 20,  57 => 18,  53 => 17,  44 => 11,  40 => 10,  35 => 8,  31 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }
}
