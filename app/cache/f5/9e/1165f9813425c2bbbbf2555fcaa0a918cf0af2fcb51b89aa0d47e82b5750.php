<?php

/* _sub_pager.twig */
class __TwigTemplate_f59e1165f9813425c2bbbbf2555fcaa0a918cf0af2fcb51b89aa0d47e82b5750 extends Twig_Template
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
        if (twig_in_filter("filter", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all")))) {
            // line 2
            echo "    ";
            $context["filter"] = (("filter=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all"), "filter")) . "&");
        } elseif (twig_in_filter("search", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all")))) {
            // line 4
            echo "    ";
            $context["filter"] = (("search=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all"), "search")) . "&");
        } elseif (twig_in_filter("q", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all")))) {
            // line 6
            echo "    ";
            $context["filter"] = (("q=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all"), "q")) . "&");
        } else {
            // line 8
            echo "    ";
            $context["filter"] = "";
        }
        // line 10
        echo "
";
        // line 11
        if (twig_in_filter("order", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all")))) {
            // line 12
            echo "    ";
            $context["order"] = (("order=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all"), "order")) . "&");
        } else {
            // line 14
            echo "    ";
            $context["order"] = "";
        }
        // line 16
        echo "
";
        // line 17
        $context["link"] = ((("?" . (isset($context["filter"]) ? $context["filter"] : null)) . (isset($context["order"]) ? $context["order"] : null)) . "page=");
        // line 18
        echo "
";
        // line 19
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages") > 1)) {
            // line 20
            echo "<div class=\"pagination pagination-centered ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
    <ul>
        <li><span>
    ";
            // line 24
            echo "    ";
            echo $this->env->getExtension('Bolt')->trans("Showing %pager_for% %from% - %to% of %count%", array("%pager_for%" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "for"), "%from%" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "showing_from"), "%to%" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "showing_to"), "%count%" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "count")));
            echo "
        </span></li>
";
            // line 27
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") > 1) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 28
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") - 1), "html", null, true);
                echo "\"><i class=\"icon-angle-left\" style=\"font-weight: bold;\"></i></a></li>
";
            }
            // line 30
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") > ((isset($context["surr"]) ? $context["surr"] : null) + 1))) {
                // line 31
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo 1;
                echo "\"><i class=\"icon-double-angle-left\" style=\"font-weight: bold;\"></i> 1</a></li>
";
            }
            // line 33
            echo "
";
            // line 35
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") > ((isset($context["surr"]) ? $context["surr"] : null) + 2))) {
                // line 36
                echo "    <li class=\"disabled\"><a href=\"#\">...</a></li>
";
            }
            // line 38
            echo "
";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range($this->env->getExtension('Bolt')->max(1, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") - (isset($context["surr"]) ? $context["surr"] : null))), $this->env->getExtension('Bolt')->min(($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") + (isset($context["surr"]) ? $context["surr"] : null)), $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 40
                echo "    <li ";
                if (((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current"))) {
                    echo "class='active'";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</a></li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
";
            // line 44
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") < (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages") - (isset($context["surr"]) ? $context["surr"] : null)) - 1))) {
                // line 45
                echo "    <li class=\"disabled\"><a href=\"#\">...</a></li>
";
            }
            // line 47
            echo "
";
            // line 49
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") < ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages") - (isset($context["surr"]) ? $context["surr"] : null)))) {
                // line 50
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages"), "html", null, true);
                echo " <i class=\"icon-double-angle-right\" style=\"font-weight: bold;\"></i></a></li>
";
            }
            // line 52
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") < $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages")) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 53
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") + 1), "html", null, true);
                echo "\"><i class=\"icon-angle-right\" style=\"font-weight: bold;\"></i></a></li>
";
            }
            // line 55
            echo "  </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "_sub_pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 55,  135 => 49,  126 => 44,  123 => 42,  107 => 40,  103 => 39,  94 => 35,  82 => 30,  60 => 20,  55 => 18,  46 => 14,  33 => 8,  29 => 6,  106 => 32,  102 => 30,  93 => 26,  80 => 23,  67 => 24,  58 => 19,  45 => 10,  32 => 6,  453 => 154,  445 => 151,  442 => 150,  432 => 144,  429 => 143,  424 => 139,  416 => 134,  411 => 132,  408 => 131,  398 => 125,  395 => 124,  390 => 120,  384 => 116,  377 => 114,  371 => 113,  365 => 112,  361 => 111,  358 => 110,  355 => 109,  347 => 107,  344 => 106,  336 => 104,  334 => 103,  330 => 102,  327 => 101,  319 => 99,  316 => 98,  308 => 96,  305 => 95,  297 => 93,  294 => 92,  286 => 90,  284 => 89,  279 => 88,  275 => 86,  265 => 82,  261 => 81,  257 => 80,  254 => 79,  250 => 78,  245 => 77,  243 => 76,  240 => 75,  236 => 73,  231 => 71,  227 => 70,  223 => 69,  219 => 68,  215 => 67,  211 => 66,  207 => 65,  203 => 64,  199 => 63,  194 => 62,  191 => 61,  181 => 58,  176 => 57,  174 => 56,  160 => 51,  157 => 50,  151 => 49,  148 => 53,  145 => 47,  142 => 46,  134 => 44,  131 => 33,  125 => 28,  111 => 27,  108 => 26,  100 => 38,  95 => 22,  90 => 21,  85 => 19,  81 => 18,  76 => 21,  73 => 27,  50 => 16,  42 => 12,  23 => 3,  189 => 61,  183 => 59,  179 => 57,  175 => 56,  171 => 55,  167 => 52,  162 => 52,  156 => 49,  152 => 48,  146 => 52,  141 => 43,  137 => 50,  132 => 47,  128 => 45,  119 => 35,  114 => 34,  110 => 33,  105 => 25,  101 => 30,  96 => 36,  92 => 27,  88 => 26,  84 => 31,  79 => 23,  74 => 20,  71 => 19,  56 => 15,  48 => 11,  22 => 2,  65 => 24,  63 => 18,  54 => 14,  52 => 14,  41 => 8,  37 => 10,  28 => 5,  24 => 3,  124 => 38,  118 => 40,  112 => 36,  97 => 28,  91 => 33,  87 => 20,  75 => 28,  69 => 23,  61 => 17,  57 => 18,  53 => 17,  44 => 12,  40 => 11,  35 => 9,  31 => 8,  25 => 4,  21 => 2,  19 => 1,);
    }
}
