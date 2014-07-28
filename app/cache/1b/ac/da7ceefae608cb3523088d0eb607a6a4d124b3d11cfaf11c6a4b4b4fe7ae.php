<?php

/* index.twig */
class __TwigTemplate_1bacda7ceefae608cb3523088d0eb607a6a4d124b3d11cfaf11c6a4b4b4fe7ae extends Twig_Template
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
<div id=\"newsticker\">
  <ul>
    ";
        // line 6
        $template_storage = new Bolt\Storage($context['app']);
        $context['news'] =         $template_storage->getContent("news/latest/4", array() );
        // line 7
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "    <li>Latest news: ";
            echo $this->env->getExtension('Bolt')->localedatetime($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "datepublish"), "%B %e");
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
            echo "</a> </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  </ul>
</div>

<!-- Place somewhere in the <body> of your page -->
<div class=\"flexholder\">
    <div class=\"flexslider\">
        <ul class=\"slides\">
            <li>
                <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
        echo "files/slideshow1.png\" />
                <p class=\"flex-caption\"><span>The straightforward and uncluttered interface makes for a smooth workflow.</span></p>
            </li>
            <li>
                <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
        echo "files/slideshow6.png\" />
                <p class=\"flex-caption\"><span>The Bolt backend is fully responsive. Looks and works great on smartphones and tablets.</span></p>
            </li>
            <li>
                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
        echo "files/slideshow3.png\" />
                <p class=\"flex-caption\"><span>Contextual menus provide quick access to often used functionality.</span></p>
            </li>
            <li>
                <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
        echo "files/slideshow4.png\" />
                <p class=\"flex-caption\"><span>Bolt is very fast, and still light on system resources. The built-in debug toolbar gives a quick insight into what's going on under the hood.</span></p>
            </li>
            <li>
                <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
        echo "files/slideshow5.png\" />
                <p class=\"flex-caption\"><span>Bolt allows for flexible contenttypes with different types of fields. There are HTML areas, File/Image upload inputs, a Video embed field and more.</span></p>
            </li>
            <li>
                <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
        echo "files/slideshow2.png\" />
                <p class=\"flex-caption\"><span>Templates are written in the Twig template language, for clear and concise markup.</span></p>
            </li>

        </ul>
    </div>
</div>

    ";
        // line 46
        $template_storage = new Bolt\Storage($context['app']);
        $context['home'] =         $template_storage->getContent("homepage/1", array() );
        // line 47
        echo "
\t\t<div class=\"one-third column\">
\t\t\t";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "block1"), "html", null, true);
        echo "


\t\t</div>
\t\t<div class=\"one-third column\">
            ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "block2"), "html", null, true);
        echo "
\t\t</div>
\t\t<div class=\"one-third column\">
            ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "block3"), "html", null, true);
        echo "

<div style=\"margin: 0\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Socialite')->twigSocialite("TwitterShare"), "html", null, true);
        echo "</div>
<div style=\"margin: 2px 0 8px 0\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Socialite')->twigSocialite("FacebookLike"), "html", null, true);
        echo "</div>
<div style=\"margin: 8px 0\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Socialite')->twigSocialite(array("GitHubStar" => array(0 => "bolt", 1 => "bolt"))), "html", null, true);
        echo "</div>

\t\t</div>
<hr>


";
        // line 67
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 67,  140 => 61,  136 => 60,  132 => 59,  127 => 57,  121 => 54,  113 => 49,  109 => 47,  106 => 46,  95 => 38,  88 => 34,  81 => 30,  74 => 26,  67 => 22,  60 => 18,  50 => 10,  37 => 8,  32 => 7,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
