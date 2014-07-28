<?php

/* newslisting.twig */
class __TwigTemplate_7cc870998690ca7a96cc81b6fc5a8309a9dff2478cb61744394930a9f215c60a extends Twig_Template
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

    \t";
        // line 6
        $template_storage = new Bolt\Storage($context['app']);
        $context['news'] =         $template_storage->getContent("news/latest/10", array() );
        // line 7
        echo "
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["newsitem"]) {
            // line 9
            echo "
        <h2><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["newsitem"]) ? $context["newsitem"] : null), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["newsitem"]) ? $context["newsitem"] : null), "title"), "html", null, true);
            echo "</a></h2>


        <p>

        ";
            // line 15
            if ($this->getAttribute((isset($context["newsitem"]) ? $context["newsitem"] : null), "image")) {
                // line 16
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["newsitem"]) ? $context["newsitem"] : null), "image")), "html", null, true);
                echo "\" class=\"fancybox\">
            <img src=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["newsitem"]) ? $context["newsitem"] : null), "image"), 200, 140), "html", null, true);
                echo "\" style=\"float: right; margin-left: 12px;\">
        </a>
        ";
            }
            // line 20
            echo "
        ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["newsitem"]) ? $context["newsitem"] : null), "excerpt", array(0 => 600), "method"), "html", null, true);
            echo "

        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["newsitem"]) ? $context["newsitem"] : null), "link"), "html", null, true);
            echo "\">More</a>
        </p>


        <p class=\"meta\">Published: ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["newsitem"]) ? $context["newsitem"] : null), "datepublish"), "l j F - H:i"), "html", null, true);
            echo "</p>
        
        <hr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
    </div>

    <div class=\"one-third column\">


<div style=\"margin: 0\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Socialite')->twigSocialite("TwitterShare"), "html", null, true);
        echo "</div>
<div style=\"margin: 2px 0 8px 0\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Socialite')->twigSocialite("FacebookLike"), "html", null, true);
        echo "</div>
<div style=\"margin: 8px 0\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Socialite')->twigSocialite(array("GitHubStar" => array(0 => "bolt", 1 => "bolt"))), "html", null, true);
        echo "</div>


    </div>

";
        // line 45
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "newslisting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 45,  107 => 40,  103 => 39,  99 => 38,  91 => 32,  80 => 27,  73 => 23,  68 => 21,  65 => 20,  59 => 17,  54 => 16,  52 => 15,  42 => 10,  39 => 9,  35 => 8,  32 => 7,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
