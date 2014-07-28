<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_b002033f25a3cebde1f7bb46140be16aa78ff21cd0209e33b5f67a8c0fea8c3a extends Twig_Template
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
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (("normal" != (isset($context["position"]) ? $context["position"] : null))) {
            // line 3
            echo "    <div id=\"sfMiniToolbar-";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo "\" class=\"sf-minitoolbar\">
        <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" onclick=\"
            var elem = this.parentNode;
            if (elem.style.display == 'none') {
                document.getElementById('sfToolbarMainContent-";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo "').style.display = 'none';
                document.getElementById('sfToolbarClearer-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo "').style.display = 'none';
                elem.style.display = 'block';
            } else {
                document.getElementById('sfToolbarMainContent-";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo "').style.display = 'block';
                document.getElementById('sfToolbarClearer-";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo "').style.display = 'block';
                elem.style.display = 'none'
            }

            Sfjs.setPreference('toolbar/displayState', 'block');
        \">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\" />
        </a>
    </div>
    <style>
        ";
            // line 22
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig")->display(array_merge($context, array("position" => (isset($context["position"]) ? $context["position"] : null), "floatable" => true)));
            // line 23
            echo "    </style>
    <div id=\"sfToolbarClearer-";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo "\" style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 26
        echo "
<div id=\"sfToolbarMainContent-";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "\" class=\"sf-toolbarreset\">
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 29
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "getcollector", array(0 => (isset($context["name"]) ? $context["name"] : null)), "method"), "profiler_url" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null), "token" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "token"), "name" => (isset($context["name"]) ? $context["name"] : null))), "method"), "html", null, true);
            // line 35
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    ";
        // line 38
        if (("normal" != (isset($context["position"]) ? $context["position"] : null))) {
            // line 39
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
            document.getElementById('sfMiniToolbar-";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo "').style.display = 'block';
            Sfjs.setPreference('toolbar/displayState', 'none');
        \"></a>
    ";
        }
        // line 47
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 39,  93 => 38,  24 => 3,  19 => 1,  430 => 192,  421 => 189,  417 => 188,  413 => 187,  410 => 186,  406 => 185,  395 => 176,  382 => 172,  360 => 160,  347 => 156,  336 => 153,  325 => 144,  316 => 141,  305 => 138,  287 => 127,  273 => 126,  264 => 123,  252 => 120,  240 => 116,  228 => 112,  225 => 111,  219 => 109,  198 => 106,  192 => 104,  186 => 101,  181 => 100,  179 => 99,  171 => 96,  133 => 73,  124 => 31,  149 => 56,  142 => 52,  132 => 49,  129 => 71,  114 => 40,  107 => 37,  86 => 26,  65 => 15,  59 => 22,  34 => 5,  31 => 4,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  199 => 93,  188 => 90,  176 => 86,  173 => 85,  165 => 83,  153 => 57,  116 => 57,  62 => 16,  28 => 3,  357 => 123,  351 => 157,  344 => 119,  341 => 118,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  303 => 106,  300 => 105,  297 => 104,  291 => 102,  278 => 98,  258 => 122,  243 => 117,  231 => 113,  224 => 81,  202 => 108,  187 => 75,  185 => 74,  174 => 65,  156 => 62,  143 => 51,  136 => 74,  104 => 36,  85 => 24,  38 => 6,  161 => 63,  158 => 80,  151 => 59,  140 => 58,  121 => 43,  118 => 49,  113 => 48,  100 => 39,  49 => 11,  27 => 3,  91 => 33,  88 => 25,  63 => 18,  389 => 160,  386 => 173,  378 => 171,  371 => 169,  367 => 155,  361 => 152,  358 => 151,  355 => 150,  353 => 121,  345 => 147,  343 => 155,  340 => 154,  334 => 141,  331 => 140,  326 => 138,  315 => 110,  312 => 140,  309 => 139,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 101,  283 => 100,  281 => 114,  274 => 97,  265 => 96,  255 => 121,  253 => 100,  248 => 97,  241 => 93,  235 => 85,  229 => 87,  227 => 86,  222 => 110,  216 => 79,  213 => 78,  210 => 77,  208 => 76,  203 => 73,  197 => 69,  194 => 68,  191 => 67,  189 => 66,  184 => 63,  178 => 66,  172 => 64,  170 => 84,  166 => 54,  155 => 47,  152 => 84,  144 => 78,  127 => 35,  94 => 21,  82 => 28,  76 => 28,  70 => 19,  67 => 24,  61 => 23,  79 => 21,  72 => 27,  69 => 26,  54 => 13,  45 => 9,  42 => 11,  40 => 11,  37 => 6,  22 => 2,  164 => 58,  162 => 57,  157 => 56,  145 => 74,  139 => 49,  123 => 44,  120 => 31,  111 => 47,  108 => 47,  101 => 43,  80 => 29,  74 => 14,  66 => 11,  60 => 6,  55 => 11,  52 => 12,  43 => 12,  41 => 8,  35 => 5,  32 => 7,  396 => 175,  387 => 172,  383 => 171,  380 => 158,  375 => 170,  373 => 168,  365 => 162,  363 => 126,  356 => 157,  349 => 153,  342 => 149,  335 => 145,  328 => 139,  321 => 112,  314 => 133,  307 => 128,  295 => 130,  289 => 116,  285 => 114,  282 => 113,  276 => 111,  272 => 108,  269 => 125,  263 => 95,  259 => 103,  257 => 101,  254 => 100,  249 => 119,  246 => 118,  237 => 115,  234 => 114,  232 => 88,  223 => 86,  220 => 85,  212 => 78,  209 => 78,  204 => 75,  201 => 74,  196 => 92,  190 => 76,  182 => 87,  180 => 66,  175 => 97,  167 => 63,  163 => 90,  160 => 89,  154 => 60,  150 => 52,  147 => 75,  141 => 77,  137 => 46,  134 => 54,  131 => 45,  128 => 43,  125 => 42,  119 => 40,  115 => 39,  112 => 36,  110 => 36,  106 => 51,  102 => 40,  99 => 27,  96 => 31,  87 => 41,  84 => 40,  81 => 26,  75 => 22,  57 => 15,  53 => 13,  50 => 22,  47 => 8,  39 => 6,  36 => 8,  33 => 4,  30 => 3,  122 => 41,  117 => 29,  109 => 52,  105 => 25,  103 => 43,  98 => 45,  92 => 30,  90 => 37,  83 => 35,  78 => 22,  73 => 33,  71 => 29,  68 => 30,  64 => 24,  58 => 15,  56 => 23,  51 => 13,  46 => 12,  44 => 10,  29 => 3,  26 => 3,);
    }
}
