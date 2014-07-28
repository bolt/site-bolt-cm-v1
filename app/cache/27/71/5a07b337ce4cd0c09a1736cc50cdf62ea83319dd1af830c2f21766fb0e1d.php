<?php

/* @GoogleAnalytics/widget.twig */
class __TwigTemplate_27715a07b337ce4cd0c09a1736cc50cdf62ea83319dd1af830c2f21766fb0e1d extends Twig_Template
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
        echo "<style type=\"text/css\">
#ga-panel1, #ga-panel2, #ga-panel3 {
    display: none;
}
#ga-widget-buttons {
    text-align: center;
    margin: 8px 0;
}
</style>

<h2>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true);
        echo "</h2>

<div class=\"btn-group center\" id=\"ga-widget-buttons\">
    <button class=\"btn btn-small\" data-id='ga-panel1'>Summary</button>
    <button class=\"btn btn-small\" data-id='ga-panel2'>Top pages</button>
    <button class=\"btn btn-small\" data-id='ga-panel3'>Top sources</button>
</div>

<div id=\"ga-panel1\">
<div id=\"chart\" style=\"width: auto; display: inline-block;\"></div>
<table>
    <tr>
        <td>Total pageviews:</td>
        <td>&nbsp; <b>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aggr"]) ? $context["aggr"] : null), "pageviews"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aggr"]) ? $context["aggr"] : null), "pageviewspervisit"), "html", null, true);
        echo " per visit)</b></td>
    </tr>
    <tr>
        <td>Total visitors:</td>
        <td>&nbsp; <b>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aggr"]) ? $context["aggr"] : null), "visitors"), "html", null, true);
        echo "</b></td>
    </tr>
    <tr>
        <td>Time on page:</td>
        <td>&nbsp; <b>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aggr"]) ? $context["aggr"] : null), "timeonpage"), "html", null, true);
        echo " min. </b></td>
    </tr>
    <tr>
        <td>Bounce/Exitrate:</td>
        <td>&nbsp; <b>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aggr"]) ? $context["aggr"] : null), "bouncerate"), "html", null, true);
        echo "% / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aggr"]) ? $context["aggr"] : null), "exitrate"), "html", null, true);
        echo "%</b></td>
    </tr>
</table>
</div><!-- panel1 -->

<div id=\"ga-panel2\">
    <table>
        ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 44
            echo "            <tr>
                <td valign=\"right\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "visits"), "html", null, true);
            echo "&nbsp;</td>
                <td><a href=\"http://";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "host"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "host"), 35);
            echo "</a></td>
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </table>
</div><!-- panel2 -->

<div id=\"ga-panel3\">
    <table>
        ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) ? $context["sources"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 56
            echo "            <tr>
                <td valign=\"right\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "visits"), "html", null, true);
            echo "&nbsp;</td>
                <td>";
            // line 58
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "link")) {
                // line 59
                echo "                    <a href=\"http://";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "host"), "html", null, true);
                echo "\" target=\"_blank\">";
                echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "host"), 35);
                echo "</a></td>
                ";
            } else {
                // line 61
                echo "                    ";
                echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "host"), 35);
                echo "
                ";
            }
            // line 63
            echo "                </td>
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </table>
</div><!-- panel3 -->

<script type=\"text/javascript\">
    jQuery(function(\$) {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day');
        data.addColumn('number', 'Pageviews');
        data.addColumn('number', 'Visitors');
        data.addRows([
            ";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pageviews"]) ? $context["pageviews"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["pageview"]) {
            // line 79
            echo "            [\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pageview"]) ? $context["pageview"] : null), "date"), "html", null, true);
            echo "\", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pageview"]) ? $context["pageview"] : null), "pageviews"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pageview"]) ? $context["pageview"] : null), "visitors"), "html", null, true);
            echo "]";
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                echo ", ";
            }
            // line 80
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageview'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        ]);
        var chart = new google.visualization.AreaChart(document.getElementById('chart'));
        chart.draw(data, {
            width: 300,
            height: 180,
            colors:['#22AADD', '#0099CC'],
            areaOpacity: 0.1,
            hAxis: {textPosition: 'in', showTextEvery: 3, slantedText: true, textStyle: { color: '#058dc7', fontSize: 10 } },
            pointSize: 5,
            chartArea:{left:40,top:5,width:\"266\",height:\"170\"}
        });

    });

    // Events for the buttons
    \$('#ga-widget-buttons button').on('click', function(e) {
        \$('#ga-widget-buttons button').removeClass('active');
        \$(this).addClass('active');

        \$('#ga-panel1, #ga-panel2, #ga-panel3').hide();
        \$('#'+\$(this).data('id')).show();
    });

    \$('#ga-widget-buttons button').first().trigger('click');

