<?php

/* @BoltProfiler/toolbar/db.html.twig */
class __TwigTemplate_56f2b32e54bdbb3d7f048b3900257df4f8eba2298f149b35bf50f352bfb37ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
        <span class=\"sf-toolbar-status";
        // line 6
        if ((50 < $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount"))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount"), "html", null, true);
        echo " Q</span>

        ";
        // line 8
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount") > 0)) {
            // line 9
            echo "            <span>in ";
            echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "time") * 1000)), "html", null, true);
            echo " ms</span>
        ";
        }
        // line 11
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>DB Queries</b>
            <span>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "time") * 1000)), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null))));
    }

    // line 25
    public function block_menu($context, array $blocks = array())
    {
        // line 26
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
    <strong>Doctrine</strong>
    <span class=\"count\">
        <span>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount"), "html", null, true);
        echo "</span>
        <span>";
        // line 31
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "time") * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
    }

    // line 36
    public function block_panel($context, array $blocks = array())
    {
        // line 37
        echo "        ";
        $this->displayBlock("queries", $context, $blocks);
        echo "
";
    }

    // line 40
    public function block_queries($context, array $blocks = array())
    {
        // line 41
        echo "    <h2>Queries</h2>

    ";
        // line 43
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "queries"))) {
            // line 44
            echo "        <p>
            <em>No queries.</em>
        </p>
    ";
        } else {
            // line 48
            echo "        <ul class=\"alt\">
            ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "queries"));
            foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                // line 50
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "\">
                    <code >
                        ";
                // line 52
                echo $this->getAttribute((isset($context["query"]) ? $context["query"] : null), "sql");
                echo "
                    </code>
                    <br /><br />
                    <small>
                        <strong>Parameters</strong>: ";
                // line 56
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["query"]) ? $context["query"] : null), "params")), "html", null, true);
                echo " <br />
                        <strong>Time</strong>: ";
                // line 57
                echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["query"]) ? $context["query"] : null), "executionMS") * 1000)), "html", null, true);
                echo " ms
                    </small>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        </ul>
    ";
        }
        // line 63
        echo "
";
    }

    public function getTemplateName()
    {
        return "@BoltProfiler/toolbar/db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 56,  142 => 52,  132 => 49,  129 => 48,  114 => 40,  107 => 37,  86 => 26,  65 => 15,  59 => 16,  34 => 5,  31 => 4,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  199 => 93,  188 => 90,  176 => 86,  173 => 85,  165 => 83,  153 => 57,  116 => 57,  62 => 27,  28 => 3,  357 => 123,  351 => 120,  344 => 119,  341 => 118,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  303 => 106,  300 => 105,  297 => 104,  291 => 102,  278 => 98,  258 => 94,  243 => 92,  231 => 83,  224 => 81,  202 => 94,  187 => 75,  185 => 74,  174 => 65,  156 => 62,  143 => 51,  136 => 50,  104 => 36,  85 => 24,  38 => 6,  161 => 63,  158 => 80,  151 => 59,  140 => 58,  121 => 43,  118 => 49,  113 => 48,  100 => 39,  49 => 9,  27 => 3,  91 => 33,  88 => 25,  63 => 18,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  361 => 152,  358 => 151,  355 => 150,  353 => 121,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  326 => 138,  315 => 110,  312 => 109,  309 => 108,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 101,  283 => 100,  281 => 114,  274 => 97,  265 => 96,  255 => 93,  253 => 100,  248 => 97,  241 => 93,  235 => 85,  229 => 87,  227 => 86,  222 => 83,  216 => 79,  213 => 78,  210 => 77,  208 => 76,  203 => 73,  197 => 69,  194 => 68,  191 => 67,  189 => 66,  184 => 63,  178 => 66,  172 => 64,  170 => 84,  166 => 54,  155 => 47,  152 => 46,  144 => 42,  127 => 35,  94 => 21,  82 => 28,  76 => 34,  70 => 15,  67 => 24,  61 => 13,  79 => 21,  72 => 19,  69 => 17,  54 => 22,  45 => 9,  42 => 7,  40 => 11,  37 => 10,  22 => 1,  164 => 58,  162 => 57,  157 => 56,  145 => 74,  139 => 49,  123 => 44,  120 => 31,  111 => 47,  108 => 37,  101 => 31,  80 => 32,  74 => 14,  66 => 11,  60 => 6,  55 => 11,  52 => 12,  43 => 12,  41 => 19,  35 => 5,  32 => 4,  396 => 175,  387 => 172,  383 => 171,  380 => 158,  375 => 169,  373 => 168,  365 => 162,  363 => 126,  356 => 157,  349 => 153,  342 => 149,  335 => 145,  328 => 139,  321 => 112,  314 => 133,  307 => 128,  295 => 119,  289 => 116,  285 => 114,  282 => 113,  276 => 111,  272 => 108,  269 => 107,  263 => 95,  259 => 103,  257 => 101,  254 => 100,  249 => 98,  246 => 136,  237 => 95,  234 => 94,  232 => 88,  223 => 86,  220 => 85,  212 => 78,  209 => 78,  204 => 75,  201 => 74,  196 => 92,  190 => 76,  182 => 87,  180 => 66,  175 => 65,  167 => 63,  163 => 61,  160 => 57,  154 => 60,  150 => 52,  147 => 75,  141 => 73,  137 => 46,  134 => 54,  131 => 45,  128 => 43,  125 => 42,  119 => 40,  115 => 39,  112 => 36,  110 => 36,  106 => 51,  102 => 40,  99 => 23,  96 => 31,  87 => 41,  84 => 40,  81 => 27,  75 => 19,  57 => 15,  53 => 13,  50 => 22,  47 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  122 => 41,  117 => 41,  109 => 52,  105 => 25,  103 => 43,  98 => 45,  92 => 30,  90 => 42,  83 => 25,  78 => 22,  73 => 33,  71 => 29,  68 => 30,  64 => 23,  58 => 12,  56 => 23,  51 => 13,  46 => 13,  44 => 10,  29 => 3,  26 => 3,);
    }
}
