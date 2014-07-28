<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_f857cbc14f1c6773c58a7cdf0579c1a69fa1d0e638ed7a4f99cfc5aa88cf0790 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : null))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  75 => 28,  70 => 26,  62 => 24,  32 => 6,  26 => 3,  703 => 300,  699 => 299,  694 => 297,  689 => 295,  685 => 293,  683 => 292,  680 => 291,  671 => 285,  667 => 284,  662 => 282,  658 => 281,  651 => 279,  647 => 277,  645 => 276,  642 => 275,  633 => 269,  629 => 268,  624 => 266,  620 => 265,  613 => 263,  609 => 261,  607 => 260,  604 => 258,  595 => 252,  591 => 251,  587 => 250,  583 => 249,  576 => 244,  574 => 243,  571 => 242,  561 => 235,  554 => 233,  550 => 231,  548 => 230,  545 => 229,  536 => 223,  529 => 221,  525 => 219,  523 => 218,  520 => 217,  511 => 211,  507 => 210,  503 => 209,  499 => 208,  495 => 207,  491 => 206,  487 => 205,  482 => 203,  478 => 201,  476 => 200,  473 => 199,  464 => 193,  460 => 192,  456 => 191,  450 => 188,  446 => 186,  444 => 185,  441 => 184,  433 => 179,  427 => 176,  423 => 174,  421 => 173,  418 => 172,  409 => 166,  405 => 165,  401 => 164,  397 => 163,  392 => 161,  388 => 159,  386 => 158,  383 => 157,  374 => 151,  370 => 150,  365 => 148,  361 => 146,  359 => 145,  356 => 144,  346 => 137,  342 => 135,  340 => 134,  337 => 133,  328 => 127,  324 => 126,  320 => 125,  316 => 124,  311 => 122,  307 => 120,  305 => 119,  302 => 118,  293 => 112,  289 => 111,  285 => 110,  281 => 109,  276 => 107,  272 => 105,  270 => 104,  267 => 103,  258 => 97,  254 => 96,  250 => 95,  246 => 94,  242 => 93,  237 => 91,  233 => 89,  231 => 88,  228 => 87,  219 => 81,  215 => 80,  211 => 79,  207 => 78,  203 => 77,  197 => 73,  195 => 72,  192 => 71,  183 => 65,  179 => 64,  175 => 63,  171 => 62,  167 => 61,  162 => 59,  158 => 57,  156 => 56,  153 => 55,  144 => 49,  140 => 48,  136 => 47,  132 => 46,  128 => 45,  124 => 44,  119 => 42,  114 => 40,  110 => 38,  108 => 37,  96 => 30,  92 => 29,  64 => 21,  60 => 19,  34 => 8,  154 => 13,  150 => 11,  133 => 9,  116 => 8,  113 => 7,  98 => 4,  90 => 3,  67 => 1,  61 => 21,  27 => 18,  126 => 58,  120 => 56,  117 => 55,  111 => 6,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  71 => 23,  66 => 25,  51 => 15,  46 => 14,  42 => 12,  38 => 9,  25 => 5,  105 => 36,  97 => 35,  93 => 37,  89 => 33,  79 => 29,  72 => 22,  69 => 21,  63 => 19,  58 => 18,  55 => 17,  53 => 15,  50 => 15,  44 => 19,  39 => 10,  37 => 9,  30 => 5,  24 => 2,  22 => 2,  19 => 1,);
    }
}
