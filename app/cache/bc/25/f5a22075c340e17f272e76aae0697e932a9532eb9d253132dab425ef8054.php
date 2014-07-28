<?php

/* _header.twig */
class __TwigTemplate_bc25f5a22075c340e17f272e76aae0697e932a9532eb9d253132dab425ef8054 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title"), "html", null, true);
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"The Bolt.cm website. Bolt is a simple, easy and sophisticated content management system (CMS).\">
    <meta name=\"author\" content=\"Bob den Otter, Two Kings, Bolt\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "css/base.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "css/skeleton.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "css/layout.css\">

    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/jquery-1.8.1.min.js\"></script>

    <!-- Highlighter --> 
    <script type=\"text/javascript\" src=\"//docs.bolt.cm/view/js/shCore.js\"></script>
    <script type=\"text/javascript\" src=\"//docs.bolt.cm//view/js/shBrushJScript.js\"></script>
    <script type=\"text/javascript\" src=\"//docs.bolt.cm//view/js/shBrushPlain.js\"></script>
    <script type=\"text/javascript\" src=\"//docs.bolt.cm//view/js/shBrushPhp.js\"></script>
    <script type=\"text/javascript\" src=\"//docs.bolt.cm//view/js/shBrushCss.js\"></script>
    <script type=\"text/javascript\" src=\"//docs.bolt.cm//view/js/shBrushXml.js\"></script>
    <link href=\"//docs.bolt.cm//view/css/shCore.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"//docs.bolt.cm//view/css/shThemeDefault.css\" rel=\"Stylesheet\" type=\"text/css\" />   

    ";
        // line 29
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.pack.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.css\">

    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "css/flexslider.css\" type=\"text/css\">
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/jquery.flexslider.js\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/masonry.pkgd.min.js\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/boltsite.js\"></script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "css/bolt.css\">

    <link rel=\"shortcut icon\" href=\"/app/view/img/favicon-bolt.ico\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"/app/view/img/apple-touch-icon.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"/app/view/img/apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"/app/view/img/apple-touch-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"/app/view/img/apple-touch-icon-144x144.png\">

</head>
<body>


<div class=\"container\">
    <header class=\"sixteen columns\">
        <h1 class=\"\">
";
        // line 53
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
        echo "\"><img src=\"/theme/boltsite/images/bolt-logo.png\" alt=\"bolt\"> <span>content management</span></a>
        </h1>
        ";
        // line 55
        $template_storage = new Bolt\Storage($context['app']);
        $context['home'] =         $template_storage->getContent("homepage/1", array() );
        // line 56
        echo "        <h5>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "subtitle"), "html", null, true);
        echo "</h5>
        <hr />
        ";
        // line 58
        echo $this->env->getExtension('Bolt')->menu($this->env);
        echo "
    </header>


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
        return array (  126 => 58,  120 => 56,  117 => 55,  111 => 53,  88 => 35,  84 => 34,  80 => 33,  76 => 32,  71 => 30,  66 => 29,  51 => 15,  46 => 13,  42 => 12,  38 => 11,  25 => 5,  105 => 40,  97 => 35,  93 => 37,  89 => 33,  79 => 26,  72 => 22,  69 => 21,  63 => 19,  58 => 17,  55 => 16,  53 => 15,  50 => 14,  44 => 11,  39 => 10,  37 => 9,  30 => 7,  24 => 3,  22 => 2,  19 => 1,);
    }
}
