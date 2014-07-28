<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_e2454ecff1524afa16001bc7d8d3d02275971b1c3e51e2753bdb7b4d95dbbc4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\" />
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "memory") / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "memoryLimit") == (-1))) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "memoryLimit") / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  34 => 5,  31 => 4,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  199 => 93,  188 => 90,  176 => 86,  173 => 85,  165 => 83,  153 => 77,  116 => 57,  62 => 27,  28 => 3,  357 => 123,  351 => 120,  344 => 119,  341 => 118,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  303 => 106,  300 => 105,  297 => 104,  291 => 102,  278 => 98,  258 => 94,  243 => 92,  231 => 83,  224 => 81,  202 => 94,  187 => 75,  185 => 74,  174 => 65,  156 => 62,  143 => 51,  136 => 71,  104 => 32,  85 => 24,  38 => 7,  161 => 63,  158 => 80,  151 => 59,  140 => 58,  121 => 50,  118 => 49,  113 => 48,  100 => 39,  49 => 14,  27 => 3,  91 => 33,  88 => 25,  63 => 18,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  361 => 152,  358 => 151,  355 => 150,  353 => 121,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  326 => 138,  315 => 110,  312 => 109,  309 => 108,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 101,  283 => 100,  281 => 114,  274 => 97,  265 => 96,  255 => 93,  253 => 100,  248 => 97,  241 => 93,  235 => 85,  229 => 87,  227 => 86,  222 => 83,  216 => 79,  213 => 78,  210 => 77,  208 => 76,  203 => 73,  197 => 69,  194 => 68,  191 => 67,  189 => 66,  184 => 63,  178 => 66,  172 => 64,  170 => 84,  166 => 54,  155 => 47,  152 => 46,  144 => 42,  127 => 35,  94 => 21,  82 => 28,  76 => 34,  70 => 15,  67 => 24,  61 => 15,  79 => 21,  72 => 18,  69 => 17,  54 => 22,  45 => 9,  42 => 7,  40 => 11,  37 => 10,  22 => 1,  164 => 58,  162 => 57,  157 => 56,  145 => 74,  139 => 49,  123 => 61,  120 => 31,  111 => 47,  108 => 37,  101 => 31,  80 => 32,  74 => 14,  66 => 11,  60 => 6,  55 => 24,  52 => 12,  43 => 12,  41 => 19,  35 => 6,  32 => 6,  396 => 175,  387 => 172,  383 => 171,  380 => 158,  375 => 169,  373 => 168,  365 => 162,  363 => 126,  356 => 157,  349 => 153,  342 => 149,  335 => 145,  328 => 139,  321 => 112,  314 => 133,  307 => 128,  295 => 119,  289 => 116,  285 => 114,  282 => 113,  276 => 111,  272 => 108,  269 => 107,  263 => 95,  259 => 103,  257 => 101,  254 => 100,  249 => 98,  246 => 136,  237 => 95,  234 => 94,  232 => 88,  223 => 86,  220 => 85,  212 => 78,  209 => 78,  204 => 75,  201 => 74,  196 => 92,  190 => 76,  182 => 87,  180 => 66,  175 => 65,  167 => 60,  163 => 82,  160 => 57,  154 => 60,  150 => 52,  147 => 75,  141 => 73,  137 => 46,  134 => 54,  131 => 45,  128 => 43,  125 => 42,  119 => 40,  115 => 39,  112 => 36,  110 => 36,  106 => 51,  102 => 40,  99 => 23,  96 => 37,  87 => 41,  84 => 40,  81 => 27,  75 => 19,  57 => 15,  53 => 13,  50 => 22,  47 => 11,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  122 => 41,  117 => 39,  109 => 52,  105 => 25,  103 => 43,  98 => 45,  92 => 43,  90 => 42,  83 => 33,  78 => 33,  73 => 33,  71 => 29,  68 => 30,  64 => 23,  58 => 25,  56 => 23,  51 => 13,  46 => 13,  44 => 10,  29 => 6,  26 => 3,);
    }
}
