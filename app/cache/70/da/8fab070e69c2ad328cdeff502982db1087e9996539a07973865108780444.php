<?php

/* _footer.twig */
class __TwigTemplate_70da8fab070e69c2ad328cdeff502982db1087e9996539a07973865108780444 extends Twig_Template
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
    </div><!-- /container-fluid -->
</div> <!-- /container -->

<br><br>

<footer id=\"bolt-footer\" class=\"hidden-phone\">
    ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/provided_by/0"), "method")) {
            // line 9
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("Provided by:");
            echo "
        <a href=\"mailto:";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/provided_by/0"), "method"), "html", null, true);
            echo "\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/provided_by/1"), "method"), "html", null, true);
            echo "
        </a> -
    ";
        }
        // line 14
        echo "    <i class=\"icon-cog\"></i> <b>Bolt ";
        echo twig_escape_filter($this->env, (isset($context["bolt_version"]) ? $context["bolt_version"] : null), "html", null, true);
        echo "</b>: ";
        echo $this->env->getExtension('Bolt')->trans("Sophisticated, lightweight & simple CMS");
        echo " -
    <i class=\"icon-heart\"></i > <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">";
        echo $this->env->getExtension('Bolt')->trans("About");
        echo "</a> &ndash;
    <i class=\"icon-external-link\"> </i><a href=\"http://bolt.cm\" target=\"_blank\">Bolt.cm</a>
</footer>

</body>

<script>
    var path = \"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "bolt"), "html", null, true);
        echo "\"; var asyncpath = \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async"), "html", null, true);
        echo "\"; var apppath = \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "\";
    var wysiwyg = {
       images: ";
        // line 24
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/images"), "method")), "html", null, true);
        echo ",
       tables: ";
        // line 25
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/tables"), "method")), "html", null, true);
        echo ",
       anchor: ";
        // line 26
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/anchor"), "method")), "html", null, true);
        echo ",
       fontcolor: ";
        // line 27
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/fontcolor"), "method")), "html", null, true);
        echo ",
       align: ";
        // line 28
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/align"), "method")), "html", null, true);
        echo ",
       subsuper: ";
        // line 29
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/subsuper"), "method")), "html", null, true);
        echo ",
       embed: ";
        // line 30
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/embed"), "method")), "html", null, true);
        echo ",
       ";
        // line 31
        if (twig_test_iterable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/ck"), "method"))) {
            echo "ck: ";
            echo twig_jsonencode_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/ck"), "method"));
            echo ",";
        }
        // line 32
        echo "       ";
        if (twig_test_iterable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/filebrowser"), "method"))) {
            echo "filebrowser: ";
            echo twig_jsonencode_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/filebrowser"), "method"));
        } else {
            echo "filebrowser: false";
        }
        // line 33
        echo "       };
</script>

</html>
";
    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  89 => 28,  77 => 25,  64 => 22,  39 => 11,  30 => 9,  155 => 55,  135 => 49,  126 => 44,  123 => 42,  107 => 32,  103 => 39,  94 => 35,  82 => 30,  60 => 20,  55 => 18,  46 => 14,  33 => 8,  29 => 6,  106 => 32,  102 => 30,  93 => 29,  80 => 23,  67 => 24,  58 => 19,  45 => 14,  32 => 6,  453 => 154,  445 => 151,  442 => 150,  432 => 144,  429 => 143,  424 => 139,  416 => 134,  411 => 132,  408 => 131,  398 => 125,  395 => 124,  390 => 120,  384 => 116,  377 => 114,  371 => 113,  365 => 112,  361 => 111,  358 => 110,  355 => 109,  347 => 107,  344 => 106,  336 => 104,  334 => 103,  330 => 102,  327 => 101,  319 => 99,  316 => 98,  308 => 96,  305 => 95,  297 => 93,  294 => 92,  286 => 90,  284 => 89,  279 => 88,  275 => 86,  265 => 82,  261 => 81,  257 => 80,  254 => 79,  250 => 78,  245 => 77,  243 => 76,  240 => 75,  236 => 73,  231 => 71,  227 => 70,  223 => 69,  219 => 68,  215 => 67,  211 => 66,  207 => 65,  203 => 64,  199 => 63,  194 => 62,  191 => 61,  181 => 58,  176 => 57,  174 => 56,  160 => 51,  157 => 50,  151 => 49,  148 => 53,  145 => 47,  142 => 46,  134 => 44,  131 => 33,  125 => 28,  111 => 27,  108 => 26,  100 => 38,  95 => 22,  90 => 21,  85 => 27,  81 => 26,  76 => 21,  73 => 24,  50 => 16,  42 => 12,  23 => 3,  189 => 61,  183 => 59,  179 => 57,  175 => 56,  171 => 55,  167 => 52,  162 => 52,  156 => 49,  152 => 48,  146 => 52,  141 => 43,  137 => 50,  132 => 47,  128 => 45,  119 => 35,  114 => 34,  110 => 33,  105 => 25,  101 => 31,  96 => 36,  92 => 27,  88 => 26,  84 => 31,  79 => 23,  74 => 20,  71 => 19,  56 => 15,  48 => 11,  22 => 2,  65 => 24,  63 => 18,  54 => 14,  52 => 15,  41 => 8,  37 => 10,  28 => 8,  24 => 3,  124 => 38,  118 => 40,  112 => 36,  97 => 30,  91 => 33,  87 => 20,  75 => 28,  69 => 23,  61 => 17,  57 => 18,  53 => 17,  44 => 12,  40 => 11,  35 => 10,  31 => 8,  25 => 4,  21 => 2,  19 => 1,);
    }
}
