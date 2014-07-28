<?php

/* newsitem.twig */
class __TwigTemplate_20216a0f4c5e4965ff368375b0273fa1ad68635eb7095bbe761ed2019ac378e5 extends Twig_Template
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
        echo "
";
        // line 2
        $this->env->loadTemplate("_header.twig")->display($context);
        // line 3
        echo "
    <div class=\"two-thirds column\">


        <h2><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "link"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title"), "html", null, true);
        echo "</a></h2>

        ";
        // line 9
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image")) {
            // line 10
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image")), "html", null, true);
            echo "\" class=\"fancybox\">
            <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image"), 240, 140), "html", null, true);
            echo "\" style=\"float: right; margin-left: 12px;\">
\t\t</a>
        ";
        }
        // line 14
        echo "
        ";
        // line 15
        if ((!twig_test_empty($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "text_markdown")))) {
            // line 16
            echo "        
            ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "text_markdown"), "html", null, true);
            echo "
        ";
        } else {
            // line 19
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "text"), "html", null, true);
            echo "
        ";
        }
        // line 21
        echo "
        <p class=\"meta\">Published: ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["newsitem"]) ? $context["newsitem"] : null), "datepublish"), "l j F - H:i"), "html", null, true);
        echo "</p>
        
        <hr>

        ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Disqus')->disqus(), "html", null, true);
        echo "

    </div>

    <div class=\"one-third column\">


<div style=\"margin: 0\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Socialite')->twigSocialite("TwitterShare"), "html", null, true);
        echo "</div>
<div style=\"margin: 2px 0 8px 0\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Socialite')->twigSocialite("FacebookLike"), "html", null, true);
        echo "</div>
<div style=\"margin: 8px 0\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Socialite')->twigSocialite(array("GitHubStar" => array(0 => "bolt", 1 => "bolt"))), "html", null, true);
        echo "</div>


    </div>

";
        // line 40
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "newsitem.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 40,  97 => 35,  93 => 34,  89 => 33,  79 => 26,  72 => 22,  69 => 21,  63 => 19,  58 => 17,  55 => 16,  53 => 15,  50 => 14,  44 => 11,  39 => 10,  37 => 9,  30 => 7,  24 => 3,  22 => 2,  19 => 1,);
    }
}