</script>
";
    }

    public function getTemplateName()
    {
        return "@GoogleAnalytics/widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 80,  178 => 79,  139 => 63,  119 => 57,  116 => 56,  89 => 45,  86 => 44,  31 => 11,  289 => 108,  284 => 105,  270 => 101,  268 => 100,  261 => 99,  258 => 98,  254 => 97,  250 => 95,  228 => 88,  223 => 86,  212 => 83,  210 => 82,  205 => 81,  199 => 80,  179 => 78,  171 => 75,  161 => 78,  152 => 61,  145 => 52,  140 => 50,  132 => 45,  121 => 40,  92 => 29,  87 => 28,  81 => 26,  64 => 22,  47 => 24,  28 => 5,  24 => 3,  584 => 125,  580 => 124,  577 => 123,  573 => 121,  567 => 119,  565 => 118,  562 => 117,  560 => 116,  554 => 114,  539 => 113,  531 => 182,  525 => 181,  520 => 179,  515 => 178,  510 => 176,  505 => 175,  502 => 174,  498 => 173,  494 => 172,  490 => 171,  486 => 170,  482 => 169,  478 => 168,  474 => 167,  468 => 166,  464 => 165,  460 => 164,  456 => 163,  453 => 162,  447 => 161,  441 => 159,  439 => 158,  434 => 157,  430 => 155,  425 => 152,  423 => 149,  420 => 148,  417 => 147,  412 => 145,  407 => 144,  404 => 143,  401 => 142,  396 => 140,  391 => 139,  388 => 138,  385 => 137,  379 => 134,  376 => 133,  373 => 132,  370 => 131,  367 => 130,  364 => 129,  361 => 112,  356 => 110,  351 => 109,  349 => 108,  342 => 103,  336 => 100,  331 => 99,  329 => 98,  325 => 96,  322 => 95,  317 => 91,  311 => 89,  309 => 88,  306 => 87,  300 => 85,  290 => 83,  288 => 82,  285 => 81,  279 => 80,  273 => 78,  271 => 77,  267 => 75,  259 => 70,  251 => 67,  245 => 92,  236 => 60,  233 => 59,  220 => 55,  218 => 85,  213 => 52,  206 => 51,  196 => 79,  193 => 46,  187 => 38,  177 => 36,  160 => 31,  151 => 29,  148 => 67,  142 => 4,  136 => 187,  134 => 95,  131 => 94,  128 => 44,  125 => 59,  120 => 72,  118 => 50,  115 => 49,  113 => 34,  106 => 44,  98 => 40,  96 => 28,  93 => 46,  88 => 25,  82 => 43,  79 => 25,  76 => 21,  70 => 36,  67 => 23,  37 => 5,  30 => 3,  25 => 1,  63 => 32,  57 => 11,  33 => 4,  291 => 104,  280 => 96,  274 => 93,  269 => 91,  264 => 74,  257 => 85,  253 => 68,  242 => 63,  227 => 56,  222 => 70,  207 => 68,  203 => 81,  201 => 66,  198 => 65,  181 => 64,  174 => 76,  168 => 32,  164 => 56,  159 => 53,  157 => 52,  154 => 51,  137 => 50,  133 => 61,  129 => 46,  123 => 58,  117 => 42,  112 => 55,  109 => 40,  105 => 50,  102 => 42,  97 => 31,  91 => 26,  85 => 24,  80 => 30,  77 => 29,  73 => 24,  66 => 24,  62 => 22,  60 => 21,  56 => 28,  51 => 9,  45 => 7,  43 => 6,  39 => 5,  34 => 9,  32 => 8,  27 => 2,  21 => 2,  19 => 1,);
    }
}
